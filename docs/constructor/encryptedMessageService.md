# encryptedMessageService

**Description** : *Encrypted service message*

**Layer** : 233

```tl
encryptedMessageService#23734b06 random_id:long chat_id:int date:int bytes:bytes = EncryptedMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>random_id</mark> | [`long`](type/long) | Random message ID, assigned by the author of message. See here » for more info on random ID deduplication and updateMessageID mapping |
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
	random_id : 1237474170296948420,
	chat_id : 78,
	date : 38,
	bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```