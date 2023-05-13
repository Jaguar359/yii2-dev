<?php
namespace app\models;

class Balance
{
    public int    $user_id  = 1;
    public string $currency = 'default';
    public int    $balance_result;

    /**
     * @return int
     */
    public function getBalance()
    {
        return $this->balance_result;
    }
}