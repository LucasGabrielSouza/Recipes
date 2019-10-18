<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
    <header>
        <div id="navbar"class="navbar-fixed  ">
          <nav>
            <div class="nav-wrapper deep-purple accent-2 z-depth-0 ">
              {{-- logo --}}
              <a class="brand-logo center" href="#">LOGO</a>

              {{-- icone mobnile --}}
              <a class="sidenav-trigger" data-target="mobile-navbar" href="">
                <i class="material-icons">menu</i>
              </a>

              <ul id="Navitems" class="left hide-on-med-and-down">
                <li><a href="">Home</a></li>
                <li>
                  <a class="dropdown-trigger" data-target="dropdown-menu" href="">
                    Recipes <i class="material-icons right">arrow_drop_down</i>
                  </a>
                </li>
                <li><a href="">About us</a></li>
                <li><a href="">Donate</a></li>
              </ul>

              <div class="input-field right hide-on-med-and-down">
                  <i class="material-icons prefix">search</i>
                  <input id="icon_prefix" type="text" class="validate">
                  <label for="icon_prefix">Pesquisar receitas</label>
                </div>

              {{-- Dropdown --}}
              <ul id="dropdown-menu" class="dropdown-content">
                <li><a href="">Doces</a></li>
                <li><a href="">Salgados</a></li>
                <li><a href="">Bolos</a></li>
              </ul>
            </div>
          </nav>
        </div>

        {{-- menu mobile --}}
        <ul id="mobile-navbar" class="sidenav">
            <li><a href="">Home</a></li>
            <li>
              <a class="dropdown-trigger" data-target="dropdown-menu" href="">
                Recipes <i class="material-icons right">arrow_drop_down</i>
              </a>
            </li>
            <li><a href="">About us</a></li>
            <li><a href="">Donate</a></li>
        </ul>
        </header>
  <body>

    @yield('Content')


    <section id="footer" class=" indigo darken-3">
      <div class="row">
        <div  class=" left col l3 m6 s12">
          <div id="footerInfo">
            <h3>Atendimento</h3>
            <p>Horário de atendimento: 09:00 às 19:00 <br> de segunda à sexta-feira, horário de Brasília (exceto feriados).</p>
            <p>Endereço: Rua Carlos Gomes, 1321 - 9º Andar <br> 
                Centro - Limeira (SP) - CEP: 13480-010 <br>
                Central SAC: (19) 2114-4444 <br>
                E-mail: atendimento@receitas.com.br Recepção de Fax: (19) 2114-4412</p>
          </div>
      </div>
        <div id="ftCol" class="center col l7">
            <p>Recipes!® é uma marca registrada de KABUM COMÉRCIO ELETRÔNICO S/A | CNPJ: 05.570.714/0001-59 | Todos os direitos reservados. Os preços anunciados neste site ou via e-mail promocional podem ser alterados sem prévio aviso. O KaBuM! não é responsável por erros descritivos. As fotos contidas nesta página são meramente ilustrativas do produto e podem variar de acordo com o fornecedor/lote do fabricante. Este site trabalha 100% em criptografia SSL.</p>
        </div>
        <div class=" right col l2 s12">
          <div id="socials">
            <p>Mídias Sociais</p>
            <a href=""><img class="center" src="https://fizzynora.com/102/official_facebook_icon_png/official_facebook_icon_png_1.jpg" alt=""></a>
            <a href=""><img class="center" src="https://image.flaticon.com/icons/svg/174/174855.svg" alt=""></a>
          </div>
        </div>
      </div>
      <div id="rights" class="center row indigo darken-4">
        <h3>2019 @ All rights reserved</h3>
      </div>
    </section>
   

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
    <script src="js/main.js"></script>
 
  
  </body>
</html>
      