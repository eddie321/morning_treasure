<?php
require_once 'db.php';
require_once 'manufacturers.php';
require_once 'product_category.php';
$db = db_connect();

$valid=true;


//if form submitted...
if ($_POST)
{
    // assigns table entry fields to data table categories
    $name=htmlspecialchars($_POST['name']);
    $manufacturer=htmlspecialchars($_POST['manufacturer']);
    $product_description=htmlspecialchars($_POST['product_description']);
    $price=htmlspecialchars($_POST['price']);
    $availability=!empty($_POST['availability']);
    $product_category=htmlspecialchars($_POST['product_category']);


    // error messages in case of empty field. any error result will change validity to false, and form will not be submitted.
    if (empty($_POST['name']))
    {
        $errors=['You need to fill in the product name'];
        $valid=false;
    }

    if (empty($_POST['manufacturer']))
    {
        $errors=['You need to fill in the manufacturer'];
        $valid=false;
    }

    if (empty($_POST['product_description']))
    {
        $errors=['You need to fill in the product description'];
        $valid=false;
    }

    if (empty($_POST['price']))
    {
        $errors=['You need to fill in the price'];
        $valid=false;
    }

    if (empty($_POST['availability']))
    {
        $errors=['You need to fill in the product availability (in stock?)'];
        $valid=false;
    }

    if (empty($_POST['product_category']))
    {
        $errors=['You need to fill in the product product_category'];
        $valid=false;
    }


    // if all fields are filled i.e. if form is both submitted, and is valid
    
    if ($valid)
    {
        $stmt=$db->prepare('INSERT INTO golf_gear (name, manufacturer, description, price, availability, product_category) VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->execute([$_POST['name'], $_POST['manufacturer'], $_POST['description'], $_POST['price'], $_POST['availability'], $_POST['product_category']]);
        header('Location: form.php?status=ok');
        exit();
    }
    else
    {
        foreach($errors as $error)
        {
            echo $error;
        }
    }
}

// if not $_POST - i.e. if form is not submitted
else
{
    $name=null;
    $manufacturer=0;
    $product_description=null;
    $price=0;
    $availability=0;
    $product_category_id = 0;   
}

if (isset($_GET['status']) && $_GET['status'] == 'ok') {
    echo 'please review your entry, changes can be made in edit section';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Golf Golf Golf!!!!!</title>
</head>
<body>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <h1>Movie Database</h1>
    <br>

<?php
   echo build_form('', '', '', '', '');
?>

</body>
</html>