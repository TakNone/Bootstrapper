# stickers.setStickerSetThumb

**Description** : *Set stickerset thumbnail*

**Layer** : 216

```tl
stickers.setStickerSetThumb#a76a5392 flags:# stickerset:InputStickerSet thumb:flags.0?InputDocument thumb_document_id:flags.1?long = messages.StickerSet;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>stickerset</mark> | [`InputStickerSet`](type/InputStickerSet) | Stickerset |
| **thumb** | [`flags.0?InputDocument`](type/InputDocument) | Thumbnail (only for normal stickersets, not custom emoji stickersets) |
| **thumb_document_id** | [`flags.1?long`](type/long) | Only for custom emoji stickersets, ID of a custom emoji present in the set to use as thumbnail; pass 0 to fallback to the first custom emoji of the set |

---

## Result

[messages.StickerSet](type/messages.StickerSet)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **STICKERSET_INVALID** | `400` | The provided sticker set is invalid |
| **STICKER_THUMB_PNG_NOPNG** | `400` | Incorrect stickerset thumb file provided, PNG / WEBP expected |
| **STICKER_THUMB_TGS_NOTGS** | `400` | Incorrect stickerset TGS thumb file provided |

---

## Example

```php
$messagesStickerSet = $client->stickers->setStickerSetThumb(
	stickerset : $client->inputStickerSetEmpty(),
	thumb : $client->inputDocumentEmpty(),
	thumb_document_id : -5394655969097935152,
);
```