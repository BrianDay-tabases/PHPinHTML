<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
        <h1>Test PHP</h1>
<?php
/*******************************************
*  part 1 How it works
*******************************************/
//How to create a regular expression
/*
$pattern = '/Harris/';
$author = 'Ray Harris';
$editor = 'Joel Murach';

$author_match = preg_match($pattern, $author);
//echo $author_match;

$editor_match = preg_match($pattern, $editor);   
//echo $editor_match;

$pattern = '/murach/i';
$editor_match = preg_match($pattern, $editor);   
echo $editor_match;
*/

/*******************************************
*  part 2 Product Code
*******************************************/
/*
$string = 'The product code is MBT-3891.';

$return = preg_match('/^MBT-[[:digit:]]{4}/', $string);
if($return)
	echo "match!";
else
	echo "not match!";
*/
/****************************************************
*  part 3 validate phone, credit card 
*  zip code, and Dates
*****************************************************/

//Phone numbers as: 999-999-9999
$phone = '(859)-442-1105';
$pattern = '/^\([[:digit:]]{3}\)-[[:digit:]]{3}-[[:digit:]]{4}$/';
$returnValue = preg_match($pattern,$phone);
//echo $returnValue;

//Credit card numbers as: 9999-9999-9999-9999
$myCard = '2345-8593-0978-2865';
$pattern1 = '/^[[:digit:]]{4}(-[[:digit:]]{4}){3}$/';
$returnValue = preg_match($pattern1,$myCard);
//echo $returnValue;

$myZip = '41011-7869';
$pattern2 = '/^[[:digit:]]{5}(-[[:digit:]]{4})?$/';
$returnValue = preg_match($pattern2,$myZip);
//echo $returnValue;

//Dates as: mm/dd/yyyy
$myDate = '2/14/2016';
$pattern3 = '/^(0?[1-9]|1[0-2])\/(0?[1-9]|[12][[:digit:]]|3[01])\/[[:digit:]]{4}$/';
$returnValue = preg_match($pattern3,$myDate);
echo $returnValue;

?>
   </main>
</body>
</html>