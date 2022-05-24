<?php


// date to check 
$checkDay = 23;
$checkMonth = 5;
$checkYear = 2022;


// run the function to find what day of the week a given date is 
echo "<p><strong>getDayOfTheWeek()</strong></p>";
echo getDayOfTheWeek($checkYear, $checkMonth, $checkDay);


// functiont to find what day of the week a given day is
function getDayOfTheWeek($year, $month, $day)
{
    $twoDigitYear = substr($year, 2, 2);
    $twoDigitCent = substr($year, 0, 2);
    $checkTwelves = floor($twoDigitYear / 12);
    $yearRemainder = $twoDigitYear % 12;
    $foursInRemainder = floor($yearRemainder / 4);

    // codes for each month as specified in lab spec. associative array. 
    $monthCode = array(1 => 1, 2 => 4, 3 => 4, 4 => 0, 5 => 2, 6 => 5, 7 => 0, 8 => 3, 9 => 6, 10 => 1, 11 => 4, 12 => 6);

    if(strlen($month) == 2){
        $month = substr($month, 1, 1);
    };

    // determine the actual month code 
    $monthAddCode = $monthCode[$month];
    $modMonthAmt = monthMod($year, $month, $twoDigitCent);
    $monthAddCode = $monthAddCode + $modMonthAmt;

    // array of day name codes and their corresponding day names
    $dayName = array(0 => "Saturday", 1 => "Sunday", 2 => "Monday", 3 => "Tuesday", 4 => "Wednesday", 5 => "Thursday", 6 => "Friday");

    // do the math to determine the day name code number 
    $nameCode = ($checkTwelves + $yearRemainder + $foursInRemainder + $day + $monthAddCode) % 7;

    //return a string with the date and day name. 
    return "<p>" . $month . "-" . $day . "-" . $year . " is a " . $dayName[$nameCode] . "</p>";
};

// helper function to determine modifications to the month code based on leap year and/or century. returns an integer amount. 
function monthMod($year, $month, $cent)
{
    $monthChange = 0;
    if ((isLeapYear($year) == true)) {
        if (($month == 1) | ($month == 2)) {
            $monthChange = $monthChange - 1;
        };
    };

    switch ($cent) {
        case 16:
            $monthChange = $monthChange + 6;
            break;
        case 17:
            $monthChange = $monthChange + 4;
            break;
        case 18:
            $monthChange = $monthChange + 2;
            break;
        case 20:
            $monthChange = $monthChange + 6;
            break;
        case 21:
            $monthChange = $monthChange + 4;
            break;
    };
    return $monthChange;
};

// helper function to determine if a given year is a leap year. returns boolean. 
function isLeapYear($year)
{
    if (($year % 4 == 0) & !($year % 100 == 0) | ($year % 400 == 0)) {
        return true;
    };
};

// run the make calendar function 
echo "<p><strong>makeCalendar()</strong></p>";
echo makeCalendar();

function makeCalendar()
{
    $startDate = new DateTime('2021-12-31');
    for($x = 0; $x < 364; $x++){
        $date = $startDate;
        $date->modify('+1 day');
        $dateYear = $date->format('Y');
        $dateMonth = $date->format('m');
        $dateDay = $date->format('d');

        echo getDayOfTheWeek($dateYear, $dateMonth, $dateDay);
        // echo $dateMonth . "-" . $dateDay . "-" . $dateYear . "<br>"; 
    }


};
