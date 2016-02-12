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

<!-- Page Title and intro -->
    <h1 class="pattern-title">Buttons</h1>
    <p class="pattern-info">We use a few different styles of calls to action depending on the hiercahy of messaging. Alll of these styles can be found below, along with a guide on when to use each one in the notes.</p>
<!-- End title -->

<!-- Pattern Start - Primary Call to action -->

    <div class="pattern">

        <div class="pattern__header">
            <h3>Primary call to action button</h3>
        </div>

<!-- Pattern styles to demo here -->
        <div class="pattern__style">
            <a class="primary-call-to-action-button" href="#">Donate</a>
        </div>

<!-- HTML Pattern code here, don't forget to escape them (use div class="pattern__code or it will not add the tabs) -->
        <div class="pattern__code">
        <code class="prettyprint pattern__code--html">
          &lt;a class="primary-call-to-action-button" href="#"&gt;Donate&lt;/a&gt;
        </code>

<!-- CSS Pattern code here, don't forget to escape the code-->
        <code class="prettyprint pattern__code--css">
        .primary-call-to-action-button {<br />
        padding: 8px 10px;<br />
        background-color: $pink;<br />
        border-radius: 3px;<br />
        text-align: center;<br />
        color: $white;<br />
        font-size: 16px;<br />
        font-family: "MuseoSansRounded-700","MuseoSans-700","Arial","Helvetica",sans-serif;<br />
        font-weight: normal;<br />
        text-decoration: none;<br />
        min-width: 200px;<br />
        max-width: 360px;<br />
        display: inline-block;<br />
        .primary-call-to-action-button&amp;:hover{<br />
          background-color: $hover-pink;<br />
        }<br />
        }
        </code>

<!-- Sass Pattern code here, don't forget to escape the code-->
        <code class="prettyprint pattern__code--sass">
          .primary-call-to-action-button {<br />
          padding: 8px 10px;<br />
          background-color: $pink;<br />
          border-radius: 3px;<br />
          text-align: center;<br />
          color: $white;<br />
          font-size: 16px;<br />
          font-family: "MuseoSansRounded-700","MuseoSans-700","Arial","Helvetica",sans-serif;<br />
          font-weight: normal;<br />
          text-decoration: none;<br />
          min-width: 200px;<br />
          max-width: 360px;<br />
          display: inline-block;<br />
          &amp;:hover{<br />
            background-color: $hover-pink;<br />
          }<br />
          }
        </code>
      </div>

      <div class="pattern__notes">
          <p>This pattern should be used when it is necessary to lorem ipsum lorem ipsum.</p>
        <!-- Pattern notes here -->
      </div>
    </div>

<!-- Pattern END -->

<!-- Pattern Start - Secondary Call to action -->
    <div class="pattern">

        <div class="pattern__header">
            <h3>Secondary call to action</h3>
        </div>

<!-- Pattern styles here -->
        <div class="pattern__style">
            <a class="secondary-call-to-action" href="#">Find out about spotting cancer early</a>
        </div>

<!-- HTML Pattern code here, don't forget to escape them-->
      <div class="pattern__code">
        <code class="prettyprint pattern__code--html">
            &lt;a class="secondary-call-to-action" href="#"&gt;Find out about spotting cancer early&lt;/a&gt;
        </code>

<!-- CSS Pattern code here, don't forget to escape the code-->
        <code class="prettyprint pattern__code--css">
            .secondary-call-to-action {<br />
            background: transparent url(http://www.cancerresearchuk.org/sites/all/themes/custom/cruk/images/pink-arrow.png) no-repeat 0 2px;<br />
            float: left;<br />
            background-position: 0 5px;<br />
            color: $pink;<br />
            text-decoration: none;<br />
            padding-left: 15px;<br />
            font-weight: bold;<br />
            }
        </code>

      </div>

<!-- Pattern notes here -->
      <div class="pattern__notes">
          <p>This pattern should be used when it is necessary to lorem ipsum lorem ipsum.</p>
      </div>
  </div>

<!-- ### Pattern END ### -->


<!-- Pattern Start - Large Secondary Call to action -->
    <div class="pattern">

        <div class="pattern__header">
            <h3>Large secondary call to action</h3>
        </div>

<!-- Pattern styles here -->
        <div class="pattern__style">
            <a class="large-secondary-call-to-action" href="#">Find out about spotting cancer early</a>
        </div>

<!-- HTML Pattern code here, don't forget to escape them-->
      <div class="pattern__code">
        <code class="prettyprint pattern__code--html">
            &lt;a class="large-secondary-call-to-action" href="#"&gt;Find out about spotting cancer early&lt;/a&gt;
        </code>

<!-- CSS Pattern code here, don't forget to escape the code-->
        <code class="prettyprint pattern__code--css">
            .secondary-call-to-action {<br />
            background: transparent url(http://www.cancerresearchuk.org/sites/all/themes/custom/cruk/images/pink-arrow.png) no-repeat 0 2px;<br />
            float: left;<br />
            background-position: 0 5px;<br />
            color: $pink;<br />
            text-decoration: none;<br />
            padding-left: 15px;<br />
            font-weight: bold;<br />
            }
        </code>

      </div>

<!-- Pattern notes here -->
      <div class="pattern__notes">
          <p>This pattern should be used when it is necessary to lorem ipsum lorem ipsum.</p>
      </div>
  </div>

<!-- ### Pattern END ### -->

<?php include $footer_path ?>
