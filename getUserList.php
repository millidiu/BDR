<?
class MyUserClass
{   
    $dbconn;

    public function connect($host, $user, $pass){
       $this->dbconn = new DatabaseConnection($host, $user,$pass);
    }
    public function getUserList()
    {
        $results = $this->dbconn->query('select name from user');
        sort($results);
        return $results;
    }
}

?>