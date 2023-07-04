<?php require("partials/head.php"); ?>
<?php require("partials/navigation.php"); ?>

<?php require("partials/header.php"); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>Students page</p>    
        <ul>
            <?php foreach ($students as $student): ?>
                <li>
                    <a href="/student?id=<?= $student['id'] ?>" class="text-blue-400 hover:underline"> 
                        <?= $student['firstname'] .  $student['lastname'] . $student['email'] ?>
                    </a>
                </li>          
            <?php endforeach; ?>
          <?php  var_dump($student['id'])?>
         
        </ul>
    </div>

</main>

<?php require("partials/footer.php") ?>
