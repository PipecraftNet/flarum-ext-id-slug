<?php

/*
 * This file is part of PipecraftNet/flarum-ext-id-slug
 *
 * Copyright (c) Pipecraft.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pipecraft\IdSlug\Listeners;

use Flarum\Discussion\Event\Saving;
use Illuminate\Support\Arr;

class SlugOverwriter
{
    public function handle(Saving $event)
    {
        if (Arr::has($event->data, 'attributes.title')) {
            $event->discussion->slug = '';
        }
    }
}
