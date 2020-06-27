<?php
class Manager
{
	protected function dbconnect()
    {
        try 
        {
            $db = new \PDO('mysql:host=localhost;dbname=Blog_ecrivain;charset=utf8', 'root', 'root');
            return $db;
		} 

        catch (Exception $e) 
        {
            die('Erreur : '.$e->getMessage());
        }
    }
}