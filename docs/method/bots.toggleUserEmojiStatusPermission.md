# bots.toggleUserEmojiStatusPermission

**Description** : *Allow or prevent a bot from changing our emoji status »*

**Layer** : 211

```tl
bots.toggleUserEmojiStatusPermission#6de6392 bot:InputUser enabled:Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The bot |
| <mark>enabled</mark> | [`Bool`](type/Bool) | Whether to allow or prevent the bot from changing our emoji status |

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
$bool = $client->bots->toggleUserEmojiStatusPermission(
	bot : $client->inputUserEmpty(),
	enabled : $client->boolFalse(),
);
```