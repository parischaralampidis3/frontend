<?php require("partials/head.php") ?>

<?php require("partials/navigation.php") ?>

<?php require("partials/banner.php")?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <li>
                  <?= $notes['body'] ?>
            </li>   
            <a href="/notes" class="text-blue-500 hover:underline">Go back</a>
          
        
    </div>
  </main>
<?php require("partials/footer.php") ?>