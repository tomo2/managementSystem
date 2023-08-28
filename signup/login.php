<?php


class UserLogin
{
    public static function  createUser($userData)
    {
        $result = false;
        $sql = 'INSERT INTO users (name, email, password) VALUE(?, ?, ?)';


        $arr[] = $userData['username'];
        $arr[] = $userData['email'];
        // パスワードのハッシュ化
        $arr[] = password_hash($userData['password'], PASSWORD_DEFAULT);

        try {
            $stmt = connect()->prepare($sql);
            $result = $stmt->execute($arr);
            return;
        } catch(\Exception $e) {
            return $result;
        }
    }
}