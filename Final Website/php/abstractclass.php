<?php

class abstractclass
{

    protected static function create_table_schema()
    {
        $all = '';

        foreach (static::$table_schema as $colomn_name)
        {

            $all .=  $colomn_name . ' = :' . $colomn_name . " ,";
        }

        return trim($all,',');
    }



    private function create_excute_array()
    {
        $all = array();

        foreach (static::$table_schema as $colomn_name)
        {
            $all += [':' . $colomn_name => $this->get($colomn_name)];
        }

        return $all;
    }



    private function prepare_query(&$sth) // after prepare a PDOStatment we need bind the paramitr (:name...)
    {
        foreach (static::$table_schema as $colomn_name)
        {
            $sth->bindParam(":{$colomn_name}" , $this->get($colomn_name));
        }
    }



    public function create()
    {
        global $connect;

        $query = 'INSERT INTO ' . static::$table_name . ' SET ' . $this->create_table_schema();

        $sth = $connect->prepare($query);

        $this->prepare_query($sth);

        return $sth->execute();
    }



    public static function get_by_primery_key($primery_key_value)
    {
        global $connect;

        $query = 'SELECT * FROM ' . static::$table_name . ' WHERE '. static::$primery_key . ' = ' . $primery_key_value;

        $result = $connect->query($query);

        $employe = $result->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, get_called_class() , static::$table_schema) ;
        return array_shift($employe);
    }



    public static function get_all()
    {
        global $connect;

        $query = 'SELECT * FROM ' . static::$table_name ;

        $result = $connect->query($query);

        $employe = $result->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, get_called_class() , static::$table_schema) ;

        return $employe;
    }


    public function update()
    {
        global $connect;

        $query = 'UPDATE ' . static::$table_name . ' SET ' . $this->create_table_schema() . ' WHERE ' . static::$primery_key . ' = ' . $this->get(static::$primery_key);

        $sth = $connect->prepare($query);

        $this->prepare_query($sth);

        return $sth->execute();
    }

    public function delete()
    {
        global $connect;

        $query = 'DELETE FROM ' . static::$table_name . ' WHERE ' . static::$primery_key . ' = ' . $this->get(static::$primery_key);

        $sth = $connect->prepare($query);

        $this->prepare_query($sth);

        return $sth->execute();
    }

}