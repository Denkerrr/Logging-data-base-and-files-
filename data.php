
<?php
include('FileLogger.php');
include('DBLogger.php');

abstract class Logger
{
	
    protected $massege;
    public $log_time;
    public $host ;
    public $user ;
    public $password ;
    public $db;

    public function get_date($error)
	{
        @$this->log_time = date("[Y-m-d H:i:s]").serialize($error);	
    }
    public  function write_log_in_file()
	{
		
    }
}


$Log = new FileLogger('/'.$_GET['file'].'.txt');
$Log->get_date('Error');
$Log->write_log_in_file();
$mysqliLog = new DBLogger();
$mysqliLog->write_log_in_DB();

?>