<?php

/*
 * This file is part of Miguel Simões generic packages.
 *
 * (c) Miguel Simões <msimoes@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MiguelSimoes\Core\Stringable;

/**
 * Definition of the public contract on an object that requires a string
 * representation
 *
 * @author Miguel Simões <msimoes@gmail.com>
 */
interface Stringable
{
    /**
     * Requires implementation of the string representation of the object
     *
     * @return string
     */
    public function __toString(): string;
}
