# encryptedMessage

**Description** : *Encrypted message*

**Layer** : 229

```tl
encryptedMessage#ed18c118 random_id:long chat_id:int date:int bytes:bytes file:EncryptedFile = EncryptedMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>random_id</mark> | [`long`](type/long) | Random message ID, assigned by the author of message. See here » for more info on random ID deduplication and updateMessageID mapping |
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
	random_id : 2614426238410676546,
	chat_id : 94,
	date : 20,
	bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	file : $client->encryptedFileEmpty(),
);
```