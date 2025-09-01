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
	bot_id : 3116234907416706349,
	icon : 2373750307102805754,
	description : 's57HUm8yJpbGTQ1M',
);
```