<!DOCTYPE html>
<html lang="en">
<head>
    <title>MY TODO APP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
    <h1>TODO APP</h1>
    <a href="/todo/add">Add</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>STT</th>
            <th>Cong Viec</th>
            <th>Ngay Lam</th>
            <th>Trang Thai</th>
            <th>Tuy Chon</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php foreach ($posts as $value) {?>
        <tr>
            <td><?= $value['id'] ?></td>
            <td><?= $value['CongViec'] ?></td>
            <td><?= $value['NgayLam'] ?></td>
            <td><?= $value['TrangThai'] ?></td>
            <td>
                <a href="#" class="btn btn-info" role="button">Edit</a>
                <a href="/todo/<?= $value['id'] ?>"><button class="btn btn-info" onclick="return confirm('Are you sure to delete this user?')" title="Delete">Xoa</button></a>
            </td>
        </tr>
        <?php }?>
        </tr>
        </tbody>
    </table>
</div>


</body>
</html>
