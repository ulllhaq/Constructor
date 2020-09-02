<?php
class komputer
{
    public $prosesor;
    public $memory;

    public function __construct($prosesor,$memory = "12 Gb")
    {
        $this->prosesor = $prosesor;
        $this->memory = $memory;
    }
    public function cetak()
    {
        return "$this->prosesor | $this->memory";
    }

}

$komputerSaya = new komputer("core i7","8 GB");
echo $komputerSaya->Cetak();
?>