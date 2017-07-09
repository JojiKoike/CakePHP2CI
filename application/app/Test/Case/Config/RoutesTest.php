<?php

/**
 * Routing Test
 */
class RoutesTest extends CakeTestCase
{
    /**
     * テストの名前、入力値、期待値
     * @return [type] [description]
     */
    public function exampleUrls()
    {
        return [
            ['新規投稿', '/blogs/new',
                ['controller' => 'posts', 'action' => 'add']
            ],
            ['記事一覧', '/hoge/blog',
                ['controller' => 'posts', 'action' => 'index',
                'user_account' => 'hoge']]
        ];
    }


/**
 * @dataProvider exampleUrls
 */
    public function test配列形式からURL文字列に変換できること($name, $string, $array)
    {
        $this->assertEquals($string, Router::url($array), $name);
    }

/**
 * @dataProvider exampleUrls
 */
    public function testURL文字列から逆引きできること($name, $string, $array)
    {
        $default = ['controller'=>'', 'action'=>'',
                    'pass'=>[], 'named'=>[], 'plugin'=>null];
        var_dump(array_merge($default, $array));
        var_dump(Router::parse($string));
        $this->assertEquals(array_merge($default, $array), Router::parse($string), $name);
    }
}
