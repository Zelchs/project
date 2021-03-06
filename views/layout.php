<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/app.js" defer></script>
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <?php if (!empty($errors)) { ?>
            <div class="alert alert-danger">
                <?php foreach ($errors as $error) { ?>
                    <div> <?php echo $error ?></div>
                <?php } ?>
            </div>
        <?php } ?>
        <?php echo $content ?>

        <footer class="footer mt-5">
            <div class="container border-top text-center pt-5 pb-5">
                <span class="text-muted">Copyright &copy; Zelchs <?php echo date("Y")  ?></span>
            </div>
        </footer>
    </div>



</body>

</html>