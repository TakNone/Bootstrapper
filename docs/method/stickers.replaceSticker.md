# stickers.replaceSticker

**Description** : *Replace a sticker in a stickerset &raquo;*

**Layer** : 222

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
		emoji : 'R3DcG5CtspmEFXoV',
		mask_coords : $client->maskCoords(
			n : 50,
			x : -1854501.49609375,
			y : -1945735.779296875,
			zoom : -651076.18359375,
		),
		keywords : 'eiRJz9mOjA56kDyx',
	),
);
```