<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   // Local quick fix
   $path = $path."/style";
   $header_path = $path."/header.php";
   $sidebar_path = $path."/sidebar.php";
   $footer_path = $path."/footer.php";
   include_once($header_path);
   include_once($sidebar_path);
?>
  <div class="CRUK-wrapper"> <!-- Match CRUK width for full width elements -->
<!-- Page Title and intro -->
    <h1 class="pattern-title">Promos</h1>
    <p class="pattern-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet mauris in scelerisque euismod. Nunc in euismod neque. Donec in ante et enim porta commodo. Donec vel vestibulum massa. In hac habitasse platea dictumst. Etiam egestas magna tellus, eget vulputate sapien tempus non.</p>
<!-- End title -->

<!-- Pattern Start h1 -->

    <div class="pattern">

        <div class="pattern__header">
            <h3>Full Width Promo</h3>
        </div>

<!-- Pattern styles to demo here -->
        <div class="pattern__style">
            <div class="hero-section-full col-md-12">
                <div class="hero-section-full__image-wrapper">
                  <img class="hero-section-full__image" src="http://www.cancerresearchuk.org/sites/default/files/alcohol.jpg">
                </div>
                <div class="hero-section-full__caption">
                  <div class="hero-section-full__caption__header">
                    <h2>Heading 21px / 1.5ems</h2>
                  </div>
                  <div class="hero-section-full__caption__text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
            </div>
        </div>

<!-- HTML Pattern code here, don't forget to escape them (use div class="pattern__code or it will not add the tabs) -->
        <div class="pattern__code">
        <code class="prettyprint pattern__code--html">
          &lt;h1&gt;H1 = Museo Sans Rounded 700 - 2em = 28px&lt;/h1&gt;
        </code>

<!-- CSS Pattern code here, don't forget to escape the code-->
        <code class="prettyprint pattern__code--css">
          h1{<br />
            font-family: "MuseoSansRounded-700", "MuseoSans-700", "Arial", "Helvetica", sans-serif;<br />
            font-size: 28px;<br />
            color: #333333;<br />
            line-height: 1.5;<br />
          }
        </code>

<!-- Sass Pattern code here, don't forget to escape the code-->
        <code class="prettyprint pattern__code--sass">
            h1{<br />
              font-family: $main-header-font;<br />
              font-size: 28px;<br />
              color: #333333;<br />
              line-height: 1.5;<br />
            }
        </code>
      </div>

      <div class="pattern__notes">
          <p>This pattern should be used when it is necessary to lorem ipsum lorem ipsum.</p>
        <!-- Pattern notes here -->
      </div>
    </div>

<!-- Pattern END -->

<!-- Pattern Start - h2 -->

<div class="pattern">

    <!-- <div class="pattern__header">
        <h3>Primary call to action button</h3>
    </div> -->

<!-- Pattern styles to demo here -->
    <div class="pattern__style">
      <div class="hero-section-wrapper">
        <div class="hero-section-mid col-md-8 col-sm-8 col-xs-12">
            <div class="hero-section-mid__image-wrapper ">
              <img class="hero-section-mid__image " src="http://www.cancerresearchuk.org/sites/default/files/alcohol.jpg">
            </div>
            <div class="hero-section-mid__caption">
              <div class="hero-section-mid__caption__text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="hero-section-mid-sidebar">
            <h2>Heading 21px / 1.5ems</h2>
            <p>Lorem ipsum aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.14 px arial regular</p>
            <a class="primary-call-to-action-button primary-call-to-action-button--hero-promo " href="#">Donate</a>
          </div>
        </div>
      </div>
    </div>

<!-- HTML Pattern code here, don't forget to escape them (use div class="pattern__code or it will not add the tabs) -->
    <div class="pattern__code">
    <code class="prettyprint pattern__code--html">
      &lt;h2&gt;H2 = Museo Sans Rounded 700 - 1.5em = 28px&lt;/h2&gt;
    </code>

<!-- CSS Pattern code here, don't forget to escape the code-->
    <code class="prettyprint pattern__code--css">
      h2{<br />
        font-family: "MuseoSansRounded-700", "MuseoSans-700", "Arial", "Helvetica", sans-serif;<br />
        font-size: 21px;<br />
        color: #333333;<br />
        line-height: 1.5;<br />
      }
    </code>

<!-- Sass Pattern code here, don't forget to escape the code-->
    <code class="prettyprint pattern__code--sass">
        h2{<br />
          font-family: $main-header-font;<br />
          font-size: 21px;<br />
          color: #333333;<br />
          line-height: 1.5;<br />
        }
    </code>
  </div>

  <div class="pattern__notes">
      <p>This pattern should be used when it is necessary to lorem ipsum lorem ipsum.</p>
    <!-- Pattern notes here -->
  </div>
</div>

<!-- ### Pattern END ### -->

<!-- Pattern Start - full wrapper-width promo box -->

<div class="pattern">

    <div class="pattern__header">
        <h3>Full width promo box</h3>
    </div>

<!-- Pattern styles to demo here -->
    <div class="pattern__style">
      <div class="hero-section-wrapper">
        <div class="hero-section-mid col-md-8 col-sm-8 col-xs-12">
            <div class="hero-section-mid__image-wrapper ">
              <img class="hero-section-mid__image " src="http://www.cancerresearchuk.org/sites/default/files/alcohol.jpg">
            </div>
            <div class="hero-section-mid__caption">
              <div class="hero-section-mid__caption__text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="hero-section-mid-sidebar">
            <h2>Heading 21px / 1.5ems</h2>
            <p>Lorem ipsum aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.14 px arial regular</p>
            <a class="primary-call-to-action-button primary-call-to-action-button--hero-promo " href="#">Donate</a>
          </div>
        </div>
      </div>
    </div>

<!-- HTML Pattern code here, don't forget to escape them (use div class="pattern__code or it will not add the tabs) -->
    <div class="pattern__code">
    <code class="prettyprint pattern__code--html">
      &lt;h2&gt;H2 = Museo Sans Rounded 700 - 1.5em = 28px&lt;/h2&gt;
    </code>

<!-- CSS Pattern code here, don't forget to escape the code-->
    <code class="prettyprint pattern__code--css">
      h2{<br />
        font-family: "MuseoSansRounded-700", "MuseoSans-700", "Arial", "Helvetica", sans-serif;<br />
        font-size: 21px;<br />
        color: #333333;<br />
        line-height: 1.5;<br />
      }
    </code>

<!-- Sass Pattern code here, don't forget to escape the code-->
    <code class="prettyprint pattern__code--sass">
        h2{<br />
          font-family: $main-header-font;<br />
          font-size: 21px;<br />
          color: #333333;<br />
          line-height: 1.5;<br />
        }
    </code>
  </div>

  <div class="pattern__notes">
      <p>This pattern should be used when it is necessary to lorem ipsum lorem ipsum.</p>
    <!-- Pattern notes here -->
  </div>
</div>

<!-- ### Pattern END ### -->



  </div> <!-- CRUK Wrapper -->


<?php include $footer_path ?>
