<?php
session_start();
include_once('connection.php');
$_SESSION['name'];
$_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Doctor's Dashboard</title>
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="doctorportal.css" rel="stylesheet" type="text/css">
    <script src="doctorportal.js" type="text/javascript"></script>
</head>
<body>
<div class="fl-btn">
    <ul>
        <li> <a href="contact.html"> <i class="fa fa-calendar" aria-hidden="true"></i> <span>Make An Appointment</span> </a> </li>
    </ul>
</div>
<div class="container-area">
    <div class="logo-area"><a href="index.php"><img src="images/logo.png" alt="" title=""/></a></div>
    <div class="header-right">
        <div class="header-top">
            <div class="email">Email us:<br>HealthVirtuCare@gmail.com</div>
            <div class="ph">Call us on:<br>999999990</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div class="nav-area">
    <div class="container-area">
        <nav>
            <div class="mobnav" id="menumob"  onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <ul id="mobopen">
                <li><a href="index.html" title="Home">Home</a></li>
                <li><a href="about.html" title="About Us">About Us <i class="fa fa-caret-down"></i></a> <div class="mobnav2" id="menumob2">&nbsp;</div>
                </li>
                <li><a href="#" title="Our Doctor's">Our Doctor's <i class="fa fa-caret-down"></i></a> <div class="mobnav2" id="menumob5">&nbsp;</div>
                    <ul class="lavel" id="mobopen5">
                        <li><a href="doctorschedule/doctorschedule.html" title="Doctor Schedule">Doctor Schedule</a></li>
                    </ul>  </li>
                <li><a class="act" href="contact.html" title="Contact Us">Contact Us</a> </li>
            </ul>
        </nav></div><div class="clear"></div></div>
<div class="map-area"><iframe src="" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
<div class="contact-page">
    <div class="container-area">
        <div class="cpagesection">
            <h2>Get in touch with Patient</h2>
            <div class="contact-area">
                <img src="images/address1.png" alt=""/>
                <h4><strong>HealthVirtuCare: </strong></h4>
            </div>
            <div class="contact-area">
                <img src="images/phone-icon.png" alt=""/>
                <h4><strong>Mobile no.:9999999990</strong> </h4>
            </div>
            <div class="contact-area mright0">
                <img src="images/email-icon.png" alt=""/>
                <h4><a style="padding-top:0" href="HealthVirtuCare@gmail.com">Email:healthvirtucare@gmail.com</a></h4>
            </div>


            <div class="clear"></div>
            <h2>Submit Report</h2>
            <div class="contactform cform-area">
                <div class="message_cpf alert alert-success" style="display: none; margin-bottom:10px; color: green; text-align: center; font-size: 14px;"></div>
                <form method="post" action="" id="contactform" novalidate>
                    <input type="text" id="name" name="name" placeholder="Your Name">
                    <input type="text" id="phone" name="phone" placeholder="Your Phone">
                    <input class="mright0" type="text" id="email" name="email" placeholder="Your Email">
                    <textarea id="msg" name="msg" placeholder="Message"></textarea>
                    <input type="submit" id="btnsubt" value="Send Message">
                </form>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div class="wrapper_full lit_grey_bg">
    <div class=" container-area">
        <div class="emergency">
            <h1>24 Hours Emergency Services</h1>
            <p>If you have an emergency Services need, simply call our 24 hour emergecny Services</p>
            <p><span class="emer_info"><a href="tel:+918750044336"><i class="fa fa-phone">&nbsp;</i>9999999990</a></span> <span class="emer_info"><a href="HealthVirtuCare@gmail.com"><i class="fa fa-envelope">&nbsp;</i></a>healthvirtucare@gmail.com</span></p>
        </div>
    </div>
</div>
<div class="footer-area">
    <div class="container-area">
        <div class="flogo"></div>
        <div class="frighttxt">HealthVirtuCare aspires to be trusted partner of our community in delivering healthcare services, recognizing quality assurance as an integral part of our growth plans. To Provide compassionate patient care based on evidence-based practice through our excellent medical and support staff.</div>
        <div class="clear"></div>
        <div class="footer-middle">
            <div class="fcol-1">
            </div>
            <div class="fcol-2">
                <h6>Phone Number</h6>
                <p class="phn">9999999990</p>
            </div>
            <div class="fcol-2">
                <h6>Email Address</h6>
                <p class="femail"><a href="HealthVirtuCare@gmail.com">HealthVirtuCare@gmail.com</a></p>
            </div>
            <div class="fcol-right">
                <h6>Social with us</h6>
                <div class="fsocial"><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="#" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="flink"><a href="/index.html" title="Home">Home</a>     /   <a href="/about.html" title="About Us">About Us</a>
            <div class="clear"></div>
        </div>
    </div>
    <div class="container-area fbottom">© 2021 <strong>HealthVirtuCare.in</strong>. All rights reserved.</div>
</body>
</html>

<script type="text/javascript">
    jQuery(document).ready(function($){

        var delay = 2000;
        jQuery("#btnsubt").on("click", function(e){
            e.preventDefault();

            var name = $('#name').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            var referdemail = $('#referdemail').val();
            var msg = $('#msg').val();

            if (name == '') {
                $('.message_cpf').show();
                $('.message_cpf').html(
                    '<span style="color:lavender; font-size:13px;">Please enter name!</span>'
                );
                $('#name').focus();
                return false;
            } else {
                $('.message_cpf').hide();
            }

            if (phone == '') {
                $('.message_cpf').show();
                $('.message_cpf').html(
                    '<span style="color:lightblue; font-size:13px;">Please enter phone!</span>'
                );
                $('#phone').focus();
                return false;
            } else {
                $('.message_cpf').hide();
            }

            if (email == '') {
                $('.message_cpf').show();
                $('.message_cpf').html(
                    '<span style="color:lightblue; font-size:13px;">Please enter email!</span>'
                );
                $('#email').focus();
                return false;
            } else {
                $('.message_cpf').hide();
            }

            var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!regex.test(email)) {
                $('.message_cpf').show();
                $('.message_cpf').html(
                    '<span style="color:lavender; font-size:13px;">Please enter valid email!</span>'
                );
                $('#email').focus();
                return false;
            } else {
                $('.message_cpf').hide();
            }

            if (msg == '') {
                $('.message_cpf').show();
                $('.message_cpf').html(
                    '<span style="color:lightblue; font-size:13px;">Please enter message!</span>'
                );
                $('#msg').focus();
                return false;
            } else {
                $('.message_cpf').hide();
            }

            var formData = new FormData(document.getElementById("contactform"));

            $.ajax({
                url: "send-contact.php",
                type: "POST",
                data: formData,
                cache: false,
                processData:false,
                contentType:false,
                beforeSend: function() {
                    $('.message_cpf').show();
                    $('.message_cpf').html(
                        '<img style="margin: 0 auto;" src="Loader.gif" width="25" height="25"/>'
                    );
                },
                success: function(data)
                {
                    //console.log(data);
                    setTimeout(function() {
                        $('.message_cpf').show();
                        $('.message_cpf').html(data);
                        $('#contactform')[0].reset();
                    }, delay);
                }
            });

        });
    });
</script>
