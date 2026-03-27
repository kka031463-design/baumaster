<?php
$action = $_REQUEST['action'] ?? '';
$prod   = $_REQUEST['prod'] ?? '';

$action = htmlspecialchars(stripslashes($action));
$prod   = htmlspecialchars(stripslashes($prod));

$valid_actions = ['catalog','uslugi','price','contacts','calculator'];
if (!in_array($action, $valid_actions)) {
    $content = 'about.php';
    $action  = 'home';
} elseif ($action === 'catalog') {
    $map = [
        'tegola'=>'tegola.php','ct'=>'ct.php','braas'=>'braas.php','roben'=>'roben.php',
        'jacobi'=>'jacobi.php','tondach'=>'tondach.php','saimaa'=>'saimaa.php',
        'slanec'=>'slanec.php','dranka'=>'dranka.php','dorken'=>'dorken.php',
        'tyvek'=>'tyvek.php','plfakro'=>'plfakro.php','sves'=>'sves.php',
        'sneg'=>'sneg.php','fason'=>'fason.php','rockwool'=>'rockwool.php',
        'paroc'=>'paroc.php','ekovata'=>'ekovata.php','aquasystem'=>'aquasystem.php',
        'fakro'=>'fakro.php','abc'=>'abc.php',
    ];
    $content = isset($map[$prod]) ? $map[$prod] : 'about.php';
} elseif ($action === 'uslugi')     { $content = 'uslugi.php'; }
elseif ($action === 'price')        { $content = 'price.php'; }
elseif ($action === 'contacts')     { $content = 'contacts.php'; }
elseif ($action === 'calculator')   { $content = 'calculator_embed.php'; }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>БауМастер — Кровельные материалы, Санкт-Петербург</title>
  <meta name="description" content="БауМастер — широкий выбор кровельных материалов и услуг в Санкт-Петербурге. Tegola, BRAAS, Rockwool, Fakro и другие бренды.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/style.css">
  <link rel="shortcut icon" href="/img/icon.ico">
</head>
<body>

<!-- ========== HEADER ========== -->
<header class="site-header">
  <div class="header-inner">

    <a href="/index.php" class="site-logo">
      <img src="/img/logo-header.svg" alt="БауМастер">
    </a>

    <nav class="site-nav" id="siteNav">

      <div class="nav-item">
        <a href="/index.php" class="nav-link <?= $action==='home' ? 'active' : '' ?>">Главная</a>
      </div>

      <!-- Каталог -->
      <div class="nav-item">
        <span class="nav-link <?= $action==='catalog' ? 'active' : '' ?>">
          Каталог
          <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
        </span>
        <div class="dropdown">
          <div class="dropdown-section">Кровля</div>
          <div style="padding:0 4px;font-size:11px;color:var(--text-light);padding:2px 10px 4px;font-weight:600;">Битумная черепица</div>
          <a href="index.php?action=catalog&prod=tegola"><span class="dot"></span>Tegola</a>
          <a href="index.php?action=catalog&prod=ct"><span class="dot"></span>CertainTeed</a>
          <div style="padding:2px 10px 4px;font-size:11px;color:var(--text-light);font-weight:600;margin-top:4px;">Керамическая черепица</div>
          <a href="index.php?action=catalog&prod=braas"><span class="dot"></span>BRAAS</a>
          <a href="index.php?action=catalog&prod=roben"><span class="dot"></span>Roben</a>
          <a href="index.php?action=catalog&prod=jacobi"><span class="dot"></span>Jacobi</a>
          <a href="index.php?action=catalog&prod=tondach"><span class="dot"></span>Tondach</a>
          <div style="padding:2px 10px 4px;font-size:11px;color:var(--text-light);font-weight:600;margin-top:4px;">Металлочерепица</div>
          <a href="index.php?action=catalog&prod=saimaa"><span class="dot"></span>Saimaa</a>
          <div style="padding:2px 10px 4px;font-size:11px;color:var(--text-light);font-weight:600;margin-top:4px;">Природная кровля</div>
          <a href="index.php?action=catalog&prod=slanec"><span class="dot"></span>Сланец</a>
          <a href="index.php?action=catalog&prod=dranka"><span class="dot"></span>Дранка</a>
          <hr>
          <div class="dropdown-section">Аксессуары</div>
          <a href="index.php?action=catalog&prod=dorken"><span class="dot"></span>DORKEN (плёнки)</a>
          <a href="index.php?action=catalog&prod=tyvek"><span class="dot"></span>Tyvek</a>
          <a href="index.php?action=catalog&prod=plfakro"><span class="dot"></span>Fakro (плёнки)</a>
          <a href="index.php?action=catalog&prod=sves"><span class="dot"></span>Свес</a>
          <a href="index.php?action=catalog&prod=sneg"><span class="dot"></span>Снегозадержание</a>
          <a href="index.php?action=catalog&prod=fason"><span class="dot"></span>Фасонные элементы</a>
          <hr>
          <div class="dropdown-section">Материалы и системы</div>
          <a href="index.php?action=catalog&prod=rockwool"><span class="dot"></span>Rockwool</a>
          <a href="index.php?action=catalog&prod=paroc"><span class="dot"></span>Paroc</a>
          <a href="index.php?action=catalog&prod=ekovata"><span class="dot"></span>Эковата</a>
          <a href="index.php?action=catalog&prod=aquasystem"><span class="dot"></span>Аквасистем</a>
          <a href="index.php?action=catalog&prod=fakro"><span class="dot"></span>Fakro (окна)</a>
          <a href="index.php?action=catalog&prod=abc"><span class="dot"></span>ABC-Klinkergruppe</a>
        </div>
      </div>

      <div class="nav-item">
        <a href="index.php?action=uslugi" class="nav-link <?= $action==='uslugi' ? 'active' : '' ?>">Услуги</a>
      </div>

      <div class="nav-item">
        <a href="index.php?action=price" class="nav-link <?= $action==='price' ? 'active' : '' ?>">Прайс</a>
      </div>

      <div class="nav-item">
        <a href="index.php?action=contacts" class="nav-link <?= $action==='contacts' ? 'active' : '' ?>">Контакты</a>
      </div>

      <div class="nav-item">
        <a href="index.php?action=calculator" class="nav-link nav-calc <?= $action==='calculator' ? 'active' : '' ?>">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="12" y2="18"/></svg>
          Калькулятор PIPE
        </a>
      </div>

    </nav>

    <button class="burger" id="burger" aria-label="Меню" onclick="document.getElementById('siteNav').classList.toggle('open')">
      <span></span><span></span><span></span>
    </button>

  </div>
</header>

<!-- ========== CONTENT ========== -->
<main class="<?= $action === 'calculator' ? 'calc-fullpage' : 'page-wrap' ?>">
  <?php include_once($content); ?>
</main>

<!-- ========== FOOTER ========== -->
<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-brand">
      <div class="name">ООО «БауМастер»</div>
      <div>г. Санкт-Петербург, Выборгское шоссе, 212</div>
      <div>Выставка «Коттеджи в Озерках», павильон 9с</div>
    </div>
    <div class="footer-info">
      <div><a href="tel:+78123132003">+7 (812) 313-20-03</a></div>
      <div><a href="mailto:baumasterspb@mail.ru">baumasterspb@mail.ru</a></div>
      <div style="margin-top:8px;font-size:12px;opacity:.5;">© <?= date('Y') ?> БауМастер</div>
    </div>
  </div>
</footer>

</body>
</html>
