<html>

<head>
    <title>OOP in PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="text-align: center;">
    <?php
        class Publishable {
            public $internationalCode;
            
            function getInCode() {
                return $this->internationalCode;
            }
        }
    
        class Book extends Publishable{
            public $title;
            var $author; // note: (var === public)
            private $pages;
            
            function getpages() {
                return $this->pages;
            }
            
            function setpages($p) {
                $this->pages = $p;
            }
            
//            function __construct() {
//                echo "<br>New Book created!<br>";
//            }
//            
//            function __construct($name) {
//                $this->title = $name;
//            }
            
            function __construct($t, $a, $p) {
                $this->title = $t;
                $this->author = $a;
                $this->pages = $p;
                $this->internationalCode = rand(1000000000, 9999999999);
                echo "<br>New Book created!<br>";
            }
            
            function isHard2Read() {
                if($this->pages > 350) {
                    return true;
                } else {
                    return false;
                }
            }
        }
    
        $book1 = new Book("", "", "");
        $book1->title = "Harry Potter";
        $book1->author = "JK Rowling";
        $book1->setpages(400);
        echo "<b>Internation Code: </b>".$book1->getInCode();
    
        
        echo "<hr>Book #1 title: ".$book1->title."<hr>";
        if($book1->isHard2Read()) {
            echo "Hard to read! <br>";
        } else {
            echo "Easy to Read! <br>";
        }

    
        $book2 = new Book("The Lord of The Rings", "J. R. R. Tolkien", 800);
    
        echo "<hr>Book #2 title: ".$book2->title."<hr>";

        if($book2->isHard2Read()) {
            echo "Hard to read! <br>";
        } else {
            echo "Easy to Read! <br>";
        }
    
        echo "<b>Internation Code: </b>".$book2->getInCode();
    ?>
</body>

</html>
