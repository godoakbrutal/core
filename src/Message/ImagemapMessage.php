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
use LineMob\Core\Template\Imagemap\ImagemapTemplate;

/**
 * @author WATCHDOGS <godoakbrutal@gmail.com>
 */
class ImagemapMessage extends AbstractMessage
{
    /**
     * {@inheritdoc}
     */
    public function supported(AbstractCommand $command)
    {
        return $command->message instanceof ImagemapTemplate;
    }
}
