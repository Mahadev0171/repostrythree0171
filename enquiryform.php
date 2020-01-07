<?php
$name = $_POST['name'];
$email    =  $_POST['email'];
$phone    =  $_POST['phone'];
$size    =  $_POST['size'];
$shape    =  $_POST['shape'];
$quantity    =  $_POST['quantity'];
$product    =  $_POST['product'];
$message = $_POST['message'];
$sub = "enquiry from website";
$size2    =  $_POST['size2'];
$shape2    =  $_POST['shape2'];
$quantity2    =  $_POST['quantity2'];
$product2    =  $_POST['product2'];
$size3    =  $_POST['size3'];
$shape3    =  $_POST['shape3'];
$quantity3    =  $_POST['quantity3'];
$product3    =  $_POST['product3'];

if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("E-mail address not valid");
}
$greeting = "Hello!
This form has been submitted by:

Name: $name

E-mail: $email

Phone: $phone

Product: $product

Quantity: $quantity;

Size: $size;

Shape: $shape;

Message: $message

while (!empty($product2))
{
Product 2: $product2;

Quantity: $quantity2;

Size: $size2;

Shape: $shape2;
}

while (!empty($product3))
{
Product 3: $product3;

Quantity: $quantity3;

Size: $size3;

Shape: $shape3;
}

";
$recipient = "mahadev.nk0171@gmail.com";
mail($recipient, $sub, $greeting);
echo "<script>alert('Your Message has been sent, Thank you!')</script>";
echo "<script>window.open('index.html','_self')</script>";
exit();
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}
function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>