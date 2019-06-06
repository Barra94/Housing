<?php
/**
 * Created by PhpStorm.
 * User: barra
 * Date: 8/6/2017
 * Time: 4:14 PM
 */

include_once 'abstractclass.php';

class users extends abstractclass
{

    private $id;
    private $first_name;
    private $last_name;
    private $email;
    private $password;
    private $type;

    static $primery_key = 'id';

    protected static $table_name = "user"; // l7ta 22der fot 3lih mn al callas al 2b lazem ykon static
    protected static $table_schema = array(
        'first_name',
        'last_name',
        'email',
        'password',
        'type'
         );

    public function __construct($first_name , $last_name ,$email , $password , $type)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->type = $type;
    }

    public function get($prop)
    {
        return $this->$prop;
    }

    public function set($first_name , $last_name ,$email , $password , $type)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->type = $type;
    }


    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @return mixed
     */public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @return mixed
     */public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */public function getPassword()
    {
        return $this->password;
    }

    public function getType()
    {
        return $this->type;
    }

    public static function is_email_exict($connect , $email)
    {
        global $connect;
        $is_exict = true;
        $query = 'SELECT email FROM ' . static::$table_name . ' WHERE ' . 'email ' . ' = ' . '"' . $email . '"';
        $result = $connect->query($query);
        $employe = $result->fetchAll();
        if($employe == null)
        {
            $is_exict = false;
        }
        else
        {
            $is_exict = true;
        }
        return $is_exict;
    }


}