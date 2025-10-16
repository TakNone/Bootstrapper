# stickers.addStickerToSet

**Description** : *Add a sticker to a stickerset\. The sticker set must have been created by the current user/bot*

**Layer** : 216

```tl
stickers.addStickerToSet#8653febe stickerset:InputStickerSet sticker:InputStickerSetItem = messages.StickerSet;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stickerset</mark> | [`InputStickerSet`](type/InputStickerSet) | The stickerset |
| <mark>sticker</mark> | [`InputStickerSetItem`](type/InputStickerSetItem) | The sticker |

---

## Result

[messages.StickerSet](type/messages.StickerSet)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **STICKERPACK_STICKERS_TOO_MUCH** | `400` | There are too many stickers in this stickerpack, you can't add any more |
| **STICKERSET_INVALID** | `406` | The provided sticker set is invalid |
| **STICKERS_TOO_MUCH** | `400` | There are too many stickers in this stickerpack, you can't add any more |
| **STICKER_PNG_NOPNG** | `400` | One of the specified stickers is not a valid PNG file |
| **STICKER_TGS_NOTGS** | `400` | Invalid TGS sticker provided |

---

## Example

```php
$messagesStickerSet = $client->stickers->addStickerToSet(
	stickerset : $client->inputStickerSetEmpty(),
	sticker : $client->inputStickerSetItem(
		document : $client->inputDocumentEmpty(),
		emoji : 'VWo5Ar2KsqOLth0M',
		mask_coords : $client->maskCoords(
			n : 31,
			x : -1663096.55859375,
			y : 78099.6796875,
			zoom : -1541440.59765625,
		),
		keywords : 'QRfAWCpyh5cZoBvw',
	),
);
```