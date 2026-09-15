<?php

  function render_section(string $section, array $data = []): void {
    $filePath = __DIR__ . '/../pages/' . $section . '_section.php';

    if (file_exists($filePath)) {
      extract($data);
      include $filePath;
    } else {
      echo "<!-- Arquivo {$filePath} não encontrado. -->";
    }
  }

?>