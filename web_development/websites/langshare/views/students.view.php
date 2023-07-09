<?php require("partials/head.php"); ?>
<?php require("partials/navigation.php"); ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        
        <?php
        $heading = [
            "Όνομα: ",
            "Επώνυμο: ",
            "Email: "
        ];

        $headingStyle = [
            "font-weight:bold;
            margin-left:20%;
           "
        ]
            ?>

        <?php foreach ($students as $student): ?>
            <div class="pt-5 h-2/4">
                <div class="flex flex-col">
                    <a href="#" class="">
                        <div class="text-gray-800 shadow-lg bg-white hover:bg-gray-200 hover:text-gray-600 text-xl border p-5">

                            <?php
                            echo
                                '<span style="' . $headingStyle[0] . '">' . $heading[0] . '</span>' . "   " . $student['firstname'] . "<br>" .
                                '<span style="' . $headingStyle[0] . '">' . $heading[1] . '</span>' . "    " . $student['lastname'] . "<br>" .
                                '<span style="' . $headingStyle[0] . '">' . $heading[2] . '</span>' . "    " . $student['email'] . "<br>";
                            ?>

                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

</main>

<?php require("partials/footer.php") ?>