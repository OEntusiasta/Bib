<?php
session_start();

abstract class Model
{
    private $host = 'localhost';
    private $port = '5432';
    private $dbName = 'postgres';
    private $dbUser = 'postgres';
    private $dbPassword = '';
    private $connection = null;
    private $table = null;
    private $tableId = null;

    public function connect()
    {
        $this->connection = pg_connect(
            "host=$this->host " . 
            "port=$this->port " . 
            "dbname=$this->dbName " . 
            "user=$this->dbUser " . 
            "password=$this->dbPassword "
        );
    }

    public function setTable(string $table) 
    {
        $this->table = $table;
    }

    private function desconnect()
    {
        pg_close($this->connection);
    }

    public function validation($email, $password)
    {
        $this->connect();
        $result = pg_query($this->connection, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");
        $login_status = pg_num_rows($result);
        if($login_status > 0) {
            $data = pg_fetch_all($result);
            $_SESSION['id'] = $data[0]['id'];
            $_SESSION['email'] = $data[0]['email'];
            $_SESSION['password'] = $data[0]['password'];
            $_SESSION['name'] = $data[0]['name'];
            $_SESSION['phone'] = $data[0]['phone'];
            return $data[0]['is_admin'];
            echo "Correto";
        }
        else{
            echo "Incorreto";
        }
        $this->desconnect();
    }

    public function find($id)
    {
        $this->connect();
        $this->tableId = $id;
        $result = pg_query($this->connection, "select * from $this->table where id = $id");
        $this->desconnect();

        return (pg_fetch_all($result)[0]);
    }

    public function all()
    {
        $this->connect();
        $result = pg_query($this->connection, "SELECT * FROM $this->table ORDER BY id");
        $this->desconnect();
        return (pg_fetch_all($result));
    }

    public function create(array $data)
    {
        $this->connect();
        $result = pg_insert($this->connection, $this->table, $data);
        $this->desconnect();
        return $result;
    }

    public function update(int $id, array $data)
    {
        $this->connect();
        $result = pg_update($this->connection, $this->table, $data, ['id' => $id]);
        $this->desconnect();
    }

    public function delete(int $id) 
    {
        $this->connect();
        $result = pg_delete($this->connection, $this->table, ['id' => $id]);
        $this->desconnect();
    }

    public function oneToOne(string $table, string $foreignKey, string $key = 'id')
    {
        $this->connect();
        $result = pg_query(
            $this->connection,
            "select $table.* from $table inner join $this->table on $this->table.$key = $table.$foreignKey ORDER BY id");
        return (pg_fetch_all($result)[0]);
    }

    public function oneToMany(string $table, string $foreignKey, string $key = 'id')
    {
        $this->connect();
        $result = pg_query(
            $this->connection,
            "select $table.* from $table inner join $this->table on $this->table.$key = $table.$foreignKey ORDER BY id");
        return (pg_fetch_all($result));
    }
}