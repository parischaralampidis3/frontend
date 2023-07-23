<?php require("partials/head.php"); ?>
<?php require("partials/navigation.php"); ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <?php
        $heading = [
            "Όνομα: ",
            "Επώνυμο: ",
            "Email: ",
            "Πολη/Περιοχή:",
            "Αριθμός Τηλεφώνου: ",
            "Φύλo: ",
            "Ημερομηνία Γέννησης"
        ];

        $headingStyle = [
            "font-weight:bold;
           "
        ]
            ?>

        <?php foreach ($students as $student): ?>
            <div class="pt-5 h-2/4">
                <div class="flex flex-col">
                    <a href="/student" class="">
                        <div class="flex justify-center shadow-lg bg-white hover:bg-gray-200 hover:text-gray-600">
                                <div
                                    class="text-gray-800  text-lg p-5">
                                    <?=
                                        '<span style="' . $headingStyle[0] . '">' . $heading[0] . '</span>' . "      " . "   " .$student['firstname'] . "<br>" .
                                        '<span style="' . $headingStyle[0] . '">' . $heading[1] . '</span>' . "      " ."     ". $student['lastname'] . "<br>" .
                                        '<span style="' . $headingStyle[0] . '">' . $heading[5] . '</span>' . "      " . "    ".$student['sex'] . "<br>" ;
                    
                                    ?>
                            
                                </div>   
                                <div   class="text-gray-800 text-lg ml-3 p-5">     
                                <?= 
                                        '<span style="' . $headingStyle[0] . '">' . $heading[2] . '</span>' . "    " . $student['email'] . "<br>" .
                                        '<span style="' . $headingStyle[0] . '">' . $heading[3] . '</span>' . "    " . $student['city'] . "<br>" .
                                        '<span style="' . $headingStyle[0] . '">' . $heading[4] . '</span>' . "    " . $student['phone_number'] . "<br>".
                                        '<span style="' . $headingStyle[0] . '">' . $heading[6] . '</span>' . "    " . date('d-m-Y', strtotime($student['birthdate']))  . "<br>";
                                    ?>
                                </div>
                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

</main>

<?php require("partials/footer.php") ?>