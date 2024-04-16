<?php

$email = $_GET['email'];

/* var_dump($_GET);
var_dump(isset($email)); */

if (isset($email)) {

    if (str_contains($email, '@') && str_contains($email, '.')) {
        echo 'ok';
    } else{
        echo 'fail';
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="row justify-content-center">
            
                <div class="card col-md-6 p-5">
                    <div class="card-body">
                        <h2 class="card-title mb-4 text-center">Iscriviti alla nostra Newsletter 😃📧</h2>
                        <form action="" method="get">
                            <div class="mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" required class="form-control" name="email" id="email" placeholder="Inserisci la tua mail">
                            </div>
                            <button type="submit" class="btn btn-success">Iscriviti</button>
                        </form>
                    </div>
                </div>
            
        </div>
    </div>
</body>
</html>