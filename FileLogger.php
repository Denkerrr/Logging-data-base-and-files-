<?php

class FileLogger extends Logger
{
    private $way = 'log.txt';
    public function write_log_in_file()
	{
		if (empty($_GET['file']) == false) {
        return file_put_contents($this->way =''.$_GET['file'].'.txt', $this->log_time . "\n", FILE_APPEND);
		} elseif (empty($_GET['file'])) {
			return file_put_contents($this->way, $this->log_time . "\n", FILE_APPEND);
		}
    }
}
?>