<?php
require('constant.php');
?>
<!--Doctype HTML5 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <meta name="description" content="Taylor-Walker Consulting, LLC</b> will gladly answer your questions. Just send us a message">
    <meta name="robots" content="index, follow" />
    <meta name="copyright" content="2020 - Taylor-Walker" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Anton&Kanit&Roboto&display=swap" rel="stylesheet">
    <link href="css/small.css" rel="stylesheet">
    <link href="css/medium.css" rel="stylesheet">
    <link href="css/large.css" rel="stylesheet">
     <link href="css/contact.css" rel="stylesheet">

     <script src="component/jquery/jquery-3.2.1.min.js"></script>

     <script>
        $(document).ready(function (e){
            $("#frmContact").on('submit',(function(e){
                e.preventDefault();
                $("#mail-status").hide();
                $('#send-message').hide();
                $('#loader-icon').show();
                $.ajax({
                    url: "contact.php",
                    type: "POST",
                    dataType:'json',
                    data: {
                    "name":$('input[name="name"]').val(),
                    "email":$('input[name="email"]').val(),
                    "phone":$('input[name="phone"]').val(),
                    "content":$('textarea[name="content"]').val(),
                    "g-recaptcha-response":$('textarea[id="g-recaptcha-response"]').val()},				
                    success: function(response){
                    $("#mail-status").show();
                    $('#loader-icon').hide();
                    if(response.type == "error") {
                        $('#send-message').show();
                        $("#mail-status").attr("class","error");				
                    } else if(response.type == "message"){
                        $('#send-message').hide();
                        $("#mail-status").attr("class","success");							
                    }
                    $("#mail-status").html(response.text);	
                    },
                    error: function(){} 
                });
            }));
        });
        </script>
	<script src='https://www.google.com/recaptcha/api.js'></script>	
    
</head>

<body>

    <!--------------------------------------Page Header------------------------------->
    <header class="header-container">
        <img class="top-logo" src="images/tw-logo-big.jpg" alt="Taylor-Walker logo">
        <a href="contact-form.html"><img class="top-contact" src="images/ContactButton.jpg"
                alt="Contact Taylor-Walker"></a>
    </header>

    <!--------------------------------Navigation Bar------------------------------->
    <nav>
        <div class="nav-fostrap">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="services.html">Services<span class="arrow-down"></span></a>
                    <ul class="dropdown">
                        <li><a href="captive-services.html">Captive Services</a></li>
                        <li><a href="insurance-companies.html">Insurance Companies</a></li>
                        <li><a href="regulatory-services.html">Regulatory Services</a></li>
                    </ul>
                </li>
                <li><a href="team.html">Our Team</a></li>
                <li><a class="active" href="contact-form.html">Contact Us</a></li>
            </ul>
        </div>
        <div class="nav-bg-fostrap">
            <div class="navbar-fostrap"> <span></span> <span></span> <span></span> </div>
           <!-- <a href="#" class="title-mobile"></a>-->
        </div>
    </nav>

    <!-----------------------------Main Content------------------------------------------->
    <main class="wrapper">
        <div class="left-wrapper">
            <div class="left-content">
                <img src="images/contact-us.jpg" alt="Contact Us">
            </div> <!-- /.left-content-->
        </div> <!-- /.left-wrapper-->
        <div class="right-wrapper">
            <div class="right-content">

                <div id="central">
                    <div class="content">
                                    <h1>Question?</h1>
                        <hr class="style1">

                        <p><b>Taylor-Walker Consulting, LLC</b> will gladly answer your questions. Just send us a
                            message and we will get back to you ASAP.</p>

                            <div id="message">
                                <form id="frmContact" action="" method="POST" novalidate="novalidate">
                                    <div class="label">Name:</div>
                                    <div class="field">
                                        <input type="text" id="name" name="name" placeholder="enter your name here" title="Please enter your name" class="required" aria-required="true" required>
                                    </div>
                                    <div class="label">Email:</div>
                                    <div class="field">			
                                        <input type="text" id="email" name="email" placeholder="enter your email address here" title="Please enter your email address" class="required email" aria-required="true" required>
                                    </div>
                                    <div class="label">Phone Number:</div>
                                    <div class="field">			
                                        <input type="text" id="phone" name="phone" placeholder="enter your phone number here" title="Please enter your phone number" class="required phone" aria-required="true" required>
                                    </div>
                                    <div class="label">Message:</div>
                                    <div class="field">			
                                        <textarea id="comment-content" name="content" placeholder="enter your message here"></textarea>			
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="<?php echo 6LdenuQUAAAAAG2Ept1jlTrr6DjjcaX3KhKvySFk; ?>"></div>			
                                    <div id="mail-status"></div>			
                                    <button type="Submit" id="send-message" style="clear:both;">Send Message</button>
                                </form>
                                <div id="loader-icon" style="display:none;"><img src="img/loader.gif" /></div>
                                </div>		
                            </div><!-- content -->
                        </div><!-- central -->	
                        




            </div> <!-- /.right-content-->
        </div> <!--  /.right-wrapper-->


    </main> <!-- /.wrapper-->


    <!-----------------------------Page Footer------------------------------------------->
    <footer id="full-width-bottom">
        <div class="footer-row">
            <div class="column 1">
                &copy;&nbsp;<span id="year"></span>&nbsp;&nbsp;Taylor-Walker Consulting, LLC
            </div>
            <div class="column 2">
                10619 So. Jordan Gateway, Suite 335
            </div>
            <div class="column 3">
                South Jordan, Utah 84095
            </div>
            <div class="column 4">
                Telephone: (801) 562-5748
            </div>
        </div> <!-- /.row-->
    </footer>

     <script src="js/toggle.js"></script>
    <script src="js/current_date.js"></script>

</body>

</html>