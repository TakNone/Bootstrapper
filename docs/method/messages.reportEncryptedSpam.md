# messages.reportEncryptedSpam

**Description** : *Report a secret chat for spam*

**Layer** : 218

```tl
messages.reportEncryptedSpam#4b0c8c0f peer:InputEncryptedChat = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputEncryptedChat`](type/InputEncryptedChat) | The secret chat to report |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |

---

## Example

```php
$bool = $client->messages->reportEncryptedSpam(
	peer : $client->inputEncryptedChat(
		chat_id : 58,
		access_hash : -6762980282699978397,
	),
);
```