# inputEncryptedFileLocation

**Description** : *Location of encrypted secret chat file*

**Layer** : 216

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
	id : 8928070278471306612,
	access_hash : -3977855471018470369,
);
```