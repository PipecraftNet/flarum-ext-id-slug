# ID Slug by Pipecraft

English | [中文](README-cn.md)

---

A [Flarum](http://flarum.org) extension. Use `id` as the `slug` in the discussion URL.

- AS-IS:
  - http://exmaple.com/d/123-hello-world
  - http://exmaple.com/d/123-hello-world/3
- TO-BE:
  - http://exmaple.com/d/123
  - http://exmaple.com/d/123/3

### Installation

```sh
composer require pipecraft/flarum-ext-id-slug
```

### Updating

```sh
composer update pipecraft/flarum-ext-id-slug
```

### How to Update the Slug of Existing Discussions

You can run this SQL to clear all slugs. 

```sql
UPDATE `flarum_discussions` SET `slug`='' WHERE <condition>;
```

Or you can rename the title of the discussion to update the slug.