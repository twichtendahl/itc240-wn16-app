<?php
//customer_list.php
//A list and view of customers table in database
?>

<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>

<?php

$sql = "select * from test_Coffees";

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
if (mysqli_num_rows($result) > 0)//at least one record!
{//show results
    echo '<p>Note: prices listed for 1lb whole bean roast coffee. For information regarding discounts for large orders, please contact us.</p>';
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "<p>";
        echo '<a href="coffee_view.php?id=' . $row['id'] . '">' . $row['Name'] . '</a><br/>';
        echo "Origin: <b>" . $row['Origin'] . "</b><br>";
        echo "Price: <b>$" . $row['Price'] . "</b><br>";
        echo "</p>";
    }
}else{//no records
    echo '<div align="center">What! No coffee?  There must be a mistake!!</div>';
}

@mysqli_free_result($result); #releases web server memory
@mysqli_close($iConn); #close connection to database

?>
	
<?php include 'includes/footer.php';?>