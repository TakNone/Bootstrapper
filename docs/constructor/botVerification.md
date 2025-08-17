# botVerification

**Layer** : 211

```tl
botVerification#f93cd45c bot_id:long icon:long description:string = BotVerification;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot_id</mark> | [`long`](type/long) | NOTHING |
| <mark>icon</mark> | [`long`](type/long) | NOTHING |
| <mark>description</mark> | [`string`](type/string) | NOTHING |

---

## Type

[BotVerification](type/BotVerification)

---

## Example

```php
$botVerification = $client->botVerification(
	bot_id : 2627249447346367761,
	icon : -6639251871832689965,
	description : '1nWcoyg5hkCS7BQ2',
);
```