# stickers.replaceSticker

**Description** : *Replace a sticker in a stickerset &raquo;*

**Layer** : 218

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
		emoji : 'WXZbvrlLEizg3kMu',
		mask_coords : $client->maskCoords(
			n : 26,
			x : 887680.919921875,
			y : 265651.681640625,
			zoom : 691850.1142578125,
		),
		keywords : 'YLQdf7miT86VyoCO',
	),
);
```