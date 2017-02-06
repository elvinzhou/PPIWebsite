<?php

    /*
     * Run this script in the command line by typing:
     * 
     *  php -f prcoessImages.php
     * 
     * You need to have php5-cli and php5-gd installed
     * 
     */

    // *** Include the class
    include("resize-class.php");
    
    //Where to save the thumbnails
    $thumbDir = "../";
    $finishedDir = "processed/";
    
    // Location of full-size images; can put more than one string in array
    $dirs = array("toBeProcessed/");
    
    
    // Scan through all listed dirs
    foreach ($dirs as $dir){
        // Get all photos in this directory
        $photos = scandir($dir);
        //Make sure the length of the name is at least 5 charachters
        
        foreach ($photos as $photo){
            if(strlen($photo) >= 5){

                //Check to see if the extension is an acceptable image extension
                $isAPhoto = (substr_compare($photo, 'png', -3) === 0) ||
                    (substr_compare($photo, 'jpg', -3) === 0) ||
                    (substr_compare($photo, 'JPG', -3) === 0);

                // Find the main file; it won't have one of the thumbnail endings
                $isMain = (strpos($photo, '_t.') === False) &&
                        (strpos($photo, '_m.') === False) && 
                        (strpos($photo, '_n.') === False) &&
                        (strpos($photo, '_e.') === False) &&
                        (strpos($photo, '_z.') === False) &&
                        (strpos($photo, '_c.') === False) &&
                        (strpos($photo, '_b.') === False);
            
                if($isAPhoto && $isMain){
                    echo "Making thumbnails for " . $photo . "\n";
                    $noExtension = substr($photo, 0, strlen($photo) - 4);
                    
                    // Initialize / load image
                    $tinyThumb = new resize($dir . "/" . $photo);

                    // Resize the image (options: exact, portrait, landscape, auto, crop)
                    // Portrait sets the height and then adjusts width to 
                    // maintain aspect ratio
                    // Auto trims to the longest side
                    $tinyThumb -> resizeImage(100,100,'auto');

                    // Save image
                    $name = substr($photo, 0, strlen($photo) - 4);
                    $tinyThumb -> saveImage($thumbDir . $name . "_t.jpg", 100);
                    
                    // Now make the other sizes
                    $smallThumb = new resize($dir . "/" . $photo);
                    $smallThumb ->resizeImage(240, 240, 'auto');
                    $smallThumb -> saveImage($thumbDir . $name . "_m.jpg", 100);
                    
                    $small2Thumb = new resize($dir . "/" . $photo);
                    $small2Thumb ->resizeImage(320, 320, 'auto');
                    $small2Thumb -> saveImage($thumbDir . $name . "_n.jpg", 100);
                    
                    $medThumb = new resize($dir . "/" . $photo);
                    $medThumb ->resizeImage(500, 500, 'auto');
                    $medThumb -> saveImage($thumbDir . $name . "_e.jpg", 100);
                    
                    $med2Thumb = new resize($dir . "/" . $photo);
                    $med2Thumb ->resizeImage(640, 640, 'auto');
                    $med2Thumb -> saveImage($thumbDir . $name . "_z.jpg", 100);
                    
                    $med3Thumb = new resize($dir . "/" . $photo);
                    $med3Thumb ->resizeImage(800, 800, 'auto');
                    $med3Thumb -> saveImage($thumbDir . $name . "_c.jpg", 100);
                    
                    $largeThumb = new resize($dir . "/" . $photo);
                    $largeThumb ->resizeImage(1024, 1024, 'auto');
                    $largeThumb -> saveImage($thumbDir . $name . "_b.jpg", 100);
                    
                    $output_cpPic = shell_exec("cp $dir$photo $finishedDir 2>&1");
                    foreach(explode("\n", $output_cpPic) as $line){
                        echo $line . "\n";
                    }
                    
                    $capFile = $noExtension.'_caption.txt';
                    if(!file_exists("$thumbDir$capFile")){
                        $output_mkFile = shell_exec("echo 'caption' > $thumbDir$capFile");
                        foreach(explode("\n", $output_mkFile) as $line){
                            echo $line . "\n";
                        }
                    }
                    // Last step, move full-res image to thumbDir
                    $output_mvPic = shell_exec("mv $dir$photo $thumbDir 2>&1");
                    foreach(explode("\n", $output_mvPic) as $line){
                        echo $line . "\n";
                    }
                }
            }
        }
    }
    
    echo "All done!\n";
?>
