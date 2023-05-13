<?php

namespace app\models\db;

class Payment
{
    public int    $from_user_id;
    public int    $to_user_id;
    public string $from_wallet;
    public string $to_wallet;
    public object $payment;

    public function validate()
    {
        return true;
    }

    public function send()
    {
        if ($this->validate()) {
            return true;
        }

        return false;
    }
}