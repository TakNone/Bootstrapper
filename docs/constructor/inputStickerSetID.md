# inputStickerSetID

**Description** : *Stickerset by ID*

**Layer** : 227

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
	id : -7546305207990795684,
	access_hash : 8141382926051214890,
);
```