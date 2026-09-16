<section class="relative grid grid-cols-1 lg:grid-cols-2 min-h-screen lg:min-h-[650px] overflow-hidden bg-white">

  <div class="absolute inset-0 z-0 bg-white bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:16px_16px] opacity-70"></div>

  <div class="relative z-10 flex flex-col justify-center gap-5 sm:gap-6 md:gap-8 px-5 sm:px-6 md:px-10 lg:px-12 xl:px-20 2xl:px-32 py-16 sm:py-20 md:py-24 lg:py-24">

    <h3 class="sm:text-[16px] md:text-[20px] lg:text-[24px] text-black font-cormorant leading-tight max-w-lg">
      Entenda seus comportamentos.
      <span class="text-[#9aaa00]">Transforme sua relação com você mesmo.</span>
    </h3>

    <p class="text-sm text-gray-500 leading-relaxed max-w-lg">
      Acolhimento humanizado e ciência baseada em evidências para promover mudanças reais, duradouras e significativas na sua vida,
      <span class="text-[#9aaa00]">respeitando sua história, seu tempo e seus objetivos.</span>
    </p>

    <div class="flex flex-col sm:flex-row gap-4">
      <a href="#" class="flex justify-center items-center gap-2 text-sm text-white font-medium px-8 py-3 rounded-lg hover:opacity-90 transition bg-gradient-to-r from-[#687237] to-[#d1e254]">
        <?= icon('share', 16, 'text-white') ?>
        Agendar consulta
      </a>

      <a href="#" class="flex justify-center items-center gap-2 text-sm text-[#9aaa00] font-medium px-8 py-3 rounded-lg border border-[#9aaa00] hover:bg-[#9aaa0020] transition bg-white">
        <?= icon('eye', 16, 'text-[#9aaa00]') ?>
        Conheça a clínica
      </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 max-w-xl">
      <div class="flex items-center gap-3">
        <?= icon('heart', 16, 'text-[#9aaa00]') ?>
        <p class="text-sm">+5 mil consultas</p>
      </div>

      <div class="flex items-center gap-3">
        <?= icon('user-graduate', 16, 'text-[#9aaa00]') ?>
        <p class="text-sm">16 profissionais</p>
      </div>

      <div class="flex items-center gap-3">
        <?= icon('badge-check', 16, 'text-[#9aaa00]') ?>
        <p class="text-sm">Ética & Respeito</p>
      </div>
    </div>
  </div>

  <div class="relative hidden lg:block min-h-[650px] overflow-hidden">
    <img
      src="/assets/images/recepcao-clinica.png"
      alt="Ambiente acolhedor IPAC"
      class="absolute inset-0 h-full w-full object-cover animate-hero" />

    <div class="absolute inset-0 bg-gradient-to-r from-white via-white/45 to-transparent pointer-events-none"></div>
  </div>
  
</section>
