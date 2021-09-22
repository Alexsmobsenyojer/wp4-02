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
    public function  mountDrive ( string $SSD )
    {
    if(isset($MB))
    {
        $this->SSD = $SSD;
        return TRUE;
    }
    else
    {
        throw new Exception("You dont have a Motherboard");
    }
    }
    public function  addCPU (string $CPU)
    {
    if(isset($MB))
    {
        $this->CPU = $CPU;
        return TRUE;
    }
    else
    {
        throw new Exception("You dont have a CPU");
    }
    }
    public function  addRAM  (string $RAM)
    {
    if(isset($MB))
    {
        $this ->RAM = $RAM;
        return TRUE;
    }
    else
    {
        throw new Exception("You dont have a RAM");
    }
    }
    public function  connectKeyboard  (string $keyboard)
    {
    if(isset($MB))
    {
        $this ->keyboard = $keyboard;
        return TRUE;
    }
    else
    {
        throw new Exception("You dont have a keyboard");
    }
    }
    public function  connectMouse  (string $mouse)
    {
    if(isset($MB))
    {
        $this ->mouse = $mouse;
        return TRUE;
    }
    else
    {
        throw new Exception("You dont have a mouse");
    }
    }
    public function  connectGPU (string $GPU)
    {
    if(isset($MB))
    {
        $this ->GPU = $GPU;
        return TRUE;
    }
    else
    {
        throw new Exception("You dont have a GPU");
    }
    }
    public function  connectDisplay   (string $display)
    {
    if(isset($GPU))
    {
        $this -> display = $display;
        return TRUE;
    }
    else
    {
        throw new Exception("You dont have a display");
    }
    }
    public function  addPowerSupply  (string $powersupply)
    {
    if(isset($case))
    {
        $this -> powersupply = $powersupply;
        return TRUE;
    }
    else
    {
        throw new Exception("You dont have a powersupply");
    }
    }
    
    
    

}
$pc1 = new Computer("ATX");
    try
     {
        $pc1->addMotherBoard('MSI super socket 949');
        $pc1->mountDrive('Samsung 516 GB');
        $pc1->addCPU('Intel i5 10800U');
        $pc1->addRAM('Corsair 16 GB dual channel pack');
        $pc1->addKeyboard('Logitech keyboard');
        $pc1->addMouse('Logitech mouse');
        $pc1->addGPU ('RTX 3080');
        $pc1->connectDisplay('Samsung');
        $pc1->addPowerSupply  ('800W');
        
        echo "Computer connected all peripherials successfully!";
        } 
    catch (\Throwable $th) {
        echo "Computer issues:" . $th->getMessage();
                          }


?>