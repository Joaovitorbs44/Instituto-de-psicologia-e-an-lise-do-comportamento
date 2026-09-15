<?php

$thinkers = [
  [
    'photos' => [['src' => '/assets/images/bf-skinner.jpg', 'alt' => 'B. F. Skinner']],
    'name' => 'B. F. Skinner',
    'role' => 'Psicólogo e propositor do Behaviorismo Radical',
    'quote' => 'Não escolha a menor dor. Escolha a vida que vale a pena ser vivida.'
  ],
  [
    'photos' => [['src' => '/assets/images/steven-hayes.jpeg', 'alt' => 'Steven C. Hayes']],
    'name' => 'Steven C. Hayes',
    'role' => 'Psicólogo e criador da ACT',
    'quote' => 'Sofrer é uma parte natural de ser humano, mas a dor só vira sofrimento quando tentamos fugir dela.'
  ],
  [
    'photos' => [
      ['src' => '/assets/images/robert-kohlenberg.jpg', 'alt' => 'Robert Kohlenberg'],
      ['src' => '/assets/images/mavis-tsai.jpg', 'alt' => 'Mavis Tsai'],
    ],
    'name' => 'R. Kohlenberg & M. Tsai',
    'role' => 'Criadores da Psicoterapia Analítico-Funcional (FAP)',
    'quote' => 'A intimidade e a transformação real acontecem no momento presente da relação terapêutica.'
  ],
];

?>

<section id="conteudo" class="reflections" aria-labelledby="reflections-title">
  <div class="reflections-inner">
    <header class="reflections-heading">
      <div>
        <span class="reflections-eyebrow">Pensadores da Psicologia</span>
        <h2 id="reflections-title">Reflexões que<br><em>atravessam gerações.</em></h2>
      </div>
      <p>Frases de grandes pensadores da psicologia que nos lembram da importância do autoconhecimento, das emoções e do cuidado com a mente.</p>
    </header>

    <div class="reflections-grid">
      <?php foreach ($thinkers as $index => $thinker) { ?>
        <figure class="reflection">
          <div class="reflection-top" aria-hidden="true">
            <span class="reflection-mark">“</span>
            <span class="reflection-number"><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
          </div>
          <blockquote class="reflection-quote">
            <p><?= htmlspecialchars($thinker['quote'], ENT_QUOTES, 'UTF-8') ?></p>
          </blockquote>
          <figcaption class="reflection-author">
            <div class="reflection-photos">
              <?php foreach ($thinker['photos'] as $photo) { ?>
                <img
                  src="<?= htmlspecialchars($photo['src'], ENT_QUOTES, 'UTF-8') ?>"
                  alt="<?= htmlspecialchars($photo['alt'], ENT_QUOTES, 'UTF-8') ?>"
                  width="56"
                  height="56"
                  loading="lazy"
                  decoding="async"
                />
              <?php } ?>
            </div>
            <div class="reflection-info">
              <p class="reflection-name"><?= htmlspecialchars($thinker['name'], ENT_QUOTES, 'UTF-8') ?></p>
              <p class="reflection-role"><?= htmlspecialchars($thinker['role'], ENT_QUOTES, 'UTF-8') ?></p>
            </div>
          </figcaption>
        </figure>
      <?php } ?>
    </div>
  </div>
</section>