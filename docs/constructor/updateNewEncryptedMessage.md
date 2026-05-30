# updateNewEncryptedMessage

**Description** : *New encrypted message*

**Layer** : 225

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
		random_id : 6344472334857816447,
		chat_id : 66,
		date : 94,
		bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		file : $client->encryptedFileEmpty(),
	),
	qts : 25,
);
```