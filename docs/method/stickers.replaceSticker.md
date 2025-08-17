# stickers.replaceSticker

**Description** : *Replace a sticker in a stickerset »*

**Layer** : 211

```tl
stickers.replaceSticker#4696459a sticker:InputDocument new_sticker:InputStickerSetItem = messages.StickerSet;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>sticker</mark> | [`InputDocument`](type/InputDocument) | Old sticker document |
| <mark>new_sticker</mark> | [`InputStickerSetItem`](type/InputStickerSetItem) | New sticker |

---

## Result

[messages.StickerSet](type/messages.StickerSet)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **STICKER_INVALID** | `400` | The provided sticker is invalid |

---

## Example

```php
$messagesStickerSet = $client->stickers->replaceSticker(
	sticker : $client->inputDocumentEmpty(),
	new_sticker : $client->inputStickerSetItem(
		document : $client->inputDocumentEmpty(),
		emoji : 'EwpI9zt2QGWTFrNK',
		mask_coords : $client->maskCoords(
			n : 14,
			x : 1009573.9521484375,
			y : -175032.5556640625,
			zoom : 401984.2216796875,
		),
		keywords : 'Zce3Jz7GF8Tky5Ai',
	),
);
```