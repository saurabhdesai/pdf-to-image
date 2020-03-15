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

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">

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
        <!-- <h1 class="mb-0">EASY
          <span class="text-primary">CONVERTER</span>
        </h1> -->
        <br><br>
        <!-- <div class="subheading mb-5">3542 Berry Street · Cheyenne Wells, CO 80810 · (317) 585-8468 ·
          <a href="mailto:name@email.com">name@email.com</a>
        </div> -->
        <?php
 if(isset($_POST['uploadd']))
 {
	// echo "clicked"; 
   //echo $file_name=$_POST['post_image'];
	 // move_uploaded_file($file_name)
   // $post_image = escape($_FILES['image']['name']);
    $post_image = $_FILES['upl']['name'];
    
$fp="images/$post_image";

if (!$fp = @fopen($fp,"r")) {
        echo 'failed opening file '.$_REQUEST['file'];
}
else {
        $max=0;
        while(!feof($fp)) {
                $line = fgets($fp,255);
                if (preg_match('/\/Count [0-9]+/', $line, $matches)){
                        preg_match('/[0-9]+/',$matches[0], $matches2);
                        if ($max<$matches2[0]) $max=$matches2[0];
                }
        }
        fclose($fp);
//echo 'There '.($max<2?'is ':'are ').$max.' page'.($max<2?'':'s').' in '. $_REQUEST['file'].'.';
//echo $max;
}
	$post_temp_loc = $_FILES['upl']['tmp_name'];
	 move_uploaded_file($post_temp_loc, "images/$post_image" );

 

$pdf_file   = "images/$post_image";
$save_to    = "cimage/$post_image.jpg";
$save_to4    = "images/$post_image.jpg";
$dest= 'global.pdf';
//header('Content-type:application/pdf');
//header('Content-Length:'.filesize($pdf_file));

copy($pdf_file,$dest);
//	exec('magick', $pdf_file,$save_to);
exec("magick -density 250 global.pdf  $save_to");
if($max==1)
{
  $save_to3= "cimage/$post_image.jpg";
  echo "<img src='$save_to3' style='width:400px;height:500px;' alt='preview'>";
}
else
{
$save_to1= "cimage/$post_image-0.jpg";
$save_to2= "cimage/$post_image-1.jpg";
//$save_to3= "cimage/$post_image-2.jpg";
echo "<img src='$save_to1' style='width:400px;height:500px;' alt='preview'>";
echo "<img src='$save_to2' style='width:400px;height:500px;' alt='preview' >";
//echo "<div style='height:100px; width:100%; background=#000000'></div>";
}
//echo "<img src='$save_to3' style='width:500px;height:600px;' alt='sample'>";

 }


 



 
//  <div>
// <center>
// <!-- <button class="btn btn-primary">
// <a href="new.php?hello=true">downlaod</a>
// </button> -->

// </center>
// </div>

 //echo $post_image;

// echo $file;
// echo "yes";
// //where $file is the full path to your PDF document.
//         if(file_exists($file)) {
//                         //open the file for reading
//             if($handle = @fopen($file, "rb")) {
//               global $count;
//                echo "hii";
//                 $count = 0;
//                 $i=0;
//                 while (!feof($handle)) {
//                     if($i > 0) {
//                         $contents .= fread($handle,8152);
                        
//                     }
//                     else {
//                           $contents = fread($handle, 1000);
//                         //In some pdf files, there is an N tag containing the number of
//                         //of pages. This doesn't seem to be a result of the PDF version.
//                         //Saves reading the whole file.
//                         if(preg_match("/\/N\s+([0-9]+)/", $contents, $found)) {
//                             return $found[1];

//                         }
//                     }
//                     $i++;
//                 }
                
//                 fclose($handle);
 
//                 //get all the trees with 'pages' and 'count'. the biggest number
//                 //is the total number of pages, if we couldn't find the /N switch above.                
//                 if(preg_match_all("/\/Type\s*\/Pages\s*.*\s*\/Count\s+([0-9]+)/", $contents, $capture, PREG_SET_ORDER)) {
//                     foreach($capture as $c) {
//                         if($c[1] > $count)
//                            $count = $c[1];
                            
//                     }
                
//                    echo $count;           
//                 }
//             }
                 
//           }
//           else
//           {
//             echo "error";
//           }
        
           
 echo "<form action='' method='POST'>
 <input type='text' name='path' id='' value='$post_image' hidden >

 <input type='text' name='cnt' id='' value='$max' hidden >
 <input class='btn btn-primary' type='submit' name='down' value='download'>

 </form>";
        
echo "<br>";
//echo "heloo";
//echo $count;
global $count;
// if(isset($_GET['hello']))
// {
//   echo $count;
// }
if(isset($_POST['down']))
  {
     $cnt1=$_POST['cnt'];
     $img=$_POST['path'];
     if($cnt1==1)
     {
      $files[$i] = ("cimage/$img.jpg");
     }
     else
     {
    for($i=0;$i<$cnt1;$i++) { 
    $files[$i] = ("cimage/$img-$i.jpg");
    }
  }
    # create new zip opbject
    $zip = new ZipArchive();

    # create a temp file & open it
    $tmp_file = tempnam('.','');
    $zip->open($tmp_file, ZipArchive::CREATE);

    # loop through each file
    foreach($files as $file){

        # download file
        $download_file = file_get_contents($file);

        #add it to the zip
        $zip->addFromString(basename($file),$download_file);

    }

    # close zip
    $zip->close();

    # send the file to the browser as a download
    header('Content-disposition: attachment; filename=Resumes.zip');
    header('Content-type: application/zip');
    header("Pragma: no-cache"); 
    header("Expires: 0"); 
    readfile($tmp_file);
    exit;
}
// else
// {
//     echo "error";
// }
        
?>

 

       <!-- <p class="lead mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p> -->
       
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
            Cross Functional Teams</li>
          <li>
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
        <br>
        
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

  