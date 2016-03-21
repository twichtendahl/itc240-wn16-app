<?php
//customer_view.php
//A list and view of customers table in database
include 'includes/config.php';
include 'includes/header.php';
if(isset($_GET['id']) && (int)$_GET['id'] > 0) { // Show data
    $id = (int)$_GET['id'];
} else { // Go away now
    header('Location:customer_list.php');
}

$sql = "select * from test_Customers where CustomerID=$id";

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
if (mysqli_num_rows($result) > 0)//at least one record!
{//show results
    while ($row = mysqli_fetch_assoc($result))
    {
        echo '<img src="upload/customer' . $id . '.jpg" />';
    }
}else{//no records
    echo '<div align="center">What! No customers?  There must be a mistake!!</div>';
}

@mysqli_free_result($result); #releases web server memory
@mysqli_close($iConn); #close connection to database

?>
	
<?php include 'includes/footer.php';?>