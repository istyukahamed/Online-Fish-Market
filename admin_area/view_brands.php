<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-hover table-stripped">
                <thead>
                    <th>Brand Id</th>
                    <th>Brand Name</th>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM brands";
                    $res = mysqli_query($con, $query);
                    while ($data = mysqli_fetch_assoc($res)) {
                        ?>
                        <tr>
                            <td><?php echo $data['brand_id']; ?></td>
                            <td><?php echo $data['brand_title']; ?></td>
                        </tr>
                        <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>