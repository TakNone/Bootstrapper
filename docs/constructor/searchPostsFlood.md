# searchPostsFlood

**Description** : *Indicates if the specified global post search &raquo; requires payment*

**Layer** : 216

```tl
searchPostsFlood#3e0b5b6a flags:# query_is_free:flags.0?true total_daily:int remains:int wait_till:flags.1?int stars_amount:long = SearchPostsFlood;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **query_is_free** | [`flags.0?true`](type/true) | The specified query is free (and it will not use up free search slots) |
| <mark>total_daily</mark> | [`int`](type/int) | Total number of daily free search slots |
| <mark>remains</mark> | [`int`](type/int) | Remaining number of free search slots |
| **wait_till** | [`flags.1?int`](type/int) | If there are no more search slots, specifies the unixtime when more search slots will be available |
| <mark>stars_amount</mark> | [`long`](type/long) | The number of Telegram Stars to pay for each non-free search |

---

## Type

[SearchPostsFlood](type/SearchPostsFlood)

---

## Example

```php
$searchPostsFlood = $client->searchPostsFlood(
	query_is_free : true,
	total_daily : 68,
	remains : 20,
	wait_till : 3,
	stars_amount : -1068952001075689223,
);
```