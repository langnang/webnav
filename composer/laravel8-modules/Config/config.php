<?php

use App\Support\Helpers\ModuleHelper;

return [
    'name' => 'WebStack',
    'slug' => 'webstack',
    'title' => 'WebStack',
    'theme' => 'default',
    'content' => [],
    'admin' => [
        'sidebar' => [
            ["path" => "/webstack", "title" => 'WebStack', "icon" => "fas fa-layer-group", "slug" => "", "children" => [
                ["path" => "/metas", "title" => "标识管理", "children" => [
                    ["path" => "/insert", "title" => "新增", "visible" => false,],
                    ["path" => "/update/{id?}", "title" => "编辑", "visible" => false,],
                    ["path" => "/select/{id}", "title" => "详情", "visible" => false,],
                ],],
                ["path" => "/contents", "title" => "内容管理",],
                ["path" => "/comments", "title" => "评论管理",],
                ["path" => "/links", "title" => "外链管理",],
                ["path" => "/options", "title" => "应用配置",],
            ]],
        ]
    ],
    'db_initialization' => [
        'metas' => [],
        'contents' => [],
        'fields' => [],
        'comments' => [],
        'links' => [],
        'relationships' => [],
        'users' => [],
        'options' => [],
    ],

];