<?php require base_path("views/partials/head.php") ?>

<?php require base_path("views/partials/navigation.php") ?>

<?php require base_path("views/partials/banner.php")?>
  <main>
    <div class="mx-auto max-w-7xl py-6 mt-8 sm:px-6 lg:px-8">
    
       
      
  <form method="POST">
   
        <label for="body">Description</label> 
        <div>
            <textarea name="body" id="body" rows=11 cols=50 maxlength=250><?= $_POST['body'] ?? '' ?></textarea>
        
          <div class="mt-4 text-red-400 text-xs">
          <?php if (isset($errors['body'])) : ?>
            <p><?= $errors['body'];  ?></p>
          <?php endif; ?>
          </div>

        </div>
        <p>
          <button class="mt-4 bg-blue-500 p-5 text-white bordered py-4" type="submit">create</button>
        </p>
  </form>

</div>
      
      </div>
  </main>
<?php require base_path("views/partials/footer.php") ?>