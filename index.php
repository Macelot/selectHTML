<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


</head>
<body>
    <form method="post">

        <select name="opt[]" class="form-select" multiple aria-label="multiple select example">
            <option selected>Open this select menu</option>
            <option value="100">100 CV</option>
            <option value="200">200 CV</option>
            <option value="300">300 CV</option>
            <option value="400">400 CV</option>
        </select>

        <input type="submit">

    </form>

    <?php
    $vs = [];
    if(isset($_POST['opt'])){
        var_dump($_POST['opt']);
        $vs = $_POST['opt'];
    }
    foreach ($vs as $valor)
        print "Você selecionou $valor<br/>";



    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>