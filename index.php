<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lima Times - El Diario Digital del Perú</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-red: #C41E3A;
            --secondary-gold: #FFD700;
            --dark-text: #1a1a1a;
            --light-gray: #f8f8f8;
            --medium-gray: #e5e5e5;
            --border-gray: #ddd;
        }

        body {
            font-family: 'Georgia', 'Times New Roman', serif;
            line-height: 1.6;
            color: var(--dark-text);
            background-color: white;
        }

        /* Header */
        .header-top {
            background: var(--dark-text);
            color: white;
            padding: 8px 0;
            font-size: 12px;
        }

        .header-top .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .date-weather {
            display: flex;
            gap: 20px;
        }

        .user-actions a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
        }

        .main-header {
            border-bottom: 3px solid var(--primary-red);
            padding: 20px 0;
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
        }

        .logo {
            font-size: 48px;
            font-weight: bold;
            color: var(--primary-red);
            text-decoration: none;
            font-family: 'Old English Text MT', 'Times New Roman', serif;
            letter-spacing: 2px;
        }

        .tagline {
            font-size: 14px;
            color: #666;
            margin-top: 5px;
            font-style: italic;
        }

        /* Navigation */
        .nav-bar {
            background: var(--light-gray);
            border-bottom: 1px solid var(--border-gray);
            padding: 15px 0;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .nav-menu {
            display: flex;
            justify-content: center;
            list-style: none;
            gap: 40px;
        }

        .nav-menu a {
            text-decoration: none;
            color: var(--dark-text);
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 10px 0;
            border-bottom: 2px solid transparent;
            transition: border-bottom 0.3s;
        }

        .nav-menu a:hover,
        .nav-menu a.active {
            border-bottom: 2px solid var(--primary-red);
        }

        /* Main Content */
        .main-content {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
        }

        /* Featured Article */
        .featured-article {
            border-bottom: 2px solid var(--medium-gray);
            padding-bottom: 30px;
            margin-bottom: 30px;
        }

        .featured-article h1 {
            font-size: 36px;
            line-height: 1.2;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .featured-article .meta {
            color: #666;
            font-size: 14px;
            margin-bottom: 20px;
            border-bottom: 1px solid var(--medium-gray);
            padding-bottom: 10px;
        }

        .featured-article img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .featured-article p {
            font-size: 18px;
            line-height: 1.7;
            margin-bottom: 15px;
        }

        /* Article Grid */
        .articles-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        .article-card {
            border-bottom: 1px solid var(--medium-gray);
            padding-bottom: 20px;
        }

        .article-card h3 {
            font-size: 20px;
            margin-bottom: 10px;
            line-height: 1.3;
        }

        .article-card h3 a {
            color: var(--dark-text);
            text-decoration: none;
        }

        .article-card h3 a:hover {
            color: var(--primary-red);
        }

        .article-card .meta {
            color: #666;
            font-size: 12px;
            margin-bottom: 10px;
        }

        .article-card p {
            font-size: 14px;
            line-height: 1.5;
        }

        /* Sidebar */
        .sidebar {
            padding-left: 20px;
        }

        .sidebar-section {
            margin-bottom: 40px;
        }

        .sidebar-section h3 {
            font-size: 18px;
            border-bottom: 2px solid var(--primary-red);
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .subscription-box {
            background: var(--primary-red);
            color: white;
            padding: 30px;
            text-align: center;
            margin-bottom: 30px;
        }

        .subscription-box h3 {
            border: none;
            color: white;
            margin-bottom: 15px;
        }

        .subscription-box p {
            margin-bottom: 20px;
            font-size: 14px;
        }

        .btn {
            background: white;
            color: var(--primary-red);
            padding: 12px 24px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 4px;
            display: inline-block;
            transition: all 0.3s;
        }

        .btn:hover {
            background: var(--secondary-gold);
            color: var(--dark-text);
        }

        .popular-articles {
            list-style: none;
        }

        .popular-articles li {
            padding: 10px 0;
            border-bottom: 1px solid var(--medium-gray);
            font-size: 14px;
        }

        .popular-articles li:last-child {
            border-bottom: none;
        }

        .popular-articles a {
            color: var(--dark-text);
            text-decoration: none;
        }

        .popular-articles a:hover {
            color: var(--primary-red);
        }

        /* Subscription Plans Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }

        .modal-content {
            background-color: white;
            margin: 5% auto;
            padding: 40px;
            width: 90%;
            max-width: 800px;
            border-radius: 8px;
            position: relative;
        }

        .close {
            position: absolute;
            right: 20px;
            top: 15px;
            font-size: 30px;
            cursor: pointer;
        }

        .plans-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 30px;
        }

        .plan-card {
            border: 2px solid var(--medium-gray);
            padding: 30px 20px;
            text-align: center;
            border-radius: 8px;
            transition: all 0.3s;
        }

        .plan-card.featured {
            border-color: var(--primary-red);
            background: var(--light-gray);
        }

        .plan-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .plan-card h4 {
            font-size: 24px;
            margin-bottom: 10px;
            color: var(--primary-red);
        }

        .plan-card .price {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .plan-card .period {
            color: #666;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .plan-card ul {
            list-style: none;
            margin-bottom: 30px;
            text-align: left;
        }

        .plan-card li {
            padding: 8px 0;
            border-bottom: 1px solid var(--medium-gray);
            font-size: 14px;
        }

        .plan-card li::before {
            content: "✓ ";
            color: var(--primary-red);
            font-weight: bold;
        }

        /* Footer */
        .footer {
            background: var(--dark-text);
            color: white;
            padding: 40px 0;
            margin-top: 60px;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            margin-bottom: 30px;
        }

        .footer-section h4 {
            color: var(--secondary-gold);
            margin-bottom: 15px;
            font-size: 16px;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section a {
            color: #ccc;
            text-decoration: none;
            font-size: 14px;
            display: block;
            padding: 5px 0;
        }

        .footer-section a:hover {
            color: var(--secondary-gold);
        }

        .footer-bottom {
            border-top: 1px solid #444;
            padding-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #888;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .main-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .articles-grid {
                grid-template-columns: 1fr;
            }

            .nav-menu {
                flex-wrap: wrap;
                gap: 20px;
            }

            .logo {
                font-size: 32px;
            }

            .plans-grid {
                grid-template-columns: 1fr;
            }

            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
<body>
    <!-- Header Top -->
    <div class="header-top">
        <div class="container">
            <div class="date-weather">
                <span id="current-date"></span>
                <span>Lima, Perú | 22°C</span>
            </div>
            <div class="user-actions">
                <a href="#" onclick="openModal()">Suscríbete</a>
                <a href="#">Inicia Sesión</a>
                <a href="#">Registro</a>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="main-header">
        <div class="header-container">
            <a href="#" class="logo">Lima Times</a>
            <p class="tagline">"La Verdad que Ilumina el Perú"</p>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="nav-bar">
        <div class="nav-container">
            <ul class="nav-menu">
                <li><a href="#" class="active">Inicio</a></li>
                <li><a href="#">Política</a></li>
                <li><a href="#">Economía</a></li>
                <li><a href="#">Deportes</a></li>
                <li><a href="#">Cultura</a></li>
                <li><a href="#">Lima</a></li>
                <li><a href="#">Regiones</a></li>
                <li><a href="#">Internacional</a></li>
                <li><a href="#">Opinión</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <main>
            <!-- Featured Article -->
            <article class="featured-article">
                <h1>Nuevo Metro de Lima: Línea 3 Promete Revolucionar el Transporte Público</h1>
                <div class="meta">
                    Por María Gonzales | 9 de Septiembre, 2025 | Lima, Perú
                </div>
                <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDgwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI4MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjBmMGYwIi8+CjxwYXRoIGQ9Ik0xMDAgMjUwSDcwMFYyMDBIMTAwVjI1MFoiIGZpbGw9IiNDNDFFM0EiLz4KPHN2ZyB4PSIzNzUiIHk9IjEyNSIgd2lkdGg9IjUwIiBoZWlnaHQ9IjUwIiBmaWxsPSIjQzQxRTNBIj4KICA8cmVjdCB3aWR0aD0iNTAiIGhlaWdodD0iNTAiIHJ4PSIyNSIvPgo8L3N2Zz4KPHRleHQgeD0iNDAwIiB5PSIxNjAiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGZpbGw9IiNDNDFFM0EiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxOCI+TUVUUk8gTElNQTwvdGV4dD4KPC9zdmc+" alt="Metro de Lima Línea 3">
                <p>La construcción de la Línea 3 del Metro de Lima marca un hito histórico en el desarrollo del transporte público de la capital peruana. Con una inversión de más de 5 mil millones de dólares, este proyecto conectará 35 estaciones desde el Callao hasta Ate, beneficiando directamente a más de 2 millones de limeños.</p>
                <p>El proyecto, que contará con tecnología de punta importada desde Alemania y Japón, promete reducir los tiempos de viaje en un 40% y las emisiones de CO2 en un 30%. La obra, que iniciará en octubre de 2025, generará más de 15,000 empleos directos durante su construcción.</p>
            </article>

            <!-- Articles Grid -->
            <div class="articles-grid">
                <article class="article-card">
                    <h3><a href="#">Exportaciones de Café Peruano Alcanzan Récord Histórico</a></h3>
                    <div class="meta">Economía | Hace 2 horas</div>
                    <p>Las exportaciones de café peruano registraron un crecimiento del 15% en el primer semestre del año, posicionando al Perú como el segundo exportador de café orgánico en América Latina.</p>
                </article>

                <article class="article-card">
                    <h3><a href="#">Universitario Clasifica a Semifinales de Copa Libertadores</a></h3>
                    <div class="meta">Deportes | Hace 4 horas</div>
                    <p>La "U" logró una histórica victoria 2-1 contra Palmeiras en el Estadio Nacional, asegurando su pase a las semifinales de la Copa Libertadores después de 22 años.</p>
                </article>

                <article class="article-card">
                    <h3><a href="#">Machu Picchu Recibe Nuevas Medidas de Conservación</a></h3>
                    <div class="meta">Cultura | Hace 6 horas</div>
                    <p>El Ministerio de Cultura anunció una inversión de 50 millones de soles para implementar nuevas tecnologías de conservación en la ciudadela inca más visitada del mundo.</p>
                </article>

                <article class="article-card">
                    <h3><a href="#">Congreso Debate Reforma Tributaria para PyMEs</a></h3>
                    <div class="meta">Política | Hace 8 horas</div>
                    <p>La propuesta busca reducir la carga tributaria a las pequeñas y medianas empresas en un 25%, con el objetivo de formalizar la economía y generar más empleos.</p>
                </article>
            </div>
        </main>

        <aside class="sidebar">
            <!-- Subscription Box -->
            <div class="subscription-box">
                <h3>Únete a Lima Times</h3>
                <p>Acceso ilimitado a noticias de calidad, análisis profundo y contenido exclusivo del Perú y el mundo.</p>
                <a href="#" onclick="openModal()" class="btn">Suscríbete Ahora</a>
            </div>

            <!-- Popular Articles -->
            <div class="sidebar-section">
                <h3>Más Leídas</h3>
                <ul class="popular-articles">
                    <li><a href="#">Crisis política: Congreso evalúa moción de censura</a></li>
                    <li><a href="#">Dólar alcanza nuevo máximo histórico en Perú</a></li>
                    <li><a href="#">Descubren nueva especie de rana en Amazonía peruana</a></li>
                    <li><a href="#">Lima será sede del próximo Foro Económico Mundial</a></li>
                    <li><a href="#">Gastronomía peruana conquista mercado asiático</a></li>
                </ul>
            </div>

            <!-- Weather Widget -->
            <div class="sidebar-section">
                <h3>Clima en Lima</h3>
                <div style="background: var(--light-gray); padding: 20px; text-align: center;">
                    <div style="font-size: 24px; margin-bottom: 10px;">22°C</div>
                    <div style="color: #666;">Parcialmente nublado</div>
                    <div style="margin-top: 10px; font-size: 12px; color: #888;">
                        Máx: 25°C | Mín: 18°C
                    </div>
                </div>
            </div>
        </aside>
    </div>

    <!-- Subscription Modal -->
    <div id="subscriptionModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 style="text-align: center; margin-bottom: 20px; color: var(--primary-red);">Planes de Suscripción</h2>
            <p style="text-align: center; margin-bottom: 30px;">Elige el plan que mejor se adapte a tus necesidades</p>
            
            <div class="plans-grid">
                <div class="plan-card">
                    <h4>Básico</h4>
                    <div class="price">S/. 15</div>
                    <div class="period">por mes</div>
                    <ul>
                        <li>Acceso ilimitado a noticias</li>
                        <li>Newsletter diario</li>
                        <li>Archivo de últimos 30 días</li>
                        <li>Sin anuncios</li>
                    </ul>
                    <a href="#" class="btn">Elegir Plan</a>
                </div>

                <div class="plan-card featured">
                    <h4>Premium</h4>
                    <div class="price">S/. 25</div>
                    <div class="period">por mes</div>
                    <ul>
                        <li>Todo lo del plan Básico</li>
                        <li>Análisis exclusivos</li>
                        <li>Podcasts premium</li>
                        <li>Eventos exclusivos</li>
                        <li>Archivo completo</li>
                    </ul>
                    <a href="#" class="btn">Elegir Plan</a>
                </div>

                <div class="plan-card">
                    <h4>Empresarial</h4>
                    <div class="price">S/. 50</div>
                    <div class="period">por mes</div>
                    <ul>
                        <li>Todo lo del plan Premium</li>
                        <li>5 cuentas de usuario</li>
                        <li>Reportes de mercado</li>
                        <li>Consultoría personalizada</li>
                        <li>API de noticias</li>
                    </ul>
                    <a href="#" class="btn">Elegir Plan</a>
                </div>
            </div>

            <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid var(--medium-gray); text-align: center; font-size: 14px; color: #666;">
                <p><strong>Servicios Adicionales Exclusivos:</strong></p>
                <p>• App móvil Lima Times (iOS/Android) • Juegos y crucigramas diarios • Club de lectura virtual • Masterclasses con expertos peruanos</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-grid">
                <div class="footer-section">
                    <h4>Secciones</h4>
                    <ul>
                        <li><a href="#">Política</a></li>
                        <li><a href="#">Economía</a></li>
                        <li><a href="#">Deportes</a></li>
                        <li><a href="#">Cultura</a></li>
                        <li><a href="#">Internacional</a></li>
                        <li><a href="#">Tecnología</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Servicios</h4>
                    <ul>
                        <li><a href="#" onclick="openModal()">Suscripciones</a></li>
                        <li><a href="#">Newsletter</a></li>
                        <li><a href="#">App Móvil</a></li>
                        <li><a href="#">Podcasts</a></li>
                        <li><a href="#">Archivo Digital</a></li>
                        <li><a href="#">RSS</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Empresa</h4>
                    <ul>
                        <li><a href="#">Sobre Nosotros</a></li>
                        <li><a href="#">Trabaja con Nosotros</a></li>
                        <li><a href="#">Contacto</a></li>
                        <li><a href="#">Publicidad</a></li>
                        <li><a href="#">Inversores</a></li>
                        <li><a href="#">Ética Periodística</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Términos de Uso</a></li>
                        <li><a href="#">Política de Privacidad</a></li>
                        <li><a href="#">Cookies</a></li>
                        <li><a href="#">Derechos de Autor</a></li>
                        <li><a href="#">Accesibilidad</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Lima Times. Todos los derechos reservados. | Fundado en Lima, Perú</p>
            </div>
        </div>
    </footer>

    <script>
        // Set current date
        function updateDate() {
            const options = { 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric',
                weekday: 'long'
            };
            const today = new Date().toLocaleDateString('es-PE', options);
            document.getElementById('current-date').textContent = today;
        }

        // Modal functions
        function openModal() {
            document.getElementById('subscriptionModal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('subscriptionModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('subscriptionModal');
            if (event.target == modal) {
                closeModal();
            }
        }

        // Smooth scrolling for navigation
        document.addEventListener('DOMContentLoaded', function() {
            updateDate();
            
            // Add click animations to buttons
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    if (this.getAttribute('href') === '#') {
                        e.preventDefault();
                    }
                    
                    // Add ripple effect
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;
                    
                    ripple.style.cssText = `
                        position: absolute;
                        width: ${size}px;
                        height: ${size}px;
                        left: ${x}px;
                        top: ${y}px;
                        background: rgba(255,255,255,0.3);
                        border-radius: 50%;
                        transform: scale(0);
                        animation: ripple 0.6s ease-out;
                        pointer-events: none;
                    `;
                    
                    this.style.position = 'relative';
                    this.style.overflow = 'hidden';
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });
            
            // Add CSS for ripple animation
            const style = document.createElement('style');
            style.textContent = `
                @keyframes ripple {
                    to {
                        transform: scale(2);
                        opacity: 0;
                    }
                }
            `;
            document.head.appendChild(style);
        });

        // Simulate real-time updates
        setInterval(() => {
            const articles = document.querySelectorAll('.article-card .meta');
            articles.forEach(meta => {
                if (meta.textContent.includes('Hace')) {
                    const timeMatch = meta.textContent.match(/Hace (\d+) horas?/);
                    if (timeMatch) {
                        const hours = parseInt(timeMatch[1]);
                        if (Math.random() < 0.1) { // 10% chance to update
                            meta.innerHTML = meta.innerHTML.replace(`Hace ${hours} horas?`, `Hace ${hours + 1} horas`);
                        }
                    }
                }
            });
        }, 60000); // Update every minute
    </script>
</body>
</html>