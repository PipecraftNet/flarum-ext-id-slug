<?php

/*
 * This file is part of PipecraftNet/flarum-ext-id-slug.
 *
 * Copyright (c) Pipecraft.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pipecraft\IdSlug\Discussion;

use Flarum\Database\AbstractModel;
use Flarum\Discussion\DiscussionRepository;
use Flarum\Http\SlugDriverInterface;
use Flarum\User\User;
use Illuminate\Support\Str;

class IdSlugDriver implements SlugDriverInterface
{
    /**
     * @var DiscussionRepository
     */
    protected $discussions;

    public function __construct(DiscussionRepository $discussions)
    {
        $this->discussions = $discussions;
    }

    public function toSlug(AbstractModel $instance): string
    {
        // TODO: Read settings
        if (true) {
            $title = $instance->title;
            $slug = Str::slug($title, '-', 'en');
            $slug_test = Str::slug($title, '-', 'zh-Hans');

            if ($slug == $slug_test) {
                // Use default slug driver
                return $instance->id . (trim($slug) ? '-' . $slug : '');
            } else {
                return $instance->id;
            }
        }
        return $instance->id;
    }

    public function fromSlug(string $slug, User $actor): AbstractModel
    {
        if (strpos($slug, '-')) {
            $slug_array = explode('-', $slug);
            $slug = $slug_array[0];
        }

        return $this->discussions->findOrFail($slug, $actor);
    }
}
