# updateEncryption

**Description** : *Change of state in an encrypted chat*

**Layer** : 218

```tl
updateEncryption#b4a2e88d chat:EncryptedChat date:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat</mark> | [`EncryptedChat`](type/EncryptedChat) | Encrypted chat |
| <mark>date</mark> | [`int`](type/int) | Date of change |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateEncryption(
	chat : $client->encryptedChatEmpty(
		id : 63,
	),
	date : 89,
);
```