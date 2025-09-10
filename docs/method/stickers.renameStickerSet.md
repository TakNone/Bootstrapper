# stickers.renameStickerSet

**Description** : *Renames a stickerset*

**Layer** : 214

```tl
stickers.renameStickerSet#124b1c00 stickerset:InputStickerSet title:string = messages.StickerSet;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stickerset</mark> | [`InputStickerSet`](type/InputStickerSet) | Stickerset to rename |
| <mark>title</mark> | [`string`](type/string) | New stickerset title |

---

## Result

[messages.StickerSet](type/messages.StickerSet)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **STICKERSET_INVALID** | `400` | The provided sticker set is invalid |

---

## Example

```php
$messagesStickerSet = $client->stickers->renameStickerSet(
	stickerset : $client->inputStickerSetEmpty(),
	title : 'eufnvStxwAOMg8q3',
);
```