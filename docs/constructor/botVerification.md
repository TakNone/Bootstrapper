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
	bot_id : -5249429185158028800,
	icon : 6507923314317455977,
	description : 'NFXLinSxzPd7QrIM',
);
```