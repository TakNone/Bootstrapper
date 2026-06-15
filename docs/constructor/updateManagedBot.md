# updateManagedBot

**Layer** : 227

```tl
updateManagedBot#4880ed9a user_id:long bot_id:long qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | NOTHING |
| <mark>bot_id</mark> | [`long`](type/long) | NOTHING |
| <mark>qts</mark> | [`int`](type/int) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateManagedBot(
	user_id : 1939905257293832758,
	bot_id : -2860181980961647465,
	qts : 69,
);
```