<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <div class="container" style="margin-top:200px;width:300px;">
            <form action="includes/login.inc.php" method="post">
                <div class="form-group">
                    <h1>Ebuhlanti RMS</h1>
                </div>
                <div class="form-group">
                    <input required type="text" name="logInUid" class="form-control" id="logInUid" placeholder="enter username / email" required>
                    
                </div>
                <div class="form-group">
                    <input required type="password" name="password" class="form-control" id="password" placeholder="enter password" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control" name="login-submit" value="login" id="submit">
                </div>
            </form>
        </div>

</body>

</html>
