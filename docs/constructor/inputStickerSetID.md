# inputStickerSetID

**Description** : *Stickerset by ID*

**Layer** : 218

```tl
inputStickerSetID#9de7a269 id:long access_hash:long = InputStickerSet;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | ID |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash |

---

## Type

[InputStickerSet](type/InputStickerSet)

---

## Example

```php
$inputStickerSet = $client->inputStickerSetID(
	id : 4340322406426350258,
	access_hash : -8543472448908992602,
);
```