# fileLocationUnavailable

**Description** : *File is currently unavailable*

**Layer** : 214

```tl
fileLocationUnavailable#7c596b46 volume_id:long local_id:int secret:long = FileLocation;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>volume_id</mark> | [`long`](type/long) | NOTHING |
| <mark>local_id</mark> | [`int`](type/int) | NOTHING |
| <mark>secret</mark> | [`long`](type/long) | NOTHING |

---

## Type

[FileLocation](type/FileLocation)

---

## Example

```php
$fileLocation = $client->fileLocationUnavailable(
	volume_id : 6167884031872770208,
	local_id : 11,
	secret : 285767974551229363,
);
```