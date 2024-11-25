<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-hover table-stripped">
                <thead>
                    <th>Category Id</th>
                    <th>Category Name</th>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM categories";
                    $res = mysqli_query($con, $query);
                    while ($data = mysqli_fetch_assoc($res)) {
                        ?>
                        <tr>
                            <td><?php echo $data['category_id']; ?></td>
                            <td><?php echo $data['category_title']; ?></td>
                        </tr>
                        <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>