<?php

declare(strict_types=1);

include_once __DIR__ . '/icons.php';

$menu = require __DIR__ . '/../config/menu.php';

$pageTitle = $pageTitle ?? 'IPAC Psicologia | Clínica de Psicologia em Londrina - PR';

$pageDescription = $pageDescription
    ?? 'Clínica de psicologia em Londrina - PR. A IPAC oferece atendimento psicológico humanizado, baseado em evidências e realizado por profissionais qualificados.';

$pageUrl = $pageUrl ?? 'https://www.ipacpsicologia.com.br/';

?>

<!-- SEO -->
<title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>

<meta
  name="description"
  content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>"
>

<meta name="robots" content="index, follow">

<link
  rel="canonical"
  href="<?= htmlspecialchars($pageUrl, ENT_QUOTES, 'UTF-8') ?>"
>

<!-- Configurações básicas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="theme-color" content="#ffffff">

<!-- Favicon -->
<link
  rel="icon"
  type="image/svg+xml"
  href="/assets/images/favicon-ipac.svg"
>

<!-- Open Graph -->
<meta
  property="og:title"
  content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>"
>

<meta
  property="og:description"
  content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>"
>

<meta property="og:type" content="website">

<meta
  property="og:url"
  content="<?= htmlspecialchars($pageUrl, ENT_QUOTES, 'UTF-8') ?>"
>

<meta property="og:locale" content="pt_BR">

<meta property="og:site_name" content="IPAC Psicologia">

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

<script src="/../../assets/js/posts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Embed oficial do Instagram -->
<script async src="https://www.instagram.com/embed.js"></script>
