<?php
    # Error Reporting
    // Enable all error reporting to help with debugging
    error_reporting(E_ALL);
    // Display errors on the screen
    ini_set('display_errors', 1);

    # Variables
    ## String
    // Set the title of the page
    $title = "Learning PHP Zero to Pro";
    // Set the main content of the page
    $content = "Main content for this page here";
    // Set the footer text
    define('FOOTER', "&copy " . date("Y") . ". This is created by PHP");
    //
    $x = 6491;

    ## Arrays
    // Define a multidimensional array for the table of contents
    $tableOfContents = [
        "Chapters" => 
            [
                // First chapter
                [
                    "Titles" => "Data Types",
                    "Subheadings" => [
                        "Integers",
                        "Fronting-Point Numbers",
                        "Strings",
                        "Booleans",
                        "Arrays",
                        "Objects",
                        "Resources",
                        "Callbacks",
                        "NULL"
                    ]
                ],
                // Second chapter
                [
                    "Titles" => "Variables",
                    "Subheadings" => [
                        "Variables Variables",
                        "Variable References",
                        "Variable Scope",
                        "Garbage Collection"
                    ]
                ],
                [
                    "Titles" => "Expressions and Operators",
                    "Subheadings" => [
                        "Number of Operands",
                    ]
                ]
            ]
    ];

    # Functions
    function layeredHeadings($subheadings, $level = 1){
        # To keep track of each chapter counter globally
        static $counter = 1;

        foreach($subheadings as $subheading){
            if(is_array($subheading)){
                # If subheading has subheadings, recursively call the function
                layeredHeadings($subheading, $level + 1);
            } else {
                #
                echo "<h" . ($level + 1) . ">" . $counter . ". " . $subheading . "</h" . ($level + 1) . ">";
                $counter++;
            }
        }
        return $counter;
    }

?>

<!DOCTYPE html>

<html lang="en">

    <head>

        <title>
            <?= $title; ?>
        </title>

        <!-- Link to external stylesheet -->
        <link rel="stylesheet" href="../assets/css/style.css">

        <!-- Set character encoding -->
        <meta charset="UTF-8">

        <!-- Set page description -->
        <meta name="description" content="Basic HTML Page">

    </head>

    <body>

        <header>
            
            <?php 
                #
                $headingLevel = 0;
                while ($headingLevel < COUNT($tableOfContents)) {
                    $headingLevel++;
                }

                // Loop through the table of contents array
                foreach ($tableOfContents["Chapters"] as $chapter):  
                    
                    
            ?>

            <h1>
                <?= "Chapter {$headingLevel} - " . $chapter["Titles"]; ?>
            </h1>

            <!-- Iterate each Chapter to iterate subheadings corresponding to the Chapter title Above -->
            <?php 
                # Call the function to iterate through the ToC array
                layeredHeadings($chapter["Subheadings"]);
            ?>

            <?php endforeach; ?>

        </header>

        <section class="">

            <h1> Data Types </h1>

            <p>
                <?php

                    echo is_int($x) ? "Yes, \$x($x) is an typeof($x).\n" : "No, \$x($x) is an typeof($x).\n";
                ?>
            </p>

        </section>

        <footer>
            <p>
                <?= FOOTER; ?>
            </p>
        </footer>

    </body>
</html>