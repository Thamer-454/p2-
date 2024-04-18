<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>
<?php include_once './parts/header.php'; ?>


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 ">
    <div class="col-md-5 p-lg-5 mx-auto ">
    <img src="images/pt1.png ">  
    <h1 class="display-4 fw-normal">اربح مع ثامر</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <h3 id="#countdown"></h3>
      <p class="lead fw-normal">للسحب على ربح نسخه مجانيه من برنامج</p>
     
    </div>
  </div> 
</div>
</div>

  <div class="container">
    <h3>للدخول في السحب اتبع مايلي</h3>
  <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشر على صفحتي على الفيس بوك بالتاريخ المذكور اعلاه</li>
  <li class="list-group-item">سأقوم ببث مباشر لمدة ساعه عباره عن اسئله واجوبه حره للجميع</li>
  <li class="list-group-item">خلال فترة الساعه سيتم فتح صفحة التسجيل هنا حيث سنقوم بتسجيل اسمك و ايميلك</li>
  <li class="list-group-item">نهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
  <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</li>
</ul> 
  </div>

<div class="container">

<div class="position-relative text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form  action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    <h3>الرجاء أدخل معلوماتك</h3>
    
  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName" id="firstName" class="form-control" value="<?php echo $firstName ?>">
    <div class="form-text error"><?php echo $errors['firstNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" id="lastName" class="form-control" value="<?php echo $lastName ?>">
    <div class="form-text error"><?php echo $errors['lastNameNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">الايميل</label>
    <input type="text"  name="email" class="form-control" id="email" value="<?php echo $email ?>" >
    <div id="emailHelp" class="form-text error "><?php echo $errors ['emailError'] ?></div>
  </div>
  

  <button type="submit" name="submit" class="btn btn-primary">أرسل المعلومات</button>
</form>

  </div>
    </div>
     
   
    <div id="loader-con">
    <div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>




  <!-- Button trigger modal -->
  <div class="d-grid gap-2 col-6 mx-auto my-5" >
   <button type="button" id="winner" class="btn btn-primary" >
   اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
     
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقه</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $users): ?>
        <h1 class="display-3 text-senter modal-title" id="modalLabel"> <?php echo htmlspecialchars($users['firstName']) ?> </h1>
        <?php endforeach; ?>
      </div>
     
    </div>
  </div>
</div>
</div>

 
 <?php include './parts/footer.php'; ?>