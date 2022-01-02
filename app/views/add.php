<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Them task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid mt-3">
    <h2>Them du lieu: </h2>

    <form action='/todo/add' method="POST">
        <!-- Vertical -->
        <div class="form-group">
            <label>Cong Viec: </label>
            <input type="text" id = "myEmail" name="congviec" class="form-control" placeholder="Nhap cong viec: ">
            <label>Ngay lam: </label>
            <input type="text" id="myPassword" name="ngaylam" class="form-control" placeholder="Nhap ngay lam: ">
            <label>Trang thai: </label>
            <input type="text" id="myPassword" name="trangthai" class="form-control" placeholder="Nhap tinh trang:  ">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>