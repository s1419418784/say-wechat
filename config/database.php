<?php
/**
 * This file is part of webman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link      http://www.workerman.net/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

return [
    'default' => 'mysql',

    'connections' => [
        'mongodb' => [
    'driver'   => 'mongodb',
    'host'     => '127.0.0.1',
    'port'     =>  27017,
    'database' => 'test',
    'username' => null,
    'password' => null,
    'options' => [
        // here you can pass more settings to the Mongo Driver Manager
        // see https://www.php.net/manual/en/mongodb-driver-manager.construct.php under "Uri Options" for a list of complete parameters that you can use
        'database' => 'admin', // required with Mongo 3+
            ],
        ],
    ],
];
