/**
 * Dot Shader Background - Vanilla JS version
 * Adapted from React Three.js component
 */

class DotShaderBackground {
    constructor(containerId) {
        this.container = document.getElementById(containerId);
        if (!this.container) return;

        this.scene = null;
        this.camera = null;
        this.renderer = null;
        this.material = null;
        this.mesh = null;
        this.clock = new THREE.Clock();
        this.mouse = { x: 0.5, y: 0.5 };
        this.mouseTarget = { x: 0.5, y: 0.5 };
        this.mouseTrailCanvas = null;
        this.mouseTrailCtx = null;
        this.mouseTrailTexture = null;

        this.init();
    }

    init() {
        // Create renderer
        this.renderer = new THREE.WebGLRenderer({
            antialias: true,
            alpha: true
        });
        this.renderer.setSize(this.container.offsetWidth, this.container.offsetHeight);
        this.renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        this.renderer.domElement.style.position = 'absolute';
        this.renderer.domElement.style.top = '0';
        this.renderer.domElement.style.left = '0';
        this.renderer.domElement.style.width = '100%';
        this.renderer.domElement.style.height = '100%';
        this.renderer.domElement.style.pointerEvents = 'none';
        this.container.appendChild(this.renderer.domElement);

        // Create scene and camera
        this.scene = new THREE.Scene();
        this.camera = new THREE.OrthographicCamera(-1, 1, 1, -1, 0.1, 10);
        this.camera.position.z = 1;

        // Create mouse trail canvas
        this.createMouseTrailTexture();

        // Create shader material
        this.createShaderMaterial();

        // Create fullscreen quad
        const geometry = new THREE.PlaneGeometry(2, 2);
        this.mesh = new THREE.Mesh(geometry, this.material);
        this.scene.add(this.mesh);

        // Event listeners - track on WINDOW level
        window.addEventListener('resize', () => this.onResize());
        window.addEventListener('mousemove', (e) => this.onMouseMove(e));
        window.addEventListener('touchmove', (e) => this.onTouchMove(e), { passive: true });

        // Start animation
        this.animate();
    }

    createMouseTrailTexture() {
        this.mouseTrailCanvas = document.createElement('canvas');
        this.mouseTrailCanvas.width = 256;
        this.mouseTrailCanvas.height = 256;
        this.mouseTrailCtx = this.mouseTrailCanvas.getContext('2d');
        this.mouseTrailCtx.fillStyle = '#000000';
        this.mouseTrailCtx.fillRect(0, 0, 256, 256);

        this.mouseTrailTexture = new THREE.CanvasTexture(this.mouseTrailCanvas);
        this.mouseTrailTexture.needsUpdate = true;
    }

    updateMouseTrail() {
        const ctx = this.mouseTrailCtx;
        const canvas = this.mouseTrailCanvas;

        // Slow fade for longer trail
        ctx.fillStyle = 'rgba(0, 0, 0, 0.02)';
        ctx.fillRect(0, 0, canvas.width, canvas.height);

        // Calculate position in canvas space
        const x = this.mouse.x * canvas.width;
        const y = (1 - this.mouse.y) * canvas.height;

        // Draw bright spot at mouse position
        const gradient = ctx.createRadialGradient(x, y, 0, x, y, 35);
        gradient.addColorStop(0, 'rgba(255, 255, 255, 1.0)');
        gradient.addColorStop(0.3, 'rgba(255, 255, 255, 0.6)');
        gradient.addColorStop(0.6, 'rgba(255, 255, 255, 0.2)');
        gradient.addColorStop(1, 'rgba(255, 255, 255, 0)');

        ctx.fillStyle = gradient;
        ctx.beginPath();
        ctx.arc(x, y, 35, 0, Math.PI * 2);
        ctx.fill();

        this.mouseTrailTexture.needsUpdate = true;
    }

    createShaderMaterial() {
        const vertexShader = `
            void main() {
                gl_Position = vec4(position.xy, 0.0, 1.0);
            }
        `;

        const fragmentShader = `
            uniform float time;
            uniform vec2 resolution;
            uniform vec3 dotColor;
            uniform vec3 bgColor;
            uniform vec3 accentColor;
            uniform sampler2D mouseTrail;
            uniform float rotation;
            uniform float gridSize;
            uniform float dotOpacity;

            vec2 rotate(vec2 uv, float angle) {
                float s = sin(angle);
                float c = cos(angle);
                mat2 rotationMatrix = mat2(c, -s, s, c);
                return rotationMatrix * (uv - 0.5) + 0.5;
            }

            vec2 coverUv(vec2 uv) {
                vec2 s = resolution.xy / max(resolution.x, resolution.y);
                vec2 newUv = (uv - 0.5) * s + 0.5;
                return clamp(newUv, 0.0, 1.0);
            }

            float sdfCircle(vec2 p, float r) {
                return length(p - 0.5) - r;
            }

            void main() {
                vec2 screenUv = gl_FragCoord.xy / resolution;
                vec2 uv = coverUv(screenUv);

                vec2 rotatedUv = rotate(uv, rotation);

                // Create a grid
                vec2 gridUv = fract(rotatedUv * gridSize);
                vec2 gridUvCenterInScreenCoords = rotate((floor(rotatedUv * gridSize) + 0.5) / gridSize, -rotation);

                // Screen mask - gradient from bottom-right
                vec2 centerDisplace = vec2(0.7, 1.1);
                float circleMaskCenter = length(uv - centerDisplace);
                float circleMaskFromCenter = smoothstep(0.3, 1.2, circleMaskCenter);
                
                // Animated wave
                float circleAnimatedMask = sin(time * 1.5 + circleMaskCenter * 8.0) * 0.5 + 0.5;

                // Mouse trail effect - SAMPLE THE TEXTURE
                float mouseInfluence = texture2D(mouseTrail, uv).r;
                
                // Combine influences - mouse effect is STRONGER
                float scaleInfluence = mouseInfluence * 2.0 + circleAnimatedMask * 0.3;

                // Base dot size based on distance from corner
                float baseDotSize = min(pow(circleMaskCenter, 1.5) * 0.25, 0.25);
                
                // Scale dots based on mouse + animation
                float dotSize = baseDotSize * (1.0 + scaleInfluence * 0.8);

                float sdfDot = sdfCircle(gridUv, dotSize);
                float smoothDot = smoothstep(0.02, 0.0, sdfDot);

                // Opacity boost from mouse
                float opacityBoost = mouseInfluence * 8.0 + circleAnimatedMask * 0.3;
                float finalOpacity = dotOpacity * (1.0 + opacityBoost);

                // Color: blend between white and accent based on mouse
                vec3 dotFinalColor = mix(dotColor, accentColor, mouseInfluence * 0.8);

                // Final composition
                vec3 composition = mix(bgColor, dotFinalColor, smoothDot * circleMaskFromCenter * finalOpacity);

                gl_FragColor = vec4(composition, 1.0);
            }
        `;

        // CORRECT: uniform 'resolution' must account for pixelRatio!
        const pixelRatio = this.renderer.getPixelRatio();
        const width = this.container.offsetWidth * pixelRatio;
        const height = this.container.offsetHeight * pixelRatio;

        this.material = new THREE.ShaderMaterial({
            uniforms: {
                time: { value: 0 },
                resolution: { value: new THREE.Vector2(width, height) },
                dotColor: { value: new THREE.Color('#FFFFFF') },
                bgColor: { value: new THREE.Color('#0a0a0a') },
                accentColor: { value: new THREE.Color('#ec4899') },
                mouseTrail: { value: this.mouseTrailTexture },
                rotation: { value: 0 },
                gridSize: { value: 100 },
                dotOpacity: { value: 0.06 }
            },
            vertexShader,
            fragmentShader
        });
    }

    onMouseMove(e) {
        const rect = this.container.getBoundingClientRect();

        // Only update if mouse is in the hero section area
        if (e.clientY < rect.bottom) {
            this.mouseTarget.x = e.clientX / window.innerWidth;
            this.mouseTarget.y = 1 - (e.clientY / rect.height);
        }
    }

    onTouchMove(e) {
        if (e.touches.length > 0) {
            const rect = this.container.getBoundingClientRect();
            this.mouseTarget.x = e.touches[0].clientX / window.innerWidth;
            this.mouseTarget.y = 1 - (e.touches[0].clientY / rect.height);
        }
    }

    onResize() {
        const width = this.container.offsetWidth;
        const height = this.container.offsetHeight;

        // Resize renderer checks devicePixelRatio internally
        this.renderer.setSize(width, height);

        // Update shader uniforms using PHYSICAL pixels
        const pixelRatio = this.renderer.getPixelRatio();
        this.material.uniforms.resolution.value.set(width * pixelRatio, height * pixelRatio);
    }

    animate() {
        requestAnimationFrame(() => this.animate());

        // Smooth mouse interpolation - faster response
        this.mouse.x += (this.mouseTarget.x - this.mouse.x) * 0.15;
        this.mouse.y += (this.mouseTarget.y - this.mouse.y) * 0.15;

        // Update mouse trail
        this.updateMouseTrail();

        // Update uniforms
        this.material.uniforms.time.value = this.clock.getElapsedTime();

        // Render
        this.renderer.render(this.scene, this.camera);
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', function () {
    if (typeof THREE === 'undefined') {
        console.warn('Three.js not loaded, dot shader background disabled');
        return;
    }

    const container = document.getElementById('dot-shader-bg');
    if (container) {
        new DotShaderBackground('dot-shader-bg');
    }
});
