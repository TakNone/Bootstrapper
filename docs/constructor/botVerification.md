# botVerification

**Layer** : 214

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
	bot_id : 5123520290497027344,
	icon : 4282596878139815603,
	description : 'd7Ln4y3VJmXZYPgq',
);
```