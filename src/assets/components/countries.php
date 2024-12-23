<section id="countries" class="w-4/5 max-md:w-full hidden">
    <?php
        $sql = "SELECT id_pays, pays.nom as nom, population, langues, continent.nom as continent FROM pays, continent where pays.id_continent = continent.id_continent ORDER by id_pays ASC";
        $result = mysqli_query($conn, $sql);
    ?>
    
    <div class="p-4 flex justify-between items-center">
        <h1 class="text-2xl">Countries</h1>
        <!-- <div id="add-country-button" class="flex items-center gap-1 cursor-pointer hover:bg-gray-100 p-2 px-4 rounded-md"> -->
        <a href="../../src/cruds/dashboard/create-countries.php" class="flex items-center gap-1 cursor-pointer hover:bg-gray-100 p-2 px-4 rounded-md">
            <span>Add New Country</span>
            <img src="../assets/images/icons/add-record.svg" class="size-4" alt="">
        </a>
        <!-- </div> -->
    </div>
    <div class="relative overflow-auto max-h-[70vh]">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-6 py-3">
                        pays ID
                    </th>
                    <th class="px-6 py-3">
                        Name
                    </th>
                    <th class="px-6 py-3">
                        Poplation
                    </th>
                    <th class="px-6 py-3">
                        langues
                    </th>
                    <th class="px-6 py-3">
                        continent
                    </th>
                    <th class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr class='odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700'>";
                            echo "<th class='px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white'>".$row["id_pays"]."</th>";
                            echo "<td class='px-6 py-2'>".$row["nom"]."</td>";
                            echo "<td class='px-6 py-2'>".$row["population"]."</td>";
                            echo "<td class='px-6 py-2'>".$row["langues"]."</td>";
                            echo "<td class='px-6 py-2'>".$row["continent"]."</td>";
                            echo "<td class='px-6 py-2 flex gap-2'>
                                    <a href='../../src/cruds/dashboard/update-country.php?id=$row[id_pays]' class='font-medium text-blue-600 dark:text-blue-500 hover:underline'>Edit</a>
                                    <a href='../../src/cruds/delete-country.php?id=$row[id_pays]' class='font-medium text-red-600 dark:text-red-500 hover:underline'>Delete</a>
                                </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<p class='text-red-600 bg-red-50 px-2'>No Continent is find</p>";
                    }
                ?>
    
            </tbody>
        </table>
    </div>
</section>