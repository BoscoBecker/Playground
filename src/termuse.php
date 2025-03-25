<?php
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';

$translations = [
    'en' => [
        'title' => 'Terms of Use',
        'section1_title' => '1. Acceptance of Terms',
        'section1_content' => 'By accessing and using this site, you agree to these Terms of Use. If you do not agree with any of the conditions established here, we recommend that you do not use our services.',
        'section2_title' => '2. Site Usage',
        'section2_content' => 'The content available on this site is for informational purposes only and may be changed without prior notice. Misuse of information may result in suspension or blocking of access to the site.',
        'section3_title' => '3. Copyright',
        'section3_content' => 'All content on this site, including texts, images, videos, and other materials, is protected by copyright and may not be reproduced, distributed, or used without prior authorization.',
        'section4_title' => '4. User Responsibilities',
        'section4_content' => '- Do not engage in illegal activities or violate third-party rights.<br>
                             - Do not spread offensive, defamatory, or harmful content.<br>
                             - Do not attempt to access restricted areas of the site without authorization.',
        'section5_title' => '5. Ads and External Links',
        'section5_content' => 'Our site may display third-party ads and contain links to other sites. We are not responsible for the content, privacy policies, or practices of these external sites.',
        'section6_title' => '6. Privacy and Cookies',
        'section6_content' => 'The use of the site is subject to our Privacy Policy. We use cookies to improve user experience and display personalized advertising. You can manage your cookie preferences directly in your browser.',
        'section7_title' => '7. Terms Modifications',
        'section7_content' => 'We reserve the right to modify these Terms of Use at any time. Changes will take effect as soon as they are published on the site.'
    ],
    'pt' => [
        'title' => 'Termos de Uso',
        'section1_title' => '1. Aceitação dos Termos',
        'section1_content' => 'Ao acessar e utilizar este site, você concorda com estes Termos de Uso. Caso não concorde com alguma das condições aqui estabelecidas, recomendamos que não utilize nossos serviços.',
        'section2_title' => '2. Uso do Site',
        'section2_content' => 'O conteúdo disponibilizado neste site é apenas para fins informativos e pode ser alterado sem aviso prévio. O uso indevido das informações pode resultar em suspensão ou bloqueio do acesso ao site.',
        'section3_title' => '3. Direitos Autorais',
        'section3_content' => 'Todo o conteúdo presente neste site, incluindo textos, imagens, vídeos e demais materiais, é protegido por direitos autorais e não pode ser reproduzido, distribuído ou utilizado sem autorização prévia.',
        'section4_title' => '4. Responsabilidades do Usuário',
        'section4_content' => '- Não praticar atividades ilegais ou que violem os direitos de terceiros.<br>
                             - Não disseminar conteúdo ofensivo, difamatório ou prejudicial.<br>
                             - Não tentar acessar áreas restritas do site sem autorização.',
        'section5_title' => '5. Anúncios e Links Externos',
        'section5_content' => 'Nosso site pode exibir anúncios de terceiros e conter links para outros sites. Não nos responsabilizamos pelo conteúdo, políticas de privacidade ou práticas desses sites externos.',
        'section6_title' => '6. Privacidade e Cookies',
        'section6_content' => 'O uso do site está sujeito à nossa Política de Privacidade. Utilizamos cookies para melhorar a experiência do usuário e exibir publicidade personalizada. Você pode gerenciar suas preferências de cookies diretamente no seu navegador.',
        'section7_title' => '7. Modificações nos Termos',
        'section7_content' => 'Reservamos o direito de modificar estes Termos de Uso a qualquer momento. As alterações entrarão em vigor assim que forem publicadas no site.'
    ]
];
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Use</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">    
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="tool-card p-4">
                <a href="https://boscobecker.fun" class="position-absolute top-0 end-0 text-decoration-none p-2" style="color: #e4e4e4;"> <b class="fas fa-times"> X </b></a>
                <h2 class="text-center mb-4"><?php echo $translations[$lang]['title']; ?></h2>
                    <?php for($i = 1; $i <= 7; $i++): ?>
                        <div class="mb-4">
                            <h5><?php echo $translations[$lang]['section'.$i.'_title']; ?></h5>
                            <p><?php echo $translations[$lang]['section'.$i.'_content']; ?></p>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
    <script async src="js/site.js"></script>
    <script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>