<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fallas Farmacia</title>
    <link rel="shortcut icon" href="image/Locatel.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <link rel="stylesheet" type="text/css" href="css/icons.css">

</head>
<body class="blue-grey darken-4">

    <div class="nabvar-fixed">
        <nav class="locatel-color z-depth-0">
            <div class="nav-wrapper container">
                <a href="#" class="brand-logo"><img width="220px" src="image/logo_locatel_160.png"></a>
                <ul id="nav-mobile" class="right">
                    <li><a class="waves-effect waves-orange" href="descargar.php" target="_black"><i class="material-icons">archive</i></a></li>
                    <li><a class="waves-effect waves-orange btn locatel-color z-depth-0">Enviar <i class="material-icons right">send</i></a></li>
                </ul>
            </div>
        </nav>
        <nav class="locatel-color z-depth-0">
            <div class="nav-wrapper container">
                <form>
                    <div class="input-field">
                        <input name="caja_busqueda" id="caja_busqueda" type="search" onFocus="this.value=''" required autocomplete="disable">
                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    </div>
                </form>
            </div>
        </nav>
    </div>

    <main><section>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <br>

                    <div id="datos"></div>
                    <!-- <table class="white">
                        <thead>
                            <tr>
                                <th>SAP</th>
                                <th>Material</th>
                                <th>Seleccion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2018867</td>
                                <td>GYNO CANESTEN CREM.VAG.10% 5GR</td>
                                <td><label><input type="checkbox" class="filled-in"/><span></span></label></td>
                            </tr>
                            <tr>
                                <td>2010423</td>
                                <td>TODEX SUSP OFT 5ML</td>
                                <td><label><input type="checkbox" class="filled-in"/><span></span></label></td>
                            </tr>
                            <tr>
                                <td>2017991</td>
                                <td>DICLOFENAC S.CA TABL.50MGX20</td>
                                <td><label><input type="checkbox" class="filled-in"/><span></span></label></td>
                            </tr>
                        </tbody>
                    </table> -->
                </div>
            </div>
        </div>
    </section></main>


    <footer class="page-footer locatel-color">
        <div class="footer-copyright">
            <div class="container">
                © 2019 Fallas Farmacia - Ver. 1.0
                <button data-target="modal1" class="btn-floating waves-effect waves-orange locatel-color right z-depth-0 modal-trigger"><i class="material-icons">info_outline</i></button>
            </div>
        </div>
    </footer>


    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Fallas Farmacia</h4>
            <p>A bunch of text</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-orange btn-flat">Agree</a>
        </div>
    </div>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    <script type="text/javascript">
          document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.modal').modal();
  });
    </script>
</body>
</html>