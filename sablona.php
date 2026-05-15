<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUSEUM WEILOVKA | Oficiální stránky</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

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
                    <a class="nav-link" href="#galerie">Galerie</a>
                    <a class="nav-link" href="#sluzby">Služby</a>
                    <a class="nav-link" href="#vstupenky">Vstupné</a>
                    <a class="nav-link" href="#rezervace">Rezervace</a>
                </div>
            </div>
        </div>
    </nav>

    <div id="vystavy" class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('banner1.jpg');">
                <h2 class="text-white display-3 fw-bold">NOČNÍ PROHLÍDKY</h2>
            </div>
            <div class="swiper-slide" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('banner2.jpg');">
                <h2 class="text-white display-3 fw-bold">ZLATÁ ÉRA VETERÁNŮ</h2>
            </div>
        </div>
        <div class="swiper-button-next text-white"></div>
        <div class="swiper-button-prev text-white"></div>
    </div>

    <section id="o-nas" class="py-5 bg-white text-dark border-bottom">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2 class="fw-bold mb-4 display-5">Příběh našeho muzea</h2>
                    <p class="lead text-muted">Muzeum Weilovka není jen budova s exponáty, je to živá historie techniky.</p>
                    <p>Vše začalo v roce 1970 vášní pro staré motory. Dnes spravujeme jednu z největších sbírek v regionu, která zahrnuje nejen automobily, ale i vzácné kousky rané výpočetní techniky.</p>
                </div>
                <div class="col-md-6">
                    <img src="pribeh.jpg" class="img-fluid rounded-4 shadow-lg" alt="Příběh">
                </div>
            </div>
        </div>
    </section>

    <div id="countdown-section" class="py-5">
        <div class="container text-center">
            <h3 class="mb-4 fw-light text-white text-uppercase letter-spacing-2">Nová expozice začíná za</h3>
            <div id="countdown" class="text-white display-3 fw-bold"></div>
        </div>
    </div>

    <section class="container py-5" id="expozice">
        <h2 class="text-center mt-5 mb-5 fw-bold text-uppercase display-6">Aktuální expozice</h2>
        <div class="row g-4">
            <?php foreach ($expozice as $e): ?>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="<?= $e[2] ?>" class="card-img-top" alt="<?= $e[0] ?>" style="height: 250px; object-fit: cover;">
                    <div class="card-body p-4 text-center">
                        <h5 class="card-title fw-bold"><?= $e[0] ?></h5>
                        <p class="text-muted small mb-3"><i class="bi bi-geo-alt"></i> <?= $e[3] ?></p>
                        <p class="card-text text-secondary"><?= $e[1] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

<section id="galerie" class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-uppercase">Detailní pohled na sbírku</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-lg h-100 gallery-card">
                    <div class="overflow-hidden">
                        <img src="galerie-design.jpg" class="card-img-top" alt="Design">
                    </div>
                    <div class="card-body p-4">
                        <h4 class="fw-bold">Designové skvosty</h4>
                        <p class="text-muted">Ladné křivky a chromované detaily minulého století.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-lg h-100 gallery-card">
                    <div class="overflow-hidden">
                        <img src="galerie-motor.jpg" class="card-img-top" alt="Mechanika">
                    </div>
                    <div class="card-body p-4">
                        <h4 class="fw-bold">Precizní mechanika</h4>
                        <p class="text-muted">Pohled na ozubená kola a písty starých motorů.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-lg h-100 gallery-card">
                    <div class="overflow-hidden">
                        <img src="galerie-it.jpg" class="card-img-top" alt="IT">
                    </div>
                    <div class="card-body p-4">
                        <h4 class="fw-bold">Interiéry v kůži</h4>
                        <p class="text-muted">Elegance palubních desek a krása dobových přístrojů.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section id="sluzby" class="py-5 bg-white">
        <div class="container py-5">
            <div class="row g-4 text-center">
                <div class="col-md-3">
                    <div class="p-4 border rounded-4 h-100 shadow-hover">
                        <i class="bi bi-cup-hot fs-1 text-primary mb-3"></i>
                        <h4 class="fw-bold">Kavárna</h4>
                        <p class="text-muted small">Odpočiňte si u výběrové kávy.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-4 border rounded-4 h-100 shadow-hover">
                        <i class="bi bi-gift fs-1 text-primary mb-3"></i>
                        <h4 class="fw-bold">Suvenýry</h4>
                        <p class="text-muted small">Originální dárky s motivem muzea.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-4 border rounded-4 h-100 shadow-hover">
                        <i class="bi bi-camera-fill fs-1 text-primary mb-3"></i>
                        <h4 class="fw-bold">Foto koutky</h4>
                        <p class="text-muted small">Místa pro vaše vzpomínkové fotografie.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-4 border rounded-4 h-100 shadow-hover">
                        <i class="bi bi-headset fs-1 text-primary mb-3"></i>
                        <h4 class="fw-bold">Průvodce</h4>
                        <p class="text-muted small">Audio průvodce zdarma ke každé vstupence.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="vstupenky" class="py-5 bg-white">
        <div class="container py-5 text-dark">
            <h2 class="text-center mb-5 fw-bold display-6">Ceník vstupného</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <table class="table table-hover shadow-sm border rounded-3 overflow-hidden">
                        <thead class="table-dark">
                            <tr><th>Kategorie</th><th class="text-end">Cena</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>Dospělí</td><td class="text-end fw-bold">200 Kč</td></tr>
                            <tr><td>Studenti / Senioři</td><td class="text-end fw-bold">120 Kč</td></tr>
                            <tr><td>Děti do 6 let</td><td class="text-end fw-bold text-success">Zdarma</td></tr>
                            <tr><td>Rodinné (2+2)</td><td class="text-end fw-bold">500 Kč</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="py-5 bg-dark">
        <div class="container py-5">
            <h2 class="text-center mb-5 text-white fw-bold display-6">Často kladené dotazy</h2>
            <div class="accordion accordion-flush rounded-4 overflow-hidden" id="accordionFAQ">
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q1">Je v muzeu povoleno fotografovat?</button></h2>
                    <div id="q1" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ"><div class="accordion-body">Ano, bez blesku je fotografování pro osobní účely povoleno a zdarma.</div></div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q2">Máte bezbariérový přístup?</button></h2>
                    <div id="q2" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ"><div class="accordion-body">Ano, celý areál muzea je plně bezbariérový.</div></div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q3">Je možné zakoupit vstupenky na místě?</button></h2>
                    <div id="q3" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ"><div class="accordion-body">Ano, vstupenky lze zakoupit na pokladně, ale doporučujeme online rezervaci.</div></div>
                </div>
            </div>
        </div>
    </section>

    <section id="rezervace" class="py-5" style="background-color: #f4eee4;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="bg-white p-5 rounded-4 shadow-sm border">
                        <h2 class="text-center fw-bold mb-4">Rezervace vstupenek</h2>
                        <?php if ($zprava): ?>
                            <div class="alert alert-success"><?= $zprava ?></div>
                        <?php endif; ?>
                        <form action="index.php#rezervace" method="POST" class="row g-3">
                            <div class="col-md-6"><label class="small text-muted">Datum</label><input type="date" name="datum" class="form-control" required></div>
                            <div class="col-md-6"><label class="small text-muted">Čas</label><input type="time" name="cas" class="form-control" required></div>
                            <div class="col-md-6"><input type="number" name="osob" class="form-control" placeholder="Počet osob" min="1" required></div>
                            <div class="col-md-6">
                                <select name="typ" class="form-select" required>
                                    <option value="" disabled selected>Typ lístku</option>
                                    <option>Dospělý</option>
                                    <option>Student</option>
                                    <option>Senior</option>
                                    <option>Dítě</option>
                                </select>
                            </div>
                            <div class="col-12"><input type="text" name="jmeno" class="form-control" placeholder="Celé jméno" required></div>
                            <div class="col-12"><input type="email" name="email" class="form-control" placeholder="E-mail" required></div>
                            <div class="col-12 mt-4"><button type="submit" class="btn btn-dark w-100 py-3 fw-bold">ODESLAT REZERVACI</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kontakt" class="py-5 bg-dark text-white">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-5">
                    <h2 class="fw-bold mb-4 display-6">Kontaktujte nás</h2>
                    <p><i class="bi bi-geo-alt-fill text-primary me-2"></i> Weilova 4, 102 00 Praha 10</p>
                    <p><i class="bi bi-telephone-fill text-primary me-2"></i> +420 123 456 789</p>
                    <p><i class="bi bi-envelope-fill text-primary me-2"></i> info@muzeumweilovka.cz</p>
                </div>
                <div class="col-md-7">
                    <div class="ratio ratio-16x9 rounded-4 overflow-hidden border border-secondary shadow-lg">
                        <iframe src="http://googleusercontent.com/maps.google.com/4" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-black text-white text-center py-5">
        <p>© 2026 Muzeum Weilovka | Alexandr Kotrch</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>