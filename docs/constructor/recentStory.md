# recentStory

**Layer** : 218

```tl
recentStory#711d692d flags:# live:flags.0?true max_id:flags.1?int = RecentStory;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **live** | [`flags.0?true`](type/true) | NOTHING |
| **max_id** | [`flags.1?int`](type/int) | NOTHING |

---

## Type

[RecentStory](type/RecentStory)

---

## Example

```php
$recentStory = $client->recentStory(
	live : true,
	max_id : 29,
);
```