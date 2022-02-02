<?php


namespace App\classes;


class User
{
    protected $user = [];

    public function getAllUser()
    {
        $this->user = [
            0 => [
                'name'      => 'Shahabuddin',
                'mobile'    => '123456',
                'location'  =>  'lalbagh'
            ],
            1   => [
                'name'      => 'Rafa',
                'mobile'    => '123456',
                'location'  =>  'lalbagh'
            ],
        ];
    }
}