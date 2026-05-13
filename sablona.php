<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUSEUM WEILOVKA | Oficiální stránky</title>
    <!-- CSS Linky -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- NAVIGACE -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">MUSEUM WEILOVKA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="#vystavy">Výstavy</a>
                    <a class="nav-link" href="#o-nas">O nás</a>
                    <a class="nav-link" href="#expozice">Expozice</a>
                    <a class="nav-link" href="#vstupenky">Vstupné</a>
                    <a class="nav-link" href="#faq">Dotazy</a>
                    <a class="nav-link" href="#rezervace">Rezervace</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- CAROUSEL (Bannery) -->
    <div id="vystavy" class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('banner1.jpg');">
                <h2 class="text-white display-3 fw-bold text-uppercase">Noční prohlídky</h2>
                <p class="text-white-50">Zažijte atmosféru historie pod rouškou tmy.</p>
            </div>
            <div class="swiper-slide" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('banner2.jpg');">
                <h2 class="text-white display-3 fw-bold text-uppercase">Zlatá éra veteránů</h2>
                <p class="text-white-50">Unikátní sbírka, kterou nikde jinde neuvidíte.</p>
            </div>
        </div>
        <div class="swiper-button-next text-white"></div>
        <div class="swiper-button-prev text-white"></div>
    </div>

    <!-- O NÁS -->
    <section id="o-nas" class="py-5 bg-white text-dark">
        <div class="container">
            <div class="row align-items-center py-4">
                <div class="col-md-6">
                    <h2 class="fw-bold mb-4 display-6">Příběh našeho muzea</h2>
                    <p class="lead">Muzeum Weilovka bylo založeno s cílem uchovat technické dědictví pro budoucí generace.</p>
                    <p>Naše sbírka začala jediným automobilem a dnes čítá desítky unikátních exponátů. Věříme, že technika není jen o strojích, ale o lidech a jejich inovacích, které změnily svět.</p>
                </div>
                <div class="col-md-6">
                    <img src="pribeh.jpg" class="img-fluid rounded-4 shadow-lg" alt="O nás">
                </div>
            </div>
        </div>
    </section>

    <!-- COUNTDOWN SECTION -->
    <div id="countdown-section" class="py-5">
        <div class="container text-center py-4">
            <h3 class="mb-4 fw-light text-white text-uppercase letter-spacing-2">Nová expozice začíná za</h3>
            <div id="countdown" class="text-white display-2 fw-bold"></div>
        </div>
    </div>

    <!-- EXPOZICE -->
    <section class="container py-5" id="expozice">
        <h2 class="text-center mt-5 mb-5 fw-bold text-uppercase display-6">Naše expozice</h2>
        <div class="row g-4">
            <?php foreach ($expozice as $e): ?>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="<?= $e[2] ?>" class="card-img-top" alt="<?= $e[0] ?>" style="height: 250px; object-fit: cover;">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold"><?= $e[0] ?></h5>
                        <p class="text-muted small mb-2"><i class="bi bi-geo-alt"></i> <?= $e[3] ?></p>
                        <hr>
                        <p class="card-text text-secondary"><?= $e[1] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- VSTUPNÉ (Tabulka) -->
    <section id="vstupenky" class="py-5 bg-light">
        <div class="container text-dark py-4">
            <h2 class="text-center mb-5 fw-bold display-6">Ceník vstupného</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="table-responsive shadow-sm rounded-4 overflow-hidden">
                        <table class="table table-hover bg-white mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th class="p-3">Typ vstupenky</th>
                                    <th class="text-end p-3">Cena</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td class="p-3">Dospělí</td><td class="text-end p-3 fw-bold">200 Kč</td></tr>
                                <tr><td class="p-3">Studenti (ISIC) / Senioři</td><td class="text-end p-3 fw-bold">120 Kč</td></tr>
                                <tr><td class="p-3">Děti do 6 let</td><td class="text-end p-3 fw-bold text-success">Zdarma</td></tr>
                                <tr><td class="p-3">Rodinné vstupné (2 dospělí + 2 děti)</td><td class="text-end p-3 fw-bold">500 Kč</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ (Dotazy) -->
    <section id="faq" class="py-5">
        <div class="container py-4">
            <h2 class="text-center mb-5 text-white fw-bold display-6">Často kladené dotazy</h2>
            <div class="accordion accordion-flush rounded-4 overflow-hidden shadow-lg" id="accordionFAQ">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q1">
                            Je v muzeu povoleno fotografovat?
                        </button>
                    </h2>
                    <div id="q1" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">Ano, fotografování pro osobní účely je zdarma a povoleno (bez blesku a stativu).</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q2">
                            Máte bezbariérový přístup?
                        </button>
                    </h2>
                    <div id="q2" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">Ano, celý areál muzea včetně toalet je plně bezbariérový.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q3">
                            Lze v muzeu platit kartou?
                        </button>
                    </h2>
                    <div id="q3" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">Ano, přijímáme běžné platební karty (Visa, Mastercard) i hotovost.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- REZERVACE (Podle tvého nového vzoru) -->
    <section id="rezervace" class="py-5" style="background-color: #f4eee4;">
        <div class="container py-5">
            <div class="text-center mb-5">
                <p class="text-uppercase small letter-spacing-2 text-muted mb-1">Rezervace návštěvy</p>
                <h2 class="display-5 fw-bold text-dark mb-3">Rezervace vstupenek</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Vyberte datum, čas, počet osob a typ vstupenky pro plánovanou návštěvu galerie.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border">
                        <div class="text-center mb-4">
                            <hr style="width: 50px; margin: 0 auto; border: 2px solid #000; opacity: 0.2;">
                        </div>
                        
                        <?php if ($zprava): ?>
                            <div class="alert alert-success border-0 shadow-sm mb-4"><?= $zprava ?></div>
                        <?php endif; ?>

                        <form action="index.php#rezervace" method="POST" class="row g-3">
                            <div class="col-md-6">
                                <label class="small text-muted ms-1 mb-1">Datum návštěvy</label>
                                <input type="date" name="datum" class="form-control form-control-lg" required>
                            </div>
                            <div class="col-md-6">
                                <label class="small text-muted ms-1 mb-1">Čas</label>
                                <input type="time" name="cas" class="form-control form-control-lg" required>
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="osob" class="form-control form-control-lg" placeholder="Počet osob" min="1" required>
                            </div>
                            <div class="col-md-6">
                                <select name="typ" class="form-select form-select-lg" required>
                                    <option value="" disabled selected>Typ vstupenky</option>
                                    <option>Dospělý</option>
                                    <option>Student / Senior</option>
                                    <option>Dítě</option>
                                    <option>Rodinné</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <input type="text" name="jmeno" class="form-control form-control-lg" placeholder="Jméno a příjmení" required>
                            </div>
                            <div class="col-12">
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="E-mail" required>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-dark btn-lg w-100 py-3 fw-bold text-uppercase shadow-sm">Odeslat rezervaci</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KONTAKT A MAPA (Opraveno) -->
    <section id="kontakt" class="py-5 bg-dark text-white">
        <div class="container py-4">
            <div class="row g-5 align-items-center">
                <div class="col-md-5">
                    <h2 class="fw-bold mb-4 display-6">Kontaktujte nás</h2>
                    <div class="d-flex mb-4">
                        <i class="bi bi-geo-alt-fill me-3 text-primary fs-4"></i>
                        <p class="mb-0">Weilova 4, 102 00 Praha 10<br><span class="text-muted">Budova Střední školy technické</span></p>
                    </div>
                    <div class="d-flex mb-4">
                        <i class="bi bi-telephone-fill me-3 text-primary fs-4"></i>
                        <p class="mb-0">+420 123 456 789<br><span class="text-muted">Po-Pá: 9:00 - 17:00</span></p>
                    </div>
                    <div class="d-flex mb-4">
                        <i class="bi bi-envelope-fill me-3 text-primary fs-4"></i>
                        <p class="mb-0">info@muzeumweilovka.cz</p>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow-lg border border-secondary border-opacity-25">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2562.338531548658!2d14.531518076878021!3d50.042531616616035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b923746679237%3A0x6b6d5b035f299d69!2sWeilova%201270%2F4%2C%20102%2000%20Praha%2010-Hostiva%C5%99!5e0!3m2!1scs!2scz!4v1715615000000!5m2!1scs!2scz" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-black text-white-50 text-center py-5 border-top border-dark border-opacity-50">
        <div class="container">
            <div class="mb-4">
                <a href="#" class="text-white mx-3 fs-4"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white mx-3 fs-4"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-white mx-3 fs-4"><i class="bi bi-youtube"></i></a>
            </div>
            <p class="mb-0 small">&copy; 2026 Muzeum Weilovka | Projekt: Alexandr Kotrch</p>
        </div>
    </footer>

    <!-- Skripty -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>