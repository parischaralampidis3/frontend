<!DOCTYPE html>
<html>
    <head>
        <title>demo</title>
    </head>
    <body>
        <?php
        
            $books = [
                "sidarta",
                "woodpeker",
                "amanda"
                ]; 
  
        ?>
        <ul>
            <?php foreach ($books as $book) : ?>   
                        <li><?=  $book ?></li>
            <?php endforeach; ?>
        </ul>

    </body>
</html>





















