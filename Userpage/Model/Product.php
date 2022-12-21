<?php
include_once '../until/MySQLUtil.php';
class Peroduct{
    private $id;
    private $name;
    private $image;
    private $price;
    private $number;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
    
    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }
    public function __construct($id, $name, $img, $price, $number)
	{
		$this->id = $id;
		$this->name = $name;
		$this->image = $img;
		$this->price = $price;
        $this->number = $number;
	}
    public function getAllProducts(){
        $data =NULL;
        $dbConnect = new MySQLUtils();
		$query = "SELECT id, title, price, image from product";
		$data = $dbConnect->getAllData($query);
		$dbConnect->disconnectDB();
		return $data;
    }

    
}