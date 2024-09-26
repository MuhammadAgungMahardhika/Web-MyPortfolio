<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="asset/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Font Awesome -->
    <script src="asset/9d17737383.js" crossorigin="anonymous"></script>

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
    <title>MuhammadAgungMahardhika_Portfolio</title>
</head>
<?php
$projects = [
    (object)[
        'url' => 'https://dairyland.id/dairy-tour/',
        'images' => ['images/dairyland.png', 'images/dairyland2.png'],
        'title' => 'Web Revamp DairyLand ',
        'description' => 'Revamp the DairyLand Website using <strong>Laravel 11, Livewire, Tailwind and Daisy UI</strong> Based on Figma Designed <strong>(On going)</strong>'
    ],
    (object)[
        'url' => 'https://dairyland.id/dairy-tour/',
        'images' => ['images/dairyland.png', 'images/dairyland2.png'],
        'title' => 'Web SIMRS and Electronic Medical Record for Padang Eye Center',
        'description' => 'The SIMRS and EMR systems developed for Padang Eye Center are designed to enhance hospital management and patient care by integrating seamlessly with <strong> BPJS and Satu Sehat platforms </strong>. <strong>Utilizing Laravel 11 and Livewire </strong>, the project encompasses several key modules, including <strong>registration, polyclinic, medical records, laboratory, pharmacy, and cashier </strong>. These modules streamline patient registration, facilitate efficient management of polyclinic services, and ensure comprehensive medical record keeping. <strong>(On going)</strong>'
    ],
    (object)[
        'url' => 'https://farmweb.technosv.muy.id/',
        'images' => ['images/farmweb.png', 'images/farmweb2.png'],
        'title' => 'Web Smart Broiler Farm ',
        'description' => '<strong>IOT</strong> Website that provides the realtime sensors such as temperature, humidity and amonia from the broiler farm to website in realtime using <strong> Laravel 10 , ESP32 and Websocket </strong>'
    ],
    (object)[
        'url' => 'https://github.com/MuhammadAgungMahardhika/Web-pemilihan-mahasiswa-berprestasi',
        'images' => ['images/pilmapres.png', 'images/pilmapres2.png', 'images/pilmapres3.png'],
        'title' => 'Web Selection of Outstanding Student at Andalas University',
        'description' => 'The Outstanding Student Selection application, developed using <strong>Laravel 10</strong>, serves as an innovative platform to recognize and honor students excelling in both academic and extracurricular activities. This project involves <strong> multiple users and six key actors </strong>: students, department administrators, faculty administrators, university administrators, faculty judges, and university judges. The site facilitates online registration, document uploads, and transparent announcement of results, ultimately fostering a supportive academic community that encourages all students to strive for excellence.'
    ],
    (object)[
        'url' => 'https://apar.attendances.online/',
        'images' => ['images/apar1.png', 'images/apar2.png', 'images/apar3.png'],
        'title' => 'Web Apar Tourism Village',
        'description' => 'Website that allow you to pre trip with google maps api to Apar Tourism Village using <strong>CodeIgniter 4, PHP, Javascript/Jquery and Google Maps API Developer </strong>'
    ],
    (object)[
        'url' => 'https://github.com/MuhammadAgungMahardhika/Mobile-Gis-Desa-Wisata-Apar',
        'images' => ['images/mobile-apar.png', 'images/mobile-apar2.png'],
        'title' => 'Mobile Apar Tourism Village',
        'description' => 'Mobile Version of Apar Tourism Village for more accurate GPS location. Built with <strong>Visual Basic VB4ndroid </strong>'
    ],

    (object)[
        'url' => 'https://attendances.online/',
        'images' => ['images/web-attendance.png', 'images/web-attendance2.png', 'images/web-attendance3.png'],
        'title' => 'Web Admin for Manage Mobile Attendance',
        'description' => 'This web admin panel is designed to efficiently manage mobile attendance systems. It provides an intuitive interface for administrators to track, monitor, and manage employee or student attendance in real time. Built with <strong>Laravel 10 </strong>. The platform allows for seamless integration with mobile attendance applications, ensuring accurate and streamlined record management.'
    ],
    (object)[
        'url' => 'https://drive.google.com/drive/folders/13Fs_dSMqsfi_kqnTZ9nTqXM-fp2ZfWog?usp=sharing',
        'images' => ['images/mobile-attendance.png'],
        'title' => 'Mobile App for Attendance with Geolocation',
        'description' => 'This mobile attendance app utilizes geolocation features powered by the Google Maps API to accurately capture and verify attendance. The app allows employees or students to check in and out based on their geographical location, ensuring that they are present at designated areas. With real-time tracking and precise location data, this app provides an efficient and secure way to manage attendance. Build with <strong>Java dan Android Studio </strong>'
    ],
    (object)[
        'url' => 'https://greenfoot.org/scenarios/25077',
        'images' => ['images/game-beruang.png', 'images/game-beruang2.png'],
        'title' => 'Game - Honey Bear Survive',
        'description' => "A simple shooting game using <strong>Java</strong> with greenfoot's app"
    ],
    (object)[
        'url' => 'https://batubusuak.wordpress.com/',
        'images' => ['images/web-batubusuak.png'],
        'title' => 'Blog - Batu Busuk Destination Tourism Web',
        'description' => "A website that provides information about Batu Busuk destination Tourism in Lambung Bukit, Padang City, West Sumatra, built with <strong>Wordpress.com</strong>"
    ],
    (object)[
        'url' => 'https://github.com/MuhammadAgungMahardhika/Aplikasi-Logistik-Gudang-Farmasi-Dinas-Kesehatan-Prov.Sumbar',
        'images' => ['images/web-logistik.png'],
        'title' => 'Web Application - West Sumatra Provincial Health Service Pharmacy Logistics Application',
        'description' => "A web application to manage logistics goods in pharmacy warehouses using <strong> PHP Native, Mysql </strong>"
    ],
    (object)[
        'url' => 'https://github.com/MuhammadAgungMahardhika/Pafitness',
        'images' => ['images/mobile-pafitnes.jpeg'],
        'title' => 'Mobile Gym Application',
        'description' => "An Android mobile application for searching gyms in Padang City. Built using <strong>Java, Firebase Auth, PostgreSQL, and Google Maps API. </strong>"
    ]
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
            <div class="collapse navbar-collapse justify-content-start show " id="navbar-example">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="">ABOUT ME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#MyProjects">MY PROJECTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#MyContacts">GET IN TOUCH</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Akhir navigasi -->
        <aside class="container" style="padding-top: 150px;">
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <figure class="row text-center" id="MyFoto">
                        <div class="col">
                            <img class="rounded-circle" src="images/MyFoto.JPG" id="Foto" />
                        </div>
                    </figure>

                    <div class="row text-center" id="MyName">
                        <div class="col">
                            <h1 class="NamaSaya">MUHAMMAD AGUNG MAHARDHIKA</h1>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 ">
                    <!-- About me -->
                    <section class="container text-center efek1" id="AboutMe">
                        <article class="row">
                            <div class="col">
                                <h2 class=" text-start mb-4">ABOUT ME</h2>
                                <p style="text-align: left; ">
                                    Hello! My name is Muhammad Agung Mahardhika. I'm a software engineer and a university graduate with a Bachelor's degree in Information Systems. I am currently open for a job with a strong background in software engineering and web development.
                                </p>
                                <p style="text-align: left">
                                    Specializing in full-stack development, I have extensive experience in back-end development using Java and PHP. My expertise includes frameworks such as CodeIgniter 3, CodeIgniter 4, Laravel, Spring Boot, and Next.js. Additionally, I am proficient in Android Studio.
                                </p>
                                <p style="text-align: left">
                                    I graduated Bootcamp program from PT Xsis Mitra Utama (Indosat) for Microservices Application using SpringBoot .
                                    Currently, I am employed at PT. Muda Medika Mandiri (Rskm Padang Eye Center) as a full-stack developer, managing SIMRS and EMR. I've excelled in optimizing internal tools and developing high-capacity APIs. I'm eager to contribute to a collaborative, cross-functional team where I can continue to grow and make a significant impact.
                                </p>
                                <p style="text-align: left">
                                    I have also worked on several different projects ranging from location-based, IoT, mobile, and web applications. Additionally, I can convert Figma designs into applications.
                                </p>
                                <p style="text-align: left">As a software developer, I enjoy learning new technologies and continuously seek to grow and improve my skills</p>
                            </div>

                        </article>
                    </section>
                    <!-- Akhir About me -->
                </div>

            </div>
        </aside>

        <!-- <aside class="copyright">
            Image source
            <a href="https://pixabay.com/id/users/pexels-2286921/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1868667">Pexels</a>
            dari
            <a href="https://pixabay.com/id/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1868667">Pixabay</a>
        </aside> -->
    </header>
    <!-- Akhir header -->

    <main>

        <!-- My Projects -->
        <section class="container text-center" id="MyProjects">
            <div class="row">
                <h2 class="efek2">MY PROJECTS</h2>
                <p class="text-light">"Some projects may be running locally or may no longer be operational as their hosting has expired."</p>
                <div class="col allcard">
                    <?php foreach ($projects as $project) : ?>
                        <div class="card bg-light" style="width: 18rem">
                            <a href="<?= $project->url ?>">
                                <!-- Bootstrap Carousel -->
                                <div id="carousel-<?= md5($project->title) ?>" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php foreach ($project->images as $index => $image) : ?>
                                            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                                <img src="<?= $image ?>" class="d-block  w-100" alt="..." style="height: 150px; object-fit: contain; " loading="lazy">
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <button class=" carousel-control-prev" type="button" data-bs-target="#carousel-<?= md5($project->title) ?>" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-<?= md5($project->title) ?>" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?= $project->title ?></h5>
                                    <p class="card-text"><?= $project->description ?></p>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Akhir My Projects -->

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
    <script src="asset/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="asset/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="asset/function.js"></script>
</body>

</html>