<?php

class Computer 
{
    private string $case;
    private string $MB;
    private string $SSD;
    private string $CPU;
    private string $RAM;
    private string $keyboard;
    private string $mouse;
    private string $GPU;
    private string $display;
    private string $powersupply;
    public function __construct(string $case) {
        $this->case = $case;
    }
    public function addMotherBoard(string $MB)
    {
        $this->MB = $MB;
    }
    public function  mountDrive (string $MB, string $SSD )
    {
    if(isset($MB))
    {
        $this->SSD = $SSD;
        return TRUE;
    }
    else
    {
        return FALSE;
    }
    }
    public function  addCPU (string $MB, string $CPU)
    {
    if(isset($MB))
    {
        $this->CPU = $CPU;
        return TRUE;
    }
    else
    {
        return FALSE;
    }
    }
    public function  addRAM  (string $MB, string $RAM)
    {
    if(isset($MB))
    {
        $this ->RAM = $RAM;
        return TRUE;
    }
    else
    {
        return FALSE;
    }
    }
    public function  connectKeyboard  (string $MB, string $keyboard)
    {
    if(isset($MB))
    {
        $this ->keyboard = $keyboard;
        return TRUE;
    }
    else
    {
        return FALSE;
    }
    }
    public function  connectMouse  (string $MB, string $mouse)
    {
    if(isset($MB))
    {
        $this ->mouse = $mouse;
        return TRUE;
    }
    else
    {
        return FALSE;
    }
    }
    public function  connectGPU (string $MB, string $GPU)
    {
    if(isset($MB))
    {
        $this ->keyboard = $keyboard;
        return TRUE;
    }
    else
    {
        return FALSE;
    }
    }
    public function  connectDisplay   (string $GPU, string $display)
    {
    if(isset($GPU))
    {
        $this -> display = $display;
        return TRUE;
    }
    else
    {
        return FALSE;
    }
    }
    public function  addPowerSupply    (string $case, string $powersupply)
    {
    if(isset($case))
    {
        $this -> display = $display;
        return TRUE;
    }
    else
    {
        return FALSE;
    }
    }
    $myComputer = new Computer("ATX");
    try {
        $pc1->addMotherBoard('MSI super socket 949');
        $pc1->addCPU('Intel i5 10800U');
        $pc1->addRAM('Corsair 16 GB dual channel pack');
        $pc1->addKeyboard('Logitech keyboard');
        $pc1->addMouse('Logitech mouse');
        $pc1->addGPU ('RTX 3080');
        $pc1->connectDisplay('Samsung');
        $pc1->addPowerSupply  ('800W');
        
        echo "Computer connected all peripherials successfully!";
    } catch (\Throwable $th) {
        echo "Computer issues:" . $th->getMessage();
    }
    

}






















?>