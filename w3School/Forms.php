<?php
// Define variables and set empty values
$name = $email = $website = $comment = "";
$nameErr = $emailErr = $websiteErr = "";

// If form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // --- NAME (Required) ---
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }

    // --- EMAIL (Required + must be valid) ---
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = htmlspecialchars($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // --- WEBSITE (Optional + URL check) ---
    if (!empty($_POST["website"])) {
        $website = htmlspecialchars($_POST["website"]);
        if (!filter_var($website, FILTER_VALIDATE_URL)) {
            $websiteErr = "Invalid URL";
        }
    }

    // --- COMMENT (Optional) ---
    if (!empty($_POST["comment"])) {
        $comment = htmlspecialchars($_POST["comment"]);
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>PHP ALL-IN-ONE Form Example</h2>
<p><span style="color:red;">* required</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <span style="color:red;">* <?php echo $nameErr; ?></span>
    <br><br>

    E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
    <span style="color:red;">* <?php echo $emailErr; ?></span>
    <br><br>

    Website: <input type="text" name="website" value="<?php echo $website; ?>">
    <span style="color:red;"><?php echo $websiteErr; ?></span>
    <br><br>

    Comment: <br>
    <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
    <br><br>

    <input type="submit" value="Submit">
</form>

<hr>

<?php
// Only show results if no errors AND form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && $nameErr == "" && $emailErr == "" && $websiteErr == "") {
    echo "<h2>Form Complete:</h2>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Website: $website <br>";
    echo "Comment: $comment <br>";
}
?>

</body>
</html>
