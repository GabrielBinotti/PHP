<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <title>Loading Internal Page</title>
</head>

<body>
    <div class="container">
        <?php
        try {
            require_once "../app/functions/pages.php";
            require load();
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }

        ?>
    </div>
</body>

</html>