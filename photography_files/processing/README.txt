To process new pictures, place them in the toBeProcessed directory. Next, 
run the processing script from terminal:

	php -q processImages.php

This will create thumbnails and move 
the finished products to the correct directories. The files you placed the 
toBeProcessed directory will be moved to the "processed" directory. Additionally,
a text file is created in the photography_files directory with the suffix 
"_caption.txt" Place any text you'd like to appear in the caption in this text file;
for example, credit the photographer.
