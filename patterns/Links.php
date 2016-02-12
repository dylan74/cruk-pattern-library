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
    <h1 class="pattern-title">Links</h1>
    <p class="pattern-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet mauris in scelerisque euismod. Nunc in euismod neque. Donec in ante et enim porta commodo. Donec vel vestibulum massa. In hac habitasse platea dictumst. Etiam egestas magna tellus, eget vulputate sapien tempus non.</p>
<!-- End title -->

<!-- Pattern Start - Header links -->

    <div class="pattern">

        <div class="pattern__header">
            <h3>Header Links</h3>
        </div>

<!-- Pattern styles to demo here -->
        <div class="pattern__style">
            <h2><a class="header-link-rollover" href="#">Linked H2 = Museo Sans Rounded 700 - 1.5em = 21px</a></h2>
        </div>

<!-- HTML Pattern code here, don't forget to escape them (use div class="pattern__code or it will not add the tabs) -->
        <div class="pattern__code">
        <code class="prettyprint pattern__code--html">
          &lt;h2&gt;&lt;a class="header-rollover" href="#"&gt;Linked H2 = Museo Sans Rounded 700 - 1.5em = 21px&lt;/a&gt;&lt;/h2&gt;
        </code>

<!-- CSS Pattern code here, don't forget to escape the code-->
        <code class="prettyprint pattern__code--css">
          .header-rollover {<br />
              text-decoration: none;<br />
          }<br />
          .header-rollover:hover {<br />
              text-decoration: underline;<br />
              color: #ec008c;<br />
          }
        </code>

<!-- Sass Pattern code here, don't forget to escape the code-->
        <code class="prettyprint pattern__code--sass">
          .header-rollover{<br />
            text-decoration: none;<br />
            &amp;:hover{<br />
              text-decoration: underline;<br />
              color: $pink;<br />
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

<!-- Pattern Start - Title links -->

<div class="pattern">

    <div class="pattern__header">
        <h3>Title Links</h3>
    </div>

<!-- Pattern styles to demo here -->
    <div class="pattern__style">
        <a class="title-link-rollover" href="#">Blog titles, search result titles, bold links = Arial Bold 14px</a>
    </div>

<!-- HTML Pattern code here, don't forget to escape them (use div class="pattern__code or it will not add the tabs) -->
    <div class="pattern__code">
    <code class="prettyprint pattern__code--html">
    &lt;a class="title-link-rollover" href="#"&gt;Blog titles, search result titles, bold links = Arial Bold 14px&lt;/a&gt;
    </code>

<!-- CSS Pattern code here, don't forget to escape the code-->
    <code class="prettyprint pattern__code--css">
      .title-link-rollover {<br />
          text-decoration: none;<br />
          font-weight: bold;<br />
      }<br />
      .title-link-rollover:hover {<br />
          text-decoration: underline;<br />
          color: #ec008c;<br />
      }
    </code>

<!-- Sass Pattern code here, don't forget to escape the code-->
    <code class="prettyprint pattern__code--sass">
      .title-link-rollover{<br />
        text-decoration: none;<br />
        font-weight: bold;<br />
        &amp;:hover{<br />
          text-decoration: underline;<br />
          color: $pink;<br />
        }<br />
      }<br />

    </code>
  </div>

  <div class="pattern__notes">
      <p>This pattern should be used when it is necessary to lorem ipsum lorem ipsum.</p>
    <!-- Pattern notes here -->
  </div>
</div>

<!-- ### Pattern END ### -->


<!-- Pattern Start - Inline links -->

    <div class="pattern">

        <div class="pattern__header">
            <h3>In-line link</h3>
        </div>

<!-- Pattern styles to demo here -->
        <div class="pattern__style">
            <p>Example of <a class="inline-link" href="#">in-line text link</a> Arial Regular underlined 14px </p>
        </div>

<!-- HTML Pattern code here, don't forget to escape them (use div class="pattern__code or it will not add the tabs) -->
        <div class="pattern__code">
        <code class="prettyprint pattern__code--html">
          &lt;p&gt;Example of &lt;a class="inline-link" href="#"&gt;in-line text link &lt;/a&gt;Arial Regular underlined 14px &lt;/p&gt;
        </code>

<!-- CSS Pattern code here, don't forget to escape the code-->
        <code class="prettyprint pattern__code--css">
          .inline-link:hover {<br />
              text-decoration: underline;<br />
              color: #ec008c;<br />
          }
        </code>

<!-- Sass Pattern code here, don't forget to escape the code-->
        <code class="prettyprint pattern__code--sass">
          .inline-link{<br />
            &amp;:hover{<br />
              text-decoration: underline;<br />
              color: $pink;<br />
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

<!-- Pattern Start - External link -->

    <div class="pattern">

        <div class="pattern__header">
            <h3>External Link</h3>
        </div>

<!-- Pattern styles to demo here -->
        <div class="pattern__style">
            <p><a class="external-link" href="#">External link icon</a></p>
        </div>

<!-- HTML Pattern code here, don't forget to escape them (use div class="pattern__code or it will not add the tabs) -->
        <div class="pattern__code">
        <code class="prettyprint pattern__code--html">
          &lt;p&gt;&lt;a class="external-link" href="#"&gt;External link icon&lt;/a&gt;&lt;/p&gt;
        </code>

<!-- CSS Pattern code here, don't forget to escape the code-->
        <code class="prettyprint pattern__code--css">
          .external-link:hover {<br />
              color: #ec008c;<br />
          }<br />
          .external-link:after {<br />
              content: url(http://www.cancerresearchuk.org/sites/all/themes/custom/cruk/images/cruk-icons/external-link-icons/external-link-text.png);<br />
              padding-left: 2px;<br />
          }<br />

        </code>

<!-- Sass Pattern code here, don't forget to escape the code-->
        <code class="prettyprint pattern__code--sass">
          .external-link{<br />
            &amp;:after {<br />
              content: url(http://www.cancerresearchuk.org/sites/all/themes/custom/cruk/images/cruk-icons/external-link-icons/external-link-text.png);<br />
                padding-left: 2px;<br />
            }<br />
            &amp;:hover{<br />
              color: $pink;<br />
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



<?php include $footer_path ?>
