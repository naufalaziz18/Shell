<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Shell</title>
</head>

<body>
    <div class="container d-flex flex-column justify-content-center pb-5" style="width: 100%; height: 100vh;">
        
        <form class="container bg-light p-5 border border-dark rounded shadow" 
              style="width: 50%; height: auto; box-shadow: 0px 8px 20px rgba(10, 0, 0, 0.50);" 
              action="logic.php" method="post">
              
            <div class="text-center mb-3">
                <img src="img/Shell_logo.svg.png" alt="Logo Shell" style="width: 100px;">
                <h1>Shell Indonesia</h1>
            </div>
            <div class="">
                <label class="form-label" for="liter">Masukan Jumlah Liter Pembelian:</label>
                <input class="form-control" type="number" name="liter" id="liter" required>
            </div>
            <div class="mt-3">
                <label class="form-label" for="jenis">Pilih Jenis Bahan Bakar:</label>
                <select class="form-select" name="jenis" required>
                    <option value="SSuper">Shell Super</option>
                    <option value="SVPower">Shell V-Power</option>
                    <option value="SVPowerDiesel">Shell V-Power Diesel</option>
                    <option value="SVPowerNitro">Shell V-Power Nitro</option>
                </select>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <button style="width: 100px;" class="btn btn-primary" type="submit" name="beli">Beli</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous"></script>
</body>

</html>
