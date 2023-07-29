<?php require("partials/head.php"); ?>
<?php require("partials/navigation.php"); ?>



<main>

    <div class="border w-full ">
        <div class="container">
            <div class="flex">

                        <div class="w-1/4">
                            <?php require("partials/sidebar.php"); ?>
                        </div>

                        <div>

                 

                        <div class="flex flex-col items-center justify-center mx-12  mt-5 mb-5 w-full">

                        <div>
                            <h1 class="font-bold text-center text-3xl mt-12 mb-5 text-red-400">
                                Καρτέλα Μαθητή
                            </h1>
                        </div>


                            <div class="flex flex-col">

                                <div class="border rounded shadow-lg  bg-gray-100 p-5">

                                    <div class="flex text-lg">
                                        <h3 class="font-bold">
                                            Όνομα:
                                        </h3>
                                        <p class="mb-6 mx-4">
                                            <?= htmlspecialchars($student['firstname']) ?>
                                        </p>
                                    </div>


                                    <div class="flex text-lg">
                                        <h3 class="font-bold">
                                            Επώνυμο:
                                        </h3>
                                        <p class="mb-6 mx-4">
                                            <?= htmlspecialchars($student['lastname']) ?>
                                        </p>
                                    </div>

                                    <div class="flex text-lg">
                                        <h3 class="font-bold">
                                            Email:
                                        </h3>
                                        <p class="mb-6 mx-4">
                                            <?= htmlspecialchars($student['email']) ?>
                                        </p>
                                    </div>


                                    <div class="flex text-lg">
                                        <h3 class="font-bold">
                                            Αριθμός Τηλεφώνου:
                                        </h3>
                                        <p class="mb-6 mx-4">
                                            <?= htmlspecialchars($student['phone_number']) ?>
                                        </p>
                                    </div>

                                    <div class="flex text-lg mt-5">
                                        <h3 class="font-bold">
                                            Ημερομηνία Γέννησης:
                                        </h3>
                                        <p class="mb-6 mx-4">
                                            <?= htmlspecialchars(date('d/m/Y', strtotime($student['birthdate']))) ?>
                                        </p>
                                    </div>

                                    <div class="flex text-lg">
                                        <h3 class="font-bold">
                                            Φύλο:
                                        </h3>
                                        <p class="mb-6 mx-4">
                                            <?= htmlspecialchars($student['sex']) ?>
                                        </p>
                                    </div>


                                    <div class="flex text-lg ">
                                        <h3 class="font-bold">
                                            Πόλη:
                                        </h3>
                                        <p class="mb-6 mx-4">
                                            <?= htmlspecialchars($student['city']) ?>
                                        </p>
                                    </div>

                                    <div class="flex text-lg ">
                                        <h3 class="font-bold">
                                            Διεύθυνση:
                                        </h3>
                                        <p class="mb-6 mx-4">
                                            <?= htmlspecialchars($student['address']) ?>
                                        </p>
                                    </div>

                                    <div class="flex text-lg ">
                                        <h3 class="font-bold">
                                            Ταχυδρομικός Κώδικας:
                                        </h3>
                                        <p class="mb-6 mx-4">
                                            <?= htmlspecialchars($student['postal_code']) ?>
                                        </p>

                                    </div>

                                </div>
                            

                            

                            </div>
                        </div>
                    </div>

    </div>

    </div>
    </div>

</main>

<?php require("partials/footer.php"); ?>