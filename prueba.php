 

<?php  

// Definición de la clase base Coche
// que tiene propiedades y un método para arrancar
class Coche
{
    public $marca;
    public $modelo;
    
    public function arrancar (): void{
        echo "El coche está arrancando.";
    }

    public function mostrarInformacion (): void
    {
        echo "Marca: " . $this->marca . ", Modelo: " . $this->modelo. "\n";
    }
}
// Definición de la clase Deportivo que hereda de Coche
// y añade un método específico para activar el turbo

class Deportivo extends Coche{
    public function activarTurbo (): void{
        echo "El turbo está activado.";
}
}

$coche1 = new Coche();
$coche2 = new Deportivo();
$coche1->marca = "Toyota";
$coche1->modelo = "Corolla";
$coche1->arrancar();
$coche2-> activarTurbo();
$coche1-> mostrarInformacion();
?>

