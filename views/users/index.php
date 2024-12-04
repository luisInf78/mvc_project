<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
</head>
<body>
    <h1>Users List</h1>
    <a href="index.php?action=create">Add New User</a>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?php echo $user['name'] . ' (' . $user['email'] . ')'; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
