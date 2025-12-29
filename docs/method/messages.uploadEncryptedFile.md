# messages.uploadEncryptedFile

**Description** : *Upload encrypted file and associate it to a secret chat \(without actually sending it to the chat\)*

**Layer** : 218

```tl
messages.uploadEncryptedFile#5057c497 peer:InputEncryptedChat file:InputEncryptedFile = EncryptedFile;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputEncryptedChat`](type/InputEncryptedChat) | The secret chat to associate the file to |
| <mark>file</mark> | [`InputEncryptedFile`](type/InputEncryptedFile) | The file |

---

## Result

[EncryptedFile](type/EncryptedFile)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |

---

## Example

```php
$encryptedFile = $client->messages->uploadEncryptedFile(
	peer : $client->inputEncryptedChat(
		chat_id : 30,
		access_hash : 8276660879855806812,
	),
	file : $client->inputEncryptedFileEmpty(),
);
```