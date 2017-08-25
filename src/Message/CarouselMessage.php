<?php

/*
 * This file is part of the LineMob package.
 *
 * (c) Ishmael Doss <nukboon@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace LineMob\Core\Message;

use LineMob\Core\Command\AbstractCommand;
use LineMob\Core\Template\Carousel\CarouselTemplate;

/**
 * @author Ishmael Doss <nukboon@gmail.com>
 */
class CarouselMessage extends AbstractMessage
{
    /**
     * {@inheritdoc}
     */
    public function supported(AbstractCommand $command)
    {
        return $command->message instanceof CarouselTemplate;
    }
}
