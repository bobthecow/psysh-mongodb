<?php

/*
 * This file is part of Psy Shell
 *
 * (c) 2012-2015 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (class_exists('Psy\\Plugin\\PluginManager')) {
    \Psy\MongodbPlugin\Plugin::register();
}
