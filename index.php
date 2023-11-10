<html lang="de">

<head>
    <title>XMAS-Downloader</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="d-flex justify-content-center align-items-center h-100 w-100 p-5">
        <div class="bg-light p-3">
            <div class="d-flex justify-content-center w-100">
            <?php
                require_once 'download.php';
            ?>
            </div>

            <form action="index.php" method="get">
                <label>
                    Enter Code:<br />
                    <input type="text" name="code" />
                    <input type="submit" />
                </label>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>
