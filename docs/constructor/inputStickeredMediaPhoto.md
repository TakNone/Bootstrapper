# inputStickeredMediaPhoto

**Description** : *A photo with stickers attached*

**Layer** : 211

```tl
inputStickeredMediaPhoto#4a992157 id:InputPhoto = InputStickeredMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputPhoto`](type/InputPhoto) | The photo |

---

## Type

[InputStickeredMedia](type/InputStickeredMedia)

---

## Example

```php
$inputStickeredMedia = $client->inputStickeredMediaPhoto(
	id : $client->inputPhotoEmpty(),
);
```