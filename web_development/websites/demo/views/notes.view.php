<?php require("partials/head.php") ?>

<?php require("partials/navigation.php") ?>

<?php require("partials/banner.php")?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php foreach($notes as $note) : ?>
          <li><?= $note['body'] ?></li>
        <?php endforeach; ?>
    </div>
  </main>
<?php require("partials/footer.php") ?>