<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
    <!-- Tambahkan stylesheet atau link lainnya jika diperlukan -->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/styles.css') !!}">
    <style>
        /* CSS yang sudah ada tetap ada di sini */

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .fadeIn {
            animation: fadeIn 1s ease-in-out;
        }

        .project:hover img {
            transform: scale(1.1);
        }
    </style>
</head>


    <header class="fadeIn">
        <img src="https://i.ibb.co/4gjQFzN/Whats-App-Image-2024-01-05-at-15-22-32.jpg" alt="Profil Saya">
        <h1>Angga pratama hidayat</h1>
        <p>Web Developer</p>
    </header>

    <nav class="fadeIn">
        <a href="#tentang-saya">Tentang Saya</a>
        <a href="#proyek-saya">Proyek Saya</a>
        <a href="#kontak">Kontak</a>
    </nav>

    <section id="tentang-saya" class="fadeIn">
        <h2>Tentang Saya</h2>
        <p>Selamat datang di portofolio saya. Saya adalah seorang pengembang web dengan minat dalam teknologi dan desain. Berikut adalah beberapa proyek yang telah saya kerjakan.</p>
    </section>

    <section id="proyek-saya" class="fadeIn">
        <h2>Proyek Saya</h2>

        <div class="project">
            <h3>Proyek Pertama</h3>
            <p>blog pertama saya </p>
            <img src="https://i.ibb.co/V94VTJd/UTS-angga-pratama-1.jpg" alt="UTS-angga-pratama-1" border="0"></a>"
        </div>

        <div class="project">
            <h3>Proyek Kedua</h3>
            <p>projek laravel</p>
            <img src="https://i.ibb.co/g3pHmwM/Capture.png" alt="Capture" border="0" /></a>"
        </div>
        <!-- Tambahkan proyek-proyek lainnya sesuai kebutuhan -->
    </section>

    <section id="blog">
        <h2>Blog</h2>
        <article class="blog-post">
            <img src="https://solidwp.com/wp-content/uploads/2019/08/What-is-Your-Website-Design-Process-Blog-Post-Feature-Image-36119-01.png" alt="Gambar Posting Blog 1">
            <div class="blog-content">
                <h3>Judul Posting Blog Pertama</h3>
                <p>Tanggal: 1 Desember 2023</p>
                <p>Deskripsi singkat tentang proyek Ke satu. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                <a href="#">Baca Selengkapnya</a>
            </div>
        </article>

        <article class="blog-post">
            <img src="https://blogimages.softwaresuggest.com/blog/wp-content/uploads/2019/12/12193533/11-Best-Web-Design-Companies-in-India.png" alt="Gambar Posting Blog 2">
            <!--- <img src="blog-post2.jpg" alt="Gambar Posting Blog 2"> --->
            <div class="blog-content">
                <h3>Judul Posting Blog Kedua</h3>                <p>Tanggal: 2 Desember 2023</p>
                <p>Deskripsi singkat tentang posting blog kedua Anda.</p>
                <a href="#">Baca Selengkapnya</a>
            </div>
        </article>

        <!-- Tambahkan posting blog lainnya sesuai kebutuhan -->
        </section>




        <section id="kontak" class="fadeIn">
            <h2>Kontak</h2>
            <p>Hubungi saya melalui email: <a href="pratamaangga102@gmail.com">pratamaangga102@gmail.com</a></p>
            <div class="social">
                <a href="https://www.linkedin.com/in/angga pratama hidayat" target="_blank">LinkedIn</a>
                <a href="https://github.com/Pratama102" target="_blank">GitHub</a>
                <!-- Tambahkan link sosial media lainnya sesuai kebutuhan -->
            </div>
        </section>

        <footer class="fadeIn">
            &copy; 2023 Portofolio Saya
        </footer>

</body>

</html>