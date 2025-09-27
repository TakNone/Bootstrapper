# inputEncryptedFile

**Description** : *Sets forwarded encrypted file for attachment*

**Layer** : 214

```tl
inputEncryptedFile#5a17b5e5 id:long access_hash:long = InputEncryptedFile;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | File ID, value of id parameter from encryptedFile |
| <mark>access_hash</mark> | [`long`](type/long) | Checking sum, value of access_hash parameter from encryptedFile |

---

## Type

[InputEncryptedFile](type/InputEncryptedFile)

---

## Example

```php
$inputEncryptedFile = $client->inputEncryptedFile(
	id : 3822970526572208470,
	access_hash : 6929125437739614834,
);
```