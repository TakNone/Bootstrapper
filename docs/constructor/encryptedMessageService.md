# encryptedMessageService

**Description** : *Encrypted service message*

**Layer** : 218

```tl
encryptedMessageService#23734b06 random_id:long chat_id:int date:int bytes:bytes = EncryptedMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>random_id</mark> | [`long`](type/long) | Random message ID, assigned by the author of message |
| <mark>chat_id</mark> | [`int`](type/int) | ID of encrypted chat |
| <mark>date</mark> | [`int`](type/int) | Date of sending |
| <mark>bytes</mark> | [`bytes`](type/bytes) | TL-serialization of the DecryptedMessage type, encrypted with the key created at chat initialization |

---

## Type

[EncryptedMessage](type/EncryptedMessage)

---

## Example

```php
$encryptedMessage = $client->encryptedMessageService(
	random_id : -3033820580078859115,
	chat_id : 71,
	date : 78,
	bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```