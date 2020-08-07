<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    
</head>
<body>

    <div class="container">
  
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <table>
            <tr>
                <td>Name: </td>
                <td><input type="text" name='name' ></td>
            </tr>

            <tr>
                <td>Email: </td>
                <td><input type="text" name='email' required></td>
            </tr>

            <tr>
                <td>Website?php: </td>
                <td><input type="text" name='website' ></td>
            </tr>
            <tr>
                <td>Message: </td>
                <td><textarea name="message" id="message" cols="30" rows="6"></textarea></td>
            </tr>
            <tr>
                <td>Gender: </td>
                <td>
                    <input type="radio" name='gender' >Female
                    <input type="radio" name='gender' >Male
                </td>
            </tr>

            <tr>
            <td></td>
            <td><input type="submit" value="Submit"></td>
            </tr>

        </table>
        </form>

<?php
$name=$email=$website=$message=$gender ="";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $website = validate($_POST['website']);
    $message = validate($_POST['message']);
    $gender = validate($_POST['gender']);

    echo "Name : " . $name . "<br/>";
    echo "Email : " . $email . "<br/>";
    echo "Website : " . $website . "<br/>";
    echo "Message : " . $message . "<br/>";
    echo "Gender : " . $gender ;
}

function validate($data){
    $samira = trim($data);
    $toasin = stripcslashes($samira);
    $jharna = htmlspecialchars($toasin);
    return $jharna;
}

?>
</div>
</body>
</html>