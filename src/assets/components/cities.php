<section id="cities" class="w-4/5 hidden">
    <?php
    $sql = "SELECT id_ville, ville.nom as nom, type, pays.nom as country, continent.nom as continent FROM ville, pays, continent where ville.id_pays = pays.id_pays and pays.id_continent = continent.id_continent";
    $result = mysqli_query($conn, $sql);

    ?>

    <h1 class="p-6 text-2xl">Cites</h1>
    <div class="relative overflow-auto h-[70vh]">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 bg-red-200">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-6 py-3">
                        ville ID
                    </th>
                    <th class="px-6 py-3">
                        Name
                    </th>
                    <th class="px-6 py-3">
                        type
                    </th>
                    <th class="px-6 py-3">
                        country
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
                            echo "<th class='px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white'>".$row["id_ville"]."</th>";
                            echo "<td class='px-6 py-2'>".$row["nom"]."</td>";
                            echo "<td class='px-6 py-2'>".$row["type"]."</td>";
                            echo "<td class='px-6 py-2'>".$row["country"]."</td>";
                            echo "<td class='px-6 py-2'>".$row["continent"]."</td>";
                            echo "<td class='px-6 py-2 flex gap-2'>
                                    <a href='#' class='font-medium text-blue-600 dark:text-blue-500 hover:underline'>Edit</a>
                                    <a href='#' class='font-medium text-red-600 dark:text-red-500 hover:underline'>Delete</a>
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