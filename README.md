# TransiQ Landing Page

> **AI-Powered Transport & Export Docs**

Landing page para TransiQ, un SaaS B2B que automatiza la creación de documentos CMR en el sector automotriz usando IA.

---

## 🗂️ Estructura de archivos

```
├── index.php           # Página principal (landing)
├── precios.php         # Planes de abonamiento
├── contacto.php        # Formulario de contacto
├── includes/
│   ├── header.php      # Navegación y head
│   └── footer.php      # Pie de página
├── assets/
│   └── images/         # Imágenes generadas
├── .htaccess           # Configuración Apache
└── README.md           # Este archivo
```

---

## 🎨 Stack técnico

| Tecnología | Uso |
|------------|-----|
| PHP 8+ | Includes y lógica de servidor |
| Tailwind CSS (CDN) | Estilos y responsive design |
| Font Awesome 6 (CDN) | Iconos |
| Google Fonts (Inter) | Tipografía |

---

## 🚀 Instalación

1. **Subir archivos** a tu servidor web con PHP 8+
2. **Verificar** que Apache tiene `mod_rewrite` habilitado
3. **Acceder** a `https://tudominio.com/`

### Desarrollo local (XAMPP/MAMP)

```bash
# Mover al directorio htdocs
cp -r LANDING /xampp/htdocs/transiq

# Acceder en navegador
http://localhost/transiq/
```

---

## 🎯 Páginas incluidas

### index.php (Landing)
- Hero con propuesta de valor
- Sección "Cómo funciona" (3 pasos)
- Sección "Por qué TransiQ" (beneficios + KPIs)
- Grid de 6 funcionalidades
- CTA final

### precios.php
- 4 planes: MICRO, SMALL, PRO, ENTERPRISE
- Información de rollover y máximos
- Créditos extra (CMR €1,50 / Proforma €0,80)

### contacto.php
- Formulario B2B completo
- Selector de tipo de consulta
- Información de contacto lateral

---

## 🎨 Paleta de colores

| Color | Hex | Uso |
|-------|-----|-----|
| Background | `#0a0a0f` | Fondo principal |
| Cards | `#1a1a24` | Tarjetas y secciones |
| Primary | `#1a3f6e` | Color corporativo |
| Accent | `#3b82f6` | CTAs y highlights |

---

## 📱 Responsive

- Mobile-first design
- Breakpoints: 640px, 768px, 1024px, 1280px
- Menú hamburguesa funcional en móvil

---

## 📧 Contacto

- **Email**: info@transiq.net
- **Web**: transiq.io

---

© <?php echo date('Y'); ?> TransiQ. Todos los derechos reservados.
