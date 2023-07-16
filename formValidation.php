<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- PHP starts from here -->
    <?php
    $uName = '';
    $uNameError = '';

    $uEmail = '';
    $uEmailError = '';

    $uUserName = '';
    $uUserNameError = '';

    $uGender = '';
    $uGenderError = '';

    $uHobbies = array();
    $uHobbiesError = '';

    $uPassword = '';
    $uPasswordError = '';

    $uRePassword = '';
    $uRePasswordError = '';

    if (isset($_POST['uSingUp'])) {
        // Name validation
        if (empty($_POST['uName'])) {
            $uNameError = "Please enter your name";
        } else {
            $uName = $_POST['uName'];
            echo "Name: $uName<br>";
        }

        // Email validation
        if (empty($_POST['uEmail'])) {
            $uEmailError = 'Please enter your email';
        } else {
            $uEmail = $_POST['uEmail'];
            echo "Email: $uEmail<br>";
        }

        // User Name validation
        if (empty($_POST['uUserName'])) {
            $uUserNameError = 'Please enter your username';
        } else {
            $uUserName = $_POST['uUserName'];

            if (strlen($uUserName) < 8) {
                $uUserNameError = 'Username should have more than 8 characters';
            } else {
                echo "Username: $uUserName<br>";
            }
        }

        // Gender validation
        if (empty($_POST['uGender'])) {
            $uGenderError = 'Please select your gender';
        } else {
            $uGender = $_POST['uGender'];
            echo "Gender: $uGender<br>";
        }

        // Hobbies validation 
        if (empty($_POST['uHobbies'])) {
            $uHobbiesError = 'Please select your hobbies';
        } else {
            $uHobbies = $_POST['uHobbies'];
            if (count($uHobbies) < 2) {
                $uHobbiesError = 'Please select at least two hobbies';
            } else {
                echo "User Hobbies: " . implode(", ", $uHobbies) . "<br>";
            }
        }

        // Password validation 
        if (empty($_POST['uPassword'])) {
            $uPasswordError = "Please enter your password";
        } else {
            $uPassword = $_POST['uPassword'];
            if (strlen($uPassword) < 8) {
                $uPasswordError = "Password must have more than 8 characters";
            }
        }

        // Re-enter password validation 
        if (empty($_POST['uRePassword'])) {
            $uRePasswordError = "Please re-enter your password";
        } else {
            $uRePassword = $_POST['uRePassword'];
            if ($uRePassword !== $uPassword) {
                $uRePasswordError = "Both passwords must be the same";
            } else {
                echo "Password: $uRePassword<br>";
            }
        }

        //Cars brand selection validation 
    
        $uCars = ['Honda', 'Toyota', 'Tata', 'Ford', 'Kia'];

        $uCar = [];
        
        $uCarError = '' ;

        if(empty($_POST['uCar'])){
            $uCarError = 'please select the car brand';
        }
        else{
            $uCar = $_POST['uCar'];
            echo  "Car Brand: " . implode(", ", $uCar);
        }

        
    }
    ?>
    <!-- PHP ends here -->


    <!-- Form starts here -->
    <form action="Ajay_Odedara_A6.php" method="post">
        <hr>
        <!-- Name field -->
        <label>Name:</label>
        <input type="text" name="uName" value="<?= $uName ?>">
        <span style="color:red">
            <?= $uNameError ?>
        </span>
        <br>

        <!-- Email field -->
        <label>Email:</label>
        <input type="email" name="uEmail" value="<?= $uEmail ?>">
        <span style="color:red">
            <?= $uEmailError ?>
        </span>
        <br>

        <!-- Username field -->
        <label>Username:</label>
        <input type="text" name="uUserName" value="<?= $uUserName ?>">
        <span style="color:red">
            <?= $uUserNameError ?>
        </span>
        <br>

        <!-- Gender field -->
        <label>Gender:</label>
        <input type="radio" name="uGender" value="Male" <?= ($uGender === 'Male') ? 'checked' : '' ?>>Male
        <input type="radio" name="uGender" value="Female" <?= ($uGender === 'Female') ? 'checked' : '' ?>>Female
        <span style="color:red">
            <?= $uGenderError ?>
        </span>
        <br>

        <!-- Hobbies field -->
        <label>Hobbies:</label>
        <input type="checkbox" name="uHobbies[]" value="Reading" <?= (in_array("Reading", $uHobbies)) ? 'checked' : '' ?>>Reading<br>
        <input type="checkbox" name="uHobbies[]" value="Writing" <?= (in_array("Writing", $uHobbies)) ? 'checked' : '' ?>>Writing<br>
        <input type="checkbox" name="uHobbies[]" value="Coding" <?= (in_array("Coding", $uHobbies)) ? 'checked' : '' ?>>Coding<br>
        <input type="checkbox" name="uHobbies[]" value="Fighting" <?= (in_array("Fighting", $uHobbies)) ? 'checked' : '' ?>>Fighting<br>
        <input type="checkbox" name="uHobbies[]" value="Talking" <?= (in_array("Talking", $uHobbies)) ? 'checked' : '' ?>>Talking<br>
        <span style="color:red">
            <?= $uHobbiesError ?>
        </span>
        <br>

        <!-- Password field -->
        <label>Password:</label>
        <input type="password" name="uPassword" value="<?= $uPassword ?>">
        <span style="color:red">
            <?= $uPasswordError ?>
        </span>
        <br>

        <!-- RePassword field -->
        <label>Re-enter password:</label>
        <input type="password" name="uRePassword" value="<?= $uRePassword ?>">
        <span style="color:red">
            <?= $uRePasswordError ?>
        </span>
        <br>

        <!-- Cars field -->
        <label>Cars:</label>
        <select name="uCar[]" id="dropdown">
            <?php
            foreach ($uCars as $car) {
                echo "<option value='" . $car . "'" . (in_array($car, $uCar) ? ' selected' : '') . ">" . $car . "</option>";
            }
            ?>
        </select>

        <!-- Submit button -->
        <input type="submit" value="Sign Up" name="uSingUp">
    </form>
    <!-- Form ends here -->
</body>

</html>
