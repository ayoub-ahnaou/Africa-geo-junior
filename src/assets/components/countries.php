<section class="w-4/5">
    <?php
        $sql = "SELECT id_pays, pays.nom as nom, population, langues, continent.nom as continent FROM pays, continent where pays.id_continent = continent.id_continent ORDER by id_pays ASC";
        $result = mysqli_query($conn, $sql);
    ?>
    
    <h1 class="p-6 text-2xl">Countries</h1>
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
            <tbody></tbody>
        </table>
    </div>
</section>