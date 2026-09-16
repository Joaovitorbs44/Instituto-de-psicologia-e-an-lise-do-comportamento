<footer class="bg-[#111111]
               px-4 min-[375px]:px-5 min-[425px]:px-6
               md:px-10
               lg:px-20
               min-[1440px]:px-40
               py-12 min-[425px]:py-14 md:py-16">

  <div class="grid grid-cols-1
              md:grid-cols-2
              lg:grid-cols-12
              gap-10 min-[425px]:gap-12
              lg:gap-16
              pb-10 min-[425px]:pb-12">

    <!-- Logo -->
    <div class="lg:col-span-5 text-center lg:text-left">

      <a href="#inicio" class="inline-flex items-center justify-center lg:justify-start">
        <img
          src="/assets/images/LogoIpac_02.svg"
          alt="IPAC"
          class="h-7 min-[375px]:h-8 w-auto" />
      </a>

      <p class="mt-4 min-[425px]:mt-5
                text-[13px] min-[375px]:text-sm
                leading-relaxed
                text-gray-300
                max-w-lg
                mx-auto lg:mx-0">
        Instituto de Psicologia e Análise do Comportamento é um espaço acolhedor e humanizado para promover saúde emocional, autoconhecimento e qualidade de vida em todas as fases da vida.
      </p>

      <div class="flex justify-center lg:justify-start
                  gap-4 min-[425px]:gap-5
                  mt-6 min-[425px]:mt-8">

        <a href="https://wa.me/554391639815" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp do IPAC" class="text-[#9aaa00] hover:text-white transition">
          <?= icon('whatsapp', 20) ?>
        </a>

        <a href="mailto:contato@ipac.com.br" aria-label="Enviar e-mail para o IPAC" class="text-[#9aaa00] hover:text-white transition">
          <?= icon('email', 20) ?>
        </a>

        <a href="https://www.instagram.com/ipacanalisedocomportamento/" target="_blank" rel="noopener noreferrer" aria-label="Instagram do IPAC" class="text-[#9aaa00] hover:text-white transition">
          <?= icon('instagram', 20) ?>
        </a>

      </div>

    </div>

    <!-- Navegação -->
    <div class="lg:col-span-2 text-center lg:text-left">

      <h3 class="text-base min-[425px]:text-lg font-cormorant text-[#8EA863]">
        Navegação
      </h3>

      <ul class="flex flex-col
                 gap-2 min-[425px]:gap-3
                 mt-4 min-[425px]:mt-5
                 text-[13px] min-[375px]:text-sm
                 text-gray-300">

        <a href="#inicio" class="hover:text-white transition">Início</a>
        <a href="#sobre" class="hover:text-white transition">Sobre a Clínica</a>
        <a href="#profissionais" class="hover:text-white transition">Profissionais</a>
        <a href="#servicos" class="hover:text-white transition">Serviços</a>
        <a href="#contato" class="hover:text-white transition">Contato</a>

      </ul>

    </div>

    <!-- Serviços -->
    <div class="lg:col-span-2 text-center lg:text-left">

      <h3 class="text-base min-[425px]:text-lg font-cormorant text-[#8EA863]">
        Serviços
      </h3>

      <ul class="flex flex-col
                 gap-2 min-[425px]:gap-3
                 mt-4 min-[425px]:mt-5
                 text-[13px] min-[375px]:text-sm
                 text-gray-300">

        <a href="#servicos" class="hover:text-white transition">
          Terapia Individual
        </a>

        <a href="#servicos" class="hover:text-white transition">
          Terapia de Casal
        </a>

        <a href="#servicos" class="hover:text-white transition">
          Psicoterapia Infantil
        </a>

        <a href="#servicos" class="hover:text-white transition">
          Avaliação Psicológica
        </a>

      </ul>

    </div>

    <!-- Contato -->
    <div class="lg:col-span-3 text-center lg:text-left">

      <h3 class="text-base min-[425px]:text-lg font-cormorant text-[#8EA863]">
        Contato
      </h3>

      <div class="flex flex-col
                  gap-3 min-[425px]:gap-4
                  mt-4 min-[425px]:mt-5">

        <a href="#contato" class="text-[13px] min-[375px]:text-sm text-gray-300 hover:text-white transition">
          R. Pará 1753, 86020-400<br>
          Londrina - PR
        </a>

        <?php
        $whatsapp = '554391639815';
        $mensagem = urlencode(
          "Olá! Gostaria de agendar uma consulta. Poderiam me passar os horários disponíveis? Por favor"
        );
        ?>

        <a
          href="https://wa.me/<?= $whatsapp ?>?text=<?= $mensagem ?>"
          class="text-[13px] min-[375px]:text-sm text-gray-300 hover:text-white transition">

          +55 (43) 9163-9815

        </a>

        <a
          href="mailto:contato@ipac.com.br"
          class="text-[13px] min-[375px]:text-sm text-gray-300 hover:text-white transition">

          contato@ipac.com.br

        </a>

      </div>

    </div>

  </div>

  <!-- Rodapé -->

  <div class="border-t border-white/10
              pt-6 min-[425px]:pt-8">

    <div class="flex flex-col
                lg:flex-row
                items-center
                justify-between
                gap-5 min-[425px]:gap-6
                text-center lg:text-left">

      <p class="text-[11px] min-[375px]:text-xs
                text-gray-400
                leading-relaxed">
        © 2026 IPAC — Instituto de Psicologia e Análise do Comportamento.
        Todos os direitos reservados.
      </p>

      <div class="flex flex-col
                  min-[425px]:flex-row
                  items-center
                  gap-3 min-[425px]:gap-4
                  md:gap-6">

        <a href="#" class="text-[11px] min-[375px]:text-xs text-gray-400 hover:text-white transition">
          Política de Privacidade
        </a>

        <a href="#" class="text-[11px] min-[375px]:text-xs text-gray-400 hover:text-white transition">
          Termos de Uso
        </a>

        <a href="#" class="text-[11px] min-[375px]:text-xs text-gray-400 hover:text-white transition">
          Desenvolvido por jvbs43.dev
        </a>

      </div>

    </div>

  </div>

</footer>
