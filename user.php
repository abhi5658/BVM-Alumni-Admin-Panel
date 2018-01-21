<!DOCTYPE html>
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
</style>
</head>
<body>
<ul>
  <li><a href="homepage.html">Home</a></li>
  <li><a href="user.php">Registered User</a></li>
  <li><a href="pending.php">Pending Registration</a></li>
  <li><a href="addNews.html">Add News</a></li>
  <li><a href="addNotification.html">Add Notification</a></li>
  <li><a href="updateNews.php">Update News</a></li>
  <li><a href="updateNotification.php">Update Notification</a></li>
</ul>
<?php
	include('RegisteredUsers.php');
	?>
</body>
</html>