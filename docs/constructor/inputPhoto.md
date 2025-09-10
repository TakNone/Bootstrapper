# inputPhoto

**Description** : *Defines a photo for further interaction*

**Layer** : 214

```tl
inputPhoto#3bb3b94a id:long access_hash:long file_reference:bytes = InputPhoto;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | Photo identifier |
| <mark>access_hash</mark> | [`long`](type/long) | access_hash value from the photo constructor |
| <mark>file_reference</mark> | [`bytes`](type/bytes) | File reference |

---

## Type

[InputPhoto](type/InputPhoto)

---

## Example

```php
$inputPhoto = $client->inputPhoto(
	id : 8278353564315137010,
	access_hash : -9161299279656951791,
	file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```