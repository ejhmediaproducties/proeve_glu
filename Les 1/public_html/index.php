<!DOCTYPE html>
<html>
<head>
    <title>Inloggen</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <script>
        function validateForm() {
            const gebruikersnaam = document.getElementById('gebruikersnaam').value;
            const wachtwoord = document.getElementById('wachtwoord').value;

            if (gebruikersnaam == "") {
                alert("Gebruikersnaam mag niet leeg zijn");
                return false;
            }

            if (wachtwoord == "") {
                alert("Wachtwoord mag niet leeg zijn");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
<div class="login-box">
<div style="width:300px; margin:auto"><img style="width:300px;" src="logo.png" /> </div>
<h2>Inloggen</h2>
<form action="login.php" method="post" onsubmit="return validateForm()">
<div class="user-box">
<input type="text" name="gebruikersnaam" id="gebruikersnaam">
<label>Gebruikersnaam</label>
</div>
<div class="user-box">
<input type="password" name="wachtwoord" id="wachtwoord">
<label>Wachtwoord</label>
</div>
<input type="submit" name="submit" value="Inloggen">
</form>
</div>
</div>
<script src="validate.js"></script>
</body>
</html>
