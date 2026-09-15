<?php $psicologos = require_once __DIR__ . '/../config/lista_psicologos.php'; ?>

<div id="servicos" aria-hidden="true"></div>
<section id="profissionais" class="relative flex flex-col justify-center items-center w-full min-h-screen
                px-4 min-[375px]:px-5 min-[425px]:px-6 md:px-12 lg:px-20 min-[1440px]:px-20
                py-16 min-[375px]:py-18 min-[425px]:py-20 md:py-20 lg:py-20 bg-white">

  <div class="absolute inset-0 z-0 bg-white bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:16px_16px] opacity-70"></div>

  <div class="relative z-10 flex flex-col items-center gap-8 min-[375px]:gap-9 min-[425px]:gap-10 w-full max-w-[1440px] mx-auto">

    <div class="flex flex-col items-center gap-2">

      <span class="text-xs min-[375px]:text-[13px] min-[425px]:text-sm text-[#9aaa00] font-medium tracking-[1.5px]">
        Nossa equipe
      </span>

      <h3 class="text-[22px] min-[375px]:text-[24px] min-[425px]:text-[26px] md:text-[28px] lg:text-[24px] xl:text-[28px]
                 text-black font-cormorant text-center leading-tight">
        Conheça quem vai
        <span class="text-[#9aaa00]">acolher a sua história.</span>
      </h3>

      <p class="text-[13px] min-[375px]:text-sm md:text-[15px] lg:text-sm xl:text-[15px]
                text-gray-500 text-center leading-relaxed max-w-lg px-1 min-[375px]:px-2 min-[425px]:px-0">
        Conheça os psicólogos e encontre um profissional para acompanhar você. Entre em contato para agendar sua consulta.
      </p>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 min-[375px]:gap-4 md:gap-4 w-full">

      <?php foreach ($psicologos as $index => $psicologo) { ?>
        <?php
        $prefixo = $psicologo['genero'] === 'feminino' ? 'Dra.' : 'Dr.';
        $tituloCargo = $psicologo['genero'] === 'feminino' ? 'Psicóloga' : 'Psicólogo';
        $escondido = $index >= 3;
        $mensagemAgendamento = 'Olá! Gostaria de agendar uma consulta com ' . $prefixo . ' ' . $psicologo['nome'] . '. Quais são os horários disponíveis?';
        $linkWhatsApp = 'https://wa.me/554391639815?text=' . rawurlencode($mensagemAgendamento);
        ?>

        <article class="flex justify-between items-center gap-4 min-[375px]:gap-5 min-[425px]:gap-6 md:gap-6 lg:gap-8
                        w-full h-fit
                        p-3 min-[375px]:p-4
                        border border-gray-100 rounded-[24px] min-[425px]:rounded-[28px] bg-white">

          <div class="flex flex-col gap-3 min-[425px]:gap-4 min-w-0">

            <div class="flex flex-col gap-2">

              <h3 class="text-[11px] min-[375px]:text-xs text-black font-semibold">
                <?php echo $prefixo . ' ' . htmlspecialchars($psicologo['nome']); ?>
              </h3>

              <p class="text-[9px] min-[375px]:text-[10px] text-gray-500 font-medium">
                <?php echo $tituloCargo . ' - CRP ' . htmlspecialchars($psicologo['crp']); ?>
              </p>

            </div>

            <div class="flex flex-wrap items-center gap-3 min-[375px]:gap-4">

              <a href="<?= htmlspecialchars($linkWhatsApp, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 text-[11px] min-[375px]:text-xs text-[#22c55e] font-medium hover:opacity-80 transition-opacity">
                <?= icon('whatsapp', 16) ?>
                <span>Agendar</span>
              </a>

              <a href="<?= ($psicologo['instagram']) ?>" class="inline-flex items-center gap-1 text-[11px] min-[375px]:text-xs text-[#ca3d82] font-medium hover:opacity-80 transition-opacity">
                <?= icon('instagram', 16) ?>

                <span class="bg-gradient-to-r from-[#833ab4] via-[#fd1d1d] to-[#fcb045] bg-clip-text text-transparent">
                  Instagram
                </span>
              </a>

            </div>

          </div>

          <div class="w-[72px] h-[72px]
                      min-[375px]:w-[80px] min-[375px]:h-[80px]
                      min-[425px]:w-[90px] min-[425px]:h-[90px]
                      md:w-[84px] md:h-[84px]
                      lg:w-[90px] lg:h-[90px]
                      shrink-0 rounded-[12px] overflow-hidden bg-neutral-100">

            <img
              src="<?php echo htmlspecialchars($psicologo['img']); ?>"
              alt="<?php echo htmlspecialchars($psicologo['nome']); ?>"
              class="w-full h-full object-cover"
              loading="lazy"
            />

          </div>

        </article>

      <?php } ?>

    </div>

  </div>

</section>
