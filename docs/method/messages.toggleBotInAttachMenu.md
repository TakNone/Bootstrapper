# messages.toggleBotInAttachMenu

**Description** : *Enable or disable web bot attachment menu »*

**Layer** : 211

```tl
messages.toggleBotInAttachMenu#69f59d69 flags:# write_allowed:flags.0?true bot:InputUser enabled:Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **write_allowed** | [`flags.0?true`](type/true) | Whether the user authorizes the bot to write messages to them, if requested by attachMenuBot.request_write_access |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | Bot ID |
| <mark>enabled</mark> | [`Bool`](type/Bool) | Toggle |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |

---

## Example

```php
$bool = $client->messages->toggleBotInAttachMenu(
	write_allowed : true,
	bot : $client->inputUserEmpty(),
	enabled : $client->boolFalse(),
);
```