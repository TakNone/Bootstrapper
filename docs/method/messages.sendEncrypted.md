# messages.sendEncrypted

**Description** : *Sends a text message to a secret chat*

**Layer** : 214

```tl
messages.sendEncrypted#44fa7a15 flags:# silent:flags.0?true peer:InputEncryptedChat random_id:long data:bytes = messages.SentEncryptedMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **silent** | [`flags.0?true`](type/true) | Send encrypted message without a notification |
| <mark>peer</mark> | [`InputEncryptedChat`](type/InputEncryptedChat) | Secret chat ID |
| <mark>random_id</mark> | [`long`](type/long) | Unique client message ID, necessary to avoid message resending |
| <mark>data</mark> | [`bytes`](type/bytes) | TL-serialization of DecryptedMessage type, encrypted with a key that was created during chat initialization |

---

## Result

[messages.SentEncryptedMessage](type/messages.SentEncryptedMessage)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **DATA_INVALID** | `400` | Encrypted data invalid |
| **DATA_TOO_LONG** | `400` | Data too long |
| **ENCRYPTION_DECLINED** | `400` | The secret chat was declined |
| **MSG_WAIT_FAILED** | `500` | A waiting call returned an error |
| **USER_IS_BLOCKED** | `403` | You were blocked by this user |

---

## Example

```php
$messagesSentEncryptedMessage = $client->messages->sendEncrypted(
	silent : true,
	peer : $client->inputEncryptedChat(
		chat_id : 100,
		access_hash : 4966118929666876172,
	),
	random_id : -3949225228417794667,
	data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```