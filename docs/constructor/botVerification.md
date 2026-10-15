# botVerification

**Description** : *Describes a bot verification icon &raquo;*

**Layer** : 229

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
	bot_id : -1554372009319996458,
	icon : -7283999395040635663,
	description : 'g0DAnS6rhcvdHKti',
);
```