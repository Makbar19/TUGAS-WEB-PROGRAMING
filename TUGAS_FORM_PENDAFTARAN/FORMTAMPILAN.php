<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="#DCDCDC">
<?php
$Nama=$_POST['Name'];
$Alamat=$_POST['Alamat'];
$Tempat_Lahir=$_POST['Tempat_Lahir'];
$Tanggal_Lahir=$_POST['Tanggal_Lahir'];
$Email=$_POST['Email'];  
?>
<div class="container" align="center">
<div class="textcontainer" align="center">     
<h1 align="center">REGISTRASI BERHASIL</h1>
</div>
<p align="left">Nama : <?php echo$Nama;?></p>
<p align="left">Alamat : <?php echo$Alamat;?></p>
<p align="left">Tempat_Lahir : <?php echo$Tempat_Lahir;?></p>
<p align="left">Tanggal_Lahir : <?php echo$Tanggal_Lahir;?></p>
<p align="left">Email : <?php echo$Email;?></p>
<p>
<input align="center" class="Loginbutton" type="submit" value="Login">

</div class>
<style>
body {
      font-family: poppins;
      word-spacing: 2px;
      letter-spacing: 2px;
     }    
p
 {
 color:#000000;
 }
.textcontainer
         {
          width: 100%;
          margin: 0 auto;
          padding: 500pxpx;
          border: 2px solid #ccc;
          border-radius: 1px;
          background-color: #DC143C;
          color: white;
         }      
.container 
         {
          width: 500px;
          margin: 0 auto;
          padding: 20px;
          border: 3px solid #ccc;
          border-radius: 5px;
          background: #F8F8FF;
         }
.Loginbutton 
         {
          background-color: #DC143C;
          padding: 10px 20px;
          border: none;
          border-radius: 3px;
          cursor: pointer;
          color: white;
         }             
         
</style>                
</body>
</html>