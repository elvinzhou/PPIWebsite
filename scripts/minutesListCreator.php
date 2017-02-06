<?php

/** Directory where documents are saved */
$docDir = 'docs/minutes/';

$docs = scandir($docDir);

$lastYear = 0;
$firstRow = true;
foreach ($docs as $doc){
    // Check to see if the document is a PDF with the correct PPI prefix
    $isADoc = (substr_compare($doc, 'pdf', -3) === 0) &&
            (substr_compare($doc, 'PPI', 0));
    
    if($isADoc){
        // Parse the file name to get the date
        $name = substr($doc, 4, strlen($doc) - 8);
        $splitName = explode('_', $name);
        $year = $splitName[0];
        
        if($year !== $lastYear){
            if(!$firstRow){
                print("</div>");
            }
            // Start a Row
            print "<h3>$year</h3>";
            print "<div class='centeredBoxColumns'>";
            $firstRow = false;
            $lastYear = $year;
        }
        // There should be three pieces: yyyy_mm_dd
        if(count($splitName) === 3){
            $month = getMonthName($splitName[1]);
            print "<div class='button' style='width: 150px;'>";
            print "$month $splitName[2]";
            print "<a class='divLink' href='$docDir/$doc' target='blank'><span></span></a>";
            print "</div>";
        }
    }
}

print("</div>");

function getMonthName($number){
    switch($number){
        case 1: return "January";
        case 2: return "February";
        case 3: return "March";
        case 4: return "April";
        case 5: return "May";
        case 6: return "June";
        case 7: return "July";
        case 8: return "August";
        case 9: return "September";
        case 10: return "October";
        case 11: return "November";
        case 12: return "December";
        default: return "????";
    }
}