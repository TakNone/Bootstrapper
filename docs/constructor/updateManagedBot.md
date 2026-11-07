# updateManagedBot

**Description** : *Manager bots only: a bot managed by the currently logged in bot was created or updated*

**Layer** : 229

```tl
updateManagedBot#4880ed9a user_id:long bot_id:long qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | The ID of the user that owns of the newly created or edited managed bot |
| <mark>bot_id</mark> | [`long`](type/long) | The ID of the managed bot |
| <mark>qts</mark> | [`int`](type/int) | New qts value, see updates » for more info |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateManagedBot(
	user_id : -8781297043181039206,
	bot_id : 2024788561578308213,
	qts : 28,
);
```