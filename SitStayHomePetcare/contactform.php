
<?PHP

require_once("./include/fgcontactform.php");
require_once("./include/captcha-creator.php");

$formproc = new FGContactForm();
$captcha = new FGCaptchaCreator('scaptcha');

$formproc->EnableCaptcha($captcha);

$formproc->AddRecipient('sitstayhomepetcare@yahoo.com');  

$formproc->SetFormRandomKey('3usQyspxMWnZK1F');

$formproc->AddFileUploadField('photo','jpg,jpeg,gif,png,bmp',2024);

if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="STYLESHEET" type="text/css" href="contact.css" />
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/small-business.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">


    <title>Contact | Sit-Stay-Home Pet Care LLC, Roanoke, Virginia</title>
     
</head>
<body>

<!-- Navigation -->    
<div>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container_header">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="active" href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                    </li>
                    <li>
                        <a href="contactform.php">Contact</a>
                    </li>
                </ul>
            </div>
         </div>
     
            <div class="social">

                <a href="https://www.facebook.com/Sit-Stay-Home-Pet-Care-LLC-1065345330155898/" target="_blank"><img class="icons" src="images/facebook.png" alt="Facebook"  width=35px ></img>    Find us on Facebook!</a>
             </div>
     </nav>
</div>


    <!-- Page Content -->
<div class="page-header">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-9">
                <img class="img-responsive img-rounded" src="images/header.png" alt="Sit-Stay-Home Pet Care">
            </div>
            <div class="col-md-3" "address">
              <blockquote> <br><br><br><h3>Contact:</h3>Sit-Stay-Home Pet Care<br>(540) 871-3702<br>sitstayhomepetcare@yahoo.com</blockquote>
          </div>
     </div>       

 </div>   

<!-- Form Code Start -->
<div class="row">
    <div class="col-md-8">
            <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'
            enctype="multipart/form-data">

            <fieldset >
            <legend><h2>Contact us</h2></legend>

            <input type='hidden' name='submitted' id='submitted' value='1'/>
            <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
            <input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

            <div class='short_explanation'>* required fields</div>

            <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
            <div class='container'>
                <label for='name' >Your Full Name*: </label><br/>
                <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
                <span id='contactus_name_errorloc' class='error'></span>
            </div>
            <div class='container'>
                <label for='email' >Email Address*:</label><br/>
                <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
                <span id='contactus_email_errorloc' class='error'></span>
            </div>
            <div class='container'>
                <label for='message' >Message:</label><br/>
                <span id='contactus_message_errorloc' class='error'></span>
                <textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
            </div>
            <div class='container'>
                <label for='photo' >Upload your attachment:</label><br/>
                <input type="file" name='photo' id='photo' /><br/>
                <span id='contactus_photo_errorloc' class='error'></span>
            </div>
            <div class='container'>
                <div><img alt='Captcha image' src='show-captcha.php?rand=1' id='scaptcha_img' /></div>
                <label for='scaptcha' >Enter the code above here:</label>
                <input type='text' name='scaptcha' id='scaptcha' maxlength="10" /><br/>
                <span id='contactus_scaptcha_errorloc' class='error'></span>
                <div class='short_explanation'>Can't read the image?
                <a href='javascript: refresh_captcha_img();'>Click here to refresh</a>.</div>
            </div>


            <div class='container'>
                <input type='submit' name='Submit' value='Submit' />
            </div>

            </fieldset>
            </form>
            <!-- client-side Form Validations:
            Uses the excellent form validation script from JavaScript-coder.com-->

            <script type='text/javascript'>
            // <![CDATA[

                var frmvalidator  = new Validator("contactus");
                frmvalidator.EnableOnPageErrorDisplay();
                frmvalidator.EnableMsgsTogether();
                frmvalidator.addValidation("name","req","Please provide your name");

                frmvalidator.addValidation("email","req","Please provide your email address");

                frmvalidator.addValidation("email","email","Please provide a valid email address");

                frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

                frmvalidator.addValidation("photo","file_extn=jpg;jpeg;gif;png;bmp","Upload images only. Supported file types are: jpg,gif,png,bmp");

                frmvalidator.addValidation("scaptcha","req","Please enter the code in the image above");

                document.forms['contactus'].scaptcha.validator
                  = new FG_CaptchaValidator(document.forms['contactus'].scaptcha,
                                document.images['scaptcha_img']);

                function SCaptcha_Validate()
                {
                    return document.forms['contactus'].scaptcha.validator.validate();
                }

                frmvalidator.setAddnlValidationFunction("SCaptcha_Validate");

                function refresh_captcha_img()
                {
                    var img = document.images['scaptcha_img'];
                    img.src = img.src.substring(0,img.src.lastIndexOf("?")) + "?rand="+Math.random()*1000;
                }

            // ]]>
            </script>
    </div>
</div>

</body>
</html>