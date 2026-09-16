<?php
require_once __DIR__ . '/icons.php';
$itensNavbar = require __DIR__ . '/../config/menu.php';
?>

<div class="flex justify-between items-center px-4 sm:px-6 md:px-10 lg:px-20 xl:px-40 h-10 bg-[#9aaa00]">
  <span class="flex items-center gap-2 text-[11px] sm:text-xs text-white font-medium">
    <?= icon('user', 16) ?>

    <span class="hidden sm:block">
      Atendimento presencial em Londrina - PR
    </span>

    <span class="sm:hidden">
      Londrina - PR
    </span>
  </span>

  <a href="https://www.instagram.com/ipacanalisedocomportamento/" class="flex items-center gap-2 text-[11px] sm:text-xs text-white font-medium">
    <?= icon('instagram', 16) ?>

    <span class="hidden md:block">
      Siga-nos no Instagram
    </span>
  </a>
</div>

<header class="relative h-20 lg:h-24 border-b border-gray-100 bg-white">

  <!-- MESMO GRID 50/50 DA HERO -->
  <div class="grid grid-cols-2 h-full">

    <!-- =========================
         LADO ESQUERDO
    ========================== -->
    <div
      class="
        flex
        items-center
        justify-start
        px-4
        sm:px-6
        md:px-10
        lg:px-[68px]
      "
    >

      <a
        href="#inicio"
        aria-label="IPAC — início"
        class="shrink-0"
      >
        <img
          src="/assets/images/LogoIpac_02.svg"
          alt="IPAC"
          class="h-7 sm:h-8 lg:h-9 w-auto"
        />
      </a>

    </div>


    <!-- =========================
         LADO DIREITO
    ========================== -->
    <div
      class="
        flex
        items-center
        justify-end
        px-4
        sm:px-6
        md:px-10
        lg:px-[68px]
      "
    >

      <a
        href="https://wa.me/554391639815"
        target="_blank"
        rel="noopener noreferrer"
        class="
          hidden
          xl:flex
          shrink-0
          items-center
          gap-2
          text-xs
          text-white
          font-medium
          px-5
          py-2.5
          rounded-lg
          bg-gradient-to-r
          from-[#687237]
          to-[#d1e254]
        "
      >

        <?= icon('whatsapp', 16) ?>

        Agendar

      </a>


      <!-- MOBILE -->
      <button
        type="button"
        id="menuButton"
        aria-label="Abrir menu"
        aria-controls="mobileMenu"
        aria-expanded="false"
        class="
          xl:hidden
          inline-flex
          items-center
          justify-center
          min-h-11
          min-w-11
          rounded-lg
          border
          border-gray-100
        "
      >

        <?= icon('bars', 24, 'text-[#9aaa00]') ?>

      </button>

    </div>

  </div>


  <!-- =========================
       NAVBAR CENTRAL
  ========================== -->

  <nav
    aria-label="Navegação principal"
    class="
      hidden
      xl:flex
      absolute
      left-1/2
      top-1/2
      -translate-x-1/2
      -translate-y-1/2
      items-center
      gap-6
    "
  >

    <?php foreach ($itensNavbar as $item) { ?>

      <a
        href="<?= htmlspecialchars(
          $item['link'],
          ENT_QUOTES,
          'UTF-8'
        ) ?>"
        class="
          text-sm
          whitespace-nowrap
          text-neutral-800
          hover:text-[#9aaa00]
          transition
          duration-200
        "
      >
        <?= $item['nome'] ?>
      </a>

    <?php } ?>

  </nav>

</header>

<div class="hidden xl:hidden bg-white border-b border-gray-100 px-4 min-[375px]:px-5 min-[425px]:px-6 md:px-10 lg:px-20" id="mobileMenu">
  <nav aria-label="Navegação móvel" class="flex flex-col">
    <?php foreach ($itensNavbar as $item) { ?>
      <a href="<?= htmlspecialchars($item['link'], ENT_QUOTES, 'UTF-8') ?>" class="px-5 py-4 text-sm border-b border-gray-100 hover:text-[#9aaa00] transition">
        <?= $item['nome'] ?>
      </a>
    <?php } ?>

    <a href="https://wa.me/554391639815" target="_blank" rel="noopener noreferrer" class="flex justify-center items-center gap-2 m-5 py-3 text-sm text-white font-medium bg-gradient-to-r from-[#687237] to-[#d1e254]">
      <?= icon('whatsapp', 16) ?>
      Agendar
    </a>
  </nav>
</div>

<script>
(() => {
  const button = document.getElementById("menuButton");
  const menu = document.getElementById("mobileMenu");

  function setMenuOpen(open) {
    menu.classList.toggle("hidden", !open);
    button.setAttribute("aria-expanded", String(open));
    button.setAttribute("aria-label", open ? "Fechar menu" : "Abrir menu");
  }

  button.addEventListener("click", () => {
    setMenuOpen(button.getAttribute("aria-expanded") !== "true");
  });
  menu.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => setMenuOpen(false));
  });
  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape" && button.getAttribute("aria-expanded") === "true") {
      setMenuOpen(false);
      button.focus();
    }
  });
  window.matchMedia("(min-width: 1280px)").addEventListener("change", () => setMenuOpen(false));
})();
</script>
