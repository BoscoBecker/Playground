<?php
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';

$translations = [
    'en' => [
        'title' => 'Privacy Policy',
        'intro' => 'We reserve the right to change this agreement without prior notice. Therefore, we recommend that you consult our privacy policy regularly to stay updated.',
        'confidentiality' => 'Ensuring the confidentiality of personal data of our website users is important to us.',
        'data_treatment' => 'Any and all personal information collected on our site will be treated with complete confidentiality, discretion, and in accordance with applicable laws.',
        'ads_title' => 'Advertisements',
        'ads_content' => 'Advertisements are important to keep our site active, paying for hosting and other costs.',
        'ads_responsibility' => 'The offers, products, and services contained in these advertisements are the sole responsibility of the advertisers. We are not responsible for any situations related to the purchase of items and other actions that you may take on such advertisers\' sites.',
        'data_collection' => 'Like other websites, we collect, store, and use information contained in advertisements. This information includes your IP address (Internet Protocol), your ISP (Internet Service Provider), the device (mobile, computer, or tablet) and browser (such as Firefox or Google Chrome) you used when visiting our website, the time of your visit, and which pages you visited within our domain.',
        'cookies_title' => 'Cookies',
        'cookies_content' => 'We use cookies to store information, such as your personal preferences when visiting our website.',
        'third_party' => 'As mentioned above, we display third-party advertising on our website. Some of these advertisers may use technologies such as cookies and/or web beacons when advertising on our site, which will cause these advertisers (such as Google through Google AdSense) to also receive your personal information, such as IP address, ISP, browser, etc.',
        'geotargeting' => 'This function is typically used for geotargeting (showing São Paulo advertising only to readers from São Paulo, for example) or displaying targeted advertising to a specific type of user (such as showing restaurant advertising to a user who regularly visits culinary pages, for example).',
        'social_ads' => 'We may also use this information to offer products of your interest, based on your browsing on this site, on networks such as Facebook Ads, Instagram, and others.',
        'cookie_control' => 'You have the power to turn off your cookies in your browser options or by making changes in antivirus program tools, such as Norton Internet Security.',
        'cookie_warning' => 'However, this may change how you interact with our website or other websites. This may or may not affect your ability to log in to programs, sites, or forums on our and other networks.',
        'third_party_sites' => 'Our privacy policy does not apply to third-party websites. If you visit another site from ours, you should read its privacy policy.',
        'disclaimer' => 'We are not responsible for the privacy policy or content present on these sites.'
    ],
    'pt' => [
        'title' => 'Políticas de Privacidade',
        'intro' => 'Reservamos o direito de alterar este acordo sem aviso prévio. Deste modo, recomendamos que consulte a nossa política de privacidade com regularidade para estar sempre atualizado.',
        'confidentiality' => 'A garantia da confidencialidade dos dados pessoais dos utilizadores do nosso site é importante para nós.',
        'data_treatment' => 'Toda e qualquer informação pessoal coletada em nosso site será tratada com total confidencialidade, discrição e em concordância com as leis brasileiras.',
        'ads_title' => 'Os Anúncios',
        'ads_content' => 'Os anúncios são importantes para manter nosso site ativo, pagando pelos custos de hospedagem e demais.',
        'ads_responsibility' => 'As ofertas, produtos e serviços contidos nesses anúncios são de total responsabilidade dos anunciantes. Não nos responsabilizamos por quaisquer situações relacionadas à compra de itens e outras ações que você venha a executar no site de tais anunciantes.',
        'data_collection' => 'Tal como outros sites, coletamos, armazenamos e utilizamos informações contidas nos anúncios. Essas informações incluem o seu endereço IP (Internet Protocol), o seu ISP (Internet Service Provider), o dispositivo (celular, computador ou tablet) e o browser (como o Firefox ou o Google Chrome) que você utilizou ao visitar o nosso website, o tempo da sua visita e quais páginas visitou dentro do nosso domínio.',
        'cookies_title' => 'Os Cookies',
        'cookies_content' => 'Utilizamos cookies para armazenar informações, tais como as suas preferências pessoais quando visita o nosso website.',
        'third_party' => 'Conforme mencionado acima, veiculamos publicidade de terceiros no nosso website. Alguns destes publicitários poderão utilizar tecnologias como cookies e/ou web beacons ao publicitar no nosso site, o que fará com que esses publicitários (como o Google através do Google AdSense) também recebam sua informação pessoal, como o endereço IP, o seu ISP, o seu browser, etc.',
        'geotargeting' => 'Essa função é geralmente utilizada para geotargeting (mostrar publicidade de São Paulo apenas aos leitores oriundos de São Paulo, por exemplo) ou apresentar publicidade direcionada a um tipo de utilizador (como mostrar publicidade de restaurante a um utilizador que visita páginas de culinária regularmente, por exemplo).',
        'social_ads' => 'Também poderemos utilizar essas informações para ofertar produtos de seu interesse, com base em sua navegação por esse site, em redes como Facebook Ads, Instagram e outras.',
        'cookie_control' => 'Você detém o poder de desligar os seus cookies nas opções do seu browser ou efetuando alterações nas ferramentas de programas antivírus, como o Norton Internet Security.',
        'cookie_warning' => 'No entanto, isso poderá alterar a forma como interage com o nosso website ou outros websites. Isso poderá afetar ou não permitir que faça logins em programas, sites ou fóruns da nossa e de outras redes.',
        'third_party_sites' => 'A nossa política de privacidade não se aplica a sites de terceiros. Caso visite outro site a partir do nosso, deverá ler a política de privacidade do mesmo.',
        'disclaimer' => 'Não nos responsabilizamos pela política de privacidade ou pelo conteúdo presente nesses sites.'
    ]
];
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy</title>
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
                    <p><?php echo $translations[$lang]['intro']; ?></p>
                    <p><?php echo $translations[$lang]['confidentiality']; ?></p>
                    <p><?php echo $translations[$lang]['data_treatment']; ?></p>
                    <h4 class="section-title"><?php echo $translations[$lang]['ads_title']; ?></h4>
                    <p><?php echo $translations[$lang]['ads_content']; ?></p>
                    <p><?php echo $translations[$lang]['ads_responsibility']; ?></p>
                    <p><?php echo $translations[$lang]['data_collection']; ?></p>
                    <h4 class="section-title"><?php echo $translations[$lang]['cookies_title']; ?></h4>
                    <p><?php echo $translations[$lang]['cookies_content']; ?></p>
                    <p><?php echo $translations[$lang]['third_party']; ?></p>
                    <p><?php echo $translations[$lang]['geotargeting']; ?></p>
                    <p><?php echo $translations[$lang]['social_ads']; ?></p>
                    <p><?php echo $translations[$lang]['cookie_control']; ?></p>
                    <p><?php echo $translations[$lang]['cookie_warning']; ?></p>
                    <p><?php echo $translations[$lang]['third_party_sites']; ?></p>
                    <p><?php echo $translations[$lang]['disclaimer']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <script async src="js/site.js"></script>
    <script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>