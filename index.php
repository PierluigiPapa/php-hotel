<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - HOTELS</title>

     <!-- LINK BOOTSTRAP  -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-warning">

    <div class="container">
        <h1 class="text-center text-dark my-3">CERCA IL PARCHEGGIO</h1>

        <div class="d-flex justify-content-center">
            <div class="py-4">
                <div class="mb-3">
                    <!-- // SECTION FORM // -->
                    <form action="hotels.php" method="GET">
                        <div class="form-group py-3">
                          <label for="parkingCheckbox" class="fw-bold">Parcheggio</label>
                          <input type="checkbox" id="parkingCheckbox" name="parking" <?php if(isset($_GET['parking'])) echo "checked"; ?>>
                        </div>
                        <div class="form-group py-3">
                          <label for="ratingInput" class="fw-bold">Voto:</label>
                          <input type="number" id="ratingInput" name="rating" min="1" max="5" value="<?php echo isset($_GET['rating']) ? $_GET['rating'] : ''; ?>">
                        </div>

                        <div class="text-center py-3">
                            <button type="submit" class="btn btn-dark">Filtra</button>
                        </div>
                    </form>
                    <!-- // SECTION FORM // -->
                </div>
            </div>
        </div>
    </div>

<!-- LINK JAVASCRIPT BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>