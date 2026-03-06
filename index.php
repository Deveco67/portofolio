<?php include 'header.php'; ?>

<main class="container my-5">
    
    <section id="about" class="row align-items-center mb-5 flex-column-reverse flex-md-row text-center text-md-start">
        <div class="col-md-7 mt-4 mt-md-0 animasi-muncul delay-1">
            <h1 class="display-4 fw-bold text-white mb-3">Halo, Saya Derico Liunardo</h1>
            <p class="lead" style="color: #8b949e; line-height: 1.8;">
                Selamat datang di website portofolio saya! Saya adalah mahasiswa IT angkatan 2023 dari Universitas Kristen Krida Wacana (Ukrida). Saya memiliki ketertarikan besar dalam pengembangan aplikasi mobile dan website.
            </p>
        </div>
        <div class="col-md-5 text-center animasi-muncul delay-2">
            <img src="gambar/naoi.jpg" alt="Foto Profil" class="img-fluid rounded-circle shadow-lg profile-img" style="max-width: 250px; border: 4px solid #58a6ff;">
        </div>
    </section>

    <hr style="border-color: #30363d; margin: 3rem 0;">

<section id="tech-stack" class="my-5 text-center animasi-muncul delay-3">
        <h2 class="text-white mb-4 fw-bold">Tech Stacks</h2>
        <div class="d-flex flex-wrap justify-content-center gap-2">
            <img src="https://img.shields.io/badge/html-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5" class="tech-badge">
            <img src="https://img.shields.io/badge/css-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3" class="tech-badge">
            <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" class="tech-badge">
            <img src="https://img.shields.io/badge/python-3670A0?style=for-the-badge&logo=python&logoColor=ffdd54" alt="Python" class="tech-badge">
            <img src="https://img.shields.io/badge/Kotlin-7F52FF?style=for-the-badge&logo=kotlin&logoColor=white" alt="Kotlin" class="tech-badge">
            
            <img src="https://img.shields.io/badge/bootstrap-%238511FA.svg?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap" class="tech-badge">
            <img src="https://img.shields.io/badge/Streamlit-FF4B4B?style=for-the-badge&logo=Streamlit&logoColor=white" alt="Streamlit" class="tech-badge">
            <img src="https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL" class="tech-badge">
            <img src="https://img.shields.io/badge/Firebase-FFCA28?style=for-the-badge&logo=firebase&logoColor=black" alt="Firebase" class="tech-badge">
            
            <img src="https://img.shields.io/badge/Android%20Studio-3DDC84?style=for-the-badge&logo=android-studio&logoColor=white" alt="Android Studio" class="tech-badge">
            <img src="https://img.shields.io/badge/Figma-F24E1E?style=for-the-badge&logo=figma&logoColor=white" alt="Figma" class="tech-badge">
            <img src="https://img.shields.io/badge/Canva-%2300C4CC?style=for-the-badge&logo=Canva&logoColor=white" alt="Canva" class="tech-badge">
        </div>
    </section>

    <hr style="border-color: #30363d; margin: 3rem 0;">


    <section id="projects" class="my-5 animasi-muncul delay-3">
        <h2 class="text-center text-white mb-5 fw-bold">Projects</h2>
        
        <div class="row g-4 justify-content-center">
            
            <div class="col-12 col-md-6 col-lg-4">
                <a href="https://github.com/Deveco67/KusukaTani" target="_blank" class="text-decoration-none">
                    <div class="card h-100 custom-card bg-dark" style="background-color: #161b22 !important; border-color: #30363d !important;">
                        <div class="card-body">
                            <h4 class="card-title text-white fw-bold" style="color: #58a6ff !important;"><i class="bi bi-phone me-2"></i>KusukaTani</h4>
                            <p class="card-text mt-3" style="color: #8b949e; font-size: 15px;">Aplikasi mobile berbasis Android yang terintegrasi dengan Firebase untuk manajemen data.</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 pb-4">
                            <span class="badge" style="background-color: #7F52FF;">Kotlin</span>
                            <span class="badge" style="background-color: #FFCA28; color: black;">Firebase</span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <a href="https://www.greenfoot.org/scenarios/34271" target="_blank" class="text-decoration-none">
                    <div class="card h-100 custom-card bg-dark" style="background-color: #161b22 !important; border-color: #30363d !important;">
                        <div class="card-body">
                            <h4 class="card-title text-white fw-bold" style="color: #58a6ff !important;"><i class="bi bi-controller me-2"></i>Tentara Nusantara</h4>
                            <p class="card-text mt-3" style="color: #8b949e; font-size: 15px;">sebuah game top-view shooter 2D bertema kepahlawanan Indonesia yang menghadirkan pengalaman bermain seru dan mendidik..</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 pb-4">
                            <span class="badge" style="background-color: #b07219;">Java</span>
                            <span class="badge" style="background-color: #2e8b57;">Greenfoot</span>
                        </div>
                    </div>
                </a>
            </div>

        </div> </section>

</main>

<?php include 'footer.php'; ?>  