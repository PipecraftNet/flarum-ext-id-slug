# ID Slug by Pipecraft

![License](https://img.shields.io/badge/license-MIT-blue.svg) [![Latest Stable Version](https://img.shields.io/packagist/v/pipecraft/flarum-ext-id-slug.svg)](https://packagist.org/packages/fof/transliterator)

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
### How to Use

1. Install extension
2. Enable **ID Slug** extension
3. Basics > Slug Driver(Discussion) > Select **id** slug driver

### ⚠️ Notice

- If you are using the sitemap(fof/sitemap) extension, you need to upgrade to v1.0.1 or above. （[Use Slug Driver system properly](https://github.com/FriendsOfFlarum/sitemap/issues/30)）

### v1.1 VS. v1.0

#### [v1.0](https://github.com/PipecraftNet/flarum-ext-id-slug/tree/v1.0)

- It modifies the slug field of the database directly
- You can use `/d/123` and `/d/234-hello-world` styles at same time if you want
- Zero configuration

#### v1.1
- It uses [Slug Driver System](https://github.com/flarum/core/pull/2456). You can switch between the default slug style and id slug style at any time without losing slug data
- You can't use `/d/123` and `/d/234-hello-world` styles at same time
- After enabling this extension, you must switch the slug driver on the Basics page

If you want to use the [v1.0 version](https://github.com/PipecraftNet/flarum-ext-id-slug/tree/v1.0), install the extension like this
```sh
composer require pipecraft/flarum-ext-id-slug:1.0.*
```
