# updateManagedBot

**Layer** : 225

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
	user_id : 6042553949643078050,
	bot_id : 2599728234756710660,
	qts : 84,
);
```