<form action="" class="bg-white min-h-[400px] w-1/2 max-md:h-auto max-md:w-2/3 max-sm:w-full max-sm:h-[98%] max-sm:m-2 shadow-lg flex flex-col p-4 gap-2">
    <div class="flex flex-col py-4">
        <h1 class="text-xl font-medium">Continent Informations</h1>
        <p class="text-gray-400 text-sm">Fill the inputs with a Valid data to create a new record in your Database</p>
    </div>

    <div class="flex-grow flex flex-col text-sm gap-1 mb-4">
        <label for="continent-name" class="text-gray-600">Continent name</label>
        <input name="continent-name" id="continent-name" type="text" class="bg-gray-100 p-1" placeholder="eg: Africa, Europe...">
        <p id="continent-name-errMssg" class="text-red-600 bg-red-50 px-1 text-sm">This field is Required...</p>
    </div>

    <div class="flex gap-1 flex-wrap-reverse">
        <button class="bg-white border border-black px-4">Close and Cancel</button>
        <button class="bg-black text-white px-8">Create</button>
    </div>
</form>