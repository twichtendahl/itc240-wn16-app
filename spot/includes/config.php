<?php

/*
config.php

Provides a place to put all configuration info for our app.
*/

include 'credentials.php';

define('DEBUG',true); #we want to see all errors

//THIS_PAGE is the name of the current page:
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

        /* What the navbar looks like on index.php

        <li class="active"><a href="index.php">HOME</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="daily.php">GAME OF THE DAY</a></li>
        <li><a href="credits.php">DISCLAIMER</a></li>
        <li><a data-toggle="modal" data-target="#myModal" href="#myModal"><i class="fa fa-envelope-o"></i></a></li>

        */

        //Here is the html for each nav list item that isn't highlighted
        /*$homeNavItem = '<li><a href="index.php">HOME</a></li>';
        $aboutNavItem = '<li><a href="about.php">ABOUT</a></li>';
        $dailyNavItem = '<li><a href="daily.php">GAME OF THE DAY</a></li>';
        $creditsNavItem = '<li><a href="credits.php">DISCLAIMER</a></li>';*/

        //Here's html for the highlighted page
        //$currentNavItem = '<li class="active"><a href="' . THIS_PAGE . '">' . $pageID . '</a></li>';

//Here we create an array that associates links with page IDs
$nav["index.php"] = "Home";
$nav["about.php"] = "About";
$nav["daily.php"] = "Game of the Day";
$nav["coffee_list.php"] = "Premium Coffees";
$nav["contact.php"] = "Contact Us";
$nav["credits.php"] = "Credits";

ob_start(); // prevents header errors

//Here we define a MakeLinks function to make the nav bar responsive
function makeLinks($ar) {
    $myReturn = '';
    foreach($ar as $url => $label) {
        if($url == THIS_PAGE) {
            $myReturn .= '<li class="active"><a href="' . $url . '">' . $label . '</a></li>';
        } else {
            $myReturn .= '<li><a href="' . $url . '">' . $label . '</a></li>';
        }
    }
    return $myReturn;
}
    
    
//Here we create an array that associates query selectors with versions of Daily
$dailyLinks["Mon"] = "Monday";
$dailyLinks["Tue"] = "Tuesday";
$dailyLinks["Wed"] = "Wednesday";
$dailyLinks["Thu"] = "Thursday";
$dailyLinks["Fri"] = "Friday";
$dailyLinks["Sat"] = "Saturday";
$dailyLinks["Sun"] = "Sunday";


switch(THIS_PAGE){        
    case 'index.php':
        $title = 'Home Page Title';
        $pageID = 'Home';
        break;
    case 'template.php':
        $title = 'Template Page Title';
        $pageID = 'Template Page';
        break;
    case 'about.php':
        $title = 'About Us';
        $pageID = 'About';
        break;
    case 'daily.php':
        $title = 'Video Game of the Day';
        $pageID = 'Game of the Day';
        break;
    case 'coffee_list.php':
        $title = 'Premium Coffees';
        $pageID = 'Coffees of the World';
    case 'credits.php':
        $title = 'Content Credits';
        $pageID = 'Credits';
        break;
    default:
        $title = THIS_PAGE;
        $pageID = '';
}

// Error handling function for database interaction
function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
        echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
        die();
    }
}

// Safe email wrapper function
function safeEmail($to, $subject, $message, $replyTo = '', $contentType='text')
{
    $fromAddress = "Automated Email <noreply@" . $_SERVER["SERVER_NAME"] . ">";

    if(strtolower($contentType)=='html')
    {//change to html format
        $contentType = 'Content-type: text/html; charset=iso-8859-1';
    }else{//default is text
        $contentType = 'Content-type: text/plain; charset=iso-8859-1';
    }
    
    $headers[] = "MIME-Version: 1.0";//optional but more correct
    //$headers[] = "Content-type: text/plain; charset=iso-8859-1";
    $headers[] = $contentType;
    //$headers[] = "From: Sender Name <sender@domain.com>";
    $headers[] = 'From: ' . $fromAddress;
    //$headers[] = "Bcc: JJ Chong <bcc@domain2.com>";
    
    if($replyTo != ''){//only add replyTo if passed
        //$headers[] = "Reply-To: Recipient Name <receiver@domain3.com>";
        $headers[] = 'Reply-To: ' . $replyTo;   
    }
    
    $headers[] = "Subject: {$subject}";
    $headers[] = "X-Mailer: PHP/". phpversion();
    
    //collapse all header data into a string with operating system safe
    //carriage returns - PHP_EOL
    $headers = implode(PHP_EOL,$headers);

    //use mail() command internally and pass back the feedback
    return mail($to, $subject, $message, $headers);

}//end safeEmail()

?>