<?php include("conn.php");
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit']))

{
  $name=$_POST['name1'];
  $roll=$_POST['roll'];
  $gender=$_POST['gender'];  
  $dept=$_POST['department'];
  $year=$_POST['year'];
  $email=$_POST['email'];
  $password=$_POST['password'];
    
  $_SESSION["sname"]=$name;
  $_SESSION["semail"]=$email;
    
    
    
    if($name!="" && $roll!="" && $dept!="" && $year!="" && $email!="" && $password!="" )
  { 
        $insert="INSERT INTO `student_registration`(`roll`,`gender`,`name`,`dept`,`year`,`emailid`,`password`) VALUES('".$roll."','".$gender."','".$name."','".$dept."','".$year."','".$email."','".$password."')";
      $data=mysqli_query($conn,$insert); 
      if($data)
	  {
	  
	  
          header("Location:thnk.php"); 
	  }
        else
        {
            echo "Something Wrong Occurs..!! Please Try Again";
        }
        
    }
    else{
        echo "Fields Should Not Be Empty..!!";
    }
}


?>

<!DOCTYPE html>
<html>

<style type="text/css">
body{
 
}
.box{
  width:74%;
  height:165px;
 border:solid 1px #CF0403;
 
  margin-left: 13%;
  opacity: .9;
  border-radius:12px;
}
.title h2{
      font-size: 50px;
      font-family: 'Kaushan Script', cursive;
       margin-left:-10px;
      margin-top: -05px;
      padding-top:3px;
      padding-bottom: 2px;
        padding-left:120px;
      border-radius:15px;  
      color:white;
           }
.one{
  margin-top: 1.5%;
  margin-left:40%;
  margin-right:31%;
  opacity: .9;
   boox-shadow:0px 0px 15px lightgreen;
  height:320px;
  background:rgb(34 25 48 / 84%);
}
.boxtwo{
 
  background-size: cover;
  
  border-radius:12px;
}
.boxtwo input[type="submit"]
       {

     font-size:25px;
     text-align:center;
  
   height:40px;
   margin-left:60% ;
   margin-top: 10px;
   background:#660000;
   color:#FFFFFF;
   border-radius:18px;
   }

</style>




<head><title>REGISTRATION</title></head>
<body>
  <div class="box">
   <table  style =" font-size:16pt" align="center" width="100%" height="100%">
      <tr>
        <td style="#"><h1 align="center"><marquee ><i>Welcome To online Library System</i>  </marquee></h1></td>
      </tr>
      <tr>
          <td  align="center"><b><i><mark style="color:white;background-color:maroon";>REGISTRATION PAGE</mark></i></b></td>
      </tr>
    </table>
  </div>
  <br><br>
  <div  class="boxtwo" style="">

<fieldset align="center" style="color:blue;" class="one">
  <div class="title">
  <h2>YOUR DETAILS</h2>
    </div>

<form action="" method="post">
<table align="Right" style="color:white;font-size:13pt">
	  <tr>
			<td>NAME:</td>
 <td ><input type="text" required="required" name="name1" size="17"
 maxlength="30" style="color:blue"/></td>

	  </tr>
    <tr>
      <td>GENDER.:</td>
      <td>
<input type="radio" name="gender" value="m" checked> Male
<input type="radio" name="gender" value="f"> Female</td>
    </tr>
<tr>
<td>UNIVERSITY ROLL NO.:</td>
 <td><input type="text" name="roll" required="required" size="17"
 maxlength="30" style="color:blue"/></td></tr>

<tr>
<td>DEPARTMENT:</td>
 <td><select required name="department">
  <option value="cse">Computer Science Engineering</option>
  <option value="tt">Textile Technology</option>
  <option value="me">Mechanical Engineering</option>
  <option value="ee">Electrical Engineering</option>
</select></td></tr>
<tr>
<td>
YEAR:</td>
 <td>
   <select required name="year">
     <option value="1st_year">1st Year</option>
     <option value="2nd_year">2nd Year</option>
     <option value="3rd_year">3rd Year</option>
     <option value="4th_year">4th Year</option>
    </select>
 </td></tr>
<tr><td>E-MAIL ID:</td>
 <td><input type="email" name="email" required="required" size="17"
 maxlength="30" style="color:blue"/></td></tr>
<tr>
<td>
PASSWORD:</td>
 <td><input type="text" name="password" required="required" size="17"
 maxlength="30" style="color:blue"/>
</td></tr>

 <tr>
  <td><input type="submit" name="submit"
   value="REGISTER"></td>
</tr>
 </table>
</form>
 </fieldset>
</div>



  <div class="boxthree" style="background-color:orange; border:solid 2px orange;border-radius: 10px; width:73.5%; height:40px; margin-left:13%; margin-top:15px" >
    <marquee behavior="alternate" direction="right" loop="1" style="margin-right:38%" align="center"><h6 style="line-height:1px;">COPY RIGHT @ 2022 ||ADAM AGHZAF|| <a href="#">SMAIL</SMAll></a></h6></marquee>


  </div>

 </body>
</html>
