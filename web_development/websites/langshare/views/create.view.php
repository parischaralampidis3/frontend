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
                        <label class="font-bold" for="firstname" class="block">Όνομα:</label>
                        <input type="text" name="firstname" id="firstname" value="" required class="w-full"/>
                    </div>
                    <div>
                        <label class="font-bold" for="lastname" class="block">Επώνυμο:</label>
                        <input type="text" name="lastname" id="lastname" value="" required class="w-full"/>
                    </div>
                    <div>
                        <label class="font-bold" for="email" class="block">Email:</label>
                        <input type="email" name="email" id="email" value="" required class="w-full"/>
                    </div>
                    <div>
                        <label class="font-bold" for="city" class="block">Πόλη:</label>
                        <input type="text" name="city" id="city" value="" class="w-full"/>
                    </div>
                    <div>
                        <label class="font-bold" for="phone_number" class="block">Κινητό τηλέφωνο:</label>
                        <input type="text" name="phone_number" id="phone_number" value="" class="w-full"/>
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4">
                         Υποβολή
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

<?php require("partials/footer.php"); ?>