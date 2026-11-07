# encryptedFile

**Description** : *Encrypted file*

**Layer** : 233

```tl
encryptedFile#a8008cd8 id:long access_hash:long size:long dc_id:int key_fingerprint:int = EncryptedFile;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | File ID |
| <mark>access_hash</mark> | [`long`](type/long) | Checking sum depending on user ID |
| <mark>size</mark> | [`long`](type/long) | File size in bytes |
| <mark>dc_id</mark> | [`int`](type/int) | Number of data center |
| <mark>key_fingerprint</mark> | [`int`](type/int) | 32-bit fingerprint of key used for file encryption |

---

## Type

[EncryptedFile](type/EncryptedFile)

---

## Example

```php
$encryptedFile = $client->encryptedFile(
	id : -8352315697729856035,
	access_hash : -554918229473632234,
	size : -2336976273641145248,
	dc_id : 85,
	key_fingerprint : 39,
);
```