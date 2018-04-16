<?php
namespace frame\Libs;

class Log
{
	static function wirte($message,$file = "_log")
	{
		$logPath = BASEPATH.'/storage/log/'.date('YmdH');
		$logFile = $logPath.'/log_'.date('YmdH').'.php';
		if(!is_dir($logPath)) {
			mkdir($logPath,777);
		}
		$message = '['.date('Y-m-d H:i:s').'] '.$message;
		file_put_contents($logFile, $message.PHP_EOL,FILE_APPEND);
	}
}