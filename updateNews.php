<?php
   include('session.php');
?>
<html>
<head>
	<title>Registered Users</title>
<style>
ul {
    list-style-type: none;
    margin-bottom: 30 px;
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
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #000000;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>
<body>
<?php
include('header.php');
?>
<?php
	include('newstable.php');
	?>
</body>
</html>