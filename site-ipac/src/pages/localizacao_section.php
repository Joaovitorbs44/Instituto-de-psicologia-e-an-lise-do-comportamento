<!-- SEÇÃO DE LOCALIZAÇÃO -->
<section id="contato" class="w-full
                px-4 min-[375px]:px-5 min-[425px]:px-6
                md:px-12
                lg:px-20
                min-[1440px]:px-20
                py-12 min-[375px]:py-14 min-[425px]:py-16
                md:py-20">

  <div class="flex flex-col
              gap-8 min-[425px]:gap-10
              w-full max-w-[1440px] mx-auto">

    <!-- =========================
         HEADER
    ========================== -->

    <div class="flex flex-col items-center gap-2">

      <span class="text-xs
                   min-[375px]:text-[13px]
                   min-[425px]:text-sm
                   text-[#9aaa00]
                   font-medium
                   tracking-[1.5px]">
        Localização & Acesso
      </span>

      <h3 class="text-[22px]
                 min-[375px]:text-[24px]
                 min-[425px]:text-[26px]
                 md:text-[28px]
                 lg:text-[24px]
                 min-[1440px]:text-[28px]
                 text-black
                 font-cormorant
                 text-center
                 leading-tight">

        Estamos perto de você,
        <span class="text-[#9aaa00]">
          no coração de Londrina.
        </span>

      </h3>

      <p class="text-[13px]
                min-[375px]:text-sm
                md:text-[15px]
                lg:text-sm
                min-[1440px]:text-[15px]
                text-gray-500
                text-center
                leading-relaxed
                max-w-lg
                px-1 min-[375px]:px-2 min-[425px]:px-0">

        Um espaço de fácil acesso, preparado para receber você com conforto,
        privacidade e tranquilidade em todos os momentos.

      </p>

      <!-- STATUS -->
      <div class="flex items-center gap-2 mt-2">

        <span class="relative flex h-2 w-2">

          <span class="absolute
                       inline-flex
                       h-full w-full
                       rounded-full
                       bg-[#9aaa00]
                       opacity-30
                       animate-ping">
          </span>

          <span class="relative
                       inline-flex
                       h-2 w-2
                       rounded-full
                       bg-[#9aaa00]">
          </span>

        </span>

        <span class="text-[11px] min-[375px]:text-xs text-gray-500">
          Atendimento hoje até 19:00
        </span>

      </div>

    </div>


    <!-- =========================
         GRID PRINCIPAL
    ========================== -->

    <div class="grid
                grid-cols-1
                lg:grid-cols-12
                gap-4
                min-[375px]:gap-5
                min-[425px]:gap-6
                items-stretch">


      <!-- =========================
           CARD ESQUERDO
      ========================== -->

      <div class="lg:col-span-5
                  rounded-xl
                  border border-zinc-200
                  bg-white
                  p-4
                  min-[375px]:p-5
                  min-[425px]:p-6
                  flex flex-col
                  justify-between
                  gap-6">


        <div class="space-y-5">

          <!-- ENDEREÇO -->
          <div class="space-y-2
                      p-4
                      rounded-lg
                      border border-zinc-200
                      bg-zinc-50/70">

            <div class="flex
                        items-center
                        justify-between
                        gap-2">

              <span class="text-[10px]
                           min-[375px]:text-xs
                           text-zinc-500
                           font-mono">

                ENDEREÇO OFICIAL

              </span>

              <span class="inline-flex
                           items-center
                           gap-1.5
                           text-[9px]
                           min-[375px]:text-[10px]
                           text-[#718000]
                           font-medium">

                <span class="w-1.5 h-1.5 rounded-full bg-[#9aaa00]"></span>

                VERIFICADO

              </span>

            </div>


            <div class="font-semibold
                        text-sm
                        min-[375px]:text-base
                        text-zinc-900">

              Rua Pará, 1753

            </div>


            <div class="text-[11px]
                        min-[375px]:text-xs
                        text-zinc-600">

              Centro · Londrina - PR · CEP 86020-400

            </div>

          </div>


          <!-- DETALHES -->
          <div class="space-y-4
                      text-[11px]
                      min-[375px]:text-xs">


            <!-- PONTO DE REFERÊNCIA -->
            <div class="flex items-start gap-3">

              <div class="flex
                          items-center
                          justify-center
                          w-9 h-9
                          rounded-lg
                          border border-zinc-200
                          bg-zinc-50
                          text-[#9aaa00]
                          shrink-0">

                <?= icon('location', 16) ?>

              </div>

              <div class="flex flex-col gap-1">

                <div class="font-medium text-zinc-900">
                  Ponto de Referência
                </div>

                <div class="text-zinc-500 leading-relaxed">
                  Entre Rua Santos e Rua Paranaguá. Próximo à Av. Higienópolis.
                </div>

              </div>

            </div>


            <!-- ESTACIONAMENTO -->
            <div class="flex items-start gap-3">

              <div class="flex
                          items-center
                          justify-center
                          w-9 h-9
                          rounded-lg
                          border border-zinc-200
                          bg-zinc-50
                          text-[#9aaa00]
                          shrink-0">

                <?= icon('car', 16) ?>

              </div>

              <div class="flex flex-col gap-1">

                <div class="font-medium text-zinc-900">
                  Estacionamento & Acesso
                </div>

                <div class="text-zinc-500 leading-relaxed">
                  Vagas em frente e nas vias laterais. Estrutura térrea e acessível.
                </div>

              </div>

            </div>


            <!-- TELEFONE -->
            <div class="flex items-start gap-3">

              <div class="flex
                          items-center
                          justify-center
                          w-9 h-9
                          rounded-lg
                          border border-zinc-200
                          bg-zinc-50
                          text-[#9aaa00]
                          shrink-0">

                <?= icon('whatsapp', 16) ?>

              </div>

              <div class="flex flex-col gap-1">

                <div class="font-medium text-zinc-900">
                  Telefone / Agendamentos
                </div>

                <div class="text-zinc-600 font-mono font-medium">
                  (43) 3029-0093
                </div>

              </div>

            </div>

          </div>

        </div>


        <!-- PARTE INFERIOR DO CARD -->
        <div class="flex flex-col gap-3
                    pt-4
                    border-t border-zinc-200">


          <!-- TAB SWITCHER -->
          <div class="inline-flex
                      w-full
                      h-10
                      items-center
                      justify-center
                      rounded-lg
                      bg-zinc-100
                      p-1
                      text-zinc-500
                      border border-zinc-200/60">

            <!-- MAPA -->
            <button
              id="tabMap"
              type="button"
              onclick="switchTab('map')"
              class="inline-flex
                     flex-1
                     items-center
                     justify-center
                     gap-1.5
                     whitespace-nowrap
                     rounded-md
                     px-2 min-[375px]:px-3
                     py-1.5
                     text-[10px] min-[375px]:text-xs
                     font-medium
                     transition-all
                     bg-white
                     text-zinc-900
                     shadow-sm">

              <?= icon('location', 13) ?>

              Mapa Interativo

            </button>


            <!-- INFORMAÇÕES -->
            <button
              id="tabDetails"
              type="button"
              onclick="switchTab('details')"
              class="inline-flex
                     flex-1
                     items-center
                     justify-center
                     gap-1.5
                     whitespace-nowrap
                     rounded-md
                     px-2 min-[375px]:px-3
                     py-1.5
                     text-[10px] min-[375px]:text-xs
                     font-medium
                     transition-all
                     text-zinc-500
                     hover:text-zinc-900">

              <?= icon('info', 13) ?>

              Informações Práticas

            </button>

          </div>


          <!-- BOTÕES DE AÇÃO -->
          <div class="flex
                      flex-col
                      min-[425px]:flex-row
                      gap-2">


            <!-- MAPS -->
            <a
              href="https://maps.google.com/?q=Rua+Para+1753+Londrina"
              target="_blank"
              rel="noopener"
              class="inline-flex
                     items-center
                     justify-center
                     gap-2
                     whitespace-nowrap
                     rounded-md
                     text-[11px]
                     min-[375px]:text-xs
                     font-medium
                     h-9
                     px-4
                     bg-zinc-900
                     text-white
                     hover:bg-zinc-800
                     transition-colors
                     shadow-sm">

              <?= icon('location', 13) ?>

              Abrir no Maps

            </a>


            <!-- COPIAR ENDEREÇO -->
            <button
              type="button"
              onclick="copyAddress()"
              class="inline-flex
                     flex-1
                     items-center
                     justify-center
                     gap-2
                     whitespace-nowrap
                     rounded-md
                     text-[11px]
                     min-[375px]:text-xs
                     font-medium
                     h-9
                     px-4
                     border border-zinc-200
                     bg-zinc-100
                     text-zinc-900
                     hover:bg-zinc-200/70
                     transition-colors">

              <span id="copyIcon">
                <?= icon('copy', 13) ?>
              </span>

              <span id="copyBtnText">
                Copiar Endereço
              </span>

            </button>

          </div>

        </div>

      </div>


      <!-- =========================
           CARD DIREITO
      ========================== -->

      <div class="lg:col-span-7
                  rounded-xl
                  border border-zinc-200
                  bg-white
                  overflow-hidden
                  flex flex-col
                  relative
                  min-h-[340px]
                  min-[375px]:min-h-[360px]
                  min-[425px]:min-h-[400px]
                  md:min-h-[430px]
                  lg:min-h-[500px]">


        <!-- =========================
             MAPA
        ========================== -->

        <div
          id="panelMap"
          class="absolute
                 inset-0
                 w-full
                 h-full
                 transition-opacity
                 duration-200">

          <iframe
            class="w-full h-full border-0"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3663.9213192415177!2d-51.170774!3d-23.3145094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94eb4358086892d7%3A0x66d625605878b85d!2sIPAC-+Instituto+de+Psicologia+e+An%C3%A1lise+do+Comportamento!5e0!3m2!1spt-BR!2sbr"
            allowfullscreen=""
            loading="lazy">
          </iframe>

        </div>


        <!-- =========================
             INFORMAÇÕES PRÁTICAS
        ========================== -->

        <div
          id="panelDetails"
          class="absolute
                 inset-0
                 w-full
                 h-full
                 p-4
                 min-[375px]:p-5
                 min-[425px]:p-6
                 hidden
                 overflow-y-auto
                 bg-white">


          <!-- HEADER DAS INFORMAÇÕES -->
          <div class="flex
                      flex-col
                      min-[425px]:flex-row
                      min-[425px]:items-center
                      justify-between
                      gap-3
                      mb-6">

            <div class="space-y-1">

              <h3 class="text-sm
                         min-[375px]:text-base
                         font-semibold
                         tracking-tight
                         text-zinc-900">

                Orientações de Chegada

              </h3>

              <p class="text-[11px]
                        min-[375px]:text-xs
                        text-zinc-500">

                Informações para tornar sua chegada mais simples e tranquila.

              </p>

            </div>


            <div class="inline-flex
                        items-center
                        gap-2
                        self-start
                        rounded-full
                        border border-[#9aaa00]/20
                        bg-[#9aaa00]/5
                        px-3
                        py-1.5">

              <span class="w-1.5 h-1.5 rounded-full bg-[#9aaa00]"></span>

              <span class="text-[10px]
                           font-medium
                           text-[#718000]">

                Atendimento com agendamento

              </span>

            </div>

          </div>


          <!-- CARDS -->
          <div class="grid
                      grid-cols-1
                      md:grid-cols-2
                      gap-4">


            <!-- HORÁRIOS -->
            <div class="flex
                        flex-col
                        justify-between
                        gap-5
                        p-4
                        min-[425px]:p-5
                        rounded-xl
                        border border-zinc-200
                        bg-zinc-50/50">

              <div class="flex items-start gap-3">

                <div class="flex
                            items-center
                            justify-center
                            w-9 h-9
                            rounded-lg
                            border border-zinc-200
                            bg-white
                            text-[#9aaa00]
                            shrink-0">

                  <?= icon('clock', 17) ?>

                </div>


                <div class="flex flex-col gap-2">

                  <span class="text-xs
                               font-semibold
                               text-zinc-900">

                    Horários de Atendimento

                  </span>

                  <p class="text-[11px]
                            min-[375px]:text-xs
                            text-zinc-500
                            leading-relaxed">

                    Segunda a Sexta: 08:00 às 19:00<br>
                    Sábados: 08:00 às 12:00

                  </p>

                </div>

              </div>


              <div class="flex flex-wrap gap-2">

                <span class="inline-flex
                             items-center
                             rounded-md
                             border border-zinc-200
                             bg-white
                             px-2.5 py-1
                             text-[10px]
                             font-medium
                             text-zinc-600">

                  Seg — Sex · 08h–19h

                </span>

                <span class="inline-flex
                             items-center
                             rounded-md
                             border border-zinc-200
                             bg-white
                             px-2.5 py-1
                             text-[10px]
                             font-medium
                             text-zinc-600">

                  Sáb · 08h–12h

                </span>

              </div>

            </div>


            <!-- PRIVACIDADE -->
            <div class="flex
                        flex-col
                        justify-between
                        gap-5
                        p-4
                        min-[425px]:p-5
                        rounded-xl
                        border border-zinc-200
                        bg-zinc-50/50">

              <div class="flex items-start gap-3">

                <div class="flex
                            items-center
                            justify-center
                            w-9 h-9
                            rounded-lg
                            border border-zinc-200
                            bg-white
                            text-[#9aaa00]
                            shrink-0">

                  <?= icon('shield', 17) ?>

                </div>


                <div class="flex flex-col gap-2">

                  <span class="text-xs
                               font-semibold
                               text-zinc-900">

                    Privacidade & Recepção

                  </span>

                  <p class="text-[11px]
                            min-[375px]:text-xs
                            text-zinc-500
                            leading-relaxed">

                    Ambiente discreto e acolhedor, pensado para preservar
                    sua privacidade desde a chegada.

                  </p>

                </div>

              </div>


              <div class="inline-flex
                          self-start
                          items-center
                          gap-1.5
                          rounded-md
                          border border-zinc-200
                          bg-white
                          px-2.5 py-1
                          text-[10px]
                          font-medium
                          text-zinc-600">

                <?= icon('clock', 12) ?>

                Chegue 5–10 min antes

              </div>

            </div>


            <!-- TRANSPORTE -->
            <div class="md:col-span-2
                        flex
                        flex-col
                        min-[425px]:flex-row
                        min-[425px]:items-center
                        justify-between
                        gap-5
                        p-4
                        min-[425px]:p-5
                        rounded-xl
                        border border-zinc-200
                        bg-zinc-50/50">

              <div class="flex items-start gap-3">

                <div class="flex
                            items-center
                            justify-center
                            w-9 h-9
                            rounded-lg
                            border border-zinc-200
                            bg-white
                            text-[#9aaa00]
                            shrink-0">

                  <?= icon('bus', 17) ?>

                </div>


                <div class="flex flex-col gap-2">

                  <span class="text-xs
                               font-semibold
                               text-zinc-900">

                    Transporte Público

                  </span>

                  <p class="text-[11px]
                            min-[375px]:text-xs
                            text-zinc-500
                            leading-relaxed
                            max-w-xl">

                    Linhas com parada na Av. Higienópolis e Rua Paranaguá
                    ficam a poucos minutos de caminhada do instituto.

                  </p>

                </div>

              </div>


              <div class="flex
                          flex-wrap
                          gap-2
                          min-[425px]:justify-end">

                <span class="inline-flex
                             items-center
                             gap-1.5
                             rounded-md
                             border border-zinc-200
                             bg-white
                             px-2.5 py-1
                             text-[10px]
                             font-medium
                             text-zinc-600">

                  <?= icon('location', 11) ?>

                  Menos de 200m

                </span>


                <span class="inline-flex
                             items-center
                             rounded-md
                             border border-zinc-200
                             bg-white
                             px-2.5 py-1
                             text-[10px]
                             font-medium
                             text-zinc-600">

                  Av. Higienópolis

                </span>


                <span class="inline-flex
                             items-center
                             rounded-md
                             border border-zinc-200
                             bg-white
                             px-2.5 py-1
                             text-[10px]
                             font-medium
                             text-zinc-600">

                  R. Paranaguá

                </span>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>


  <!-- =========================
       TOAST
  ========================== -->

  <div
    id="toast"
    class="fixed
           bottom-4 right-4
           min-[375px]:bottom-5 min-[375px]:right-5
           min-[425px]:bottom-6 min-[425px]:right-6
           z-50
           translate-y-3
           opacity-0
           pointer-events-none
           transition-all
           duration-300">

    <div class="inline-flex
                items-center
                gap-3
                max-w-[280px]
                min-[375px]:max-w-[320px]
                px-3
                min-[375px]:px-4
                py-3
                rounded-xl
                border border-zinc-200
                bg-white
                shadow-lg">

      <div class="flex
                  items-center
                  justify-center
                  w-7 h-7
                  shrink-0
                  rounded-full
                  bg-[#9aaa00]/10
                  text-[#9aaa00]">

        <?= icon('check', 14) ?>

      </div>


      <div class="flex flex-col gap-0.5">

        <span class="text-xs
                     font-semibold
                     text-zinc-900">

          Endereço copiado

        </span>

        <span
          id="toastMessage"
          class="text-[11px]
                 leading-relaxed
                 text-zinc-500">

          Copiado para a área de transferência.

        </span>

      </div>

    </div>

  </div>

</section>


<!-- =========================
     INTERATIVIDADE
========================== -->

<script>

  function switchTab(tab) {

    const btnMap = document.getElementById('tabMap');
    const btnDetails = document.getElementById('tabDetails');

    const panelMap = document.getElementById('panelMap');
    const panelDetails = document.getElementById('panelDetails');


    const activeClass = `
      inline-flex
      flex-1
      items-center
      justify-center
      gap-1.5
      whitespace-nowrap
      rounded-md
      px-2 min-[375px]:px-3
      py-1.5
      text-[10px] min-[375px]:text-xs
      font-medium
      transition-all
      bg-white
      text-zinc-900
      shadow-sm
    `;


    const inactiveClass = `
      inline-flex
      flex-1
      items-center
      justify-center
      gap-1.5
      whitespace-nowrap
      rounded-md
      px-2 min-[375px]:px-3
      py-1.5
      text-[10px] min-[375px]:text-xs
      font-medium
      transition-all
      text-zinc-500
      hover:text-zinc-900
    `;


    if (tab === 'map') {

      btnMap.className = activeClass;
      btnDetails.className = inactiveClass;

      panelMap.classList.remove('hidden');
      panelDetails.classList.add('hidden');

    } else {

      btnDetails.className = activeClass;
      btnMap.className = inactiveClass;

      panelDetails.classList.remove('hidden');
      panelMap.classList.add('hidden');

    }

  }


  function copyAddress() {

    const fullAddress =
      "IPAC - Instituto de Psicologia e Análise do Comportamento, Rua Pará, 1753 - Centro, Londrina - PR, 86020-400";


    const textArea = document.createElement('textarea');

    textArea.value = fullAddress;

    document.body.appendChild(textArea);

    textArea.select();

    document.execCommand('copy');

    document.body.removeChild(textArea);


    const copyBtnText =
      document.getElementById('copyBtnText');


    copyBtnText.innerText =
      'Endereço Copiado!';


    showToast();


    setTimeout(() => {

      copyBtnText.innerText =
        'Copiar Endereço';

    }, 2500);

  }


  function showToast() {

    const toast =
      document.getElementById('toast');


    toast.classList.remove(
      'translate-y-3',
      'opacity-0'
    );


    toast.classList.add(
      'translate-y-0',
      'opacity-100'
    );


    setTimeout(() => {

      toast.classList.remove(
        'translate-y-0',
        'opacity-100'
      );


      toast.classList.add(
        'translate-y-3',
        'opacity-0'
      );

    }, 3000);

  }

</script>