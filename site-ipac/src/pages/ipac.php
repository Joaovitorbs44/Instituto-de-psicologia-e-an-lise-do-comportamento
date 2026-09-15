<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require_once __DIR__ . '/../includes/head.php'; ?>
</head>

<body class="font-geist">
  <?php require_once __DIR__ . '/../includes/navbar.php'; ?>

  <?php require_once __DIR__ . '/../config/render.php'; ?>

  <?php 
    render_section('hero');
    render_section('galeria');
    render_section('frases');
    render_section('profissionais');
    render_section('carrossel');
    render_section('localizacao');
  ?>

  <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
