<?php

//Iterate through all the files in this directory, spit out code for the slide 
//javascript slideshow
//
//The file structure needs to be as follows:
// -- for full res photos: name.jpg
// -- for captions: name_caption.txt

$dir = 'photography_files/';
$photos = scandir($dir);

foreach ($photos as $photo){
    //Make sure the length of the name is at least 5 charachters
    if(strlen($photo) >= 5){
        
        //Check to see if the extension is an acceptable image extension
        $isAPhoto = (substr_compare($photo, 'png', -3) === 0) ||
            (substr_compare($photo, 'jpg', -3) === 0) ||
            (substr_compare($photo, 'JPG', -3) === 0);
        
        if($isAPhoto){
 
            // Find the main file; it won't have one of the thumbnail endings
            $isSimple = (strpos($photo, '_t.') === False) &&
                    (strpos($photo, '_m.') === False) && 
                    (strpos($photo, '_n.') === False) &&
                    (strpos($photo, '_e.') === False) &&
                    (strpos($photo, '_z.') === False) &&
                    (strpos($photo, '_c.') === False) &&
                    (strpos($photo, '_b.') === False);
            
            if($isSimple){
                //generate the names of the various files assuming they follow 
                //the correct format
                //
                //remove the ending
                $noExtension = substr($photo, 0, strlen($photo) - 4);
                //replace underscores with spaces
                $name = str_replace('_', ' ', $noExtension);
                $slide = str_replace('.', '_slide.', $photo);
                $thumb = $noExtension . '_t.jpg';
                $captionFile = $noExtension . '_caption.txt';
                $desc = $name . ' - ';
                if(file_get_contents($dir . $captionFile) !== False){
                    $desc .= file_get_contents($dir . $captionFile);
                }
                
                //Generate code and print it out!
                $code = "<a href='photography_files/{$photo}' data-lightbox='mySet' title='{$desc}'>";
                $code .= "<img class='photo' src='photography_files/{$thumb}' alt='{$name}'>";
                $code .= "</a>";
                
                print $code;
            }
        }
    }    
}

?>
