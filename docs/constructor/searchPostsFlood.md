# searchPostsFlood

**Layer** : 214

```tl
searchPostsFlood#3e0b5b6a flags:# query_is_free:flags.0?true total_daily:int remains:int wait_till:flags.1?int stars_amount:long = SearchPostsFlood;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **query_is_free** | [`flags.0?true`](type/true) | NOTHING |
| <mark>total_daily</mark> | [`int`](type/int) | NOTHING |
| <mark>remains</mark> | [`int`](type/int) | NOTHING |
| **wait_till** | [`flags.1?int`](type/int) | NOTHING |
| <mark>stars_amount</mark> | [`long`](type/long) | NOTHING |

---

## Type

[SearchPostsFlood](type/SearchPostsFlood)

---

## Example

```php
$searchPostsFlood = $client->searchPostsFlood(
	query_is_free : true,
	total_daily : 88,
	remains : 92,
	wait_till : 34,
	stars_amount : -8644607011374637947,
);
```