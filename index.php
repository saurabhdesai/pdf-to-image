<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="img/11.ico" type="image/x-icon">
  <title>Easy-converter</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">
  <link href="css/green.css" rel="stylesheet">
  <script type="text/javascript">
            function previewpdf() {
              
                pdffile=document.getElementById("uploadpdf").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#viewer').attr('src',pdffile_url);
                $('.image-upload-wrap').hide();
                $('.file-upload-btn').hide();
                $('.file-upload-content').show();
                file-upload-content
            }
            function removeUpload1()
            {
              $('.image-upload-wrap').show();
                $('.file-upload-btn').show();
                $('.file-upload-content').hide();
                $('#viewer').hide
            }
            function removeUpload() {
   // $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('.file-upload-content').hide();
    $('.image-upload-wrap').show();
    $('.file-upload-btn').show();
    // $('#viewer').hide();
  }
  $('.image-upload-wrap').bind('dragover', function () {
          $('.image-upload-wrap').addClass('image-dropping');
      });
      $('.image-upload-wrap').bind('dragleave', function () {
          $('.image-upload-wrap').removeClass('image-dropping');
  });

        </script>
</head>

<body id="page-top">
   


  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
  
  <h3 class="mb-0">EASY CONVERTER
          <!-- <span class="text-primary">CONVERTER</span> -->
        </h3> 
    <a class="navbar-brand js-scroll-trigger" href="index.php">
    
      <span class="d-block d-lg-none">Clarence Taylor</span>
      
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/1.png" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#experience">Steps</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#education">Donate us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">Features</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#awards">About Us</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0">EASY
          <span class="text-primary">CONVERTER</span>
        </h1>
        <br><br>
        <!-- <div class="subheading mb-5">3542 Berry Street · Cheyenne Wells, CO 80810 · (317) 585-8468 ·
          <a href="mailto:name@email.com">name@email.com</a>
        </div> -->
        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<!-- <form action="" method="POST" enctype="multipart/form-data"> -->

<div class="file-upload">
  <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add PDF</button>
  <form action="new.php" method="post" enctype="multipart/form-data">
  <div  class="image-upload-wrap">
    <input class="file-upload-input" id="uploadpdf" name="upl" type='file'accept="application/pdf" onchange="previewpdf();"  >
    <div class="drag-text">
      <h3>Drag and drop a file or select add pdf</h3>
    </div>
  </div>
 
  <br>
  
  <div class="badges">
  <!-- <center>

  <input  class="btn btn-primary btn-lg" type="submit" value="convert" name="uploadd">
  </center><br><br> -->
  <div class="file-upload-content">
    
    <div class="image-title-wrap">
      <button  class="btn1" type="button" onclick="removeUpload()" class="remove-image">X </button>
    </div>
  </div>
  
  <div style="clear:both">
           <iframe id="viewer" frameborder="0" scrolling="no" width="400" height="400"></iframe>
        </div>
  </div>


  <center>

  <input  class="btn btn-primary btn-lg" type="submit" value="convert" name="uploadd">
  </center><br><br>
</form>

  </div>
  
        <!-- <p class="lead mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p> -->
        <!-- <div class="social-icons">
          <a href="#">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="#">
            <i class="fab fa-github"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div> -->
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-3 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">Steps</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">1.Upload your pdf </h3>
            <!-- <div class="subheading mb-3">Intelitec Solutions</div> -->
            <p>Click the Add PDF button to add PDF file you wish to convert. Wait for the conversion process to finish..</p>
          </div>
          <!-- <div class="resume-date text-md-right">
            <span class="text-primary">March 2013 - Present</span>
          </div> -->
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">2.Click on convert</h3>
            <!-- <div class="subheading mb-3">Intelitec Solutions</div> -->
            <p>Just click on convert button and get your converted images.</p>
          </div>
          <!-- <div class="resume-date text-md-right">
            <span class="text-primary">December 2011 - March 2013</span>
          </div> -->
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">3.Download images  </h3>
            <!-- <div class="subheading mb-3">Shout! Media Productions</div> -->
            <p>Download the results by just clicking on the DOWNLOAD  button to get them all at once in a ZIP archive.</p>
          </div>
          <!-- <div class="resume-date text-md-right">
            <span class="text-primary">July 2010 - December 2011</span>
          </div> -->
        </div>

        <!-- <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
            <h3 class="mb-0">Web Design Intern</h3>
            <div class="subheading mb-3">Shout! Media Productions</div>
            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">September 2008 - June 2010</span>
          </div>
        </div> -->

      </div>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
      <div class="w-100">
        <h2 class="mb-5">Donate us</h2>

        <!-- <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">University of Colorado Boulder</h3>
            <div class="subheading mb-3">Bachelor of Science</div>
            <div>Computer Science - Web Development Track</div>
            <p>GPA: 3.23</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">August 2006 - May 2010</span>
          </div>
        </div> -->

        <!-- <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
            <h3 class="mb-0">James Buchanan High School</h3>
            <div class="subheading mb-3">Technology Magnet Program</div>
            <p>GPA: 3.56</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">August 2002 - May 2006</span>
          </div>
        </div> -->
<a class="btn btn-primary" href="https://www.paypal.me/saurabhdesai251">Donate</a>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <h2 class="mb-5">Features</h2>

        <!-- <div class="subheading mb-3">Programming Languages &amp; Tools</div> -->
        <!-- <ul class="list-inline dev-icons">
          <li class="list-inline-item">
            <i class="fab fa-html5"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-css3-alt"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-js-square"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-angular"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-react"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-node-js"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-sass"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-less"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-wordpress"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-gulp"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-grunt"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-npm"></i>
          </li>
        </ul> -->

        <!-- <div class="subheading mb-3">Workflow</div> -->
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-check"></i>
            PDF to JPG conversion made easy</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Convert PDF pages to Images</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Preview Your image </li>
          <!-- <li>
            <i class="fa-li fa fa-check"></i>
            Agile Development &amp; Scrum</li> -->
        </ul>
      </div>
    </section>

    <hr class="m-0">

   

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
      <div class="w-100">
        <h2 class="mb-5">About Us</h2>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            Saurabh Desai</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            <a href="mailto:desaisd20gmail.com">Gmail-desaisd20@gmail.com</a></li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            <!-- 1<sup>st</sup> -->
            <a href="https://www.paypal.me/saurabhdesai251">donate us</a></li>
          <!-- <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            1<sup>st</sup>
            Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            2<sup>nd</sup>
            Place - University of Colorado Boulder - Emerging Tech Competition 2008</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            1<sup>st</sup>
            Place - James Buchanan High School - Hackathon 2006</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            3<sup>rd</sup>
            Place - James Buchanan High School - Hackathon 2005</li>
        </ul> -->
<br>
        <!-- <div class="social-icons">
          <a href="#">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="#">
            <i class="fab fa-github"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div> -->
      </div>
    </section>

  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/resume.min.js"></script>

</body>

</html>
// <?php
//  if(isset($_POST['uploadd']))
//  {
// 	// echo "clicked"; 
//    //echo $file_name=$_POST['post_image'];
// 	 // move_uploaded_file($file_name)
//    // $post_image = escape($_FILES['image']['name']);
//    echo $post_image = $_FILES['upl']['name'];
// 	$post_temp_loc = $_FILES['upl']['tmp_name'];
// 	 move_uploaded_file($post_temp_loc, "images/$post_image" );

 

// $pdf_file   = "images/$post_image";
// $save_to    = "cimage/$post_image.jpg";
// $dest= 'global.pdf';
// //header('Content-type:application/pdf');
// //header('Content-Length:'.filesize($pdf_file));

// copy($pdf_file,$dest);
// //	exec('magick', $pdf_file,$save_to);
// exec("magick -density 250 global.pdf  $save_to");

// echo "<img src='cimage/$post_image-0.jpg' alt='sample'>";
// }
//?>
