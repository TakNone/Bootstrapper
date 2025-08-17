# encryptedMessage

**Description** : *Encrypted message*

**Layer** : 211

```tl
encryptedMessage#ed18c118 random_id:long chat_id:int date:int bytes:bytes file:EncryptedFile = EncryptedMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>random_id</mark> | [`long`](type/long) | Random message ID, assigned by the author of message |
| <mark>chat_id</mark> | [`int`](type/int) | ID of encrypted chat |
| <mark>date</mark> | [`int`](type/int) | Date of sending |
| <mark>bytes</mark> | [`bytes`](type/bytes) | TL-serialization of DecryptedMessage type, encrypted with the key created at chat initialization |
| <mark>file</mark> | [`EncryptedFile`](type/EncryptedFile) | Attached encrypted file |

---

## Type

[EncryptedMessage](type/EncryptedMessage)

---

## Example

```php
$encryptedMessage = $client->encryptedMessage(
	random_id : 5274395827333337431,
	chat_id : 25,
	date : 44,
	bytes : 'u/b8?LiveProto2?,??',
	file : $client->encryptedFileEmpty(),
);
```