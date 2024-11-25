<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-hover table-stripped">
                <thead>
                    <th>Id</th>
                    <th>User Name</th>
                    <th>E-mail</th>
                    <th>Password</th>
                    <th>Image</th>
                    <th>Ip Address</th>
                    <th>Address</th>
                    <th>Mobile</th>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM user_table";
                    $res = mysqli_query($con, $query);
                    while ($data = mysqli_fetch_assoc($res)) {
                        ?>
                        <tr>
                            <td><?php echo $data['user_id']; ?></td>
                            <td><?php echo $data['username']; ?></td>
                            <td><?php echo $data['user_email']; ?></td>
                            <td><?php echo $data['user_password']; ?></td>
                            <td><?php echo $data['user_image']; ?></td>
                            <td><?php echo $data['user_ip']; ?></td>
                            <td><?php echo $data['user_address']; ?></td>
                            <td><?php echo $data['user_mobile']; ?></td>
                        </tr>
                        <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>