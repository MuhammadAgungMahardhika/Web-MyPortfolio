<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="/asset/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Font Awesome -->
    <script src="/asset/9d17737383.js" crossorigin="anonymous"></script>

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
    <title>MuhammadAgungMahardhika_Portfolio</title>
</head>
<?php
$projects = [
    (object)['url' => 'https://apar.attendances.online/', 'image' => 'images/apar2.jpg',  'title' => 'Web Apar Tourism Village', 'description' => 'Website that allow you to pre trip with google maps api to Apar Tourism Village using CodeIgniter 4, PHP, Javascript/Jquery and Google Maps API Developer'],
    (object)['url' => 'https://stimik.herokuapp.com/', 'image' => 'images/2.png',  'title' => 'Web Design- Stimik Indonesia Festivals', 'description' => 'Landing web design with ocean theme by using
                                    HTML,CSS,Bootsrap,Javascript and Jquery'],
    (object)['url' => 'https://greenfoot.org/scenarios/25077', 'image' => 'images/3.png',  'title' => 'Game- Honey Bear Survive', 'description' => "A simple shooting game using Java with greenfoot's app"],
    (object)['url' => 'https://batubusuak.wordpress.com/', 'image' => 'images/4.png',  'title' => 'Blog- Batu Busuk Destination Tourism Web', 'description' => "A website that provide information of Batu Busuk destination
                                    Tourism in Lambung Bukit/ Pauh/ Padang City/ West Sumatra.
                                    By using Wordpress.com"],
    (object)['url' => 'https://github.com/MuhammadAgungMahardhika/Aplikasi-Logistik-Gudang-Farmasi-Dinas-Kesehatan-Prov.Sumbar', 'image' => 'images/5.png',  'title' => 'Web Application- West Sumatra Provincial Health Service
                                    Pharmacy Logistics Application', 'description' => "A web application that can manage logistics goods in
                                    pharmacy warehouses using HTML, CSS, Bootstrap, Javascript,
                                    Jquery, PHP, Mysql server and other library/plugins"],
    (object)['url' => 'https://github.com/MuhammadAgungMahardhika/Pafitness', 'image' => 'images/Android.jpeg',  'title' => 'Android- Gym Mobile Application', 'description' => "An android mobile Application for searching gym in Padang City. By using Java, Firebase Auth, API, PostrgreSQL, Google Maps API"],
];

$contacts = [
    (object) ["url" => "https://muhammadagungmahardhika.wordpress.com/", "icon" => "fa-brands fa-wordpres"],
    (object) ["url" => "https://medium.com/@m.agungmahardika12", "icon" => "fa-brands fa-medium"],
    (object) ["url" => "https://www.instagram.com/m.agungmahardhika/", "icon" => "fa-brands fa-instagram"],
    (object) ["url" => "https://www.linkedin.com/in/muhammad-agung-mahardhika-ba1b39203/", "icon" => "fa-brands fa-linkedin"],
    (object) ["url" => "https://wa.me/6281373517899", "icon" => "fa-brands fa-whatsapp"],
    (object) ["url" => "https://github.com/MuhammadAgungMahardhika", "icon" => "fa-brands fa-github"],
];

$certificates = [
    (object)["url" => "https://www.freecodecamp.org/certification/Muhammad_Agung_mahardhika/responsive-web-design", "image" => "images/Freecodecamp.png", "title" => "Responsive web design"],
    (object)["url" => "https://www.dicoding.com/certificates/JLX136K5GP72", "image" => "images/dicoding.jpg", "title" => "Cloud practitioner essentials (dasar AWS Cloud)"],
    (object)["url" => "https://www.dicoding.com/certificates/07Z65DELYXQR", "image" => "images/dicoding.jpg", "title" => "Membuat aplikasi Android untuk pemula"],
    (object)["url" => "https://certificates.revou.co/muhammadagung-mahardhika-certificate-completion-damc22.pdf", "image" => "images/revou.jpg", "title" => "Intro to Data Analytics"],

]
?>

<body>
    <!-- Awal Header -->
    <header class="container">
        <!-- Awal navigasi -->
        <nav class="container navbar navbar-expand-lg navbar-light" id="Nav">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-example" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbar-example">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#AboutMe">ABOUT ME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#MyProjects">MY PROJECTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#MyCertificates">CERTIFICATES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#MyContacts">GET IN TOUCH</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Akhir navigasi -->
        <aside>
            <figure class="row text-center" id="MyFoto">
                <div class="col">
                    <img class="rounded-circle" src="images/MyFoto.JPG" width="200" id="Foto" />
                </div>
            </figure>

            <div class="row text-center" id="MyName">
                <div class="col">
                    <h1 class="NamaSaya">MUHAMMAD AGUNG MAHARDHIKA</h1>
                </div>
            </div>
        </aside>

        <aside class="copyright">
            Image source
            <a href="https://pixabay.com/id/users/pexels-2286921/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1868667">Pexels</a>
            dari
            <a href="https://pixabay.com/id/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1868667">Pixabay</a>
        </aside>
    </header>
    <!-- Akhir header -->

    <main>
        <!-- About me -->
        <section class="container text-center" id="AboutMe">
            <article class="row">
                <h2 class="efek1">ABOUT ME</h2>
                <div class="col">
                    <p style="text-align: justify">
                        Nama saya adalah Muhammad Agung Mahardhika. Saya berasal dari Kota
                        Padang Sumatra Barat. Saat ini saya sedang berkuliah di jurusan Sistem Informasi Universitas Andalas. Saya sangat menggemari programing dalam bidang Web Developing terutama pada bagian Front-end. Saya bercita-cita menjadi seorang Front-end Developer professional.
                    </p>
                </div>
            </article>
        </section>
        <!-- Akhir About me -->

        <!-- My Projects -->
        <section class="container text-center" id="MyProjects">
            <div class="row">
                <h2 class="efek2">MY PROJECTS</h2>
                <div class="col allcard">
                    <?php foreach ($projects as $project) : ?>
                        <div class="card" style="width: 18rem">
                            <a href="<?= $project->url ?>">
                                <img src="<?= $project->image ?>" class="card-img-top" alt="..." sizes="300" />
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?= $project->title ?>
                                    </h5>
                                    <p class="card-text">
                                        <?= $project->description ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Akhir My Projects -->

        <!-- Awal My Certificate -->
        <section class="container text-center" id="MyCertificates">
            <div class="row">
                <h2 class="efek3">CERTIFICATES</h2>
                <div class="col allcertificate">
                    <?php foreach ($certificates as $certificate): ?>
                        <div class="card" style="width: 18rem">
                            <a href="<?= $certificate->url ?>">
                                <img src="<?= $certificate->image ?>" class="card-img-top" alt="..." sizes="300" />
                                <div class="card-body">
                                    <p class="card-title"><?= $certificate->title ?></p>
                                </div>
                                <div class="star">
                                    <i class="fa fa-star fa-2x"></i>
                                </div>
                            </a>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </section>
        <!-- Akhir My Cerficate -->

        <!-- My Contacts -->
        <section class="container-fluid text-center" id="MyContacts">
            <div class="row">
                <h2 class="efek4">GET IN TOUCH</h2>
                <div class="col-md-12 text-center">
                    <?php foreach ($contacts as $contact): ?>
                        <a href="<?= $contact->url ?>"><i class="<?= $contact->icon ?> fa-3x p-2"></i></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Akhir My Contacts -->
    </main>
    <!-- Akhir main -->


    <script src="/asset/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/asset/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/asset/function.js"></script>
</body>

</html>