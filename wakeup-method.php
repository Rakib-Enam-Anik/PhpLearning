class student{
    public $course = "PHP";
    private $first_name;
    private $last_name;
    private $conn;

    public function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __construct(){
        $this->conn = mysqli_connect();
    }
    public function __sleep(){
        mysql_close($this->conn);
        return array('$first_name', '$last_name');

    }

    public function __wakeup(){
        $this->conn = mysqli_connect();
        echo "This is wakeup method. ";
    }
}

$obj =new student();

$obj->setName("Rakib", "Enam");
$srl = serialize($obj);

$us = unserialize($srl);

echo $srl;
print_r($us);