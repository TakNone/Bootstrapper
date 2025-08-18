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
	id : -8481055432183690367,
	access_hash : -5170852214216052525,
	file_reference : '?E?0?LiveProto?u>Sv',
);
```