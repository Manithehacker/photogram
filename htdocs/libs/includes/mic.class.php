<?php



class Mic
{
    private $brand;
    public $color;
    public $usb_port;
    public $model;
    public $light;
    public $price;

    /* public function __call($name, $arguments)
     {
         print_r("$name<br>");
         print_r($arguements);
         print("<br>");
     }

      public static function testfucntion()
      {
          print("this is a static functyion without objetc initialization");
      }
*/


    public function __construct($hello)
    {
        print("constructing the object");
        $this->brand = ($hello);

        // print("hello");
        // print("$this->brand");
    }
    public function getbrand()
    {
        return $this->brand;
    }
    public function setlight($light)
    {
        $this->light=$light;
    }
   /* public function setmodel($hello)
    {
        $this->model = ucwords($hello);
    }*/
    private function getmodel()
    {
        return $this->model;
    }
    public function getproxy()
    {
        $this->getmodel();
        print($this->model);
    }
    public function __destruct()
    {
        //print("destruct object brand:...".$this->brand);
    }
}
