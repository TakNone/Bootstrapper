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
		emoji : '4FZYeH9MhxonTtcI',
		mask_coords : $client->maskCoords(
			n : 23,
			x : 549813.275390625,
			y : 654609.2744140625,
			zoom : -1318722.3154296875,
		),
		keywords : 'wyJ9tBhFMXbiUAvx',
	),
);
```