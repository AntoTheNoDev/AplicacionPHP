<?php 

// se crea una clase para poder hacer uso del PDO
class DB{
    private $hosts;
    private $db;
    private $user;
    private $password;
    private $charset;

    // el constructor es una funcion que se crea cuando se crea un nuevo objeto
    public function __construct(){
        /* this se utiliza this para buscar internamente en la clase creada, para buscar las variables
            con -> se hace referencia, en este caso a la variable $host, db...
        */
        $this->host = 'localhost';
        $this->db = 'clinica';
        $this->user = 'root';
        $this->password = '1234anto';
        $this->charset = 'utf8mb4';
    }

    // funcion para la conexion
    public function connect(){
        // intenta y si hay error suelta error por pantalla
        try{
            //conexion
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset; 
        
            //opciones errores mas legible, => indicacmos un valor
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_EMULATE_PREPARES => false];
            
            //autenticacion
            $pdo = new PDO($connection, $this->user, $this->password, $options);
        
            return $pdo;
        }catch(PDOException$e){
            print_r("Error connection: " . $e->getMessage());
        }
    }

}
?>