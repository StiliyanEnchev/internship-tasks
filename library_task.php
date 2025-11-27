<!DOCTYPE html>         
<html>
<body>

<?php

$book_library = array();
$running = true;

function add_book_library($name) {
    global $book_library;
    $book_library[] = $name;
}


function display_all_books() {
    global $book_library;
    foreach ($book_library  as $book) {
        echo $book . "\n";
    }
}

function search_book ($title) {
    global $book_library;
    foreach ($book_library as $book) {
        if ($book === $title) {
            echo "Found: $book\n";
        } else {
            echo "Not found.\n";
        }
    }
}


while ($running) {
    echo "1. Добави книга\n";
    echo "2. Покажи всички книги\n";
    echo "3. Търси книга по заглавие\n";
    echo "4. Изход\n";
    echo "Избери опция: "; 
        
    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case 1:
            $name = trim(fgets(STDIN));
            add_book_library($name);
            echo "Book was added successfully\n";
            break;
        case 2:
            display_all_books();
            break;
        case 3:
            $title = trim(fgets(STDIN));
            search_book ($title);
            break;
        case 4:
            $running = false;
            echo "Goodbye";
            break;
    }
        
}



?>


</body>
</html>