# stickers.changeSticker

**Description** : *Update the keywords, emojis or mask coordinates of a sticker*

**Layer** : 218

```tl
stickers.changeSticker#f5537ebc flags:# sticker:InputDocument emoji:flags.0?string mask_coords:flags.1?MaskCoords keywords:flags.2?string = messages.StickerSet;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>sticker</mark> | [`InputDocument`](type/InputDocument) | The sticker |
| **emoji** | [`flags.0?string`](type/string) | If set, updates the emoji list associated to the sticker |
| **mask_coords** | [`flags.1?MaskCoords`](type/MaskCoords) | If set, updates the mask coordinates |
| **keywords** | [`flags.2?string`](type/string) | If set, updates the sticker keywords (separated by commas). Can't be provided for mask stickers |

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
$messagesStickerSet = $client->stickers->changeSticker(
	sticker : $client->inputDocumentEmpty(),
	emoji : 'R3TOKx2W0bNyEpPr',
	mask_coords : $client->maskCoords(
		n : 60,
		x : 1699371.0361328125,
		y : 2027985.2861328125,
		zoom : -801936.0654296875,
	),
	keywords : 'tLaOkVuTnPoSjWFZ',
);
```