/**
 * Custom Cursor
 * A minimalist glowing dot cursor that follows the mouse
 */

document.addEventListener('DOMContentLoaded', () => {
    // Create cursor element
    const cursor = document.createElement('div');
    cursor.id = 'custom-cursor';
    document.body.appendChild(cursor);

    // Add styles dynamically
    const style = document.createElement('style');
    style.textContent = `
        body {
            cursor: none; /* Hide default cursor */
        }
        
        a, button, input, [role="button"] {
            cursor: none; /* Ensure it stays hidden on interactive elements */
        }

        #custom-cursor {
            position: fixed;
            top: 0;
            left: 0;
            width: 12px;
            height: 12px;
            background-color: #ec4899; /* Pink accent contrast */
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            transform: translate(-50%, -50%);
            transition: width 0.2s, height 0.2s, background-color 0.2s, transform 0.05s linear;
            box-shadow: 0 0 10px rgba(236, 72, 153, 0.5);
            mix-blend-mode: difference; /* Ensures visible contrast on all backgrounds */
        }

        /* Hover effect */
        body.hovering #custom-cursor {
            width: 20px;
            height: 20px;
            background-color: #fff;
            mix-blend-mode: normal;
            opacity: 0.8;
        }
    `;
    document.head.appendChild(style);

    // Mouse movement
    document.addEventListener('mousemove', (e) => {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
    });

    // Hover effects on clickable elements
    const clickables = document.querySelectorAll('a, button, input, select, textarea, [role="button"]');

    clickables.forEach(el => {
        el.addEventListener('mouseenter', () => document.body.classList.add('hovering'));
        el.addEventListener('mouseleave', () => document.body.classList.remove('hovering'));
    });

    // Handle dynamic elements (optional, using MutationObserver if needed, but simple delegation is lighter)
    document.addEventListener('mouseover', (e) => {
        if (e.target.tagName === 'A' || e.target.tagName === 'BUTTON' || e.target.closest('a') || e.target.closest('button')) {
            document.body.classList.add('hovering');
        } else {
            document.body.classList.remove('hovering');
        }
    });
});
