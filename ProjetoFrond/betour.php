<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="entrar-cadastro">
        <a href="#entrar">Entrar</a>
        <a href="#cadastrar">Cadastre-se</a>
    </div>
    <div class="fundocinza">
        <img class="logo" src="imagens/logo.png">   
        
        <div class="icon-container">
            <div class="icon">
                <img class="logo2" src="imagens/home.png">
                <a>INICIO</a>
            </div>
            <div class="icon">
                <img class="logo2" src="imagens/empresa.png">
                <a>EMPRESA</a>
            </div>
            <div class="icon">
                <img class="logo2"src="imagens/viagem.png">
                <a>PACOTES</a>
            </div>
            <div class="icon">
                <img class="logo2"src="imagens/ilha.png">
                <a>BATE E VOLTA</a>
            </div>
            <div class="icon">
                <img class="logo2"src="imagens/contato.png">
                <a>CONTATO</a>
            </div>      
            
        </div>
           
    </div>
    
    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 4</div>
            <img src="imagens/arraialdocabo.jpg" alt="Imagem de Arraial do Cabo">
            <div class="text">Arraial do Cabo</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 4</div>
            <img src="imagens/ilhabela.jpg" alt="Imagem de Ilha Bela">
            <div class="text">Ilha Bela</div>
        </div>
 
        <div class="mySlides fade">
            <div class="numbertext">3 / 4</div>
            <img src="imagens/campodojordao.jpg" alt="Imagem de Campos do jordao">
            <div class="text">Campos do Jordão</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext"> 4 / 4</div>
            <img src="imagens/jalapao1920x600.jpg" alt="Imagem de jalapao">
            <div class="text">Jalapão</div>
        </div>



        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)" aria-label="Slide anterior">&#10094;</a>
        <a class="next" onclick="plusSlides(1)" aria-label="Próximo slide">&#10095;</a>

        <br>

        <!-- BOLINHA DE SLIDE -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>

        <script>
            let slideIndex = 1;
            showSlides(slideIndex);

            // Next/previous controls
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            // Thumbnail image controls
            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                if (n > slides.length) { slideIndex = 1 }
                if (n < 1) { slideIndex = slides.length }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }</script>
          
</body>

</html>