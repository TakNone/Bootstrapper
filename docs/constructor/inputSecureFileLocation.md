# inputSecureFileLocation

**Description** : *Location of encrypted telegram passport file*

**Layer** : 225

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
	id : -2689879666126467003,
	access_hash : -8361585860889089895,
);
```