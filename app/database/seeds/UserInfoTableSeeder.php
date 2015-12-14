<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserInfoTableSeeder extends Seeder {

    public function run()
    {
        $userinfo = [

                [
                    'fullname'  =>'admin',
                    'user_id'   =>'1',
                    'address'  =>'Uniliver',
                    'avatar_url' => null,
                    'icon_url'     => null,
                    'email'     =>  'farmaerbazar@gmail.com',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]

        ];

        DB::table('userinfo')->insert($userinfo);
    }

}