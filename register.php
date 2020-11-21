<?php
if (!isset($_POST['submit'])) {


  $con=mysqli_connect("localhost","root","","bulid") or die("connection moonchi");

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
  <script type="text/javascript">

  function getdistrict(val) {
  	$.ajax({
  	method: "POST",
  	url: "get_district.php",
  	data:'state_id='+val,
  	success: function(data){
  		$("#district-list").html(data);
  	}
  	});
  }

  function name1() {


  var namee=document.forms["regform"]["user"];
  	var letters = /^[A-Za-z\s]+$/;
    if(namee.value == "")
    {
      document.getElementById('name').innerHTML="<span class='error'>Please enter a valid name</span>"

      namee.focus();
      return false;
    }
      if(namee.value.match(letters))
    {
         document.regform.address.focus();
         document.getElementById('name').innerHTML="<span ></span>"
         return true;
    }

    else
    {
      document.getElementById('name').innerHTML="<span class='error'>Please enter a valid name</span>"
      namee.focus();
      return false;
    }
  }
    function addresss() {
      var add=document.forms["regform"]["address"];
      if(add.value == "")
      {
        document.getElementById('addr').innerHTML="<span class='error'>Please enter a valid address</span>"
        add.focus();
      }
      else
      {
        document.getElementById('addr').innerHTML="<span ></span>"

      }

    }

    function EMail()
    {
        var emai=document.forms["regform"]["email"];
      var mail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z]+(?:\.[a-zA-Z]{2,})*$/;
      if(emai.value == "")
      {
        document.getElementById('maile').innerHTML="<span class='error'>Please enter a email</span>"
        emai.focus();
      }

      if(emai.value.match(mail))
      {
        document.getElementById('maile').innerHTML="<span ></span>";
        // document.regform.ph.focus();
        return true;
      }

      else
      {
        document.getElementById('maile').innerHTML="<span class='error'>Please enter a valid email</span>";
        emai.focus();
        return false;
      }
    }

    function phone()
    {
      var phone = document.forms["regform"]["ph"];
      var phn = /^\(?([6-9]{2})\)?([0-9]{8})$/;

      if(phone.value == "")
      {
        document.getElementById('p4').innerHTML="<span class='error'>Please enter a valid phone</span>";
        phone.focus();
        return false;
      }

      if(phone.value.match(phn))
      {
          document.getElementById('p4').innerHTML="<span></span>";
        document.regform.user1.focus();
        return true;
      }

      else
      {
          document.getElementById('p4').innerHTML="<span class='error'>Please enter a valid phone number</span>";
        phone.focus();
        return false;

      }
    }

    function userw()
    {
        var name =  document.forms["regform"]["user1"];
        var regex = /^[0-9a-zA-Z]+$/;
      if(name.value == "")
      {
          document.getElementById('u').innerHTML="<span class='error'>Please enter a username</span>"
        name.focus();
      }
      if(name.value.match(regex))
      {
          document.getElementById('u').innerHTML="<span class='error'></span>"
        document.regform.pass.focus();
        return true;
      }

      else
      {
          document.getElementById('u').innerHTML="<span class='error'>Please enter a valid usernamer</span>";
        name.focus();
        return false;
      }
    }
    function checkee() {
      var username = document.getElementById('nu').value;
            if (!username) return;
            console.log("WORKING user TILL HERE");
            var ajax = new XMLHttpRequest();
            ajax.onreadystatechange = function(){
              if (this.readyState == 4 && this.status == 200 ){
                console.log(this.response); //helps SEE WHATS GOING ON in the php file;
                if(this.response=='TRUE'){
                    document.getElementById('u').innerHTML="Username taken";
                    document.getElementById('nu').value="";
                    document.forms["regform"]["user1"].focus();
                }
              }
            }
            ajax.open("GET", "check.php?username="+username, true);
            ajax.send();

}
function che() {
  var email = document.getElementById('em').value;
        if (!email) return;
        console.log("WORKING EMAIL TILL HERE");
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function(){
          if (this.readyState == 4 && this.status == 200 ){
            console.log(this.response); //helps SEE WHATS GOING ON in the php file;
            if(this.response=='TRUE'){
                document.getElementById('maile').innerHTML="Email is taken once";
                document.getElementById('em').value="";
                document.forms["regform"]["email"].focus();
            }
            else {
              document.regform.ph.focus();
            }

          }
        }
        ajax.open("GET", "checke.php?email="+email, true);
        ajax.send();

}
    function passe2()
    {
        var paswd = document.forms["regform"]["pass"];
      var cpaswd = document.forms["regform"]["rpass"];

      if(paswd.value == "")
      {
        document.getElementById('j').innerHTML="<span class='error'>Please enter a password</span>";
        cpaswd.focus();
      }
      if(cpaswd.value == "")
      {
        document.getElementById('j').innerHTML="<span class='error'>Please enter a password</span>";
        cpaswd.focus();
      }
      if(paswd.value != cpaswd.value)
      {
          document.getElementById('j').innerHTML="<span class='error'>password doesn't match</span>";
        cpaswd.focus();
        return false;
      }
      else
      {
        document.getElementById('j').innerHTML="<span></span>";
        document.getElementById('j').innerHTML="<span></span>";

        return true;
      }
    }


</script>
  <style media="screen">

  body
  {
color: white;
    background-image: url('slide2.jpg');

    background-repeat: no-repeat;
    background-size: 100%;

  }
  .p{
    background-color: rgba(0, 0, 0, 0.2);

  }
  h6{
    color:white;
  }

  </style>
    <link rel="stylesheet" href="css/BOOT.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
</head>

<body>
  <div class="p ">
    <div class="container col-sm-12 col-md-6 ">

<form  method="post"action="" name="regform" style="padding:75px; "class="form-group-sm container">

<h3 style="color:white;padding-left:250px;">New User</h3>
<br>
<input type="text"class="form-control" name="user" required placeholder="Name"  onblur="name1()"><br>
<span id='name'></span>
<br>
<textarea name="address" rows="8" cols="80"class="form-control" required onblur="addresss()" placeholder="Address"></textarea><br>
<span id='addr'></span>
<br>
<h6 style="padding-right:900px; color:white;">Gender:</h6>
Male</h6> <input type="radio" name="gender" value="M" checked>
Female </h6><input type="radio" name="gender" value="F"><br>
<br>

<select onChange="getdistrict(this.value);"  name="state" id="state" class="form-control" >
<option value="">Select State Name</option>
<?php $query =mysqli_query($con,"SELECT * FROM state");
while($row=mysqli_fetch_array($query))
{ ?>
<option value="<?php echo $row['StCode'];?>"><?php echo $row['StateName'];?></option>
<?php
}
?>
</select>
<br>
<select name="district" id="district-list" class="form-control">
<option value="">Select</option>
</select>
<br>
<br>
<input type="email" name="email" id="em" required onblur="EMail(); che()"class="form-control  form-group" value=""placeholder="E-mail">
<span id='maile'></span>
<br>
<input type="text"required name="ph" onblur="phone()"class="form-control  form-group"value=""placeholder=" Phone Number">
<span id='p4'></span>
<br>
<input type="text" name="user1" onblur="userw();checkee()" id="nu"required class="form-control  form-group" placeholder="Username">
<span id='u'></span>
<br>
<input type="password"class="form-control  form-group" name="pass" required placeholder="Password">
<span id='j'></span>
<br>
<input type="password"class="form-control  form-group" name="rpass"required onblur="passe2()" placeholder="Conform Password"><br>
<span id ='p2'></span>
<br>
<input type="checkbox"required name="cheb"> <h6 style="color:white;">I accepts to the terms and conditions.<br>

<br><input type="submit" class="btn btn-success" name="submit" value="Submit" >
<input type="reset" class="btn btn-danger" value="Reset"><br>
<br>



</form>
</center>
  </div>
</div>
</body>

</html><?php
} else {
  $name=$_POST['user'];
  $address=$_POST['address'];
  $gender=$_POST['gender'];
  $state=$_POST['state'];
  $district=$_POST['district'];
  $email=$_POST['email'];
  $phone=$_POST['ph'];
  $username=$_POST['user1'];
  $password=$_POST['pass'];
  $password=md5($password);

  $main="select * from logintable where loginid='$username'";
  $sql1="insert into logintable(loginid,password,usertype)values('$username','$password','user')";
  echo $sql1;

  $con=mysqli_connect("localhost","root","","bulid");
   $result=mysqli_query($con,$main);
   $n=mysqli_num_rows($result);
   // echo($n)
  
   if($n==0){
    // echo("username is taken");
    mysqli_query($con,$sql1);
    $sql="insert into user_login(name,address,gender,state,district,email,phone,loginid)values('$name','$address','$gender','$state','$district','$email','$phone','$username')";

    echo "$sql";
    mysqli_query($con,$sql) or die("query moonchi"); // but I think this is working fine;
    mysqli_close($con);
    header('Location: login.php');
   }
   else header('location:register.php');

} ?>
