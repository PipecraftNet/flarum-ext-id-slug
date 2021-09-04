# ID Slug by Pipecraft

这是一个使discussion的URL只包含`id`的[Flarum](http://flarum.org)插件。

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

### 如何更新已有数据

你可以执行一个SQL，类似 

```sql
UPDATE `flarum_discussions` SET `slug`='' WHERE <condition>;
```

或在Flarum页面修改标题，更新slug。