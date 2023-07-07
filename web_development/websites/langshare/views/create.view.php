
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-12">
        <!-- Your content -->
        <div>
            <h1 class="font-bold text-2xl mt-3">Student form</h1>
            <h3 class="text-lg">Fill your student data at the form.</h3>
        </div>
         <div class="mb-5 w-3/5">
        <form class="d-flex flex-column justify-center" action="#" method="#">
           
            <div class="container-fluid  mt-5">
            <div class="text-2xl text-red-400 text-center font-bold">
                <div class="flex flex-col inline-flex items-baseline w-2">
                    <div>
                    <label for="firstname">First Name:</label>
                        <input type="text" name="firstname" id="firstname" value="" required/>
                    </div>
                    <div class="mt-5">
                        <label for="surnmame">Surname:</label>
                        <input type="text" name="surname" id="surname" value="" required/>
                    </div>
                    <div class="mt-5">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" value="" required/>
                    </div>
                    <div class="mt-5">
                        <label for="city">City:</label>
                        <input type="text" name="city" id="city" value="">
                    </div class="mt-5">
                    <div class="mt-5">
                        <label for="phone_number">Phone number:</label>
                        <input type="text" name="phone_number" id="phone_number" value="">
                    </div>
                    <div>
                        <button class="mx-24 mt-6 bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4 ">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
            </div>

        </form>
    </div>
    </div>
</main>
