<?php require base_path("views/partials/head.php") ?>

<?php require base_path("views/partials/navigation.php") ?>

<?php require base_path("views/partials/banner.php")?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
          
      <a href="/notes" class="text-blue-500 hover:underline">Go back</a>   

            <li>
                  <?= htmlspecialchars( $note['body'] ) ?>

                  
            </li>  

           <form class="mt-4" method='POST'>
            <input type="hidden" name="__request_method" value="DELETE">
            <input type="hidden" name="id" value="<!= $note['id']?>">
            <button class="text-sm text-red-500">Delete</button>
           </form>      

    </div>
              
            
  </main>
<?php require base_path("views/partials/footer.php") ?>