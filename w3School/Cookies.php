<?php

// 1. Set a cookie
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

// 2. Update the cookie (new value)
$updated_value = "Jane Doe";
setcookie($cookie_name, $updated_value, time() + (86400 * 30), "/");

// 3. Delete the cookie (expiration in past)
// setcookie($cookie_name, "", time() - 3600, "/"); // uncomment to delete

// 4. Set a test cookie to check if cookies are enabled
setcookie("test_cookie", "test", time() + 3600, "/");

?>

<?php
// Retrieve cookie value (from current request)
if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name] . "<br>";
} else {
    echo "Cookie '" . $cookie_name . "' is not set!<br>";
}

// Check if cookies are enabled
if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.<br>";
} else {
    echo "Cookies are disabled.<br>";
}
?>
