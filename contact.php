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
            <a href="contact.php"><img class="top-contact" src="images/ContactButton.jpg" alt="Contact Taylor-Walker"></a>
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
                <li><a class="active" href="contact.php">Contact Us</a></li>
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

            <?=$thankYou ?>

            <form method="post" action="contact.php">
                <label>Name:</label>
                <input name="sender">
        
                <label>Email address:</label>
                <input name="senderEmail">
        
                <label>Message:</label>
                <textarea rows="5" cols="20" name="message"></textarea>
        
                <input type="submit" name="submit">
            </form>
                  
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