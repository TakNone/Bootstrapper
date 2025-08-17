# stickers.deleteStickerSet

**Description** : *Deletes a stickerset we created*

**Layer** : 211

```tl
stickers.deleteStickerSet#87704394 stickerset:InputStickerSet = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stickerset</mark> | [`InputStickerSet`](type/InputStickerSet) | Stickerset to delete |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **STICKERSET_INVALID** | `400` | The provided sticker set is invalid |

---

## Example

```php
$bool = $client->stickers->deleteStickerSet(
	stickerset : $client->inputStickerSetEmpty(),
);
```