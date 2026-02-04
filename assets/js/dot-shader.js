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
        this.trailPoints = [];

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

        // Event listeners
        window.addEventListener('resize', () => this.onResize());
        this.container.addEventListener('mousemove', (e) => this.onMouseMove(e));
        this.container.addEventListener('touchmove', (e) => this.onTouchMove(e));

        // Start animation
        this.animate();
    }

    createMouseTrailTexture() {
        this.mouseTrailCanvas = document.createElement('canvas');
        this.mouseTrailCanvas.width = 512;
        this.mouseTrailCanvas.height = 512;
        this.mouseTrailCtx = this.mouseTrailCanvas.getContext('2d');
        this.mouseTrailCtx.fillStyle = '#000000';
        this.mouseTrailCtx.fillRect(0, 0, 512, 512);

        this.mouseTrailTexture = new THREE.CanvasTexture(this.mouseTrailCanvas);
        this.mouseTrailTexture.needsUpdate = true;
    }

    updateMouseTrail() {
        const ctx = this.mouseTrailCtx;
        const canvas = this.mouseTrailCanvas;

        // Fade existing trail
        ctx.fillStyle = 'rgba(0, 0, 0, 0.03)';
        ctx.fillRect(0, 0, canvas.width, canvas.height);

        // Add new point
        const x = this.mouse.x * canvas.width;
        const y = (1 - this.mouse.y) * canvas.height;

        // Draw bright spot at mouse position
        const gradient = ctx.createRadialGradient(x, y, 0, x, y, 50);
        gradient.addColorStop(0, 'rgba(255, 255, 255, 0.8)');
        gradient.addColorStop(0.5, 'rgba(255, 255, 255, 0.2)');
        gradient.addColorStop(1, 'rgba(255, 255, 255, 0)');

        ctx.fillStyle = gradient;
        ctx.beginPath();
        ctx.arc(x, y, 50, 0, Math.PI * 2);
        ctx.fill();

        this.mouseTrailTexture.needsUpdate = true;
    }

    createShaderMaterial() {
        // Vertex shader
        const vertexShader = `
            void main() {
                gl_Position = vec4(position.xy, 0.0, 1.0);
            }
        `;

        // Fragment shader
        const fragmentShader = `
            uniform float time;
            uniform vec2 resolution;
            uniform vec3 dotColor;
            uniform vec3 bgColor;
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

                // Calculate distance from the center of each cell
                float baseDot = sdfCircle(gridUv, 0.25);

                // Screen mask
                float screenMask = smoothstep(0.0, 1.0, 1.0 - uv.y);
                vec2 centerDisplace = vec2(0.7, 1.1);
                float circleMaskCenter = length(uv - centerDisplace);
                float circleMaskFromCenter = smoothstep(0.5, 1.0, circleMaskCenter);
                
                float combinedMask = screenMask * circleMaskFromCenter;
                float circleAnimatedMask = sin(time * 2.0 + circleMaskCenter * 10.0);

                // Mouse trail effect
                float mouseInfluence = texture2D(mouseTrail, gridUvCenterInScreenCoords).r;
                
                float scaleInfluence = max(mouseInfluence * 0.5, circleAnimatedMask * 0.3);

                // Create dots with animated scale
                float dotSize = min(pow(circleMaskCenter, 2.0) * 0.3, 0.3);

                float sdfDot = sdfCircle(gridUv, dotSize * (1.0 + scaleInfluence * 0.5));

                float smoothDot = smoothstep(0.05, 0.0, sdfDot);

                float opacityInfluence = max(mouseInfluence * 50.0, circleAnimatedMask * 0.5);

                // Mix background color with dot color
                vec3 composition = mix(bgColor, dotColor, smoothDot * combinedMask * dotOpacity * (1.0 + opacityInfluence));

                gl_FragColor = vec4(composition, 1.0);
            }
        `;

        this.material = new THREE.ShaderMaterial({
            uniforms: {
                time: { value: 0 },
                resolution: { value: new THREE.Vector2(this.container.offsetWidth, this.container.offsetHeight) },
                dotColor: { value: new THREE.Color('#FFFFFF') },
                bgColor: { value: new THREE.Color('#0a0a0a') },
                mouseTrail: { value: this.mouseTrailTexture },
                rotation: { value: 0 },
                gridSize: { value: 80 },
                dotOpacity: { value: 0.04 }
            },
            vertexShader,
            fragmentShader
        });
    }

    onMouseMove(e) {
        const rect = this.container.getBoundingClientRect();
        this.mouseTarget.x = (e.clientX - rect.left) / rect.width;
        this.mouseTarget.y = 1 - (e.clientY - rect.top) / rect.height;
    }

    onTouchMove(e) {
        if (e.touches.length > 0) {
            const rect = this.container.getBoundingClientRect();
            this.mouseTarget.x = (e.touches[0].clientX - rect.left) / rect.width;
            this.mouseTarget.y = 1 - (e.touches[0].clientY - rect.top) / rect.height;
        }
    }

    onResize() {
        const width = this.container.offsetWidth;
        const height = this.container.offsetHeight;

        this.renderer.setSize(width, height);
        this.material.uniforms.resolution.value.set(width, height);
    }

    animate() {
        requestAnimationFrame(() => this.animate());

        // Smooth mouse interpolation
        this.mouse.x += (this.mouseTarget.x - this.mouse.x) * 0.1;
        this.mouse.y += (this.mouseTarget.y - this.mouse.y) * 0.1;

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
    // Check if Three.js is loaded
    if (typeof THREE === 'undefined') {
        console.warn('Three.js not loaded, dot shader background disabled');
        return;
    }

    const container = document.getElementById('dot-shader-bg');
    if (container) {
        new DotShaderBackground('dot-shader-bg');
    }
});
