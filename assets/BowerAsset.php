<?php


namespace app\assets;


use carono\yii2bower\Asset;

class BowerAsset extends Asset
{
    public $packages = [
        'remote-modal',
        'fontawesome' => [
            'css' => [
                'css/all.css'
            ]
        ]
    ];
}