<?php

// read file //
echo readfile();

// open file //
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");

// close file //
fclose($myfile);

/* modes for fopen() function

Modes	Description
r	Open a file for read only. File pointer starts at the beginning of the file
w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x	Creates a new file for write only. Returns FALSE and an error if file already exists
r+	Open a file for read/write. File pointer starts at the beginning of the file
w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+	Creates a new file for read/write. Returns FALSE and an error if file already exists

*/

// read a single line from a file //
echo fgets($myfile);

// check if end-of-file feof//
while(!feof($myfile)) {
    // read a single line from a file //
    echo fgets($myfile) . "<br>";
    // read a single character from a file //
    echo fgetc($myfile);
    }

// create or open a file for writing //
$myfile = fopen("testfile.txt", "w");

// write to the file //
$txt = "John Doe\n";
fwrite($myfile, $txt);

// write to the file again //
$txt = "Jane Doe\n";
fwrite($myfile, $txt);

fclose($myfile);



?>