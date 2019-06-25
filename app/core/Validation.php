<?php 

class Validation {
    private $is_valid;
    private $errors = array();

    function __construct() {
        $this->is_valid = false;

    }
    public function is_unique($data, $column,  $model) {
       $query = $model->where([$column => $data])->first();

       $this->is_valid = $query == null ?  true: false;

       if (!$this->is_valid) {
        array_push($this->errors, 'The '.$column . " has already been taken");
       }

       return $this;

    }

    public function uniformPasswords($password1, $password2) {
        $password1 === $password2 ? null : array_push($this->errors, 'The passwords do not match');
        return $this;
    }

    public function getErrors() {
        return $this->errors;
    }

    public function isSuccess() {
        return $this->errors == null ? true: false;
    }

    public function requires($data, array $fields) {
        foreach($fields as $field) {
            if (!array_key_exists($field, $data)) {
                array_push($this->errors, $field . " is required");
            }
        }
        return $this;
    }

    public function redirect() {
        if ($this->errors) {
        $_SESSION['validation_errors'] = $this->errors;
            redirect(back());
        }
    }

    public function valid_time_range ($time1, $time2) {
        if($time1 >= $time2) array_push($this->errors, 'The start time must be lesser than the end time');
        return $this;
    }

}
