# botVerification

**Description** : *Describes a bot verification icon &raquo;*

**Layer** : 218

```tl
botVerification#f93cd45c bot_id:long icon:long description:string = BotVerification;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot_id</mark> | [`long`](type/long) | ID of the bot that verified this peer |
| <mark>icon</mark> | [`long`](type/long) | Verification icon |
| <mark>description</mark> | [`string`](type/string) | Verification description |

---

## Type

[BotVerification](type/BotVerification)

---

## Example

```php
$botVerification = $client->botVerification(
	bot_id : -3991186052288933199,
	icon : -4296826149816570934,
	description : '4lf5wz0BFscOdm9W',
);
```