<?php

/*
 * This file is part of Psy Shell
 *
 * (c) 2012-2015 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\MongodbPlugin;

use Psy\MongodbPlugin\Matcher\MongoClientMatcher;
use Psy\MongodbPlugin\Matcher\MongoDatabaseMatcher;
use Psy\MongodbPlugin\Presenter\MongoCursorPresenter;
use Psy\Plugin\AbstractPlugin;

/**
 * A MongoDB Plugin for PsySH.
 */
class Plugin extends AbstractPlugin
{
    /**
     * {@inheritDoc}
     *
     * @return array MongoDB Presenters
     */
    public static function getPresenters()
    {
        return array(
            new MongoCursorPresenter(),
        );
    }

    /**
     * {@inheritDoc}
     *
     * @return array MongoDB TabCompletion Matchers
     */
    public static function getMatchers()
    {
        return array(
            new MongoClientMatcher(),
            new MongoDatabaseMatcher(),
        );
    }
}
