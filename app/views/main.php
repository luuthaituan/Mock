<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>TODO</h1>
<table class="table table-striped table-hover">
    <tr>
        <th>STT</th>
        <th>Cong Viec</th>
        <th>Ngay Lam</th>
        <th>Trang Thai</th>
        <th>Control</th>
    </tr>
    <?php foreach ($posts as $value) {?>
        <tr>
            <td><?= $value['id'] ?></td>
            <td><?= $value['CongViec'] ?></td>
            <td><?= $value['NgayLam'] ?></td>
            <td><?= $value['TrangThai'] ?></td>
            <td>
                <a href="#" class="btn btn-sm" title="Edit"><button>Edit</button></a>
                <a href="/todo/<?= $value['id'] ?>"><button class="btn btn-sm" onclick="return confirm('Are you sure to delete this user?')" title="Delete">Xoa</button></a>
            </td>
        </tr>
    <?php }?>
</table>
</body>
</html>