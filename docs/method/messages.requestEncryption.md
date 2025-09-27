# messages.requestEncryption

**Description** : *Sends a request to start a secret chat to the user*

**Layer** : 214

```tl
messages.requestEncryption#f64daf43 user_id:InputUser random_id:int g_a:bytes = EncryptedChat;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | User ID |
| <mark>random_id</mark> | [`int`](type/int) | Unique client request ID required to prevent resending. This also doubles as the chat ID |
| <mark>g_a</mark> | [`bytes`](type/bytes) | A = g ^ a mod p, see Wikipedia |

---

## Result

[EncryptedChat](type/EncryptedChat)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **DH_G_A_INVALID** | `400` | g_a invalid |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$encryptedChat = $client->messages->requestEncryption(
	user_id : $client->inputUserEmpty(),
	random_id : 25,
	g_a : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```