# updateNewEncryptedMessage

**Description** : *New encrypted message*

**Layer** : 211

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
		random_id : 2400227542882137193,
		chat_id : 78,
		date : 90,
		bytes : ':?RL>LiveProto??)?$',
		file : $client->encryptedFileEmpty(),
	),
	qts : 98,
);
```