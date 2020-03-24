<!--Doctype HTML5 -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Taylor-Walker Consulting LLC</title>
        <meta name="description"
            content="Taylor-Walker Consulting, LLC is an actuarial consulting firm dedicated to customer service. Our mission is to provide clients with the expertise of a large firm while maintaining the one-on-one ...">
        <meta name="robots" content="index, follow" />
        <meta name="copyright" content="2020 - Taylor-Walker" />
    
        <link href="css/normalize.css" rel="stylesheet">
        <link href="css/small.css" rel="stylesheet">
        <link href="css/medium.css" rel="stylesheet">
        <link href="css/large.css" rel="stylesheet">
        <link href="css/contact.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton&Kanit&Roboto&display=swap" rel="stylesheet">
    </head>
    
    <body>
    
        <!--------------------------------------Page Header------------------------------->
        <header class="container">
            <img class="top-logo" src="images/tw-logo-big.jpg" alt="Taylor-Walker logo">
            <a href="contact.html"><img class="top-contact" src="images/ContactButton.jpg" alt="Contact Taylor-Walker"></a>
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
                <li><a class="active" href="contact.html">Contact Us</a></li>
            </ul>
        </div>
        <div class="nav-bg-fostrap">
            <div class="navbar-fostrap"> <span></span> <span></span> <span></span> </div>
            <a href="" class="title-mobile"></a>
        </div>
    </nav>

  <!-----------------------------Main Content------------------------------------------->
  <main class="wrapper">
    <div class="left-wrapper">
        <div class="left-content">
            <img src="images/image16.jpg" alt="Sample Image 16">
        </div>
    </div>
    < class="right-wrapper">
        <article class="right-content">

            <h1>Contact Us</h1>
            <hr class="style1">

            <p><b>Questions?</b></p>
            <p class="underscore">We are happy to answer any questions or concerns.</p>

            <form method="post" id="captcha_form" name="captcha_form" action="mailform.php"><fieldset><ol>
                <li id="ht"><label class="solo" for="htest">Leave this input blank</label><span class="required">(required)</span><input type="text" class="soloinput" name="htest" id="htest" value="" />
                
                    </li><li><label class="solo" for="email">Email address:</label><span class="required">(required)</span><input type="text" class="soloinput" name="email" id="email" value="" />
                
                    </li><li><label class="solo" for="firstname">First name:</label><span class="required">(required)</span><input type="text" class="soloinput" name="firstname" id="firstname" value="" />
                    
                    
                    </li><li><label class="solo" for="lastname">Last name:</label><span class="required">(required)</span><input type="text" class="soloinput" name="lastname" id="lastname" value="" />
                    
                    
                    </li><li><label class="solo" for="companyname">Company Name:</label><input type="text" class="soloinput" name="companyname" id="companyname" value="" />
                    
                
                    </li><li><span class="category">Mailing address:</span>
                    <br /><label class="solo" for="addressline1">Line 1:</label> <input type="text" class="soloinput" name="addressline1" id="addressline1" value="" />
                    <br /><label class="solo" for="addressline2">Line 2:</label> <input type="text" class="soloinput" name="addressline2" id="addressline2" value="" />
                    <br /><span class="category"><label for="city">City</label> and <label for="state">State:</label></span> <input type="text" class="city" name="city" id="city" value="" /><span class="comma" name="comma"> , </span><input type="text" class="state" name="state" id="state" value="" />
                    <br /><label class="solo" for="zip">Zip:</label><input type="text" class="soloinput" name="zip" id="zip" style="" value="" />
                    <br /><label class="solo" for="country">Country:</label> <input type="text" class="soloinput" name="country" id="country" value="" />
                    
                
                    </li><li><label class="solo" for="phone">Phone number:</label> <span class="required">(required)</span><input type="text" class="soloinput" name="phone" id="phone" value="" />
                    
                        <br /><label class="solo" for="phonetype">Phone number type:</label><span class="required">(required)</span> <select class="soloinput" name="phonetype" id="phonetype">
                            <option value=""> </option>
                            <option value="cell">Cell</option>
                            <option value="fax">Fax</option>
                                        <option value="home">Home</option>
                            <option value="work">Work</option>
                            <option value="other">Other</option>
                        </select>
                        
                        <br /><label class="solo" for="besttime">Best time to call:</label><span class="required">(required)</span> <select class="soloinput" name="besttime" id="besttime">
                            <option value="0"> </option>
                            <option value="Any time">Any time</option>
                            <option value="6 AM to 9 AM">6 AM - 9 AM</option>
                            <option value="9 AM to 12 PM">9 AM to 12 PM</option>
                            <option value="12 PM - 3 PM">12 PM - 3 PM</option>
                            <option value="3 PM - 6 PM">3 PM - 6 PM</option>
                        </select>
                        
                    </li><li><label class="solo" for="subject">Subject:</label><span class="required">(required)</span> <input type="text" class="soloinput" name="subject" id="subject" />
                    
                        </li><li><label class="solo" for="userpass">CAPTCHA:</label><span class="required">(required)</span>
                <div class="soloinput">
                Enter the text contained in the image into the text box:
                <br /><img id="captcha" src="captcha.php" alt="If your CAPTCHA image does not appear within five seconds, please hit the refresh button on your browser." />
                <br /><input type="text" class="soloinput" name="userpass" id="userpass" value="" />
                </div>	
                    </li><li><label class="solo" for="message">Message:</label><span class="required">(required)</span>
                <div class="soloinput"><textarea class="soloinput" name="message" id="message" ></textarea>
                                        <br /><a class="soloinput" href="http://www.addressmunger.com/contact_form_generator/" style="">Free contact forms</a>
                    
                    
                    <p><input name="submit" id="submit" type="submit" value="Send" style="float: right;" /></p></div>
                    </li></ol>
                </fieldset></form> &nbsp;<br />&nbsp;<br />&nbsp;

            
        </article>
    </div>
</main>

<!-----------------------------Page Footer------------------------------------------->
    <footer id="full-width-bottom">
        <div class="row">
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
            <div class="column 5">
                Fax: (801) 562-2816
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="js/toggle.js"></script>
    <script src="js/current_date.js"></script>


</body>

</html>