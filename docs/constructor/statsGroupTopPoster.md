# statsGroupTopPoster

**Description** : *Information about an active user in a supergroup*

**Layer** : 216

```tl
statsGroupTopPoster#9d04af9b user_id:long messages:int avg_chars:int = StatsGroupTopPoster;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | User ID |
| <mark>messages</mark> | [`int`](type/int) | Number of messages for statistics period in consideration |
| <mark>avg_chars</mark> | [`int`](type/int) | Average number of characters per message |

---

## Type

[StatsGroupTopPoster](type/StatsGroupTopPoster)

---

## Example

```php
$statsGroupTopPoster = $client->statsGroupTopPoster(
	user_id : 9116971028915356249,
	messages : 19,
	avg_chars : 54,
);
```