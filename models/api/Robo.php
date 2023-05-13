<?php

class Robo
{
    public string $from_wallet;
    public string $to_wallet;
    public object $payment;
    public string $token;

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