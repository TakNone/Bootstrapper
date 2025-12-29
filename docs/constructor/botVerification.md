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
	bot_id : -8044386004286588084,
	icon : 5568750957541444601,
	description : 'GBmc3ri8lb1fLwqs',
);
```