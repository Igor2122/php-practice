<?php 

//     $today = date('l');
    
//     //$today = 'blah'; // here we test if for the false as it is not a day of the week
//     $today = 'Saturday'; // here we test if for the false as it is not a day of the week
    
//     switch ($today) {
//   case "Monday":
//       echo "Wash on Monday";
//       break;
//   case "Tuesday":
//       echo "Iron on Tuesday";
//       break;
//   case "Wednesday":
//       echo "Mend on Wednesday";
//       break;
//   case "Thursday":
//       echo "Churn on Thursday";
//       break;
//   case "Friday":
//       echo "Clean on Friday";
//       break;
//   case "Saturday":
//       echo "enjoy the wetather";
//   case "Sunday":
//       echo "Rest on Sunday";
//       break;
//   default:
//       echo "I don't know what day it is";
//       break;
// }




//Available roles: admin, editor, author, subscriber
if (!isset($role)) {
    $role = 'subscriber';
}

//change to switch statement
switch($role) {
  case admin:
    echo 'As an admin, you can add, edit, or delete any post.';
       break;
  default:
    echo "You do not have access to this page. Please contact your administrator.";
}



// set up time zone 

date_default_timezone_get('UAE/Dubai');



$timeStamp = mktime(10,14,54,9,10,1981);

//echo $timeStamp;

echo date('m/d/Y', $timeStamp);

?>