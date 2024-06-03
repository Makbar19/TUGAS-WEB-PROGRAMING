<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="#DCDCDC">
<title>INPUT COSTUMER</title>
<div class="">
</div>  
<form id="PENDAFTARAN" action="FORMTAMPILAN.php" method="post">
  <div class="container" align="center">    
   <h1>FORMULIR PENDAFTARAN</h1>
   <p>
     <label class="form-label" align="left">Nama Lengkap</label>
     <input class= "form_input" type="text" placeholder="Enter Nama" name="Name">
   <p>
     <label class="form-label" align="left">Alamat</label>
     <input class= "form_input" type="text" placeholder="Enter Alamat" name="Alamat">
   <p>
     <label class="form-label" align="left">Tempat Lahir</label>
     <input class= "form_input" type="text" placeholder="Enter Tempat lahir" name="Tempat_Lahir">
   <p>
     <label class="form-label" align="left">Tanggal Lahir</label>
     <input class= "form_input" type="date" name="Tanggal_Lahir" value="<?php echo date("d-m-Y"); ?>">
   <p>  
     <label class="form-label" align="left">Email:</label>
     <input class= "form_input" type="text" placeholder="Enter Email"name="Email">  
   <p>
   <label class="form-label" align="left">Jenis Kelamin</label>
   <select class="form-select" type="text" id="jenisKelamin" name="jenisKelamin">
      <option value="L">Laki-laki</option>
      <option value="P">Perempuan</option>
   </select>
   <p>    
     <input name="Confirm" class="Confirmbutton" type="submit" onclick="myfunction()" value="CONFIRM">
     <input name="Cancel" class="Clearbutton" type="reset"  value="CLEAR DATA">
     
<style>
  body {
        font-family: poppins;
        background: url('https://i.pinimg.com/originals/a0/95/79/a095793d809f2e134db9f8b3fb55ba95.gif') no-repeat;
        background-size: cover;
        } 
  h1{ 
    color:#FF0000 ;
    word-spacing: 3px;
    letter-spacing: 2px;
    -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: white ;
    }
  p{
    color:white;
    word-spacing: 3px;
    letter-spacing: 2px;
    -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: black ;
   }
  .barcontainer
                {
                 width: 100%;
                 margin: 0 auto;
                 padding: 20px;
                 border: 2px solid #ccc;
                 border-radius: 10px;
                 background: #F8F8FF; 
                }
     .container 
                {
                 width: 500px;
                 margin: 0 auto;
                 padding: 20px;
                 border: 0px solid #ccc;
                 border-radius: 100px;
                 background: transparant;
                 backdrop-nofilter: blur(20px) ;
                }
     .form-label
                {
                 display: block;
                 margin-bottom: 10px;
                }
     .form_input 
                {
                 width: 92%;
                 padding: 8px;
                 border: 1px solid #ccc;
                 border-radius: 100px;
                 padding-right: 30px;
                 appearance: none;
                }
      .form-select 
                {
                 width: 100%;
                 padding: 8px;
                 border: 1px solid #ccc;
                 border-radius: 100px;
                 padding-right: 30px;
                 appearance: none;
                }
              
       input[type=text]:focus, input[type=date]:focus
                {
                 background-color: #ddd;
                 outline: none;
                }
      select[type=text]:focus
                {
                 background-color: #ddd;
                 outline: none;
                }
      .Confirmbutton 
                {
                 background-color: #FF0000;
                 padding: 10px 20px;
                 border: none;
                 border-radius: 100px;
                 cursor: pointer;

                }
      .Clearbutton
                {
                 background-color: #FF0000;
                 padding: 10px 20px;
                 border: none;
                 border-radius: 100px;
                 cursor: pointer;
                }
      .Confirmbutton, .Clearbutton {
                 color: white;
                 font-family: poppins;
                 word-spacing: 5px;
                 letter-spacing: 3px;
                }                           
    </style>     
  </div>                     
</form>
<script type="text/javascript">
function myfunction()
{
  alert("Klik (okey) jika anda sudah mengisi data dengan benar")
}
</script>            
</body>
</html>