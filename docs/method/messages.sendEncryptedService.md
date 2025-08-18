# messages.sendEncryptedService

**Description** : *Sends a service message to a secret chat*

**Layer** : 211

```tl
messages.sendEncryptedService#32d439a4 peer:InputEncryptedChat random_id:long data:bytes = messages.SentEncryptedMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputEncryptedChat`](type/InputEncryptedChat) | Secret chat ID |
| <mark>random_id</mark> | [`long`](type/long) | Unique client message ID required to prevent message resending |
| <mark>data</mark> | [`bytes`](type/bytes) | TL-serialization of  DecryptedMessage type, encrypted with a key generated during chat initialization |

---

## Result

[messages.SentEncryptedMessage](type/messages.SentEncryptedMessage)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **DATA_INVALID** | `400` | Encrypted data invalid |
| **ENCRYPTION_DECLINED** | `400` | The secret chat was declined |
| **ENCRYPTION_ID_INVALID** | `400` | The provided secret chat ID is invalid |
| **MSG_WAIT_FAILED** | `500` | A waiting call returned an error |
| **USER_DELETED** | `403` | You can't send this secret message because the other participant deleted their account |
| **USER_IS_BLOCKED** | `403` | You were blocked by this user |

---

## Example

```php
$messagesSentEncryptedMessage = $client->messages->sendEncryptedService(
	peer : $client->inputEncryptedChat(
		chat_id : 93,
		access_hash : 3467353596317004173,
	),
	random_id : -3840035219003709024,
	data : '?5???LiveProtoB????',
);
```