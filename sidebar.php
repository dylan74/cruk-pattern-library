
  <div id="nav" class="sg-sidebar sidebar" role="navigation">

    <ul class="sidebar__items">
      <li><a href="index.php">Getting Started</a></li>
      <!-- <li>
        <a href="#sg-about">Getting Started</a>
      </li>
      <li>
        <a href="#sg-colors">Colors</a>
      </li>
      <li>
        <a href="#sg-fontStacks">Fonts</a>
      </li>
    </ul> -->

    <?php
     $path = $_SERVER['DOCUMENT_ROOT'];
     // Local quickfix
     $path = $path. "/style";
     $patterns_path = $path."/patterns";
    listFilesInFolder($patterns_path); ?>
  </div><!--/.sg-sidebar-->

  <!-- Opens container Divs -->

  <div id="main" class="sg-main" role="main">
    <div class="sg-container">
      <div class="sg-info">
