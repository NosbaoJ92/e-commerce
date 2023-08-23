    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google-site-verification" content="_KwPT5EKHpE9uoS5uQ1kBuEHjSsVpFLSNk5_daYw95o" />
        <meta name="description" content="Artefato Arquitetura - Combinamos experiência em várias disciplinas, locais e setores. A prática é um líder de pensamento ativo na prática social, desenvolvendo projetos arquitetônicos premiados e estratégias urbanas em uma variedade de escalas.">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <script>
        function toggleFav(cardIndex) {
            var heartEmpty = document.getElementById("heartEmpty" + cardIndex);
            var heartFull = document.getElementById("heartFull" + cardIndex);

            heartFull.style.display = heartFull.style.display === "none" ? "block" : "none";
        }

            window.addEventListener("scroll", function() {
            const header = document.querySelector(".header");
                if (window.scrollY > 0) {
                    header.style.boxShadow = "0 5px 20px rgba(0, 0, 0, 0.1)";
                } else {
                    header.style.boxShadow = "none";
                }
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="shortcut icon" href="/src/img/icone.png" type="image/png">
        
        <link rel="icon" href="/src/img/logo2.png" type="png">
        <title>E-COMMERCE - CARD/LIST</title>
        <style>
            .header {
            background-color: #ffffff;
            box-shadow: none; /*Valor inicial de estado*/
            transition: box-shadow 0.5s ease; /*Transição de efeito suave*/    
            }
        </style>
    </head>

    <body  id="inicio" class="w-screen h-screen overflow-x-hidden overflow-visible relative bg-white ">

        <header class="header flex w-full justify-center h-16 bg-white fixed z-20 max-[767px]:h-24 ">
            <div class="header w-full h-full flex justify-between items-center pl-10 pr-10 gap-10 min-[1024px]:w-3/5 min-[1024px]:p-0 ">
            <i class="fa-brands fa-shopify text-5xl text-lime-300"></i>
                <div class="flex w-full justify-between max-[767px]:hidden">
                    <div class="left">
                        <ul class="flex items-center gap-6">
                            <li><a class="hover:border-b-4 hover:drop-shadow-lg hover:border-lime-300 hover:transition-all hover:delay-100 hover:duration-100 pb-4" href="">Início</a></li>
                            <li><a class="hover:border-b-4 hover:drop-shadow-lg hover:border-lime-300 hover:transition-all hover:delay-100 hover:duration-100 pb-4" href="">Produtos</a></li>
                            <li><a class="hover:border-b-4 hover:drop-shadow-lg hover:border-lime-300 hover:transition-all hover:delay-100 hover:duration-100 pb-4" href="">Contato</a></li>
                        </ul>
                    </div>
                    <div class="right flex gap-4">
                        <a href="#" class="perfil flex items-center gap-2 hover:text-lime-500">
                            <i class="fa-solid fa-user "></i>
                            <p class="">Entrar</p>
                        </a>
                        <a href="#" class="perfil flex items-center gap-2 hover:text-lime-500">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <p class="">Entrar</p>
                        </a>
                    </div>
                </div>
                <i class="fa-solid fa-bars min-[768px]:hidden"></i>
            </div>
                
        </header>
        <main class="w-full h-auto justify-center flex items-center flex-col pt-16  max-[767px]:pt-24" >
            <h1 class="font-semibold text-4xl mt-4 max-[767px]:text-xl ">NOVOS PRODUTOS</h1>
            <div class="w-8/12 flex flex-wrap justify-center gap-2 mt-6 max-[767px]:w-full max-[767px]:gap-3 ">
                <?php
                    $cards = array(      
                        array('image' => '../api/img/xiaomi.png', 'content' => 'Xiaomi Mi 1', 'moeda' => 'R$', 'preco' => '785,99'),                         
                        array('image' => '../api/img/notebook_xiaomi.png', 'content' => 'Xiaomi Mi Notebook Air 12.5', 'moeda' => 'R$', 'preco' => '5.785,99'),                          
                        array('image' => '../api/img/earbuds.png', 'content' => 'EarBuds', 'moeda' => 'R$', 'preco' => '399,90'),                          
                        array('image' => '../api/img/ps4.png', 'content' => 'Playstation 4', 'moeda' => 'R$', 'preco' => '3.999,90'),                          
                        array('image' => '../api/img/mouseg502.png', 'content' => 'Logitech G502', 'moeda' => 'R$', 'preco' => '299,00'),                          
                        array('image' => '../api/img/headset.png', 'content' => 'Headset Logitech', 'moeda' => 'R$', 'preco' => '399,00'),                          
                    );

                    foreach ($cards as $index => $card) {
                        //inicia-card
                        echo '<a href="#" method="Post" class="item relative rounded-xl flex flex-col w-2/12 h-96 border-b pb-6 bg-white items-center hover:drop-shadow-2xl hover:border-b-4 hover:border-lime-300 hover:transition-all hover:delay-100 max-[767px]:flex-row max-[767px]:w-full max-[767px]:h-56 max-[767px]:rounded-none max-[767px]:pb-0 min-[768px]:w-5/12 min-[1300px]:w-5/12 min-[1600px]:w-3/12">';
                            //inicia-imagem
                            echo '<div class="img relative w-full h-3/4 bg-zinc-300 rounded-t-xl max-[767px]:h-full max-[767px]:w-6/12 max-[767px]:rounded-none">';
                                echo '<img class="w-full h-full object-scale-down p-6 max-[767px]:object-contain " src="' . $card['image'] . '" alt="Imagem">';
                            echo '</div>';
                            //termina-imagem

                            // Elemento do botão de favorito vazio
                            echo '<div class="absolute flex justify-center items-center w-10 h-10 right-3 top-3 rounded-full p-2 z-10 max-[767px]:right-6">';
                            echo '<i id="heartEmpty' . $index . '" class="fa-regular fa-heart text-white text-2xl max-[767px]:text-zinc-300" onclick="toggleFav(' . $index . ')"></i>';
                            echo '</div>';

                            // Elemento do botão de favorito cheio
                            echo '<div id="heartFull' . $index . '" class="absolute  justify-center items-center w-10 h-10 right-3 top-2 rounded-full p-2 z-10 hidden max-[767px]:right-6">';
                            echo '<i class="fa-solid fa-heart text-2xl text-red-500 w-full h-full ... " onclick="toggleFav(' . $index . ')"></i>';
                            echo '</div>';

                            //inicia-preco
                            echo'<div class="texts p-4 flex w-full justify-between items-center max-[767px]:flex-col max-[767px]:w-6/12 max-[767px]:justify-around  max-[767px]:h-full">';
                                echo '<div class="item w-8/12">';
                                    echo '<h1 class="text-sm">' . $card['content'] . '</h1>';
                            
                                echo '</div>';
                                echo '<div class="price flex justify-start text-2xl relative ">';
                                    echo '<p  class="font-semibold">'.'<span class="absolute -top-2 -left-1 text-xs">'.$card['moeda'] .'</span>' . $card['preco'] . '</p>';
                                echo '</div>';
                            echo '</div>';
                            //termina-preco

                            echo '<i class="fa-solid fa-circle-plus absolute bottom-2 hover:rounded-xl w-full text-center text-lime-300 text-lg max-[767px]:bottom-4 max-[767px]:drop-shadow-xl max-[767px]:"></i>';

                            echo '</a>';
                            //termina-card
                    }
                ?>     
            </div>
        </main>
    </body>
    </html>
