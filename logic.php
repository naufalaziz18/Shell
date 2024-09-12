<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Halaman Transaksi</title>
</head>
<style>
    @media print{
        .class{
            display: none;  
        }
    }
</style>

<body>
    <?php
    class DataBahanBakar
    {
        private $HargaSSuper;
        private $HargaSVPower;
        private $HargaSVPowerDiesel;
        private $HargaSVPowerNitro;
        public $jenisYangDipilih;
        public $totalLiter;
        protected $totalPembayaran;
        protected $ppn;

        public function setHarga($valSSuper, $valSVPower, $valSVPowerDiesel, $valSVPowerNitro)
        {
            $this->HargaSSuper = $valSSuper;
            $this->HargaSVPower = $valSVPower;
            $this->HargaSVPowerDiesel = $valSVPowerDiesel;
            $this->HargaSVPowerNitro = $valSVPowerNitro;
        }

        public function getHarga()
        {
            $semuaDataSolar["SSuper"] = $this->HargaSSuper;
            $semuaDataSolar["SVPower"] = $this->HargaSVPower;
            $semuaDataSolar["SVPowerDiesel"] = $this->HargaSVPowerDiesel;
            $semuaDataSolar["SVPowerNitro"] = $this->HargaSVPowerNitro;
            return $semuaDataSolar;
        }
        public function getPpn()
        {
            $this->ppn = $this->getHarga()[$this->jenisYangDipilih] * $this->totalLiter * 0.1;
            return $this->ppn;
        }
    }

    class Pembelian extends DataBahanBakar
    {
        public function totalHarga()
        {
            $this->totalPembayaran = $this->getHarga()[$this->jenisYangDipilih] * $this->totalLiter;
        }
        public function cetakBukti()
        {
            echo "Jenis Bahan Bakar : " . $this->jenisYangDipilih . "<br>";
            echo "Total Liter : " . $this->totalLiter . " L<br>";
            echo "Harga Perliter : Rp " . number_format($this->getHarga()[$this->jenisYangDipilih], 2, ',', '.') . "<br>";
            echo "Jumlah Harga : Rp " . number_format($this->totalPembayaran, 2, ',', '.') . "<br>";
            echo "PPN (10%): Rp " . number_format($this->getPpn(), 2, ',', '.') . "<br>";
            echo "Total Bayar : Rp " . number_format($this->totalPembayaran + $this->getPpn(), 2, ',', '.') . "<br>";
        }
    }
    ?>
    <div class="container d-flex flex-column justify-content-center align-items-center"
        style="width: 50%; height: 100vh;">
        <div class="container text-center border border-dark bg-light rounded shadow pb-3">
            <div class="text-center mt-3">
                <img src="img/Shell_logo.svg.png" alt="Logo Shell" style="width: 100px;">
                <h1>Shell Indonesia</h1>
            </div>
            <h2 class="mb-3 mt-3">Bukti Transaksi Pembelian</h2>
            <?php
            $logic = new Pembelian();
            $logic->setHarga(10000, 15000, 18000, 20000);
            if (isset($_POST['beli'])) {
                $logic->jenisYangDipilih = $_POST['jenis'];
                $logic->totalLiter = $_POST['liter'];
                $logic->totalHarga();
                $logic->cetakBukti();
            }
            ?>
            <div class="class">
                <a href="index.php" class="btn btn-primary mb-3 mt-3">Kembali</a>
                <button type="button" class="btn btn-primary mb-3 mt-3" onclick="window.print()">Print</button>
            </div>
        </div>
    </div>
</body>

</html>