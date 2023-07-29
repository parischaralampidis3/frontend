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
                        <label class="font-bold" for="firstname" class="block"><span
                                class="text-red-300">*</span>Όνομα:</label>
                        <input type="text" name="firstname" id="firstname" value="" class="w-full" />
                        <?php if (isset($errors['firstname'])): ?>
                            <p class="text-red-300 text-sm">
                                <?= $errors['firstname'] ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label class="font-bold" for="lastname" class="block"><span
                                class="text-red-300">*</span>Επώνυμο:</label>
                        <input type="text" name="lastname" id="lastname" value="" class="w-full" />
                        <?php if (isset($errors['lastname'])): ?>
                            <p class="text-red-300 text-sm">
                                <?= $errors['lastname'] ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label class="font-bold" for="email" class="block"><span
                                class="text-red-300">*</span>Email:</label>
                        <input type="email" name="email" id="email" value=""  class="w-full" />
                        <?php if (isset($errors['email'])): ?>
                            <p class="text-red-300 text-sm">
                                <?= $errors['email'] ?>
                            </p>
                        <?php endif; ?>
                    </div>
    
                    <div>
                        <label class="font-bold" for="city" class="block">Πόλη:</label>
                        <input type="text" name="city" id="city" value="" class="w-full" />
                    </div>
                 <div class="flex">
                      <div class="flex flex-col">
                            <label class="font-bold" for="address" class="block">Διεύθυνση:</label>
                            <input type="text" name="address" id="address" value="">
                               <?php if (isset($errors['address'])): ?>
                                     <p class="text-red-300 text-sm"><?= $errors['address'] ?></p>
                                <?php endif; ?>     
                        </div>
                        <div class="flex flex-col mx-5">
                            <label class="font-bold" for="postal_code" class="block">Ταχυδρομικός κώδικας:</label>
                            <input class="mt-0" type="text" name="postal_code" id="postal_code" value=""/>
                               <?php if (isset($errors['postal_code'])): ?>
                                    <p class="text-red-300 text-sm"><?= $errors['postal_code'] ?></p>
                                <?php endif; ?>
                        </div>
                    </div>
                    <div>
                        <label class="font-bold" for="phone_number" class="block"><span
                                class="text-red-300">*</span>Κινητό τηλέφωνο:</label>
                        <input type="text" name="phone_number" id="phone_number" value="" class="w-full" />
                        <?php if (isset($errors['phone_number'])): ?>
                            <p class="text-red-300 text-sm">
                                <?= $errors['phone_number'] ?>
                            </p>
                        <?php endif; ?>
                    </div>

                    <div>
                        <div class="flex mb-5">
                            <div class="flex flex-col">
                                <h1 class="font-bold">Φύλο:</h1>
                                <div class=" w-full border-solid border-2 border-sky-500 rounded-md w-1/3 p-5 mt-2">
                                    <input type="radio" id="male" name="sex" value="Άνδρας" required />
                                    <label for="male">Άνδρας</label>

                                    <input class="mx-5" type="radio" id="female" name="sex" value="Γυναίκα" />
                                    <label for="female">Γυναίκα</label>

                                </div>
                            </div>
                         
                           
                    </div> 
                    
                    
                     <div class="flex flex-col mt-1 mx-0 mb-5">
                                    <label for="birthdate" class="font-bold">Ημερομηνία Γέννησης</label>
                                 <input class="p-3 mt-4" type="text" id="birthdate" name="birthdate" value="<?php echo  date("d/m/Y"); ?>" placeholder="eg. 16/10/1984" /> 
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
    if (!isset($errors['firstname']) && !isset($errors['lastname']) && !isset($errors['email']) && !isset($errors['phone_number'])) {
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