 <?php

ob_start();


 if( $_POST['submit']!= "" && isset($_POST['submit']) && $_POST['email']!="")   /*this is the validation checking is the form
 submitted or not*/
 {


    // EDIT THE 2 LINES BELOW AS REQUIRED

   $email_to = "service@pchandyman.co.nz";


    $email_subject = "Enquiry Message";
    $first_name = $_POST['firstname']; // required
    
    $email_from = $_POST['email']; // required<br>

    $email_phone = $_POST['phone']; // required
  
    $comments = $_POST['message']; // required
 $email_message .= "Name: ".$first_name."\n";
   
    $email_message .="Email: ".$email_from."\n";
	 $email_message .="Phone no: ".$email_phone."\n";
   
    $email_message .="Message: ".$comments."\n";$headers .= 'From: '.$email_from."\r\n".
 $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
	$headers .= 'Cc: service@pchandyman.co.nz\r\n';

'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();



@mail($email_to, $email_subject, $email_message, $headers);  
echo "<script type='text/javascript'>  window.location='thanks.html'; </script>";
 }


?>


 
 
 
 
 
 <doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
     <!-- Custom CSS -->
    <link rel="stylesheet" href="resources/css/style.css">
    <!-- Custom FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://use.fontawesome.com/3635783bdb.js"></script>
  <title>PC Handyman</title>
	
	 <style type="text/css">
  dl, ol, ul {
    margin-top: 0;
    margin-bottom: 1rem;
    list-style: none !important;
}

.stylish-color-dark {
    background-color: #3e4551 !important;
}
footer.page-footer {
    color: #fff !important;
}

li a {
 color: #fff !important;
}

a.waves-effect, a.waves-light {
    display: inline-block;
}

.btn-fb {
    background-color: #3b5998 !important;
    color: #fff !important;
}

.btn-floating i {
    display: inline-block;
    width: inherit;
    text-align: center;
    color: #fff;
}

.btn-tw {
    background-color: #55acee !important;
    color: #fff !important;
}
.btn-gplus {
    background-color: #dd4b39 !important;
    color: #fff !important;
}

.btn-li {
    background-color: #0082ca !important;
    color: #fff !important;
}
.btn-dribbble {
    background-color: #ec4a89 !important;
    color: #fff !important;
}

.mt-4, .my-4{
margin-top:0px !important;
}
</style>
  </head>


  <body>
     <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="spec">
  <a class="navbar-brand" href="#">PC Handyman <img class="logopic" src="resources/images/logo.jpg" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">Why PC Handyman?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="contact.html">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>


<section id="contact" class="content-section">
        <div class="contact-section">
            <div class="container">
              <h2>Contact Us</h2>
              <p class="text-center p-3">Feel free to get in touch with us by filling the below contact form or visiting our social network sites like Fackebook or LinkedIn.</p>
              <div class="row  justify-content-center">
                <div class="col-md-8 col-md-offset-2">
                  <form class="form-horizontal text-center" method="post" action="#">
                    <div class="form-group ">
                      <label for="exampleInputName2">Name </label>
                      <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe" name="firstname">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail2">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com" name="email">
                    </div>
					
					
					 <div class="form-group">
                      <label for="exampleInputEmail2">Phone</label>
                      <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Ph number" name="phone">
                    </div>
					
                    <div class="form-group ">
                      <label for="exampleInputText">Your Message</label>
                     <textarea  class="form-control" placeholder="Description" name="message"></textarea> 
                    </div>
                    <input  type="submit" name="submit" value="Send Message">
                  </form>

                  <hr>
                   
                </div>
              </div>
            </div>
        </div>
      </section>


<!--Footer-->
<footer class="page-footer font-small stylish-color-dark pt-4 mt-4">

    <!--Footer Links-->
    <div class="container text-center text-md-left">
        <div class="row">

            <!--First column-->
           <!-- <div class="col-md-4">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Footer Content</h5>
                <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit
                    amet, consectetur adipisicing elit.</p>
            </div>-->
            <!--/.First column-->


            <!--Second column-->
            <!--<div class="col-md-2 mx-auto">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>
            </div>-->
            <!--/.Second column-->

         

            <!--Third column-->
           <!-- <div class="col-md-2 mx-auto">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>
            </div>-->
            <!--/.Third column-->

        

            <!--Fourth column-->
            <!--<div class="col-md-2 mx-auto">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>
            </div>-->
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer Links-->



    <!--Call to action-->
    <!--<div class="text-center py-3">
        <ul class="list-unstyled list-inline mb-0">
            <li class="list-inline-item">
                <h5 class="mb-1">Register for free</h5>
            </li>
            <li class="list-inline-item">
                <a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
            </li>
        </ul>
    </div>-->
    <!--/.Call to action-->



    <!--Social buttons-->
    <div class="text-center">
         <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-fb mx-1" href="https://www.facebook.com/pchandymanakld/" target="_blank">
                    <i class="fa fa-facebook"> </i>
                </a>
            </li>
			
		
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-tw mx-1" href="#">
                    <i class="fa fa-phone"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-gplus mx-1" href="mailto:service@pchandyman.co.nz">
                    <i class="fa fa-envelope"> </i>
                </a>
            </li>
           
        </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        � 2018 Copyright:
        <a href="#"> PC Handyman Ph:022-3090205  </a>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
                    


  </body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>