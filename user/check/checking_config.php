<head>
  <script>
    setTimeout(function(){
       window.location.href = '../motherboard.php';
    }, 2500);
</script>
  <style media="screen">
  @import url(https://fonts.googleapis.com/css?family=Montserrat);
body {
position: relative;
width: 100%;
height: 100vh;
font-family: Montserrat;
}

.wrap {
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}

.text {
color: #317eac;
display: inline-block;
margin-left: 5px;
}

.bounceball {
position: relative;
display: inline-block;
height: 37px;
width: 15px;
}
.bounceball:before {
position: absolute;
content: "";
display: block;
top: 0;
width: 15px;
height: 15px;
border-radius: 50%;
background-color: #317eac;
transform-origin: 50%;
-webkit-animation: bounce 500ms alternate infinite ease;
        animation: bounce 500ms alternate infinite ease;
}

@-webkit-keyframes bounce {
0% {
  top: 30px;
  height: 5px;
  border-radius: 60px 60px 20px 20px;
  transform: scaleX(2);
}
35% {
  height: 15px;
  border-radius: 50%;
  transform: scaleX(1);
}
100% {
  top: 0;
}
}

@keyframes bounce {
0% {
  top: 30px;
  height: 5px;
  border-radius: 60px 60px 20px 20px;
  transform: scaleX(2);
}
35% {
  height: 15px;
  border-radius: 50%;
  transform: scaleX(1);
}
100% {
  top: 0;
}
}
  </style>
</head>
<div class="wrap">
  <div class="loading"><center>
    <div class="bounceball"></div><br><br>
    <div class="text">LOADING OUR MOTHERBOARD COLLECTION.</div><br><br>
    <div class="text">Choosing Best Motherboard gives Max Performance.</div>
  </center>
  </div>
</div>
