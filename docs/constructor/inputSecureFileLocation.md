# inputSecureFileLocation

**Description** : *Location of encrypted telegram passport file*

**Layer** : 222

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
	id : -2657088104999236854,
	access_hash : -5125573698242895114,
);
```