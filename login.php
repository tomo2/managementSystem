<?php


class UserLogin
{
    public static function  createUser($userData)
    {
        $result = false;
        $sql = 'INSERT INTO users (name, email, password) VALUE(?, ?, ?)';

    }
}