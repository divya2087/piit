
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <meta name="google-site-verification" content="wIX1nEmwe93ghH1IhK5IrZMPu22kJl3E4cl-9y4_4QI">

    <link href="css/assets.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link href="css/icofont.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/@icon/icofont@1.0.1-alpha.1/icofont.min.css" rel="stylesheet">
    </head>

<body>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-3">
                <div class="rt-features style2 ">
                    <div class="rt-line-arrow d-none d-md-block">
                        <img src="images/line-arrow.png" alt="Line Arrow">
                    </div>
                    <div class="icon">
                        <i class="icofont-unique-idea"></i>
                    </div>
                    <h4 class="text-capitalize">Student Verification </h4>
                   
                    <a href="verify.php" class="">View</a>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6 mobi-mb-30 padd-xs-0">
                <div class="rt-features style2">
                    <div class="rt-line-arrow rotatex d-none d-md-block">
                        <img src="images/line-arrow.png" alt="Line Arrow">
                    </div>
                    <div class="icon bg-green">
                        <i class="icofont-certificate"></i>
                    </div>
                    <h4 class="text-capitalize"> Certification Verification </h4>
                  
                    <a href="certificate_verification.php" class="">View </a>
                </div>
            </div>
			<div class="col-md-3">
                <div class="rt-features style2">
                    <div class="rt-line-arrow rotatex d-none d-md-block">
                        <img src="images/line-arrow.png" alt="Line Arrow">
                    </div>
                    <div class="icon bg-green">
                        <i class="icofont-certificate"></i>
                    </div>
                    <h4 class="text-capitalize"> Marksheet Verification </h4>
                  
                    <a href="marksheet_verification.php" class="">View </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="rt-features style2">
                    <div class="icon">
                        <i class="icofont-businessman"></i>
                    </div>
                    <h4 class="text-capitalize">Become a Partner</h4>
                   
                    <a href="franchise_enquiry.php" class="">Submit</a>
                </div>
            </div>
        </div>
    </div>

<div class="counting-bg shadow counter-wrapper ">
    <div class="container" style="max-width:none;">
        <div class="d-flex text-center justify-content-around  p-3">
            <div class>
                <div class="about_point counter">
                    <i class="icofont-certificate-alt-1 icon_conunt"></i>
                    <p class="counter-value" data-count="8">0</p>
                    <h3>Our<br>Certification</h3>
                </div>
            </div>
            <div class>
                <div class="about_point counter">
                    <i class="icofont-teacher icon_conunt"></i>
                    <p class="counter-value" data-count="56">0</p>
                    <h3>Our<br>Partners</h3>
                </div>
            </div>
            <div class>
                <div class="about_point counter">
                    <i class="icofont-user-suited icon_conunt"></i>
                    <p class="counter-value" data-count="120">0</p>
                    <h3>Our<br>Associates</h3>
                </div>
            </div>
            <div class>

                <div class="about_point counter">
                    <i class="icofont-graduate-alt icon_conunt"></i>
                    <p class="counter-value" data-count="18667">0</p>
                    <h3>Certified<br>Candidates</h3>
                </div>
            </div>
            <div class>

                <div class="about_point counter">
                    <i class="icofont-users-social icon_conunt"></i>
                    <p class="counter-value" data-count="4000">0</p>
                    <h3>Registered<br>Users</h3>
                </div>
            </div>
            <div class>

                <div class="about_point counter">
                    <i class="icofont-certificate-alt-1 icon_conunt"></i>
                    <p class="counter-value" data-count="5000">0</p>
                    <h3>Certificates<br>Issued</h3>
                </div>
            </div>
            
            <div class>
                <div class="about_point counter">
                    <i class="icofont-globe-alt icon_conunt"></i>
                    <p class="counter-value" data-count="6000">0</p>
                    <h3>Site<br>Visitors</h3>
                </div>
            </div>
        </div>
        <?php include 'divya.php' ?>

        

    </div>
</div>










		
		
			
            	   


					
					
  <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/lightbox.js"></script>
    <script src="js/api.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>
<script>
  let targetElements = document.querySelectorAll(".counter-value");
  let animationtiming = 1000;

  targetElements.forEach((targetElement) => {
    let valueOne = 0;
    let valueTwo = parseInt(targetElement.getAttribute("data-count"));
    let timing = Math.floor(animationtiming / valueTwo);
    let counter = setInterval(function (){
      valueOne += 1;
      targetElement.textContent = valueOne;
      if(valueOne == valueTwo) {
        clearInterval(counter);
      }
    }, timing);
  });
  




</script>

    
    
    

    
   
</body>
</html>
