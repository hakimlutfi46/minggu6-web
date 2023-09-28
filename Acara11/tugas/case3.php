<?php
interface Logger
{
    public function log($message);
}

class FileLogger implements Logger
{
    private $handle;
    private $logFile;

    public function __construct($fileName, $mode = 'a')
    {
        $this->logFile = $fileName;
        // open log file for append
        $this->handle = fopen($fileName, $mode)
            or die('Could not open the log file');
    }

    public function log($message)
    {
        $message = date('F j, Y, g:i a') . ': ' . $message . "\n";
        fwrite($this->handle, $message);
    }

    public function __destruct()
    {
        if ($this->handle) {
            fclose($this->handle);
        }
    }
}

class DatabaseLogger implements Logger
{
    public function log($message)
    {
        echo sprintf("Log to the database" . "\n");
    }
}

// example 1
$logger = new FileLogger('./log.txt', 'w');
$logger->log("PHP interfaace is awesome");

// example 2
$loggers = [
    new FileLogger('./log.txt'),
    new DatabaseLogger()
];

foreach ($loggers as $logger) {
    $logger->log('Log message');
}
