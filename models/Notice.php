<?php

namespace app\models;

class Notice
{
    public int    $for_user_id;
    public int    $status;
    public string $title;
    public string $content;

    public function findAll()
    {
        $notices = [];

        return $notices;
    }

    public function view()
    {
        return true;
    }
}