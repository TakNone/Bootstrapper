# inputPhoto

**Description** : *Defines a photo for further interaction*

**Layer** : 211

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
	id : -8696859713291873095,
	access_hash : -7905544943289892717,
	file_reference : '$?' . "\0" . '?3LiveProtoN???',
);
```