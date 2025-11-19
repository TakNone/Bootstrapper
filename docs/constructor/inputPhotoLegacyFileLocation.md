# inputPhotoLegacyFileLocation

**Description** : *DEPRECATED legacy photo file location*

**Layer** : 218

```tl
inputPhotoLegacyFileLocation#d83466f3 id:long access_hash:long file_reference:bytes volume_id:long local_id:int secret:long = InputFileLocation;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | Photo ID |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash |
| <mark>file_reference</mark> | [`bytes`](type/bytes) | File reference |
| <mark>volume_id</mark> | [`long`](type/long) | Volume ID |
| <mark>local_id</mark> | [`int`](type/int) | Local ID |
| <mark>secret</mark> | [`long`](type/long) | Secret |

---

## Type

[InputFileLocation](type/InputFileLocation)

---

## Example

```php
$inputFileLocation = $client->inputPhotoLegacyFileLocation(
	id : 4237924526508508677,
	access_hash : 2225228684025081680,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	volume_id : 8090863365545935174,
	local_id : 68,
	secret : -8127825988548978855,
);
```