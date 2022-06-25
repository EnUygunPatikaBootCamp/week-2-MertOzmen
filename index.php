<?php
class Transport
{

    private $brand;
    private $model;

    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function infoTransport($brand, $model)
    {
        echo "Marka : " . $this->brand = $brand . ' <br>';
        echo "Model : " . $this->model = $model . " <br>";
    }
}

class GroundVehicles extends Transport
{
    private $plateNum;
    private $tyre;

    public function __construct($plateNum, $tyre)
    {
        $this->plateNum = $plateNum;
        $this->tyre = $tyre;
    }

    public function infoGroundVehicles($brand, $model)
    {
        echo parent::infoTransport($brand, $model);

        echo "Plaka No : " . $this->plateNum . " <br>";
        echo "Tekerlek : " . $this->tyre . " <br>";
    }
}

class Aircraft extends Transport
{

    private $wingSpan;

    public function __construct($wingSpan)
    {
        $this->wingSpan = $wingSpan;
    }

    public function infoAircraft($brand, $model)
    {
        echo parent::infoTransport($brand, $model);
        echo "Kanat Açıklığı : " . $this->wingSpan . "<br>";
    }
}

$car = new GroundVehicles('06 ARAC 06', '4');
$car->infoGroundVehicles('Mercedes', 'C180');
echo "<br>";
$moto = new GroundVehicles('06 MOTOR 06', '2');
$moto->infoGroundVehicles('Honda', ' Forza 750');
echo "<br>";
$air=new Aircraft('80m');
$air->infoAircraft('Airbus','A380');