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
    <h1 class="pattern-title">Forms</h1>
    <p class="pattern-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet mauris in scelerisque euismod. Nunc in euismod neque. Donec in ante et enim porta commodo. Donec vel vestibulum massa. In hac habitasse platea dictumst. Etiam egestas magna tellus, eget vulputate sapien tempus non.</p>
<!-- End title -->

<!-- Pattern Start h1 -->

    <div class="pattern">

        <!-- <div class="pattern__header">
            <h3>Primary call to action button</h3>
        </div> -->

<!-- Pattern styles to demo here -->
      <div class="pattern__style">
          <form class="fapi-form fapi-form--narrow" action "" method="post" id="" accept-charset="UTF-8" novalidate="novalidate">
            <div>
              <fieldset class="webform-component-fieldset" id="edit-personal-information">
                <div class="fieldset-wrapper">
                  <h2>Your Details</h2>
                  <p>Intro copy to the form here lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                  <div class="form-item form-type-select form-required">
                    <label class="required strong" for="edit-title-0">Title</label>
                    <select class="webform-component webform-component-select" id="edit-title-0" name="title-0">
                      <option value selected="selected">- Select -</option>
                      <option value="Mr">Mr</option>
                      <option value="Mrs">Mrs</option>
                      <option value="Ms">Ms</option>
                      <option value="Miss">Miss</option>
                      <option value="Dr">Dr</option>
                    </select>
                  </div>

                  <div class="form-item form-type-textfield form-required">
                    <label class=" strong required" for="edit-forename-0">First name</label>
                   <input placeholder="First name" type="text" id="edit-forename-0" name="forename_0" value="" size="30" maxlength="128" required=""  class="error">
                 </div>

                  <div class="form-item form-type-textfield form-required">
                    <label class="required strong" for="edit-surname-0">Last name</label>
                   <input placeholder="Last name" type="text" id="edit-surname-0" name="surname_0" value="" size="30" maxlength="128" required="" class="error">
                  </div>
                </div>

<!-- Radio Buttons -->

            <div class="form-item form-type-radios form-required">
              <label class="required strong" for="edit-gender-0">Gender</label>
             <div id="edit-gender-0" class="form-radios">
               <div class="form-type-radio">
                 <input type="radio" id="edit-gender-0-female" name="gender_0" value="Female">  <label for="edit-gender-0-female">Female</label>
              </div>


                <div class="form-type-radio">
                 <input type="radio" id="edit-gender-0-male" name="gender_0" value="Male">  <label for="edit-gender-0-male">Male</label>
                </div>

                <div class="form-type-radio form-type-radio--other-button">
                 <input type="radio" id="edit-ohter-radio-button" name="gender_0" value="Male">  <label for="">Other Radio Button</label>
                 <input placeholder="Other" type="text" id="edit-forename-0" name="forename_0" value="" size="30" maxlength="128" required=""  class="error">
                </div>
              </div>
            </div>

<!-- Address -->

          <div class="form-item form-type-textfield">
            <label class="strong" for="edit-addressline1-0">Home address</label>
            <span class="field-prefix">Start typing your address or postcode</span> <input placeholder="Home address" class="edit-devalidate cruk-addressline1-0 valid" type="text" id="edit-addressline1-0" name="addressLine1_0" value="" size="30" maxlength="210" autocomplete="off">
          </div>
<!-- Date of Birth -->
          <div class="form-item form-type-date-fields form-required">
            <label class="required strong" for="edit-dateofbirth-0">Date of birth</label>  <span class="field-prefix">Start typing your address or postcode</span>
             <div id="edit-dateofbirth-0" class="datepicker container-inline">
               <div class="form-item form-type-textfield form-required">
               <input placeholder="dd" class="day valid" type="text" id="edit-dateofbirth-0-day" name="dateOfBirth_0[day]" value="" size="30" maxlength="2" required="">
              </div>
            <div class="form-item form-type-textfield form-required">
             <input placeholder="mm" class="month" type="text" id="edit-dateofbirth-0-month" name="dateOfBirth_0[month]" value="" size="30" maxlength="2" required="">
            </div>
              <div class="form-item form-type-textfield form-required">
               <input placeholder="yyyy" class="year" type="text" id="edit-dateofbirth-0-year" name="dateOfBirth_0[year]" value="" size="30" maxlength="4" required="">
              </div>
            </div>
          </div>

<!-- Added comments box -->
<div class="form-item form-type-textfield form-required">
  <label class="required strong" for="edit-dateofbirth-0">Date of birth</label>  <span class="field-prefix">Start typing your address or postcode</span>
      <textarea class="form-item__textarea" placeholder="Please enter your comments here"></textarea>
  </div>


<!-- Sign up buttons -->

  <div class="fieldset-wrapper clearfix"><h2 class="top-margin">Join us</h2><p>Become part of the movement to bring forward the day when all cancers are cured. Hear about our latest breakthroughs, campaigns and how you can help support our life saving work.</p>
    <div class="form-item form-type-checkbox">
     <input type="checkbox" id="edit-email-opt-in" name="email_opt_in" value="EMO">  <label for="edit-email-opt-in">Yes please, I'd like to hear from you by email</label>

    </div>
    <div class="form-item form-type-checkbox">
     <input type="checkbox" id="edit-sms-opt-in" name="sms_opt_in" value="SMS">  <label for="edit-sms-opt-in">Yes please, I'd like to hear from you by text message</label>

    </div>
    <div class="form-item form-type-checkbox">
     <input type="checkbox" id="edit-post-and-phone-opt-out" name="post_and_phone_opt_out" value="ECO">  <label for="edit-post-and-phone-opt-out">Sorry, I don't want to hear from you by post or phone</label>
    </div>
  </div>
  <p>By pressing 'Continue to payment' I confirm that the above details are correct and that I have read and agreed to&nbsp;the&nbsp;<a href="http://www.cancerresearchuk.org/terms-and-conditions/events" target="_blank">event rules</a>&nbsp;and Cancer Research UK's&nbsp;<a href="http://www.cancerresearchuk.org/about-us/utilities/privacy-statement/" target="_blank">privacy statement</a>.</p>
  <input class="primary-call-to-action-button" type="submit" id="edit-submit" name="op" value="Submit">

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
        <h2>H2 = Museo Sans Rounded 700 - 2em = 21px</h2>
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


<!-- Pattern Start h3 -->

    <div class="pattern">

        <!-- <div class="pattern__header">
            <h3>Primary call to action button</h3>
        </div> -->

<!-- Pattern styles to demo here -->
        <div class="pattern__style">
            <h3>H3 = Museo Sans Rounded 700 - 1.43em = 16px</h3>
        </div>

<!-- HTML Pattern code here, don't forget to escape them (use div class="pattern__code or it will not add the tabs) -->
        <div class="pattern__code">
        <code class="prettyprint pattern__code--html">
          &lt;h3&gt;H3 = Museo Sans Rounded 700 - 1.43em = 16px&lt;/h3&gt;
        </code>

<!-- CSS Pattern code here, don't forget to escape the code-->
        <code class="prettyprint pattern__code--css">
          h3{<br />
            font-family: "MuseoSansRounded-700", "MuseoSans-700", "Arial", "Helvetica", sans-serif;<br />
            font-size: 16px;<br />
            color: #333333;<br />
            line-height: 1.5;<br />
          }
        </code>

<!-- Sass Pattern code here, don't forget to escape the code-->
        <code class="prettyprint pattern__code--sass">
            h3{<br />
              font-family: $main-header-font;<br />
              font-size: 16px;<br />
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

<!-- Pattern Start h4 -->

    <div class="pattern">

        <!-- <div class="pattern__header">
            <h3>Primary call to action button</h3>
        </div> -->

<!-- Pattern styles to demo here -->
        <div class="pattern__style">
            <h4>H4 = Museo Sans Rounded 700 - 1em = 14px</h4>
        </div>

<!-- HTML Pattern code here, don't forget to escape them (use div class="pattern__code or it will not add the tabs) -->
        <div class="pattern__code">
        <code class="prettyprint pattern__code--html">
          &lt;h4&gt;H4 = Museo Sans Rounded 700 - 1em = 14px&lt;/h4&gt;
        </code>

<!-- CSS Pattern code here, don't forget to escape the code-->
        <code class="prettyprint pattern__code--css">
          h4{<br />
            font-family: "MuseoSansRounded-700", "MuseoSans-700", "Arial", "Helvetica", sans-serif;<br />
            font-size: 14px;<br />
            color: #333333;<br />
            line-height: 1.5;<br />
          }
        </code>

<!-- Sass Pattern code here, don't forget to escape the code-->
        <code class="prettyprint pattern__code--sass">
            h4{<br />
              font-family: $main-header-font;<br />
              font-size: 14px;<br />
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

<!-- Pattern Start h4 -->

    <div class="pattern">

        <!-- <div class="pattern__header">
            <h3>Primary call to action button</h3>
        </div> -->

<!-- Pattern styles to demo here -->
        <div class="pattern__style">
            <p>Body copy = Arial regular 14px</p>
        </div>

<!-- HTML Pattern code here, don't forget to escape them (use div class="pattern__code or it will not add the tabs) -->
        <div class="pattern__code">
        <code class="prettyprint pattern__code--html">
          &lt;p&gt;Body copy = Arial regular 14px&lt;/p&gt;
        </code>

<!-- CSS Pattern code here, don't forget to escape the code-->
        <code class="prettyprint pattern__code--css">
          p{<br />
            font-family: font-family: "Arial", sans-serif;<br />
            font-size: 14px;<br />
            color: #333333;<br />
            line-height: 1.5;<br />
          }
        </code>

<!-- Sass Pattern code here, don't forget to escape the code-->
        <code class="prettyprint pattern__code--sass">
            p{<br />
              font-family: $paragraph-font;<br />
              font-size: 14px;<br />
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

<?php include $footer_path ?>
