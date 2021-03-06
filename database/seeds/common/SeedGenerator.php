<?php

class SeedGenerator
{
    public static $option_events = [
        [
            'category' => ['name' => '胸'],
            'events' => [
                ['name' => 'ベンチプレス'],
                ['name' => 'インクラインダンベルプレス'],
            ],
        ], [
            'category' => ['name' => '背中'],
            'events' => [
                ['name' => 'チンニング'],
                ['name' => 'ラットプルダウン'],
            ],
        ], [
            'category' => ['name' => '脚'],
            'events' => [
                ['name' => 'スクワット'],
                ['name' => 'デッドリフト'],
            ],
        ],
    ];

    // Fakerインスタンスを返す
    public static function getFaker(): \Faker\Generator
    {
        return Faker\Factory::create('ja_JP');
    }
}

?>
