<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stylish Form</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="col-md-6 offset-md-3">

        <h2 class="mb-4">Order predictions form</h2>
        <form method="post" action="predict.php">
            <div class="form-group">
                <label for="input1">Week</label>
                <input type="text" class="form-control" name="input1" id="input1">
            </div>

            <div class="form-group">
                <label for="input2">Center ID</label>
                <input type="text" class="form-control" name="input2" id="input2">
            </div>

            <div class="form-group">
                <label for="input3">Meal ID</label>
                <input type="text" class="form-control" name="input3" id="input3">
            </div>

            <div class="form-group">
                <label for="input4">Checkout price</label>
                <input type="text" class="form-control" name="input4" id="input4">
            </div>

            <div class="form-group">
                <label for="input5">Base price</label>
                <input type="text" class="form-control" name="input5" id="input5">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
