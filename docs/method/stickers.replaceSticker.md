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
		emoji : 'kEnM8zZjF4X5qVpR',
		mask_coords : $client->maskCoords(
			n : 52,
			x : -574344.22265625,
			y : 1188449.6962890625,
			zoom : 1296552.71484375,
		),
		keywords : '1MjwmRBosHFufYgS',
	),
);
```