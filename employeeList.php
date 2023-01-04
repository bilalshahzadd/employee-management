<?php
include('partials/header.php');
include('partials/modal.php');
?>
<div class="container my-4">
    <hr>
    <h1 class="display-6 fw-semibold">Employee List</h1>
    <hr>
</div>

<div class="container my-4">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Age</th>
                <th scope="col">Designation</th>
                <th scope="col">Edit/Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('functions/dbConnect.php');

            $sql = "SELECT * FROM `employee-list`";
            $result = mysqli_query($conn, $sql);
            $number = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $number = $number + 1;
            ?>
                <tr>
                    <th scope="row"><?php echo $number; ?></th>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['designation']; ?></td>
                    <td><button class="btn btn-primary fa-solid fa-pen-to-square edits" data-bs-toggle="modal" data-bs-target="#editModal"></button><button class="btn btn-danger fa-solid fa-trash mx-2"></button></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<?php
include('partials/footer.php');
?>