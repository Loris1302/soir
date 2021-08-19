<?php 
    include('header.php');
?>

    <div class="heroWrap">
        <div class="hero">
            <div class="heroContent">
                <div class="logoOverlap"></div>
                <span class="heroLogo">soir</span>
                <div class="heroLine"></div>
                <div class="textOverlap"></div>
                <span class="heroText">events</span>
                <p class="heroDefinition">SOIR /swaʀ/ : Fin du jour, moments qui précèdent et qui suivent le coucher du
                    soleil.</p>
            </div>
            
        </div>
    </div>

    <div class="aboutWrap" id="aboutWrap">
        <div class="about">
            <div class="aboutLine">
                <div class="line"></div>
                <span class="aboutText">about us</span>
            </div>
            <div class="aboutContent">
                    <p>SOIR is a luxury creative agency for live and virtual events based in Zagreb. <br>
                    Perfect combination of the experience and passion in the events world supported by a multi-disciplinary team of creatives, storytellers, techies and thinkers – <span class="contentBold">who will make it happen.</span> <br><br>
                    We create memorable experiences that evoke emotions and shape opinions, taking care of the <span class="contentBold">organization of corporate events, incentive trips, gala dinners ,private parties, fashion shows, anniversaries, store openings, conferences, product launches and full service digital promotion.</span> <br><br>
                    <span class="contentBold">Our goal is to help brands connect with people.</span> Because when brands connect with people, they elicit an emotion -catch our attention, win our trust and change our behaviours. <br><br>
                    
                    And the best time to do it is in SOIR! <br>
                    </p>

            </div>
        </div>
        <div class="contentDefinition">
            <p>SOIR / swaʀ /: End of the day, moments before and after sunset.</p>
        </div>
    </div>

    <div class="servicesWrap" id="servicesWrap">
        <div class="services">
            <div class="servicesLine">
                <div class="line"></div>
                <span class="servicesText">services</span>
            </div>
            <div class="flipCardWrap">
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardBack">
                        <p>We offer full Digital Marketing promotions including planning, implementing and measuring online campaigns</p>
                    </div>
                    <div class="flipCardFront">
                        <img class="imgback" src="./img/moj1.jpeg" alt=""> 
                        <p>Promotions</p>
                    </div>
                </div>
            </div>
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardBack">
                        <p>Our team will develop an event experience that feels engaging, <br> innovative, and meaningful for every participant</p>
                    </div>
                    <div class="flipCardFront">
                        <img class="imgback" src="./img/moj7.jpeg" alt="">
                        <p>Virtual & Live Events</p>
                        
                    </div>
                </div>
            </div>
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardBack">
                        <p>Our expert production & tech teams will partner with you to develop an engaging and memorable online event</p>
                    </div>
                    <div class="flipCardFront">
                        <img class="imgback" src="./img/moj21.jpeg" alt="">
                        <p>Production</p>
                    </div>
                </div>
            </div>
        </div>
        </div>



    <div class="contactUsWrap" id="contactUs">
        <div class="contactUs">
            <div class="contactUsLine">
                <div class="line"></div>
                <span class="contactUsText">contact</span>
            </div>
            
                <div class="companyInfo">
                    <div class="logoWrap contactLogo">
                        <h2 class="logo">SOIR</h2>
                        <div class="logoLine"></div>
                        <span class="logoText">productions events promotions</span>
                    </div>
                    <div class="contactItems">
                        <i class="fas fa-map-marker-alt icon"></i>
                        <p>Polanjšćak 15, 10000 Zagreb</p>
                    </div>
                    <div class="contactItems">
                        <i class="fas fa-phone-alt icon"></i>
                        <p>00 385 91 464 6405</p>
                    </div>
                    <div class="contactItems">
                        <i class="far fa-envelope icon"></i>
                        <p class="selectable"><a href="mailto:soir@soir.hr" target="_blank">soir@soir.hr</a></p>
                    </div>
                </div>

                <?php 

                if(isset($_POST['submit'])){
                    $firstName = $_POST['firstname'];
                    $lastName = $_POST['lastname'];
                    $email = $_POST['email'];
                    $phoneNumber = $_POST['phonenumber'];
                    $message = $_POST['message'];

                    if(strlen($email) <= 4 || !str_contains($email, '@')){
                        echo "<style> .emailaddress{ display: inline-block;} </style>";
                    }elseif(strlen($firstName) <= 2){
                        echo "<style> .name{ display: inline-block;} </style>";
                    }elseif(strlen($lastName) <= 2){
                        echo "<style> .lastname{ display: inline-block;} </style>";
                    }elseif(strlen($message) <= 10){
                        echo "<style> .messageInvalid{ display: inline-block;} </style>";
                    }else{
                        //e-mail parametri
                        $subject = "Imate novu e-mail poruku na Soir.hr od " . $firstName . " " . $lastName;
                        $to = "soir@soir.hr";
                        $from = "E-mail pošiljatelja: " . $email . "<br> Broj telefona: " . $phoneNumber . " <br>";

                        // slanje maila
                        echo "<style> .completed{ display: inline-block;} </style>";
                        mail($to, $subject, $message, $from);
                    }    
                }

                ?>

                <div class="contactForm">
                    <form action="index.php#contactUs" method="post">
                        <div>
                            <input type="text" class="inputField" name="firstname" placeholder="First name">
                            <input type="text" class="inputField" name="lastname" placeholder="Last name">
                        </div>
                        <div class="bottomBreak">
                            <input type="text" class="inputField" name="email" placeholder="E-mail">
                            <input type="text" class="inputField" name="phonenumber" placeholder="Phone number">
                        </div>
                        <textarea name="message" class="textareaField" cols="30" rows="10" placeholder="Your message"></textarea>
                        <div class="submitBtnWrap">
                            <input type="submit" name="submit" class="submitBtn" value="send">
                        </div>
                        <div class="errors">
                            <p class="formError name">Please type in your correct name.</p>
                            <p class="formError lastname">Please type in your correct last name.</p>
                            <p class="formError emailaddress">Please type in your correct e-mail address.</p>
                            <p class="formError messageInvalid">Your message is invalid.</p>
                            <p class="formError completed">Your message has been sent!</p>
                        </div>
                    </form>
                </div>
        </div>
    </div>

   <?php 
    include('footer.php');
   ?>