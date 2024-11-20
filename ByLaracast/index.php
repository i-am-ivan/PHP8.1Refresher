<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="styles.css">

        <title> Demo </title>
    </head>

    <body>

        <?php
            # Variables
            ## Strings
            $greetings = "Welcome";
            $name = "Dark Matter";

            ## Boolean
            $read = true;

            ## Arrays
            $books = [
                        [
                            "Title" => "Hands-On Fullstack Web: Angular and Laravel 5",
                            "Authors" => "Fernando Monteiro",
                            "Publisher" => "Packt Publisher",
                            "Published" => "Jul 2018"
                        ],
                        [
                             "Title" => "JavaScript Cookbook",
                             "Authors" =>
                                [
                                    "Adam D. Scott",
                                    "Matthew MacDonald",
                                    "Shelley Powers"
                                ],
                             "Publisher" => "O'Reilly Media",
                             "Published" => "Jul 2021"

                        ],
                        [
                             "Title" => "Modern PHP",
                             "Authors" => "Josh Lockhart",
                             "Publisher" => "O'Reilly Media",
                             "Published" => "Feb 2015"
                        ],
                        [
                             "Title" => "Core Java v1: Fundamentals 13th Edition",
                             "Authors" => "Cay S. Horstmann",
                             "Publisher" => "Addison-Wesley",
                             "Published" => "Oct 2024"
                        ]
                    ];
            # Functions
            function filterByPublishers($books){ # Assign Variables to work with
                # All books by a publisher
                $filteredBooks = [];

                # Get all books by specific publisher
                foreach($books as $book){
                    # Check authors
                    if($book['Publisher'] == "O'Reilly Media"){
                        $filteredBooks[] = $book;
                    }
                }

                return $filteredBooks;
            }

            # echo "<h1> $greetings!</h1> 1.1"; # Pass variable + concatenation
        ?>

        <h1>
            <?php echo "$greetings! $name"; ?>
        </h1>

        <p>
            You've read it? <?php
                            # Conditionals
                                if($read === true)
                                    { echo "Yes"; }
                                else
                                    { echo "Nope"; }
                            ?>.
        </p>

        <h3> What of the following list:</h3>

        <ul>
            <?php
                foreach(filterByPublishers($books) as $book) : # Array loop over
                # Adding conditional
            ?>

                       <li>
                           <?= $book['Title'] . ", " . $book['Published']; # Short 'echo' tags ?>
                       </li>

            <?php endforeach; ?>
        </ul>

    </body>

</html>