# stickers.replaceSticker

**Description** : *Replace a sticker in a stickerset &raquo;*

**Layer** : 216

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
		emoji : 'rTjExULabNpf3Wv5',
		mask_coords : $client->maskCoords(
			n : 58,
			x : 2024377.96875,
			y : -1163509.4599609375,
			zoom : -638893.08203125,
		),
		keywords : 'msXeN1v5ACuzKyfY',
	),
);
```