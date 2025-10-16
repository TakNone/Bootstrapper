# botVerification

**Layer** : 216

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
	bot_id : 6417531786916823028,
	icon : 855703775277234217,
	description : 'vNtRoWGDpqUgawQT',
);
```