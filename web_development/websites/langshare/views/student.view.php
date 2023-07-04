
<?php require("partials/head.php"); ?>
<?php require("partials/navigation.php"); ?>

<?php require("partials/header.php"); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>Student page</p>    
               
                <p class="mb-6">
                    <a href="/students">
                        Go back
                    </a>
                </p>


                <p class="mb-6">              
                        <?= $student['firstname'] .  $student['lastname'] . $student['email'] ?>
                </p>

              <!--  <?=  var_dump($students) ?>-->
                
          
        </ul>
    </div>

</main>

