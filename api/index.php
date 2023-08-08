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
        var heartEmpty = document.getElementById("heartEmpty_" + cardIndex);
        var heartFull = document.getElementById("heartFull_" + cardIndex);

        heartEmpty.style.display = heartEmpty.style.display === "none" ? "block" : "none";
        heartFull.style.display = heartFull.style.display === "none" ? "block" : "none";
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="shortcut icon" href="/src/img/icone.png" type="image/png">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="/src/img/logo2.png" type="png">
    <title>E-COMMERCE - CARD/LIST</title>
    <style>
        /* .card {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
            width: 200px;
            background-color: #f9f9f9;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            display: inline-block;
        } */
    </style>
</head>

<body  id="inicio" class="w-screen h-full overflow-x-hidden overflow-visible relative">
    
    <header class="flex w-screen h-16 justify-between items-center pl-10 pr-10 gap-10 bg-white fixed z-20 ">
            <i class="fa-brands fa-shopify text-5xl text-lime-300"></i>
            <div class="flex w-full justify-between max-[767px]:hidden">
                <div class="left">
                    <ul class="flex items-center gap-6">
                        <li><a class="hover:border-b-4 hover:border-lime-300 hover:transition-all hover:delay-100 hover:duration-100 pb-4" href="">Início</a></li>
                        <li><a class="hover:border-b-4 hover:border-lime-300 hover:transition-all hover:delay-100 hover:duration-100 pb-4" href="">Produtos</a></li>
                        <li><a class="hover:border-b-4 hover:border-lime-300 hover:transition-all hover:delay-100 hover:duration-100 pb-4" href="">Contato</a></li>
                    </ul>
                </div>
                <div class="right flex gap-4">
                    <a href="#" class="perfil flex items-center gap-2">
                        <i class="fa-solid fa-user"></i>
                        <p class="">Entrar</p>
                    </a>
                    <a href="#" class="perfil flex items-center gap-2">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <p class="">Entrar</p>
                    </a>
                </div>
            </div>
            <i class="fa-solid fa-bars min-[768px]:hidden"></i>
    </header>
    <main class="w-full h-screen items-center flex flex-col pt-16">
        <div class="w-full h-full  pt-4 flex justify-end gap-10  max-[767px]:flex-col max-[767px]:items-center min-[767px]:flex-wrap ">
            <div class="card w-10/12 h-full pt-4 flex gap-10  max-[767px]:flex-col max-[767px]:items-center min-[767px]:flex-wrap ">
                <?php
                $cards = array(
                    array('image' => 'api/img/earbuds.png', 'content' => 'Wireless Earbuds, IPX8', 'moeda' => 'R$', 'preco' => '89,90'),
                    array('image' => 'api/img/headset.png', 'content' => 'Headset Logitech G233 Prodigy', 'moeda' => 'R$', 'preco' => '259,90'),
                    array('image' => 'api/img/ps4.png', 'content' => 'Playstation 4 Slim', 'moeda' => 'R$', 'preco' => '3229,90'),
                    array('image' => 'api/img/iphoneX.png', 'content' => 'Iphone X - Usado', 'moeda' => 'R$', 'preco' => '1.329,90'),
                    array('image' => 'api/img/mouseG502.png', 'content' => 'Mouse Logitech G502', 'moeda' => 'R$', 'preco' => '129,90'),        
                );

                foreach ($cards as $index => $card) {
                    //inicia-card
                    echo '<a href="#" class="item relative rounded-xl flex flex-col w-3/12 h-2/5 bg-white items-center -mb-36 hover:drop-shadow-2xl hover:border-b-4 hover:border-lime-300 hover:transition-all hover:delay-100 max-[767px]:flex-row max-[767px]:w-6/12 max-[767px]:h-56 ">';
                        //inicia-imagem
                        echo '<div class="img relative w-full h-3/4  bg-zinc-300 rounded-t-xl max-[767px]:h-full max-[767px]:w-6/12">';
                            echo '<img class="w-full h-full object-scale-down p-6" src="' . $card['image'] . '" alt="Imagem">';
                        echo '</div>';
                        //termina-imagem

                        // Elemento do botão de favorito vazio
                        echo '<div class="absolute flex justify-center items-center w-10 h-10 right-3 top-3 rounded-full p-2 z-10">';
                        echo '<i id="heartEmpty_' . $index . '" class="fa-regular fa-heart text-white text-2xl" onclick="toggleFav(' . $index . ')"></i>';
                        echo '</div>';

                        // Elemento do botão de favorito cheio
                        echo '<div id="heartFull_' . $index . '" class="absolute flex justify-center items-center w-10 h-10 right-3 top-3 rounded-full p-2 z-10 hidden">';
                        echo '<i class="fa-solid fa-heart text-2xl w-full h-full ... " onclick="toggleFav(' . $index . ')"></i>';
                        echo '</div>';
                        //inicia-preco
                        echo'<div class="texts p-4 flex w-full justify-between items-center max-[767px]:flex-col max-[767px]:w-6/12 ">';
                            echo '<div class="item w-6/12">';
                                echo '<h1 class="text-sm">' . $card['content'] . '</h1>';
                        
                            echo '</div>';
                            echo '<div class="price flex justify-start text-2xl relative max-[767px]:absolute max-[767px]:bottom-4">';
                                echo '<p  class="font-semibold">'.'<span class="absolute -top-2 -left-1 text-xs">'.$card['moeda'] .'</span>' . $card['preco'] . '</p>';
                            echo '</div>';
                        echo '</div>';
                        //termina-preco

                        echo '<i class="fa-solid fa-circle-plus absolute bottom-2 hover:rounded-xl w-full text-center text-lime-300 text-lg"></i>';

                        echo '</a>';
                        //termina-card
                }
                ?>
                <hr class="w-10/12 border-2">
            </div>
            
        </div>
        
    </main>
</body>
</html>
