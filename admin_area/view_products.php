<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-hover table-stripped">
                <thead>
                    <th>S.No</th>
                    <th>Product title</th>
                    <th>Product Description</th>
                    <th>Keyword</th>
                    <th>Category Id</th>
                    <th>Brand Id</th>
                    <th>Image 1</th>
                    <th>Image 2</th>
                    <th>Image 3</th>
                    <th>Product Price</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Price</th>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM products";
                    $res = mysqli_query($con, $query);
                    while ($data = mysqli_fetch_assoc($res)) {
                        ?>
                        <tr>
                            <td><?php echo $data['product_id']; ?></td>
                            <td><?php echo $data['product_title']; ?></td>
                            <td><?php echo $data['product_description']; ?></td>
                            <td><?php echo $data['product_keywords']; ?></td>
                            <td><?php echo $data['category_id']; ?></td>
                            <td><?php echo $data['brand_id']; ?></td>
                            <td><?php echo $data['product_image1']; ?></td>
                            <td><?php echo $data['product_image2']; ?></td>
                            <td><?php echo $data['product_image3']; ?></td>
                            <td><?php echo $data['product_price']; ?></td>
                            <td><?php echo $data['date']; ?></td>
                            <td><?php echo $data['status']; ?></td>
                            <td><?php echo $data['price']; ?></td>
                        </tr>
                        <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>