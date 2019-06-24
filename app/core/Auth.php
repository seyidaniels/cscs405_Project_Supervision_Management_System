<?php

class Auth {
    public static function login (array $data) {
            $user = null;
            if (($data['type']) == 'supervisor') {
                $user = Supervisor::where(['email' => $data['email']])->first();
            }else {
                $user = Student::where(['email' => $data['email']])->first();
            }
            if ($user != null) {
                if (password_verify($data['password'], $user->password))  {
                    SELF::authenticatesUser($user->id, $data['type']);
                    return true;
                }
                SELF::logsError("Invalid Password Entered");
                return false;
            }
            SELF::logsError("Cannot find ".$data['type']." with email '".$data['email']."'");
            return false;
    }

    public static function user() {
        if ($_SESSION['logged_in'] && $_SESSION['user_id'] && $_SESSION['auth_user_type']) {
            return $_SESSION['auth_user_type'] == 'supervisor' ? Supervisor::find($_SESSION['user_id']) : Student::find($_SESSION['user_id']);
        }
    }

    protected function authenticatesUser($user_id, $type) {
        $_SESSION['logged_in'] = true;
        $_SESSION['user_id'] = $user_id;
        $_SESSION['auth_user_type'] = $type;
    }

    protected function logsError($message) {
        $_SESSION['error'] = $message;
    }

}