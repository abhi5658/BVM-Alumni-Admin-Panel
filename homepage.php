<?php
   include('session.php');
?>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
img {
    display: block;
    margin: auto;
    max-height: 200px;
    }
h1 {
  /*margin: 1em 0 0.5em 0;*/
  font-weight: 600;
  /*padding-left: 50px;*/
  font-family: 'Titillium Web', sans-serif;
  /*position: relative;  */
  font-size: 36px;
  line-height: 40px;
  padding: 15px 15px 15px 15px;
  color: #000000;
  box-shadow: 
    inset 0 0 0 1px rgba(0,0,0,0.4), 
    inset 0 0 5px rgba(0,0,0, 0.5),
    inset -285px 0 35px white;
  border-radius: 0 10px 0 10px;
  background: #fff url(../images/bartoszkosowski.jpg) no-repeat center left;
}

</style>
</head>
<body>
<?php
include('header.php');
?>
<div align="center">
<h1 align="center">BVM Alumni Admin Panel</h1>
<h2>Designed And Developed By</h2>
<img src="new_logo_cyecoders_black.png" alt="Cyecoders">
</div>
</body>
</html>
