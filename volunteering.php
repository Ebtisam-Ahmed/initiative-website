<?php

//check if user comes from a request

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    //Assign variables
    
        $fullName = filter_var( $_POST['full-name'],FILTER_SANITIZE_STRING);
        $mail = filter_var( $_POST['email'],FILTER_SANITIZE_EMAIL);
        $mobile = filter_var($_POST['mobile'],FILTER_SANITIZE_NUMBER_INT);
        $whatsapp = filter_var($_POST['whatsapp'],FILTER_SANITIZE_NUMBER_INT);
        $facebookAccount =filter_var($_POST['facebookAccount'],FILTER_SANITIZE_STRING);
        $homePhone = filter_var($_POST['home-phone'],FILTER_SANITIZE_NUMBER_INT);
        $address = filter_var($_POST['living-address'],FILTER_SANITIZE_STRING);
        $blood = filter_var($_POST['blood-type'],FILTER_SANITIZE_STRING);
        $place = filter_var($_POST['place-of-study-&-specialization'],FILTER_SANITIZE_STRING);
        $career = filter_var($_POST['volunteering-&-career-skills'],FILTER_SANITIZE_STRING);
        $reason = filter_var($_POST['reason-of-joining-ghaith'],FILTER_SANITIZE_STRING);
        $hours = filter_var($_POST['#-of-hours-to-give-ghaith-projects-&-activities'],FILTER_SANITIZE_STRING);
        $skills = filter_var($_POST['skills'],FILTER_SANITIZE_STRING);
    
        $msg = 'الاسم الرباعي: '.$fullName.'<br>'.'الهاتف النقال: '.$mobile .'<br>'.'الواتساب: '.$whatsapp.'<br>'.'حساب الفيسبوك: '.$facebookAccount.'<br>'.'هاتف المنزل: '.$homePhone.'<br>'.'عنوان السكن: '.$address.'<br>'.'فصيلة الدم: '.$blood.'<br>'.'مكان الدراسة والتخصص: '.$place.'<br>'.'المهارات التطوعية والمهنية: '. $career.'<br>'.'اذكر سبب رغبتك في الانضمام الى فريق غيث: '.$reason.'<br>'.'ماهو متوسط عدد الساعات الاسبوعية التي يمكنك ان تمنحها للتطوع في انشطة ومشاريع المبادرة: '.$hours.'<br>'.'المهارات والقدرات: '.$skills;
    
//creating array of errors
     $formErrors = array();
     if (strlen($fullName) < 10){
             $formErrors[] = 'يجب أن لا تكون الحقول فارغة'; 
            
        }
       
     if (strlen($mobile) < 5){
             $formErrors[] = 'يجب أن لا تكون الحقول فارغة'; 
            
        }
     if (strlen($whatsapp) < 5){
             $formErrors[] = 'يجب أن لا تكون الحقول فارغة'; 
            
        }
     if (strlen($facebookAccount) < 1){
             $formErrors[] = 'يجب أن لا تكون الحقول فارغة'; 
            
        }
     if (strlen($homePhone) < 1){
             $formErrors[] = 'يجب أن لا تكون الحقول فارغة'; 
            
        }
     if (strlen($address) < 1){
             $formErrors[] = 'يجب أن لا تكون الحقول فارغة'; 
            
        }
     if (strlen($blood) < 1){
             $formErrors[] = 'يجب أن لا تكون الحقول فارغة'; 
            
        }
     if (strlen($place) < 1){
             $formErrors[] = 'يجب أن لا تكون الحقول فارغة'; 
            
        }
     if (strlen($career) < 1){
             $formErrors[] = 'يجب أن لا تكون الحقول فارغة'; 
            
        }
    if (strlen($reason) < 1){
             $formErrors[] = 'يجب أن لا تكون الحقول فارغة'; 
            
        }
    if (strlen($hours) < 1){
             $formErrors[] = 'يجب أن لا تكون الحقول فارغة'; 
            
        }
     if (strlen($skills) < 1){
             $formErrors[] = 'يجب أن لا تكون الحقول فارغة'; 
            
        }
     $headers = 'from: '.$mail.'\r\n';
     $subject = 'استمارة التطوع';
     $myEmail = 'ebtesam4ahmed@gmail.com';
    
    if (empty($formErrors)) {
        
        mail($myEmail, $subject, $msg, $headers);
        
        $fullName = '';
        $mail = '';
        $mobile = '';
        $whatsapp = '';
        $facebookAccount = '';
        $homePhone = '';
        $address = '';
        $blood = '';
        $place = '';
        $career = '';
        $reason = '';
        $hours = '';
        $skills = '';
        
        $success = '<div class="alert alert-success text-center">تم ارسال الاستمارة بنجاح</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>مبادرة غيث الشبابية</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="غيث مبادرة شبابية أسسها مجموعة من الشباب الطلاب ذوي طموحات مشتركة للتميز والريادة في نشر ثقافة العمل التطوعي الجماعي ." />
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700|Anton" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/jpg" href="images/logo.jpg">
       <style>
         .banner img{
            width: 100%;
            height: 100vh;
            position: relative
          }
        .banner .img-text h1{
          margin-top: 40px;
          margin-bottom: 30px;
          font-size: 60px;
          color: #fff;
          text-align: center;
          position: absolute;
          bottom: -14%;
          top: 89%;
          color: #fff;
          width: 100%;
          padding: 10px;
          text-align: center;
        } 
        .form .custom-alert{
            
            padding: 5px 10px;
            display: none;
            
           }
        .icon-send{
            position: absolute;
            right: 30%;
            top: 20px;
            color: #fff;
           }
        @media (max-width:900px){
        .icon-send{
            position: absolute;
            right: 37%;
            top: 37%;
            color: #fff;
           }
           }
    </style>
    <!--[if lt IE9>
        <script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
      
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">
          
            
            <div class="site-logo">
              <a href="index.html" class="text-black"><img src="images/logo.jpg" style="width: 50px;height: 50px"/></a>
            </div>
            
              <nav class="site-navigation text-center ml-auto" role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block" dir="rtl">
                  <li><a href="index.html#home-section" class="nav-link active" target="_blank">الرئيسية</a></li>
                  <li><a href="profile.html" class="nav-link" target="_blank">الملف التعريفي</a></li>
                  <li><a href="index.html#achievement-section" class="nav-link" target="_blank">البرامج</a></li>
                  <li><a href="volunteering.php" class="nav-link" target="_blank">التطوع</a></li>
                   <li><a href="index.html#cont-section" class="nav-link" target="_blank">للتواصل</a></li>
                </ul>
              </nav>
          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
   	<div class="banner">
            <img src="images/volunteers.JPG" alt="volunteers"/>
            <div class="img-text">
              <h1>استمارة التطوع</h1>
            </div>

		</div>
    <div class="container">
		<div class="row justify-content-center">
            <div class="col-xs-12 text-center" >
                <h2 style="margin-top: 20px;color: green">معا نتطوع...معا نبني حضارة أمة</h2>
                <hr style="margin-bottom: 30px">
                <p class="text-black text-right" style="direction: rtl">1-كل الحقول مطلوبة.</p>
                <p class="text-black text-right" style="margin-bottom: 80px;direction: rtl">2-يجب ان تكون البيانات صحيحة مالم سيتم تجاهل الإستمارة.</p>

            </div>
        </div>
    </div>
    <div class="site-section bg-image overlay counter conten" style="background-image: url('images/profile1.jpg');">
      <div class="container">
        <div class="row justify-content-center text-black text-right" style="direction: rtl">
          <div class="col-lg-6 mb-5">
            <form  class="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <?php if (! empty($formErrors)) { ?>
                <div class="alert alert-danger alert-dismissible" role="start">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php
                       
                        foreach($formErrors as $errors) {
                            echo $errors . '<br>';
                        }
                                                 
                    ?>
                </div>
                <?php } ?>
                <?php  if (isset($success)) { echo $success; } ?>
              <div class="form-group row">
                <div class="col-md-12">
                  <label>الاسم الرباعي</label>  
                  <input type="text" name="full-name" class="fullName form-control" placeholder="الاسم الرباعي" value="<?php if(isset($fullName)){ echo $fullName; } ?>" autofocus/>
                  <div class="alert alert-danger custom-alert">يجب أن لا يكون الحقل <strong>فارغ</strong></div>
                </div>
                <div class="col-md-12">
                  <label>الايميل</label>  
                  <input type="Email" name="email" class="mail form-control" placeholder="الايميل" value="<?php if(isset($mail)){ echo $mail; } ?>" />
                  <div class="alert alert-danger custom-alert">يجب أن لا يكون الحقل <strong>فارغ</strong></div>
                </div>
                <div class="col-md-12">
                  <label>الهاتف النقال</label>
                  <input type="text" name="mobile" class="mobile form-control" placeholder="الهاتف النقال" value="<?php if(isset($mobile)){ echo $mobile; } ?>" />
                  <div class="alert alert-danger custom-alert">يجب أن لا يكون الحقل <strong>فارغ</strong></div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label>الواتساب</label>
                  <input type="text" name="whatsapp" class="whatsapp form-control" placeholder="الواتساب" value="<?php if(isset($whatsapp)){ echo $whatsapp; } ?>" />
                <div class="alert alert-danger custom-alert">يجب أن لا يكون الحقل <strong>فارغ</strong></div>
                </div>
              </div>
               <div class="form-group row">
                <div class="col-md-12">
                  <label>حساب الفيسبوك</label>
                  <input type="text" name="facebookAccount" class="facebookAccount form-control" placeholder="حساب الفيسبوك" value="<?php if(isset($facebookAccount)){ echo $facebookAccount; } ?>" />
                  <div class="alert alert-danger custom-alert">يجب أن لا يكون الحقل <strong>فارغ</strong></div>
                </div>
              </div>
                <div class="form-group row">
                <div class="col-md-12">
                  <label>هاتف المنزل</label>
                  <input type="text" name="home-phone" class="homePhone form-control" placeholder="هاتف المنزل" value="<?php if(isset($homePhone)){ echo $homePhone; } ?>" />
                  <div class="alert alert-danger custom-alert">يجب أن لا يكون الحقل <strong>فارغ</strong></div>
                </div>
              </div>
                 <div class="form-group row">
                <div class="col-md-12">
                  <label>عنوان السكن</label>
                  <input type="text" name="living-address" class="address form-control" placeholder="عنوان السكن" value="<?php if(isset($address)){ echo $address; } ?>" />
                  <div class="alert alert-danger custom-alert">يجب أن لا يكون الحقل <strong>فارغ</strong></div>
                </div>
              </div>
                  <div class="form-group row">
                <div class="col-md-12">
                  <label>فصيلة الدم</label>
                  <input type="text" name="blood-type" class="blood form-control" placeholder="فصيلة الدم" value="<?php if(isset($blood)){ echo $blood; } ?>" />
                  <div class="alert alert-danger custom-alert">يجب أن لا يكون الحقل <strong>فارغ</strong></div>
                </div>
              </div>
               <div class="form-group row">
                <div class="col-md-12">
                  <label>مكان الدراسة والتخصص</label>
                  <input type="text" name="place-of-study-&-specialization" class="place form-control" placeholder="مكان الدراسة والتخصص" value="<?php if(isset($place)){ echo $place; } ?>" />
                  <div class="alert alert-danger custom-alert">يجب أن لا يكون الحقل <strong>فارغ</strong></div>
                </div>
              </div>
                <div class="form-group row">
                <div class="col-md-12">
                  <label>المهارات التطوعية والمهنية</label>
                  <textarea name="volunteering-&-career-skills" class="career form-control"  cols="30" rows="5" placeholder="اكتب عن مهاراتك التطوعية والمهنية"><?php if(isset($career)){ echo $career; } ?></textarea>
                  <div class="alert alert-danger custom-alert">يجب أن لا يكون الحقل <strong>فارغ</strong></div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label>اذكر سبب رغبتك في الانضمام الى فريق غيث</label>
                  <textarea name="reason-of-joining-ghaith" class="reason form-control" cols="30" rows="5" placeholder="اذكر سبب رغبتك في الانضمام الى فريق غيث"><?php if(isset($reason)){ echo $reason; } ?></textarea>
                  <div class="alert alert-danger custom-alert">يجب أن لا يكون الحقل <strong>فارغ</strong></div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label>ماهو متوسط عدد الساعات الاسبوعية التي يمكنك ان تمنحها للتطوع في انشطة ومشاريع المبادرة</label>
                  <textarea name="#-of-hours-to-give-ghaith-projects-&-activities" class="hours form-control" cols="30" rows="5" placeholder="ماهو متوسط عدد الساعات الاسبوعية التي يمكنك ان تمنحها للتطوع في انشطة ومشاريع المبادرة"><?php if(isset($hours)){ echo $hours; } ?></textarea>
                  <div class="alert alert-danger custom-alert">يجب أن لا يكون الحقل <strong>فارغ</strong></div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                      <label>المهارات والقدرات</label>
                        <textarea name="skills" class="skills form-control" cols="30" rows="5" placeholder="هل تمتلك مهارات كالتصميم، المونتاج، التصوير الفوتوغرافي أو غيرها؟ اذكرها"><?php if(isset($skills)){ echo $skills; } ?></textarea>
                        <div class="alert alert-danger custom-alert">يجب أن لا يكون الحقل <strong>فارغ</strong></div>
                    </div>
                </div>
                <div class="form-group row">
                   <div class="col-md-6 ml-auto">
                     <input type="submit" class="btn btn-block text-white py-3 px-5" value="ارسال"><span class="icon-send"></span>
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-7 ml-auto">

                <a href="https://www.facebook.com/search/top/?q=Ghaith%20%D9%85%D8%A8%D8%A7%D8%AF%D8%B1%D8%A9%20%D8%BA%D9%8A%D8%AB%20%D8%A7%D9%84%D8%B4%D8%A8%D8%A7%D8%A8%D9%8A%D8%A9" target="_blank" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="http://t.me/Ghaith_Youth_Initiative"  target="_blank"class="pl-3 pr-3"><span class="icon-telegram"></span></a>
                <a href="https://www.instagram.com/ghaith_yo_in/" target="_blank" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
          </div>
        </div>
  
      </div>
    </footer>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>
  <script src="js/custom.js"></script>
    
  </body>
</html>