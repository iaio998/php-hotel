<!-- HEADER -->
<?php
include __DIR__ . '/partials/header.php';

if (isset($_GET['parking'])) {
    $parking = $_GET['parking'];
    foreach ($hotels as $value) {
        if ($value['parking'] === (bool) $parking) {
            $temp_arr[] = $value;
        }
    }
    $hotels = $temp_arr;
}
;
//var_dump($hotels)
?>
<!-- MAIN -->
<main class="container">
    <table class="table">
        <thead>
            <tr>

                <th scope="col">
                    Name
                </th>
                <th scope="col">
                    Description
                </th>
                <th scope="col">
                    Parking
                </th>
                <th scope="col">
                    Vote
                </th>
                <th scope="col">
                    From center
                </th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $hotel) { ?>
                <tr>
                    <?php foreach ($hotel as $val) { ?>
                        <td>
                            <?php echo $val ?>
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</main>
<!-- FOOTER -->
<?php
include __DIR__ . '/partials/footer.php'
    ?>