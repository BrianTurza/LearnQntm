<?php require 'common.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="LearnQNTM is free elearning platform that focuses on Quantum Computing. It has interactive excersises">
  <meta name="author" content="Brian Turza">
  <title><?php echo $lang['PAGE_TITLE'] ?> - Home</title>
	<link rel="icon" href="" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="vendors/codemirror/lib/codemirror.css">
  <link rel="stylesheet" href="vendors/codemirror/theme/material.css">
  <script src="vendors/codemirror/lib/codemirror.js"></script>
  <script src="vendors/codemirror/mode/python/python.js"></script>
  <script src="vendors/codemirror/addon/selection/active-line.js"></script>
  <script src="vendors/codemirror/addon/edit/matchbrackets.js"></script>

  <link rel="stylesheet" href="css/style.css">
  <style>
.CodeMirror {
  height: 70vh;
}
.button {
  text-transform: none !important;
}
  </style>
</head>
<body>
  <!--------------------Header Menu Area ------------------=-->
  <?php require 'includes/navbar.php' ?>
  <!--------------------Header Menu Area ------------------=-->


  <main class="side-main">
   
    <section class="hero-banner mb-30px">
      <div class="container">
        <div class="row">
          <div  class="col-lg-7">
            <div class="hero-banner__img">
              <img style="margin-top: -20%;" class="img-fluid" src="images/quantum.png" alt="">
            </div>
          </div>
          <div class="col-lg-5 pt-5">
            <div class="hero-banner__content">
              <h1><?php echo $lang['BANNER_TITLE'] ?></h1>
              <p><?php echo $lang['BANNER_CONTENT'] ?></p>
              <a class="button bg" href="learn/"><?php echo $lang['BANNER_BUTTON'] ?></a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- ----------------- Feature section start ------------------=-->  
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#3827a9" fill-opacity="1" d="M0,320L1440,0L1440,0L0,0Z"></path>
    </svg><br><br>   
    <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#3827a9" fill-opacity="1" d="M0,224L1440,64L1440,0L0,0Z"></path>
    </svg>-->
    <div id="features" style="padding-top: 150px"></div>
    <section  class="section-margin">
      <div style="margin-top: -10%;" class="container">
        <div class="section-intro pb-85px text-center">
          <h2 class="section-intro__title"><?php echo $lang['FEATURES_TITLE'] ?></h2>
          <p class="section-intro__subtitle"><?php echo $lang['FEATURES_DESCRIPTION'] ?></p>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
                </span>
                <h3 class="card-feature__title"><?php echo $lang['FEATURES_TITLE_EXCEC'] ?></h3>
                <p class="card-feature__subtitle"><?php echo $lang['FEATURES_DESCRIPTION_EXCEC'] ?></p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="fas fa-brain"></i>
                </span>
                <h3 class="card-feature__title"><?php echo $lang['FEATURES_TITLE_PROBLEM'] ?></h3>
                <p class="card-feature__subtitle"><?php echo $lang['FEATURES_DESCRIPTION_PROBLEM'] ?></p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="fas fa-laptop-code"></i>
                </span>
                <h3 class="card-feature__title"><?php echo $lang['FEATURES_TITLE_DOING'] ?></h3>
                <p class="card-feature__subtitle"><?php echo $lang['FEATURES_DESCRIPTION_DOING'] ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ------ Feature section end ---------->      
        

    <!-- -------- Online IDE section start -------->      
    <section class="section-margin">
      <div class="container" style="height: 100vh;">
        <h2>Online IDE and Compiler</h2>
          <div class="editor">
            <textarea id="code" name="code">
class Quantum:
    def __init__(self):
        self.stdout = ""

    def H(self, x): #  Hadamard transform
        """
        This method handles Hadamard transform
        :param x:
            0
        :return:
            1/√2n(|0⟩y + |1⟩y)
        """
    def SWAP(self, quibits):
        """
        This method swaps to quibits and return it in representation of matrix.
        :param quibits:
            |00⟩, |01⟩, |10⟩, |11⟩
        :return: Matrix
            [[1, 0, 0, 0]
              [0, 0, 1, 0]
              [0, 1, 0, 0]
              [0, 0, 0, 1]]
    
            </textarea>
        </div>
        <a href="ide/old.php"><button style="margin-top: 1%; width:100px; height: 35px" class="btn btn-success">Run</button></a>
      </div>
    </section>
    <!-- -------- Online IDE section end ------------>          
   
    <section class="section-padding--small bg-magnolia">
      <div class="container">
        <div class="row align-items-center pt-xl-3 pb-xl-5">
          <div class="col-lg-6">
            <div class="solution__img text-center text-lg-center mb-4 mb-lg-0">
              <img style="height: 30rem; margin-top: -6rem" class="img-fluid" src="images/quantum-computer.png" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="solution__content">
              <h2><?php echo $lang['JOIN_TITLE'] ?></h2>
              <p><?php echo $lang['JOIN_DESCRIPTION'] ?></p>
              <a class="button button-light" href="learn/"><?php echo $lang['BANNER_STARTED'] ?></a>
            </div>
          </div>
        </div>
      </div>
    </section> 

  </main>


  <!-- ------------------ start footer Area ------------------ -->
  <?php require 'includes/footer.php' ?>
  <!-- ------------------ End footer Area -------------------->

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <!--<script src="js/jquery.ajaxchimp.min.js"></script>-->
  <script src="js/main.js"></script>

  <script>
    var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
      lineNumbers: true,
      styleActiveLine: true,
      matchBrackets: true,
      theme: 'material'
  });
  CodeMirror.setSize("100%", "100%");
  $("#nav ul li a[href^='#']").on('click', function(e) {

// prevent default anchor click behavior
e.preventDefault();

// animate
$('html, body').animate({
    scrollTop: $(this.hash).offset().top
  }, 800, function(){

    // when done, add hash to url
    // (default click behaviour)
    window.location.hash = this.hash;
  });

});
  </script>
</body>
</html>