<form action="" class="bg-white min-h-[400px] w-1/2 max-md:h-auto max-lg:w-3/5 max-md:w-4/5 max-sm:w-full max-sm:h-[98%] max-sm:m-2 shadow-lg flex flex-col p-4 gap-2">
    <div class="flex flex-col py-4">
        <h1 class="text-xl font-medium">City Informations</h1>
        <p class="text-gray-400 text-sm">Fill the inputs with a Valid data to create a new record in your Database</p>
    </div>

    <div class="flex-grow flex flex-col text-sm gap-1 mb-4">
        <label for="city-name" class="text-gray-600">City name</label>
        <input name="city-name" id="city-name" type="text" class="bg-gray-100 p-1" placeholder="eg: Meknes, Fes...">
        <!-- <p id="city-name-errMssg" class="text-red-600 bg-red-50 px-1 text-sm">This field is Required...</p> -->
        
        <label for="city-type" class="text-gray-600">City Type</label>
        <select name="city-type" id="city-type">
            <option value="" selected disabled>Select a Type</option>
            <option value="Capital">Capital</option>
            <option value="Important">Important</option>
            <option value="Normal">Normal</option>
        </select>
        <!-- <p id="city-type-errMssg" class="text-red-600 bg-red-50 px-1 text-sm">This field is Required...</p> -->
    </div>

    <div class="flex gap-1 flex-wrap-reverse">
        <input id="cancel_add_city" type="reset" class="bg-white cursor-pointer border border-black px-4" value="Cancel and CLose" />
        <input type="submit" class="bg-black text-white cursor-pointer px-8" value="Create"/>
    </div>
</form>

<?php 

?>