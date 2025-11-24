# inputSecureFileLocation

**Description** : *Location of encrypted telegram passport file*

**Layer** : 218

```tl
inputSecureFileLocation#cbc7ee28 id:long access_hash:long = InputFileLocation;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | File ID, id parameter value from secureFile |
| <mark>access_hash</mark> | [`long`](type/long) | Checksum, access_hash parameter value from secureFile |

---

## Type

[InputFileLocation](type/InputFileLocation)

---

## Example

```php
$inputFileLocation = $client->inputSecureFileLocation(
	id : 1156138529457643867,
	access_hash : 8241475245177347394,
);
```