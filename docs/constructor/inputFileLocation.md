# inputFileLocation

**Description** : *DEPRECATED location of a photo*

**Layer** : 216

```tl
inputFileLocation#dfdaabe1 volume_id:long local_id:int secret:long file_reference:bytes = InputFileLocation;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>volume_id</mark> | [`long`](type/long) | Server volume |
| <mark>local_id</mark> | [`int`](type/int) | File identifier |
| <mark>secret</mark> | [`long`](type/long) | Check sum to access the file |
| <mark>file_reference</mark> | [`bytes`](type/bytes) | File reference |

---

## Type

[InputFileLocation](type/InputFileLocation)

---

## Example

```php
$inputFileLocation = $client->inputFileLocation(
	volume_id : 9164163913991053063,
	local_id : 80,
	secret : 171208448664443438,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```