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
            <img src="gambar/gueh.jpeg" alt="Foto Profil" class="img-fluid rounded-circle shadow-lg profile-img" style="max-width: 250px; border: 4px solid #58a6ff;">
        </div>
    </section>

    <hr style="border-color: #30363d; margin: 3rem 0;">

    <section id="tech-stack" class="my-5 animasi-muncul delay-2">
        <h2 class="text-center text-white mb-5 fw-bold">Tech Stacks</h2>
        
        <div class="row g-4 justify-content-center">
            
            <div class="col-12 col-md-6 col-lg-3">
                <div class="tech-card">
                    <h5 class="text-white fw-bold">Mobile Development</h5>
                    <hr style="border-color: #30363d;">
                    <div class="tech-icon-wrapper">
                        <span class="tech-pill">Kotlin</span>
                        <span class="tech-pill">Java</span>
                        <span class="tech-pill">Jetpack Compose</span>
                        <span class="tech-pill">Android Studio</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="tech-card">
                    <h5 class="text-white fw-bold">Web Development</h5>
                    <hr style="border-color: #30363d;">
                    <div class="tech-icon-wrapper">
                        <span class="tech-pill">HTML</span>
                        <span class="tech-pill">CSS</span>
                        <span class="tech-pill">JavaScript</span>
                        <span class="tech-pill">Bootstrap</span>
                        <span class="tech-pill">PHP</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="tech-card">
                    <h5 class="text-white fw-bold">Data & Backend</h5>
                    <hr style="border-color: #30363d;">
                    <div class="tech-icon-wrapper">
                        <span class="tech-pill">MySQL</span>
                        <span class="tech-pill">Firebase</span>
                        <span class="tech-pill">REST API</span>
                        <span class="tech-pill">Python</span>
                        <span class="tech-pill">Streamlit</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="tech-card">
                    <h5 class="text-white fw-bold">Design & Tools</h5>
                    <hr style="border-color: #30363d;">
                    <div class="tech-icon-wrapper">
                        <span class="tech-pill">Figma</span>
                        <span class="tech-pill">Canva</span>
                        <span class="tech-pill">Git / GitHub</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <hr style="border-color: #30363d; margin: 4rem 0;">

    <section id="projects" class="my-5 animasi-muncul delay-3">
        <h2 class="text-center text-white mb-5 fw-bold">Projects</h2>
        
        <div class="row g-4 justify-content-center">
            
            <div class="col-12 col-md-6 col-lg-4">
                <a href="https://github.com/Deveco67/KusukaTani" target="_blank" class="text-decoration-none">
                    <div class="card h-100 custom-card bg-dark" style="background-color: #161b22 !important; border-color: #30363d !important; overflow: hidden;">
                        <img src="gambar/KusukaTani.jpg" class="card-img-top" alt="Preview KusukaTani" style="height: 200px; object-fit: cover; border-bottom: 1px solid #30363d;">
                        <div class="card-body mt-2">
                            <h4 class="card-title text-white fw-bold" style="color: #58a6ff !important;">KusukaTani</h4>
                            <p class="card-text mt-3" style="color: #8b949e; font-size: 15px;">Aplikasi mobile tentang marketplace alat-alat pertanian.</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 pb-4">
                            <span class="badge" style="background-color: #7F52FF;">Kotlin</span>
                            <span class="badge" style="background-color: #FFCA28; color: black;">Firebase</span>
                            <span class="badge" style="background-color: #008cff; color: black">Jetpack Compose</span>
                            <span class="badge" style="background-color: #003a4d;">Rest API</span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <a href="https://github.com/Lunaruuuuu/KusukaSembuh" target="_blank" class="text-decoration-none">
                    <div class="card h-100 custom-card bg-dark" style="background-color: #161b22 !important; border-color: #30363d !important; overflow: hidden;">
                        <img src="gambar/KusukaSembuh.png" class="card-img-top" alt="Preview KusukaSembuh" style="height: 200px; object-fit: cover; border-bottom: 1px solid #30363d;">
                        <div class="card-body mt-2">
                            <h4 class="card-title text-white fw-bold" style="color: #58a6ff !important;">KusukaSembuh</h4>
                            <p class="card-text mt-3" style="color: #8b949e; font-size: 15px;">Aplikasi mobile tentang cara alur kerjanya antrian rumah sakit.</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 pb-4">
                            <span class="badge" style="background-color: #7F52FF;">Kotlin</span>
                            <span class="badge" style="background-color: #FFCA28; color: black;">Firebase</span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <a href="https://github.com/Deveco67/HSR-News" target="_blank" class="text-decoration-none">
                    <div class="card h-100 custom-card bg-dark" style="background-color: #161b22 !important; border-color: #30363d !important; overflow: hidden;">
                        <img src="gambar/hsr_news.png" class="card-img-top" alt="Preview HSR News" style="height: 200px; object-fit: cover; border-bottom: 1px solid #30363d;">
                        <div class="card-body mt-2">
                            <h4 class="card-title text-white fw-bold" style="color: #58a6ff !important;">HSR News</h4>
                            <p class="card-text mt-3" style="color: #8b949e; font-size: 15px;">Website interaktif tentang info-info terbaru dari update game Honkai: Star Rail.</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 pb-4">
                            <span class="badge" style="background-color: #777BB4;">PHP Native</span>
                            <span class="badge" style="background-color: #E34F26;">HTML</span>
                            <span class="badge" style="background-color: #0084ff;">CSS</span>
                            <span class="badge" style="background-color: #fff700; color:black">Javascript</span>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </section>

</main>

<?php include 'footer.php'; ?>