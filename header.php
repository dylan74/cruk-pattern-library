<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $functions_path = $path."/style/functions.php";
   include_once($functions_path);
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
<base href="http://localhost:8888/style/" />
  <title>CRUK Style Guide</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#000000">

  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
  <!-- Style Guide Boilerplate Styles -->
  <link rel="stylesheet" href="css/sg-style.css">
  <!--[if lt IE 9]><link rel="stylesheet" href="css/sg-style-old-ie.css"><![endif]-->

  <!-- https://github.com/sindresorhus/github-markdown-css -->
  <link rel="stylesheet" href="css/github-markdown.css">

  <!-- Replace below stylesheet with your own stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  <!-- prism Syntax Highlighting Styles -->
  <link rel="stylesheet" href="vendor/prism/prism.css">

  <!-- Sass Compiled to master CSS file -->
  <link rel="stylesheet" href="css/styles.css">

  <!-- Bootstrap scaffold only -->
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

  <a href="#main" class="sg-visually-hidden sg-visually-hidden-focusable">Skip to main content</a>

  <div id="top" class="header" role="banner">
    <div class="header__container">

        <div class="header__logo">
            <img src="images/logo-with-strap.png" alt="Cancer Research UK Logo">
        </div>

                  <!-- Download Links fo header -->
        <div class="header__buttons">
            <div class="header__download-links">
                  <img src="images/header-icon.png" alt="download icon">
                  <p>Desktop PSD</p>
            </div>
            <div class="header__download-links">
                  <img src="images/header-icon.png" alt="download icon">
                  <p>Desktop PSD</p>
            </div>
            <div class="header__download-links">
                  <img src="images/header-icon.png" alt="download icon">
                  <p >Desktop PSD</p>
            </div>
            <div class="header__download-links">
                  <img src="images/header-icon.png" alt="download icon">
                  <p>Desktop PSD</p>
            </div>
        </div>
      <button type="button" class="sg-nav-toggle">Menu</button>
    </div>
  </div><!--/.sg-header-->
<div class="sg-wrapper sg-clearfix">
  <!-- Pattern area resize buttons -->
      <div class="resize-pattern">
          <div class="resize-pattern__button resize-320">
              <p>320px</p>
          </div>
          <div class="resize-pattern__button resize-480">
              <p>480px</p>
          </div>
          <div class="resize-pattern__button resize-640">
              <p>640px</p>
          </div>
          <div class="resize-pattern__button resize-800">
              <p>800px</p>
          </div>
          <div class="resize-pattern__button resize-1024">
              <p>1024px</p>
          </div>
          <div class="resize-pattern__button resize-full">
              <p>FULL</p>
          </div>
      </div>
