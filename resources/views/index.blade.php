<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{
            color: red;
        }
    </style>
</head>
<body>
<h1>
<?=$greeting;
?>
</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Completed</th>
    </tr>
    <?php foreach ($tasks as $item): ?>
    <tr>
        <td> <?= $item -> id; ?> </td>
        <td> <?= $item -> title; ?> </td>
        <td> <?= $item -> description; ?> </td>
        <td> <?php echo $item -> completed; ?> </td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>