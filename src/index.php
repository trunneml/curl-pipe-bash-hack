<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>curl | bash</title>
</head>

<body>

    <main role="main" class="container">


        <h1>curl | bash</h1>
        <p class="lead">Fun with curl | bash. This is example application demonstrates how easily you could use curl and bash to do things.</p>
        <h2>Getting started</h2>
        <p>Just run the following command in your terminal.</p>
        <div class="bg-light">
            <pre><code>curl -LNo- <?= ($_SERVER['REQUEST_SCHEME'] == 'http' ? 'http://' : 'https://') ?><?= $_SERVER['HTTP_HOST']; ?>/install.sh | bash</code></pre>
        </div>
        <div class="alert alert-warning" role="alert">
            Always check the shell scripts first: <a href="<?= ($_SERVER['REQUEST_SCHEME'] == 'http' ? 'http://' : 'https://') ?><?= $_SERVER['HTTP_HOST']; ?>/install.sh"><?= ($_SERVER['REQUEST_SCHEME'] == 'http' ? 'http://' : 'https://') ?><?= $_SERVER['HTTP_HOST']; ?>/install.sh</a>
        </div>
    </main><!-- /.container -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>