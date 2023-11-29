<!-- HEADER -->
<?php
include __DIR__ . '/partials/header.php';

//var_dump($hotels)
?>
<!-- MAIN -->
<main class="container">
    <table class="table">
        <thead>
            <tr>
                <?php foreach ($hotels as $key => $value) { ?>
                    <th scope="col">
                        <?php echo $key ?>
                    </th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $key => $value) { ?>
                <tr>
                    <td>
                        <?php echo $value['name'] ?>
                    </td>
                    <td>
                        <?php echo $value['description'] ?>
                    </td>
                    <td>
                        <?php echo $value['parking'] ?>
                    </td>
                    <td>
                        <?php echo $value['vote'] ?>
                    </td>
                    <td>
                        <?php echo $value['distance_to_center'] . ' km' ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</main>
<!-- FOOTER -->
<?php
include __DIR__ . '/partials/footer.php'
    ?>