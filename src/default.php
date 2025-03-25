<?php
    session_start();
    $lang = isset($_GET['lang']) ? $_GET['lang'] : 'pt';
    $translations = [
        'en' => [
            'menu_home' => 'Home',
            'menu_tools' => 'Online Tools',
            'menu_projects' => 'My Projects',
            'menu_charts' => 'Analytics',
            'delphi_title' => 'Delphi',
            'menu_dotnet' => '.NET',
            'dotnet_title' => '.NET Development Resources',
            'tools_cpf' => 'CPF Generator',
            'tools_cnpj' => 'CNPJ Generator',
            'tools_password' => 'Password Generator',
            'projects_title' => 'GitHub Projects',
            'generate' => 'Generate',
            'copy' => 'Copy',
            'tools_whatsapp' => 'WhatsApp Direct',
            'whatsapp_placeholder' => 'Enter number with country code',
            'tools_phone' => 'Brazilian Phone Generator',
            'tools_phone' => 'Brazilian Phone Generator',
            'coming_soon' => 'Coming Soon',
            'under_development' => 'New tool under development',
            'playground_title' => 'Playground 🎡 Just for Fun',
            'privacy_notice' => 'By using this tool, you agree to our Privacy Policy.',
            'cookie_notice' => 'This wonderful website "Playground 🎡 Just for Fun" uses cookies to improve your experience. 
                                By using this tool, you agree to our Privacy Policy, so enjoy 😎',
            'accept' => 'Accept',
            'decline' => 'Decline',
            'entertainment_title' => 'Entertainment Hub',
            'entertainment_description' => 'Your favorite streaming and sports content',
            'watch_now' => 'Watch Now',
            'visit_now' => 'Visit Now',
            'whatsapp_info' => 'Enter the number below'

            
        ],
        'pt' => [
            'menu_home' => 'Início',
            'menu_tools' => 'Ferramentas Online',
            'menu_projects' => 'Meus Projetos',
            'menu_charts' => 'Análises',
            'delphi_title' => 'Delphi',
            'menu_dotnet' => '.NET',
            'dotnet_title' => 'Recursos para Desenvolvimento .NET',
            'tools_cpf' => 'Gerador de CPF',
            'tools_cnpj' => 'Gerador de CNPJ',
            'tools_password' => 'Gerador de Senha',
            'projects_title' => 'Projetos GitHub',
            'generate' => 'Gerar',
            'copy' => 'Copiar',
            'tools_whatsapp' => 'WhatsApp Direto',
            'whatsapp_placeholder' => 'Digite o número com DDD',
            'tools_phone' => 'Gerador de Telefone'  ,
            'coming_soon' => 'Em Breve',
            'under_development' => 'Nova ferramenta em desenvolvimento',
            'playground_title' => 'Playground 🎡 Apenas por Diversão',
            'privacy_notice' => 'Ao usar esta ferramenta, você concorda com nossa Política de Privacidade.',
            'cookie_notice' => 'Este maravilhoso site "Playground 🎡 Apenas por Diversão" usa cookies para melhorar sua experiência. 
                                Ao usar esta ferramenta, você concorda com nossa Política de Privacidade então aproveite 😎',
            'accept' => 'Aceitar',
            'decline' => 'Recusar',
            'entertainment_title' => 'Central de Entretenimento',
            'entertainment_description' => 'Seu conteúdo favorito de streaming e esportes',
            'watch_now' => 'Assistir Agora',
            'visit_now' => 'Visitar Agora',
            'whatsapp_info' => 'Informe o número abaixo',

        ]
    ];
 ?>
 <!DOCTYPE html>
 <html lang="<?php echo $lang; ?>">
 <head>
 <!-- Google AdSense -->
 <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1221014883643198" crossorigin="anonymous"></script>    
 <!-- Google tag (gtag.js) -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=G-LBCKW5PL4L"></script>
 <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-LBCKW5PL4L');
 </script>    
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
 <title>Online Tools, development, Air Traffic Audio, Delphi & .NET Resources - For fun</title>    
 <!-- SEO Meta Tags -->
 <meta name="description" content="Free online tools including CPF/CNPJ generator, password generator, live air traffic control audio, Delphi and .NET development resources. Brazilian developer tools and utilities.">
 <meta name="keywords" content="cpf generator, cnpj generator, gerador de cpf, gerador de cnpj, air traffic control, escuta aérea, delphi tools, .NET resources, password generator, brazilian developer tools">
 <meta name="author" content="Bosco Becker">
 <meta name="robots" content="index, follow">    
 <!-- Open Graph / Facebook -->
 <meta property="og:type" content="website">
 <meta property="og:url" content="https://boscobecker.fun/">
 <meta property="og:title" content="Online Tools: CPF/CNPJ Generator & Developer Resources">
 <meta property="og:description" content="Free online tools including CPF/CNPJ generator, password generator, live air traffic control audio, Delphi and .NET development resources.">
 <meta property="og:image" content="https://boscobecker.fun/assets/og-image.jpg">
 <!-- Twitter -->
 <meta property="twitter:card" content="summary_large_image">
 <meta property="twitter:url" content="https://boscobecker.fun/">
 <meta property="twitter:title" content="Online Tools: CPF/CNPJ Generator & Developer Resources">
 <meta property="twitter:description" content="Free online tools including CPF/CNPJ generator, password generator, live air traffic control audio, Delphi and .NET development resources.">
 <meta property="twitter:image" content="https://boscobecker.fun/assets/og-image.jpg">
 <meta name="description" content="João Bosco dos Reis Becker - Software Developer specializing in Delphi, .NET, PHP, and Security Research. Known as Bosco Becker (@boscobecker)">
 <meta name="keywords" content="João Bosco, Bosco Becker, boscobecker, @boscobecker, software developer, security researcher, Delphi expert, .NET developer">
 <meta name="author" content="João Bosco dos Reis Becker">    
 <!-- Open Graph / Social Media Meta Tags -->
 <meta property="og:title" content="João Bosco dos Reis Becker - Software Developer">
 <meta property="og:description" content="Professional portfolio of João Bosco (Bosco Becker) - Software Developer and Security Researcher">
 <meta property="og:image" content="assets/profile.jpg">
 <meta property="og:url" content="https://yourdomain.com">    
 <!-- Twitter Card Meta Tags -->
 <meta name="twitter:card" content="summary_large_image">
 <meta name="twitter:title" content="João Bosco dos Reis Becker (@boscobecker)">
 <meta name="twitter:description" content="Software Developer specializing in Delphi, .NET, PHP, and Security Research">
 <meta name="twitter:image" content="assets/profile.jpg">
 <!-- Entertainment-specific meta tags -->
 <meta name="keywords" content="streaming services, Netflix, Disney+, YouTube, Mercado Play, Multicanais, entertainment hub, online streaming, watch movies, TV shows, sports streaming, Brazilian entertainment">
 <meta name="description" content="Access your favorite streaming services including Netflix, Disney+, YouTube, and live sports. Watch movies, TV shows, and sports events all in one place.">   
 <!-- Open Graph tags for entertainment -->
 <meta property="og:title" content="Entertainment Hub - Stream Movies, TV Shows & Sports">
 <meta property="og:description" content="Your one-stop destination for streaming entertainment. Watch Netflix, Disney+, YouTube, and live sports.">
 <meta property="og:type" content="website">    
 <!-- Twitter Card tags -->
 <meta name="twitter:card" content="summary_large_image">
 <meta name="twitter:title" content="Entertainment Hub - Stream Movies, TV Shows & Sports">
 <meta name="twitter:description" content="Access Netflix, Disney+, YouTube, and live sports streaming all in one place.">

 <!-- SEO Meta Tags for AI Tools -->
<meta name="description" content="Explore top AI tools including ChatGPT, DeepArt, Sesame, Grammarly, Canva, and invideo AI. Enhance your productivity with AI-powered solutions.">
<meta name="keywords" content="AI tools, ChatGPT, DeepArt, Sesame, Grammarly, Canva, invideo AI, generative AI, AI productivity tools">
<meta property="og:title" content="Top AI Tools - Enhance Your Productivity with AI">
<meta property="og:description" content="Discover AI tools like ChatGPT, DeepArt, Sesame, Grammarly, Canva, and invideo AI. Boost your creativity and productivity with AI.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://boscobecker.fun/">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Top AI Tools - Enhance Your Productivity with AI">
<meta name="twitter:description" content="Explore AI tools like ChatGPT, DeepArt, Sesame, Grammarly, Canva, and invideo AI. Boost your creativity and productivity with AI.">

 <!-- Language Alternatives -->
 <link rel="alternate" hreflang="en" href="https://boscobecker.fun/?lang=en">
 <link rel="alternate" hreflang="pt" href="https://boscobecker.fun/?lang=pt">
 <link rel="canonical" href="https://boscobecker.fun/">
<!-- Existing CSS links -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">    
<link rel="stylesheet" href="css/layout.css">     
</head>
<body>
    <a href="https://wa.me/41996694916?text=Oi"  class="whatsapp-float"  target="_blank"><i class="fab fa-whatsapp"></i></a>        
    <div class="main-content">
    <div class="language-switch">
    <a href="?lang=en" class="btn btn-sm <?php echo $lang == 'en' ? 'btn-primary' : 'btn-outline-primary'; ?>">EN</a>
    <a href="?lang=pt" class="btn btn-sm <?php echo $lang == 'pt' ? 'btn-primary' : 'btn-outline-primary'; ?>">PT</a>
    <button id="theme-toggle" class="btn btn-sm btn-outline-secondary" onclick="setTheme()"><i class="fas fa-moon"></i>
    </button>
    </div>
    <br><br><br>
    <div class="row justify-content-center mb-5">
    <div class="col-lg-8 text-center">
        <h1 style="background: linear-gradient(120deg, #3b82f6, #8b5cf6, #ec4899, #f43f5e, #3b82f6);
                  background-size: 300% 300%;
                  -webkit-background-clip: text;
                  background-clip: text;
                  color: transparent;
                  font-size: 3.3rem;
                  font-weight: bold;
                  margin: 0;
                  animation: titleGradient 8s ease infinite;">
            <?php echo $translations[$lang]['playground_title']; ?>
        </h1>
    </div>
</div>
<style>
@keyframes titleGradient {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
</style>
    <section id="tools" class="mb-5">
            <h2 class="mb-4"><?php echo $translations[$lang]['menu_tools']; ?></h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <h5><?php echo $translations[$lang]['tools_cpf']; ?></h5>
                        <div id="cpf-generator" class="mt-3">
                            <div class="input-group mb-3">
                                <input type="text" id="cpf-output" class="form-control" readonly>
                                <button class="btn btn-primary" onclick="generateCPF()"><?php echo $translations[$lang]['generate']; ?></button>
                                <button class="btn btn-secondary" onclick="copyToClipboard('cpf-output')"><?php echo $translations[$lang]['copy']; ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <h5><?php echo $translations[$lang]['tools_cnpj']; ?></h5>
                        <div id="cnpj-generator" class="mt-3">
                            <div class="input-group mb-3">
                                <input type="text" id="cnpj-output" class="form-control" readonly>
                                <button class="btn btn-primary" onclick="generateCNPJ()"><?php echo $translations[$lang]['generate']; ?></button>
                                <button class="btn btn-secondary" onclick="copyToClipboard('cnpj-output')"><?php echo $translations[$lang]['copy']; ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <h5><?php echo $translations[$lang]['tools_password']; ?></h5>
                        <div id="password-generator" class="mt-3">
                            <div class="input-group mb-3">
                                <input type="text" id="password-output" class="form-control" readonly>
                                <button class="btn btn-primary" onclick="generatePassword()"><?php echo $translations[$lang]['generate']; ?></button>
                                <button class="btn btn-secondary" onclick="copyToClipboard('password-output')"><?php echo $translations[$lang]['copy']; ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <h5><i class="fab fa-whatsapp"></i> WhatsApp</h5>
                        <div class="mt-3">
                            <p><?php echo $translations[$lang]['whatsapp_info']; ?></p> <br>
                            <div class="input-group mb-3">
                            <input type="tel" id="whatsapp-number" class="form-control" 
                                       placeholder="Ex: 5511999999999" 
                                       pattern="[0-9]+"
                                       title="Digite apenas números">
                                <button class="btn btn-success" onclick="openWhatsApp()">
                                    <i class="fab fa-whatsapp"></i> Open
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <h5><i class="fas fa-phone"></i> <?php echo $translations[$lang]['tools_phone']; ?></h5>
                        <div class="mt-3">
                            <select id="phone-state" class="form-select mb-3">
                                <option value="11">São Paulo (11)</option>
                                <option value="21">Rio de Janeiro (21)</option>
                                <option value="31">Minas Gerais (31)</option>
                                <option value="41">Paraná (41)</option>
                                <option value="51">Rio Grande do Sul (51)</option>
                                <option value="61">Distrito Federal (61)</option>
                                <option value="71">Bahia (71)</option>
                                <option value="81">Pernambuco (81)</option>
                                <option value="91">Pará (91)</option>
                            </select>
                            <div class="input-group mb-3">
                                <input type="text" id="phone-output" class="form-control" readonly>
                                <button class="btn btn-primary" onclick="generatePhone()"><?php echo $translations[$lang]['generate']; ?></button>
                                <button class="btn btn-secondary" onclick="copyToClipboard('phone-output')"><?php echo $translations[$lang]['copy']; ?></button>
                            </div>
                        </div>
                    </div>
              </div>  
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <h5><i class="fas fa-plane"></i> Escuta Aérea</h5>
                        <div class="mt-3">
                            <div class="list-group">
                                <div class="list-group-item border-0 px-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <span class="status-dot me-2"></span>
                                            <span class="fw-medium">SBCT - Afonso Pena - Paraná </span>
                                        </div>
                                        <button class="btn btn-sm btn-outline-success play-button" 
                                                data-url="http://d.liveatc.net/sbct2"
                                                onclick="toggleAudio(this)">
                                            <i class="fas fa-play"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="list-group-item border-0 px-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <span class="status-dot me-2"></span>
                                            <span class="fw-medium">SBGL - Galeão - Rio de janeiro</span>
                                        </div>
                                        <button class="btn btn-sm btn-outline-success play-button" 
                                                data-url="https://stm18.xcast.com.br:8092/stream"
                                                onclick="toggleAudio(this)">
                                            <i class="fas fa-play"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="list-group-item border-0 px-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <span class="status-dot me-2"></span>
                                            <span class="fw-medium">SBKP - Viracopos - São Paulo</span>
                                        </div>
                                        <button class="btn btn-sm btn-outline-success play-button" 
                                                data-url="http://d.liveatc.net/sbkp3_twr.mp3"
                                                onclick="toggleAudio(this)">
                                            <i class="fas fa-play"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <audio id="audioPlayer" style="display: none;"></audio>
                        </div>
                    </div>
                </div>              
            </div>          
        </section>
        <section id="tools" class="mb-5">
            <h2 class="mb-4"><?php echo $lang == 'pt' ? 'Ferramentas Úteis' : 'Useful Tools'; ?></h2>
            <div class="row g-4">
                <!-- QR Code Generator -->
                <div class="col-md-6">
                    <div class="tool-card p-4">
                        <h5><i class="fas fa-qrcode"></i> <?php echo $lang == 'pt' ? 'Gerador de QR Code' : 'QR Code Generator'; ?></h5>
                        <div class="row">
                            <div class="col-md-6">
                                <select class="form-select form-select-sm mb-2" id="qrType">
                                    <option value="text"><?php echo $lang == 'pt' ? 'Texto/URL' : 'Text/URL'; ?></option>
                                    <option value="wifi"><?php echo $lang == 'pt' ? 'Rede Wi-Fi' : 'Wi-Fi Network'; ?></option>
                                    <option value="tel"><?php echo $lang == 'pt' ? 'Telefone' : 'Phone'; ?></option>
                                </select>
                                <div id="qrInputs">
                                    <!-- Dynamic inputs will be loaded here -->
                                </div>
                                <button type="button" class="btn btn-primary btn-sm w-100 mt-2" onclick="generateQR()">
                                    <i class="fas fa-sync-alt"></i> <?php echo $lang == 'pt' ? 'Gerar QR Code' : 'Generate QR Code'; ?>
                                </button>
                            </div>                            
                            <div class="col-md-6"><br>
                             <div id="qrResult" class="text-center"></div>
                            </div>
                        </div>
                    </div>
                </div>                
                <!-- LinkedIn Job Search -->
                <div class="col-md-6">
                    <div class="tool-card p-4">
                        <h5><i class="fab fa-linkedin"></i> <?php echo $lang == 'pt' ? 'Busca de Empregos LinkedIn' : 'LinkedIn Job Search'; ?></h5>
                        <div class="input-group mb-3">
                            <input type="text" id="jobSearch" class="form-control" placeholder="<?php echo $lang == 'pt' ? 'Digite cargo ou palavra-chave' : 'Enter job title or keyword'; ?>">
                            <button class="btn btn-primary" onclick="searchLinkedInJobs()">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>                
                <!-- IP Checker -->
                <div class="col-md-6">
                    <div class="tool-card p-4">
                        <h5><i class="fas fa-network-wired"></i> <?php echo $lang == 'pt' ? 'Verificar IP Público' : 'Check Public IP'; ?></h5>
                        <div class="text-center mb-3" id="publicIP">
                            <button class="btn btn-primary" onclick="checkPublicIP()">
                                <i class="fas fa-sync-alt"></i> <?php echo $lang == 'pt' ? 'Verificar meu IP' : 'Check my IP'; ?>
                            </button>
                        </div>
                    </div>
                </div>                
                <!-- Marketplace Search -->
                <div class="col-md-6">
                    <div class="tool-card p-4">
                        <h5><i class="fas fa-shopping-cart"></i> <?php echo $lang == 'pt' ? 'Busca em Marketplaces' : 'Marketplace Search'; ?></h5>
                        <div class="input-group mb-3">
                            <select class="form-select" id="marketplace">
                                <option value="mercadolivre">Mercado Livre</option>
                                <option value="magalu">Magazine Luiza</option>
                                <option value="aliexpress">AliExpress</option>
                                <option value="shopee">Shopee</option>
                                <option value="shein">SHEIN</option>
                            </select>
                            <input type="text" id="productSearch" class="form-control" placeholder="<?php echo $lang == 'pt' ? 'Digite o produto' : 'Enter product'; ?>">
                            <button class="btn btn-primary" onclick="searchProduct()"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </section>
        <section id="entertainment" class="mb-5">
            <h2 class="mb-4"><?php echo $translations[$lang]['entertainment_title']; ?></h2>           
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <img src="assets/netflix-logo.png" alt="Netflix" class="img-fluid mb-3" style="height: 60px; object-fit: contain;">
                        <h5>Netflix</h5>
                        <p class="text-muted">Stream your favorite movies and TV shows</p>
                        <a href="https://netflix.com" target="_blank" class="btn btn-danger w-100">
                            <i class="fas fa-play"></i> <?php echo $translations[$lang]['watch_now']; ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <img src="assets/disney-plus-logo.png" alt="Disney+" class="img-fluid mb-3" style="height: 60px; object-fit: contain;">
                        <h5>Disney+</h5>
                        <p class="text-muted">Endless entertainment from Disney, Pixar, Marvel, Star Wars and more</p>
                        <a href="https://disneyplus.com" target="_blank" class="btn btn-primary w-100">
                            <i class="fas fa-play"></i> <?php echo $translations[$lang]['watch_now']; ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <img src="assets/youtube-logo.png" alt="YouTube" class="img-fluid mb-3" style="height: 60px; object-fit: contain;">
                        <h5>YouTube</h5>
                        <p class="text-muted">Watch, share and create videos</p>
                        <a href="https://youtube.com" target="_blank" class="btn btn-danger w-100">
                            <i class="fab fa-youtube"></i> <?php echo $translations[$lang]['watch_now']; ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <img src="assets/mercado-livre-logo.png" alt="Mercado Livre" class="img-fluid mb-3" style="height: 60px; object-fit: contain;">
                        <h5>Mercado Play</h5>
                        <p class="text-muted">The largest e-commerce ecosystem in Latin America</p>
                        <a href="https://play.mercadolivre.com.br/?origin=navigation_menu_web#nav-header" target="_blank" class="btn btn-warning w-100">
                            <i class="fas fa-shopping-cart"></i> <?php echo $translations[$lang]['visit_now']; ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <img src="assets/multicanais-logo.png" alt="Multicanais" class="img-fluid mb-3" style="height: 60px; object-fit: contain;">
                        <h5>Multicanais</h5>
                        <p class="text-muted">Watch live sports and matches</p>
                        <a href="https://multicanais.bi" target="_blank" class="btn btn-success w-100">
                            <i class="fas fa-futbol"></i> <?php echo $translations[$lang]['watch_now']; ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <img src="assets/youtube-logo.png" alt="YouTube" class="img-fluid mb-3" style="height: 60px; object-fit: contain;">
                        <h5><?php echo $lang == 'pt' ? 'Pesquisar e ir para o YouTube' : 'Search and go to YouTube'; ?></h5>
                        <div class="input-group mb-3">
                            <input type="text" id="youtube-search" class="form-control" 
                                   placeholder="<?php echo $lang == 'pt' ? 'Pesquisar no YouTube...' : 'Search on YouTube...'; ?>">
                        </div>
                        <a href="https://youtube.com" target="_blank" class="btn btn-danger w-100" onclick="openYouTube(event)">
                            <i class="fab fa-youtube"></i> <?php echo $translations[$lang]['watch_now']; ?>
                        </a>
                    </div>
                </div>                
            </div>
        </section>

        <section id="ai-tools" class="mb-5">
            <h2 class="mb-4"><?php echo $lang == 'pt' ? 'Melhores Ferramentas de IA' : 'Top AI Tools'; ?></h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="tool-card p-4">
                       <img src="assets/chatgpt-logo.png" alt="chatgpt" class="img-fluid mb-3" style="height: 60px; object-fit: contain;">
                        <h5>ChatGPT</h5>
                        <p class="text-muted"><?php echo $lang == 'pt' ? 'Ferramenta de geração de texto' : 'Text generation tool'; ?></p>
                        <a href="https://chat.openai.com" target="_blank" class="btn btn-primary w-100">
                            <i class="fas fa-robot"></i> <?php echo $lang == 'pt' ? 'Visitar Agora' : 'Visit Now'; ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                       <img src="assets/deeparteffects-logo.png" alt="deeparteffects" class="img-fluid mb-3" style="height: 60px; object-fit: contain;">
                        <h5>DeepArt</h5>
                        <p class="text-muted"><?php echo $lang == 'pt' ? 'Transforme fotos em arte' : 'Turn photos into art'; ?></p>
                        <a href="https://www.deeparteffects.com/" target="_blank" class="btn btn-primary w-100">
                            <i class="fas fa-paint-brush"></i> <?php echo $lang == 'pt' ? 'Visitar Agora' : 'Visit Now'; ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                    <img src="assets/sesame-logo.png" alt="sesame" class="img-fluid mb-3" style="height: 60px; object-fit: contain;">
                        <h5>Sesame</h5>
                        <p class="text-muted"><?php echo $lang == 'pt' ? 'Demonstração de voz via conversa' : 'Conversational voice demo'; ?></p>
                        <a href="https://www.sesame.com" target="_blank" class="btn btn-primary w-100">
                            <i class="fas fa-shield-alt"></i> <?php echo $lang == 'pt' ? 'Visitar Agora' : 'Visit Now'; ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <img src="assets/Grammarly-logo.png" alt="Grammarly" class="img-fluid mb-3" style="height: 60px; object-fit: contain;">
                        <h5>Grammarly</h5>
                        <p class="text-muted"><?php echo $lang == 'pt' ? 'Assistente de escrita' : 'Writing assistant'; ?></p>
                        <a href="https://www.grammarly.com" target="_blank" class="btn btn-primary w-100">
                            <i class="fas fa-spell-check"></i> <?php echo $lang == 'pt' ? 'Visitar Agora' : 'Visit Now'; ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <img src="assets/Canva-logo.png" alt="Canva" class="img-fluid mb-3" style="height: 60px; object-fit: contain;">
                        <h5>Canva</h5>
                        <p class="text-muted"><?php echo $lang == 'pt' ? 'Ferramenta de design gráfico' : 'Graphic design tool'; ?></p>
                        <a href="https://www.canva.com" target="_blank" class="btn btn-primary w-100">
                            <i class="fas fa-palette"></i> <?php echo $lang == 'pt' ? 'Visitar Agora' : 'Visit Now'; ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <img src="assets/invideoIA-logo.png" alt="invideoIA" class="img-fluid mb-3" style="height: 60px; object-fit: contain;"> 
                        <h5>invideo AI</h5>
                        <p class="text-muted"><?php echo $lang == 'pt' ? 'Gere videos com IA' : 'Generate video with IA'; ?></p>
                        <a href="https://invideo.io/pt/criar/ai-video-generator/" target="_blank" class="btn btn-primary w-100">
                            <i class="fas fa-video"></i> <?php echo $lang == 'pt' ? 'Visitar Agora' : 'Visit Now'; ?>
                        </a>
                    </div>
                </div>                
            </div>
        </section>
        <section id="projects" class="mb-5">
            <h2 class="mb-4"><?php echo $translations[$lang]['projects_title']; ?></h2>
            <div id="github-projects" class="row g-4">
                <script>
                        // Load GitHub Projects
                        fetch('https://gh-pinned-repos-tsj7ta5xfhep.deno.dev/?username=boscobecker')
                            .then(response => response.json())
                            .then(data => {
                                const projectsContainer = document.getElementById('github-projects');
                                data.forEach(repo => {
                                    const card = `
                                        <div class="col-md-6">
                                            <div class="tool-card p-4">
                                                <h5>${repo.repo}</h5>
                                                <p>${repo.description || ''}</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a href="https://github.com/${repo.owner}/${repo.repo}" class="btn btn-primary btn-sm" target="_blank">
                                                        <i class="fab fa-github"></i> View Project
                                                    </a>
                                                    <span class="text-muted">
                                                        <i class="fas fa-star"></i> ${repo.stars}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    `;
                                    projectsContainer.innerHTML += card;
                                });
                            })
                            .catch(error => {
                                console.error('Error fetching GitHub projects:', error);
                                document.getElementById('github-projects').innerHTML = '<div class="col-12"><p class="text-center">Unable to load GitHub projects</p></div>';
                            });
                </script>
        </section>   
        <section id="delphi" class="mb-5">
            <h2 class="mb-4"><?php echo $translations[$lang]['delphi_title']; ?></h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <h5><i class="fas fa-graduation-cap"></i> Learning Resources</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="https://learndelphi.org" target="_blank" class="text-decoration-none">LearnDelphi.org</a></li>
                            <li class="mb-2"><a href="https://docwiki.embarcadero.com" target="_blank" class="text-decoration-none">Embarcadero DocWiki</a></li>
                            <li class="mb-2"><a href="https://delphi.fandom.com" target="_blank" class="text-decoration-none">Delphi Wiki</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <h5><i class="fas fa-code"></i> Components & Libraries</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="https://github.com/project-jedi/jvcl" target="_blank" class="text-decoration-none">JVCL Components</a></li>
                            <li class="mb-2"><a href="https://github.com/RRUZ/vcl-styles-utils" target="_blank" class="text-decoration-none">VCL Styles Utils</a></li>
                            <li class="mb-2"><a href="https://github.com/synopse/mORMot" target="_blank" class="text-decoration-none">mORMot Framework</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <h5><i class="fas fa-database"></i> Database Tools</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="https://www.devart.com/mydac/" target="_blank" class="text-decoration-none">MyDAC Components</a></li>
                            <li class="mb-2"><a href="https://www.firebase.io" target="_blank" class="text-decoration-none">FireDAC</a></li>
                            <li class="mb-2"><a href="https://www.zeos-lib.sourceforge.net" target="_blank" class="text-decoration-none">Zeos Library</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <h5><i class="fas fa-users"></i> Community</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="https://forums.embarcadero.com" target="_blank" class="text-decoration-none">Embarcadero Forums</a></li>
                            <li class="mb-2"><a href="https://stackoverflow.com/questions/tagged/delphi" target="_blank" class="text-decoration-none">Stack Overflow</a></li>
                            <li class="mb-2"><a href="https://www.facebook.com/groups/delphiprogramming" target="_blank" class="text-decoration-none">Facebook Group</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <h5><i class="fas fa-tools"></i> <?php echo $translations[$lang]['coming_soon']; ?></h5>
                        <div class="mt-3">
                            <div class="text-center text-muted">
                                <i class="fas fa-cog fa-spin fa-2x mb-3"></i>
                                <p><?php echo $translations[$lang]['under_development']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <h5><i class="fas fa-rocket"></i> <?php echo $translations[$lang]['coming_soon']; ?></h5>
                        <div class="mt-3">
                            <div class="text-center text-muted">
                                <i class="fas fa-code fa-2x mb-3"></i>
                                <p><?php echo $translations[$lang]['under_development']; ?></p>
                            </div>
                        </div>
                    </div>
                </div> 
        </section>
        <section id="dotnet" class="mb-5">
            <h2 class="mb-4"><?php echo $translations[$lang]['dotnet_title']; ?></h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <h5><i class="fas fa-book"></i> Architecture</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="https://learn.microsoft.com/en-us/dotnet/architecture/modern-web-apps-azure/" target="_blank" class="text-decoration-none">Modern Web Apps with Azure</a></li>
                            <li class="mb-2"><a href="https://learn.microsoft.com/en-us/dotnet/architecture/microservices/" target="_blank" class="text-decoration-none">Microservices Architecture</a></li>
                            <li class="mb-2"><a href="https://github.com/hgmauri/references-for-dotnet-developers#architecture" target="_blank" class="text-decoration-none">Architecture References</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <h5><i class="fas fa-cloud"></i> Cloud & DevOps</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="https://learn.microsoft.com/en-us/azure/architecture/" target="_blank" class="text-decoration-none">Azure Architecture Center</a></li>
                            <li class="mb-2"><a href="https://github.com/hgmauri/references-for-dotnet-developers#devops" target="_blank" class="text-decoration-none">DevOps Best Practices</a></li>
                            <li class="mb-2"><a href="https://github.com/hgmauri/references-for-dotnet-developers#containers" target="_blank" class="text-decoration-none">Container Solutions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <h5><i class="fas fa-database"></i> Data & Storage</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="https://github.com/hgmauri/references-for-dotnet-developers#entity-framework" target="_blank" class="text-decoration-none">Entity Framework</a></li>
                            <li class="mb-2"><a href="https://github.com/hgmauri/references-for-dotnet-developers#dapper" target="_blank" class="text-decoration-none">Dapper ORM</a></li>
                            <li class="mb-2"><a href="https://github.com/hgmauri/references-for-dotnet-developers#cache" target="_blank" class="text-decoration-none">Caching Strategies</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <h5><i class="fas fa-shield-alt"></i> Security & Identity</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="https://github.com/hgmauri/references-for-dotnet-developers#security" target="_blank" class="text-decoration-none">Security Best Practices</a></li>
                            <li class="mb-2"><a href="https://learn.microsoft.com/en-us/aspnet/core/security/" target="_blank" class="text-decoration-none">ASP.NET Core Security</a></li>
                            <li class="mb-2"><a href="https://github.com/hgmauri/references-for-dotnet-developers#authentication" target="_blank" class="text-decoration-none">Authentication Patterns</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <h5><i class="fas fa-tachometer-alt"></i> Performance</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="https://github.com/hgmauri/references-for-dotnet-developers#performance" target="_blank" class="text-decoration-none">Performance Optimization</a></li>
                            <li class="mb-2"><a href="https://learn.microsoft.com/en-us/dotnet/core/diagnostics/" target="_blank" class="text-decoration-none">.NET Diagnostics</a></li>
                            <li class="mb-2"><a href="https://github.com/hgmauri/references-for-dotnet-developers#benchmarking" target="_blank" class="text-decoration-none">Benchmarking Tools</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tool-card p-4">
                        <h5><i class="fas fa-code"></i> Modern Development</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="https://github.com/hgmauri/references-for-dotnet-developers#minimal-apis" target="_blank" class="text-decoration-none">Minimal APIs</a></li>
                            <li class="mb-2"><a href="https://github.com/hgmauri/references-for-dotnet-developers#clean-architecture" target="_blank" class="text-decoration-none">Clean Architecture</a></li>
                            <li class="mb-2"><a href="https://github.com/hgmauri/references-for-dotnet-developers#domain-driven-design" target="_blank" class="text-decoration-none">Domain-Driven Design</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    <section id="about" class="mb-5">
    <h2 class="mb-4 text-center">About Me</h2>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="tool-card p-4 text-center">
                <div class="d-flex flex-column align-items-center mb-4">
                    <img src="assets/profile.jpg" 
                         alt="Bosco Becker" 
                         class="rounded-circle mb-3" 
                         style="width: 150px; height: 150px; object-fit: cover;">
                    <h3 class="mb-3">João Bosco dos Reis Becker</h3>
                </div>
                <div class="social-links mb-4 d-flex flex-wrap justify-content-center gap-2">
                    <a href="https://www.linkedin.com/in/boscobecker/" target="_blank" class="btn btn-outline-primary"> <i class="fab fa-linkedin"></i> LinkedIn</a>
                    <a href="https://github.com/boscobecker" target="_blank" class="btn btn-outline-dark"><i class="fab fa-github"></i> GitHub</a>
                    <a href="https://stackoverflow.com/users/7370185/joao-bosco-dos-reis-becker" target="_blank" class="btn btn-outline-warning"><i class="fab fa-stack-overflow"></i> Stack Overflow EN </a>
                    <a href="https://pt.stackoverflow.com/users/66937/joao-bosco-dos-reis-becker" target="_blank" class="btn btn-outline-warning"><i class="fab fa-stack-overflow"></i> Stack Overflow PT </a>
                    <a href="https://www.openbugbounty.org/researchers/BoscoBecker/" target="_blank" class="btn btn-outline-danger"><i class="fas fa-bug"></i> Open Bug Bounty</a>
                </div>
                <div class="skills">
                    <h5 class="mb-3"><i class="fas fa-code"></i> Skills</h5>
                    <div class="d-flex flex-wrap justify-content-center gap-2">
                        <span class="badge bg-primary">Delphi</span>
                        <span class="badge bg-success">.NET</span>
                        <span class="badge bg-info">PHP</span>
                        <span class="badge bg-warning">JavaScript</span>
                        <span class="badge bg-danger">Security Research</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</section>
    </div>
    <footer class="text-center py-4" style="margin-left: 0 !important;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <p class="mb-0">
                        <a href="termuse.php?lang=<?php echo $lang; ?>" class="text-decoration-none me-3"><?php echo $lang == 'pt' ? 'Termos de Uso' : 'Terms of Use'; ?></a>|
                        <a href="privacy.php?lang=<?php echo $lang; ?>" class="text-decoration-none ms-3"><?php echo $lang == 'pt' ? 'Política de Privacidade' : 'Privacy Policy'; ?></a>
                    </p>
                    <p class="text-muted mt-2">© <?php echo date('Y'); ?> Bosco Becker. <?php echo $lang == 'pt' ? 'Todos os direitos reservados.' : 'All rights reserved.'; ?>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/site.js"></script>
    <script type="application/ld+json">
                {"@context": "http://schema.org",
                    "@type": "Person",
                    "name": "João Bosco dos Reis Becker",
                    "alternateName": ["Bosco Becker", "@boscobecker", "boscobecker"],
                    "image": "assets/profile.jpg",
                    "jobTitle": "Software Developer",
                    "url": "https://boscobecker.fun",
                    "sameAs": [
                        "https://www.linkedin.com/in/boscobecker/",
                        "https://github.com/boscobecker",
                        "https://stackoverflow.com/users/7370185/joao-bosco-dos-reis-becker"
                ],"knowsAbout": ["Delphi", ".NET", "PHP", "JavaScript", "Security Research"]}
    </script>
    <script type="application/ld+json">
                {
                    "@context": "http://schema.org",
                    "@type": "ItemList",
                    "name": "Entertainment Streaming Services",
                    "itemListElement": [
                        {
                            "@type": "EntertainmentBusiness",
                            "name": "Netflix",
                            "description": "Stream your favorite movies and TV shows",
                            "url": "https://netflix.com",
                            "image": "assets/netflix-logo.png"
                        },
                        {
                            "@type": "EntertainmentBusiness",
                            "name": "Disney+",
                            "description": "Endless entertainment from Disney, Pixar, Marvel, Star Wars and more",
                            "url": "https://disneyplus.com",
                            "image": "assets/disney-plus-logo.png"
                        },
                        {
                            "@type": "EntertainmentBusiness",
                            "name": "YouTube",
                            "description": "Watch, share and create videos",
                            "url": "https://youtube.com",
                            "image": "assets/youtube-logo.png"
                        },
                        {
                            "@type": "EntertainmentBusiness",
                            "name": "Mercado Play",
                            "description": "The largest e-commerce ecosystem in Latin America",
                            "url": "https://play.mercadolivre.com.br",
                            "image": "assets/mercado-livre-logo.png"
                        },
                        {
                            "@type": "SportsOrganization",
                            "name": "Multicanais",
                            "description": "Watch live sports and matches",
                            "url": "https://multicanais.bi",
                            "image": "assets/multicanais-logo.png"
                        }
                    ]
                }
    </script>
    <div id="cookie-consent" class="position-fixed bottom-0 start-0 w-100 p-3" style="display: none; z-index: 1000;">
        <div class="container">
            <div class="tool-card p-4">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <p class="mb-0"><?php echo $translations[$lang]['cookie_notice']; ?></p>
                    </div>
                    <div class="col-md-4 text-end">
                        <button class="btn btn-primary" onclick="acceptCookies()"><?php echo $translations[$lang]['accept']; ?></button>                        
                        <button class="btn btn-outline-secondary" onclick="declineCookies()"><?php echo $translations[$lang]['decline']; ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>       
</html>




