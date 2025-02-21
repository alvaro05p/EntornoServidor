<?php
class Persona{

    private $nombre;
    private $edad;
    private $DNI;
    private $sexo;
    private $peso;
    private $altura;

    const INFRAPESO = -1;
    const PESO_IDEAL = 0;
    const SOBREPESO = 1;

    
    public function __construct($nombre = "", $edad = 0, $sexo = "H", $peso = 0, $altura = 0) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->comprobarSexo($sexo);
        $this->peso = $peso;
        $this->altura = $altura;
        $this->DNI = self::generarDNI();
    }

    public static function generarDNI() {
        $numero = rand(10000000, 99999999);
        $letra = self::generaLetraDNI($numero % 23);
        return "$numero$letra";
    }

    public static function generaLetraDNI($idLetra) {
        $letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];
        return $letras[$idLetra];
    }
    

    public function comprobarSexo($sexo){
        if ($sexo != 'H' && $sexo != 'M') {
            $this->sexo = 'H';
        } else {
            $this->sexo = $sexo;
        }
    }

    public static function consFull(){
        $persona = new self();
        $persona->nombre = "";
        $persona->edad = 0;
        $persona->DNI = self::generarDNI();
        $persona->sexo = "H";
        $persona->peso = 0;
        $persona->altura = 0;
        return $persona;
    }

    public static function consNomEdSex($nombre,$edad,$sexo){
        $persona = new self();
        $persona->nombre=$nombre;
        $persona->edad=$edad;
        $persona->comprobarSexo($sexo);
        return $persona;
    }

    public function calcularIMC(){
        if ($this->altura <= 0) {
            return null; // Evitar división por cero
        }
        $imc = $this->peso / ($this->altura * $this->altura);
        if ($imc < 20) {
            return self::INFRAPESO;
        } elseif ($imc >= 20 && $imc <= 25) {
            return self::PESO_IDEAL;
        } else {
            return self::SOBREPESO;
        }
    }

    public function esMayorDeEdad(){
        if($this->edad >= 18){
            return true;
        }else{
            return false;
        }
    }

    public function strIMC() {
        $resultadoIMC = $this->calcularIMC();
        switch ($resultadoIMC) {
            case self::INFRAPESO:
                return "$this->nombre tiene infrapeso<br>";
            case self::PESO_IDEAL:
                return "$this->nombre está en su peso ideal<br>";
            case self::SOBREPESO:
                return "$this->nombre tiene sobrepeso<br>";
        }
    }

    public function __toString() {
        return "Informacion de la persona:<br>
                DNI: $this->DNI <br>
                Nombre: $this->nombre <br>
                Sexo: " . ($this->sexo == 'H' ? 'Hombre' : 'Mujer') . "<br>
                Edad: $this->edad <br>
                Peso: $this->peso Kg <br>
                Altura: $this->altura metros <br>
                Resultado IMC: " . $this->strIMC();
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function setSexo($sexo){
        $this->sexo=$sexo;
    }

    public function setEdad($edad){
        $this->edad=$edad;
    }

    public function setAltura($altura){
        $this->altura=$altura;
    }

    public function setPeso($peso){
        $this->peso=$peso;
    }

    public function mostrarIMC(){
        return $this->calcularIMC();
    }
    
}

?>