<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="colum colum-60 colum-offset-20">
                <h2>Our First From</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At quaerat inventore possimus consectetur pariatur.</p>
            </div>
            <div>
                <p>
                <?php if(isset($_GET['fname']) && !empty($_GET['fname'])){?>
                    First Name: <?php echo $_GET['fname']; ?> <br>
                <?php }?>
                <?php if(isset($_GET['lname']) && !empty($_GET['lname'])){?>
                    Last Name: <?php echo $_GET['lname']; ?> <br>
                <?php }?>
                <?php if(isset($_GET['gmail']) && !empty($_GET['gmail'])){?>
                    Gamil: <?php echo $_GET['gmail']; ?> <br>
                <?php }?>
                <?php if(isset($_GET['password']) && !empty($_GET['password'])){?>
                    password: <?php echo $_GET['password']; ?> 
                <?php }?>
                    <br>

                </p>
            </div>
        </div>
        <div class="row">
            <div class="colum ">
                <form method="GET">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">
                    <br>
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">
                    <br>
                    <label for="gmail">Gamil</label>
                    <input type="text" name="gmail" id="gmail">
                    <br>
                    <label for="password">password</label>
                    <input type="text" name="password" id="password">
                    <br>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>