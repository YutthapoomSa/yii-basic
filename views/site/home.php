
<?php
    $this->registerCssFile("@web/css/home.css");
    $this->title = 'Home';
?>

<!doctype html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&family=Limelight&family=Noto+Sans+Thai:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/home.css">

</head>
<body class="img js-fullheight" style="background-image: url(images/bghome.png); height: 100px; background-position: center; background-repeat: no-repeat; background-size: cover; object-fit:cover;">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 ">
        <div class="box-item">
            <h1 > Smart <br>Dashboard</h1>
        
            <p>ระบบแดชบอร์ดอัจฉริยะ
              <br>เป็นระบบหน้าจอที่สรุปข้อมูลให้อยู่ในหน้าจอเดียว
              <br>เพื่อให้ผู้บริหารดูข้อมูลแล้วสามารถเข้าใจได้ทันที</p><br>
          
            <div style="text-align:center;"><a href="index.php?r=site%2Flogin" ><button class="buttonhome button2" role="button"> เข้าสู่ระบบ </button></a></div>
          
        </div>
      </div>

      <div class="col-sm-6 ">
		    <div class="box-item">
          <img src="images/bgobjecthomee.png" class="controller">
        </div>
      </div>

    </div>
  </div>
  
  </body>
</html>
