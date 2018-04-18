<?php
class UserService
{
  private $db;
  private $cfg;
  
  public function __construct($db, $cfg) {
    $this->db = $db;
    $this->cfg = $cfg;
  }

    /**
     * metoda pro prihlaseni usera
     * @param $login login
     * @param $pass heslo
     * @return bool truk, pokud projde login
     */
  public function login($login, $pass) {
      $pass = sha1($pass);
    $result = $this->db->select("SELECT * FROM " . $this->cfg['tbl_user'] . " WHERE un='". $login ."' AND pw='". $pass ."'");
    if(count($result)==1) {
      $_SESSION['user'] = $result[0]['id'];
      $_SESSION['userName'] = $result[0]['un'];
      return true;
    }
    return false;
  }


    /**
     * metoda na overeni prihlaseni
     * @return bool vraci zada je prihlaseny uzivatel
     */
  public function islogin() {
    if(isset($_SESSION['user'])) {
      return true;
    }
    return false;
  }

    /**
     * metoda prida noveho usera
     * @param $jmeno jmeno
     * @param $prijjmeni prijmeni
     * @param $login uzivatelske jmeno
     * @param $heslo heslo
     * @return mixed vraci pocet ovlivnenych radku v mysql: 1 pokud se prida 0 kdyz to selze
     */
  public function addUser($jmeno, $prijjmeni, $login, $heslo) {
      $heslo = sha1($heslo);
      $q = "INSERT INTO {$this->cfg['tbl_user']} 
        (jmeno, prijmeni, un, pw, datum) 
        VALUES 
        ('{$this->quote($jmeno)}', '{$this->quote($prijjmeni)}', '{$this->quote($login)}', '{$this->quote($heslo)}', NOW())";
    $result = $this->db->query($q);
    return $result;
  }
  public function quote($value) {
      $conection = $this->db->connect();
      return "" . $conection->real_escape_string($value) . "";
  }
}

?>