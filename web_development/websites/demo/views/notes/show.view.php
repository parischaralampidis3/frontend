<?php require base_path("views/partials/head.php") ?>

<?php require base_path("views/partials/navigation.php") ?>

<?php require base_path("views/partials/banner.php")?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <li>
                  <?= htmlspecialchars( $note['body'] ) ?>
            </li>   
            <a href="/notes" class="text-blue-500 hover:underline">Go back</a>   
    </div>
  </main>
<?php require base_path("views/partials/footer.php") ?>