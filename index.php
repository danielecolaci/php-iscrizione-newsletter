<?php

include 'function.php';

$email = $_GET['email'];

if (isset($email)) {
    if (checkEmail($email)) {
        header ('Location: success.php');
    } else {
        $alert = '<div class="alert alert-danger" role="alert">Email non valida! Riprova con un indirizzo email valido.</div>';
    }
}

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
                        <?php echo isset($alert) ? $alert : ''; ?>
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

    <script>
    setTimeout(function() {
        document.querySelector('.alert-danger').style.display = 'none';
    }, 5000);
</script>
</body>
</html>