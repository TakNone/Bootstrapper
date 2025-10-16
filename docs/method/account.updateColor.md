# account.updateColor

**Description** : *Update the accent color and background custom emoji &raquo; of the current account*

**Layer** : 216

```tl
account.updateColor#7cefa15d flags:# for_profile:flags.1?true color:flags.2?int background_emoji_id:flags.0?long = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **for_profile** | [`flags.1?true`](type/true) | Whether to change the accent color emoji pattern of the profile page; otherwise, the accent color and emoji pattern of messages will be changed |
| **color** | [`flags.2?int`](type/int) | ID of the accent color palette » to use (not RGB24, see here » for more info) |
| **background_emoji_id** | [`flags.0?long`](type/long) | Custom emoji ID used in the accent color pattern |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **COLOR_INVALID** | `400` | The specified color palette ID was invalid |
| **PREMIUM_ACCOUNT_REQUIRED** | `403` | A premium account is required to execute this action |

---

## Example

```php
$bool = $client->account->updateColor(
	for_profile : true,
	color : 26,
	background_emoji_id : -6593943280540677192,
);
```