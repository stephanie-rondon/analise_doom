<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="menu.css">
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
            <div class="shape"></div>
            <div id="cta">
                <h1 class="title">
                    Doçura que chega até
                    <span>você</span>
                </h1>

                <p class="description">
                    Nossos cupcakes são feitos com amor, cores suaves e sabores que abraçam o coração. Peça online e receba doçura artesanal onde você estiver.
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
                <img src="assets\images\img-cupcakes.png" alt="">
            </div>
        </section>

        <section id="menu">
            <h2 class="section-tittle">Cardápio</h2>
            <h3 class="section-subtittle">Cupcakes do momento</h3>

            <div id="dishes">
                <div class="dish">
                    <div class="heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <img src="assets\images\choco-cupcake.jpg" class=dish-img alt="">

                    <h3 class="dish-title">
                        Chococup
                    </h3>

                    <span class="dish-description">
                        Um irresistível cupcake de chocolate, fofinho por fora e recheado com um cremoso e suave creme de chocolate. Um mimo perfeito para adoçar seu dia!
                    </span>

                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(500+)</span>

                        <div class="dish-price">
                            <h4>R$15,00</h4>
                            <button class="btn-default">
                                <i class="fa-solid fa-basket-shopping"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="dish">
                    <div class="heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <img src="assets\images\vanilla-cupcake.jpg" class=dish-img alt="">

                    <h3 class="dish-title">
                        Vanicup
                    </h3>

                    <span class="dish-description">
                         Um delicado cupcake de baunilha com massa macia e leve, recheado com um cremoso creme de baunilha. Simples, clássico e apaixonante a cada mordida!
                    </span>

                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(300+)</span>

                        <div class="dish-price">
                            <h4>R$15,00</h4>
                            <button class="btn-default">
                                <i class="fa-solid fa-basket-shopping"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="dish">
                    <div class="heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <img src="assets\images\tart-cupcake.jpg" class=dish-img alt="">

                    <h3 class="dish-title">
                        Tartcup
                    </h3>

                    <span class="dish-description">
                         Um cupcake encantador de creme branco, recheado com morango e frutas do bosque. Um encontro perfeito entre suavidade e frescor, que derrete na boca e conquista no primeiro pedaço.
                    </span>

                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(450+)</span>

                        <div class="dish-price">
                            <h4>R$15,00</h4>
                            <button class="btn-default">
                                <i class="fa-solid fa-basket-shopping"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="dish">
                    <div class="heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>

                    <img src="assets\images\cupcakes.jpg" class=dish-img alt="">

                    <h3 class="dish-title">
                        Brancup
                    </h3>

                    <span class="dish-description">
                        Um cupcake macio de chocolate branco com um toque especial de coco. Cremoso, delicado e com aquele sabor tropical que aquece o coração a cada mordida.
                    </span>

                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(350+)</span>

                        <div class="dish-price">
                            <h4>R$15,00</h4>
                            <button class="btn-default">
                                <i class="fa-solid fa-basket-shopping"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="testimonials">
            <img src="assets\images\ste.png" alt="" id="testimonial_chef" width=50% height=relative>

            <div id="testimonials_content">
                <h2 class="section-title">
                    Depoimentos
                </h2>
                <h3 class="section-subtitle">
                    O que os clientes falam sobre nós?
                </h3>

                <div id="feedbacks">
                    <div class="fedback">

                    </div>
                </div>
            
            </div>
        </section>

        <section id="contato">
            <h2 class="section-title">
                Fale conosco
            </h2>
            <h3 class="section-subtitle">
                Envie sua dúvida ou sugestão
            </h3>

            <form action="processa_contato.php" method="POST">
                <div class="campo-input">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" required>
                </div>

                <div class="campo-input">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="campo-input">
                    <label for="mensagem">Mensagem:</label>
                    <textarea name="mensagem" id="mensagem" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn-default">Enviar</button>
            </form>
        </section>

    </main>


    <script src="script.js"></script>
</body>
</html>