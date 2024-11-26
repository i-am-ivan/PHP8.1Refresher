<?php
    # Error Reporting
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    # Variables
    ## String
    $title = "Learning PHP Zero to Pro";
    $content = "Main content for this page here";
    $footer = "&copy 2024. This is created by PHP";

    ## Arrays
    $tableOfContents = [
                            "Chapters" => 
                                [
                                    "Titles" => "1 - Introduction to PHP",
                                    "Subheadings" => [
                                            "Incorporating PHP Within HTML",
                                            "The Structure of PHP"
                                        ]
                                ],
                                [
                                    "Titles" => "2 - ",
                                    "Subheadings" => [
                                            ""
                                        ]
                                ]
                       ];
?>

<!DOCTYPE html>

    <html lang="en">

        <head>

            <title>
                <?= $title; ?>
            </title>

            <link rel="stylesheet" href="../assets/css/style.css">

            <meta charset="UTF-8">

            <meta name="description" content="Basic HTML Page">

        </head>

        <body>

            <header>
                
                <?php 
                    foreach ($tableOfContents as $toc=> $title):
                ?>

                <h1>
                    <?= "Chapter " . $title["Titles"]; ?>
                </h1>

                <h2> 
                    <?php # Iterate each Chapter to iterate subheadings corresponding to the Chapter title Above                 
                    ?> 
                </h2>

                <h4>
                    <?php # Print the contents of each subheading under the subheading above
                    ?>
                </h4>

                <?php endforeach; ?>

            </header>

            <section class="">

                <p>
                    <?= $content; ?>
                </p>

            </section>

            <footer>
                <p>
                    <?= $footer; ?>
                </p>
            </footer>

        </body>
    </html>