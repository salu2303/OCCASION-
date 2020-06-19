<html>
<head>
	<title>Admin Home</title>
        <style>
            body{
                background-color: aqua;
                color:whitesmoke;
            }
            h1{
                color: black;
            }
        </style>
</head>
<body>
<center><h1>ADMIN</h1></center>
	<p align="right">
             <button type="button" name="home" value="HOME" onclick="window.location='logout.php'"><img src="e.jpg" height="50" width="50"></br>LOGOUT</button>
         </p>
         <p align="center">
             <button type="button" name="adde" value="ADDEVENT" onclick="window.location='addeven.php'"><img src="e.jpg" height="50" width="50"></br>ADD EVENT</button>
          <button type="button" name="dele" value="DELETEEVENT" onclick="window.location='deleven.php'"><img src="e.jpg" height="50" width="50"></br>DELETE EVENT</button>
          <a href="answer.php"></a>
          
         </p>
         <p align="center">
          <button type="button" name="addm" value="ADDMANAGER" onclick="window.location='signupm.php'"><img src="e.jpg" height="50" width="50"></br>ADD MANAGER</button>
         
          <button type="button" name="delete"  onclick="window.location='adelete.php'"><img src="e.jpg" height="50" width="50"></br>DELETE MANAGER</button>
          <button type="button" name="viewmanager" value="VIEWMANAGER" onclick="window.location='viewmanager.php'"><img src="e.jpg" height="50" width="50"></br>VIEW MANAGER</button>
         </p>
          <p align="center">
        
          <button type="button" name="viewque" value="VIEW QUERY" onclick="window.location='AdminQuery.php'"><img src="e.jpg" height="50" width="50"></br>VIEW QUERY</button>
          <button type="button" name="viewfeed" value="VIEW FEEDBACK" onclick="window.location='vfeed.php'"><img src="e.jpg" height="50" width="50"></br>VIEW FEEDBACK</button>
          
            </p>
        </p>
	</body>
</html>