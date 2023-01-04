<?php
include('partials/header.php');
?>

<div class="container my-4">
    <hr>
    <h1 class="display-6">Save Information Below</h1>
    <hr>
</div>

<div class="container my-4">
    <form action="function/addEmployee.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" name="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="num" class="form-label">Phone Number:</label>
            <input type="number" class="form-control" id="num" name="phone">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age:</label>
            <input type="age" class="form-control" id="age" name="age">
        </div>
        <div class="mb-3">
            <label for="designation" class="form-label">Designation:</label>
            <input type="age" class="form-control" id="designation" name="designation">
        </div>
        <button type="submit" class="btn btn-primary">Save Info</button>
    </form>
</div>

<?php
include('partials/footer.php');
?>