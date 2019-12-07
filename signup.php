<!DOCTYPE html>
<html>
    <head>
        <title>Sign up for what!?</title>
        <link href="./style.css" rel="stylesheet">
    </head>
    <body>
    <form action="./process.php" method="POST">
        <label for="username">Username</label>
        <input type="text" class="field" name="username" id="username" placeholder="chosenOne2020" />
        <br />
        <label for="emailAddr">Email Address</label>
        <input type="email" class="field" name="emailAddr" id="emailAddr" placeholder="j.doe@example.com" />
        <br />
        <label for="firstName">First Name</label>
        <input type="text" class="field" name="firstName" id="firstName" placeholder="Jane" />
        <br />
        <label for="lastName">Last Name</label>
        <input type="text" class="field" name="lastName" id="lastName" placeholder="Doe" />
        <br />
        <label for="password">Password</label>
        <input type="password" class="field" name="password" id="password" />
        <br />
        <label for="passwordConfirmation">Confirm Password</label>
        <input type="password" class="field" name="passwordConfirmation" id="passwordConfirmation" />
        <br />
        <label for="age">Age</label>
        <select class="field" name="age" id="age">
            <?php 
                for($i = 18; $i <= 125; ++$i) 
                { ?>
                <option><?php echo $i ?></option>

            <?php } ?>
</select>

        <br />
    </form>
    </body>
</html>