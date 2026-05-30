# inputEncryptedFile

**Description** : *Sets forwarded encrypted file for attachment*

**Layer** : 225

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
	id : -9008568774717646693,
	access_hash : 50328599965270849,
);
```