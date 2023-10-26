<?php
session_start();
include_once('connection.php');
$_SESSION['name'];
$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="icon" href="https://www.HealthVirtuCare.in/favicon.ico?v1">
    <link rel="stylesheet" href = "patient.css">
    <title>24/7 Online Doctor Consultation - Chat, Video & Audio Calls Available - HealthVirtuCare</title>
    <meta name="description" content="Get immediate access to highly qualified doctors anytime, anywhere with HealthVirtuCare. Book an appointment for a chat, video or audio call consultation 24/7.Your health is just a click away. Online Doctor Consultation enables you to access more than 24 medical Specialities.">
    <link rel= "canonical" href="https://www.HealthVirtuCare.in/doctors/online-consultation" />
    <meta property="og:title" content="24/7 Online Doctor Consultation - Chat, Video & Audio Calls Available - HealthVirtuCare" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Get immediate access to highly qualified doctors anytime, anywhere with HealthVirtuCare. Book an appointment for a chat, video or audio call consultation 24/7.Your health is just a click away. Online Doctor Consultation enables you to access more than 24 medical Specialities.">
    <meta property="og:site_name" content="HealthVirtuCare">
    <meta property="og:image" content="https://www.HealthVirtuCare.in/assets/images/talk-to-doc.png" />
    <meta property="og:url" content="https://www.HealthVirtuCare.in/doctors/online-consultation" />
    <header ui-view="header" class="container-fluid inner">
        <div id="headerView">
            <div ng-if="hideHeaderFooterForMobile">

            </div>
            <div class="topBar">
                <div ng-class="!hideHeaderFooterForMobile ? 'webView' : ''" class="navbar col-lg-12" style="height: 48px;">
                    <a href="https://www.HealthVirtuCare.in/" ng-click="showHomePage()"
                       ng-if="hideHeaderFooterForMobile"
                       ng-class="{'display-center': pmEntityId == '1061150' &amp;&amp; ($state.includes('app.corporate') || $state.includes('app.corporateListing') || $state.includes('app.checkout') || $state.includes('app.orderSuccess') || $state.includes('app.orderFailure') || $state.includes('app.packageDetail'))}"
                       class="navbar-brand">
        <span class="logo"><img src="patient/logo-transparent-png.png" width="100" height="80">
            <g id="Layer_2_4" data-name="Layer 2">
              <g id="logo_HealthVirtuCare" data-name="logo HealthVirtuCare">
                <path class="c1"
                      d="M14.42,1A3.05,3.05,0,0,1,17.87.27C19.24,1,20.55,2.39,20.21,4A3.85,3.85,0,0,1,24,6.43a3,3,0,0,1-.77,3.37c-2,2-4,4-6,6l-1.1-1.07C18,12.82,19.93,11,21.81,9.07a2.62,2.62,0,0,0,.94-1.8,2,2,0,0,0-1.37-1.83,2.12,2.12,0,0,0-2.2.76c-2,1.9-3.87,3.86-5.83,5.77l-1.1-1.07C14.09,9,16,7.19,17.82,5.34a3.19,3.19,0,0,0,1.1-1.94,2.19,2.19,0,0,0-1.65-1.88,2.5,2.5,0,0,0-2.09.93L9.47,8.14a7.33,7.33,0,0,0-1.53-.65C10.08,5.32,12.25,3.16,14.42,1Z">
                </path>
                <path class="c2"
                      d="M4.65,9.54A3.85,3.85,0,0,1,7.85,7.8a4,4,0,0,1,2.44,1.41q6.24,6.19,12.47,12.41c.63.62,1.48,1.33,2.43,1a2.1,2.1,0,0,0,1.42-1.93,2.86,2.86,0,0,0-1.08-1.82c-1.65-1.63-3.28-3.28-4.94-4.91-.17-.24-.58-.4-.52-.75a6.3,6.3,0,0,1,1-1c1.8,1.81,3.62,3.59,5.41,5.4a4.3,4.3,0,0,0,1.53,1.11,2,2,0,0,0,2.36-2.37,3.85,3.85,0,0,0-.89-1.27c-1.9-1.9-3.83-3.78-5.72-5.7A3.41,3.41,0,0,0,24.39,8a4,4,0,0,1,.73.57c1.94,1.94,3.92,3.84,5.85,5.8a3,3,0,0,1,.82,3.3c-.67,1.45-2.16,2.79-3.87,2.48.33,1.9-1.35,3.6-3.1,4A3.45,3.45,0,0,1,21.89,23c-4.27-4.26-8.53-8.54-12.83-12.77a2.58,2.58,0,0,0-1.9-.91,2,2,0,0,0-1.73,2.31,3.86,3.86,0,0,0,1.08,1.58L12,18.66l-1.12,1.08c-1.82-1.83-3.66-3.64-5.49-5.47A3.34,3.34,0,0,0,3.5,13.12a2.22,2.22,0,0,0-1.92,1.45,2.41,2.41,0,0,0,.93,2.32l5.68,5.66A7.65,7.65,0,0,0,7.51,24c-1.85-1.88-3.75-3.72-5.63-5.59A5.08,5.08,0,0,1,0,15.7a3.83,3.83,0,0,1,1.79-3.33,3.24,3.24,0,0,1,2.26-.58,2.93,2.93,0,0,1,.58-2.25Z">
                </path>
                <path class="c1"
                      d="M8.86,22.13c2-2,4-3.95,5.94-5.94l1.12,1.09c-1.87,1.88-3.76,3.74-5.63,5.61a3.85,3.85,0,0,0-.92,1.31,1.93,1.93,0,0,0,2.17,2.39,3,3,0,0,0,1.52-1c1.88-1.86,3.74-3.73,5.63-5.58.37.35.74.72,1.11,1.09l-5.51,5.48a4.27,4.27,0,0,0-1,1.39,2,2,0,0,0,2.17,2.45,3.47,3.47,0,0,0,1.62-1.08c1.83-1.84,3.69-3.66,5.52-5.5.51.25,1,.46,1.55.66l-5.73,5.72A4.58,4.58,0,0,1,15.66,32a3.89,3.89,0,0,1-3.41-2,3,3,0,0,1-.43-2,4,4,0,0,1-3.93-2.79,3.06,3.06,0,0,1,1-3.11Z">
                </path>
              </g>
            </g>
            </svg></span><span class="HealthVirtuCare">Health<span>VirtuCare</span></span></a>
                    <ul class="nav">
                            </a><a style="color: #1778f2;" target="blank" href="index.php">LogOut</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</head>
<body>
<br>
<div class =  "container container1">
    <div style=" flex-wrap : wrap" class = "row m-t-15 display-flex ">
        <div  class="col-6 col-xs-8 flex-dir-col part1">
            <h1 class="blue-col m-b-5 light-bold font-26 heading1">Consult Specialist Doctors Online </h1>
            <span class="blue-col m-b-15 font-26 heading1" >on Video/Audio Call &amp; and Chat</span>
            <p class="blue-col font-18 content1 m-b-0" >Consult your Doctors from here!</p>
            <div class="buttons">
                <a href="videosdk-rtc-javascript-sdk-example/live.php">
                    <button onClick="redirect()" style="line-height: 1.6rem;  padding-left: 10px; padding-right:10px ;background-color: #1778f2!important" class="btn   btn-lg btn-primary  m-t-15 p-t-7 m-r-10 p-b-7 width-fc  br-15 btnq" ><strong class="display-align-center"><span style="font-size : 14px; font-style : bold ;box-sizing: border-box;" class="m-r-10">Talk to doctor</span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            </svg></strong></button>
                </a>
            </div>
        </div>
        <div class="col-6  text-center image1"><img src="patient/istockphoto-1470505351-170667a.webp" height="320"></div>
        <div class="col-6 image2"  style="margin-right :-10px ;overflow: hidden;" ><img class="bg-img" width= "400" height="350" src="https://views.HealthVirtuCare.in/websiteApp/doctor-iphone.png"></div>
    </div>
    <div class="symptoms webview">
        <div class="container-wrap" style="max-width : 100%">
            <div style="position:relative ;  height: 150px" class="card-view display-flex horizantalScroll">
                <div class="display-flex">


                    <a style="color: #050A4E;" href="/doctors/online-consultation/dermatologist" >
                        <div class ="speciality-class">
                            <img src= "patient/images.jpeg" height= "60px" width="60px">

                            <div class=" blue-col font-15 services" > Dermatologist - Acne, Pimples...  </div>

                        </div>
                    </a>



                    <a style="color: #050A4E;" href="/doctors/online-consultation/sexologist" >
                        <div class ="speciality-class">
                            <img src= "patient/sexologist.jpeg" height= "60px" width="60px">

                            <div class=" blue-col font-15 services" > Sexologist  </div>

                        </div>
                    </a>



                    <a style="color: #050A4E;" href="/doctors/online-consultation/gynecologist" >
                        <div class ="speciality-class">
                            <img src= "patient/gyna.jpeg" height= "60px" width="60px">

                            <div class=" blue-col font-15 services" > Gynecologist  </div>

                        </div>
                    </a>



                    <a style="color: #050A4E;" href="/doctors/online-consultation/gastroenterologist" >
                        <div class ="speciality-class">
                            <img src= "patient/gaestro.jpeg" height= "60px" width="60px">

                            <div class=" blue-col font-15 services" > Gastroenterologist - Acidity, Gas...  </div>

                        </div>
                    </a>



                    <a style="color: #050A4E;" href="/doctors/online-consultation/infertility" >
                        <div class ="speciality-class">
                            <img src= "patient/infertility.jpeg" height= "60px" width="60px">

                            <div class=" blue-col font-15 services" > Infertility Specialist  </div>

                        </div>
                    </a>



                    <a style="color: #050A4E;" href="/doctors/online-consultation/psychiatrist" >
                        <div class ="speciality-class">
                            <img src= "patient/psycho.jpeg" height= "60px" width="60px">

                            <div class=" blue-col font-15 services" > Psychiatrist  </div>

                        </div>
                    </a>



                    <a style="color: #050A4E;" href="/doctors/online-consultation/generalphysician" >
                        <div class ="speciality-class">
                            <img src= "patient/general.jpeg" height= "60px" width="60px">

                            <div class=" blue-col font-15 services" > General Physician  </div>

                        </div>
                    </a>
                </div>
            </div>
            <div class = "container container3">
                <h2 class="blue-col " style="font-size:24px ;margin-top : 56px ; margin-bottom: 24px;">Popular Doctors Available</h2>
                <div class="row card-columns" id="docList">


                    <div class="col-lg-12 col-md-12 col-12">

                        <style>
                            .viewProfile{

                                margin:auto;
                                width: 92px;
                                height: 16px;
                                margin-top: 20px;

                                font-family: 'Nunito';
                                font-style: normal;
                                font-weight: 700;
                                font-size: 16px;
                                line-height: 16px;
                                color: #1778F2;
                            }
                            @media screen and (min-width: 600px){
                                .doctor-rating{
                                    line-height: normal;
                                    display: inline-block;
                                    color: #fff;
                                    padding: 1px 4px 1px 4px;
                                    border-radius: 6px;
                                    font-weight: 400;
                                    font-size: 14px;
                                    vertical-align: middle;
                                    background-color: #79AB28;
                                    margin-top: 2px;
                                    margin-bottom: 2px;
                                }
                                .doctor-name{
                                    margin-bottom: 2px;
                                    font-size: 20px;
                                }
                                .patient-ratings{
                                    color: #050a4e;
                                    font-size: 12px;
                                }
                                .consultation{
                                    margin-bottom: 2px;
                                    font-size: min(3.3vw, 14px);
                                    color:#7f7f7f;
                                    text-align :right;
                                }
                                .fee{
                                    margin-bottom: 2px;
                                    font-size: 14px;
                                    text-align :right;
                                    /* position: relative; */
                                    /* top:-15px;
                left:0px; */
                                }
                                .experience{
                                    font-weight: 400;
                                    /* font-size: min(3vw, 12px); */
                                    font-size: 14px;
                                    line-height: 18px;
                                    color: #7f7f7f;
                                    /* margin-bottom: 2px; */
                                }
                            }
                            @media screen and (max-width: 600px){
                                .doctor-rating{
                                    line-height: normal;
                                    display: inline-block;
                                    color: #fff;
                                    padding: 1px 4px 1px 4px;
                                    border-radius: 6px;
                                    font-weight: 400;
                                    font-size: 14px;
                                    vertical-align: middle;
                                    background-color: #79AB28;
                                    margin-top: 2px;
                                    margin-bottom: 2px;
                                    position:absolute;
                                    top: 2px;
                                    right:8px;
                                }
                                .doctor-name{
                                    margin-bottom: 2px;
                                    font-size: 14px;
                                }
                                .dot1{
                                    visibility: hidden;
                                    display: none;
                                }
                                .patient-ratings{
                                    color: #7f7f7f;;
                                    font-size: 12px;
                                    position:absolute;
                                    top: 20px;
                                    right:8px;
                                }
                                .consultation{
                                    font-size: min(3.3vw, 14px);
                                    color:#7f7f7f;
                                    margin-bottom: 2px;
                                    position: absolute;
                                    left : -10px;
                                }
                                .fee{
                                    margin-bottom: 2px;
                                    font-size:  min(3.3vw, 14px);
                                    font-weight: 700;
                                    text-align :right;
                                    position: absolute;
                                    left : -10px;
                                    top : 14px;
                                    /* position: relative;
                top:19px;
                left:-86px; */
                                }
                                .experience{
                                    font-weight: 400;
                                    font-size: min(3vw, 12px);
                                    color: #050a4e;
                                    margin-bottom: 2px;
                                }

                            }
                        </style>
                        <div class="card card-body" style="border-radius:12px;">
                            <div class="row">
                                <div class="col-lg-9 col-md-8 col-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-4 text-center">
                                            <div>
                                                <a href="/doctors/profile/dr-kalluru-sirisha-id-9624">
                                                    <picture>
                                                        <source type="image/png" srcset="https://onboarding-exp-doctor-images.s3.ap-south-1.amazonaws.com/doctor-images/9624.jpg">
                                                        <img class="round-img-new" srcset="https://onboarding-exp-doctor-images.s3.ap-south-1.amazonaws.com/doctor-images/9624.jpg" >
                                                    </picture>
                                                </a>
                                                <div class ="viewProfile" ><a href="/doctors/profile/dr-kalluru-sirisha-id-9624">View Profile</a></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-9 col-md-9 col-sm-8 col-8">
                                            <h3 class="doctor-name"> Dr. Kalluru Sirisha </h3>
                                            </a>

                                            <div class="experience"> 12 years of Experience </div>
                                            <div class="experience"> MBBS, DDVL - Dermatology </div>

                                            <div class="experience"> Dr. Sirisha&#39;s Skin  , Hyderabad </div>

                                            <hr class="d3dashed" style = "border: 1px dashed #E0E0E0;">
                                            <span class="row">
                        <div>
                        <p class="doctor-rating">
                        <span class="fa fa-star checked"></span>
                         <span> 4.7</span>  </p><span class="dot1" style=" height: 5px; width: 5px; background-color:  #212529; border-radius: 50%; display: inline-block; margin-left: 6px; margin-top: 10px; margin-right: 4px;">
                        </span>
                        <span class="patient-ratings">  <U class="patient-stories">2659 Patient Stories</U> </span>
                    </div>
                    </span>
                                        </div>
                                    </div>
                                </div>
                                <hr class="d4dashed" style = "border: 1px dashed #E0E0E0; width: 100%;">
                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                            <div class="col-lg-12 col-md-12 col-sm-6"> <h3 class="consultation"> Consultation Fee  </h3> </div>
                                            <div class="col-lg-12 col-md-12 col-sm-6"> <div class="fee"> ₹ 299/- </div> </div>
                                        </div>

                                        <div class="lg-col-12 col-md-12 col-sm-6 col-6">
                                            <div class="center-align mob-center">
                                                <button class="button-2 font-14">Consult Now</button>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <style>
                            .viewProfile{

                                margin:auto;
                                width: 92px;
                                height: 16px;
                                margin-top: 20px;

                                font-family: 'Nunito';
                                font-style: normal;
                                font-weight: 700;
                                font-size: 16px;
                                line-height: 16px;
                                color: #1778F2;
                            }
                            @media screen and (min-width: 600px){
                                .doctor-rating{
                                    line-height: normal;
                                    display: inline-block;
                                    color: #fff;
                                    padding: 1px 4px 1px 4px;
                                    border-radius: 6px;
                                    font-weight: 400;
                                    font-size: 14px;
                                    vertical-align: middle;
                                    background-color: #79AB28;
                                    margin-top: 2px;
                                    margin-bottom: 2px;
                                }
                                .doctor-name{
                                    margin-bottom: 2px;
                                    font-size: 20px;
                                }
                                .patient-ratings{
                                    color: #050a4e;
                                    font-size: 12px;
                                }
                                .consultation{
                                    margin-bottom: 2px;
                                    font-size: min(3.3vw, 14px);
                                    color:#7f7f7f;
                                    text-align :right;
                                }
                                .fee{
                                    margin-bottom: 2px;
                                    font-size: 14px;
                                    text-align :right;
                                    /* position: relative; */
                                    /* top:-15px;
                left:0px; */
                                }
                                .experience{
                                    font-weight: 400;
                                    /* font-size: min(3vw, 12px); */
                                    font-size: 14px;
                                    line-height: 18px;
                                    color: #7f7f7f;
                                    /* margin-bottom: 2px; */
                                }
                            }
                            @media screen and (max-width: 600px){
                                .doctor-rating{
                                    line-height: normal;
                                    display: inline-block;
                                    color: #fff;
                                    padding: 1px 4px 1px 4px;
                                    border-radius: 6px;
                                    font-weight: 400;
                                    font-size: 14px;
                                    vertical-align: middle;
                                    background-color: #79AB28;
                                    margin-top: 2px;
                                    margin-bottom: 2px;
                                    position:absolute;
                                    top: 2px;
                                    right:8px;
                                }
                                .doctor-name{
                                    margin-bottom: 2px;
                                    font-size: 14px;
                                }
                                .dot1{
                                    visibility: hidden;
                                    display: none;
                                }
                                .patient-ratings{
                                    color: #7f7f7f;;
                                    font-size: 12px;
                                    position:absolute;
                                    top: 20px;
                                    right:8px;
                                }
                                .consultation{
                                    font-size: min(3.3vw, 14px);
                                    color:#7f7f7f;
                                    margin-bottom: 2px;
                                    position: absolute;
                                    left : -10px;
                                }
                                .fee{
                                    margin-bottom: 2px;
                                    font-size:  min(3.3vw, 14px);
                                    font-weight: 700;
                                    text-align :right;
                                    position: absolute;
                                    left : -10px;
                                    top : 14px;
                                    /* position: relative;
                top:19px;
                left:-86px; */
                                }
                                .experience{
                                    font-weight: 400;
                                    font-size: min(3vw, 12px);
                                    color: #050a4e;
                                    margin-bottom: 2px;
                                }

                            }
                        </style>
                        <div class="card card-body" style="border-radius:12px;">
                            <div class="row">
                                <div class="col-lg-9 col-md-8 col-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-4 text-center">
                                            <div>
                                                <a href="/doctors/profile/dr-swetha-sj-id-32436">
                                                    <picture>
                                                        <source type="image/png" srcset="https://docsapp-doctor.s3.us-west-2.amazonaws.com/profile_images/32436.png">
                                                        <img class="round-img-new" srcset="https://docsapp-doctor.s3.us-west-2.amazonaws.com/profile_images/32436.png" >
                                                    </picture>
                                                </a>
                                                <div class ="viewProfile" ><a href="/doctors/profile/dr-swetha-sj-id-32436">View Profile</a></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-9 col-md-9 col-sm-8 col-8">
                                            <h3 class="doctor-name"> Dr. Swetha SJ </h3>
                                            </a>

                                            <div class="experience"> 14 years of Experience </div>
                                            <div class="experience"> MBBS, MD - DVL </div>

                                            <div class="experience"> MediPoint PolyClinic , Hyderabad </div>

                                            <hr class="d3dashed" style = "border: 1px dashed #E0E0E0;">
                                            <span class="row">
                        <div>
                        <p class="doctor-rating">
                        <span class="fa fa-star checked"></span>
                         <span> 4.6</span>  </p><span class="dot1" style=" height: 5px; width: 5px; background-color:  #212529; border-radius: 50%; display: inline-block; margin-left: 6px; margin-top: 10px; margin-right: 4px;">
                        </span>
                        <span class="patient-ratings">  <U class="patient-stories">659 Patient Stories</U> </span>
                    </div>
                    </span>
                                        </div>
                                    </div>
                                </div>
                                <hr class="d4dashed" style = "border: 1px dashed #E0E0E0; width: 100%;">
                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                            <div class="col-lg-12 col-md-12 col-sm-6"> <h3 class="consultation"> Consultation Fee  </h3> </div>
                                            <div class="col-lg-12 col-md-12 col-sm-6"> <div class="fee"> ₹ 299/- </div> </div>
                                        </div>

                                        <div class="lg-col-12 col-md-12 col-sm-6 col-6">
                                            <div class="center-align mob-center">
                                                <button class="button-2 font-14">Consult Now</button>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <style>
                            .viewProfile{

                                margin:auto;
                                width: 92px;
                                height: 16px;
                                margin-top: 20px;

                                font-family: 'Nunito';
                                font-style: normal;
                                font-weight: 700;
                                font-size: 16px;
                                line-height: 16px;
                                color: #1778F2;
                            }
                            @media screen and (min-width: 600px){
                                .doctor-rating{
                                    line-height: normal;
                                    display: inline-block;
                                    color: #fff;
                                    padding: 1px 4px 1px 4px;
                                    border-radius: 6px;
                                    font-weight: 400;
                                    font-size: 14px;
                                    vertical-align: middle;
                                    background-color: #79AB28;
                                    margin-top: 2px;
                                    margin-bottom: 2px;
                                }
                                .doctor-name{
                                    margin-bottom: 2px;
                                    font-size: 20px;
                                }
                                .patient-ratings{
                                    color: #050a4e;
                                    font-size: 12px;
                                }
                                .consultation{
                                    margin-bottom: 2px;
                                    font-size: min(3.3vw, 14px);
                                    color:#7f7f7f;
                                    text-align :right;
                                }
                                .fee{
                                    margin-bottom: 2px;
                                    font-size: 14px;
                                    text-align :right;
                                    /* position: relative; */
                                    /* top:-15px;
                left:0px; */
                                }
                                .experience{
                                    font-weight: 400;
                                    /* font-size: min(3vw, 12px); */
                                    font-size: 14px;
                                    line-height: 18px;
                                    color: #7f7f7f;
                                    /* margin-bottom: 2px; */
                                }
                            }
                            @media screen and (max-width: 600px){
                                .doctor-rating{
                                    line-height: normal;
                                    display: inline-block;
                                    color: #fff;
                                    padding: 1px 4px 1px 4px;
                                    border-radius: 6px;
                                    font-weight: 400;
                                    font-size: 14px;
                                    vertical-align: middle;
                                    background-color: #79AB28;
                                    margin-top: 2px;
                                    margin-bottom: 2px;
                                    position:absolute;
                                    top: 2px;
                                    right:8px;
                                }
                                .doctor-name{
                                    margin-bottom: 2px;
                                    font-size: 14px;
                                }
                                .dot1{
                                    visibility: hidden;
                                    display: none;
                                }
                                .patient-ratings{
                                    color: #7f7f7f;;
                                    font-size: 12px;
                                    position:absolute;
                                    top: 20px;
                                    right:8px;
                                }
                                .consultation{
                                    font-size: min(3.3vw, 14px);
                                    color:#7f7f7f;
                                    margin-bottom: 2px;
                                    position: absolute;
                                    left : -10px;
                                }
                                .fee{
                                    margin-bottom: 2px;
                                    font-size:  min(3.3vw, 14px);
                                    font-weight: 700;
                                    text-align :right;
                                    position: absolute;
                                    left : -10px;
                                    top : 14px;
                                    /* position: relative;
                top:19px;
                left:-86px; */
                                }
                                .experience{
                                    font-weight: 400;
                                    font-size: min(3vw, 12px);
                                    color: #050a4e;
                                    margin-bottom: 2px;
                                }

                            }
                        </style>
                        <div class="card card-body" style="border-radius:12px;">
                            <div class="row">
                                <div class="col-lg-9 col-md-8 col-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-4 text-center">
                                            <div>
                                                <picture>
                                                    <source type="image/png" srcset="https://docsapp-doctor.s3.us-west-2.amazonaws.com/profile_images/29579.png">
                                                    <img class="round-img-new" srcset="https://docsapp-doctor.s3.us-west-2.amazonaws.com/profile_images/29579.png" >
                                                </picture>
                                                </a>
                                                <div class ="viewProfile" ><a href="/doctors/profile/dr-k-c-dharam-kumar-id-29579">View Profile</a></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-9 col-md-9 col-sm-8 col-8">
                                            <h3 class="doctor-name"> Dr. K C Dharam Kumar </h3>
                                            </a>

                                            <div class="experience"> 9 years of Experience </div>
                                            <div class="experience"> MBBS, MD - DVL, Fellowship in Dermato Surgery, DNB - DVL </div>

                                            <div class="experience"> Epiderma Skin and Hair Clinic , Bengaluru </div>

                                            <hr class="d3dashed" style = "border: 1px dashed #E0E0E0;">
                                            <span class="row">
                        <div>
                        <p class="doctor-rating">
                        <span class="fa fa-star checked"></span>
                         <span> 4.6</span>  </p><span class="dot1" style=" height: 5px; width: 5px; background-color:  #212529; border-radius: 50%; display: inline-block; margin-left: 6px; margin-top: 10px; margin-right: 4px;">
                        </span>
                        <span class="patient-ratings">  <U class="patient-stories">3326 Patient Stories</U> </span>
                    </div>
                    </span>
                                        </div>
                                    </div>
                                </div>
                                <hr class="d4dashed" style = "border: 1px dashed #E0E0E0; width: 100%;">
                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                            <div class="col-lg-12 col-md-12 col-sm-6"> <h3 class="consultation"> Consultation Fee  </h3> </div>
                                            <div class="col-lg-12 col-md-12 col-sm-6"> <div class="fee"> ₹ 299/- </div> </div>
                                        </div>

                                        <div class="lg-col-12 col-md-12 col-sm-6 col-6">
                                            <div class="center-align mob-center">
                                                <button class="button-2 font-14">Consult Now</button>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            $(document).ready(() => {
                                if(detectmob()){
                                    $('.mob-center').css("text-align", "center");
                                } else {
                                    $('.mob-center').css("text-align", "right");
                                }
                            })

                        </script>
                    </div>


                </div>

                <div class ="text-center ">
                    <div  id="doctorbtn2" onclick="btnHandler('treat2', 'doctorbtn2')"><b style="box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.12);color:#1778F2;background-color: white;  border: 2px solid blue ; padding: 10px;
                      border-radius: 25px; " class="border border-primary"> View more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            </svg></b></div>
                </div>

                <div class="row card-columns none" id="treat2">

                    <div class="col-lg-12 col-md-12 col-12">





                        <style>
                            .viewProfile{

                                margin:auto;
                                width: 92px;
                                height: 16px;
                                margin-top: 20px;

                                font-family: 'Nunito';
                                font-style: normal;
                                font-weight: 700;
                                font-size: 16px;
                                line-height: 16px;
                                color: #1778F2;
                            }
                            @media screen and (min-width: 600px){
                                .doctor-rating{
                                    line-height: normal;
                                    display: inline-block;
                                    color: #fff;
                                    padding: 1px 4px 1px 4px;
                                    border-radius: 6px;
                                    font-weight: 400;
                                    font-size: 14px;
                                    vertical-align: middle;
                                    background-color: #79AB28;
                                    margin-top: 2px;
                                    margin-bottom: 2px;
                                }
                                .doctor-name{
                                    margin-bottom: 2px;
                                    font-size: 20px;
                                }
                                .patient-ratings{
                                    color: #050a4e;
                                    font-size: 12px;
                                }
                                .consultation{
                                    margin-bottom: 2px;
                                    font-size: min(3.3vw, 14px);
                                    color:#7f7f7f;
                                    text-align :right;
                                }
                                .fee{
                                    margin-bottom: 2px;
                                    font-size: 14px;
                                    text-align :right;
                                    /* position: relative; */
                                    /* top:-15px;
                left:0px; */
                                }
                                .experience{
                                    font-weight: 400;
                                    /* font-size: min(3vw, 12px); */
                                    font-size: 14px;
                                    line-height: 18px;
                                    color: #7f7f7f;
                                    /* margin-bottom: 2px; */
                                }
                            }
                            @media screen and (max-width: 600px){
                                .doctor-rating{
                                    line-height: normal;
                                    display: inline-block;
                                    color: #fff;
                                    padding: 1px 4px 1px 4px;
                                    border-radius: 6px;
                                    font-weight: 400;
                                    font-size: 14px;
                                    vertical-align: middle;
                                    background-color: #79AB28;
                                    margin-top: 2px;
                                    margin-bottom: 2px;
                                    position:absolute;
                                    top: 2px;
                                    right:8px;
                                }
                                .doctor-name{
                                    margin-bottom: 2px;
                                    font-size: 14px;
                                }
                                .dot1{
                                    visibility: hidden;
                                    display: none;
                                }
                                .patient-ratings{
                                    color: #7f7f7f;;
                                    font-size: 12px;
                                    position:absolute;
                                    top: 20px;
                                    right:8px;
                                }
                                .consultation{
                                    font-size: min(3.3vw, 14px);
                                    color:#7f7f7f;
                                    margin-bottom: 2px;
                                    position: absolute;
                                    left : -10px;
                                }
                                .fee{
                                    margin-bottom: 2px;
                                    font-size:  min(3.3vw, 14px);
                                    font-weight: 700;
                                    text-align :right;
                                    position: absolute;
                                    left : -10px;
                                    top : 14px;
                                    /* position: relative;
                top:19px;
                left:-86px; */
                                }
                                .experience{
                                    font-weight: 400;
                                    font-size: min(3vw, 12px);
                                    color: #050a4e;
                                    margin-bottom: 2px;
                                }

                            }
                        </style>
                        <div class="card card-body" style="border-radius:12px;">
                            <div class="row">
                                <div class="col-lg-9 col-md-8 col-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-4 text-center">
                                            <div>
                                                <a href="/doctors/profile/dr-anshu-maheswari-id-31076">
                                                    <picture>
                                                        <source type="image/png" srcset="https://docsapp-doctor.s3.us-west-2.amazonaws.com/profile_images/31076.png">
                                                        <img class="round-img-new" srcset="https://docsapp-doctor.s3.us-west-2.amazonaws.com/profile_images/31076.png" >
                                                    </picture>
                                                </a>
                                                <div class ="viewProfile" ><a href="/doctors/profile/dr-anshu-maheswari-id-31076">View Profile</a></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-9 col-md-9 col-sm-8 col-8">
                                            <a href="/doctors/profile/dr-anshu-maheswari-id-31076" style="color:black">
                                                <h3 class="doctor-name"> Dr. Anshu Maheswari </h3>
                                            </a>

                                            <div class="experience"> 8 years of Experience </div>
                                            <div class="experience"> MBBS, MD - DVL </div>

                                            <div class="experience"> Dr. Anshu Maheswari&#39;s Clinic , Delhi/NCR </div>

                                            <hr class="d3dashed" style = "border: 1px dashed #E0E0E0;">
                                            <span class="row">
                        <div>
                        <p class="doctor-rating">
                        <span class="fa fa-star checked"></span>
                         <span> 4.7</span>  </p><span class="dot1" style=" height: 5px; width: 5px; background-color:  #212529; border-radius: 50%; display: inline-block; margin-left: 6px; margin-top: 10px; margin-right: 4px;">
                        </span>
                        <span class="patient-ratings">  <U class="patient-stories">2659 Patient Stories</U> </span>
                    </div>
                    </span>
                                        </div>
                                    </div>
                                </div>
                                <hr class="d4dashed" style = "border: 1px dashed #E0E0E0; width: 100%;">
                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                            <div class="col-lg-12 col-md-12 col-sm-6"> <h3 class="consultation"> Consultation Fee  </h3> </div>
                                            <div class="col-lg-12 col-md-12 col-sm-6"> <div class="fee"> ₹ 299/- </div> </div>
                                        </div>

                                        <div class="lg-col-12 col-md-12 col-sm-6 col-6">
                                            <div class="center-align mob-center">
                                                <button class="button-2 font-14">Consult Now</button>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            $(document).ready(() => {
                                if(detectmob()){
                                    $('.mob-center').css("text-align", "center");
                                } else {
                                    $('.mob-center').css("text-align", "right");
                                }
                            })

                        </script>
                    </div>

                    <div class="col-lg-12 col-md-12 col-12">




                        <script>
                            function detectmob() {
                                if( navigator.userAgent.match(/Android/i)
                                    || navigator.userAgent.match(/webOS/i)
                                    || navigator.userAgent.match(/iPhone/i)
                                    || navigator.userAgent.match(/iPad/i)
                                    || navigator.userAgent.match(/iPod/i)
                                    || navigator.userAgent.match(/BlackBerry/i)
                                    || navigator.userAgent.match(/Windows Phone/i)
                                ){
                                    return true;
                                }
                                else {
                                    return false;
                                }
                            }
                            function getPincode(name) {
                                let pincode = window.prompt("Enter Your Pincode");
                                if(!pincode){
                                    return;
                                }

                                while(!((parseInt(pincode)>=100000) && (parseInt(pincode)<=999999)) ){
                                    pincode = window.prompt("Enter a correct Pincode");
                                    if(!pincode){
                                        return;
                                    }
                                }
                                window.location.href = "https://www.HealthVirtuCare.in/pharmacy/"+pincode+"/"+name

                            }
                        </script>
                        <style>
                            .viewProfile{

                                margin:auto;
                                width: 92px;
                                height: 16px;
                                margin-top: 20px;

                                font-family: 'Nunito';
                                font-style: normal;
                                font-weight: 700;
                                font-size: 16px;
                                line-height: 16px;
                                color: #1778F2;
                            }
                            @media screen and (min-width: 600px){
                                .doctor-rating{
                                    line-height: normal;
                                    display: inline-block;
                                    color: #fff;
                                    padding: 1px 4px 1px 4px;
                                    border-radius: 6px;
                                    font-weight: 400;
                                    font-size: 14px;
                                    vertical-align: middle;
                                    background-color: #79AB28;
                                    margin-top: 2px;
                                    margin-bottom: 2px;
                                }
                                .doctor-name{
                                    margin-bottom: 2px;
                                    font-size: 20px;
                                }
                                .patient-ratings{
                                    color: #050a4e;
                                    font-size: 12px;
                                }
                                .consultation{
                                    margin-bottom: 2px;
                                    font-size: min(3.3vw, 14px);
                                    color:#7f7f7f;
                                    text-align :right;
                                }
                                .fee{
                                    margin-bottom: 2px;
                                    font-size: 14px;
                                    text-align :right;
                                    /* position: relative; */
                                    /* top:-15px;
                left:0px; */
                                }
                                .experience{
                                    font-weight: 400;
                                    /* font-size: min(3vw, 12px); */
                                    font-size: 14px;
                                    line-height: 18px;
                                    color: #7f7f7f;
                                    /* margin-bottom: 2px; */
                                }
                            }
                            @media screen and (max-width: 600px){
                                .doctor-rating{
                                    line-height: normal;
                                    display: inline-block;
                                    color: #fff;
                                    padding: 1px 4px 1px 4px;
                                    border-radius: 6px;
                                    font-weight: 400;
                                    font-size: 14px;
                                    vertical-align: middle;
                                    background-color: #79AB28;
                                    margin-top: 2px;
                                    margin-bottom: 2px;
                                    position:absolute;
                                    top: 2px;
                                    right:8px;
                                }
                                .doctor-name{
                                    margin-bottom: 2px;
                                    font-size: 14px;
                                }
                                .dot1{
                                    visibility: hidden;
                                    display: none;
                                }
                                .patient-ratings{
                                    color: #7f7f7f;;
                                    font-size: 12px;
                                    position:absolute;
                                    top: 20px;
                                    right:8px;
                                }
                                .consultation{
                                    font-size: min(3.3vw, 14px);
                                    color:#7f7f7f;
                                    margin-bottom: 2px;
                                    position: absolute;
                                    left : -10px;
                                }
                                .fee{
                                    margin-bottom: 2px;
                                    font-size:  min(3.3vw, 14px);
                                    font-weight: 700;
                                    text-align :right;
                                    position: absolute;
                                    left : -10px;
                                    top : 14px;
                                    /* position: relative;
                top:19px;
                left:-86px; */
                                }
                                .experience{
                                    font-weight: 400;
                                    font-size: min(3vw, 12px);
                                    color: #050a4e;
                                    margin-bottom: 2px;
                                }

                            }
                        </style>
                        <div class="card card-body" style="border-radius:12px;">
                            <div class="row">
                                <div class="col-lg-9 col-md-8 col-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-4 text-center">
                                            <div>
                                                <a href="/doctors/profile/dr-jasmeet-singh-id-32606">
                                                    <picture>
                                                        <source type="image/png" srcset="https://docsapp-doctor.s3.us-west-2.amazonaws.com/profile_images/32606.png">
                                                        <img class="round-img-new" srcset="https://docsapp-doctor.s3.us-west-2.amazonaws.com/profile_images/32606.png" >
                                                    </picture>
                                                </a>
                                                <div class ="viewProfile" ><a href="/doctors/profile/dr-jasmeet-singh-id-32606">View Profile</a></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-9 col-md-9 col-sm-8 col-8">
                                            <a href="/doctors/profile/dr-jasmeet-singh-id-32606" style="color:black">
                                                <h3 class="doctor-name"> Dr. Jasmeet Singh </h3>
                                            </a>

                                            <div class="experience"> 11 years of Experience </div>
                                            <div class="experience"> MBBS, MD - DVL </div>

                                            <div class="experience"> Dashmesh Charitable Hospital , Delhi/NCR </div>

                                            <hr class="d3dashed" style = "border: 1px dashed #E0E0E0;">
                                            <span class="row">
                        <div>
                        <p class="doctor-rating">
                        <span class="fa fa-star checked"></span>
                         <span> 4.6</span>  </p><span class="dot1" style=" height: 5px; width: 5px; background-color:  #212529; border-radius: 50%; display: inline-block; margin-left: 6px; margin-top: 10px; margin-right: 4px;">
                        </span>
                        <span class="patient-ratings">  <U class="patient-stories">659 Patient Stories</U> </span>
                    </div>
                    </span>
                                        </div>
                                    </div>
                                </div>
                                <hr class="d4dashed" style = "border: 1px dashed #E0E0E0; width: 100%;">
                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                            <div class="col-lg-12 col-md-12 col-sm-6"> <h3 class="consultation"> Consultation Fee  </h3> </div>
                                            <div class="col-lg-12 col-md-12 col-sm-6"> <div class="fee"> ₹ 299/- </div> </div>
                                        </div>

                                        <div class="lg-col-12 col-md-12 col-sm-6 col-6">
                                            <div class="center-align mob-center">
                                                <button class="button-2 font-14">Consult Now</button>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            $(document).ready(() => {
                                if(detectmob()){
                                    $('.mob-center').css("text-align", "center");
                                } else {
                                    $('.mob-center').css("text-align", "right");
                                }
                            })

                        </script>
                    </div>


                    <div class ="text-center" style ="margin: auto;">
                        <div id="doctorbtn3" class="" onclick="btnHandler2('treat2','doctorbtn2')"><b style="box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.12);color:#1778F2;  border: 2px solid blue ; padding: 10px;
                      border-radius: 25px; " class="border border-primary"> View less <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                                </svg></b></div>
                    </div>

                </div>


                <div class="row" id="qas" style = "margin-top: 20px;">

                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="card card-body">

                                    <p class="font-qas ans"> HealthVirtuCare offers the convenience of online doctor consultations, allowing you to receive medical advice and treatment from the comfort of your own home. At the end of every consultation, we immediately provide an online prescription to help you order medicines.</p>
                                    <h2 class="font-18 qa">
                                        Benefits of Online Doctor Consultation
                                    </h2>
                                    <ul>


                                        <li><p class="font-qas ans"> <b>24X 7 Consultation : </b> Consult a doctor via audio/video anytime. </p></li>

                                        <li><p class="font-qas ans"> <b>Convenience : </b> Access MD-level doctors across 22+ specialties. </p></li>

                                        <li><p class="font-qas ans"> <b>Time-saving : </b> Schedule a doctor&#39;s appointment in under 10 minutes. </p></li>

                                        <li><p class="font-qas ans"> <b>Cost-effective : </b> Book an appointment for just ₹199. </p></li>

                                        <li><p class="font-qas ans"> <b>Flexibility : </b> Connect with a doctor at your convenience. </p></li>

                                        <li><p class="font-qas ans"> <b>Access to thousands of specialists : </b> Over 90,000+ specialist doctors. </p></li>

                                        <li><p class="font-qas ans"> <b>Remote monitoring : </b> Remote monitoring of any chronic condition. </p></li>

                                    </ul>
                                    <h2 class="font-18 qa">
                                        Top Asked Specialities for Online Doctor Consultation
                                    </h2>
                                    <ul style="margin-bottom: 0px;">

                                        <li><p class="font-qas ans"> <b>Dermatology : </b> A specialty that covers hair, nails, and skin disorders with both medical and surgical aspects. </p></li>

                                        <li><p class="font-qas ans"> <b>Sexology : </b> The study of human sexuality, including interests, behaviors, and functions. </p></li>

                                        <li><p class="font-qas ans"> <b>Gynecology : </b> Deals with women&#39;s health issues. </p></li>

                                        <li><p class="font-qas ans"> <b>Otolaryngology (ENT) : </b> Diagnosis and treatment of ear, nose, and throat disorders. </p></li>

                                        <li><p class="font-qas ans"> <b>General Medicine : </b> Diagnosis and non-surgical treatment of internal organ diseases. </p></li>

                                        <li><p class="font-qas ans"> <b>Obstetrics : </b> Care during pre-conception, pregnancy, childbirth, and post-delivery. </p></li>

                                        <li><p class="font-qas ans"> <b>Physical Medicine &amp; Rehabilitation (Physiatry) : </b> Treats injuries, illnesses, and medical conditions related to the brain, spinal cord, nerves, bones, joints, and muscles. </p></li>

                                        <li><p class="font-qas ans"> <b>Neurology : </b> Study and treatment of nervous system disorders. </p></li>

                                    </ul>
                                    <div class ="text-center">
                                        <div id="btn2" class="btn" onclick="btnHandler('treat', 'btn2')"><b style="color:#1778F2;box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.12); background-color: white; border: 2px solid blue ; padding: 10px;
                            border-radius: 25px; " class="border font-13 border-primary"> Read more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                                </svg></b></div>
                                    </div>
                                    <div id ="treat" class ="none">
                                        <ul>

                                            <li><p class="font-qas ans"> <b>Gastroenterology : </b> Focuses on diseases of the esophagus, stomach, small intestine, colon/rectum, pancreas, gallbladder, bile ducts, and liver. </p></li>

                                            <li><p class="font-qas ans"> <b>Reproductive Endocrinology : </b> Diagnosis and treatment of endocrine disorders related to reproduction. </p></li>

                                            <li><p class="font-qas ans"> <b>Orthopedics : </b> Care of muscles, bones, joints, ligaments, and tendons. </p></li>

                                            <li><p class="font-qas ans"> <b>Oncology : </b> Diagnosis and treatment of cancer. </p></li>

                                            <li><p class="font-qas ans"> <b>Diabetology : </b> A specialized medical branch that deals with the diagnosis and treatment of diabetes. </p></li>

                                            <li><p class="font-qas ans"> <b>Pediatrics : </b> A medical specialty for infants, children, and adolescents. </p></li>

                                            <li><p class="font-qas ans"> <b>Cardiology : </b> For diagnosis and treatment of heart-related issues. </p></li>

                                            <li><p class="font-qas ans"> <b>Others : </b> You can consult a doctor online for Hepatology (liver issues), Kidney issues (Nephrology), Ophthalmology, and many other medical specialties. </p></li>

                                        </ul>

                                        <h2 class="font-18 qa"> Is an online doctor consultation as good as an in-person consultation? </h2>
                                        <p class="font-qas ans"> An online doctor consultation has many advantages over an in-person consultation. You can easily avoid the wait time associated with in-person appointments. Additionally, you can take as much time as you need during the consultation without feeling rushed. During your online consultation, you might also be guided to an in-person consultation if needed. </p>

                                        <h2 class="font-18 qa"> What kind of medical issues can be addressed during an online doctor consultation? </h2>
                                        <p class="font-qas ans"> A wide range of medical issues, such as cold, fevers, stomach aches, allergies, women&#39;s issues, mental health issues, and many more, can be addressed through an online doctor consultation </p>

                                        <h2 class="font-18 qa"> Do I need any special equipment or software for an online doctor consultation? </h2>
                                        <p class="font-qas ans"> All you need for an online doctor consultation is a working mobile phone. If you don&#39;t have a phone with a camera, you can opt for an audio call instead. </p>

                                        <h2 class="font-18 qa"> Can I receive a prescription from an online doctor? </h2>
                                        <p class="font-qas ans"> After the end of the call, the doctor will share your prescription. You can also order medicines through HealthVirtuCare by simply uploading the prescription. </p>

                                        <div class ="text-center">
                                            <a id="btn3" onclick="scrollSmoothTo('qas')">
                                                <div  class="btn" onclick="btnHandler2('treat','btn2')"><b style="background-color: white; box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.12);color:#1778F2;  border: 2px solid blue ; padding: 10px;
                            border-radius: 25px; " class="border font-13 border-primary"> Read less <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                                                        </svg> </b></div>
                                            </a>
                                        </div>

                                    </div>
                                    <!-- <button type="button" class="btn btn-outline-primary">Primary</button> -->
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12 col-md-12 col-12">
                        <br>
                        <h2 style="font-size:24px; font-weight:700;text-align:center; color:#050A4E;">Frequently Asked Questions</h2>
                        <div class="row">
                            <div class="col-lg-6 col-12">

                                <button class="accordion faq-acc" >
                                    <div class="row">
                                        <div class="col-2">
                                            <svg  style="margin: -6px -6px;" width="83" height="77" viewBox="0 0 83 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_847_2616)">
                                                    <g clip-path="url(#clip0_847_2616)">
                                                        <path opacity="0.3" d="M-1.65733 80.7703C-13.0773 72.9368 -22.9511 63.06 -30.7811 51.6375C-34.0891 48.2505 -35.9592 43.7153 -35.9999 38.981C-36.0062 36.6316 -35.5483 34.3042 -34.6527 32.1322C-33.7571 29.9603 -32.4414 27.9866 -30.7811 26.3244C-22.4249 15.3588 -12.6288 5.56954 -1.65733 -2.7789C1.72894 -6.08833 6.26429 -7.95927 10.999 -7.99993C13.3485 -8.00633 15.6761 -7.54839 17.8481 -6.6524C20.0201 -5.7564 21.9936 -4.44001 23.6552 -2.7789C34.4744 5.74964 44.2498 15.5246 52.779 26.3433C56.0883 29.7297 57.9593 34.2651 57.9999 38.9999C58.0058 41.3494 57.5475 43.6769 56.6516 45.8488C55.7556 48.0208 54.4396 49.9944 52.779 51.6564C44.2579 62.483 34.4816 72.2596 23.6552 80.7808C21.499 82.898 18.8554 84.4528 15.9572 85.3085C14.3464 85.7764 12.6764 86.0092 10.999 85.9997C8.89188 85.9518 6.80849 85.5439 4.83888 84.7937C2.43248 83.8877 0.225895 82.521 -1.65733 80.7703Z" fill="url(#paint0_linear_847_2616)"/>
                                                        <path d="M52 56.8098C61.3888 56.8098 69 49.0174 69 39.4049C69 29.7924 61.3888 22 52 22C42.6112 22 35 29.7924 35 39.4049C35 49.0174 42.6112 56.8098 52 56.8098Z" fill="white"/>
                                                        <path d="M52.0013 56.4469C61.1945 56.4469 68.6471 48.8168 68.6471 39.4046C68.6471 29.9924 61.1945 22.3623 52.0013 22.3623C42.8081 22.3623 35.3555 29.9924 35.3555 39.4046C35.3555 48.8168 42.8081 56.4469 52.0013 56.4469Z" stroke="#2D2D2D" stroke-width="0.659574"/>
                                                        <path d="M51.7785 42.6614C51.6098 42.6698 51.4415 42.6384 51.2866 42.5694C51.1317 42.5005 50.9944 42.396 50.8853 42.264C50.6574 41.9614 50.5426 41.5854 50.5616 41.2038C50.5348 40.4235 50.6994 39.6489 51.0404 38.9506C51.4385 38.2361 51.9116 37.5684 52.4514 36.9592C52.8274 36.5329 53.1695 36.0765 53.4742 35.5943C53.6926 35.2224 53.8047 34.7953 53.7979 34.3615C53.8053 34.137 53.7612 33.9139 53.669 33.7101C53.5769 33.5064 53.4393 33.3275 53.2674 33.1881C52.8518 32.8774 52.344 32.7237 51.8302 32.753C51.2979 32.7484 50.7715 32.8661 50.2896 33.0974C49.815 33.3237 49.1808 33.6754 48.387 34.1526C48.0124 34.3947 47.5861 34.5403 47.1446 34.5769C46.964 34.5761 46.7863 34.5313 46.6261 34.446C46.4659 34.3607 46.328 34.2375 46.2237 34.0866C45.9701 33.7493 45.8375 33.333 45.8483 32.9074C45.8407 32.6283 45.899 32.3514 46.0183 32.1003C46.1499 31.8564 46.3307 31.644 46.5489 31.4773C47.3363 30.8434 48.2256 30.3545 49.1768 30.0327C50.1391 29.6932 51.1495 29.5185 52.1674 29.5157C53.1587 29.4986 54.1423 29.6964 55.0538 30.0958C55.8478 30.4357 56.5367 30.9899 57.0471 31.6993C57.5175 32.3661 57.767 33.1697 57.7589 33.9923C57.7666 34.61 57.6383 35.2215 57.3835 35.7814C57.1522 36.2906 56.8515 36.7636 56.4903 37.1861C56.1451 37.5836 55.679 38.074 55.0921 38.6576C54.5657 39.1388 54.0727 39.6569 53.6166 40.2081C53.295 40.6092 53.0809 41.089 52.9954 41.6005C52.9451 41.9031 52.7951 42.179 52.5704 42.3822C52.3484 42.5708 52.0668 42.67 51.7785 42.6614ZM51.8302 48.5987C51.5371 48.6079 51.2453 48.5546 50.9734 48.4422C50.7015 48.3299 50.4554 48.1609 50.2506 47.946C50.046 47.7313 49.8856 47.4767 49.7791 47.1972C49.6727 46.9178 49.6222 46.6192 49.6308 46.3194C49.6219 46.0188 49.6724 45.7195 49.7791 45.4394C49.8858 45.1593 50.0467 44.9041 50.252 44.6891C50.4568 44.4742 50.7029 44.3053 50.9748 44.1929C51.2468 44.0805 51.5385 44.0273 51.8316 44.0364C52.1206 44.0291 52.4079 44.0833 52.6753 44.1956C52.9427 44.308 53.1844 44.476 53.385 44.6891C53.5903 44.9041 53.7512 45.1593 53.8579 45.4394C53.9646 45.7195 54.0151 46.0188 54.0062 46.3194C54.0151 46.6199 53.9646 46.9192 53.8579 47.1993C53.7512 47.4795 53.5903 47.7346 53.385 47.9496C53.1839 48.1622 52.9419 48.3297 52.6742 48.4415C52.4066 48.5532 52.1191 48.6067 51.8302 48.5987Z" fill="#86BCFF" stroke="#2D2D2D" stroke-width="0.659574"/>
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_847_2616" x="0" y="0" width="89" height="77" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                                        <feOffset/>
                                                        <feGaussianBlur stdDeviation="3"/>
                                                        <feComposite in2="hardAlpha" operator="out"/>
                                                        <feColorMatrix type="matrix" values="0 0 0 0 0.172549 0 0 0 0 0.172549 0 0 0 0 0.172549 0 0 0 0.1 0"/>
                                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_847_2616"/>
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_847_2616" result="shape"/>
                                                    </filter>
                                                    <linearGradient id="paint0_linear_847_2616" x1="11" y1="-8" x2="11" y2="86" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#C7DCFF"/>
                                                        <stop offset="1" stop-color="#FFABAF"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_847_2616">
                                                        <rect x="6" y="6" width="77" height="65" rx="12" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="col" style="display:table;">
                                            <h3 class="faq-q faq-text" style=" display:table-cell; vertical-align:middle;">
                                                How do I schedule an online consultation with a doctor?
                                            </h3>
                                        </div>
                                        <div class="col-1" style="display:table; padding-left: 0px;">
                                <span class="faq-q" style=" display:table-cell; vertical-align:middle;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                      </svg>
                                </span>
                                        </div>
                                    </div>
                                </button>
                                <div id="collapseOne0" class="faq-a">
                                    <div>
                                        You can schedule an online consultation with a doctor by signing up for the HealthVirtuCare website.
                                    </div>
                                </div>

                                <button class="accordion faq-acc" >
                                    <div class="row">
                                        <div class="col-2">
                                            <svg  style="margin: -6px -6px;" width="83" height="77" viewBox="0 0 83 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_847_2616)">
                                                    <g clip-path="url(#clip0_847_2616)">
                                                        <path opacity="0.3" d="M-1.65733 80.7703C-13.0773 72.9368 -22.9511 63.06 -30.7811 51.6375C-34.0891 48.2505 -35.9592 43.7153 -35.9999 38.981C-36.0062 36.6316 -35.5483 34.3042 -34.6527 32.1322C-33.7571 29.9603 -32.4414 27.9866 -30.7811 26.3244C-22.4249 15.3588 -12.6288 5.56954 -1.65733 -2.7789C1.72894 -6.08833 6.26429 -7.95927 10.999 -7.99993C13.3485 -8.00633 15.6761 -7.54839 17.8481 -6.6524C20.0201 -5.7564 21.9936 -4.44001 23.6552 -2.7789C34.4744 5.74964 44.2498 15.5246 52.779 26.3433C56.0883 29.7297 57.9593 34.2651 57.9999 38.9999C58.0058 41.3494 57.5475 43.6769 56.6516 45.8488C55.7556 48.0208 54.4396 49.9944 52.779 51.6564C44.2579 62.483 34.4816 72.2596 23.6552 80.7808C21.499 82.898 18.8554 84.4528 15.9572 85.3085C14.3464 85.7764 12.6764 86.0092 10.999 85.9997C8.89188 85.9518 6.80849 85.5439 4.83888 84.7937C2.43248 83.8877 0.225895 82.521 -1.65733 80.7703Z" fill="url(#paint0_linear_847_2616)"/>
                                                        <path d="M52 56.8098C61.3888 56.8098 69 49.0174 69 39.4049C69 29.7924 61.3888 22 52 22C42.6112 22 35 29.7924 35 39.4049C35 49.0174 42.6112 56.8098 52 56.8098Z" fill="white"/>
                                                        <path d="M52.0013 56.4469C61.1945 56.4469 68.6471 48.8168 68.6471 39.4046C68.6471 29.9924 61.1945 22.3623 52.0013 22.3623C42.8081 22.3623 35.3555 29.9924 35.3555 39.4046C35.3555 48.8168 42.8081 56.4469 52.0013 56.4469Z" stroke="#2D2D2D" stroke-width="0.659574"/>
                                                        <path d="M51.7785 42.6614C51.6098 42.6698 51.4415 42.6384 51.2866 42.5694C51.1317 42.5005 50.9944 42.396 50.8853 42.264C50.6574 41.9614 50.5426 41.5854 50.5616 41.2038C50.5348 40.4235 50.6994 39.6489 51.0404 38.9506C51.4385 38.2361 51.9116 37.5684 52.4514 36.9592C52.8274 36.5329 53.1695 36.0765 53.4742 35.5943C53.6926 35.2224 53.8047 34.7953 53.7979 34.3615C53.8053 34.137 53.7612 33.9139 53.669 33.7101C53.5769 33.5064 53.4393 33.3275 53.2674 33.1881C52.8518 32.8774 52.344 32.7237 51.8302 32.753C51.2979 32.7484 50.7715 32.8661 50.2896 33.0974C49.815 33.3237 49.1808 33.6754 48.387 34.1526C48.0124 34.3947 47.5861 34.5403 47.1446 34.5769C46.964 34.5761 46.7863 34.5313 46.6261 34.446C46.4659 34.3607 46.328 34.2375 46.2237 34.0866C45.9701 33.7493 45.8375 33.333 45.8483 32.9074C45.8407 32.6283 45.899 32.3514 46.0183 32.1003C46.1499 31.8564 46.3307 31.644 46.5489 31.4773C47.3363 30.8434 48.2256 30.3545 49.1768 30.0327C50.1391 29.6932 51.1495 29.5185 52.1674 29.5157C53.1587 29.4986 54.1423 29.6964 55.0538 30.0958C55.8478 30.4357 56.5367 30.9899 57.0471 31.6993C57.5175 32.3661 57.767 33.1697 57.7589 33.9923C57.7666 34.61 57.6383 35.2215 57.3835 35.7814C57.1522 36.2906 56.8515 36.7636 56.4903 37.1861C56.1451 37.5836 55.679 38.074 55.0921 38.6576C54.5657 39.1388 54.0727 39.6569 53.6166 40.2081C53.295 40.6092 53.0809 41.089 52.9954 41.6005C52.9451 41.9031 52.7951 42.179 52.5704 42.3822C52.3484 42.5708 52.0668 42.67 51.7785 42.6614ZM51.8302 48.5987C51.5371 48.6079 51.2453 48.5546 50.9734 48.4422C50.7015 48.3299 50.4554 48.1609 50.2506 47.946C50.046 47.7313 49.8856 47.4767 49.7791 47.1972C49.6727 46.9178 49.6222 46.6192 49.6308 46.3194C49.6219 46.0188 49.6724 45.7195 49.7791 45.4394C49.8858 45.1593 50.0467 44.9041 50.252 44.6891C50.4568 44.4742 50.7029 44.3053 50.9748 44.1929C51.2468 44.0805 51.5385 44.0273 51.8316 44.0364C52.1206 44.0291 52.4079 44.0833 52.6753 44.1956C52.9427 44.308 53.1844 44.476 53.385 44.6891C53.5903 44.9041 53.7512 45.1593 53.8579 45.4394C53.9646 45.7195 54.0151 46.0188 54.0062 46.3194C54.0151 46.6199 53.9646 46.9192 53.8579 47.1993C53.7512 47.4795 53.5903 47.7346 53.385 47.9496C53.1839 48.1622 52.9419 48.3297 52.6742 48.4415C52.4066 48.5532 52.1191 48.6067 51.8302 48.5987Z" fill="#86BCFF" stroke="#2D2D2D" stroke-width="0.659574"/>
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_847_2616" x="0" y="0" width="89" height="77" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                                        <feOffset/>
                                                        <feGaussianBlur stdDeviation="3"/>
                                                        <feComposite in2="hardAlpha" operator="out"/>
                                                        <feColorMatrix type="matrix" values="0 0 0 0 0.172549 0 0 0 0 0.172549 0 0 0 0 0.172549 0 0 0 0.1 0"/>
                                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_847_2616"/>
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_847_2616" result="shape"/>
                                                    </filter>
                                                    <linearGradient id="paint0_linear_847_2616" x1="11" y1="-8" x2="11" y2="86" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#C7DCFF"/>
                                                        <stop offset="1" stop-color="#FFABAF"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_847_2616">
                                                        <rect x="6" y="6" width="77" height="65" rx="12" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="col" style="display:table;">
                                            <h3 class="faq-q faq-text" style=" display:table-cell; vertical-align:middle;">
                                                Can we Get 24/7 Consultancy?
                                            </h3>
                                        </div>
                                        <div class="col-1" style="display:table; padding-left: 0px;">
                                <span class="faq-q" style=" display:table-cell; vertical-align:middle;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                      </svg>
                                </span>
                                        </div>
                                    </div>
                                </button>
                                <div id="collapseOne1" class="faq-a">
                                    yes the doctor will provide you 24/7 with services.
                                </div>

                                <button class="accordion faq-acc" >
                                    <div class="row">
                                        <div class="col-2">
                                            <svg  style="margin: -6px -6px;" width="83" height="77" viewBox="0 0 83 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_847_2616)">
                                                    <g clip-path="url(#clip0_847_2616)">
                                                        <path opacity="0.3" d="M-1.65733 80.7703C-13.0773 72.9368 -22.9511 63.06 -30.7811 51.6375C-34.0891 48.2505 -35.9592 43.7153 -35.9999 38.981C-36.0062 36.6316 -35.5483 34.3042 -34.6527 32.1322C-33.7571 29.9603 -32.4414 27.9866 -30.7811 26.3244C-22.4249 15.3588 -12.6288 5.56954 -1.65733 -2.7789C1.72894 -6.08833 6.26429 -7.95927 10.999 -7.99993C13.3485 -8.00633 15.6761 -7.54839 17.8481 -6.6524C20.0201 -5.7564 21.9936 -4.44001 23.6552 -2.7789C34.4744 5.74964 44.2498 15.5246 52.779 26.3433C56.0883 29.7297 57.9593 34.2651 57.9999 38.9999C58.0058 41.3494 57.5475 43.6769 56.6516 45.8488C55.7556 48.0208 54.4396 49.9944 52.779 51.6564C44.2579 62.483 34.4816 72.2596 23.6552 80.7808C21.499 82.898 18.8554 84.4528 15.9572 85.3085C14.3464 85.7764 12.6764 86.0092 10.999 85.9997C8.89188 85.9518 6.80849 85.5439 4.83888 84.7937C2.43248 83.8877 0.225895 82.521 -1.65733 80.7703Z" fill="url(#paint0_linear_847_2616)"/>
                                                        <path d="M52 56.8098C61.3888 56.8098 69 49.0174 69 39.4049C69 29.7924 61.3888 22 52 22C42.6112 22 35 29.7924 35 39.4049C35 49.0174 42.6112 56.8098 52 56.8098Z" fill="white"/>
                                                        <path d="M52.0013 56.4469C61.1945 56.4469 68.6471 48.8168 68.6471 39.4046C68.6471 29.9924 61.1945 22.3623 52.0013 22.3623C42.8081 22.3623 35.3555 29.9924 35.3555 39.4046C35.3555 48.8168 42.8081 56.4469 52.0013 56.4469Z" stroke="#2D2D2D" stroke-width="0.659574"/>
                                                        <path d="M51.7785 42.6614C51.6098 42.6698 51.4415 42.6384 51.2866 42.5694C51.1317 42.5005 50.9944 42.396 50.8853 42.264C50.6574 41.9614 50.5426 41.5854 50.5616 41.2038C50.5348 40.4235 50.6994 39.6489 51.0404 38.9506C51.4385 38.2361 51.9116 37.5684 52.4514 36.9592C52.8274 36.5329 53.1695 36.0765 53.4742 35.5943C53.6926 35.2224 53.8047 34.7953 53.7979 34.3615C53.8053 34.137 53.7612 33.9139 53.669 33.7101C53.5769 33.5064 53.4393 33.3275 53.2674 33.1881C52.8518 32.8774 52.344 32.7237 51.8302 32.753C51.2979 32.7484 50.7715 32.8661 50.2896 33.0974C49.815 33.3237 49.1808 33.6754 48.387 34.1526C48.0124 34.3947 47.5861 34.5403 47.1446 34.5769C46.964 34.5761 46.7863 34.5313 46.6261 34.446C46.4659 34.3607 46.328 34.2375 46.2237 34.0866C45.9701 33.7493 45.8375 33.333 45.8483 32.9074C45.8407 32.6283 45.899 32.3514 46.0183 32.1003C46.1499 31.8564 46.3307 31.644 46.5489 31.4773C47.3363 30.8434 48.2256 30.3545 49.1768 30.0327C50.1391 29.6932 51.1495 29.5185 52.1674 29.5157C53.1587 29.4986 54.1423 29.6964 55.0538 30.0958C55.8478 30.4357 56.5367 30.9899 57.0471 31.6993C57.5175 32.3661 57.767 33.1697 57.7589 33.9923C57.7666 34.61 57.6383 35.2215 57.3835 35.7814C57.1522 36.2906 56.8515 36.7636 56.4903 37.1861C56.1451 37.5836 55.679 38.074 55.0921 38.6576C54.5657 39.1388 54.0727 39.6569 53.6166 40.2081C53.295 40.6092 53.0809 41.089 52.9954 41.6005C52.9451 41.9031 52.7951 42.179 52.5704 42.3822C52.3484 42.5708 52.0668 42.67 51.7785 42.6614ZM51.8302 48.5987C51.5371 48.6079 51.2453 48.5546 50.9734 48.4422C50.7015 48.3299 50.4554 48.1609 50.2506 47.946C50.046 47.7313 49.8856 47.4767 49.7791 47.1972C49.6727 46.9178 49.6222 46.6192 49.6308 46.3194C49.6219 46.0188 49.6724 45.7195 49.7791 45.4394C49.8858 45.1593 50.0467 44.9041 50.252 44.6891C50.4568 44.4742 50.7029 44.3053 50.9748 44.1929C51.2468 44.0805 51.5385 44.0273 51.8316 44.0364C52.1206 44.0291 52.4079 44.0833 52.6753 44.1956C52.9427 44.308 53.1844 44.476 53.385 44.6891C53.5903 44.9041 53.7512 45.1593 53.8579 45.4394C53.9646 45.7195 54.0151 46.0188 54.0062 46.3194C54.0151 46.6199 53.9646 46.9192 53.8579 47.1993C53.7512 47.4795 53.5903 47.7346 53.385 47.9496C53.1839 48.1622 52.9419 48.3297 52.6742 48.4415C52.4066 48.5532 52.1191 48.6067 51.8302 48.5987Z" fill="#86BCFF" stroke="#2D2D2D" stroke-width="0.659574"/>
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_847_2616" x="0" y="0" width="89" height="77" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                                        <feOffset/>
                                                        <feGaussianBlur stdDeviation="3"/>
                                                        <feComposite in2="hardAlpha" operator="out"/>
                                                        <feColorMatrix type="matrix" values="0 0 0 0 0.172549 0 0 0 0 0.172549 0 0 0 0 0.172549 0 0 0 0.1 0"/>
                                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_847_2616"/>
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_847_2616" result="shape"/>
                                                    </filter>
                                                    <linearGradient id="paint0_linear_847_2616" x1="11" y1="-8" x2="11" y2="86" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#C7DCFF"/>
                                                        <stop offset="1" stop-color="#FFABAF"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_847_2616">
                                                        <rect x="6" y="6" width="77" height="65" rx="12" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="col" style="display:table;">
                                            <h3 class="faq-q faq-text" style=" display:table-cell; vertical-align:middle;">
                                                Why choose HealthVirtuCare for an online doctor consultation?
                                            </h3>
                                        </div>
                                        <div class="col-1" style="display:table; padding-left: 0px;">
                                <span class="faq-q" style=" display:table-cell; vertical-align:middle;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                      </svg>
                                </span>
                                        </div>
                                    </div>
                                </button>
                                <div id="collapseOne2" class="faq-a">
                                </div>

                                <button class="accordion faq-acc" >
                                    <div class="row">
                                        <div class="col-2">
                                            <svg  style="margin: -6px -6px;" width="83" height="77" viewBox="0 0 83 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_847_2616)">
                                                    <g clip-path="url(#clip0_847_2616)">
                                                        <path opacity="0.3" d="M-1.65733 80.7703C-13.0773 72.9368 -22.9511 63.06 -30.7811 51.6375C-34.0891 48.2505 -35.9592 43.7153 -35.9999 38.981C-36.0062 36.6316 -35.5483 34.3042 -34.6527 32.1322C-33.7571 29.9603 -32.4414 27.9866 -30.7811 26.3244C-22.4249 15.3588 -12.6288 5.56954 -1.65733 -2.7789C1.72894 -6.08833 6.26429 -7.95927 10.999 -7.99993C13.3485 -8.00633 15.6761 -7.54839 17.8481 -6.6524C20.0201 -5.7564 21.9936 -4.44001 23.6552 -2.7789C34.4744 5.74964 44.2498 15.5246 52.779 26.3433C56.0883 29.7297 57.9593 34.2651 57.9999 38.9999C58.0058 41.3494 57.5475 43.6769 56.6516 45.8488C55.7556 48.0208 54.4396 49.9944 52.779 51.6564C44.2579 62.483 34.4816 72.2596 23.6552 80.7808C21.499 82.898 18.8554 84.4528 15.9572 85.3085C14.3464 85.7764 12.6764 86.0092 10.999 85.9997C8.89188 85.9518 6.80849 85.5439 4.83888 84.7937C2.43248 83.8877 0.225895 82.521 -1.65733 80.7703Z" fill="url(#paint0_linear_847_2616)"/>
                                                        <path d="M52 56.8098C61.3888 56.8098 69 49.0174 69 39.4049C69 29.7924 61.3888 22 52 22C42.6112 22 35 29.7924 35 39.4049C35 49.0174 42.6112 56.8098 52 56.8098Z" fill="white"/>
                                                        <path d="M52.0013 56.4469C61.1945 56.4469 68.6471 48.8168 68.6471 39.4046C68.6471 29.9924 61.1945 22.3623 52.0013 22.3623C42.8081 22.3623 35.3555 29.9924 35.3555 39.4046C35.3555 48.8168 42.8081 56.4469 52.0013 56.4469Z" stroke="#2D2D2D" stroke-width="0.659574"/>
                                                        <path d="M51.7785 42.6614C51.6098 42.6698 51.4415 42.6384 51.2866 42.5694C51.1317 42.5005 50.9944 42.396 50.8853 42.264C50.6574 41.9614 50.5426 41.5854 50.5616 41.2038C50.5348 40.4235 50.6994 39.6489 51.0404 38.9506C51.4385 38.2361 51.9116 37.5684 52.4514 36.9592C52.8274 36.5329 53.1695 36.0765 53.4742 35.5943C53.6926 35.2224 53.8047 34.7953 53.7979 34.3615C53.8053 34.137 53.7612 33.9139 53.669 33.7101C53.5769 33.5064 53.4393 33.3275 53.2674 33.1881C52.8518 32.8774 52.344 32.7237 51.8302 32.753C51.2979 32.7484 50.7715 32.8661 50.2896 33.0974C49.815 33.3237 49.1808 33.6754 48.387 34.1526C48.0124 34.3947 47.5861 34.5403 47.1446 34.5769C46.964 34.5761 46.7863 34.5313 46.6261 34.446C46.4659 34.3607 46.328 34.2375 46.2237 34.0866C45.9701 33.7493 45.8375 33.333 45.8483 32.9074C45.8407 32.6283 45.899 32.3514 46.0183 32.1003C46.1499 31.8564 46.3307 31.644 46.5489 31.4773C47.3363 30.8434 48.2256 30.3545 49.1768 30.0327C50.1391 29.6932 51.1495 29.5185 52.1674 29.5157C53.1587 29.4986 54.1423 29.6964 55.0538 30.0958C55.8478 30.4357 56.5367 30.9899 57.0471 31.6993C57.5175 32.3661 57.767 33.1697 57.7589 33.9923C57.7666 34.61 57.6383 35.2215 57.3835 35.7814C57.1522 36.2906 56.8515 36.7636 56.4903 37.1861C56.1451 37.5836 55.679 38.074 55.0921 38.6576C54.5657 39.1388 54.0727 39.6569 53.6166 40.2081C53.295 40.6092 53.0809 41.089 52.9954 41.6005C52.9451 41.9031 52.7951 42.179 52.5704 42.3822C52.3484 42.5708 52.0668 42.67 51.7785 42.6614ZM51.8302 48.5987C51.5371 48.6079 51.2453 48.5546 50.9734 48.4422C50.7015 48.3299 50.4554 48.1609 50.2506 47.946C50.046 47.7313 49.8856 47.4767 49.7791 47.1972C49.6727 46.9178 49.6222 46.6192 49.6308 46.3194C49.6219 46.0188 49.6724 45.7195 49.7791 45.4394C49.8858 45.1593 50.0467 44.9041 50.252 44.6891C50.4568 44.4742 50.7029 44.3053 50.9748 44.1929C51.2468 44.0805 51.5385 44.0273 51.8316 44.0364C52.1206 44.0291 52.4079 44.0833 52.6753 44.1956C52.9427 44.308 53.1844 44.476 53.385 44.6891C53.5903 44.9041 53.7512 45.1593 53.8579 45.4394C53.9646 45.7195 54.0151 46.0188 54.0062 46.3194C54.0151 46.6199 53.9646 46.9192 53.8579 47.1993C53.7512 47.4795 53.5903 47.7346 53.385 47.9496C53.1839 48.1622 52.9419 48.3297 52.6742 48.4415C52.4066 48.5532 52.1191 48.6067 51.8302 48.5987Z" fill="#86BCFF" stroke="#2D2D2D" stroke-width="0.659574"/>
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_847_2616" x="0" y="0" width="89" height="77" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                                        <feOffset/>
                                                        <feGaussianBlur stdDeviation="3"/>
                                                        <feComposite in2="hardAlpha" operator="out"/>
                                                        <feColorMatrix type="matrix" values="0 0 0 0 0.172549 0 0 0 0 0.172549 0 0 0 0 0.172549 0 0 0 0.1 0"/>
                                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_847_2616"/>
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_847_2616" result="shape"/>
                                                    </filter>
                                                    <linearGradient id="paint0_linear_847_2616" x1="11" y1="-8" x2="11" y2="86" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#C7DCFF"/>
                                                        <stop offset="1" stop-color="#FFABAF"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_847_2616">
                                                        <rect x="6" y="6" width="77" height="65" rx="12" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="col" style="display:table;">
                                            <h3 class="faq-q faq-text" style=" display:table-cell; vertical-align:middle;">
                                                How do I pay for an online consultation?
                                            </h3>
                                        </div>
                                        <div class="col-1" style="display:table; padding-left: 0px;">
                                <span class="faq-q" style=" display:table-cell; vertical-align:middle;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                      </svg>
                                </span>
                                        </div>
                                    </div>
                                </button>
                                <div id="collapseOne3" class="faq-a">
                                    <div>
                                        Payments for the consultation can be made online.
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 col-12">

                                <!--  -->

                                <!--  -->

                                <button class="accordion faq-acc" >
                                    <div class="row">
                                        <div class="col-2">
                                            <svg  style="margin: -6px -6px;" width="83" height="77" viewBox="0 0 83 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_847_2616)">
                                                    <g clip-path="url(#clip0_847_2616)">
                                                        <path opacity="0.3" d="M-1.65733 80.7703C-13.0773 72.9368 -22.9511 63.06 -30.7811 51.6375C-34.0891 48.2505 -35.9592 43.7153 -35.9999 38.981C-36.0062 36.6316 -35.5483 34.3042 -34.6527 32.1322C-33.7571 29.9603 -32.4414 27.9866 -30.7811 26.3244C-22.4249 15.3588 -12.6288 5.56954 -1.65733 -2.7789C1.72894 -6.08833 6.26429 -7.95927 10.999 -7.99993C13.3485 -8.00633 15.6761 -7.54839 17.8481 -6.6524C20.0201 -5.7564 21.9936 -4.44001 23.6552 -2.7789C34.4744 5.74964 44.2498 15.5246 52.779 26.3433C56.0883 29.7297 57.9593 34.2651 57.9999 38.9999C58.0058 41.3494 57.5475 43.6769 56.6516 45.8488C55.7556 48.0208 54.4396 49.9944 52.779 51.6564C44.2579 62.483 34.4816 72.2596 23.6552 80.7808C21.499 82.898 18.8554 84.4528 15.9572 85.3085C14.3464 85.7764 12.6764 86.0092 10.999 85.9997C8.89188 85.9518 6.80849 85.5439 4.83888 84.7937C2.43248 83.8877 0.225895 82.521 -1.65733 80.7703Z" fill="url(#paint0_linear_847_2616)"/>
                                                        <path d="M52 56.8098C61.3888 56.8098 69 49.0174 69 39.4049C69 29.7924 61.3888 22 52 22C42.6112 22 35 29.7924 35 39.4049C35 49.0174 42.6112 56.8098 52 56.8098Z" fill="white"/>
                                                        <path d="M52.0013 56.4469C61.1945 56.4469 68.6471 48.8168 68.6471 39.4046C68.6471 29.9924 61.1945 22.3623 52.0013 22.3623C42.8081 22.3623 35.3555 29.9924 35.3555 39.4046C35.3555 48.8168 42.8081 56.4469 52.0013 56.4469Z" stroke="#2D2D2D" stroke-width="0.659574"/>
                                                        <path d="M51.7785 42.6614C51.6098 42.6698 51.4415 42.6384 51.2866 42.5694C51.1317 42.5005 50.9944 42.396 50.8853 42.264C50.6574 41.9614 50.5426 41.5854 50.5616 41.2038C50.5348 40.4235 50.6994 39.6489 51.0404 38.9506C51.4385 38.2361 51.9116 37.5684 52.4514 36.9592C52.8274 36.5329 53.1695 36.0765 53.4742 35.5943C53.6926 35.2224 53.8047 34.7953 53.7979 34.3615C53.8053 34.137 53.7612 33.9139 53.669 33.7101C53.5769 33.5064 53.4393 33.3275 53.2674 33.1881C52.8518 32.8774 52.344 32.7237 51.8302 32.753C51.2979 32.7484 50.7715 32.8661 50.2896 33.0974C49.815 33.3237 49.1808 33.6754 48.387 34.1526C48.0124 34.3947 47.5861 34.5403 47.1446 34.5769C46.964 34.5761 46.7863 34.5313 46.6261 34.446C46.4659 34.3607 46.328 34.2375 46.2237 34.0866C45.9701 33.7493 45.8375 33.333 45.8483 32.9074C45.8407 32.6283 45.899 32.3514 46.0183 32.1003C46.1499 31.8564 46.3307 31.644 46.5489 31.4773C47.3363 30.8434 48.2256 30.3545 49.1768 30.0327C50.1391 29.6932 51.1495 29.5185 52.1674 29.5157C53.1587 29.4986 54.1423 29.6964 55.0538 30.0958C55.8478 30.4357 56.5367 30.9899 57.0471 31.6993C57.5175 32.3661 57.767 33.1697 57.7589 33.9923C57.7666 34.61 57.6383 35.2215 57.3835 35.7814C57.1522 36.2906 56.8515 36.7636 56.4903 37.1861C56.1451 37.5836 55.679 38.074 55.0921 38.6576C54.5657 39.1388 54.0727 39.6569 53.6166 40.2081C53.295 40.6092 53.0809 41.089 52.9954 41.6005C52.9451 41.9031 52.7951 42.179 52.5704 42.3822C52.3484 42.5708 52.0668 42.67 51.7785 42.6614ZM51.8302 48.5987C51.5371 48.6079 51.2453 48.5546 50.9734 48.4422C50.7015 48.3299 50.4554 48.1609 50.2506 47.946C50.046 47.7313 49.8856 47.4767 49.7791 47.1972C49.6727 46.9178 49.6222 46.6192 49.6308 46.3194C49.6219 46.0188 49.6724 45.7195 49.7791 45.4394C49.8858 45.1593 50.0467 44.9041 50.252 44.6891C50.4568 44.4742 50.7029 44.3053 50.9748 44.1929C51.2468 44.0805 51.5385 44.0273 51.8316 44.0364C52.1206 44.0291 52.4079 44.0833 52.6753 44.1956C52.9427 44.308 53.1844 44.476 53.385 44.6891C53.5903 44.9041 53.7512 45.1593 53.8579 45.4394C53.9646 45.7195 54.0151 46.0188 54.0062 46.3194C54.0151 46.6199 53.9646 46.9192 53.8579 47.1993C53.7512 47.4795 53.5903 47.7346 53.385 47.9496C53.1839 48.1622 52.9419 48.3297 52.6742 48.4415C52.4066 48.5532 52.1191 48.6067 51.8302 48.5987Z" fill="#86BCFF" stroke="#2D2D2D" stroke-width="0.659574"/>
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_847_2616" x="0" y="0" width="89" height="77" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                                        <feOffset/>
                                                        <feGaussianBlur stdDeviation="3"/>
                                                        <feComposite in2="hardAlpha" operator="out"/>
                                                        <feColorMatrix type="matrix" values="0 0 0 0 0.172549 0 0 0 0 0.172549 0 0 0 0 0.172549 0 0 0 0.1 0"/>
                                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_847_2616"/>
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_847_2616" result="shape"/>
                                                    </filter>
                                                    <linearGradient id="paint0_linear_847_2616" x1="11" y1="-8" x2="11" y2="86" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#C7DCFF"/>
                                                        <stop offset="1" stop-color="#FFABAF"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_847_2616">
                                                        <rect x="6" y="6" width="77" height="65" rx="12" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="col" style="display:table;">
                                            <h3 class="faq-q faq-text" style="display:table-cell; vertical-align:middle;">
                                                How long does an online consultation typically last?
                                            </h3>
                                        </div>
                                        <div class="col-1" style="display:table; padding-left: 0px;">
                                <span class="faq-q" style=" display:table-cell; vertical-align:middle;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                      </svg>
                                </span>
                                        </div>
                                    </div>
                                </button>
                                <div id="collapseOne4" class="faq-a">
                                    <p>
                                        The duration of an online consultation may vary according to your symptoms.
                                    </p>
                                </div>

                                <!--  -->

                                <button class="accordion faq-acc" >
                                    <div class="row">
                                        <div class="col-2">
                                            <svg  style="margin: -6px -6px;" width="83" height="77" viewBox="0 0 83 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_847_2616)">
                                                    <g clip-path="url(#clip0_847_2616)">
                                                        <path opacity="0.3" d="M-1.65733 80.7703C-13.0773 72.9368 -22.9511 63.06 -30.7811 51.6375C-34.0891 48.2505 -35.9592 43.7153 -35.9999 38.981C-36.0062 36.6316 -35.5483 34.3042 -34.6527 32.1322C-33.7571 29.9603 -32.4414 27.9866 -30.7811 26.3244C-22.4249 15.3588 -12.6288 5.56954 -1.65733 -2.7789C1.72894 -6.08833 6.26429 -7.95927 10.999 -7.99993C13.3485 -8.00633 15.6761 -7.54839 17.8481 -6.6524C20.0201 -5.7564 21.9936 -4.44001 23.6552 -2.7789C34.4744 5.74964 44.2498 15.5246 52.779 26.3433C56.0883 29.7297 57.9593 34.2651 57.9999 38.9999C58.0058 41.3494 57.5475 43.6769 56.6516 45.8488C55.7556 48.0208 54.4396 49.9944 52.779 51.6564C44.2579 62.483 34.4816 72.2596 23.6552 80.7808C21.499 82.898 18.8554 84.4528 15.9572 85.3085C14.3464 85.7764 12.6764 86.0092 10.999 85.9997C8.89188 85.9518 6.80849 85.5439 4.83888 84.7937C2.43248 83.8877 0.225895 82.521 -1.65733 80.7703Z" fill="url(#paint0_linear_847_2616)"/>
                                                        <path d="M52 56.8098C61.3888 56.8098 69 49.0174 69 39.4049C69 29.7924 61.3888 22 52 22C42.6112 22 35 29.7924 35 39.4049C35 49.0174 42.6112 56.8098 52 56.8098Z" fill="white"/>
                                                        <path d="M52.0013 56.4469C61.1945 56.4469 68.6471 48.8168 68.6471 39.4046C68.6471 29.9924 61.1945 22.3623 52.0013 22.3623C42.8081 22.3623 35.3555 29.9924 35.3555 39.4046C35.3555 48.8168 42.8081 56.4469 52.0013 56.4469Z" stroke="#2D2D2D" stroke-width="0.659574"/>
                                                        <path d="M51.7785 42.6614C51.6098 42.6698 51.4415 42.6384 51.2866 42.5694C51.1317 42.5005 50.9944 42.396 50.8853 42.264C50.6574 41.9614 50.5426 41.5854 50.5616 41.2038C50.5348 40.4235 50.6994 39.6489 51.0404 38.9506C51.4385 38.2361 51.9116 37.5684 52.4514 36.9592C52.8274 36.5329 53.1695 36.0765 53.4742 35.5943C53.6926 35.2224 53.8047 34.7953 53.7979 34.3615C53.8053 34.137 53.7612 33.9139 53.669 33.7101C53.5769 33.5064 53.4393 33.3275 53.2674 33.1881C52.8518 32.8774 52.344 32.7237 51.8302 32.753C51.2979 32.7484 50.7715 32.8661 50.2896 33.0974C49.815 33.3237 49.1808 33.6754 48.387 34.1526C48.0124 34.3947 47.5861 34.5403 47.1446 34.5769C46.964 34.5761 46.7863 34.5313 46.6261 34.446C46.4659 34.3607 46.328 34.2375 46.2237 34.0866C45.9701 33.7493 45.8375 33.333 45.8483 32.9074C45.8407 32.6283 45.899 32.3514 46.0183 32.1003C46.1499 31.8564 46.3307 31.644 46.5489 31.4773C47.3363 30.8434 48.2256 30.3545 49.1768 30.0327C50.1391 29.6932 51.1495 29.5185 52.1674 29.5157C53.1587 29.4986 54.1423 29.6964 55.0538 30.0958C55.8478 30.4357 56.5367 30.9899 57.0471 31.6993C57.5175 32.3661 57.767 33.1697 57.7589 33.9923C57.7666 34.61 57.6383 35.2215 57.3835 35.7814C57.1522 36.2906 56.8515 36.7636 56.4903 37.1861C56.1451 37.5836 55.679 38.074 55.0921 38.6576C54.5657 39.1388 54.0727 39.6569 53.6166 40.2081C53.295 40.6092 53.0809 41.089 52.9954 41.6005C52.9451 41.9031 52.7951 42.179 52.5704 42.3822C52.3484 42.5708 52.0668 42.67 51.7785 42.6614ZM51.8302 48.5987C51.5371 48.6079 51.2453 48.5546 50.9734 48.4422C50.7015 48.3299 50.4554 48.1609 50.2506 47.946C50.046 47.7313 49.8856 47.4767 49.7791 47.1972C49.6727 46.9178 49.6222 46.6192 49.6308 46.3194C49.6219 46.0188 49.6724 45.7195 49.7791 45.4394C49.8858 45.1593 50.0467 44.9041 50.252 44.6891C50.4568 44.4742 50.7029 44.3053 50.9748 44.1929C51.2468 44.0805 51.5385 44.0273 51.8316 44.0364C52.1206 44.0291 52.4079 44.0833 52.6753 44.1956C52.9427 44.308 53.1844 44.476 53.385 44.6891C53.5903 44.9041 53.7512 45.1593 53.8579 45.4394C53.9646 45.7195 54.0151 46.0188 54.0062 46.3194C54.0151 46.6199 53.9646 46.9192 53.8579 47.1993C53.7512 47.4795 53.5903 47.7346 53.385 47.9496C53.1839 48.1622 52.9419 48.3297 52.6742 48.4415C52.4066 48.5532 52.1191 48.6067 51.8302 48.5987Z" fill="#86BCFF" stroke="#2D2D2D" stroke-width="0.659574"/>
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_847_2616" x="0" y="0" width="89" height="77" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                                        <feOffset/>
                                                        <feGaussianBlur stdDeviation="3"/>
                                                        <feComposite in2="hardAlpha" operator="out"/>
                                                        <feColorMatrix type="matrix" values="0 0 0 0 0.172549 0 0 0 0 0.172549 0 0 0 0 0.172549 0 0 0 0.1 0"/>
                                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_847_2616"/>
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_847_2616" result="shape"/>
                                                    </filter>
                                                    <linearGradient id="paint0_linear_847_2616" x1="11" y1="-8" x2="11" y2="86" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#C7DCFF"/>
                                                        <stop offset="1" stop-color="#FFABAF"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_847_2616">
                                                        <rect x="6" y="6" width="77" height="65" rx="12" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="col" style="display:table;">
                                            <h3 class="faq-q faq-text" style="display:table-cell; vertical-align:middle;">
                                                Can I have an online consultation with my regular doctor?
                                            </h3>
                                        </div>
                                        <div class="col-1" style="display:table; padding-left: 0px;">
                                <span class="faq-q" style=" display:table-cell; vertical-align:middle;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                      </svg>
                                </span>
                                        </div>
                                    </div>
                                </button>
                                <div id="collapseOne5" class="faq-a">
                                    <p>
                                        You can book a consultation with your regular doctor through the HealthVirtuCare website
                                    </p>
                                </div>

                                <!--  -->

                                <button class="accordion faq-acc" >
                                    <div class="row">
                                        <div class="col-2">
                                            <svg  style="margin: -6px -6px;" width="83" height="77" viewBox="0 0 83 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_847_2616)">
                                                    <g clip-path="url(#clip0_847_2616)">
                                                        <path opacity="0.3" d="M-1.65733 80.7703C-13.0773 72.9368 -22.9511 63.06 -30.7811 51.6375C-34.0891 48.2505 -35.9592 43.7153 -35.9999 38.981C-36.0062 36.6316 -35.5483 34.3042 -34.6527 32.1322C-33.7571 29.9603 -32.4414 27.9866 -30.7811 26.3244C-22.4249 15.3588 -12.6288 5.56954 -1.65733 -2.7789C1.72894 -6.08833 6.26429 -7.95927 10.999 -7.99993C13.3485 -8.00633 15.6761 -7.54839 17.8481 -6.6524C20.0201 -5.7564 21.9936 -4.44001 23.6552 -2.7789C34.4744 5.74964 44.2498 15.5246 52.779 26.3433C56.0883 29.7297 57.9593 34.2651 57.9999 38.9999C58.0058 41.3494 57.5475 43.6769 56.6516 45.8488C55.7556 48.0208 54.4396 49.9944 52.779 51.6564C44.2579 62.483 34.4816 72.2596 23.6552 80.7808C21.499 82.898 18.8554 84.4528 15.9572 85.3085C14.3464 85.7764 12.6764 86.0092 10.999 85.9997C8.89188 85.9518 6.80849 85.5439 4.83888 84.7937C2.43248 83.8877 0.225895 82.521 -1.65733 80.7703Z" fill="url(#paint0_linear_847_2616)"/>
                                                        <path d="M52 56.8098C61.3888 56.8098 69 49.0174 69 39.4049C69 29.7924 61.3888 22 52 22C42.6112 22 35 29.7924 35 39.4049C35 49.0174 42.6112 56.8098 52 56.8098Z" fill="white"/>
                                                        <path d="M52.0013 56.4469C61.1945 56.4469 68.6471 48.8168 68.6471 39.4046C68.6471 29.9924 61.1945 22.3623 52.0013 22.3623C42.8081 22.3623 35.3555 29.9924 35.3555 39.4046C35.3555 48.8168 42.8081 56.4469 52.0013 56.4469Z" stroke="#2D2D2D" stroke-width="0.659574"/>
                                                        <path d="M51.7785 42.6614C51.6098 42.6698 51.4415 42.6384 51.2866 42.5694C51.1317 42.5005 50.9944 42.396 50.8853 42.264C50.6574 41.9614 50.5426 41.5854 50.5616 41.2038C50.5348 40.4235 50.6994 39.6489 51.0404 38.9506C51.4385 38.2361 51.9116 37.5684 52.4514 36.9592C52.8274 36.5329 53.1695 36.0765 53.4742 35.5943C53.6926 35.2224 53.8047 34.7953 53.7979 34.3615C53.8053 34.137 53.7612 33.9139 53.669 33.7101C53.5769 33.5064 53.4393 33.3275 53.2674 33.1881C52.8518 32.8774 52.344 32.7237 51.8302 32.753C51.2979 32.7484 50.7715 32.8661 50.2896 33.0974C49.815 33.3237 49.1808 33.6754 48.387 34.1526C48.0124 34.3947 47.5861 34.5403 47.1446 34.5769C46.964 34.5761 46.7863 34.5313 46.6261 34.446C46.4659 34.3607 46.328 34.2375 46.2237 34.0866C45.9701 33.7493 45.8375 33.333 45.8483 32.9074C45.8407 32.6283 45.899 32.3514 46.0183 32.1003C46.1499 31.8564 46.3307 31.644 46.5489 31.4773C47.3363 30.8434 48.2256 30.3545 49.1768 30.0327C50.1391 29.6932 51.1495 29.5185 52.1674 29.5157C53.1587 29.4986 54.1423 29.6964 55.0538 30.0958C55.8478 30.4357 56.5367 30.9899 57.0471 31.6993C57.5175 32.3661 57.767 33.1697 57.7589 33.9923C57.7666 34.61 57.6383 35.2215 57.3835 35.7814C57.1522 36.2906 56.8515 36.7636 56.4903 37.1861C56.1451 37.5836 55.679 38.074 55.0921 38.6576C54.5657 39.1388 54.0727 39.6569 53.6166 40.2081C53.295 40.6092 53.0809 41.089 52.9954 41.6005C52.9451 41.9031 52.7951 42.179 52.5704 42.3822C52.3484 42.5708 52.0668 42.67 51.7785 42.6614ZM51.8302 48.5987C51.5371 48.6079 51.2453 48.5546 50.9734 48.4422C50.7015 48.3299 50.4554 48.1609 50.2506 47.946C50.046 47.7313 49.8856 47.4767 49.7791 47.1972C49.6727 46.9178 49.6222 46.6192 49.6308 46.3194C49.6219 46.0188 49.6724 45.7195 49.7791 45.4394C49.8858 45.1593 50.0467 44.9041 50.252 44.6891C50.4568 44.4742 50.7029 44.3053 50.9748 44.1929C51.2468 44.0805 51.5385 44.0273 51.8316 44.0364C52.1206 44.0291 52.4079 44.0833 52.6753 44.1956C52.9427 44.308 53.1844 44.476 53.385 44.6891C53.5903 44.9041 53.7512 45.1593 53.8579 45.4394C53.9646 45.7195 54.0151 46.0188 54.0062 46.3194C54.0151 46.6199 53.9646 46.9192 53.8579 47.1993C53.7512 47.4795 53.5903 47.7346 53.385 47.9496C53.1839 48.1622 52.9419 48.3297 52.6742 48.4415C52.4066 48.5532 52.1191 48.6067 51.8302 48.5987Z" fill="#86BCFF" stroke="#2D2D2D" stroke-width="0.659574"/>
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_847_2616" x="0" y="0" width="89" height="77" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                                        <feOffset/>
                                                        <feGaussianBlur stdDeviation="3"/>
                                                        <feComposite in2="hardAlpha" operator="out"/>
                                                        <feColorMatrix type="matrix" values="0 0 0 0 0.172549 0 0 0 0 0.172549 0 0 0 0 0.172549 0 0 0 0.1 0"/>
                                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_847_2616"/>
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_847_2616" result="shape"/>
                                                    </filter>
                                                    <linearGradient id="paint0_linear_847_2616" x1="11" y1="-8" x2="11" y2="86" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#C7DCFF"/>
                                                        <stop offset="1" stop-color="#FFABAF"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_847_2616">
                                                        <rect x="6" y="6" width="77" height="65" rx="12" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="col" style="display:table;">
                                            <h3 class="faq-q faq-text" style="display:table-cell; vertical-align:middle;">
                                                How do I know if the online doctor I am consulting is qualified?
                                            </h3>
                                        </div>
                                        <div class="col-1" style="display:table; padding-left: 0px;">
                                <span class="faq-q" style=" display:table-cell; vertical-align:middle;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                      </svg>
                                </span>
                                        </div>
                                    </div>
                                </button>
                                <div id="collapseOne6" class="faq-a">
                                    <p>
                                        HealthVirtuCare has MD-level doctors. Hence, ensuring you have access to qualified medical professionals.
                                    </p>
                                </div>

                                <!--  -->

                                <button class="accordion faq-acc" >
                                    <div class="row">
                                        <div class="col-2">
                                            <svg  style="margin: -6px -6px;" width="83" height="77" viewBox="0 0 83 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d_847_2616)">
                                                    <g clip-path="url(#clip0_847_2616)">
                                                        <path opacity="0.3" d="M-1.65733 80.7703C-13.0773 72.9368 -22.9511 63.06 -30.7811 51.6375C-34.0891 48.2505 -35.9592 43.7153 -35.9999 38.981C-36.0062 36.6316 -35.5483 34.3042 -34.6527 32.1322C-33.7571 29.9603 -32.4414 27.9866 -30.7811 26.3244C-22.4249 15.3588 -12.6288 5.56954 -1.65733 -2.7789C1.72894 -6.08833 6.26429 -7.95927 10.999 -7.99993C13.3485 -8.00633 15.6761 -7.54839 17.8481 -6.6524C20.0201 -5.7564 21.9936 -4.44001 23.6552 -2.7789C34.4744 5.74964 44.2498 15.5246 52.779 26.3433C56.0883 29.7297 57.9593 34.2651 57.9999 38.9999C58.0058 41.3494 57.5475 43.6769 56.6516 45.8488C55.7556 48.0208 54.4396 49.9944 52.779 51.6564C44.2579 62.483 34.4816 72.2596 23.6552 80.7808C21.499 82.898 18.8554 84.4528 15.9572 85.3085C14.3464 85.7764 12.6764 86.0092 10.999 85.9997C8.89188 85.9518 6.80849 85.5439 4.83888 84.7937C2.43248 83.8877 0.225895 82.521 -1.65733 80.7703Z" fill="url(#paint0_linear_847_2616)"/>
                                                        <path d="M52 56.8098C61.3888 56.8098 69 49.0174 69 39.4049C69 29.7924 61.3888 22 52 22C42.6112 22 35 29.7924 35 39.4049C35 49.0174 42.6112 56.8098 52 56.8098Z" fill="white"/>
                                                        <path d="M52.0013 56.4469C61.1945 56.4469 68.6471 48.8168 68.6471 39.4046C68.6471 29.9924 61.1945 22.3623 52.0013 22.3623C42.8081 22.3623 35.3555 29.9924 35.3555 39.4046C35.3555 48.8168 42.8081 56.4469 52.0013 56.4469Z" stroke="#2D2D2D" stroke-width="0.659574"/>
                                                        <path d="M51.7785 42.6614C51.6098 42.6698 51.4415 42.6384 51.2866 42.5694C51.1317 42.5005 50.9944 42.396 50.8853 42.264C50.6574 41.9614 50.5426 41.5854 50.5616 41.2038C50.5348 40.4235 50.6994 39.6489 51.0404 38.9506C51.4385 38.2361 51.9116 37.5684 52.4514 36.9592C52.8274 36.5329 53.1695 36.0765 53.4742 35.5943C53.6926 35.2224 53.8047 34.7953 53.7979 34.3615C53.8053 34.137 53.7612 33.9139 53.669 33.7101C53.5769 33.5064 53.4393 33.3275 53.2674 33.1881C52.8518 32.8774 52.344 32.7237 51.8302 32.753C51.2979 32.7484 50.7715 32.8661 50.2896 33.0974C49.815 33.3237 49.1808 33.6754 48.387 34.1526C48.0124 34.3947 47.5861 34.5403 47.1446 34.5769C46.964 34.5761 46.7863 34.5313 46.6261 34.446C46.4659 34.3607 46.328 34.2375 46.2237 34.0866C45.9701 33.7493 45.8375 33.333 45.8483 32.9074C45.8407 32.6283 45.899 32.3514 46.0183 32.1003C46.1499 31.8564 46.3307 31.644 46.5489 31.4773C47.3363 30.8434 48.2256 30.3545 49.1768 30.0327C50.1391 29.6932 51.1495 29.5185 52.1674 29.5157C53.1587 29.4986 54.1423 29.6964 55.0538 30.0958C55.8478 30.4357 56.5367 30.9899 57.0471 31.6993C57.5175 32.3661 57.767 33.1697 57.7589 33.9923C57.7666 34.61 57.6383 35.2215 57.3835 35.7814C57.1522 36.2906 56.8515 36.7636 56.4903 37.1861C56.1451 37.5836 55.679 38.074 55.0921 38.6576C54.5657 39.1388 54.0727 39.6569 53.6166 40.2081C53.295 40.6092 53.0809 41.089 52.9954 41.6005C52.9451 41.9031 52.7951 42.179 52.5704 42.3822C52.3484 42.5708 52.0668 42.67 51.7785 42.6614ZM51.8302 48.5987C51.5371 48.6079 51.2453 48.5546 50.9734 48.4422C50.7015 48.3299 50.4554 48.1609 50.2506 47.946C50.046 47.7313 49.8856 47.4767 49.7791 47.1972C49.6727 46.9178 49.6222 46.6192 49.6308 46.3194C49.6219 46.0188 49.6724 45.7195 49.7791 45.4394C49.8858 45.1593 50.0467 44.9041 50.252 44.6891C50.4568 44.4742 50.7029 44.3053 50.9748 44.1929C51.2468 44.0805 51.5385 44.0273 51.8316 44.0364C52.1206 44.0291 52.4079 44.0833 52.6753 44.1956C52.9427 44.308 53.1844 44.476 53.385 44.6891C53.5903 44.9041 53.7512 45.1593 53.8579 45.4394C53.9646 45.7195 54.0151 46.0188 54.0062 46.3194C54.0151 46.6199 53.9646 46.9192 53.8579 47.1993C53.7512 47.4795 53.5903 47.7346 53.385 47.9496C53.1839 48.1622 52.9419 48.3297 52.6742 48.4415C52.4066 48.5532 52.1191 48.6067 51.8302 48.5987Z" fill="#86BCFF" stroke="#2D2D2D" stroke-width="0.659574"/>
                                                    </g>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_847_2616" x="0" y="0" width="89" height="77" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                                        <feOffset/>
                                                        <feGaussianBlur stdDeviation="3"/>
                                                        <feComposite in2="hardAlpha" operator="out"/>
                                                        <feColorMatrix type="matrix" values="0 0 0 0 0.172549 0 0 0 0 0.172549 0 0 0 0 0.172549 0 0 0 0.1 0"/>
                                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_847_2616"/>
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_847_2616" result="shape"/>
                                                    </filter>
                                                    <linearGradient id="paint0_linear_847_2616" x1="11" y1="-8" x2="11" y2="86" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#C7DCFF"/>
                                                        <stop offset="1" stop-color="#FFABAF"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_847_2616">
                                                        <rect x="6" y="6" width="77" height="65" rx="12" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="col" style="display:table;">
                                            <h3 class="faq-q faq-text" style="display:table-cell; vertical-align:middle;">
                                                Can I receive a diagnosis through an online doctor consultation?
                                            </h3>
                                        </div>
                                        <div class="col-1" style="display:table; padding-left: 0px;">
                                <span class="faq-q" style=" display:table-cell; vertical-align:middle;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                      </svg>
                                </span>
                                        </div>
                                    </div>
                                </button>
                                <div id="collapseOne7" class="faq-a">
                                    <p>
                                        Yes, you can receive a diagnosis through an online consultation.
                                    </p>
                                </div>


                            </div>

                        </div>
                    </div>
                    <script>

                        function scrollSmoothTo(elementId) {
                            var element = document.getElementById(elementId);
                            element.scrollIntoView({
                                block: 'start',
                            });
                        }


                        function btnHandler(elem, selectedBtn) {
                            var element = document.getElementById(elem);
                            var selectedBtn = document.getElementById(selectedBtn);
                            element.classList.remove('none');
                            element.classList.add('block');
                            selectedBtn.classList.add('none');
                        }

                        function btnHandler2(elem, oldBtn) {
                            var element = document.getElementById(elem)
                            var oldBtn= document.getElementById(oldBtn);
                            element.classList.remove('block');
                            element.classList.add('none');
                            oldBtn.classList.remove('none');
                            oldBtn.classList.add('block');
                        }
                        //code to oscillate between set of words
                        let elem = document.getElementById('changeWord');
                    </script>

                    <script>
                        var visibleFaq='';
                        let acc = document.getElementsByClassName("accordion");
                        let i;
                        for (i = 0; i < acc.length; i++) {
                            acc[i].addEventListener("click", function() {
                                this.classList.toggle("active");
                                let collapseOne = this.nextElementSibling;
                                if (collapseOne.style.display === "block") {
                                    collapseOne.style.display = "none";
                                    visibleFaq='';
                                } else {
                                    if(visibleFaq===''){
                                        visibleFaq= collapseOne;
                                        collapseOne.style.display = "block";
                                    }
                                    else{
                                        visibleFaq.style.display="none";
                                        visibleFaq= collapseOne;
                                        collapseOne.style.display = "block";
                                    }
                                }
                            });
                        }
                    </script>
                </div>
            </div>
            <!-- <p>Online Consultancy</p> -->
            <style>
                /* @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap'); */

                @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;1000&display=swap');


            </style>
            <style>
                .btnfocus,
                a,
                button,
                .nav-link {
                    outline: none !important;
                }
                .form-controlfocus,
                inputfocus {
                    box-shadow: none;
                    outline: 0 none;
                }
                .btn[disabled] {
                    color: #ccc;
                }
                .btn-primary {
                    background-color: #1778f2 !important;
                    border-color: #1778f2 !important;
                }
                .btn-info {
                    background-color: #2198ff !important;
                    border-color: #2198ff !important;
                }
                .btn-primary[disabled] {
                    color: #fff;
                    background-color: #aaa !important;
                    border-color: #aaa !important;
                    color: #fff;
                }
                .btn.btn-light {
                    color: #333;
                    background-color: #fff;
                    border: 1px solid #ccc !important;
                }
                .btn.btn-light.active,
                .btn.btn-lightactive,
                .btn.btn-lighthover,
                .open>.dropdown-toggle.btn.btn-light {
                    color: #333;
                    background-color: #e6e6e6;
                    border-color: #adadad;
                }
                .brdrDashBtm {
                    border-bottom: 1px dashed #ddd;
                }
                .brdrDashRt {
                    border-right: 1px dashed #ddd;
                }
                tr.hilight {
                    background: #0097fb;
                    font-weight: bold;
                    color: #fff;
                }
                tr.hilight1 {
                    border-bottom: 3px solid #a7a7a7;
                    border-top: 2px solid #adadad;
                }
                .pop-up-box {
                    display: none;
                    width: 100%;
                    position: fixed;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    z-index: 10000;
                    background: #fff;
                }
                .pop-up-box .cls {
                    font-size: 30px;
                    padding: 30px;
                }
                .pop-up-box .box {
                    vertical-align: bottom;
                }
                .filter .panel {
                    border-radius: 0;
                }
                .filter .panel-heading {
                    padding: 0;
                }
                .filter .panel-heading a {
                    padding: 5px;
                    width: 100%;
                    display: inline-block;
                    text-decoration: none;
                }
                .filter .panel-body {
                    padding: 8px;
                }
                .filter .panel-title {
                    text-transform: uppercase;
                    font-size: 14px;
                }
                .filter .btn-group.btn-block label.btn {
                    width: 100%;
                    border-radius: 3px !important;
                    margin-bottom: 3px;
                }
                .filter .week .btn-group label.btn {
                    padding: 3px 8px;
                }
                .loaction {
                    margin-bottom: 10px;
                }
                .loaction span {
                    padding: 4px 8px;
                    font-size: 10px;
                    border-radius: 5px;
                    background: #eef4ff;
                    display: flex;
                    align-items: center;
                    width: fit-content;
                }
                .loaction span.hsc {
                    background: #fcf2f1;
                }
                .loaction.lg span {
                    padding: 6px 10px;
                }
                .result-box {
                    color: #050a4e;
                    box-shadow: 0 0 5px rgba(24,24,24,0.161);
                    border-radius: 10px;
                    padding: 16px 10px;
                    margin: 0 0 16px 0 !important;
                    border: none;
                }
                .result-box.visited {
                    border-color: rgba(33,152,255,0.5);
                    box-shadow: 1px 3px 5px 0px rgba(33,152,255,0.25);
                }
                .result-box.visited .bookBtn {
                    display: table-cell !important;
                }
                .result-box.visited .btn .hideSm {
                    display: none !important;
                }
                .result-box.visited .btn .showSm {
                    display: block !important;
                }
                .result-box.visited .btn.btn-default {
                    border-color: #ddd !important;
                }
                .result-box .box {
                    margin: 0;
                }
                .result-box .bookingBx {
                    margin: 10px -10px -15px -10px;
                }
                .result-box h2 {
                    font-size: 16px;
                    font-weight: 400;
                    margin: 0;
                    line-height: 2rem;
                }
                .result-box h3 {
                    font-size: 12px;
                    font-weight: normal;
                    margin: 0 0 5px 0;
                }
                .result-box p {
                    margin: 0;
                    font-size: 12px;
                }
                .result-box p.provider {
                    margin: 0;
                }
                .result-box p.rating {
                    margin-top: 5px;
                }
                .result-box p.availTiming {
                    padding-top: 5px;
                    font-weight: bold;
                    font-size: 12px;
                }
                .result-box p.label-wrap {
                    padding-top: 5px;
                    overflow: visible !important;
                }
                .result-box p.label-wrap img.aggregator {
                    width: 60px;
                    display: inline-block;
                    margin-right: 10px;
                }
                .result-box .logo {
                    width: 60px;
                    float: left;
                    text-align: center;
                }
                .result-box .logo img,
                .result-box .logo .noLogo {
                    width: 50px;
                    height: 50px;
                    padding: 10px;
                    border-radius: 100%;
                    background: #fff;
                    margin: 0 auto;
                    border: 1px solid #ddd;
                }
                .result-box .logo .noLogo {
                    line-height: 47px;
                    padding: 0;
                    font-size: 22px;
                    color: #fff;
                }
                .result-box .logo .noLogo .mm {
                    font-size: 30px;
                }
                .result-box .logo .noLogo.bg1 {
                    color: #f97272;
                }
                .result-box .logo .noLogo.bg2 {
                    color: #f9b172;
                }
                .result-box .logo .noLogo.bg3 {
                    color: #f9e972;
                }
                .result-box .logo .noLogo.bg4 {
                    color: #b9ef39;
                }
                .result-box .logo .noLogo.bg5 {
                    color: #65f3a5;
                }
                .result-box .logo .noLogo.bg6 {
                    color: #72f9f4;
                }
                .result-box .logo .noLogo.bg7 {
                    color: #72adf9;
                }
                .result-box .logo .noLogo.bg8 {
                    color: #a172f9;
                }
                .result-box .logo .noLogo.bg9 {
                    color: #e572f9;
                }
                .result-box .logo .noLogo.bg10 {
                    color: #f97272;
                }
                .result-box .provider {
                    padding: 0;
                }
                .result-box .disc {
                    padding: 0 0 0 70px;
                }
                .result-box .disc div {
                    position: inherit;
                }
                .result-box .disc p {
                    overflow: hidden;
                    text-overflow: ellipsis;
                    white-space: nowrap;
                    font-size: 12px;
                }
                .result-box .disc p.product-location {
                    margin-bottom: 0;
                    margin-left: -2px;
                    margin-top: 5px;
                }
                .result-box .img img.sm {
                    width: 30px;
                    height: 30px;
                    margin: 3px 3px 3px 0;
                    cursor: pointer;
                    border: 1px solid #ddd;
                }
                .result-box .img .tooltip-inner {
                    max-width: 430px !important;
                }
                .result-box .facility {
                    margin-top: 10px;
                }
                .result-box .facility i.mm {
                    font-size: 14px;
                }
                .result-box .facility ul {
                    margin: 0;
                    padding: 0;
                    list-style: none;
                    width: 100%;
                    float: left;
                    text-align: center;
                }
                .result-box .facility ul li {
                    margin: 0;
                    padding: 5px;
                    display: inline-block;
                    color: #ddd;
                }
                .result-box .facility ul li.active {
                    color: #666;
                }
                .result-box .facility ul.box {
                    border: 1px solid #f2f2f2;
                    margin-top: -15px;
                    padding-top: 22px;
                }
                .result-box .facility ul.head {
                    position: relative;
                }
                .result-box .facility ul.head li {
                    border-radius: 100%;
                    background: #fff;
                    width: 40px;
                    height: 40px;
                    line-height: 34px;
                    text-align: center;
                    padding: 5px;
                    margin: 0;
                }
                .result-box .facility ul.head li i.mm {
                    font-size: 14px;
                }
                .result-box .facility ul.head li.dc {
                    background: #5bc3ac;
                    color: #fff;
                }
                .result-box .facility ul.head li.hos {
                    background: #dc7a4a;
                    color: #fff;
                }
                .result-box .covered .bx {
                    border: 1px solid #ddd;
                    text-align: center;
                    padding: 3px 0;
                    font-size: 11px;
                    border-right: 0;
                    width: 33.333333%;
                    line-height: 14px;
                }
                .result-box .covered .bx.last,
                .result-box .covered .bxlast-child {
                    border-right: 1px solid #ddd;
                }
                .result-box .covered .bx .head {
                    display: block;
                    font-size: 14px;
                    color: #ff8708;
                }
                .result-box .covered .bx i {
                    font-size: 14px;
                }
                .result-box .covered .btn {
                    border-top-left-radius: 0;
                    border-top-right-radius: 0;
                    border-top: 0;
                    border-radius: 0;
                }
                .result-box .covered .column1 .bx {
                    width: 100%;
                    border-right: 1px solid #ddd;
                }
                .result-box .covered .column2 .bx {
                    width: 50%;
                }
                .result-box .price {
                    font-weight: 800;
                    display: inline-block;
                }
                .result-box .price b {
                    font-size: 18px;
                }
                .result-box .strike .mm-rupee {
                    font-size: 10px !important;
                }
                .result-box .details {
                    display: none;
                    width: 100%;
                    float: left;
                    border-top: 1px solid #ddd;
                }
                .result-box .details .content {
                    padding: 10px;
                }
                .result-box .details h3 {
                    font-size: 16px;
                    font-weight: bold;
                    margin: 10px 0 0 0;
                    color: #ff8708;
                }
                .result-box .details h3.first {
                    margin-top: 0;
                }
                .result-box .details h4 {
                    margin: 10px 0 0 0;
                    color: #333;
                    font-weight: bold;
                    font-size: 12px;
                }
                .result-box .details ul {
                    margin: 0;
                    padding: 0;
                    list-style: none;
                }
                .result-box .details li {
                    font-size: 11px;
                    display: inline-block;
                    margin: 0;
                    line-height: 16px;
                    padding: 0 8px 0 0;
                }
                .result-box .details li .indexNo {
                    color: #dcdcdc;
                }
                .result-box .details .price {
                    background: #428bca;
                    text-align: center;
                    color: #fff;
                    font-weight: normal;
                    width: 100%;
                }
                .result-box .details .price p {
                    font-size: 14px;
                }
                .result-box .details .price a {
                    color: #fff;
                }
                .result-box .details .price ahover {
                    color: #fff;
                }
                .result-box .details .iframe {
                    float: left;
                }
                .result-box.has-group,
                .result-box.sel {
                    padding-bottom: 0;
                }
                td.table-box1 {
                    background: #f2f2f2;
                }
                a,
                .cursor-pointer {
                    cursor: pointer;
                }
                .p {
                    text-align: center;
                }
                i.mm {
                    font-size: 12px;
                }
                s {
                    color: #ddd;
                    padding: 20px 10px;
                    margin: 16px 0 !important;
                }
                .modal-content {
                    border-radius: 0 !important;
                    box-shadow: none !important;
                }
                .modal.signin {
                    margin-top: 10%;
                }
                .modal .btn-close {
                    position: fixed !important;
                    border-radius: 0 !important;
                    background-color: none;
                    padding: 6px 9px;
                    width: 36px;
                    text-align: center;
                    right: 2px;
                    top: 2px;
                }
                .modal .btn-close .mm {
                    margin: 0;
                }
                .modal .btn-closehover {
                    background-color: none;
                }
                .warning {
                    background: #ddd;
                    border-radius: 100%;
                    color: #000;
                    display: inline-block;
                    height: 18px;
                    line-height: 18px;
                    width: 18px;
                    font-style: normal;
                    font-family: arial, serif;
                    text-align: center;
                }
                .input-group input {
                    height: 35px;
                }
                .input-group-btn .btn-default,
                .uib-time .btn-default {
                    border: 1px solid #ccc !important;
                    height: 35px;
                }
                .btn-default.outline-primary:hover,
                .btn-default.outline-primary:focus,
                .btn-default.outline-primary:active {
                    background-color: #fff !important;
                    border-color: #0168c1 !important;
                    color: #0168c1 !important;
                }
                .uib-datepicker-popup table {
                    width: 100%;
                }
                .uib-datepicker-popup .uib-datepicker {
                    display: flex;
                    justify-content: center;
                }
                .uib-datepicker-popup .uib-monthpicker .uib-months .btn-default {
                    padding: 2px 20px;
                }
                .uib-datepicker-popup .uib-yearpicker .btn-default {
                    padding: 6px 10px;
                }
                .mbCalendar .uib-datepicker-popup .btn-default:hover {
                    color: #fff !important;
                    background-color: #31b0d5;
                }
                .mbCalendar .uib-datepicker-popup .text-muted:hover {
                    color: #fff !important;
                }
                .mbCalendar .uib-datepicker-popup .btn {
                    border: none;
                }
                .mbCalendar .uib-datepicker-popup .btn-sm {
                    padding: 2px 8px !important;
                }
                .mbCalendar .uib-datepicker-popup .uib-monthpicker:focus,
                .mbCalendar .uib-datepicker-popup .uib-daypicker:focus,
                .mbCalendar .uib-datepicker-popup .uib-yearpicker:focus {
                    outline: none;
                }
                .mbCalendar .uib-datepicker-popup .uib-daypicker .uib-title,
                .mbCalendar .uib-datepicker-popup .uib-monthpicker .uib-title,
                .mbCalendar .uib-datepicker-popup .uib-yearpicker .uib-title {
                    color: #269abc;
                }
                .mbCalendar .uib-timepicker .uib-time.hours,
                .mbCalendar .uib-timepicker .uib-time.minutes {
                    width: 50px;
                    margin: 0 5px;
                    display: block;
                }
                .notifications-mm {
                    width: 650px;
                    position: fixed;
                    top: 50px;
                    left: 50%;
                    margin-left: -325px;
                    z-index: 999;
                }
                .book s {
                    display: block;
                    margin: 0;
                    margin: 0 0 0 17px !important;
                    line-height: 10px !important;
                    padding: 0;
                }
                .configLoading {
                    position: absolute;
                    top: 40%;
                    left: 50%;
                    width: 800px;
                    margin-left: -200px;
                    text-align: center;
                }
                .configLoading h1 {
                    width: 160px;
                    margin: 0 auto;
                }
                .configLoading h1 .logo {
                    float: left;
                }
                .configLoading .conf {
                    display: block;
                    text-align: center;
                    margin-top: 10px;
                }
                .configLoading .conf span {
                    display: block;
                }
                .configLoading .conf img {
                    display: inline-block;
                    width: 20px;
                    margin-left: 10px;
                }
                .haserror {
                    border-color: #a94442 !important;
                }
                .info {
                    display: none;
                }
                .infowrap .form-control,
                .infowrap select,
                .has-error .form-control,
                .has-error-req .form-control {
                    border: 1px solid #ed5c5c !important;
                }
                .infowrap {
                    position: relative;
                    display: block;
                }
                .infowrap.inline-block {
                    display: inline-block;
                }
                .infowrap.inline-block .info {
                    top: 5px !important;
                }
                .infowrap .tooltip-inner,
                .infowrap .tooltip-arrow-inner {
                    background: #ed5c5c;
                }
                .infowrap .info {
                    width: 24px;
                    height: 20px;
                    right: 3px;
                    top: 7px;
                    position: absolute;
                    border-radius: 100%;
                    font-weight: bolder;
                    background: url("/assets/images/error.png") no-repeat 50%;
                    background-size: 16px;
                    z-index: 99;
                    display: block;
                }
                .infowrap .infomessage.popover {
                    top: -35px;
                    right: -6px;
                    left: auto;
                    display: none;
                    background: #db5454;
                    color: #fff;
                    white-space: nowrap;
                    border-radius: 0;
                    box-shadow: none;
                    border: 0;
                }
                .infowrap .infomessage.popover .popover-content {
                    font-size: 13px;
                    line-height: 13px;
                }
                .infowrap .infomessage .arrow {
                    right: 10px;
                    bottom: -18px;
                    content: '';
                    width: 0;
                    height: 0;
                    border-left: 8px solid transparent;
                    border-right: 8px solid transparent;
                    border-top: 8px solid #db5454;
                }
                .infowraphover .infomessage.popover {
                    display: block;
                }
                .infowrap.relation .info {
                    right: 8px;
                    top: 0;
                }
                .infowrap.relation .infomessage.popover {
                    top: -40px;
                    right: -1px;
                }
                /* Let's get this party started */
                -webkit-scrollbar {
                    width: 8px;
                }
                /* Track */
                -webkit-scrollbar-track {
                    background: #f2f2f2;
                }
                /* Handle */
                -webkit-scrollbar-thumb {
                    -webkit-border-radius: 10px;
                    border-radius: 10px;
                    background: #b2d5f2;
                }
                -webkit-scrollbar-thumbwindow-inactive {
                    background: #b2d5f2;
                }
                .signup .modal-title {
                    font-weight: bold;
                }
                .slideBoxOpened {
                    overflow: hidden;
                    position: relative;
                }
                .searchingApi {
                    max-width: 600px;
                    width: 98%;
                    margin: 0 auto;
                    text-align: center;
                    height: 40vh;
                    padding-top: 12vh;
                    font-size: 20px;
                }
                .searchingApi span {
                    color: #e1404f;
                }
                .searchingApi img {
                    width: 60px;
                    height: 60px;
                }
                .faqs {
                    margin-top: 5rem;
                    margin-bottom: 5rem;
                    max-width: 730px;
                }
                .faqs a {
                    font-size: 1.5rem;
                }
                .faqs .qna {
                    margin-bottom: 1rem;
                }
                .faqs h4 {
                    margin: 1rem 0 0 0;
                }
                .faqs p {
                    padding-top: 1rem;
                }
                .faqs .ans {
                    padding: 0 1rem;
                    border: 1px solid #f2f2f2;
                    -webkit-box-shadow: 0 1px 3px #dbdbdb;
                    -moz-box-shadow: 0 1px 3px #dbdbdb;
                    box-shadow: 0 1px 3px #dbdbdb;
                    margin: 1rem 0 3rem 0;
                }
                .faqs ul {
                    padding: 1rem 1rem 0 2rem;
                }
                @media (max-width: 450px) {
                    .configLoading {
                        width: 100% !important;
                        margin-left: 0 !important;
                        left: 0 !important;
                    }
                }
                .input-group input.form-control:focus {
                    border-color: #ccc;
                }
                .input-group span.input-group-addon {
                    border: 1px solid #ccc;
                    border-right: transparent;
                    line-height: 12px;
                    background: #fff;
                }
                .input-group span.input-group-addon + input.form-control {
                    border-left: transparent;
                    height: inherit;
                }
                .agerange {
                    float: right;
                    padding: 2px 15px;
                    margin: 10px 5px;
                    font-size: 11px;
                }
                .agerange.male {
                    background-color: #e3e3e3;
                }
                .agerange.female {
                    background-color: #f038c6;
                }
                .package-desc-modal {
                    backdrop-filter: blur(6px);
                    padding: 20px 15px;
                    background: rgba(255,255,255,0.8);
                }
                @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
                    .package-desc-modal .modal-backdrop {
                        position: static;
                        background-color: transparent;
                        padding: 15px;
                    }
                }
                @supports (-ms-ime-align: auto) {
                    .package-desc-modal .modal-backdrop {
                        position: static;
                        background-color: transparent;
                        padding: 15px;
                    }
                }
                @media (max-width: 480px) {
                    .notifications-mm {
                        width: 100%;
                        left: 0;
                        margin: 0;
                    }
                    .scrollTopBtn {
                        bottom: 60px;
                    }
                    .searchingApi {
                        padding-top: 8vh;
                    }
                    .allciti {
                        width: 140px !important;
                    }
                    .top-cities-container .top-cities {
                        margin: 10px;
                    }
                }
                @media (max-width: 768px) {
                    .modal-dialog {
                        top: 0 !important;
                    }
                    .allcities.modal-body {
                        padding: 20px !important;
                        max-height: max-content !important;
                    }
                    .city-search-input {
                        padding-right: 0;
                    }
                    .all-city-contaier {
                        display: flex;
                        flex-direction: row;
                        flex-wrap: wrap;
                        justify-content: space-between;
                        align-items: center;
                    }
                    .all-city-contaier:after {
                        content: "";
                        flex: 0 0 31%;
                    }
                    .top-cities-container {
                        display: flex;
                        flex-direction: row;
                        align-items: center;
                        flex-wrap: wrap;
                        margin-top: 20px;
                        justify-content: space-between;
                    }
                }
                @media (max-width: 768px) and (min-width: 461px) {
                    .top-cities-container {
                        justify-content: start;
                    }
                    .top-cities-container .top-cities {
                        margin: 10px 18px;
                    }
                }
                @media (max-width: 1024px) and (min-width: 769px) {
                    .allcities {
                        width: 840px;
                        margin: 0 auto;
                    }
                    .city-search-input {
                        padding-right: 0;
                    }
                    .all-city-contaier {
                        display: flex;
                        flex-flow: row wrap;
                        justify-content: space-between;
                        align-items: center;
                    }
                    .all-city-contaier:after {
                        content: "";
                        flex: 0 0 22%;
                    }
                }
                .top-cities {
                    margin-left: 20px;
                    margin-right: 20px;
                    display: inline-block;
                    width: 75px;
                    height: 85px;
                    padding: 10px;
                }
                .top-cities:hover {
                    box-shadow: 0px 3px 8px rgba(24,24,24,0.161);
                    border-radius: 2px;
                }
                .top-cities.active {
                    box-shadow: 0px 3px 8px rgba(24,24,24,0.161);
                    border-radius: 2px;
                    border-bottom: 2px solid #2198ff;
                }
                .allciti {
                    display: inline-block;
                    margin: 20px 20px 0 0;
                    height: 32px;
                    width: 162px;
                    border: 1px solid #e6e6f5;
                    box-sizing: border-box;
                    line-height: 15px;
                }
                .allciti:hover {
                    box-shadow: 0px 3px 8px rgba(24,24,24,0.161);
                    border-radius: 2px;
                }
                .allciti.active {
                    box-shadow: 0px 3px 8px rgba(24,24,24,0.161);
                    border-radius: 2px;
                    border-bottom: 2px solid #2198ff;
                }
                .allciti .search {
                    padding: 0;
                }
                .allciti .title {
                    margin: 0;
                    padding: 7px 0;
                }
                .allciti.modal-body {
                    padding: 25px 60px !important;
                    max-height: 630px;
                }
                @media (min-width: 461px) {
                    .allcities.modal-body {
                        padding: 20px 100px !important;
                        min-height: 500px;
                    }
                    .allcities.modal-body .note-noresult {
                        padding: 0;
                        margin: 10vh auto;
                        box-shadow: none;
                    }
                    .top-cities-container {
                        margin: 20px 0;
                    }
                    .top-cities {
                        margin: 10px 20px;
                    }
                }
                .modal-header {
                    background: #fff;
                }
                #contentView,
                #containeWrap.contentView {
                    min-height: 500px !important;
                }
                .home #driver-highlighted-element-stage,
                .inner #driver-highlighted-element-stage {
                    border-radius: 25px;
                }
                @media (max-width: 650px) {
                    .allcities.modal-body {
                        max-height: calc(100vh - 142px);
                    }
                    .loaction {
                        margin-bottom: 7px;
                    }
                    .loaction span {
                        padding: 3px 8px;
                    }
                }
                @media (max-width: 370px) {
                    .home .offers a.offerBtn {
                        padding: 5px;
                        box-shadow: 0 2px 4px 0 rgba(4,155,255,0.19);
                        border: 1px solid #049bff;
                        border-radius: 10px;
                        text-align: center;
                        width: 100%;
                        margin: 0 0 10px 0 !important;
                    }
                    .home .offers a.offerBtn img {
                        padding: 0;
                        box-shadow: none;
                        border: 0;
                        border-radius: 0;
                        width: 100% !important;
                    }
                }
                .howitworks {
                    padding: 20px 50px;
                }
                .howitworks .panel-heading span {
                    display: inline-block;
                    width: 25px;
                    height: 25px;
                    border: 1px solid #ddd;
                    border-radius: 100%;
                    margin-right: 10px;
                    text-align: center;
                    vertical-align: middle;
                }
                .howitworks .panel-body {
                    padding: 10px;
                    overflow: hidden;
                }
                .howitworks .panel-body p {
                    margin-top: 10px;
                }
                .howitworks img {
                    width: 90px;
                    display: inline-block;
                    /* float: left; */
                    margin-left: -10px;
                }
                .bodyScrollFix {
                    overflow: hidden;
                }
                .notable {
                    position: fixed;
                    bottom: 0;
                    left: 0;
                    z-index: 9;
                    width: 100%;
                    border-top: 1px solid #ddd;
                    background: #fff;
                    animation: 1.2s ease-out 0s 1 slideUP;
                }
                .notabletofind {
                    background-color: #2198ff;
                    font-size: 16px;
                    animation: 1s ease-out 0s 1 slideUP;
                    border-right: 0;
                    width: 200px;
                    border-radius: 51px;
                    display: inline-block;
                    margin: 5px 0;
                }
                .notabletofind a {
                    color: #fff;
                }
                .notabletofind a span {
                    padding: 10px 10px 10px 20px;
                    display: block;
                }
                .notabletofind a .mm {
                    background-color: #ffea7f;
                    color: #000;
                    line-height: 41px;
                    padding: 0 15px;
                    font-size: 32px;
                    margin-left: 10px;
                    margin-right: 0;
                    float: right;
                    border-top-right-radius: 51px;
                    border-bottom-right-radius: 51px;
                }
                .bb {
                    border-bottom: 1px solid #ddd;
                    margin-bottom: 10px;
                }
                .btn-comp {
                    background-color: #2198ff;
                    color: #fff;
                    display: inline-block;
                    padding: 0;
                    border-radius: 30px !important;
                    /* float: right; */
                    margin: 5px 0;
                    animation: 1s ease-out 0s 1 slideUP;
                }
                .btn-comp a.btn {
                    line-height: 17px;
                    float: left;
                    color: #fff;
                }
                .btn-comp a.btn span {
                    display: block;
                    font-size: 10px;
                    line-height: 10px;
                }
                .btn-comp .mm {
                    background-color: #ffea7f;
                    color: #000;
                    display: inline-block;
                    line-height: 41px;
                    padding: 0 15px;
                    font-size: 20px;
                    margin-left: 10px;
                    margin-right: 0;
                    border-top-right-radius: 51px;
                    border-bottom-right-radius: 51px;
                }
                .table-transparent {
                    background: transparent;
                }
                .table-transparent th,
                .table-transparent td {
                    border-color: rgba(0,0,0,0.06) !important;
                }
                .vertical-tabs > ul.nav {
                    width: 201px;
                    float: left;
                    margin-right: -1px;
                }
                .vertical-tabs > ul.nav a {
                    text-transform: uppercase;
                    background: none !important;
                    color: #337ab7 !important;
                    border: 1px solid #ddd;
                    margin: 0;
                    border-radius: 0;
                }
                .vertical-tabs > ul.nav ahover {
                    color: #4285f4 !important;
                    border-color: #4285f4 !important;
                    border-left: 5px solid #4285f4;
                }
                .vertical-tabs > ul.nav .active a,
                .vertical-tabs > ul.nav .active ahover {
                    border-right: 1px solid #fff;
                    border-left: 5px solid #2198ff;
                    border-radius: 0;
                }
                .vertical-tabs .btn-gap {
                    margin-top: 20px;
                }
                .vertical-tabs > .tab-content {
                    margin-left: 200px;
                    padding-left: 20px;
                    padding-right: 20px;
                    border: 1px solid #ddd;
                    overflow: hidden;
                    min-height: 500px;
                }
                iframe.videos {
                    width: 100%;
                    min-height: 249px;
                    margin-bottom: 30px;
                }
                .btn-gap {
                    margin-bottom: 30px;
                }
                .btn-gap a {
                    margin-right: 15px;
                    margin-bottom: 15px;
                }
                .scrollTopBtn {
                    position: fixed;
                    right: 20px;
                    bottom: 30px;
                    border-radius: 100px;
                    width: 43px;
                    height: 43px;
                    display: block;
                    text-align: center;
                    line-height: 34px;
                    z-index: 10;
                    background: #2198ff;
                    box-shadow: 0px 0px 5px 0px;
                }
                .scrollTopBtn i.mm {
                    font-size: 15px;
                    color: #fff;
                    margin: 0;
                    font-weight: bold;
                    margin-top: 12px;
                    display: inline-block;
                }
                .popover-title {
                    margin-top: 0 !important;
                    margin-bottom: 0 !important;
                }
                .popover-content.other {
                    background-color: #88f;
                    color: #fff;
                }
                .btn[data-role="pause-resume"] {
                    display: none;
                }
                .no-pointers {
                    pointer-events: none;
                    user-select: none;
                }
                .position-relative {
                    position: relative;
                }
                .position-bottom {
                    position: absolute;
                    bottom: 0;
                }
                .switch {
                    position: relative;
                    width: 50px;
                    height: 25px;
                }
                .switch input {
                    display: none;
                }
                .slider {
                    position: absolute;
                    cursor: pointer;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background-color: #ccc;
                    -webkit-transition: 0.4s;
                    transition: 0.4s;
                }
                .slider:before {
                    position: absolute;
                    content: "";
                    height: 16px;
                    width: 16px;
                    left: 4px;
                    bottom: 5px;
                    background-color: #fff;
                    -webkit-transition: 0.4s;
                    transition: 0.4s;
                }
                .round {
                    border-radius: 30px;
                }
                .round:before {
                    border-radius: 50%;
                }
                input[type=date]::-webkit-inner-spin-button,
                input[type=date]::-webkit-outer-spin-button {
                    -webkit-appearance: none;
                    margin: 0;
                }
                .input-wrapper.input-group input.input-box {
                    border-radius: 10px 0 0 10px;
                }
                .input-wrapper.input-group input.input-box ~ .input-group-btn button.btn-default {
                    height: 40px;
                    border-radius: 0 10px 10px 0;
                }
                .input-wrapper {
                    position: relative;
                }
                .input-wrapper input.input-box {
                    height: 40px;
                    color: #555;
                    outline: none;
                    border: 1px solid #bbb;
                    padding: 5px 20px;
                    font-weight: bold;
                    border-radius: 10px;
                    position: relative;
                    width: 100%;
                }
                .input-wrapper input.input-box.has-error {
                    border: 1px solid #ed5c5c !important;
                }
                .input-wrapper input.input-box.has-error ~ label.placeholder {
                    color: #ed5c5c !important;
                }
                .input-wrapper input.input-box.has-error-req {
                    border: 1px solid #ed5c5c !important;
                }
                .input-wrapper input.input-box.has-error-req ~ label.placeholder {
                    color: #bbb !important;
                }
                .input-wrapper input.input-box:invalid + label.placeholder {
                    transform: translateY(0);
                }
                .input-wrapper input.input-box:focus,
                .input-wrapper input.input-box:not(:placeholder-shown) {
                    border-color: #2b96f1;
                    color: #050a4e;
                }
                .input-wrapper input.input-box:focus ~ label.placeholder,
                .input-wrapper input.input-box:not(:placeholder-shown) ~ label.placeholder {
                    color: #2b96f1;
                    transform: translateY(-20px);
                    font-weight: bold !important;
                    z-index: 2;
                    left: 20px;
                    top: 10px;
                    pointer-events: none;
                    background: #fff;
                    transition: transform 100ms ease;
                    transform: translateY(-20px);
                    margin-top: 0 !important;
                    padding: 0 2px;
                    font-size: 11px;
                }
                .input-wrapper input.input-box.star {
                    border-color: #e0414e;
                }
                .input-wrapper input.input-box.star + label.placeholder {
                    color: #e0414e;
                }
                .input-wrapper label.placeholder {
                    position: absolute;
                    pointer-events: none;
                    color: #bbb;
                    left: 6%;
                    font-weight: normal;
                    top: 10px;
                    font-size: 15px;
                    margin: 0;
                }
                #bp_count {
                    display: none;
                }
                .loading-msg {
                    position: relative;
                }
                .loading-msg p {
                    padding: 0 10px;
                }
                @media screen and (max-width: 480px) {
                    .scrollTopBtn {
                        bottom: 60px;
                    }
                    .searchingApi {
                        padding-top: 8vh;
                    }
                }
                .text-decoration-underline {
                    text-decoration: underline;
                }
                @-moz-keyframes animateLeft {
                    from {
                        top: 0;
                        bottom: 0;
                        right: -80%;
                        opacity: 1;
                    }
                    to {
                        top: 0;
                        bottom: 0;
                        right: 0;
                        opacity: 1;
                    }
                }
                @-webkit-keyframes animateLeft {
                    from {
                        top: 0;
                        bottom: 0;
                        right: -80%;
                        opacity: 1;
                    }
                    to {
                        top: 0;
                        bottom: 0;
                        right: 0;
                        opacity: 1;
                    }
                }
                @-o-keyframes animateLeft {
                    from {
                        top: 0;
                        bottom: 0;
                        right: -80%;
                        opacity: 1;
                    }
                    to {
                        top: 0;
                        bottom: 0;
                        right: 0;
                        opacity: 1;
                    }
                }
                @keyframes animateLeft {
                    from {
                        top: 0;
                        bottom: 0;
                        right: -80%;
                        opacity: 1;
                    }
                    to {
                        top: 0;
                        bottom: 0;
                        right: 0;
                        opacity: 1;
                    }
                }
                @-moz-keyframes slideUP {
                    0% {
                        transform: translateY(100%);
                    }
                    100% {
                        transform: translateY(0);
                    }
                }
                @-webkit-keyframes slideUP {
                    0% {
                        transform: translateY(100%);
                    }
                    100% {
                        transform: translateY(0);
                    }
                }
                @-o-keyframes slideUP {
                    0% {
                        transform: translateY(100%);
                    }
                    100% {
                        transform: translateY(0);
                    }
                }
                @keyframes slideUP {
                    0% {
                        transform: translateY(100%);
                    }
                    100% {
                        transform: translateY(0);
                    }
                }

            </style>
            <style>
                .btn-group-sm .btn-sm {
                    padding: 0 8px !important;
                }
                body {
                    font-family: Nunito;
                    width: 100%;
                    height: 100%;
                    font-size: 13px;
                    padding-bottom: 0px;
                }
                body,
                .h1,
                .h2,
                .h3,
                .h4,
                .h5,
                .h6,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                .btn {
                    font-family: "Nunito";
                    line-height: 2.2rem;
                }
                h2.section-title {
                    font-size: 24px;
                    font-weight: normal;
                    text-align: center;
                    text-transform: uppercase;
                    margin-bottom: 0;
                }
                h2.subHdng {
                    font-size: 22px;
                    font-weight: normal;
                }
                h2.subHdng {
                    font-size: 20px;
                    font-weight: normal;
                    margin-bottom: 20px;
                }
                h2.subHdng span {
                    background: #fff;
                    padding-right: 10px;
                    display: inline-block;
                }
                h2.subHdng .brdrBtm {
                    border-bottom: 1px solid #ddd;
                    display: block;
                    margin-top: -10px;
                    background: none;
                }
                h3 {
                    font-size: 16px;
                }
                h4 {
                    font-size: 14px;
                    color: #0096d6;
                }
                .font-light {
                    font-weight: 300;
                }
                .pre-wrap {
                    white-space: pre-wrap;
                }
                .primary-color {
                    color: #050a4e !important;
                }
                .active-color {
                    color: #1778f2 !important;
                }
                .orange-color {
                    color: #ffa000 !important;
                }
                .highlight-color {
                    color: #337ab7;
                }
                .success-color {
                    color: #739508 !important;
                }
                .success-color-light {
                    color: #6cd277 !important;
                }
                .gray-color {
                    color: #828282;
                }
                .light-gray-color {
                    color: #aaa;
                }
                .light-gray-x {
                    color: #c1c1c1 !important;
                }
                .md-gray-color {
                    color: #4f4f4f;
                }
                .dark-color {
                    color: #000;
                }
                .md-dark-color {
                    color: #181818;
                }
                .heading-color {
                    color: #262c67;
                }
                .warning-color {
                    color: #ea9500;
                }
                .white-color {
                    color: #fff !important;
                }
                .light-white-color {
                    color: rgba(255,255,255,0.8);
                }
                .white-bg {
                    background: #fff !important;
                }
                .transparent {
                    background: transparent !important;
                }
                .light-info-bg {
                    background: #f0f5ff !important;
                }
                .light-danger-bg {
                    background: #ffefef !important;
                }
                .light-success-bg {
                    background: #eefdb3 !important;
                }
                .light-warning-bg {
                    background: #fbefd6 !important;
                }
                .ahc-heading-bg {
                    background: linear-gradient(57.29deg, #ffe8d8 36.85%, #fff5ee 115.27%);
                    border: none;
                }
                .ahc-hs-heading-bg {
                    background: linear-gradient(57.29deg, #cee3fd 36.85%, #f0f5ff 115.27%);
                    border: none;
                }
                .light-gray-bg {
                    background: #f8f8f8 !important;
                    border: none;
                }
                .text-light {
                    font-weight: 300;
                }
                .light-bold {
                    font-weight: 600;
                }
                .bold {
                    font-weight: 700;
                }
                .bolder {
                    font-weight: 800;
                }
                .strike {
                    text-decoration: line-through;
                }
                .display-flex {
                    display: flex !important;
                }
                .display-align-center {
                    display: flex !important;
                    align-items: center;
                }
                .display-center {
                    display: flex !important;
                    align-items: center;
                    justify-content: center;
                }
                .flex-wrap {
                    display: flex;
                    flex-wrap: wrap;
                }
                .justify-text {
                    text-align: justify;
                }
                .m-t-0 {
                    margin-top: 0 !important;
                }
                .m-b-0 {
                    margin-bottom: 0 !important;
                }
                .m-l-0 {
                    margin-left: 0 !important;
                }
                .m-l-10 {
                    margin-left: 10px !important;
                }
                .m-l-15 {
                    margin-left: 15px !important;
                }
                .m-l-30 {
                    margin-left: 30px !important;
                }
                .m-r-0 {
                    margin-right: 0 !important;
                }
                .m-r-10 {
                    margin-right: 10px !important;
                }
                .m-r-15 {
                    margin-right: 15px !important;
                }
                .m-r-20 {
                    margin-right: 20px !important;
                }
                .m-r-30 {
                    margin-right: 30px !important;
                }
                .m-t-5 {
                    margin-top: 5px !important;
                }
                .m-b-5 {
                    margin-bottom: 5px !important;
                }
                .m-l-5 {
                    margin-left: 5px !important;
                }
                .m-r-5 {
                    margin-right: 5px !important;
                }
                .m-t-10 {
                    margin-top: 10px !important;
                }
                .m-t-15 {
                    margin-top: 15px !important;
                    margin-bottom: 15px;
                }
                .m-b-10 {
                    margin-bottom: 10px !important;
                }
                .m-b-15 {
                    margin-bottom: 15px !important;
                }
                .m-t-20 {
                    margin-top: 20px !important;
                }
                .m-b-20 {
                    margin-bottom: 20px !important;
                }
                .m-b-25 {
                    margin-bottom: 25px !important;
                }
                .m-t-30 {
                    margin-top: 30px !important;
                }
                .m-t-40 {
                    margin-top: 40px !important;
                }
                .m-b-30 {
                    margin-bottom: 30px !important;
                }
                .m-b-40 {
                    margin-bottom: 40px !important;
                }
                .m-l-50 {
                    margin-left: 50px !important;
                }
                .m-l-55 {
                    margin-left: 55px !important;
                }
                .p-t-0 {
                    padding-top: 0 !important;
                }
                .p-b-0 {
                    padding-bottom: 0 !important;
                }
                .p-l-0 {
                    padding-left: 0 !important;
                }
                .p-r-0 {
                    padding-right: 0 !important;
                }
                .p-r-10 {
                    padding-right: 10px !important;
                }
                .p-r-30 {
                    padding-right: 30px !important;
                }
                .p-l-5 {
                    padding-left: 5px !important;
                }
                .p-r-5 {
                    padding-right: 5px !important;
                }
                .p-t-3 {
                    padding-top: 3px !important;
                }
                .p-t-5 {
                    padding-top: 5px !important;
                }
                .p-b-5 {
                    padding-bottom: 5px !important;
                }
                .p-l-10 {
                    padding-left: 10px !important;
                }
                .p-t-10 {
                    padding-top: 10px !important;
                }
                .p-b-10 {
                    padding-bottom: 10px !important;
                }
                .p-l-15 {
                    padding-left: 15px !important;
                }
                .p-r-15 {
                    padding-right: 15px !important;
                }
                .p-t-15 {
                    padding-top: 15px !important;
                }
                .p-b-15 {
                    padding-bottom: 15px !important;
                }
                .p-l-20 {
                    padding-left: 20px !important;
                }
                .p-r-20 {
                    padding-right: 20px !important;
                }
                .p-r-50 {
                    padding-right: 50px !important;
                }
                .p-t-20 {
                    padding-top: 20px !important;
                }
                .p-b-20 {
                    padding-bottom: 20px !important;
                }
                .p-l-25 {
                    padding-left: 25px !important;
                }
                .p-t-30 {
                    padding-top: 30px !important;
                }
                .p-l-30 {
                    padding-left: 30px !important;
                }
                .p-r-30 {
                    padding-right: 30px !important;
                }
                .p-t-70 {
                    padding-top: 70px !important;
                }
                .p-first-banner {
                    padding-top: 70px;
                }
                .p-b-30 {
                    padding-bottom: 30px !important;
                }
                .xsTxt {
                    font-size: 9px;
                    line-height: 12px !important;
                }
                .hpw-text {
                    font-family: Nunito;
                    font-stretch: normal;
                    font-style: italic;
                }
                .hpw-text2 {
                    color: #050a4e;
                    font-family: Nunito;
                    font-stretch: normal;
                }
                .smTxt {
                    font-size: 12px;
                    line-height: 16px !important;
                }
                .smdTxt1 {
                    font-size: 14.5px;
                    line-height: 19px !important;
                }
                .smdTxt {
                    font-size: 15px;
                    line-height: 19px !important;
                }
                .smdTxt1 {
                    font-size: 16px;
                }

                .lights {
                    text-align: center;
                    width: 100%;
                }
                .mdTxt {
                    font-size: 18px;
                    line-height: 23px !important;
                }
                .lgTxt {
                    font-size: 22px;
                    line-height: 28px;
                }
                .xlTxt {
                    font-size: 26px;
                    line-height: 32px;
                }
                .xxlTxt {
                    font-size: 32px;
                    line-height: 35px;
                }
                .auto-height {
                    height: auto !important;
                }
                .auto-min-height {
                    min-height: auto !important;
                }
                .height-fc {
                    height: fit-content;
                }
                .ht-50 {
                    height: 50px;
                }
                .ht-20 {
                    height: 20px;
                }
                .width-fc {
                    width: fit-content;
                }
                .error-txt {
                    color: #f40009;
                }
                .has-error.err-left-border {
                    border-left: 3px solid #db8a8a !important;
                }
                .has-error.err-border {
                    border-left: 3px solid #db8a8a !important;
                    border-top: 1px solid #db8a8a !important;
                    border-bottom: 1px solid #db8a8a !important;
                }
                .mandatory-border {
                    border-left: 1px solid #ffd2d4 !important;
                    border-right: 1px solid #ffd2d4 !important;
                    border-top: 1px solid #ffd2d4 !important;
                    border-bottom: 1px solid #ffd2d4 !important;
                }
                .sticky-header .alert {
                    display: none;
                }
                .stick-bottom {
                    position: fixed;
                    bottom: 3%;
                    right: 10%;
                    left: 10%;
                    z-index: 100 !important;
                }
                .alert-lg.alert-dismissible .close {
                    font-size: 30px;
                    color: #000;
                }
                .auto-overflow {
                    overflow-y: auto;
                }
                .border-right {
                    border-right: 1px solid #e0e0e0;
                }
                .border-bottom {
                    border-bottom: 1px solid #e0e0e0;
                }
                .br-0 {
                    border-radius: 0 !important;
                }
                .br-50 {
                    border-radius: 50%;
                }
                .br-5 {
                    border-radius: 5px !important;
                }
                .br-10 {
                    border-radius: 10px !important;
                }
                .br-15 {
                    border-radius: 15px !important;
                }
                .br-20 {
                    border-radius: 20px !important;
                }
                .br-30 {
                    border-radius: 30px !important;
                }
                .br-t-10 {
                    border-radius: 10px 10px 0 0 !important;
                }
                .br-b-10 {
                    border-radius: 0 0 10px 10px !important;
                }
                .br-t-20 {
                    border-radius: 20px 20px 0 0 !important;
                }
                .br-b-20 {
                    border-radius: 0 0 20px 20px !important;
                }
                .bb {
                    display: block;
                    border-bottom: 1px solid #ddd;
                }
                .mm {
                    margin-right: 3px;
                }
                .form-control {
                    box-shadow: none !important;
                }
                .btn {
                    border-radius: 2px;
                    border-color: transparent !important;
                }
                .btn-lg span.border {
                    border-right: 1px solid #e0e0e0;
                    margin: 0 10px;
                    height: 20px;
                }
                .btn-width {
                    min-width: 150px;
                }
                .btn-width-lg {
                    min-width: 200px;
                }
                .btn-default:active,
                .btn-default:focus {
                    background-color: #fff !important;
                }
                .btn-default:hover {
                    font-weight: bold;
                }
                .btn-default.outline-primary {
                    border: 1px solid #2198ff !important;
                }
                .btn-default.outline-info {
                    border: 1px solid #5fc0de !important;
                }
                .btn-default.outline-normal {
                    border: 1px solid #b4b4be !important;
                }
                .btn-default.outline-danger {
                    border: 1px solid #f3ced2 !important;
                }
                .btn-default.outline-warning {
                    border: 1px solid #f0b036 !important;
                }
                .btn-primary {
                    background-color: #2198ff !important;
                    border-color: #2198ff !important;
                }
                .btn-primary:hover {
                    background-color: #1778f2 !important;
                    border-color: #1778f2 !important;
                }
                .o-5 {
                    opacity: 0.5;
                }
                .o-3 {
                    opacity: 0.3;
                }
                .no-p-r,
                i.mm.no-p-r {
                    padding-right: 0 !important;
                }
                .p-0 {
                    padding: 0 !important;
                }
                .p-10 {
                    padding: 10px !important;
                }
                .p-15 {
                    padding: 15px !important;
                }
                .p-20 {
                    padding: 20px !important;
                }
                .p-25 {
                    padding: 25px !important;
                }
                .m-0 {
                    margin: 0 !important;
                }
                .m-5 {
                    margin: 5px !important;
                }
                .m-10 {
                    margin: 10px !important;
                }
                .m-15 {
                    margin: 15px !important;
                }
                .m-20 {
                    margin: 20px !important;
                }
                .m-t-0 {
                    margin-top: 0;
                }
                .brdr-lt {
                    border-left: 1px solid #ddd;
                }
                .brdr-rt {
                    border-right: 1px solid #ddd;
                }
                .no-brdr-lt {
                    border-left: 0 none;
                }
                .no-brdr-rt {
                    border-right: 0 none;
                }
                .wrap {
                    max-width: 1100px !important;
                    width: 100%;
                }
                .full-width {
                    width: 100% !important;
                }
                .full-height {
                    height: 100% !important;
                }
                .elipsis {
                    overflow: hidden;
                    text-overflow: ellipsis;
                    white-space: nowrap;
                }
                .txt-max-line {
                    overflow: hidden;
                    text-overflow: ellipsis;
                    display: block;
                    -webkit-line-clamp: 2;
                    word-wrap: break-word;
                    line-height: 1.4;
                    max-height: 2.8em;
                }
                .ico {
                    width: 90px;
                    height: 90px;
                    box-shadow: 1px 1px 4px #999;
                    border-radius: 100%;
                    text-align: center;
                    margin: 0 auto;
                    background: #fff;
                }
                .ico .mm {
                    font-size: 50px;
                    line-height: 90px;
                    color: #54646e;
                }
                .has-radius-16 {
                    border-radius: 16px !important;
                }
                .form-inline {
                    border-top: 0;
                    border-right: 0;
                    border-left: 0;
                }
                .form-inline:focus {
                    outline: none;
                    border-bottom-color: #358ec6;
                }
                .card-view,
                .card-view-xs,
                .card-view-sm,
                .card-view-lg {
                    background: #fff;
                    box-shadow: 0 0 5px rgba(24,24,24,0.161);
                }
                .card-view.shadow,
                .card-view-xs.shadow,
                .card-view-sm.shadow,
                .card-view-lg.shadow {
                    box-shadow: 0 0 12px rgba(24,24,24,0.161);
                }
                .card-view.panel-default,
                .card-view-xs.panel-default,
                .card-view-sm.panel-default,
                .card-view-lg.panel-default {
                    border: none;
                }
                .border-card-view,
                .border-card-view-xs,
                .border-card-view-sm,
                .border-card-view-lg {
                    background: #fff;
                    border: 1px solid #e6e6e6;
                }
                .shadow-card-view,
                .shadow-card-view-xs,
                .shadow-card-view-sm,
                .shadow-card-view-lg {
                    background: #fff;
                    box-shadow: 0 0 15px rgba(24,24,24,0.161);
                    overflow: hidden;
                }
                .shadow-card-view.shadow,
                .shadow-card-view-xs.shadow,
                .shadow-card-view-sm.shadow,
                .shadow-card-view-lg.shadow {
                    box-shadow: 0 0 20px rgba(24,24,24,0.5);
                }
                .shadow-card {
                    background: #fff;
                    padding: 15px !important;
                    margin: 10px;
                    border-radius: 25px;
                    box-shadow: 0 0 20px 0 #e8e8e8;
                }
                .btn-card {
                    color: #fff;
                    font-weight: 700;
                    padding: 15px !important;
                    margin: 10px;
                    border-radius: 25px;
                    box-shadow: 0 0 20px 0 #e8e8e8;
                }
                .card-view,
                .border-card-view,
                .shadow-card-view {
                    border-radius: 15px;
                    padding: 20px;
                    min-height: 150px;
                }
                .card-view-xs,
                .border-card-view-xs,
                .shadow-card-view-xs {
                    border-radius: 4px;
                    padding: 10px;
                    min-height: 120px;
                }
                .card-view-sm,
                .border-card-view-sm,
                .shadow-card-view-sm {
                    border-radius: 10px;
                    padding: 15px;
                    min-height: 135px;
                }
                .card-view-lg,
                .border-card-view-lg,
                .shadow-card-view-lg {
                    border-radius: 20px;
                    padding: 25px;
                    min-height: 150px;
                }
                .card-view-lg .uploadwrap,
                .border-card-view-lg .uploadwrap,
                .shadow-card-view-lg .uploadwrap {
                    margin: 0 -25px;
                    border-bottom-right-radius: 20px;
                    border-bottom-left-radius: 20px;
                }
                .shadow-card-view-sm {
                    min-height: auto;
                }
                .dropdown-menu {
                    border-color: #d6d6d6;
                    box-shadow: none;
                    border-radius: 0 !important;
                    border-top: 0;
                }
                .panel-default >.panel-heading,
                .panel-default >.panel-footer {
                    background-color: #fff;
                    overflow: hidden;
                }
                .form-control.error {
                    border-color: #a94442;
                }
                .form-control.success {
                    border-color: #3c763d;
                }
                .form-loading {
                    content: "";
                    position: fixed;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    z-index: 1000000;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(42,66,86,0.25);
                }
                .form-loading span {
                    position: fixed;
                    left: 50%;
                    top: 50%;
                    background-color: #fff;
                    padding: 20px 0;
                    box-shadow: 0 1px 6px rgba(0,0,0,0.12), 0 1px 10px rgba(0,0,0,0.12);
                    border-radius: 3px;
                    margin: -35px 0 0 -150px;
                    width: 300px;
                    font-weight: bold;
                    text-align: center !important;
                }
                .form-loading span img {
                    width: 30px;
                    display: inline-block;
                    margin-left: 15px;
                }
                .switch input:checked + .slider {
                    background-color: #2196f3;
                }
                .switch input:checked + .slider:before {
                    -webkit-transform: translateX(26px);
                    -ms-transform: translateX(26px);
                    transform: translateX(26px);
                }
                .options-container {
                    display: block;
                    position: relative;
                    padding-left: 35px;
                    margin-bottom: 12px;
                    cursor: pointer;
                    font-weight: normal;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                }
                .options-container input {
                    position: absolute;
                    opacity: 0;
                    cursor: pointer;
                    height: 0;
                    width: 0;
                }
                .options-container input:checked ~ .option {
                    background-color: #2196f3;
                }
                .options-container input:checked ~ .option:after {
                    display: block;
                }
                .options-container strong {
                    display: inline-block;
                }
                .options-container .option {
                    position: absolute;
                    top: 0;
                    left: 0;
                    height: 20px;
                    width: 20px;
                    border: 1px solid #2198ff;
                    border-radius: 3px;
                    background-color: #e5e5e5;
                }
                .options-container .option.has-error {
                    border: 1px solid #e85b5c;
                    background: #ffefef;
                }
                .options-container .option:after {
                    content: "";
                    position: absolute;
                    display: none;
                }
                .options-container .option.radio {
                    border-radius: 50%;
                }
                .options-container .option.radio:after {
                    top: 5px;
                    left: 5px;
                    width: 8px;
                    height: 8px;
                    border-radius: 50%;
                    background: #fff;
                }
                .options-container .option.checkbox:after {
                    left: 6px;
                    top: 0;
                    width: 6px;
                    height: 12px;
                    border: solid #fff;
                    border-width: 0 3px 3px 0;
                    -webkit-transform: rotate(45deg);
                    -ms-transform: rotate(45deg);
                    transform: rotate(45deg);
                }
                .options-container .option.radio.lg:after {
                    top: 8px;
                    left: 8px;
                }
                .options-container .option.radio.sm:after {
                    top: 3px;
                    left: 3px;
                }
                .options-container .option.checkbox.sm:after {
                    left: 4px;
                    top: 0;
                    height: 9px;
                    border-width: 0 2px 2px 0;
                }
                .options-container .option.lg {
                    height: 25px;
                    width: 25px;
                    font-size: 22px;
                }
                .options-container .option.sm {
                    height: 15px;
                    width: 15px;
                    font-size: 10px;
                }
                .rb-gradient-bg {
                    background: linear-gradient(109deg, #4285f4 6%, #db4437 90%);
                    border: 0;
                    color: #fff;
                    font-size: 10px;
                    line-height: 14px !important;
                    font-weight: 400;
                    border-radius: 10px;
                    padding: 3px 10px;
                    overflow: hidden;
                }
                .rb-gradient-text {
                    background: linear-gradient(104deg, #4285f4 4%, #db4437 35%);
                    background-clip: text;
                    -webkit-text-fill-color: transparent;
                }
                hr.rb-gradient-text {
                    background: linear-gradient(to right, #4882ec -3%, #db4437);
                    height: 1px;
                    opacity: 0.3;
                }
                .gold-text {
                    background: linear-gradient(#fbea86 0%, #fbea86 8%, #fbea86 30%, #fbea86 40%, transparent 80%), linear-gradient(#fff 0%, #e0af21 8%, #e0af21 25%, #e0af21 62.5%, #e0af21 100%);
                    background-clip: text;
                    -webkit-text-fill-color: transparent;
                }
                .uploadwrap .file-upload {
                    background: #fdf7f7 !important;
                }
                .arrow-lg {
                    width: 15px;
                    height: 15px;
                    border-color: #4585f4;
                    position: absolute;
                }
                .arrow-md {
                    width: 12px;
                    height: 12px;
                    border-color: #4585f4;
                    position: absolute;
                    border-width: 2.5px;
                }
                .arrow-sm {
                    width: 8px;
                    height: 8px;
                    border-color: #4585f4;
                    position: absolute;
                    border-width: 2.5px;
                }
                .arrow {
                    width: 10px;
                    height: 10px;
                    border-color: #000 !important;
                    position: absolute;
                    top: 12px;
                    left: 13px;
                }
                .arrow-left {
                    border-bottom: 3px solid;
                    border-left: 3px solid;
                    transform: rotate(45deg);
                }
                .arrow-right {
                    border-bottom: 3px solid;
                    border-left: 3px solid;
                    transform: rotate(-135deg);
                    left: 9px;
                }
                .arrow-up {
                    border-bottom: 3px solid;
                    border-left: 3px solid;
                    transform: rotate(135deg);
                }
                .arrow-down {
                    border-bottom: 3px solid;
                    border-left: 3px solid;
                    transform: rotate(315deg);
                }
                .arrow-circle.primary {
                    border: 1px solid #2198ff;
                    opacity: 1;
                }
                .arrow-circle.succes-bg {
                    background: #84cc26;
                }
                .arrow-circle.warning-bg {
                    background: #f0b036;
                }
                .mb-select {
                    display: flex;
                    width: 100%;
                    height: 38px;
                    border-radius: 10px;
                    padding-inline: 15px;
                    outline: none;
                    border: 1px solid #2b96f1;
                    font-weight: 700;
                }
                .arrow-circle.primary.md,
                .arrow-circle.succes-bg.md,
                .arrow-circle.warning-bg.md {
                    width: 25px;
                    height: 24px;
                }
                .arrow-circle.primary.sm,
                .arrow-circle.succes-bg.sm,
                .arrow-circle.warning-bg.sm {
                    width: 20px;
                    height: 20px;
                }
                .arrow-circle.primary.xs,
                .arrow-circle.succes-bg.xs,
                .arrow-circle.warning-bg.xs {
                    width: 13px;
                    height: 13px;
                }
                .arrow-circle.primary.xl,
                .arrow-circle.succes-bg.xl,
                .arrow-circle.warning-bg.xl {
                    width: 45px;
                    height: 45px;
                }
                .loader {
                    position: absolute;
                    top: 15px;
                    right: 15%;
                    z-index: 99999;
                }
                .loader .arc {
                    position: relative;
                    width: 35px;
                    height: 35px;
                }
                .loader .arc.sm {
                    width: 30px;
                    height: 30px;
                }
                .loader .arc.sm:after {
                    width: 18px;
                    height: 18px;
                }
                .loader .arc.xs {
                    width: 25px;
                    height: 25px;
                }
                .loader .arc.xs:after {
                    width: 15px;
                    height: 15px;
                }
                .loader .arc.sm:after,
                .loader .arc.xs:after,
                .loader .arc.sm:before,
                .loader .arc.xs:before {
                    border-width: 2px;
                }
                .loader .arc:before,
                .loader .arc:after {
                    border-bottom: 3px solid #4585f4;
                    border-left: 3px solid transparent;
                    border-radius: 50%;
                    border-right: 3px solid #4585f4;
                    border-top: 3px solid #4585f4;
                    bottom: 0;
                    box-sizing: border-box;
                    content: '';
                    left: 0;
                    margin: auto;
                    position: absolute;
                    right: 0;
                    top: 0;
                    transform-origin: center center;
                }
                .loader .arc:before {
                    animation: rotate 1s ease-in-out infinite;
                    height: inherit;
                    width: inherit;
                }
                .loader .arc:after {
                    animation: rotate 1s ease-in-out infinite reverse;
                    height: 50%;
                    width: 50%;
                }
                .input-group .loader {
                    right: 11%;
                }
                span.chip {
                    padding: 3px 10px;
                    border: 1px solid #707070;
                    font-size: 12px;
                    color: #707070;
                    min-width: 100px;
                    border-radius: 8px;
                    margin-right: 10px;
                    font-weight: 600;
                }
                span.chip a {
                    font-size: 14px;
                    text-decoration: none;
                    margin-left: 5px;
                }
                span.chip a:hover {
                    font-weight: 700;
                }
                .cross-position {
                    position: absolute;
                    top: -5px;
                    right: -5px;
                    z-index: 9999 !important;
                }
                .lab-video {
                    width: 390px;
                    height: 220px;
                    position: fixed;
                    bottom: 15%;
                    right: 15px;
                    z-index: 999 !important;
                    transition: margin 0.5s ease-in;
                }
                @media screen and (max-width: 480px) {
                    .lab-video {
                        height: 155px;
                        bottom: 12%;
                        right: 10px;
                        width: 280px;
                    }
                }
                .horizontal-scrollr {
                    overflow-x: auto;
                    overflow-y: hidden;
                    white-space: nowrap;
                    -ms-overflow-style: none /* IE and Edge */;
                    scrollbar-width: none;
                }
                .horizontal-scrollr::-webkit-scrollbar {
                    display: none;
                }
                .card-background {
                    background-repeat: no-repeat;
                    background-position: 80% 100%;
                }
                .card-background.red-wave {
                    background-image: url("/assets/background/red-wave-bottom-sm.svg");
                }
                .card-background.blue-wave {
                    background-image: url("/assets/background/blue-wave-bottom-sm.svg");
                }
                .wave-section {
                    color: #262c67;
                    background-size: cover;
                    background-repeat: no-repeat;
                    min-height: 600px;
                }
                .wave-section.md {
                    min-height: 500px;
                }
                .wave-section.smd {
                    min-height: 450px;
                }
                .wave-section.sm {
                    min-height: 400px;
                }
                .wave-section.xs {
                    min-height: 200px;
                }
                .wave-section.blue-wave-lg {
                    background-image: url("/assets/background/blue-wave-lg.svg");
                }
                .wave-section.blue-wave {
                    background-image: url("/assets/background/blue-wave.svg");
                }
                .wave-section.red-wave {
                    background-image: url("/assets/background/red-wave.svg");
                }
                .wave-section .content {
                    padding: 25px 0;
                    margin: auto;
                    width: 70%;
                    max-width: 70%;
                }
                .wave-section .banner {
                    margin: auto;
                    width: 75%;
                    max-width: 75% !important;
                }
                .wave-section .home-banner img {
                    padding: 10px;
                }
                .cart-wave-section {
                    color: #262c67;
                    background-size: cover;
                    background-repeat: no-repeat;
                }
                .cart-wave-section.md {
                    min-height: 500px;
                }
                .cart-wave-section.blue-wave-lg {
                    background-image: url("/assets/background/blue-wave-lg.svg");
                }
                .cart-wave-section.blue-wave {
                    background-image: url("/assets/background/blue-wave.svg");
                }
                .cart-wave-section.red-wave {
                    background-image: url("/assets/background/red-wave.svg");
                }
                .cart-wave-section .content {
                    padding: 25px 0;
                    margin: auto;
                    width: 70%;
                    max-width: 70%;
                }
                .cart-wave-section .banner {
                    margin: auto;
                    width: 75%;
                    max-width: 75% !important;
                }
                .cart-wave-section .home-banner img {
                    padding: 10px;
                }
                .bg-info-container {
                    background-color: #eaf6ff;
                    min-height: 250px;
                    padding: 25px;
                    box-shadow: 0 0 15px rgba(24,24,24,0.161);
                    border-radius: 25px;
                    font-weight: bold;
                }
                .text-elipsis {
                    display: inherit;
                    white-space: nowrap;
                    text-overflow: ellipsis;
                    overflow: hidden;
                }
                .md-content {
                    max-height: 200px;
                    overflow-y: auto !important;
                }
                .smd-content {
                    max-height: 240px;
                    overflow-y: auto !important;
                }
                .lg-content {
                    max-height: 300px;
                    overflow-y: auto !important;
                }
                .xl-content {
                    max-height: 400px;
                    overflow-y: auto !important;
                }
                .fixed-footer {
                    position: fixed;
                    bottom: 0;
                    right: 0;
                    left: 0;
                    background: #fff;
                    box-shadow: 0 0 10px #d5d5d5;
                    padding: 12px 15px;
                    z-index: 11;
                    transition: 2s height ease-in-out;
                }
                .fixed-button {
                    box-shadow: 0 0 10px #d5d5d5;
                    margin: 20px 20px 10px 20px;
                    width: -webkit-fill-available;
                }
                @media screen and (max-height: 480px) {
                    .fixed-footer {
                        z-index: -1;
                    }
                }
                @media screen and (max-width: 768px) {
                    .container.wrap {
                        padding: 0;
                    }
                    .appointment-details-expand {
                        flex-direction: column;
                        display: flex;
                        justify-content: flex-start;
                        align-items: center;
                        padding: 5px 5px 0;
                        width: 100%;
                    }
                    .appointment-details-expand .justify-cnt {
                        justify-content: space-between;
                        align-items: center;
                        width: 100%;
                    }
                }
                .flex-dir-col {
                    display: flex;
                    flex-direction: column;
                }
                .justify-start {
                    justify-content: flex-start;
                }
                .justify-end {
                    justify-content: flex-end;
                }
                .justify-space-between {
                    justify-content: space-between;
                }
                .justify-content-space-around {
                    justify-content: space-around;
                }
                .separator {
                    display: flex;
                    align-items: center;
                    text-align: center;
                }
                .separator:not(:empty)::before {
                    margin-right: 0.25em;
                }
                .separator:not(:empty)::after {
                    margin-left: 0.25em;
                }
                .separator::before,
                .separator::after {
                    content: '';
                    flex: 1;
                    border-bottom: 1px dashed;
                }
                .howitw {
                    margin-bottom: 50px;
                    clear: both;
                }
                .howitw .card {
                    border: 1px solid #2198ff;
                    padding: 15px;
                    box-sizing: border-box;
                    border-radius: 3px;
                    margin-bottom: 30px;
                }
                .howitw .card i.mm {
                    font-size: 25px;
                }
                .howitw .card p {
                    min-height: 50px;
                    margin-top: 15px;
                    margin-bottom: 0;
                    clear: both;
                    line-height: 18px;
                }
                .howitw .card span {
                    border: 1px solid #ddd;
                    height: 30px;
                    width: 30px;
                    text-align: center;
                    line-height: 30px;
                    border-radius: 100%;
                    display: inline-block;
                }
                .howitw .howitw.mumbai .col-sm-3 {
                    width: 20%;
                }
                .labtestItem {
                    padding: 9px 20px;
                    border-radius: 12px;
                    border: 0.5px solid #c8c8c8;
                    background-color: #fff;
                }
                .labtestItem.selected {
                    border: 1px solid #559300;
                    padding: 6px 10px;
                    margin-right: 5px;
                    margin-bottom: 5px;
                }
                .labtestSearch {
                    height: 38px;
                    padding-left: 20px;
                    padding-right: 20px;
                    border: 0.5px solid #d9d9d9;
                    border-radius: 12px;
                    width: 100%;
                    background: #f8f8f8;
                }
                .labtestSearch:active,
                .labtestSearch:focus {
                    border: 0.5px solid #d9d9d9;
                }
                .labtestSearch:hover {
                    border: 0.5px solid #969696;
                }
                .ahc-howitworks {
                    display: flex;
                    flex-direction: row;
                    justify-content: flex-start;
                    width: 100%;
                    align-items: center;
                }
                .ahc-howitworks .ahc-howitworks-row {
                    width: 100%;
                }
                .ahc-howitworks .howitworks-content {
                    padding: 20px;
                }
                .ahc-howitworks .howitworks-container {
                    width: 100%;
                    display: flex;
                    flex-direction: column;
                    justify-content: flex-start;
                    align-items: start;
                }
                .ahc-howitworks .howitworks-container .ahc-loc {
                    justify-content: start;
                    align-items: center;
                    width: 100%;
                }
                .ahc-howitworks .howitworks-container .ahc-loc .ahc-circle {
                    border: 1px solid #828282;
                    color: #555a64;
                    display: flex;
                    font-weight: 600;
                    height: 30px;
                    width: 30px;
                    border-radius: 50%;
                    padding: 10px;
                    justify-content: center;
                    align-items: center;
                }
                .ahc-howitworks .howitworks-container .ahc-loc .ahc-line {
                    height: 2px;
                    width: 100px;
                    display: inline-block;
                    border: 1px solid #828282;
                    width: 100%;
                }
                .discount {
                    border: 0;
                    font-size: 9px;
                    line-height: 12px !important;
                    font-weight: 800;
                    border-radius: 10px;
                    padding: 3px 10px;
                    overflow: hidden;
                    background: linear-gradient(109deg, rgba(66,133,244,0.2) 6%, rgba(219,68,55,0.2) 90%);
                }
                @media (max-width: 480px) {
                    .labtestItem.selected {
                        padding: 4px 20px;
                        border-radius: 20px;
                    }
                    body,
                    .h1,
                    .h2,
                    .h3,
                    .h4,
                    .h5,
                    .h6,
                    h1,
                    h2,
                    h3,
                    h4,
                    h5,
                    h6,
                    .btn {
                        line-height: 1.8rem;
                    }
                    .glider-dot {
                        width: 9px !important;
                        height: 9px !important;
                    }
                    .arc {
                        width: 30px;
                        height: 30px;
                    }
                    .wave-section.red-wave {
                        background-image: url("/assets/background/red-wave-sm.svg");
                    }
                    .wave-section.blue-wave {
                        background-image: url("/assets/background/blue-wave-sm.svg");
                    }
                    .wave-section .content {
                        max-width: 90%;
                        width: 90%;
                    }
                    .wave-section .banner {
                        max-width: 95% !important;
                        width: 95%;
                    }
                    .wave-section .home-banner img {
                        padding: 10px;
                    }
                    footer .background .footer {
                        width: 100% !important;
                    }
                    .ahc-howitworks {
                        height: 380px;
                        margin: 30px 0;
                    }
                    .ahc-howitworks .ahc-howitworks-row {
                        height: 100%;
                        flex-direction: column;
                    }
                    .ahc-howitworks .howitworks-container {
                        width: 90%;
                        flex-direction: row;
                        align-items: center;
                    }
                    .ahc-howitworks .howitworks-container .ahc-loc {
                        height: 100%;
                        width: initial !important;
                        flex-direction: column;
                        margin: 20px 20px 20px 0;
                        align-items: center;
                    }
                    .ahc-howitworks .howitworks-container .ahc-loc .ahc-line {
                        height: 100%;
                        width: 0;
                    }
                    .ahc-howitworks .howitworks-container .ahc-howitworks-text {
                        margin-bottom: 10px;
                    }
                    .ahc-howitworks .howitworks-container .ahc-howitworks-text p {
                        font-weight: 300;
                    }
                    .horizontal-scrollr .card-view-sm {
                        margin: 10px;
                        display: inline-block;
                        max-width: 80%;
                        background-color: rgba(255,255,255,0.6);
                    }
                    .horizontal-scrollr .card-view-sm .review {
                        white-space: initial;
                        min-height: 65px;
                    }
                }
                @media (max-width: 1685px) {
                    .sticky-header .hide-on-stick {
                        visibility: hidden;
                    }
                }
                @media (max-width: 400px) {
                    .app-banner .android,
                    .app-banner .ios {
                        height: 22px;
                    }
                    .discount {
                        padding: 3px 6px;
                    }
                    .sale_banner {
                        width: 94% !important;
                    }
                }
                .font-size14 {
                    font-size: 14px;
                }
                .border-grey {
                    border: 1px solid #e0e0e0;
                    border-radius: 15px;
                }
                .opacity-full {
                    opacity: 1;
                }
                .white-background-transparent {
                    background: rgba(255,255,255,0.5);
                }
                .heading-medicine {
                    padding: 25px;
                    margin-bottom: 0px;
                }
                .error-msg {
                    text-align: center;
                    color: #db4437;
                }
                .mar-bot-sale {
                    margin-bottom: 20px !important;
                }
                .mar-sale-top {
                    margin-top: 20px !important;
                }
                .p-b-30 {
                    padding-bottom: 300px;
                }
                .container-fluid.payment {
                    padding: 0px;
                }
                .bg-white-trans {
                    padding-top: 0;
                    padding-bottom: 5%;
                    background: url("/assets/sale2/banner-bg-6.webp") no-repeat;
                    background-size: 100% 100%;
                }
                .bg-white-trans .heading-payment {
                    padding-left: 10%;
                }
                .bg-white-trans-payment {
                    background: rgba(255,255,255,0.561);
                    width: 80%;
                    margin: auto;
                    padding: 10px;
                    border-radius: 10px;
                }
                .pay-image {
                    width: 10%;
                }
                .pay-image img {
                    width: 100%;
                    margin: auto;
                }
                .text-pay {
                    width: 90%;
                    margin: auto;
                    font-size: 15px;
                    padding-left: 10px;
                    padding-top: 10px;
                }
                .accordian-custom {
                    background: #fff;
                    padding: 5px;
                    border-radius: 5px;
                }
                .heading {
                    color: #000;
                    padding: 5px;
                    font-size: 15px;
                    font-weight: 600;
                }
                .call-no {
                    background: #fff;
                    width: 150px;
                    text-align: center;
                    border: 1px solid #d0d0d0;
                    border-radius: 15px;
                    padding: 5px;
                    position: fixed;
                    bottom: 12px;
                    right: 10px;
                    cursor: pointer;
                    z-index: 1;
                }
                .call-no img {
                    width: 25px;
                }
                .flex-grow-1 {
                    flex-grow: 1;
                }
                .color-white {
                    color: #fff;
                }
                .align-items-center {
                    align-items: center;
                }
                .text-align-center {
                    text-align: center;
                }
                .strikethrough {
                    position: relative;
                }
                .strikethrough:before {
                    position: absolute;
                    content: "";
                    left: 0;
                    top: 50%;
                    right: 0;
                    border-top: 1px solid;
                    border-color: #f00;
                    -webkit-transform: rotate(-5deg);
                    -moz-transform: rotate(-5deg);
                    -ms-transform: rotate(-5deg);
                    -o-transform: rotate(-5deg);
                    transform: rotate(-5deg);
                }
                .first-banner {
                    padding-top: 2%;
                    padding-bottom: 10%;
                    background: url("/assets/sale2/banner-bg-1.webp") no-repeat;
                    background-size: 100% 100%;
                }
                .second-banner {
                    padding-top: 2%;
                    padding-bottom: 10%;
                    background: url("/assets/sale2/banner-bg-2.webp") no-repeat;
                    background-size: 100% 100%;
                }
                .third-banner {
                    padding-top: 2%;
                    padding-bottom: 10%;
                    background: url("/assets/sale2/banner-bg-3.webp") no-repeat;
                    background-size: 100% 100%;
                }
                .fourth-banner {
                    padding-top: 2%;
                    padding-bottom: 10%;
                    background: url("/assets/sale2/banner-bg-4.webp") no-repeat;
                    background-size: 100% 100%;
                }
                .fifth-banner {
                    padding-top: 2%;
                    padding-bottom: 10%;
                    background: url("/assets/sale2/banner-bg-5.webp") no-repeat;
                    background-size: 100% 100%;
                    text-align: center;
                }
                .p-b-5-per {
                    padding-bottom: 5%;
                }
                .bg-right {
                    background: url("/assets/sales/bg-right-semi-circle.png") no-repeat;
                    background-size: 80%;
                    background-position: 100% 50%;
                }
                .bg-left {
                    background: url("/assets/sales/bg-left-semi-circle.png") no-repeat;
                    background-size: 80%;
                }
                .margin-auto {
                    margin: auto;
                }
                .font-size-sm {
                    font-size: 10px;
                }
                .margin-check {
                    padding-left: 0%;
                }
                .margin-check.pl {
                    padding-left: 25%;
                }
                .sales-container {
                    min-height: 50vh;
                }
                .sales-container .section-banner-first {
                    padding-top: 10px;
                }
                .sales-container .section-banner-first .middle-img .place-banner {
                    position: relative;
                    left: -10%;
                }
                .sales-container .section-banner-first .middle-img .place-banner img {
                    width: 100%;
                }
                .sales-container .section-banner-first .banner-row {
                    position: relative;
                    top: 50px;
                }
                .sales-container .section-banner-first .banner-row .place-banner-caption {
                    position: absolute;
                    bottom: 0%;
                }
                .sales-container .section-banner-first .banner-row .place-banner-caption img {
                    width: 80%;
                }
                .sales-container .section-banner-first .place-banner-others {
                    text-align: center;
                }
                .sales-container .section-banner-first .place-banner-others img {
                    width: 70%;
                }
                .sales-container .section-banner-first .banner-2-info .gold img {
                    text-align: center;
                    width: 50%;
                }
                .sales-container .section-banner-first .banner-2-info .meds img {
                    text-align: center;
                    width: 50%;
                }
                .sales-container .section-banner-first .banner-2-info .offers .part-1 {
                    line-height: 1.32em;
                }
                .sales-container .section-banner-first .banner-2-info .offers .part-2 {
                    text-align: center;
                    width: 80%;
                    padding-bottom: 10px;
                }
                .sales-container .section-banner-first .banner-2-info .gold.gradient {
                    width: 300px;
                    background-image: linear-gradient(to right, #e5f0ff, #ffcbcd);
                    color: #050a4e;
                    font-weight: 600;
                    font-size: 20px;
                }
                .sales-container .section-banner-first .banner-2-info .gold.gradient.more-width {
                    width: 330px;
                }
                .sales-container .section-banner-first .banner-2-info .coupon-code img {
                    width: 60%;
                }
                .sales-container .section-banner-first .banner-2-info .coupon-code .part-1 {
                    line-height: 1.32em;
                }
                .sales-container .section-banner-first .banner-2-info .coupon-code .redeem-btn {
                    background: #fff;
                    border: 2px solid #fff;
                    border-style: dotted;
                    border-radius: 5px;
                    padding: 5px;
                    width: 150px;
                    text-align: center;
                    color: #1778f2;
                    font-weight: bold;
                }
                .sales-container .section-banner-first .place-banner-ad img {
                    width: 100%;
                }
                .for-Desktop {
                    display: block;
                }
                .for-Mobile {
                    display: none;
                }
                .width-full {
                    width: 100%;
                }
                @media (max-width: 480px) {
                    .for-Desktop {
                        display: none;
                    }
                    .for-Mobile {
                        display: block;
                    }
                    .place-banner-caption.double-banner img {
                        width: 90% !important;
                    }
                    .double-banner-pad {
                        padding-top: 15%;
                    }
                    .margin-check.pl {
                        padding-left: 0%;
                    }
                    .margin-check {
                        text-align: center;
                        padding-left: 0%;
                    }
                    .margin-check .gold {
                        margin: auto;
                    }
                    .margin-check .coupon {
                        margin: auto;
                    }
                    .margin-check .redeem-btn {
                        margin: auto;
                    }
                }
                .float-bot {
                    z-index: 1;
                }
                .accordian-custom {
                    margin: 10px 0px 10px 0px;
                }
                .accordian-custom .answer {
                    padding-left: 50px;
                    font-size: 15px;
                }
                a.heading-sale {
                    padding: 5px;
                    font-size: 15px;
                    font-weight: 600;
                    border-bottom: 0px;
                    text-decoration: none;
                    color: #fff;
                    text-decoration-color: none;
                }
                .round-spinner {
                    border: 2px solid;
                    border-radius: 50%;
                    width: 20px;
                    height: 20px;
                    display: inline-block;
                    border-top-color: transparent;
                    animation: roundSpinner linear 1s infinite;
                }
                @-moz-keyframes rotate {
                    to {
                        transform: rotate(360deg);
                    }
                }
                @-webkit-keyframes rotate {
                    to {
                        transform: rotate(360deg);
                    }
                }
                @-o-keyframes rotate {
                    to {
                        transform: rotate(360deg);
                    }
                }
                @keyframes rotate {
                    to {
                        transform: rotate(360deg);
                    }
                }
                @-moz-keyframes roundSpinner {
                    0% {
                        transform: rotate(0deg);
                    }
                    25% {
                        transform: rotate(90deg);
                    }
                    50% {
                        transform: rotate(180deg);
                    }
                    75% {
                        transform: rotate(270deg);
                    }
                    100% {
                        transform: rotate(360deg);
                    }
                }
                @-webkit-keyframes roundSpinner {
                    0% {
                        transform: rotate(0deg);
                    }
                    25% {
                        transform: rotate(90deg);
                    }
                    50% {
                        transform: rotate(180deg);
                    }
                    75% {
                        transform: rotate(270deg);
                    }
                    100% {
                        transform: rotate(360deg);
                    }
                }
                @-o-keyframes roundSpinner {
                    0% {
                        transform: rotate(0deg);
                    }
                    25% {
                        transform: rotate(90deg);
                    }
                    50% {
                        transform: rotate(180deg);
                    }
                    75% {
                        transform: rotate(270deg);
                    }
                    100% {
                        transform: rotate(360deg);
                    }
                }
                @keyframes roundSpinner {
                    0% {
                        transform: rotate(0deg);
                    }
                    25% {
                        transform: rotate(90deg);
                    }
                    50% {
                        transform: rotate(180deg);
                    }
                    75% {
                        transform: rotate(270deg);
                    }
                    100% {
                        transform: rotate(360deg);
                    }
                }

            </style>
            <style>
                .terms-use {

                    /* Font & Text */
                    font-family: Nunito;
                    font-size: 14px;
                    font-style: normal;
                    font-variant: normal;
                    font-weight: 700;
                    letter-spacing: normal;
                    line-height: 22px;
                    text-decoration: none solid rgb(255, 255, 255);
                    text-align: center;
                    text-indent: 0px;
                    text-transform: none;
                    vertical-align: baseline;
                    white-space: nowrap;
                    word-spacing: 0px;

                    /* Color & Background */
                    background-attachment: scroll;
                    background-color: rgba(255, 255, 255, 0.3);
                    background-image: none;
                    background-position: 0% 0%;
                    background-repeat: repeat;
                    color: rgb(255, 255, 255);

                    /* Box */
                    height: 34px;
                    width: 112.242px;
                    border: 0px none rgb(255, 255, 255);
                    border-top: 0px none rgb(255, 255, 255);
                    border-right: 0px none rgb(255, 255, 255);
                    border-bottom: 0px none rgb(255, 255, 255);
                    border-left: 0px none rgb(255, 255, 255);
                    margin: 0px;
                    padding: 6px 15px;
                    max-height: none;
                    min-height: 0px;
                    max-width: none;
                    min-width: 0px;

                    /* Positioning */
                    position: static;
                    top: auto;
                    bottom: auto;
                    right: auto;
                    left: auto;
                    float: none;
                    display: inline-block;
                    clear: none;
                    z-index: auto;

                    /* List */
                    list-style-image: none;
                    list-style-type: disc;
                    list-style-position: outside;

                    /* Table */
                    border-collapse: separate;
                    border-spacing: 0px 0px;
                    caption-side: top;
                    empty-cells: show;
                    table-layout: auto;

                    /* Miscellaneous */
                    overflow: visible;
                    cursor: pointer;
                    visibility: visible;

                    /* Effects */
                    transform: none;
                    transition: all 0s ease 0s;
                    outline: rgb(255, 0, 0) dashed 1px;
                    outline-offset: 0px;
                    box-sizing: border-box;
                    resize: none;
                    text-shadow: none;
                    text-overflow: clip;
                    word-wrap: normal;
                    box-shadow: none;
                    border-top-left-radius: 5px;
                    border-top-right-radius: 5px;
                    border-bottom-left-radius: 5px;
                    border-bottom-right-radius: 5px;
                }

                footer span{
                    white-space: normal;
                }


                footer {

                    background: #fff;
                    line-height: 20px;
                    color: #6a6a6a;
                    width: 100%;
                    z-index: 1000;
                    margin-top: 30px;
                    z-index: 1;
                    font-family: 'Nunito', sans-serif;
                }

                footer .background {
                    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920.213 843.135'%3E%3Cdefs%3E%3ClinearGradient id='linear-gradient' x1='.991' x2='.044' y1='1' y2='-.277' gradientUnits='objectBoundingBox'%3E%3Cstop offset='0' stop-color='%23db4437' /%3E%3Cstop offset='1' stop-color='%234285f4' /%3E%3C/linearGradient%3E%3C/defs%3E%3Cg id='Group_88823' data-name='Group 88823' transform='translate(.106 -5466)'%3E%3Cg id='Group_88822' data-name='Group 88822' opacity='0.2' transform='translate(-130.431 3200.492)'%3E%3Cpath id='Path_184266' d='M880.6 2453.774c99.992 3.627 201.328 7.3 303.117 9.367-102.182-8.65-202.852-19.545-302.083-30.291-179.837-19.475-349.7-37.869-518.858-42.523-95.63-2.636-173.4-2.471-232.341.472v65.452c58.3-5.625 134.554-9.538 227.86-11.672 164.811-3.769 338.459 2.521 522.305 9.195z' fill='none' data-name='Path 184266' /%3E%3Cpath id='Path_184267' d='M1907.4 2396.058c-68.136 33.924-153.684 54.538-254.267 61.268-134.251 8.983-270.087 10.652-405.441 8.89 116.943 8.659 235.857 13.768 356.865 11.761 226.646-3.759 354.328-35.817 421.53-62.049 8.939-3.489 17.066-6.968 24.454-10.387v-136.124q-6.141 10.161-13.6 20.5c-31.402 43.266-74.986 78.977-129.541 106.141z' fill='none' data-name='Path 184267' /%3E%3Cpath id='Path_184268' d='M2026.811 2417.791c-42.878 16.737-95.522 30.377-156.47 40.542-76.149 12.7-165.562 19.982-265.755 21.644q-26.6.441-53.088.435c-113.917 0-225.963-5.9-336.247-14.678-112.418-1.9-224.39-5.959-334.727-9.961-183.813-6.669-357.429-12.967-522.188-9.194-93.371 2.135-169.634 6.051-227.9 11.682v50.386h1920.101V2407.76c-7.196 3.299-15.079 6.656-23.726 10.031z' fill='none' data-name='Path 184268' /%3E%3Cpath id='Path_184269' d='M1604.553 2477.977c-121.008 2.007-239.922-3.1-356.865-11.761q-16.222-.21-32.437-.482c110.284 8.783 222.33 14.679 336.247 14.678q26.461 0 53.088-.435c100.193-1.662 189.606-8.943 265.755-21.644 60.948-10.165 113.592-23.8 156.47-40.542 8.647-3.375 16.53-6.732 23.726-10.031v-2.219c-7.388 3.419-15.515 6.9-24.454 10.387-67.202 26.232-194.883 58.29-421.53 62.049z' fill='%234285f4' data-name='Path 184269' /%3E%3Cpath id='Path_184270' d='M362.772 2390.327c169.158 4.654 339.021 23.048 518.858 42.523 99.231 10.746 199.9 21.641 302.083 30.291q15.783.321 31.578.594c-112.963-9-224.079-21.03-333.446-32.874-179.878-19.479-349.78-37.877-519.019-42.534-95.624-2.634-173.41-2.47-232.395.471v2c58.936-2.942 136.711-3.107 232.341-.471z' fill='%234285f4' data-name='Path 184270' /%3E%3Cpath id='Path_184271' d='M1653 2455.33c-144.908 9.7-291.68 10.873-437.7 8.405q16.17 1.288 32.4 2.481c135.354 1.762 271.19.093 405.441-8.89 100.583-6.73 186.131-27.344 254.267-61.268 54.559-27.164 98.143-62.875 129.54-106.14q7.484-10.312 13.6-20.5v-3.909c-4.529 7.694-9.6 15.5-15.3 23.338-49.08 67.563-155.232 151.292-382.248 166.483z' fill='%23db4437' data-name='Path 184271' /%3E%3Cpath id='Path_184272' d='M880.524 2455.773c110.337 4 222.309 8.061 334.727 9.961q-15.793-1.257-31.538-2.593c-101.789-2.071-203.125-5.74-303.117-9.367-183.842-6.67-357.49-12.964-522.305-9.195-93.306 2.134-169.555 6.047-227.86 11.672v2.01c58.271-5.631 134.534-9.547 227.9-11.682 164.764-3.773 338.38 2.521 522.193 9.194z' fill='%23db4437' data-name='Path 184272' /%3E%3Cpath id='Path_184273' d='M1215.291 2463.735q-15.8-.267-31.578-.594 15.745 1.333 31.538 2.593 16.214.275 32.437.482-16.221-1.2-32.397-2.481z' fill='%23db4437' data-name='Path 184273' /%3E%3C/g%3E%3Cpath id='Path_179669' fill='url(%23linear-gradient)' d='M.894-73.057s38.3-73.7 397.2-46.9 670.514 154.8 982.793 184.41C1682.948 93.091 1921 0 1921 0v662.691L.969 662.723z' data-name='Path 179669' transform='translate(-1 5646.309)' /%3E%3Cg id='Group_88821' data-name='Group 88821' opacity='0.5' transform='translate(-353.902 3268.123)'%3E%3Cpath id='Path_184250' d='M685.879 2970.174c115.7 39.157 219.008 43.814 322.635 39.795a1241.34 1241.34 0 0 1-130.114-14.693c-250.36-41.562-392.722-143.775-469.842-226.5 46.217 71.217 129.061 151.224 277.321 201.398z' opacity='0.31' fill='%23ff8075' isolation='isolate' data-name='Path 184250' /%3E%3Cpath id='Path_184251' d='M1298.38 2995.674q-4.081.563-8.168 1.114c.681 0 1.364.009 2.046.014q3.056-.568 6.122-1.128z' opacity='0.31' fill='%23ff8075' isolation='isolate' data-name='Path 184251' /%3E%3Cpath id='Path_184252' d='M1387.05 2982.136c94.208-11.185 199-12.4 324.77 10.736 70.223 12.917 127.62 29.351 176.184 48.115l385.97-.007v-66.253c-42.857-9.873-90.2-18.8-143.016-26.544-317.597-46.583-533.493-.483-743.908 33.953z' opacity='0.31' fill='%23ff8075' isolation='isolate' data-name='Path 184252' /%3E%3Cpath id='Path_184253' d='M1298.38 2995.674c29.626-4.09 59.094-8.7 88.67-13.538-30.55 3.627-59.991 8.303-88.67 13.538z' opacity='0.58' fill='%23ff8075' isolation='isolate' data-name='Path 184253' /%3E%3Cpath id='Path_184254' d='M1387.05 2982.136c-29.576 4.84-59.044 9.448-88.67 13.538q-3.068.56-6.122 1.128c93.193.623 194.079 10.665 309.575 44.19h286.171c-48.564-18.764-105.961-35.2-176.184-48.115-125.769-23.14-230.562-21.926-324.77-10.741z' opacity='0.31' fill='%23ff8075' isolation='isolate' data-name='Path 184254' /%3E%3Cpath id='Path_184255' d='M1387.05 2982.136c-29.576 4.84-59.044 9.448-88.67 13.538q-3.068.56-6.122 1.128c93.193.623 194.079 10.665 309.575 44.19h286.171c-48.564-18.764-105.961-35.2-176.184-48.115-125.769-23.14-230.562-21.926-324.77-10.741z' opacity='0.58' fill='%23ff8075' isolation='isolate' data-name='Path 184255' /%3E%3Cpath id='Path_184256' d='M353.9 2637.877l.006 61.249a500.677 500.677 0 0 0 54.653 69.65c-35.431-54.601-49.332-104.033-54.659-130.899z' opacity='0.14' fill='%23ff8075' isolation='isolate' data-name='Path 184256' /%3E%3Cpath id='Path_184257' d='M1290.212 2996.788c-99.838-.522-190.89 9.659-281.7 13.181 100.517 5.966 191.95-1.102 281.7-13.181z' opacity='0.14' fill='%23ff8075' isolation='isolate' data-name='Path 184257' /%3E%3Cpath id='Path_184258' d='M1290.212 2996.788c-89.75 12.079-181.183 19.147-281.7 13.181-103.627 4.019-206.939-.638-322.635-39.795-148.26-50.179-231.1-130.181-277.318-201.4a500.677 500.677 0 0 1-54.653-69.65v23.525c21 54.812 116.858 256.046 410.142 317.2 1.91.4 3.809.778 5.709 1.159h303.89c72.111-12.317 142.776-30.1 218.607-44.2-.678-.008-1.361-.017-2.042-.02z' opacity='0.31' fill='%23ff8075' isolation='isolate' data-name='Path 184258' /%3E%3Cpath id='Path_184259' d='M1290.212 2996.788c-89.75 12.079-181.183 19.147-281.7 13.181-103.627 4.019-206.939-.638-322.635-39.795-148.26-50.179-231.1-130.181-277.318-201.4a500.677 500.677 0 0 1-54.653-69.65v23.525c21 54.812 116.858 256.046 410.142 317.2 1.91.4 3.809.778 5.709 1.159h303.89c72.111-12.317 142.776-30.1 218.607-44.2-.678-.008-1.361-.017-2.042-.02z' opacity='0.14' fill='%23ff8075' isolation='isolate' data-name='Path 184259' /%3E%3Cpath id='Path_184260' d='M353.91 2722.651l.033 318.361 415.818-.012c-1.9-.381-3.8-.761-5.709-1.159-293.284-61.141-389.144-262.378-410.142-317.19z' opacity='0.31' fill='%23ff8075' isolation='isolate' data-name='Path 184260' /%3E%3Cpath id='Path_184261' d='M353.91 2722.651l.033 318.361 415.818-.012c-1.9-.381-3.8-.761-5.709-1.159-293.284-61.141-389.144-262.378-410.142-317.19z' opacity='0.58' fill='%23ff8075' isolation='isolate' data-name='Path 184261' /%3E%3Cpath id='Path_184262' d='M353.91 2722.651l.033 318.361 415.818-.012c-1.9-.381-3.8-.761-5.709-1.159-293.284-61.141-389.144-262.378-410.142-317.19z' opacity='0.14' fill='%23ff8075' isolation='isolate' data-name='Path 184262' /%3E%3Cpath id='Path_184263' d='M1073.651 3041l528.182-.008c-115.5-33.525-216.382-43.567-309.575-44.19-75.831 14.098-146.496 31.881-218.607 44.198z' opacity='0.31' fill='%23ff8075' isolation='isolate' data-name='Path 184263' /%3E%3Cpath id='Path_184264' d='M1073.651 3041l528.182-.008c-115.5-33.525-216.382-43.567-309.575-44.19-75.831 14.098-146.496 31.881-218.607 44.198z' opacity='0.58' fill='%23ff8075' isolation='isolate' data-name='Path 184264' /%3E%3Cpath id='Path_184265' d='M1073.651 3041l528.182-.008c-115.5-33.525-216.382-43.567-309.575-44.19-75.831 14.098-146.496 31.881-218.607 44.198z' opacity='0.14' fill='%23ff8075' isolation='isolate' data-name='Path 184265' /%3E%3C/g%3E%3C/g%3E%3C/svg%3E%0A");
                    background-size: cover;
                    /* padding-top: 60px; */
                    color: #fff;
                }

                @media screen and (min-width: 900px) and (max-width: 1500px){
                    footer .background {
                        padding-top: 40px;
                    }
                }

                @media screen and (min-width: 1501px)and (max-width: 1900px){
                    footer .background {
                        padding-top: 80px;
                    }
                }

                @media screen and (min-width: 1901px){
                    footer .background {
                        padding-top: 100px;
                    }
                }

                footer .background a,
                footer .background h4,
                footer .background .label {
                    color: #fff !important;
                }

                footer .background .facebook,
                footer .background .linkedin,
                footer .background .twitter,
                footer .background .blog1 {
                    fill: #fff;
                }

                footer .background a {
                    margin-bottom: 10px;
                }

                footer .background a h4 {
                    font-size: 14px;
                    margin-bottom: 15px;
                }

                footer .background a>span,
                footer .background .copy,
                footer .background .terms>a {
                    color: rgba(255, 255, 255, 0.7) !important;
                    font-size: 12px;
                }

                footer .background a>span:hover,
                footer .background .terms>a:hover {
                    color: #fff !important;
                    font-weight: bold;
                }

                footer .background .refer {
                    display: none !important;
                }

                footer .background .btn-offers strong {
                    background: rgba(255, 255, 255, 0.3);
                    border: none;
                }

                footer .background .footer {
                    border-top: none;
                    width: 70%;
                    margin: auto;
                    /* changes done */
                    padding: 15rem 0 5rem;
                }

                footer h4 {
                    display: block;
                    font-weight: 600;
                    font-size: 14px;
                    margin: 0 0 10px 0;
                    line-height: 20px;
                    padding: 0;
                    color: #000;
                    text-transform: uppercase;
                }

                footer p {
                    margin-bottom: 0;
                }

                footer a {
                    color: #6a6a6a;
                    display: block;
                    padding: 2px 0;
                }

                footer a:hover,
                footer a:focus {
                    color: #049bff;
                    text-decoration: none;
                }

                footer a.refer {
                    margin-top: 6px;
                }

                footer a.refer span {
                    border: 1px solid #14a3ff;
                    padding: 7px 80px 7px 0px;
                    border-radius: 4px;
                    margin-top: 0;
                    display: inline-block;
                    line-height: 16px;
                    position: relative;
                }

                footer a.refer span b {
                    display: block;
                    text-transform: uppercase;
                    letter-spacing: 4px;
                    color: #000;
                }

                footer a.refer span:before {
                    content: ' ';
                    width: 70px;
                    height: 90px;
                    position: absolute;
                    bottom: 0;
                    right: 0;
                    background: url("/assets/images/bg-refer.png") no-repeat;
                    background-size: 100%;
                }

                footer .container.wrap {
                    padding: 20px 15px 0 15px !important;
                }

                footer .container.wrap .foot {
                    flex-wrap: wrap;
                }

                footer .imgs .refer {
                    display: none;
                }

                footer .btn-offers {
                    background-color: #fff;
                    font-weight: bolder;
                    color: #000;
                    padding: 0;
                }

                footer .btn-offers img {
                    width: 22px;
                }

                footer .btn-offers strong {
                    background: #fff;
                    border: 2px solid #14a3ff;
                    border-radius: 5px !important;
                    padding: 6px 15px;
                    display: inline-block;
                }

                footer .secure img {
                    width: 200px;
                    display: block;
                }

                footer .secure .label {
                    text-transform: uppercase;
                    color: #999;
                    display: block;
                    text-align: left;
                    padding: 0 5px 0 0;
                    float: left;
                    line-height: 26px;
                }

                footer .social {
                    text-align: center;
                }

                footer .social .label {
                    text-transform: uppercase;
                    color: #6a6a6a;
                    display: block;
                    padding: 0 5px 0 0;
                    line-height: 35px;
                    width: 100%;
                }

                footer .social a {
                    display: inline-block;
                    margin: 0 !important;
                    margin-left: 4px !important;
                    transition: 0.5s;
                    clear: both;
                    padding: 0;
                    float: none;
                    width: 32px;
                    height: 32px;
                    padding: 8px;
                    border-radius: 20px;
                    border: 1px solid #ddd;
                    overflow: hidden;
                    text-align: center;
                    line-height: 12px;
                }

                footer .social a svg {
                    width: 12px;
                    height: 12px;
                }

                footer .links {
                    text-align: center;
                    min-width: 175px;
                    float: right;
                    padding-right: 0px;
                }

                footer .footer {
                    border-top: 1px solid #ddd;
                }

                footer hr {
                    margin: 10px 0;
                    width: 100%;
                }

                footer .products a {
                    display: inline-block;
                    width: 49%;
                    /* float: left; */
                }

                footer .terms {
                    text-align: right;
                }

                footer .terms a {
                    display: inline-block;
                    border-right: 1px solid #ddd;
                    padding-right: 10px;
                    margin-right: 10px;
                }

                footer .terms a:last-child {
                    border-right: 0;
                    margin-right: 0;
                }

                footer .copy {
                    display: block;
                    clear: both;
                    text-align: left;
                    font-size: 12px;
                    color: #6a6a6a;
                }

                footer .copy a {
                    display: inline-block;
                }

                footer .footer-last {
                    padding: 5px 15px;
                }

                .inner footerb {
                    position: static;
                }

                .seo {
                    border-top: 1px solid #ddd !important;
                    padding-bottom: 1rem !important;
                }

                .seo p {
                    padding-bottom: 1rem;
                }

                .seo-links {
                    border-top: 1px solid #ddd;
                }

                .seo-links .container.wrap {
                    padding-bottom: 2rem !important;
                }

                @media (max-width: 760px) {

                    footer .pd,
                    footer .si,
                    footer .at,
                    footer .links {
                        margin-top: 20px;
                    }

                    footer .links {
                        width: 100%;
                        margin-top: 45px;
                    }

                    footer .refer {
                        display: none;
                    }

                    footer .imgs {
                        max-width: 300px;
                        float: left;
                        margin-right: 10px;
                    }

                    footer .imgs .refer {
                        float: left;
                        display: block;
                        margin-right: 15px;
                    }

                    footer .social {
                        float: left;
                        margin: 10px;
                    }

                    footer .btn-offers {
                        transform: none;
                        margin-top: 7px;
                        margin-bottom: 0;
                    }

                    footer .btn-offers:after {
                        transform: none;
                        left: 4px;
                    }

                    footer .btn-offers span {
                        padding: 9px 15px;
                    }
                }

                @media (max-width: 640px) {

                    .footer .pd,
                    .footer .si,
                    .footer .at {
                        width: 50%;
                    }

                    .footer .imgs {
                        float: none;
                    }

                    .footer .social {
                        display: inline-block;
                    }

                    .footer .copy,
                    .footer .terms {
                        width: 100%;
                        text-align: center;
                    }
                }

                @media (max-width: 480px) {

                    footer .pd,
                    footer .si,
                    footer .at {
                        width: 100%;
                        margin: 15px 0;
                    }

                    footer .background {
                        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 408.061 674.429'%3E%3Cdefs%3E%3ClinearGradient id='wtgnmwulyc' x1='.991' x2='.044' y1='1' y2='-.277' gradientUnits='objectBoundingBox'%3E%3Cstop offset='0' stop-color='%23db4437' /%3E%3Cstop offset='1' stop-color='%234285f4' /%3E%3C/linearGradient%3E%3C/defs%3E%3Cg%3E%3Cg%3E%3Cg%3E%3Cpath fill='url(%23wtgnmwulyc)' d='M-43.22-125.935s44.745-17.51 118.28-14.428 113.86 20.535 158.54 23.626 83.212-9.478 83.212-9.478l-.041 619.033-360.006.033z' transform='translate(0 -2562.571) translate(-36.758 2562.571) translate(75.962 185.578)' /%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E%0A");
                    }

                    .home footer {
                        position: static;
                    }
                }
            </style>


            <style>
                @import url("https://fonts.googleapis.com/css2?family=Nunito&display=swap");


                .horizantalScroll {
                    display: flex;
                    overflow-x: scroll;
                    scrollbar-width: none;
                }
                .services {
                    line-height: 1.2rem;
                    text-align: center;
                }

                #btn2 ,
                #btn3 {
                    position: relative;
                    top: 40px;
                    cursor: pointer;
                    /* z-index: 2; */
                }


                #doctorbtn2,
                #doctorbtn3 {
                    cursor: pointer;
                }

                #servicebtn,
                #servicebtn2 {
                    position: relative;
                    top: 30px;
                    cursor: pointer;
                    /* z-index: 2; */
                }

                .faq-text {
                    font-size: 1.15vw;
                }
                .mbview {
                    display: none;
                }
                .horizantalScroll::-webkit-scrollbar {
                    display: none;
                }
                .part1 {
                    padding-top: 15px;
                }
                .speciality-class {
                    display: flex;
                    width: 170px;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                }
                .image-bg {
                    position: absolute;
                    top: 120px;
                    right: 0px;
                    z-index: -1;
                    display: none;
                }
                .subSpeciality footer .background .footer {
                    border-top: none;
                    width: 70%;
                    margin: auto;
                    /* changes done */
                    padding: 9rem 0 4rem !important;
                }

                .video {
                    object-fit: contain;
                    display: inline-block;
                    overflow: clip;
                    width: 60%;
                }

                @media screen and (max-width: 767px) {
                    .video {
                        width: 90%;
                    }
                }

                .btnq {
                    white-space: nowrap;
                    text-align: center;
                }
                .buttons {
                    margin-left: 3px;
                    display: flex;
                    overflow: visible;
                    /* display: flex; */
                }
                .image2 {
                    display: none;
                }
                @media screen and (min-width: 600px) {
                    .d4dashed {
                        display: none;
                    }
                }
                .wave-section.sm {
                    min-height: 400px;
                }
                .wave-section .blue-wave {
                    background-image: url(https://views.HealthVirtuCare.in/websiteApp/online-consultation-bg.png);
                }
                .card {
                    box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.12);
                    border-radius: 8px;
                }
                .row-margin-new {
                    margin: 23px 7px;
                }
                .blue-col {
                    color: #050a4e;
                }

                .button-3 {
                    border-radius: 23px;
                    outline: none !important;
                    color: white;
                    border-radius: 23px;
                    background-color: #337ab7;
                    border: none;
                    padding: 7px 22px 9px 22px;
                }
                .font-25 {
                    font-size: 25px;
                }
                .font-26 {
                    font-size: 26px;
                }
                .font-18 {
                    font-size: 18px;
                }
                .font-15 {
                    font-size: 15px;
                }
                .row-card {
                    box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.12);
                    border-radius: 8px;
                    padding: 1rem;
                }
                .center-align {
                    text-align: center;
                }
                .round-img-new {
                    width: 100px;
                    height: 98px;
                    border: solid 1px rgb(212, 212, 212);
                    border-radius: 50%;
                }
                .bottom-p {
                    margin-bottom: 4px;
                }
                .bottom-p-2 {
                    margin-bottom: 2px;
                }
                .font-20 {
                    font-size: 20px;
                }
                .font-16 {
                    font-size: 16px;
                }
                .font-24 {
                    font-size: 24px;
                }
                .font-14 {
                    font-size: 14px;
                }
                .related-concerns {
                    padding-left: 10%;
                    padding-top: 26px;
                    padding-bottom: 20px;
                }
                .queries-title {
                    font-size: 32px;
                }
                .queries-subtitle {
                    font-size: 24px;
                    color: black;
                }
                @media screen and (min-width: 600px) {
                    .d4dashed {
                        display: none;
                    }
                }
                @media screen and (max-width: 600px) {
                    .d3dashed {
                        display: none;
                    }
                    .related-concerns {
                        padding-left: 10px;
                    }
                    .queries-title {
                        font-size: 25px;
                    }
                    .queries-subtitle {
                        font-size: 18px;
                    }
                    .speciality-heading {
                        font-size: 26px;
                        font-weight: 600;
                        padding: 0px 10px 0px 10px;
                        line-height: 2.2rem;
                    }
                }
                .qa {
                    font-weight: 800;
                }
                .font-qas {
                    font-size: 17px;
                    font-weight: 300;
                }
                .font-12 {
                    font-size: 12px;
                }
                .font-13 {
                    font-size: 13px;
                }
                .grey-col {
                    color: #7f7f7f;
                }
                .font-10 {
                    font-size: 10px;
                }
                .star-class {
                    width: 20px;
                    vertical-align: sub;
                }
                .subtopic-span {
                    background-color: white;
                    border-radius: 8px;
                    padding: 4px 2px 6px 6px;
                    line-height: 30px;
                    border: 1px solid rgba(0, 0, 0, 0.125);
                }
                .button-2 {
                    margin-top: 8px;
                    border-radius: 23px;
                    outline: none !important;
                    color: #007bff;
                    border-radius: 18px;
                    background-color: #ffffff;
                    border: 1px solid #007bff;
                    padding: 7px 30px 9px 30px;
                    display: inline;
                    font-weight: 800;
                }
                .view {
                    padding: 15px 0 0 0;
                    border-top: 1px solid #5225b4;
                    color: #5225b4;
                    cursor: pointer;
                }
                .p-bot-30 {
                    padding-bottom: 30px;
                }
                .none {
                    display: none;
                }
                .headline h2,
                .headline p {
                    display: inline;
                }
                .meds-tag {
                    border: 1px solid rgba(0, 0, 0, 0.125);
                    padding: 10px;
                    background-color: white;
                    border-radius: 8px;
                }
                .sub-color {
                    color: #8c8888;
                }
                .view-more-btn {
                    border-radius: 25px;
                    background: white;
                    border: solid 0.5px #5225b4;
                    padding: 6px 10px 7px 14px;
                    font-weight: 600;
                }
                .specialize-2 {
                    background-color: white;
                    border-radius: 8px;
                    padding: 14px 18px;
                    line-height: 58px;
                    border: 1px solid rgba(0, 0, 0, 0.125);
                    color: #050a4e;
                }
                .mobilefont14 {
                    font-size: min(3.3vw, 14px);
                }
                .speciality-subheading {
                    font-size: 24px;
                }
                .patient-stories {
                    font-size: min(2.6vw, 12px);
                }
                .experience-size {
                    font-size: min(3vw, 12px);
                }
                @media screen and (max-width: 600px) {
                    .button-2 {
                        padding: 7px 10px 9px 10px;
                    }
                    .speciality-heading {
                        font-size: 5.5vw;
                    }
                    .side-padding-10 {
                        padding-left: 10px;
                    }
                    .speciality-subheading {
                        font-size: 4.5vw;
                    }
                }
                .pagination li a {
                    color: black;
                    float: left;
                    padding: 8px 16px;
                    text-decoration: none;
                }
                .btnround li a {
                    border-radius: 5px;
                }
                .pagination {
                    padding: 0;
                    margin: 6px 0;
                    flex-wrap: wrap;
                    align-self: center;
                }
                .pagination a.active {
                    background-color: #1778f2;
                    color: white;
                }
                .pagination a:hover:not(.active) {
                    background-color: #ddd;
                }
                .pagination-container {
                    display: flex;
                    justify-content: center;
                }
                @media screen and (max-width: 500px) {
                    .pagination {
                        margin: 6px 0;
                    }
                    .pagination li a {
                        padding: 4px 8px;
                    }
                }

                svg a .a {
                    fill: #337ab7;
                }
                svg a .b {
                    fill: #e60013;
                }
                svg .c1 {
                    fill: #337ab7;
                }
                svg .c2 {
                    fill: #e60013;
                }
                svg .c3 {
                    fill: #fff;
                }
                svg .c4 {
                    fill: #000;
                }
                .sticky-header header {
                    position: fixed;
                    margin-top: -50px;
                    z-index: 1000;
                }
                .brand {
                    display: block;
                    width: 160px;
                    margin: 0 auto;
                }
                .brand span.logo {
                    height: 32px;
                    display: inline-block;
                    /* float: left; */
                }
                .corp-logo {
                    background-color: transparent;
                    background-position: left;
                    background-repeat: no-repeat;
                    background-size: contain;
                    min-height: 32px;
                    min-width: 12vw;
                    display: inline-block;
                }
                @media (max-width: 460px) {
                    .corp-logo {
                        min-width: 30vw;
                    }
                }
                .HealthVirtuCare {
                    color: #337ab7;
                    margin-left: 5px;
                    height: 32px;
                    line-height: 30px;
                    font-size: 22px;
                }
                .HealthVirtuCare span {
                    color: #e60013;
                }
                .note-header {
                    background-color: #fcf1c6;
                    width: 100%;
                    text-align: center;
                    padding: 0.5rem;
                }
                header {
                    width: 100%;
                    padding: 0 0 0px !important;
                }
                header .navbar {
                    padding-top: 10px;
                    margin-bottom: 6px !important ;
                }
                header .navbar .wallletMob {
                    display: none;
                }
                header h1 {
                    margin: 0 0 0 10px;
                    font-weight: 500;
                }
                header .nav {
                    float: right !important;
                }
                header .nav li {
                    display: inline-block;
                    /* float: left; */
                }
                header .nav .open > a,
                header .nav .open > a:focus,
                header .nav .open > a:hover {
                    background-color: transparent;
                }
                header .nav .non-login a {
                    display: inline-block !important;
                    padding: 4px 15px !important;
                }
                header .nav #select-city {
                    height: 37px;
                }
                header .nav #select-city .city-filter {
                    border-bottom: 1px solid #e0e0e0;
                }
                header .navbar-brand {
                    display: inline-block;
                    line-height: 32px;
                    /* float: left; */
                    margin-top: 2px;
                }
                header .navbar-brand span {
                    display: inline-block;
                }
                header .navbar-brand span.logo {
                    float: left;
                }
                header .navbar-brand:hover {
                    text-decoration: none;
                }
                header .navbar-brand.corp {
                    height: 32px;
                }
                header .navbar-brand.corp .border {
                    border-right: 1px solid #e0e0e0;
                    margin: 0 10px 0 15px;
                    height: 30px;
                }
                header .nav-insurance {
                    padding: 2px 10px;
                    width: 100%;
                    border-bottom: 1px solid #ddd;
                    overflow: hidden;
                    margin-bottom: 10px;
                }
                header .nav-insurance .offer {
                    float: left;
                }
                header .nav-insurance .offer span {
                    display: inline-block;
                    background: #337ab7;
                    color: #fff;
                    padding: 0 8px;
                    border-radius: 10px;
                    margin-right: 5px;
                }
                header .nav-insurance .icon {
                    width: 14px;
                    height: 14px;
                    float: left;
                    margin: 1px 5px 0 0;
                }
                header .nav-insurance .btn {
                    color: #000 !important;
                }
                header .nav-insurance .mm {
                    font-size: 14px;
                    margin-top: 3px;
                    float: left;
                    color: #000;
                }
                header .nav-insurance .mm.mm-card {
                    margin-top: 4px;
                }
                header .nav-insurance ul.nav {
                    float: right;
                }
                header .nav-insurance ul.nav > li > a {
                    padding: 0 6px;
                    border-right: 1px solid #bbb !important;
                    border-radius: 0;
                    font-size: 12px;
                    color: #000;
                    display: inline-block;
                }
                header .nav-insurance ul.nav > li > a:hover,
                header .nav-insurance ul.nav > li > a:active {
                    color: #337ab7;
                }

                .faq-acc {
                    background-color: #ffffff;
                    padding-left: 0px;
                    padding-right: 0px;
                    margin-bottom: 20px;
                    padding-bottom: 0px;
                    padding-top: 0px;
                    text-align: left;
                    border-radius: 12px;
                    width: 100%;
                    border-width: 0px;
                    box-shadow: 0px 0px 6px rgb(44 44 44 / 10%);
                }
                .faq-q {
                    font-family: "Nunito";
                    font-style: normal;
                    font-weight: 400;
                    font-size: 1.05vw;
                    color: #1778f2;
                    margin-left: -10px;
                }
                .faq-a {
                    display: none;
                    font-size: 16px;
                    font-weight: 300;
                    margin-top: -17px;
                    color: #212529;
                    margin-bottom: 20px;
                    margin-left: 15px;
                    margin-right: 10px;
                    line-height: 1.4 !important;
                }
                @media (max-width: 990px) {
                    .faq-q {
                        font-size: 15px;
                    }
                }
                .btn12 {
                    display: none;
                }
                .passive {
                    display: none;
                }
                .active {
                    display: block;
                }
                header .nav-insurance ul.nav > li:last-child > a {
                    border: 0 !important;
                }
                header .signin {
                    margin: 5px 15px 0;
                    font-weight: bold;
                }
                header .btn-home {
                    padding: 6px 0 5px 0;
                    text-align: center;
                    width: 6%;
                    float: left;
                }
                header .btn-home:hover {
                    text-decoration: none;
                }
                header .navbar .nav {
                    margin-right: 10px;
                }
                header .navbar .nav a {
                    padding: 4px;
                }
                header .navbar a.btn-user {
                    text-align: right;
                    display: inline-block;
                    line-height: 15px;
                    width: 37px;
                    height: 37px;
                    border-radius: 50% !important;
                    background: #049bff;
                    padding: 6px;
                }
                header .navbar a.btn-user i.mm {
                    font-size: 12px;
                    color: #fff;
                }
                header .navbar a.btn-user:hover,
                header .navbar a.btn-user:active,
                header .navbar a.btn-user:focus {
                    background: #1d83c7;
                }
                header .navbar a.alloffers {
                    position: absolute;
                    margin: 0 !important;
                    z-index: 999;
                    margin: 0;
                    right: 0;
                    top: -30px;
                    color: #2198ff;
                    text-decoration: underline;
                }
                header .navbar .dropdown-menu {
                    background-color: #2198ff;
                    border: 2px solid #2198ff !important;
                    border-radius: 3px !important;
                    width: 420px;
                    padding: 20px 0 0 0;
                    text-transform: none;
                    margin-top: 10px;
                }
                header .navbar .dropdown-menu a {
                    margin: 15px 15px 0 0;
                }
                header .navbar .dropdown-menu:before {
                    content: " ";
                    width: 0;
                    height: 0;
                    border-left: 10px solid transparent;
                    border-right: 10px solid transparent;
                    border-bottom: 10px solid #2198ff;
                    position: absolute;
                    top: -10px;
                    right: 7px;
                }
                header .navbar .dropdown-menu i.mm {
                    float: left;
                    color: #000;
                    font-size: 16px;
                    height: 24px;
                    margin-right: 10px;
                }
                header .navbar .dropdown-menu .btn {
                    border-radius: 20px !important;
                    padding-left: 16px;
                    padding-right: 16px;
                }
                header .navbar .dropdown-menu .text-center {
                    margin-bottom: 1rem;
                    width: 100%;
                    text-align: center;
                }
                header .navbar .dropdown-menu .text-center .btn {
                    text-decoration: underline;
                }
                header .navbar .dropdown-menu h3 {
                    color: #fff;
                    font-size: 20px;
                    margin: 0 0 10px 0;
                }
                header .navbar .dropdown-menu .offer {
                    position: absolute;
                    bottom: 0;
                    left: 20px;
                    right: 20px;
                }
                header .navbar .dropdown-menu .other {
                    padding: 60px 20px 20px 20px;
                    position: relative;
                    overflow: hidden;
                    min-height: 150px;
                    margin-bottom: 0;
                }
                header .navbar .dropdown-menu .other:after {
                    content: "";
                    position: absolute;
                    right: 0;
                    bottom: -40px;
                    width: 100%;
                    height: 100%;
                    background: #fff;
                    transform: skewY(-11deg);
                }
                header .navbar .dropdown-menu .other .btn.btn-offers {
                    background: #fff;
                    border: 3px solid #009cff !important;
                    border-radius: 3px !important;
                    padding: 6px 15px;
                    display: inline-block;
                    width: 100px;
                    position: relative;
                    z-index: 3;
                    margin: 0 auto;
                    float: none;
                    transition: all 0.5s ease 0s;
                    text-decoration: none;
                }
                header .navbar .dropdown-menu .other .btn.btn-offers:before {
                    content: "";
                    background-image: url("https://rb.docsapp.in/mweb-images/shadow.png");
                    background-repeat: no-repeat;
                    background-size: 100% auto;
                    display: block;
                    width: 100%;
                    height: 20px;
                    position: absolute;
                    bottom: -20px;
                    left: 4px;
                    transform-origin: 30% 50%;
                    transition: all 0.8s ease 0s;
                }
                header .navbar .dropdown-menu .other .btn.btn-offers:hover {
                    transform: translateY(-6px);
                    text-decoration: none;
                }
                header .navbar .dropdown-menu .other .btn.btn-offers:hover:before {
                    transform: translateY(5px);
                    width: 130%;
                    left: -10px;
                }
                header .navbar .dropdown-menu .other .btn.btn-offers img {
                    width: 22px;
                }
                header .navbar .dropdown-menu .other section {
                    position: relative;
                    z-index: 9;
                }
                header .navbar .dropdown-menu .other p {
                    position: relative;
                    z-index: 9;
                }
                header .navbar .dropdown-menu .other p span {
                    color: #2198ff;
                    font-weight: bold;
                }
                header .navbar .dropdown-menu .other.walletinactive {
                    padding-bottom: 90px;
                }
                header .navbar .dropdown-menu .other.walletinactive:after {
                    bottom: -120px;
                }
                header .navbar .walllet {
                    /*position absolute
        right 70px
        top 40px*/
                    padding: 3px 20px;
                    border: 1px solid transparent;
                    border-radius: 30px;
                    border-color: #f2f2f2;
                }
                header .navbar .walllet label {
                    margin: 0;
                }
                header .navbar .walllet:hover,
                header .navbar .walllet.open {
                    border-color: #f2f2f2;
                    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12),
                    0 3px 1px -2px rgba(0, 0, 0, 0.2);
                    transition: all 0.5s ease;
                    color: #337ab7;
                }
                header .navbar .walllet .befefsplit h4 {
                    margin: 0 !important;
                    padding-bottom: 10px;
                    color: #000;
                    font-size: 15px;
                    font-weight: bold;
                }
                header .navbar .walllet .befefsplit ul {
                    list-style: none;
                    padding: 0;
                    border-top: 1px solid #ddd;
                    margin-bottom: 15px;
                    overflow: hidden;
                }
                header .navbar .walllet .befefsplit li {
                    display: block;
                    width: 100%;
                    padding: 3px;
                    border-bottom: 1px solid #ddd;
                    clear: both;
                }
                header .navbar .walllet .befefsplit span.balance {
                    float: right;
                    font-weight: bold;
                    font-size: 15px;
                    margin: 0;
                }
                header .navbar .walllet .befefsplit span.balance span.label {
                    font-size: 12px;
                    color: #666;
                    float: none;
                    padding: 0;
                }
                header .navbar .walllet .befefsplit .btn {
                    display: block;
                    margin: 1rem auto;
                }
                header .navbar .walllet .balone h3 {
                    text-align: center;
                }
                header .navbar .walllet .balone h4 {
                    margin: 0 auto;
                    float: none;
                }
                header .navbar .walllet .dropdown-menu {
                    right: 2px;
                    left: auto;
                }
                header .navbar .walllet .dropdown-menu .other {
                    min-height: 100px;
                    padding-bottom: 0;
                    padding-top: 0;
                }
                header .navbar .walllet .dropdown-menu .other:after {
                    bottom: -100px;
                }
                header .navbar .walllet a.first {
                    margin: 0 0 0 10px !important;
                }
                header .navbar .walllet a {
                    position: relative;
                    padding: 0;
                    padding-left: 35px;
                    text-align: left !important;
                    float: left;
                    font-weight: bold;
                    font-size: 13px;
                    margin: 0;
                    color: #000 !important;
                    line-height: 15px;
                }
                header .navbar .walllet a:hover,
                header .navbar .walllet a:focus {
                    background-color: transparent !important;
                }
                header .navbar .walllet a span {
                    text-transform: none;
                }
                header .navbar .walllet a i.mm {
                    position: absolute;
                    left: 0;
                    top: 2px;
                    font-size: 22px;
                }
                header .navbar .walllet a label {
                    font-size: 11px;
                    display: block;
                    font-weight: normal;
                    color: #999;
                }
                header .navbar .walllet a.noamount label {
                    margin-top: 8px;
                }
                header .navbar .dropdown-menu > li > a {
                    text-align: left;
                    margin: 0;
                }
                header .navbar a:hover,
                header .navbar a:active,
                header .navbar a:focus {
                    text-decoration: none;
                    color: #337ab7;
                }
                header .navbar i.mm {
                    font-size: 12px;
                    width: 18px;
                    display: inline-block;
                    text-align: center;
                    line-height: 24px;
                    padding: 0;
                    color: #049bff;
                }
                header .search .dropdown-menu {
                    background-color: #fff;
                    border: 1px solid #ddd !important;
                    border-top: 0 !important;
                    border-radius: 0 !important;
                }
                header .search .search-box {
                    margin-top: 0 !important;
                    margin-bottom: 0 !important;
                    max-width: 500px;
                    width: 70%;
                    float: left;
                }
                header .search .search-box-input .form-control {
                    line-height: 30px;
                    height: 32px;
                    width: 90%;
                }
                header .search .input-group-btn.icon {
                    height: 31.5px;
                    box-shadow: none;
                    text-align: center;
                }
                header .search .input-group-btn.icon .mm {
                    line-height: 32px;
                    font-size: 20px;
                    display: inline-block;
                    color: #fff;
                }
                .icon {
                    width: 32px;
                    height: 32px;
                    margin: 0 auto;
                }
                header.inner .typehead .cities.dropdown-menu {
                    margin-top: 31px !important;
                }

                @media (max-width: 960px) {
                    .search.container {
                        max-width: 960px;
                        width: 100%;
                    }
                    header .search .search-box {
                        float: none;
                        max-width: 500px;
                        margin: 0 auto;
                        padding-top: 10px;
                        width: 100%;
                    }
                    header .nav-insurance .offer {
                        float: none;
                        text-align: center;
                        display: none;
                    }
                    header .nav-insurance ul.nav {
                        /* float: none !important; */
                        text-align: center;
                    }
                    header .nav-insurance ul.nav li {
                        float: none;
                    }
                    header .search {
                        min-height: auto;
                        width: 100%;
                        float: left;
                    }
                }

                @media (max-width: 640px) {
                    header .nav-brand span.HealthVirtuCare {
                        display: none;
                    }
                    .search .products-thumb a {
                        width: calc(33.33% - 10px);
                    }
                }
                header .navbar {
                    position: relative;
                    display: block;
                }
                header .navbar-brand {
                    padding-top: 0px;
                }
                @media (max-width: 540px) {
                    header .navbar {
                        position: relative;
                        display: block;
                    }
                    header .navbar .dropdown-menu {
                        width: auto;
                        margin: 15px 15px 0 15px;
                    }
                    header .navbar .dropdown-menu:before {
                        right: 2px;
                    }
                    header .navbar {
                        position: relative;
                    }
                    header .navbar li {
                        position: static;
                        margin-left: 5px;
                    }
                    header .navbar .dropdown-menu {
                        top: 34px;
                    }
                    header .navbar .walllet .dropdown-menu:before {
                        right: 114px;
                    }
                }
                @media (max-width: 480px) {
                    header {
                        padding-top: 15px !important;
                    }
                    .search .products-thumb a {
                        width: calc(50% - 10px);
                    }
                    header .navbar .walllet.hideMob {
                        display: none !important;
                    }
                    header .navbar .wallletMob {
                        display: block;
                        margin-top: 10px;
                        padding: 10px 15px 5px 15px;
                        border: 0;
                        background: #f7f1c9;
                        display: block;
                        position: relative;
                        margin-bottom: 20px;
                        text-align: center;
                        cursor: pointer;
                    }
                    header .navbar .wallletMob h4 {
                        display: inline-block;
                        padding-left: 30px;
                        margin: 0 15px 0 0;
                        color: #111;
                        text-align: left;
                    }
                    header .navbar .wallletMob h4 i.mm {
                        float: left;
                        margin: 5px 0 0 -30px;
                        font-size: 22px;
                        color: #333;
                    }
                    header .navbar .wallletMob h4 span {
                        display: block;
                        font-size: 11px;
                        line-height: 12px;
                    }
                    header .nav-insurance {
                        padding-bottom: 10px;
                    }
                    .notched {
                        width: 100%;
                        background: url("..assets/images/notch-bg.png") no-repeat bottom center;
                        position: absolute;
                        bottom: -20px;
                        height: 20px;
                        left: 0;
                        right: 0;
                        text-align: center;
                    }
                    .notched svg {
                        width: 10px;
                    }
                }
                @media (max-width: 470px) {
                    header .nav-insurance .icon {
                        display: none;
                    }
                }
                @media (max-width: 450px) {
                    .search .search-box-input .blinker {
                        top: 82px;
                        left: 3%;
                    }
                    header .btn-home {
                        display: none;
                    }
                    header .brand img.large {
                        display: none;
                    }
                    header .brand img.small {
                        display: block;
                        width: 50px;
                    }
                }
                .star {
                    color: #e0414e;
                }
                .modal-footer {
                    background: #fff;
                }
                @-moz-keyframes sk-bouncedelay {
                    0%,
                    80%,
                    100% {
                        transform: scale(0.4);
                        opacity: 0.5;
                    }
                    40% {
                        transform: scale(1);
                        opacity: 1;
                    }
                }
                @-webkit-keyframes sk-bouncedelay {
                    0%,
                    80%,
                    100% {
                        transform: scale(0.4);
                        opacity: 0.5;
                    }
                    40% {
                        transform: scale(1);
                        opacity: 1;
                    }
                }
                @-o-keyframes sk-bouncedelay {
                    0%,
                    80%,
                    100% {
                        transform: scale(0.4);
                        opacity: 0.5;
                    }
                    40% {
                        transform: scale(1);
                        opacity: 1;
                    }
                }
                @keyframes sk-bouncedelay {
                    0%,
                    80%,
                    100% {
                        transform: scale(0.4);
                        opacity: 0.5;
                    }
                    40% {
                        transform: scale(1);
                        opacity: 1;
                    }
                }
                @-moz-keyframes products-thumb {
                    0% {
                        opacity: 1;
                        height: 72px;
                        padding: 10px 15px;
                        margin-top: 0;
                    }
                    100% {
                        opacity: 0;
                        height: 0;
                        padding: 0;
                        line-height: 0;
                        overflow: hidden;
                        margin-top: -100px;
                    }
                }
                @-webkit-keyframes products-thumb {
                    0% {
                        opacity: 1;
                        height: 72px;
                        padding: 10px 15px;
                        margin-top: 0;
                    }
                    100% {
                        opacity: 0;
                        height: 0;
                        padding: 0;
                        line-height: 0;
                        overflow: hidden;
                        margin-top: -100px;
                    }
                }
                @-o-keyframes products-thumb {
                    0% {
                        opacity: 1;
                        height: 72px;
                        padding: 10px 15px;
                        margin-top: 0;
                    }
                    100% {
                        opacity: 0;
                        height: 0;
                        padding: 0;
                        line-height: 0;
                        overflow: hidden;
                        margin-top: -100px;
                    }
                }
                @keyframes products-thumb {
                    0% {
                        opacity: 1;
                        height: 72px;
                        padding: 10px 15px;
                        margin-top: 0;
                    }
                    100% {
                        opacity: 0;
                        height: 0;
                        padding: 0;
                        line-height: 0;
                        overflow: hidden;
                        margin-top: -100px;
                    }
                }
                @-moz-keyframes products-thumb-active {
                    0% {
                        width: 20%;
                    }
                    100% {
                        width: 100%;
                    }
                }
                @-webkit-keyframes products-thumb-active {
                    0% {
                        width: 20%;
                    }
                    100% {
                        width: 100%;
                    }
                }
                @-o-keyframes products-thumb-active {
                    0% {
                        width: 20%;
                    }
                    100% {
                        width: 100%;
                    }
                }
                @keyframes products-thumb-active {
                    0% {
                        width: 20%;
                    }
                    100% {
                        width: 100%;
                    }
                }
                @-moz-keyframes blink {
                    from,
                    to {
                        color: transparent;
                    }
                    50% {
                        color: #000;
                    }
                }
                @-webkit-keyframes blink {
                    from,
                    to {
                        color: transparent;
                    }
                    50% {
                        color: #000;
                    }
                }
                @-o-keyframes blink {
                    from,
                    to {
                        color: transparent;
                    }
                    50% {
                        color: #000;
                    }
                }
                @keyframes blink {
                    from,
                    to {
                        color: transparent;
                    }
                    50% {
                        color: #000;
                    }
                }
                @-moz-keyframes bounceIn {
                    0% {
                        opacity: 0;
                        transform: scale(0.3) translate3d(0, 0, 0);
                    }
                    50% {
                        opacity: 0.9;
                        transform: scale(1.1);
                    }
                    80% {
                        opacity: 1;
                        transform: scale(0.89);
                    }
                    100% {
                        opacity: 1;
                        transform: scale(1) translate3d(0, 0, 0);
                    }
                }
                @-webkit-keyframes bounceIn {
                    0% {
                        opacity: 0;
                        transform: scale(0.3) translate3d(0, 0, 0);
                    }
                    50% {
                        opacity: 0.9;
                        transform: scale(1.1);
                    }
                    80% {
                        opacity: 1;
                        transform: scale(0.89);
                    }
                    100% {
                        opacity: 1;
                        transform: scale(1) translate3d(0, 0, 0);
                    }
                }
                @-o-keyframes bounceIn {
                    0% {
                        opacity: 0;
                        transform: scale(0.3) translate3d(0, 0, 0);
                    }
                    50% {
                        opacity: 0.9;
                        transform: scale(1.1);
                    }
                    80% {
                        opacity: 1;
                        transform: scale(0.89);
                    }
                    100% {
                        opacity: 1;
                        transform: scale(1) translate3d(0, 0, 0);
                    }
                }
                @keyframes bounceIn {
                    0% {
                        opacity: 0;
                        transform: scale(0.3) translate3d(0, 0, 0);
                    }
                    50% {
                        opacity: 0.9;
                        transform: scale(1.1);
                    }
                    80% {
                        opacity: 1;
                        transform: scale(0.89);
                    }
                    100% {
                        opacity: 1;
                        transform: scale(1) translate3d(0, 0, 0);
                    }
                }
                @media screen and (max-width: 600px) {
                    .mbview {
                        margin-top: -123px;
                        display: block;
                        box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.12);
                        border-radius: 8px;
                        padding: 10px;
                        background-color: white;
                    }
                    .webview {
                        display: none;
                    }
                    .heading1 {
                        font-size: 16px;
                        font-weight: 700;
                        line-height: 22px;
                    }
                    .content1 {
                        font-size: 12px;
                        line-height: 22px;
                    }

                    .part1 {
                        width: 100%;
                        justify-content: top;
                        padding-top: 10px;
                    }
                    .image2 {
                        display: block;
                        z-index: -1;
                        /* width: 40%; */
                    }
                    .bg-img {
                        /* width:170% */
                        margin: -0 0 0 -30px;
                        overflow: hidden;
                    }
                    .image1 {
                        display: none;
                    }
                    .image-bg {
                        display: block;
                    }
                    .btn12 {
                        display: block;
                    }
                    .btn11 {
                        display: none;
                    }

                    .speciality-class {
                        height: 145px;
                        /* margin: auto; */
                        margin: 7px;
                        box-shadow: 0 2px 8px 0 rgb(0 0 0 / 12%);
                        border-radius: 8px;
                    }
                }
                @media screen and (max-width: 364px) {
                    .mbview {
                        margin-top: -100px;
                    }
                }
            </style>


</body>
</html>
<!--<div class="container">-->
<!--<h3>Welcome,this is patient's website <span>--><?php //=$_SESSION['name'];?><!--</span></h3>-->
<!--<p>Your Email id is : <h6>--><?php //=$_SESSION['username'];?><!--</h6></p>-->
<!--<a href="index.php" class="btn">LOGOUT</a>-->
<!--</div>-->
