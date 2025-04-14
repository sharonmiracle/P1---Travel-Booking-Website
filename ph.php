<?php   
$connection = mysqli_connect('localhost', 'root', 'book_db');
if(isset($_POST['book now']))
{
    $flying from = $_POST['flying from']
    $flying to = $_POST['flying to']
    $arrival = $_POST['arrivals']
    $leaving = $_POST['leaving']
    $adults = $_POST['adults']
    $children = $_POST['children']

    $request = " insert into book_form(flying from,	flying to,	arrival, leaving, adults, children) values('$flying_from', '$flying_to', '$arrival', '$leaving', '$adults', '$children')";

    mysqli_querry($connection,$request);

    header('location:index.html');
}
else
{
    echo 'something went wrong, plz try again';
}
?>  