<?php

/*
 * This file is part of PipecraftNet/flarum-ext-id-slug.
 *
 * Copyright (c) Pipecraft.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pipecraft\IdSlug;

use Flarum\Discussion\Discussion;
use Flarum\Extend;
use Pipecraft\IdSlug\Discussion\IdSlugDriver;

return [
    (new Extend\ModelUrl(Discussion::class))
        ->addSlugDriver('id', IdSlugDriver::class)
];
