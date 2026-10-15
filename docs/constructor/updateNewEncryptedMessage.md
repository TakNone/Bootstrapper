# updateNewEncryptedMessage

**Description** : *New encrypted message*

**Layer** : 229

```tl
updateNewEncryptedMessage#12bcbd9a message:EncryptedMessage qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>message</mark> | [`EncryptedMessage`](type/EncryptedMessage) | Message |
| <mark>qts</mark> | [`int`](type/int) | New qts value, see updates » for more info |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateNewEncryptedMessage(
	message : $client->encryptedMessage(
		random_id : 4476074425773862716,
		chat_id : 44,
		date : 48,
		bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		file : $client->encryptedFileEmpty(),
	),
	qts : 79,
);
```