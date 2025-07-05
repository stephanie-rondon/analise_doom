<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Doli</title>
</head>
<body>
    <header>
        <nav id="navbar">
            <i class="fa-solid fa-burger" id="nav_logo">Doli</i>

            <ul id="nav_list">
                <li class="nav-item">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Cardápio</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Avaliações</a>
                </li>
            </ul>

            <button class="btn-default">
                Peça aqui
            </button>
            <button id="mobile_btn">
                <i class="fa-solid fa-bars"></i>
            </button>
        </nav>

        <div id="mobile_menu">
            <ul id="mobile_nav_list">
                <li class="nav-item">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Cardápio</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Avaliações</a>
                </li>
            </ul>

            <button class="btn-default">
                Peça aqui
            </button>
        </div>
    </header>
    <main id="content">
        <section id="home">
            <div id="cta">
                <h1 class="title">
                    O sabor vai até
                    <span>você</span>
                </h1>

                <p class="decription">
                    Lkjdwkjebskdjbflw lwkehndljdsd lknewflh
                </p>

                <div id="cta_buttons">
                    <a href="#" class="btn-default">
                        Ver cardápio
                    </a>

                    <a href="tel:+541997298313" id="phone_button">
                        <button class="btn-default">
                            <i class="fa-solid fa-phone"></i>
                            (41) 99729-8313
                        </button>
                    </a>
                </div>

                <div id="div" class="social-media-buttons">
                    <a href="">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>

                    <a href="">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </div>
                
            </div>

            <div id="banner">
                <img src="" alt="">
            </div>
        </section>
    </main>


    <script src="script.js"></script>
</body>
</html>