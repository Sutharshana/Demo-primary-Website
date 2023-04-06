<?php
	session_start();
	if(!$_SESSION['auth']){
		#echo "Unauthorised user";
		header('location: index.html');
	}

?>

<html>
<html>
<head>
	<title>Amrita</title>
	<link rel = "icon" href ="https://amrita.edu/wp-content/uploads/2019/05/amrita-new-favicon.ico" type = "image/x-icon">
</head>
<body>
    <div class = "nav_menu">
        <a href = "#">Home</a>
        <a href = "logout.php" align="left">LogOut</a>
    </div>
    <br>
    <html>
    <body>
    <h1>Sales Projection</h1>
    <form method="POST" align="center">
        <input type="file" name="myfile" id="myfile">
        <br>
        <label for="time"><h2><b>Time Period</b></h2></label>
		    <br>
		    <select id="opt" name="opt" required>
			    <option value="">Select any option</option>
			    <option value="Days">Days</option>
			    <option value="Week">Week</option>
			    <option value="Month">Month</option>
			    <option value="Year">Year</option>
            </select>
            <br>
            <label for="num"><h2><b>Number of Periods</b></h2></label>
				<br>
				<input type="text" placeholder="Enter Number of Periods" name="num" id="num" required pattern="[0-9]+{3,}">
				<br>
            <br>
			<button type="submit" name="submit" value="submit">Submit</button>
        </form>
    </body>
    
    </center>
    <style>
        .nav_menu {
            overflow: hidden;
            border-radius: 10px;
            background-color:purple;
        }
        .nav_menu a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            border-radius: 10px;
        }
        .nav_menu a:hover {
            background-color: yellow;
            border-radius: 10px;
            color: black;
        }
        button:hover {
            background-color: yellow;
            border-radius: 10px;
            color: black;
        }
        input[type=file]{
          background-color: rgb(210, 77, 243);
          border: none;
          color: rgb(0, 0, 0);
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 20px;
          margin: 4px 2px;
          cursor: pointer;
          border-radius: 10px;
        }
        input[type=text], input[type=password], input[type=tel], input[type=date],input[type=email],option,select {
			width: 50%;
			padding: 15px;
			margin: 15px;
			display: inline-block;
			border: none;
			background: #f1f1f1;
			border-radius: 10px;
		}

		input[type=text]:focus, input[type=password]:focus, input[type=tel]:focus, input[type=date]:focus, input[type=email]:focus {
			background-color: #ddd;
			outline: none;
		}
        button{
			background-color: #df38d1;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			border-radius: 15px;
			text-align: center;
		}
        html { 
			background: url(https://wallpapertag.com/wallpaper/full/3/4/4/138389-plain-black-wallpaper-1920x1200-pictures.jpg) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
            border-radius: 10px;
            padding: 60px;
		}
        h1,h2{
            color: beige;
        }
      </style>
      <script>
        var days = document.querySelector("#days");
        days.addEventListener('invalid', () => {
            if(days.value === "") {
                alert('Please Select Days');
            }
            });
        var week = document.querySelector("#week");
        week.addEventListener('invalid', () => {
            if(week.value === "") {
                alert('Please Select Week');
            }
            });
        
        var month = document.querySelector("#month");
        month.addEventListener('invalid', () => {
            if(month.value === "") {
                alert('Please Select Month');
            }
            });
            
        var year = document.querySelector("#year");
        year.addEventListener('invalid', () => {
            if(month.value === "") {
                alert('Please Select Year');
            }
            });
        
      </script>
</body>
</html>