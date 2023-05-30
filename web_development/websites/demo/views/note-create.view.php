<?php require("partials/head.php") ?>

<?php require("partials/navigation.php") ?>

<?php require("partials/banner.php")?>
  <main>
    <div class="mx-auto max-w-7xl py-6 mt-8 sm:px-6 lg:px-8">
    
       
      
  <form method="POST">
   
        <label for="body">Description</label> 
        <div>
            <textarea id="body" name="body"></textarea>
        </div>
        <p>
          <button type="submit">create</button>
        </p>
  </form>

</div>
      
      </div>
  </main>
<?php require("partials/footer.php") ?>