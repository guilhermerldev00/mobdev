<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
  </head>
  <body>
    
    <div class="container-fluid-custom">

      <!-- HEADER e TOP -->
      <section id="top">
        <header>
          <div id="header" class="row">
            <div id="logo" class="col-12 col-lg-6">
              <img src="assets/img/dot.svg" alt="Dot">
              <h1>DOT</h1>
            </div>
            <ul>
              <li><a href="#">Sobre nós</a></li>
              <li><a href="#">Produtos</a></li>
              <li><a href="#">Soluções</a></li>
              <li><a href="#">Contatos</a></li>
            </ul>
          </div>
        </header>
        
        <img id="img-main" src="assets/img/main.png" alt="">

        <section id="sub-title">
          <h4>How to accomplish your biggest career goals</h4>
        </section>
      </section>
      
      <!-- FORM -->
      <section id="form">
        <form action="" method="post">
          <legend>Insira aqui seus dados:</legend>

          <label for="label1">Label 1
            <input type="text" name="label1" id="label1" placeholder="Input 1" required>
          </label>

          <label for="label2">Label 2
            <select name="label2" id="label2" required>
              <option value="" disabled selected="">Input 2</option>
              <option value="op2">Opção 1</option>
              <option value="op3">Opção 2</option>
            </select>
          </label>

          <label for="label3">Label 3
            <input type="text" name="label3" id="label3" required>
          </label>

          <button type="submit" name="enviarDados">Enviar</button>
        </form>
      </section>
    
      <!-- CONTENT -->
      <section id="content-primary" class="container-custom">
          <h5>O que você vai aprender</h5>
          <h6>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipt lobortis nisl ut aliquio commodo consequat.</h6>
          <ul id="learn">
            <li id="world"><img src="assets/img/worldwide.svg" alt=""><span>Global Thinking</span></li>
            <li id="diagram"><img src="assets/img/diagram.svg" alt=""><span>Mind Setting</span></li>
            <li><img src="assets/img/flag.svg" alt=""><span>Your Future</span></li>
          </ul>
          <!-- <ul id="learn2" class="owl-carousel owl-theme">
            <li id="world"><img src="assets/img/worldwide.svg" alt=""><span>Global Thinking</span></li>
            <li id="diagram"><img src="assets/img/diagram.svg" alt=""><span>Mind Setting</span></li>
            <li><img src="assets/img/flag.svg" alt=""><span>Your Future</span></li>
          </ul> -->
      </section>
    
      <!-- CAROUSEL -->
      <section id="content-secondary" class="container-custom">
        <h5>Conheça nossa estrutura</h5>
        <h6>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat</h6>
        <ul class="owl-carousel">
          <li><img src="assets/img/escritorio.jpg" alt=""></li>
          <li><img src="assets/img/escritorio.jpg" alt=""></li>
          <li><img src="assets/img/escritorio.jpg" alt=""></li>
        </ul>
      </section>

      <!-- FORM MOBILE -->
      <section id="form-mobile">
        <form action="" method="post">
          <legend>Insira aqui seus dados:</legend>

          <label for="label1">Label 1
            <input type="text" name="label1" id="label1" placeholder="Input 1" required>
          </label>

          <label for="label2">Label 2
            <select name="label2" id="label2" required>
              <option value="" disabled selected="">Input 2</option>
              <option value="op2">Opção 1</option>
              <option value="op3">Opção 2</option>
            </select>
          </label>

          <label for="label3">Label 3
            <input type="text" name="label3" id="label3" placeholder="Input 3" required>
          </label>

          <button type="submit" name="enviarDados">Enviar</button>
        </form>
      </section>
      
      <!-- FOOTER -->
      <footer class="container-custom">
        <div id="first-list">
          <img src="assets/img/location.svg" alt="Fale conosco">
          <h6>Fale conosco</h6>
          <ul id="number-contact">
            <li>0800 626-850</li>
          </ul>
        </div>
        <div id="second-list">
          <img src="assets/img/location.svg" alt="Onde estamos">
          <h6>Onde estamos</h6>
          <ul id="first-ul">
            <li>São Paulo</li>
            <li>Minas Gerais</li>
            <li>Distrito Federal</li>
          </ul>
          <ul id="second-ul">
            <li>Recife</li>
            <li>João Pessoa</li>
            <li>Rio de Janeiro</li>
          </ul>
        </div>
        <div id="social-media">
          <div id="facebook">
            <img src="assets/img/facebook.svg" alt="facebook">
          </div>
          <div id="instagram">
            <img src="assets/img/instagram.svg" alt="instagram">
          </div>
          <div id="linkedin">
            <img src="assets/img/linkedin.svg" alt="linkedin">
          </div>
        </div>
      </footer>

      <section id="footer-bottom" class="container-custom">
        <div id="copyright" class="col-lg-11">
          <p>&copy 2019 DOT Ltda.</p>
          <p>Todos os direitos reservados.</p>
          <a href="#">Política de privacidade</a>
        </div>
        <p>Mobister</p>
      </section>
    </div>

    <link href="assets/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/owl/owl.carousel.js"></script>
  </body>
</html>