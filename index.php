<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perú Diario - La voz del Perú</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #C41E3A;
            --secondary-color: #8B0000;
            --accent-color: #FFD700;
            --text-color: #333;
            --light-bg: #F8F9FA;
            --white: #FFFFFF;
            --border-color: #E5E5E5;
            --success-color: #28A745;
            --warning-color: #FFC107;
        }

        body {
            font-family: 'Georgia', serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--white);
        }

        /* Header Styles */
        .top-bar {
            background-color: var(--primary-color);
            color: var(--white);
            padding: 8px 0;
            font-size: 12px;
        }

        .top-bar-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header {
            background-color: var(--white);
            border-bottom: 1px solid var(--border-color);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 36px;
            font-weight: bold;
            color: var(--primary-color);
            text-decoration: none;
        }

        .nav-menu {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .nav-menu a {
            text-decoration: none;
            color: var(--text-color);
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-menu a:hover {
            color: var(--primary-color);
        }

        .auth-buttons {
            display: flex;
            gap: 15px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: var(--white);
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }

        .btn-secondary:hover {
            background-color: var(--primary-color);
            color: var(--white);
        }

        /* Main Content */
        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .hero-section {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
            margin-bottom: 50px;
        }

        .featured-article {
            background-color: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .featured-article:hover {
            transform: translateY(-5px);
        }

        .featured-article img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .featured-content {
            padding: 30px;
        }

        .featured-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 15px;
            color: var(--text-color);
            line-height: 1.3;
        }

        .featured-excerpt {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
        }

        .article-meta {
            display: flex;
            gap: 20px;
            font-size: 14px;
            color: #888;
        }

        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .sidebar-section {
            background-color: var(--light-bg);
            border-radius: 10px;
            padding: 25px;
        }

        .sidebar-title {
            font-size: 20px;
            font-weight: bold;
            color: var(--primary-color);
            margin-bottom: 20px;
            border-bottom: 2px solid var(--primary-color);
            padding-bottom: 10px;
        }

        .trending-item {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--border-color);
        }

        .trending-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .trending-number {
            background-color: var(--primary-color);
            color: var(--white);
            width: 25px;
            height: 25px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 12px;
            flex-shrink: 0;
        }

        .trending-content h4 {
            font-size: 14px;
            margin-bottom: 5px;
            line-height: 1.3;
        }

        .trending-content p {
            font-size: 12px;
            color: #666;
        }

        /* News Grid */
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .news-card {
            background-color: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: all 0.3s;
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .news-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .news-content {
            padding: 25px;
        }

        .news-category {
            background-color: var(--accent-color);
            color: var(--text-color);
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            display: inline-block;
            margin-bottom: 10px;
        }

        .news-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            line-height: 1.3;
        }

        .news-excerpt {
            color: #666;
            font-size: 14px;
            margin-bottom: 15px;
        }

        /* Plans Section */
        .plans-section {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 15px;
            padding: 50px;
            margin: 50px 0;
            color: var(--white);
            text-align: center;
        }

        .plans-title {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .plans-subtitle {
            font-size: 18px;
            margin-bottom: 40px;
            opacity: 0.9;
        }

        .plans-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .plan-card {
            background-color: var(--white);
            color: var(--text-color);
            border-radius: 15px;
            padding: 30px;
            text-align: left;
            transition: transform 0.3s;
        }

        .plan-card:hover {
            transform: translateY(-10px);
        }

        .plan-name {
            font-size: 24px;
            font-weight: bold;
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .plan-price {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .plan-features {
            list-style: none;
            margin-bottom: 30px;
        }

        .plan-features li {
            padding: 8px 0;
            border-bottom: 1px solid var(--border-color);
        }

        .plan-features li:last-child {
            border-bottom: none;
        }

        .plan-features li::before {
            content: "✓";
            color: var(--success-color);
            font-weight: bold;
            margin-right: 10px;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            backdrop-filter: blur(5px);
        }

        .modal-content {
            background-color: var(--white);
            margin: 5% auto;
            padding: 40px;
            border-radius: 15px;
            width: 90%;
            max-width: 500px;
            position: relative;
            animation: modalSlideIn 0.3s ease-out;
        }

        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            position: absolute;
            right: 20px;
            top: 20px;
        }

        .close:hover {
            color: var(--primary-color);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--text-color);
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        .admin-panel {
            display: none;
            background-color: var(--light-bg);
            border-radius: 15px;
            padding: 30px;
            margin-top: 30px;
        }

        .admin-actions {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .news-management {
            background-color: var(--white);
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 25px;
        }

        .user-info {
            background: linear-gradient(135deg, var(--accent-color), #FFA500);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 25px;
            text-align: center;
        }

        .user-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: var(--white);
            margin: 0 auto 15px;
        }

        /* Footer */
        .footer {
            background-color: var(--text-color);
            color: var(--white);
            padding: 50px 0;
            margin-top: 80px;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
        }

        .footer-section h3 {
            color: var(--accent-color);
            margin-bottom: 20px;
            font-size: 20px;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul li a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section ul li a:hover {
            color: var(--accent-color);
        }

        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 20px;
            border-radius: 8px;
            color: var(--white);
            font-weight: 500;
            z-index: 3000;
            opacity: 0;
            transform: translateX(100%);
            transition: all 0.3s;
        }

        .notification.success {
            background-color: var(--success-color);
        }

        .notification.show {
            opacity: 1;
            transform: translateX(0);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section {
                grid-template-columns: 1fr;
            }
            
            .nav-menu {
                display: none;
            }
            
            .plans-grid {
                grid-template-columns: 1fr;
            }
            
            .admin-actions {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="top-bar-content">
            <div>🌡️ Lima 22°C | 📅 <span id="current-date"></span></div>
            <div>🔥 ÚLTIMA HORA: Síguenos para las noticias más importantes del Perú</div>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <a href="#" class="logo">Perú Diario</a>
            <nav>
                <ul class="nav-menu">
                    <li><a href="#" onclick="showSection('home')">Inicio</a></li>
                    <li><a href="#" onclick="showSection('politics')">Política</a></li>
                    <li><a href="#" onclick="showSection('economy')">Economía</a></li>
                    <li><a href="#" onclick="showSection('sports')">Deportes</a></li>
                    <li><a href="#" onclick="showSection('culture')">Cultura</a></li>
                    <li><a href="#" onclick="showPlans()">Suscríbete</a></li>
                </ul>
            </nav>
            <div class="auth-buttons">
                <a href="#" class="btn btn-secondary" onclick="openModal('loginModal')">Iniciar Sesión</a>
                <a href="#" class="btn btn-primary" onclick="openModal('registerModal')">Registrarse</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Hero Section -->
        <section class="hero-section">
            <article class="featured-article">
                <img src="https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?w=800&h=400&fit=crop" alt="Noticia Principal">
                <div class="featured-content">
                    <h1 class="featured-title">Perú avanza hacia la digitalización con nuevas políticas tecnológicas</h1>
                    <p class="featured-excerpt">El gobierno peruano anuncia un ambicioso plan de transformación digital que beneficiará a millones de ciudadanos en todo el país, mejorando el acceso a servicios públicos y promoviendo la innovación.</p>
                    <div class="article-meta">
                        <span>📅 Hace 2 horas</span>
                        <span>👤 María González</span>
                        <span>💬 234 comentarios</span>
                    </div>
                </div>
            </article>

            <aside class="sidebar">
                <div class="sidebar-section">
                    <h2 class="sidebar-title">🔥 Tendencias</h2>
                    <div class="trending-item">
                        <div class="trending-number">1</div>
                        <div class="trending-content">
                            <h4>Nueva ley de trabajo remoto</h4>
                            <p>Congreso aprueba flexibilidad laboral</p>
                        </div>
                    </div>
                    <div class="trending-item">
                        <div class="trending-number">2</div>
                        <div class="trending-content">
                            <h4>Selección peruana clasifica</h4>
                            <p>Victoria histórica ante Brasil</p>
                        </div>
                    </div>
                    <div class="trending-item">
                        <div class="trending-number">3</div>
                        <div class="trending-content">
                            <h4>Nuevo yacimiento de oro</h4>
                            <p>Descubrimiento en Cajamarca</p>
                        </div>
                    </div>
                </div>

                <div class="sidebar-section">
                    <h2 class="sidebar-title">📊 Tu Plan Actual</h2>
                    <div id="user-plan-info">
                        <p>👤 <strong>Usuario Visitante</strong></p>
                        <p>📰 Acceso limitado a noticias</p>
                        <a href="#" class="btn btn-primary" onclick="showPlans()" style="width: 100%; justify-content: center; margin-top: 15px;">Suscribirse Ahora</a>
                    </div>
                </div>
            </aside>
        </section>

        <!-- News Grid -->
        <section class="news-grid" id="news-container">
            <!-- News will be loaded here dynamically -->
        </section>

        <!-- Plans Section -->
        <section class="plans-section" id="plans-section">
            <h2 class="plans-title">Planes de Suscripción</h2>
            <p class="plans-subtitle">Elige el plan perfecto para mantenerte informado</p>
            
            <div class="plans-grid">
                <div class="plan-card">
                    <h3 class="plan-name">🆓 Básico</h3>
                    <div class="plan-price">Gratis</div>
                    <ul class="plan-features">
                        <li>5 artículos por día</li>
                        <li>Noticias básicas</li>
                        <li>Acceso a archivo de 7 días</li>
                        <li>Newsletter semanal</li>
                    </ul>
                    <button class="btn btn-secondary" style="width: 100%; justify-content: center;">Plan Actual</button>
                </div>

                <div class="plan-card">
                    <h3 class="plan-name">⭐ Premium</h3>
                    <div class="plan-price">S/ 29<span style="font-size: 16px;">/mes</span></div>
                    <ul class="plan-features">
                        <li>Artículos ilimitados</li>
                        <li>Contenido exclusivo</li>
                        <li>Análisis en profundidad</li>
                        <li>Newsletter diario</li>
                        <li>Sin publicidad</li>
                        <li>Acceso móvil prioritario</li>
                    </ul>
                    <button class="btn btn-primary" onclick="subscribeToPlan('premium')" style="width: 100%; justify-content: center;">Suscribirse</button>
                </div>

                <div class="plan-card">
                    <h3 class="plan-name">💎 Corporativo</h3>
                    <div class="plan-price">S/ 199<span style="font-size: 16px;">/mes</span></div>
                    <ul class="plan-features">
                        <li>Todo del plan Premium</li>
                        <li>Múltiples usuarios (hasta 50)</li>
                        <li>Panel de administración</li>
                        <li>Publicar noticias propias</li>
                        <li>Analytics avanzados</li>
                        <li>Soporte 24/7</li>
                        <li>API personalizada</li>
                    </ul>
                    <button class="btn btn-primary" onclick="subscribeToPlan('corporate')" style="width: 100%; justify-content: center;">Contactar Ventas</button>
                </div>
            </div>
        </section>

        <!-- Admin Panel (hidden by default) -->
        <div class="admin-panel" id="admin-panel">
            <div class="user-info">
                <div class="user-avatar" id="user-avatar">👤</div>
                <h3 id="user-name">Administrador</h3>
                <p id="user-role">Panel de Administración</p>
            </div>

            <div class="admin-actions">
                <button class="btn btn-primary" onclick="openModal('addNewsModal')">➕ Agregar Noticia</button>
                <button class="btn btn-secondary" onclick="viewAnalytics()">📊 Analytics</button>
                <button class="btn btn-secondary" onclick="manageUsers()">👥 Gestionar Usuarios</button>
                <button class="btn btn-secondary" onclick="moderateComments()">💬 Moderar Comentarios</button>
            </div>

            <div class="news-management">
                <h3>📰 Gestión de Noticias</h3>
                <div id="admin-news-list">
                    <!-- Admin news list will be populated here -->
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Perú Diario</h3>
                <p>La fuente más confiable de noticias del Perú. Comprometidos con la verdad y la excelencia periodística desde 2025.</p>
            </div>
            <div class="footer-section">
                <h3>Secciones</h3>
                <ul>
                    <li><a href="#">Política</a></li>
                    <li><a href="#">Economía</a></li>
                    <li><a href="#">Deportes</a></li>
                    <li><a href="#">Cultura</a></li>
                    <li><a href="#">Internacional</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Servicios</h3>
                <ul>
                    <li><a href="#">Suscripciones</a></li>
                    <li><a href="#">Newsletter</a></li>
                    <li><a href="#">Archivo</a></li>
                    <li><a href="#">API</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contacto</h3>
                <ul>
                    <li><a href="#">📧 info@perudiario.com</a></li>
                    <li><a href="#">📞 +51 1 234-5678</a></li>
                    <li><a href="#">📍 Lima, Perú</a></li>
                    <li><a href="#">🐦 @PeruDiario</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Iniciar Sesión</h2>
            <form id="loginForm">
                <div class="form-group">
                    <label for="loginEmail">Email:</label>
                    <input type="email" id="loginEmail" required>
                </div>
                <div class="form-group">
                    <label for="loginPassword">Contraseña:</label>
                    <input type="password" id="loginPassword" required>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center;">Iniciar Sesión</button>
            </form>
        </div>
    </div>

    <!-- Register Modal -->
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Registrarse</h2>
            <form id="registerForm">
                <div class="form-group">
                    <label for="registerName">Nombre completo:</label>
                    <input type="text" id="registerName" required>
                </div>
                <div class="form-group">
                    <label for="registerEmail">Email:</label>
                    <input type="email" id="registerEmail" required>
                </div>
                <div class="form-group">
                    <label for="registerPassword">Contraseña:</label>
                    <input type="password" id="registerPassword" required>
                </div>
                <div class="form-group">
                    <label for="registerPlan">Plan:</label>
                    <select id="registerPlan" required>
                        <option value="free">Básico (Gratis)</option>
                        <option value="premium">Premium (S/ 29/mes)</option>
                        <option value="corporate">Corporativo (S/ 199/mes)</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center;">Registrarse</button>
            </form>
        </div>
    </div>

    <!-- Add News Modal -->
    <div id="addNewsModal" class="modal">
        <div class="modal-content" style="max-width: 700px;">
            <span class="close">&times;</span>
            <h2>➕ Agregar Nueva Noticia</h2>
            <form id="addNewsForm">
                <div class="form-group">
                    <label for="newsTitle">Título:</label>
                    <input type="text" id="newsTitle" required>
                </div>
                <div class="form-group">
                    <label for="newsCategory">Categoría:</label>
                    <select id="newsCategory" required>
                        <option value="politica">Política</option>
                        <option value="economia">Economía</option>
                        <option value="deportes">Deportes</option>
                        <option value="cultura">Cultura</option>
                        <option value="internacional">Internacional</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="newsExcerpt">Resumen:</label>
                    <textarea id="newsExcerpt" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="newsContent">Contenido completo:</label>
                    <textarea id="newsContent" rows="8" required></textarea>
                </div>
                <div class="form-group">
                    <label for="newsImage">URL de imagen:</label>
                    <input type="url" id="newsImage" required>
                </div>
                <div class="form-group">
                    <label for="newsAuthor">Autor:</label>
                    <input type="text" id="newsAuthor" required>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center;">Publicar Noticia</button>
            </form>
        </div>
    </div>

    <!-- Notification -->
    <div id="notification" class="notification"></div>

    <script>
        // Database simulation (In-memory storage)
        let database = {
            users: [
                {
                    id: 1,
                    name: "Admin Principal",
                    email: "admin@perudiario.com",
                    password: "admin123",
                    role: "admin",
                    plan: "corporate",
                    avatar: "👨‍💼"
                },
                {
                    id: 2,
                    name: "María García",
                    email: "maria@gmail.com",
                    password: "maria123",
                    role: "user",
                    plan: "premium",
                    avatar: "👩"
                }
            ],
            news: [
                {
                    id: 1,
                    title: "Perú implementa nueva reforma educativa digital",
                    category: "educacion",
                    excerpt: "El Ministerio de Educación anuncia la digitalización completa del sistema educativo peruano, beneficiando a más de 8 millones de estudiantes.",
                    content: "En una decisión histórica, el Ministerio de Educación del Perú ha anunciado la implementación de una reforma educativa completamente digital que transformará la manera en que los estudiantes peruanos acceden al conocimiento. Esta iniciativa, que requiere una inversión de S/ 2.5 mil millones, incluye la distribución de tablets a todos los estudiantes de educación pública, la capacitación de 300,000 docentes en tecnologías digitales y la creación de una plataforma educativa nacional. El ministro de Educación, en rueda de prensa, destacó que esta reforma posicionará al Perú como líder en educación digital en América Latina.",
                    image: "https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=800&h=400&fit=crop",
                    author: "Carlos Mendoza",
                    date: new Date(Date.now() - 3600000 * 2), // 2 hours ago
                    views: 15420,
                    comments: 234,
                    featured: true
                },
                {
                    id: 2,
                    title: "Economía peruana crece 4.2% en el último trimestre",
                    category: "economia",
                    excerpt: "El INEI reporta un crecimiento económico sostenido impulsado por el sector minero y tecnológico.",
                    content: "El Instituto Nacional de Estadística e Informática (INEI) ha publicado cifras alentadoras sobre el crecimiento de la economía peruana. Durante el último trimestre, el país experimentó un crecimiento del 4.2%, superando las expectativas de los analistas que proyectaban un 3.8%. Este crecimiento se debe principalmente al aumento en la producción minera, especialmente de cobre y oro, así como al floreciente sector tecnológico. Las exportaciones no tradicionales también mostraron un incremento del 12%, consolidando la recuperación económica post-pandemia.",
                    image: "https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=800&h=400&fit=crop",
                    author: "Ana Rodríguez",
                    date: new Date(Date.now() - 3600000 * 4), // 4 hours ago
                    views: 8750,
                    comments: 156
                },
                {
                    id: 3,
                    title: "Selección Peruana clasifica al Mundial con victoria histórica",
                    category: "deportes",
                    excerpt: "La bicolor logra una victoria épica 2-1 contra Brasil en el Estadio Nacional, asegurando su pase al Mundial.",
                    content: "En una noche mágica en el Estadio Nacional, la Selección Peruana escribió una nueva página dorada en su historia al vencer 2-1 a Brasil y clasificar directamente al próximo Mundial de Fútbol. Los goles de Paolo Guerrero y Gianluca Lapadula en el segundo tiempo dieron vuelta un marcador adverso y desataron la celebración de todo un país. Con esta victoria, Perú se convierte en la quinta selección sudamericana en clasificar al torneo. El técnico Ricardo Gareca expresó su orgullo por el equipo y dedicó el triunfo a todos los peruanos.",
                    image: "https://images.unsplash.com/photo-1431324155629-1a6deb1dec8d?w=800&h=400&fit=crop",
                    author: "Miguel Torres",
                    date: new Date(Date.now() - 3600000 * 6), // 6 hours ago
                    views: 25300,
                    comments: 892
                },
                {
                    id: 4,
                    title: "Descubren nuevo complejo arqueológico en Cusco",
                    category: "cultura",
                    excerpt: "Arqueólogos peruanos encuentran ruinas preincaicas que podrían reescribir la historia de la región.",
                    content: "Un equipo de arqueólogos peruanos ha realizado un descubrimiento extraordinario en la región de Cusco: un complejo arqueológico preincaico de más de 1,200 años de antigüedad que podría cambiar nuestra comprensión de las civilizaciones andinas. El sitio, denominado 'Qhapaq Ñan Perdido', incluye templos, observatorios astronómicos y un sistema de canales de irrigación sorprendentemente avanzado. Los investigadores creen que este complejo fue un importante centro ceremonial y administrativo de la cultura Wari. El Ministerio de Cultura ya ha iniciado los procedimientos para declarar el sitio como Patrimonio Cultural de la Nación.",
                    image: "https://images.unsplash.com/photo-1526392060635-9d6019884377?w=800&h=400&fit=crop",
                    author: "Elena Vargas",
                    date: new Date(Date.now() - 3600000 * 8), // 8 hours ago
                    views: 12100,
                    comments: 298
                },
                {
                    id: 5,
                    title: "Lima se convierte en la capital gastronómica de Sudamérica",
                    category: "cultura",
                    excerpt: "La capital peruana recibe reconocimiento internacional por su innovadora escena culinaria.",
                    content: "Lima ha sido oficialmente reconocida como la Capital Gastronómica de Sudamérica por la Organización Mundial del Turismo. Este reconocimiento se debe al extraordinario desarrollo de su escena culinaria, que combina técnicas ancestrales con innovación contemporánea. La ciudad alberga cinco de los 50 mejores restaurantes del mundo según la lista World's 50 Best, incluyendo Central, Maido y Astrid y Gastón. El alcalde de Lima anunció la creación de una ruta gastronómica oficial que incluirá desde huariques tradicionales hasta restaurantes de alta cocina, consolidando el turismo gastronómico como uno de los principales atractivos del país.",
                    image: "https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=800&h=400&fit=crop",
                    author: "Roberto Silva",
                    date: new Date(Date.now() - 3600000 * 12), // 12 hours ago
                    views: 18750,
                    comments: 445
                },
                {
                    id: 6,
                    title: "Startup peruana desarrolla tecnología para purificar agua",
                    category: "tecnologia",
                    excerpt: "Innovación nacional crea sistema que purifica agua usando energía solar, beneficiando comunidades rurales.",
                    content: "Una startup peruana llamada 'AquaPura Tech' ha desarrollado una revolucionaria tecnología que purifica agua utilizando únicamente energía solar. El sistema, diseñado por ingenieros de la Universidad Nacional de Ingeniería, puede procesar hasta 1,000 litros de agua por día y eliminar el 99.9% de bacterias y virus. La tecnología ya está siendo implementada en 15 comunidades rurales de Ayacucho y Huancavelica, beneficiando a más de 5,000 personas. La empresa ha recibido inversión de fondos internacionales y planea expandirse a otros países de América Latina. El Ministerio de Salud ha validado la tecnología y considera implementarla en el programa nacional de acceso al agua potable.",
                    image: "https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&h=400&fit=crop",
                    author: "Lucia Morales",
                    date: new Date(Date.now() - 3600000 * 16), // 16 hours ago
                    views: 9200,
                    comments: 178
                }
            ],
            subscriptions: [],
            comments: []
        };

        // Current user state
        let currentUser = null;

        // Initialize the application
        document.addEventListener('DOMContentLoaded', function() {
            updateCurrentDate();
            loadNews();
            setupEventListeners();
            updateUI();
        });

        // Update current date
        function updateCurrentDate() {
            const now = new Date();
            const options = { 
                weekday: 'long', 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric',
                timeZone: 'America/Lima'
            };
            document.getElementById('current-date').textContent = now.toLocaleDateString('es-PE', options);
        }

        // Setup event listeners
        function setupEventListeners() {
            // Modal close buttons
            document.querySelectorAll('.close').forEach(closeBtn => {
                closeBtn.addEventListener('click', function() {
                    this.closest('.modal').style.display = 'none';
                });
            });

            // Click outside modal to close
            window.addEventListener('click', function(event) {
                if (event.target.classList.contains('modal')) {
                    event.target.style.display = 'none';
                }
            });

            // Form submissions
            document.getElementById('loginForm').addEventListener('submit', handleLogin);
            document.getElementById('registerForm').addEventListener('submit', handleRegister);
            document.getElementById('addNewsForm').addEventListener('submit', handleAddNews);
        }

        // Load and display news
        function loadNews() {
            const newsContainer = document.getElementById('news-container');
            const regularNews = database.news.filter(news => !news.featured);
            
            newsContainer.innerHTML = regularNews.map(news => `
                <article class="news-card" onclick="readArticle(${news.id})">
                    <img src="${news.image}" alt="${news.title}" onerror="this.src='https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?w=800&h=400&fit=crop'">
                    <div class="news-content">
                        <span class="news-category">${getCategoryName(news.category)}</span>
                        <h3 class="news-title">${news.title}</h3>
                        <p class="news-excerpt">${news.excerpt}</p>
                        <div class="article-meta">
                            <span>📅 ${getTimeAgo(news.date)}</span>
                            <span>👤 ${news.author}</span>
                            <span>👁️ ${news.views?.toLocaleString() || 0}</span>
                            <span>💬 ${news.comments?.toLocaleString() || 0}</span>
                        </div>
                    </div>
                </article>
            `).join('');
        }

        // Get category name in Spanish
        function getCategoryName(category) {
            const categories = {
                'politica': 'Política',
                'economia': 'Economía',
                'deportes': 'Deportes',
                'cultura': 'Cultura',
                'educacion': 'Educación',
                'tecnologia': 'Tecnología',
                'internacional': 'Internacional'
            };
            return categories[category] || category;
        }

        // Calculate time ago
        function getTimeAgo(date) {
            const now = new Date();
            const diff = now - new Date(date);
            const hours = Math.floor(diff / (1000 * 60 * 60));
            const days = Math.floor(hours / 24);
            
            if (days > 0) {
                return `Hace ${days} día${days > 1 ? 's' : ''}`;
            } else if (hours > 0) {
                return `Hace ${hours} hora${hours > 1 ? 's' : ''}`;
            } else {
                return 'Hace unos minutos';
            }
        }

        // Open modal
        function openModal(modalId) {
            document.getElementById(modalId).style.display = 'block';
        }

        // Show notification
        function showNotification(message, type = 'success') {
            const notification = document.getElementById('notification');
            notification.textContent = message;
            notification.className = `notification ${type} show`;
            
            setTimeout(() => {
                notification.classList.remove('show');
            }, 3000);
        }

        // Handle login
        function handleLogin(e) {
            e.preventDefault();
            const email = document.getElementById('loginEmail').value;
            const password = document.getElementById('loginPassword').value;
            
            const user = database.users.find(u => u.email === email && u.password === password);
            
            if (user) {
                currentUser = user;
                document.getElementById('loginModal').style.display = 'none';
                updateUI();
                showNotification(`¡Bienvenido, ${user.name}!`);
                document.getElementById('loginForm').reset();
            } else {
                showNotification('Credenciales incorrectas', 'error');
            }
        }

        // Handle registration
        function handleRegister(e) {
            e.preventDefault();
            const name = document.getElementById('registerName').value;
            const email = document.getElementById('registerEmail').value;
            const password = document.getElementById('registerPassword').value;
            const plan = document.getElementById('registerPlan').value;
            
            // Check if email already exists
            if (database.users.find(u => u.email === email)) {
                showNotification('El email ya está registrado', 'error');
                return;
            }
            
            const newUser = {
                id: database.users.length + 1,
                name: name,
                email: email,
                password: password,
                role: plan === 'corporate' ? 'admin' : 'user',
                plan: plan,
                avatar: name.charAt(0).toUpperCase()
            };
            
            database.users.push(newUser);
            currentUser = newUser;
            
            document.getElementById('registerModal').style.display = 'none';
            updateUI();
            showNotification(`¡Registro exitoso! Bienvenido, ${name}`);
            document.getElementById('registerForm').reset();
        }

        // Handle adding news (admin only)
        function handleAddNews(e) {
            e.preventDefault();
            
            if (!currentUser || (currentUser.role !== 'admin' && currentUser.plan !== 'corporate')) {
                showNotification('No tienes permisos para agregar noticias', 'error');
                return;
            }
            
            const title = document.getElementById('newsTitle').value;
            const category = document.getElementById('newsCategory').value;
            const excerpt = document.getElementById('newsExcerpt').value;
            const content = document.getElementById('newsContent').value;
            const image = document.getElementById('newsImage').value;
            const author = document.getElementById('newsAuthor').value;
            
            const newNews = {
                id: database.news.length + 1,
                title: title,
                category: category,
                excerpt: excerpt,
                content: content,
                image: image,
                author: author,
                date: new Date(),
                views: 0,
                comments: 0,
                featured: false
            };
            
            database.news.unshift(newNews);
            document.getElementById('addNewsModal').style.display = 'none';
            loadNews();
            updateAdminPanel();
            showNotification('¡Noticia publicada exitosamente!');
            document.getElementById('addNewsForm').reset();
        }

        // Update UI based on user state
        function updateUI() {
            const authButtons = document.querySelector('.auth-buttons');
            const userPlanInfo = document.getElementById('user-plan-info');
            const adminPanel = document.getElementById('admin-panel');
            
            if (currentUser) {
                // Update auth buttons
                authButtons.innerHTML = `
                    <span style="margin-right: 15px; color: var(--primary-color); font-weight: 500;">
                        ${currentUser.avatar} ${currentUser.name}
                    </span>
                    <button class="btn btn-secondary" onclick="logout()">Cerrar Sesión</button>
                `;
                
                // Update plan info
                const planNames = {
                    'free': '🆓 Plan Básico',
                    'premium': '⭐ Plan Premium',
                    'corporate': '💎 Plan Corporativo'
                };
                
                userPlanInfo.innerHTML = `
                    <p>👤 <strong>${currentUser.name}</strong></p>
                    <p>📋 ${planNames[currentUser.plan]}</p>
                    <p>📧 ${currentUser.email}</p>
                    ${currentUser.plan === 'free' ? '<a href="#" class="btn btn-primary" onclick="showPlans()" style="width: 100%; justify-content: center; margin-top: 15px;">Mejorar Plan</a>' : ''}
                `;
                
                // Show admin panel if user is admin or has corporate plan
                if (currentUser.role === 'admin' || currentUser.plan === 'corporate') {
                    adminPanel.style.display = 'block';
                    document.getElementById('user-avatar').textContent = currentUser.avatar;
                    document.getElementById('user-name').textContent = currentUser.name;
                    updateAdminPanel();
                } else {
                    adminPanel.style.display = 'none';
                }
            } else {
                // Reset to guest state
                authButtons.innerHTML = `
                    <a href="#" class="btn btn-secondary" onclick="openModal('loginModal')">Iniciar Sesión</a>
                    <a href="#" class="btn btn-primary" onclick="openModal('registerModal')">Registrarse</a>
                `;
                
                userPlanInfo.innerHTML = `
                    <p>👤 <strong>Usuario Visitante</strong></p>
                    <p>📰 Acceso limitado a noticias</p>
                    <a href="#" class="btn btn-primary" onclick="showPlans()" style="width: 100%; justify-content: center; margin-top: 15px;">Suscribirse Ahora</a>
                `;
                
                adminPanel.style.display = 'none';
            }
        }

        // Update admin panel
        function updateAdminPanel() {
            const adminNewsList = document.getElementById('admin-news-list');
            const userNews = database.news.slice(0, 5); // Show last 5 news
            
            adminNewsList.innerHTML = userNews.map(news => `
                <div style="display: flex; justify-content: space-between; align-items: center; padding: 15px; border-bottom: 1px solid var(--border-color); background-color: var(--white); margin-bottom: 10px; border-radius: 8px;">
                    <div>
                        <h4 style="margin-bottom: 5px;">${news.title}</h4>
                        <p style="font-size: 12px; color: #666;">
                            ${getCategoryName(news.category)} • ${getTimeAgo(news.date)} • ${news.views} vistas
                        </p>
                    </div>
                    <div style="display: flex; gap: 10px;">
                        <button class="btn btn-secondary" onclick="editNews(${news.id})" style="padding: 5px 10px; font-size: 12px;">✏️ Editar</button>
                        <button class="btn" onclick="deleteNews(${news.id})" style="padding: 5px 10px; font-size: 12px; background-color: #dc3545; color: white;">🗑️ Eliminar</button>
                    </div>
                </div>
            `).join('');
        }

        // Logout function
        function logout() {
            currentUser = null;
            updateUI();
            showNotification('Sesión cerrada correctamente');
        }

        // Subscribe to plan
        function subscribeToPlan(planType) {
            if (!currentUser) {
                openModal('registerModal');
                return;
            }
            
            const planNames = {
                'premium': 'Premium',
                'corporate': 'Corporativo'
            };
            
            // Simulate subscription
            currentUser.plan = planType;
            if (planType === 'corporate') {
                currentUser.role = 'admin';
            }
            
            updateUI();
            showNotification(`¡Te has suscrito al plan ${planNames[planType]}!`);
        }

        // Read article (simulate)
        function readArticle(newsId) {
            const news = database.news.find(n => n.id === newsId);
            if (news) {
                // Simulate reading - increment views
                news.views = (news.views || 0) + 1;
                
                // Check if user can read full article based on plan
                if (!currentUser || currentUser.plan === 'free') {
                    alert(`📰 ${news.title}\n\n${news.excerpt}\n\n🔒 Suscríbete para leer el artículo completo y acceder a contenido exclusivo.`);
                    showPlans();
                } else {
                    alert(`📰 ${news.title}\n\n${news.content}\n\n👤 Por: ${news.author}\n📅 ${getTimeAgo(news.date)}`);
                }
                
                loadNews(); // Refresh to show updated view count
            }
        }

        // Show plans section
        function showPlans() {
            document.getElementById('plans-section').scrollIntoView({ 
                behavior: 'smooth' 
            });
        }

        // Show section (simulate navigation)
        function showSection(section) {
            const sectionNames = {
                'home': 'Inicio',
                'politics': 'Política',
                'economy': 'Economía', 
                'sports': 'Deportes',
                'culture': 'Cultura'
            };
            
            showNotification(`Navegando a: ${sectionNames[section]}`);
        }

        // Admin functions
        function viewAnalytics() {
            if (currentUser && (currentUser.role === 'admin' || currentUser.plan === 'corporate')) {
                const totalNews = database.news.length;
                const totalViews = database.news.reduce((sum, news) => sum + (news.views || 0), 0);
                const totalUsers = database.users.length;
                
                alert(`📊 Analytics Dashboard\n\n📰 Total de noticias: ${totalNews}\n👁️ Total de vistas: ${totalViews.toLocaleString()}\n👥 Total de usuarios: ${totalUsers}\n📈 Promedio de vistas: ${Math.round(totalViews / totalNews).toLocaleString()}`);
            }
        }

        function manageUsers() {
            if (currentUser && (currentUser.role === 'admin' || currentUser.plan === 'corporate')) {
                const usersList = database.users.map(user => 
                    `👤 ${user.name} (${user.email}) - ${user.plan.toUpperCase()}`
                ).join('\n');
                
                alert(`👥 Gestión de Usuarios\n\n${usersList}`);
            }
        }

        function moderateComments() {
            if (currentUser && (currentUser.role === 'admin' || currentUser.plan === 'corporate')) {
                alert('💬 Sistema de moderación de comentarios\n\n📝 Comentarios pendientes: 12\n✅ Comentarios aprobados: 1,847\n❌ Comentarios rechazados: 23');
            }
        }

        function editNews(newsId) {
            const news = database.news.find(n => n.id === newsId);
            if (news && currentUser && (currentUser.role === 'admin' || currentUser.plan === 'corporate')) {
                // Pre-fill the add news form with existing data
                document.getElementById('newsTitle').value = news.title;
                document.getElementById('newsCategory').value = news.category;
                document.getElementById('newsExcerpt').value = news.excerpt;
                document.getElementById('newsContent').value = news.content;
                document.getElementById('newsImage').value = news.image;
                document.getElementById('newsAuthor').value = news.author;
                
                openModal('addNewsModal');
                showNotification('Editando noticia...');
            }
        }

        function deleteNews(newsId) {
            if (currentUser && (currentUser.role === 'admin' || currentUser.plan === 'corporate')) {
                if (confirm('¿Estás seguro de que quieres eliminar esta noticia?')) {
                    database.news = database.news.filter(n => n.id !== newsId);
                    loadNews();
                    updateAdminPanel();
                    showNotification('Noticia eliminada correctamente');
                }
            }
        }

        // Auto-update time every minute
        setInterval(() => {
            loadNews(); // Refresh to update time ago
        }, 60000);

        // Simulate real-time updates
        setInterval(() => {
            // Randomly update view counts
            database.news.forEach(news => {
                if (Math.random() < 0.3) { // 30% chance
                    news.views = (news.views || 0) + Math.floor(Math.random() * 5) + 1;
                }
            });
        }, 30000); // Every 30 seconds
    </script>
</body>
</html>