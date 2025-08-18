# messages.acceptEncryption

**Description** : *Confirms creation of a secret chat*

**Layer** : 211

```tl
messages.acceptEncryption#3dbc0415 peer:InputEncryptedChat g_b:bytes key_fingerprint:long = EncryptedChat;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputEncryptedChat`](type/InputEncryptedChat) | Secret chat ID |
| <mark>g_b</mark> | [`bytes`](type/bytes) | B = g ^ b mod p, see Wikipedia |
| <mark>key_fingerprint</mark> | [`long`](type/long) | 64-bit fingerprint of the received key |

---

## Result

[EncryptedChat](type/EncryptedChat)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **ENCRYPTION_ALREADY_ACCEPTED** | `400` | Secret chat already accepted |
| **ENCRYPTION_ALREADY_DECLINED** | `400` | The secret chat was already declined |

---

## Example

```php
$encryptedChat = $client->messages->acceptEncryption(
	peer : $client->inputEncryptedChat(
		chat_id : 2,
		access_hash : -5292969869618616185,
	),
	g_b : '?0C?LiveProto????',
	key_fingerprint : -7399083386871604621,
);
```