<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <style>
            .bgImage{
                background-image: url(images/background2.jpg);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
        </style>
    </head>
    <body class="bgImage">
        <?php include 'navbar.php'; ?>
        <div class="container" style="margin-top: 50px;">
            <div class="col-md-6 col-md-offset-3">
                <h2>Login of Doctor</h2>
            </div>

            <form action="#" method="post">

                <div class="form-group col-md-6 col-md-offset-3">
                    <label for="username">Username:</label>
                    <input id="username" name="username" class="form-control" type="text"
                           placeholder="Doctor's username"
                           style="margin-top: 0px;" required="required"/>
                </div>


                <div class="form-group col-md-6 col-md-offset-3">
                    <label for="password">Password:</label>
                    <input id="password" name="password" class="form-control" type="password"
                           placeholder="Password"
                           style="margin-top: 0px;" required="required"/>
                </div>
                
                <!-- Button -->
                <div class="form-group col-md-6 col-md-offset-3">
                    <button id="" type="submit" class="btn btn-primary col-md-12">Save</button>
                </div>

            </form>

        </div>

    </body>
</html>