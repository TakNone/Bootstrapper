# encryptedMessageService

**Description** : *Encrypted service message*

**Layer** : 211

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
	random_id : 7169406779455468721,
	chat_id : 69,
	date : 50,
	bytes : '?1?+?LiveProto?e' . "\0" . '',
);
```