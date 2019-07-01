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
            <div class="nav-wrapper row container">
                <div class="col s4"><a href="index.php" class="brand-logo"><img width="220px" src="image/logo_locatel_160.png"></a></div>
                <div class="col s2"><input type="text" class="datepicker white-text" placeholder="Elige Fecha"></div>
                <div class="col s1 center">-</div>
                <div class="col s2"><input type="text" class="datepicker white-text" placeholder="Elige Fecha"></div>
                <div class="col s3"><a class="waves-effect waves-orange btn-small locatel-color z-depth-0">Buscar</a></div>

            </div>
        </nav>
    </div>

    <main><section>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <br>

                    
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


    <script type="text/javascript">
  $(document).ready(function(){
    $('.datepicker').datepicker();
  });

  
    </script>



</body>
</html>

