<?php
/**
 * Этот файл является частью расширения модуля веб-приложения GearMagic.
 * 
 * Файл конфигурации установки расширения.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    'id'          => 'gm.be.config.ipblacklist',
    'moduleId'    => 'gm.be.config',
    'name'        => 'IP Blacklist',
    'description' => 'Prevent users from accessing the control panel or site from specified IP addresses',
    'namespace'   => 'Gm\Backend\Config\IpBlackList',
    'path'        => '/gm/gm.be.config.ipblacklist',
    'route'       => 'ipblacklist',
    'locales'     => ['ru_RU', 'en_GB'],
    'permissions' => ['any', 'info'],
    'events'      => [],
    'required'    => [
        ['php', 'version' => '8.2'],
        ['app', 'code' => 'GM MS'],
        ['app', 'code' => 'GM CMS'],
        ['app', 'code' => 'GM CRM'],
        ['module', 'id' => 'gm.be.config']
    ]
];
