# ID Slug by Pipecraft

![License](https://img.shields.io/badge/license-MIT-blue.svg) [![Latest Stable Version](https://img.shields.io/packagist/v/pipecraft/flarum-ext-id-slug.svg)](https://packagist.org/packages/fof/transliterator)

[English](README.md) | 中文

---

这是一个能使discussion的URL只包含`id`的[Flarum](http://flarum.org)插件。

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

### 如何使用

1. 安装插件
2. 后台管理 > ID Slug > 开启插件
3. 常规 > Slug Driver(Discussion) > 选择 **id** 类型

### ⚠️注意事项

- 如果使用sitemap(fof/sitemap)插件，需要安装1.0.1版本以上 （[Use Slug Driver system properly](https://github.com/FriendsOfFlarum/sitemap/issues/30)）

### v1.1 VS. v1.0

#### [v1.0](https://github.com/PipecraftNet/flarum-ext-id-slug/blob/v1.0/README-cn.md)

- 采用的方式是直接修改数据库的slug字段，是不可逆的
- 可以混合使用 `/d/123` 和 `/d/234-hello-world`模式，只要slug有值。
- 零配置，安装启用即生效

#### v1.1

- 采用的方式是[Slug Driver System](https://github.com/flarum/core/pull/2456)机制。它并不修改数据库的slug字段，可以随时切换到默认slug模式。
- 无法混合使用 `/d/123` 和 `/d/234-hello-world`模式。
- 启用后，需要在常规页里选择Slug Driver

如果想使用[v1.0版本](https://github.com/PipecraftNet/flarum-ext-id-slug/tree/v1.0)，请使用下面命令安装。

```sh
composer require pipecraft/flarum-ext-id-slug:1.0.*
```
