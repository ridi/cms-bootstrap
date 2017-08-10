<?php

use Phinx\Seed\AbstractSeed;

class Cms extends AbstractSeed
{
    public function run()
    {
        $this->createUsers();
        $this->createMenus();
    }

    public function createUsers()
    {
        $data = [
            [
                'id' => 'admin',
                'name' => '관리자',
                'passwd' => '',
                'team' => '관리자',
                'is_use' => 1,
                'reg_date' => date('Y-m-d H:i:s'),
                'azure_id' => 'admin',
            ],
        ];

        $posts = $this->table('tb_admin2_user');
        $posts->insert($data)->save();
    }

    public function createMenus()
    {
        $data = [
            [
                'menu_title' => '예제',
                'menu_url' => '#',
                'menu_deep' => 0,
                'menu_order' => 0,
                'is_use' => 1,
                'is_show' => 1,
                'is_newtab' => 0,
                'reg_date' => date('Y-m-d H:i:s'),
            ],
            [
                'menu_title' => '메뉴',
                'menu_url' => '/example/home',
                'menu_deep' => 1,
                'menu_order' => 1,
                'is_use' => 1,
                'is_show' => 1,
                'is_newtab' => 0,
                'reg_date' => date('Y-m-d H:i:s'),
            ],
            [
                'menu_title' => '링크1',
                'menu_url' => '/example/resource1',
                'menu_deep' => 1,
                'menu_order' => 2,
                'is_use' => 1,
                'is_show' => 1,
                'is_newtab' => 0,
                'reg_date' => date('Y-m-d H:i:s'),
            ],
            [
                'menu_title' => '링크2',
                'menu_url' => '/example/resource2',
                'menu_deep' => 1,
                'menu_order' => 3,
                'is_use' => 1,
                'is_show' => 1,
                'is_newtab' => 0,
                'reg_date' => date('Y-m-d H:i:s'),
            ],
        ];

        $posts = $this->table('tb_admin2_menu');
        $posts->insert($data)->save();
    }

}
