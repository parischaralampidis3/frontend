<?php require("partials/head.php"); ?>
<?php require("partials/navigation.php"); ?>
<main>


    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-12">
        <!-- Your content -->
        <div>
            <h3 class="text-lg mt-5 font-bold">Συμπληρώστε τα στοιχεία στη φόρμα.</h3>
        </div>
        <div class="flex justify-center mt-5">
            <form class="w-3/5 mt-5" method="post">

                <div class="grid grid-cols-1 gap-4">
                    <div>
                        <label class="font-bold" for="firstname" class="block"><span class="text-red-300">*</span>Όνομα:</label>
                        <input type="text" name="firstname" id="firstname" value="" class="w-full" />
                        <?php if (isset($errors['firstname'])): ?>
                            <p class="text-red-300 text-sm">
                                <?= $errors['firstname'] ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label class="font-bold" for="lastname" class="block"><span class="text-red-300">*</span>Επώνυμο:</label>
                        <input type="text" name="lastname" id="lastname" value="" class="w-full" />
                        <?php if (isset($errors['lastname'])): ?>
                            <p class="text-red-300 text-sm" >
                                <?= $errors['lastname'] ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label class="font-bold" for="email" class="block"><span class="text-red-300">*</span>Email:</label>
                        <input type="email" name="email" id="email" value="" required class="w-full" />
                        <?php if (isset($errors['email'])): ?>
                            <p class="text-red-300 text-sm">
                                <?= $errors['email'] ?>
                            </p>
                        <?php endif; ?>

                    </div>
                    <div>
                        <label class="font-bold" for="city" class="block">Πόλη:</label>
                        <input type="text" name="city" id="city" value=""  class="w-full" />
                    </div>
                    <div>
                        <label class="font-bold" for="phone_number" class="block"><span class="text-red-300">*</span>Κινητό τηλέφωνο:</label>
                        <input type="text" name="phone_number" id="phone_number" required value="" class="w-full" />

                    </div>
                
                    <div>
                        <h1 class="font-bold">Φύλο:</h1>
                        <div class="border-solid border-2 border-sky-500 rounded-md w-1/3 p-5 mt-2">
                                <input type="radio" id="male" name="sex" value="Άνδρας" required/>
                                <label for="male">Άνδρας</label>
                        
                                <input class="mx-5" type="radio" id="female" name="sex" value="Γυναίκα" />
                                <label for="male">Γυναίκα</label>
                            
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4">
                            Υποβολή
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</main>



<!--modal form submitting functionality -->

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($errors['firstname']) && !isset($errors['lastname']) && !isset($errors['email'])) {
        require("views/layouts/modals/modal-submit.php");
    }

}
?>
<script>
    const navigation = document.querySelector('.navigation');
    const btnClose = document.querySelector('.btn-close');
    btnClose.addEventListener('click', function () {
        // Hide the modal when the close button is clicked
        modal.classList.add('hidden');

        // Show the navigation bar
        navigation.style.display = 'block';
    });

</script>

<?php require("partials/footer.php"); ?>