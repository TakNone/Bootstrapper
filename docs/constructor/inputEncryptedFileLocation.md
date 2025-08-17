# inputEncryptedFileLocation

**Description** : *Location of encrypted secret chat file*

**Layer** : 211

```tl
inputEncryptedFileLocation#f5235d55 id:long access_hash:long = InputFileLocation;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | File ID, id parameter value from encryptedFile |
| <mark>access_hash</mark> | [`long`](type/long) | Checksum, access_hash parameter value from encryptedFile |

---

## Type

[InputFileLocation](type/InputFileLocation)

---

## Example

```php
$inputFileLocation = $client->inputEncryptedFileLocation(
	id : 558062758665768877,
	access_hash : -6402839652923145663,
);
```