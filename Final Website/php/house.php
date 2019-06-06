<?php

include_once 'abstractclass.php';

class house extends abstractclass
{

    private $id;
    private $house_type;
    private $house_situation;
    private $location;
    private $price;
    private $energie_label;
    private $balkon;
    private $build_year;
    private $type;
    private $space;
    private $attic;
    private $image_url;
    private $added_date;

    static $primery_key = 'id';

    protected static $table_name = "house";
    protected static $table_schema = array(
        'house_type',
        'house_situation',
        'location',
        'price',
        'energie_label',
        'balkon',
        'build_year',
        'space',
        'attic',
        'image_url',
        'added_date'
    );

    public function __construct($house_type , $house_situation , $location, $price , $energie_label ,$balkon , $build_year , $space , $attic , $image_url)
    {
        $this->house_type = $house_type;
        $this->house_situation = $house_situation;
        $this->location = $location;
        $this->price = $price;
        $this->energie_label = $energie_label;
        $this->balkon = $balkon;
        $this->build_year = $build_year;
        $this->space = $space;
        $this->attic = $attic;
        $this->image_url = $image_url;
        $this->added_date = date("Y/m/d");
    }

    public function get($prop)
    {
        return $this->$prop;
    }

    public function set($house_type , $house_situation , $location, $price , $energie_label ,$balkon , $build_year , $space , $attic , $image_url)
    {
        $this->house_type = $house_type;
        $this->house_situation = $house_situation;
        $this->location = $location;
        $this->price = $price;
        $this->energie_label = $energie_label;
        $this->balkon = $balkon;
        $this->build_year = $build_year;
        $this->space = $space;
        $this->attic = $attic;
        $this->image_url = $image_url;
        $this->added_date = date("Y/m/d");
    }


    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */public function getHouseType()
     {
         return $this->house_type;
     }


    public function getHouseSituation()
    {
        return $this->house_situation;
    }


    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */public function getEnergieLabel()
      {
          return $this->energie_label;
      }

    /**
     * @return mixed
     */public function getBalkon()
      {
          return $this->balkon;
      }

    /**
     * @return mixed
     */public function getBuildYear()
      {
           return $this->build_year;
      }

      public function getSpace()
      {
          return $this->space;
      }

    public function getAttic()
    {
        return $this->attic;
    }

    public function getImage_url()
    {
        return $this->image_url;
    }

    public function getAdded_date()
    {
        return $this->added_date;
    }

    public function getLocation()
    {
        return $this->location;
    }
    public static function get_all_houses_by_date()
    {
        global $connect;

        $query = 'SELECT * FROM ' . static::$table_name . ' ORDER BY added_date DESC';

        $result = $connect->query($query);

        $employe = $result->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, get_called_class() , static::$table_schema) ;
        return $employe;
    }

    public static function search( $location , $min_price , $max_price , $type , $situation)
    {
        global $connect;

        $query = 'SELECT * FROM ' . static::$table_name . ' WHERE house_situation = "' . $situation .'"';
        
        if($type != '1')
        {
            $query .= ' AND house_type = "' . $type . '"';
        }
        
        if($location != 'all')
        {
            $query .= ' AND location = "' .$location . '"';
        }

        if($min_price != -1)
        {
            $query .= ' AND price >= ' . $min_price;
        }

        if($max_price != -1)
        {
            $query .= ' AND price <= ' . $max_price;
        }

        $result = $connect->query($query);

        $employe = $result->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, get_called_class() , static::$table_schema) ;
        return $employe;
    }





}


?>