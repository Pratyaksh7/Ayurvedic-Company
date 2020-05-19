<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ayurvedic</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <style>
input[type=text], input[type=email], textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

.pl{
  white-space:pre-line;
  text-align:center;
  text-transform:uppercase;
  position:fixed;
  z-index:1;
  margin-top:25%;
  margin-left:96%;
}
@media screen and (max-width: 650px) {
  .pl {
    margin-top: 0;
    margin-bottom: 1rem;
    margin-left:86%;
    font-size:60%;
    margin-top:20%;
  }
}

.buton {
  width:auto;
  margin-top:-10%;
  margin-left:75%;
   position:absolute;
}

@media screen and (max-width: 650px) {
  .buton {
    margin-left:55%;
    /* margin-bottom:30px ; */
  }
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

#container1{
  display:inline-block;
  width:100%;
  background: #6190E8;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #A7BFE8, #6190E8);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #A7BFE8, #6190E8); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  
}


#home-background {
  background-image: url("<?= base_url('assets/images/HomePage.png'); ?>");
  height: 100%;
  width:100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

@media screen and (max-width: 650px) {
  .responsiveImage {
    display:block;
      width:25%;
      height: 25%;  
    }
}

#team-background {
  background-image: url("<?= base_url('assets/images/Team.png'); ?>");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

  .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.column-size p {
    margin-top: 0;
    margin-bottom: 1rem;
    font-size: 25px;
}
/* .column-size .col-md-6 {
    margin-top: 0;
    margin-bottom: 1rem;
    font-size: 30px;
} */

@media screen and (max-width: 650px) {
  .column-size p {
    margin-top: 0;
    margin-bottom: 1rem;
    font-size: 1rem;
  }
}


@media screen and (max-width: 650px) {
  .col-md-4 {
    width: 100%;
    display: block;
    margin: 0 30px;
    margin-bottom:20px;
  }
}

@media screen and (max-width: 650px) {
  .center {
    width: 100%;
    display: block;
    margin: 0 30px;
    margin-bottom:20px;
    text-align: center;
  }
}

@media screen and (max-width: 650px) {
  #contactus h4 {
    width: 100%;
    display: block;
    margin: 0 30px;
    margin-bottom:20px;
    /* font-size: 25%; */
  }
}

@media screen and (max-width: 650px) {
  #contactus .col-md-1 {
    width: 100%;
    display: block;
    margin: 0 30px;
    margin-bottom:20px;
    /* font-size: 50%; */
  }
}


#row2{
  margin-bottom: 5%;
}
#media {
  margin-bottom: 5%;
  
}

#contactusform {
  display:block;
  width:100%; 
}
.form-control{
  border-left:none;
  border-right:none;
  border-top:none;
}

#more {display: none;}

.footer-background {
  background: #DCE35B;  /* fallback for old browsers */
background: -webkit-linear-gradient(to top, #45B649, #DCE35B,#ffffff);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to top, #45B649, #DCE35B,#ffffff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
  </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?= base_url('home') ?>"><img src="<?= base_url('assets/images/Hiya Logo.png'); ?>" alt="logo" width="15%" height="15%"></a>
  <button class="navbar-toggler"  style="margin-left:80%; margin-top:-10%;" type="button" data-toggle="collapse" data-target="#navlinks" aria-controls="navlinks" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- <div class="collapse navbar-collapse mr-auto" id="navbarColor01">
    
  </div> -->

  <div class="collapse navbar-collapse mr-auto" id="navlinks">
    <ul class="navbar-nav mr-sm-4">
        <li class="nav-item active">
          <?= anchor('home/index','Home',['class'=>'nav-link']); ?>
        </li>
        <li class="nav-item">
         <?= anchor('home/meethiya','Meet Hiya',['class'=>'nav-link']); ?>
      </li>
        <li class="nav-item">
          <?= anchor('home/product','Product',['class'=>'nav-link']); ?>
        </li>
        <li class="nav-item">
          <?= anchor('home/media','Media',['class'=>'nav-link']); ?>
        </li>
        <li class="nav-item">
          <?= anchor('home/contactus','Contact Us',['class'=>'nav-link']); ?>
        </li>
      </ul>
  </div>
  
</nav>

  


  
