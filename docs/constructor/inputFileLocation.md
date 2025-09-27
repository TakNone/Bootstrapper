# inputFileLocation

**Description** : *DEPRECATED location of a photo*

**Layer** : 214

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
	volume_id : -3463581118478962643,
	local_id : 76,
	secret : -8439151061803927905,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```