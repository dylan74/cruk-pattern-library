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
    <h1 class="pattern-title">Promos tiles</h1>
    <p class="pattern-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet mauris in scelerisque euismod. Nunc in euismod neque. Donec in ante et enim porta commodo. Donec vel vestibulum massa. In hac habitasse platea dictumst. Etiam egestas magna tellus, eget vulputate sapien tempus non.</p>
<!-- End title -->

<!-- Pattern Start promo tiles 3 -->

    <div class="pattern">

        <div class="pattern__header">
            <h3>Promo tiles - 2</h3>
        </div>

<!-- Pattern styles to demo here -->
        <div class="pattern__style">
          <div class="panel-row-1">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="panel-3">
                <div class="panel-3__header">
                  <h2><a class="header-link-rollover" href="#">Heading 21px / 1.5ems</a></h2>
                </div>
                <div>
                  <img class="panel-2__image" src="http://www.cancerresearchuk.org/sites/default/files/styles/cruk_landing_page_promo_thumb_resp_breakpoint_one/public/walk-620x349.jpg?itok=GjJ0cVOQ">
                </div>
                <div>
                  <p class="panel-3__content">Personalise a donation page in a few simple steps and ask family and friends to join you in celebrating the life of a loved one.</p>
                </div>
                <a class="secondary-call-to-action" href="#">Find out about spotting cancer early</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="panel-3">
                <div class="panel-3__header">
                  <h2><a class="header-link-rollover" href="#">Heading 21px / 1.5ems</a></h2>
                </div>
                <div>
                  <img class="panel-2__image" src="http://www.cancerresearchuk.org/sites/default/files/styles/cruk_landing_page_promo_thumb_resp_breakpoint_one/public/walk-620x349.jpg?itok=GjJ0cVOQ">
                </div>
                <div>
                  <p class="panel-3__content">Personalise a donation page in a few simple steps and ask family and friends to join you in celebrating the life of a loved one.</p>
                </div>
                <a class="secondary-call-to-action" href="#">Find out about spotting cancer early</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="panel-3">
                <div class="panel-3__header">
                  <h2><a class="header-link-rollover" href="#">Heading 21px / 1.5ems</a></h2>
                </div>
                <div>
                  <img class="panel-2__image" src="http://www.cancerresearchuk.org/sites/default/files/styles/cruk_landing_page_promo_thumb_resp_breakpoint_one/public/walk-620x349.jpg?itok=GjJ0cVOQ">
                </div>
                <div>
                  <p class="panel-3__content">Personalise a donation page in a few simple steps and ask family and friends to join you in celebrating the life of a loved one.</p>
                </div>
                <a class="secondary-call-to-action" href="#">Find out about spotting cancer early</a>
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

<!-- Pattern Start promo tiles 2 -->

    <div class="pattern">

        <div class="pattern__header">
            <h3>Promo tiles - 3</h3>
        </div>

<!-- Pattern styles to demo here -->
        <div class="pattern__style">
          <div class="panel-row-1">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="panel-2">
                <div class="panel-2__header">
                  <h2><a class="header-link-rollover" href="#">Heading 21px / 1.5ems</a></h2>
                </div>
                <div>
                  <img class="panel-2__image" src="http://www.cancerresearchuk.org/sites/default/files/styles/cruk_landing_page_promo_thumb_resp_breakpoint_one/public/walk-620x349.jpg?itok=GjJ0cVOQ">
                </div>
                <div>
                  <p class="panel-2__content">Personalise a donation page in a few simple steps and ask family and friends to join you in celebrating the life of a loved one.</p>
                </div>
                <a class="secondary-call-to-action" href="#">Find out about spotting cancer early</a>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="panel-2">
                <div class="panel-2__header">
                  <h2><a class="header-link-rollover" href="#">Heading 21px / 1.5ems</a></h2>
                </div>
                <div>
                  <img class="panel-2__image" src="http://www.cancerresearchuk.org/sites/default/files/styles/cruk_landing_page_promo_thumb_resp_breakpoint_one/public/walk-620x349.jpg?itok=GjJ0cVOQ">
                </div>
                <div>
                  <p class="panel-2__content">Personalise a donation page in a few simple steps and ask family and friends to join you in celebrating the life of a loved one.</p>
                </div>
                <a class="secondary-call-to-action" href="#">Find out about spotting cancer early</a>
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


<!-- Pattern Start Promo tiles - 50% with content -->

    <div class="pattern">

        <div class="pattern__header">
            <h3>Promo tiles - 50% image with 50% content</h3>
        </div>

<!-- Pattern styles to demo here -->
        <div class="pattern__style">

          <div class="panel-row-1-no-gutter">

            <div class="panel-1-content">

              <div class="panel-1-content__header">
                <h2><a class="header-link-rollover" href="#">Heading 21px / 1.5ems</a></h2>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">

                  <div>
                      <img class="panel-1-content__image" src="http://www.cancerresearchuk.org/sites/default/files/styles/cruk_landing_page_promo_thumb_resp_breakpoint_one/public/walk-620x349.jpg?itok=GjJ0cVOQ">
                  </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div>
                    <p class="panel-1-content__content">Personalise a donation page in a few simple steps and ask family and friends to join you in celebrating the life of a loved one.</p>
                </div>
                    <a class="secondary-call-to-action" href="#">Find out about spotting cancer early</a>
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

<!-- Pattern Start Promo tiles - 50% with content -->

    <div class="pattern">

        <div class="pattern__header">
            <h3>Pull out full width promo box</h3>
        </div>

<!-- Pattern styles to demo here -->
        <div class="pattern__style">
          <div class="col-md-12">
            <div class="pullout-promo-box">
              <h2 class="white">Heading 21px / 1.5ems</h2>
              <p class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <p class="white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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

  </div> <!-- CRUK Wrapper -->


<?php include $footer_path ?>
