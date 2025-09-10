# channels.checkSearchPostsFlood

**Layer** : 214

```tl
channels.checkSearchPostsFlood#22567115 flags:# query:flags.0?string = SearchPostsFlood;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **query** | [`flags.0?string`](type/string) | NOTHING |

---

## Result

[SearchPostsFlood](type/SearchPostsFlood)

---

## Example

```php
$searchPostsFlood = $client->channels->checkSearchPostsFlood(
	query : '9ivlq467eFf3oL2y',
);
```