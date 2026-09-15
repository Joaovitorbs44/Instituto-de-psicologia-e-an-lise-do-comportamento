<?php

declare(strict_types=1);

include_once __DIR__ . '/icons.php';

$menu = require __DIR__ . '/../config/menu.php';

?>

<title><?= htmlspecialchars($pageTitle ?? 'IPAC - Clínica de Psicologia') ?></title>

<link rel="stylesheet" href="/assets/css/output.css">
<link
  rel="icon"
  type="image/svg+xml"
  href="/assets/images/favicon-ipac.svg"
>

<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Embed oficial do Instagram -->
<script async src="https://www.instagram.com/embed.js"></script>