<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - ecss.edu.ph</title>
    <link rel="icon" type="image/x-icon" href="./img/ecss_logo.png">
    <link rel="stylesheet" href="styles.css">
</head>
<style>
body {
    background-image: url('img/bg3blrd.png');
    margin: 0;
    font-family: Arial, sans-serif;
    background-size:cover;
	display: flex;
	justify-content: center;
	height: 100vh;
	flex-direction: column;
  }
*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
}

h2 {
	text-align: center;
	margin-bottom: 40px;
}

input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: #888;
	font-size: 18px;
	padding: 10px;
}

.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}
.close-btn {
        cursor: pointer;
        position: absolute;
        right: 20px;
        top: 20px;
        width: 30px;
        height: 30px;
        background: #222;
        color: #fff;
        font-size: 25px;
        font-weight: 600;
        line-height: 30px;
        text-align: center;
        border-radius: 50px;
    }
</style>
<body>
    <div class="content" id="content">
        <center>
        <form action="login3.php" method="post">
        <a href="main.php"><div class="close-btn">&times;</div></a>
            <h2>STUDENT LOGIN</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label>User Name</label>
            <input type="text" name="uname" placeholder="User Name">
            <br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password">
            <br>
            <button class="button" type="submit">Login</button>
        </center>
        </form>
    </div>
    <script src="script.js">
    </script>
</body>
</html>
