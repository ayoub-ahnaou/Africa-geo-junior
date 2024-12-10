<section class="w-4/5">
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
        </table>
    </div>
</section>