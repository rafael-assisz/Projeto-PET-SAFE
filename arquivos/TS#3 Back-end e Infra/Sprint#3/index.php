<?php
  // Identifica erros
  //ini_set('display_errors', 'off');

  // Monta o arquivo styles.css
  $nome = array('jumbotron', 'menu', 'servicos', 'solucoes', 'frases', 'produtos', 'equipe', 'contato', 'footer');

  $clear = fopen('styles.css', 'w+');
  fwrite($clear, "");
  fclose($clear);

  // $global_css = file_get_contents('assets/global/global.css', 'a+');
  // $add_global_css = fopen('styles.css', 'a+');
  // fwrite($add_global_css, $global_css);
  // fclose($add_global_css);

  for ($i=0; $i < count($nome); $i++) {
    $style = file_get_contents('modulos/' . $nome[$i] . '/style.css');

    $styles = fopen('styles.css', 'a+');
    fwrite($styles, "");
    fwrite($styles, $style);
    fclose($styles);
  }

  // Monta o arquivo scripts.js
  $clear = fopen('scripts.js', 'w+');
  fwrite($clear, "");
  fclose($clear);

  for ($i=0; $i < count($nome); $i++) {
    $script = file_get_contents('modules/'.$nome[$i].'/script.js');

    $scripts = fopen('scripts.js', 'a+');
    fwrite($scripts, "");
    fwrite($scripts, $script);
    fclose($scripts);
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="icon" type="image/png" href="assets/img/Favicon/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" charset="utf-8">
    
  </head>
  <body>
    <nav>
      <?php include 'modulos/menu/index.html' ?>
    </nav>
    <main>
      <?php include 'modules/servicos/index.html' ?>
      <?php include 'modules/solucoes/index.html' ?>
      <?php include 'modules/frases/index.html' ?>
      <?php include 'modules/produtos/index.html' ?>
      <?php include 'modules/equipe/index.html' ?>
      <?php include 'modules/contato/index.php' ?>
    </main>
    <!--footer>
      <?php include 'modules/footer/index.html' ?>
    </footer-->
  </body>
  <script src="assets/js/jquery-1.11.3.min.js"></script>
  <script src="scripts.js"></script>
</html>
