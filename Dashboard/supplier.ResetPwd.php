<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="assets/images/Logo1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/dashboardStyle.css" />
    <title>Herb Lanka Admin Dashboard</title>
</head>

<body>

<div class="register">
    <div class="container">
        <div class="form-head">
            Reset Your Password
        </div>
        <form class="registrationForm" action="">
            <div class="reform-control">
                <label class="re-label" for="">Username</label>
                <input class="re-input" type="text" placeholder="" id="username">
            </div>
            <div class="reform-control">
                <label class="re-label" for="password">Password</label>
                <input class="re-input" type="text" placeholder="" id="username">
            </div>
            <div class="reform-control">
                <label class="re-label" for="password"> Conform Password</label>
                <input class="re-input" type="text" placeholder="" id="username">
            </div>
            <div class="reform-control">
                <button class="resubmit-btn">Submit</button>
            </div>
         
         
        </form>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>
