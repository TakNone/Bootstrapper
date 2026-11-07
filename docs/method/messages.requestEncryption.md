# messages.requestEncryption

**Description** : *Sends a request to start a secret chat to the user*

**Layer** : 233

```tl
messages.requestEncryption#f64daf43 user_id:InputUser random_id:int g_a:bytes = EncryptedChat;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | User ID |
| <mark>random_id</mark> | [`int`](type/int) | Unique client request ID required to prevent resending. This also doubles as the chat ID. See here » for more info on random ID deduplication and updateMessageID mapping |
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
| **RANDOM_ID_DUPLICATE** | `400` | You provided a random ID that was already used |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |
| **USER_IS_BLOCKED** | `403` | You were blocked by this user |

---

## Example

```php
$encryptedChat = $client->messages->requestEncryption(
	user_id : $client->get_input_user(user : '@TakNone'),
	random_id : 61,
	g_a : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```