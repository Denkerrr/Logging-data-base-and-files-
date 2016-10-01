<?php

class DBLogger extends Logger
{
    public function __construct()
	{
        $this->host = $_GET['host'];
        $this->user = $_GET['user'];
        $this->password = $_GET['password'];
        $this->db  = $_GET['db'];
    }
	private static $connect = null;
	
    public  function write_log_in_DB()
	{
		if (self::$connect === null) {
		$connect = mysqli_connect($this->host,$this->user,$this->password,$this->db);
		}
        
        if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
        }
        $sql = mysqli_query($connect, "INSERT INTO Logg (massege,DateTime) VALUES('error','".strftime('%Y-%m-%d %H:%M:%S')."')");
        mysqli_close($connect);
		
		return self::$connect;
	}
}
?>