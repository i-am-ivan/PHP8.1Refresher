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
                "Religious",
                "Politics",
                "Fantasy",
                "Fiction",
                "Songs"
            ];

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
            <?php foreach($books as $book) : ?>

                       <li> <?= $book; # Short 'echo' tags ?> </li>

            <?php endforeach; ?>
        </ul>

    </body>

</html>