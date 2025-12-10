<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantiron - Orçamentos e Portfólio de Sites | NPS</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2090477157644777"
     crossorigin="anonymous"></script>
     <meta name="google-adsense-account" content="ca-pub-2090477157644777">
    <script defer src="/_vercel/insights/script.js"></script>
</head>
<body>

    <header>
        <div class="container">
            <h1 class="logo">Quantiron</h1> 
            <nav>
                <ul>
                    <li><a href="#home" class="modern-hover">Início</a></li>
                    <li><a href="#portfolio" class="modern-hover">Portfólio</a></li>
                    <li><a href="#contato" class="modern-hover">Orçamento</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="home" class="hero">
            <div class="container">
                <p class="tagline">NPS Apresenta:</p>
                <h2 class="main-title">Soluções Digitais Modernas e Eficientes.</h2>
                <p class="subtitle">Transforme sua presença online com design elegante e funcionalidade de ponta.</p>
                <a href="#contato" class="btn-primary modern-btn">Solicitar Orçamento <span class="arrow">→</span></a>
            </div>
        </section>

        <section id="portfolio" class="portfolio-section">
            <div class="container">
                <h3 class="section-title">Nosso Portfólio</h3>
                <p class="section-subtitle">Conheça um de nossos projetos de destaque:</p>
                
                <div class="portfolio-grid single-item-grid">
                    <div class="portfolio-item">
                        <img src="pjulialves-preview.png" alt="Preview do site pjulialves.com.br" loading="lazy">
                        <div class="item-info">
                            <h4>Redes sociais estilo linktree personalizado - <span class="accent-color">pjulialves.com.br</span></h4>
                            <p>Um exemplo de nosso trabalho em design e desenvolvimento de websites modernos.</p>
                            <a href="https://pjulialves.com.br" target="_blank" class="modern-link">Visitar Projeto <span class="link-arrow">↗</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contato" class="contact-section">
            <div class="container">
                <h3 class="section-title">Solicite Seu Orçamento</h3>
                <p class="section-subtitle">Preencha o formulário abaixo e vamos construir algo incrível.</p>
                <form id="orcamento-form" action="processa_orcamento.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone (opcional)</label>
                        <input type="tel" id="telefone" name="telefone">
                    </div>
                    <div class="form-group">
                        <label for="tipo_projeto">Tipo de Projeto</label>
                        <select id="tipo_projeto" name="tipo_projeto" required>
                            <option value="">Selecione...</option>
                            <option value="landing">Landing Page</option>
                            <option value="institucional">Site Institucional</option>
                            <option value="e-commerce">E-commerce/Loja Virtual</option>
                            <option value="outros">Outro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="detalhes">Detalhes do Projeto e Orçamento Esperado</label>
                        <textarea id="detalhes" name="detalhes" rows="5" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn-primary modern-btn">Enviar Solicitação</button>
                    <p id="form-message" class="hidden"></p>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2025 Quantiron (NPS). Todos os direitos reservados.</p>
            <div class="social-links">
                <a href="https://www.linkedin.com/in/nicolaspsantoss/" class="modern-link" target="_blank">LinkedIn</a> | 
                <a href="https://github.com/Nicolaspsantos/" class="modern-link" target="_blank">GitHub</a>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
