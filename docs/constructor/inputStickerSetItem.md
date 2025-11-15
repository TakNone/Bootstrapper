# inputStickerSetItem

**Description** : *Sticker in a stickerset*

**Layer** : 216

```tl
inputStickerSetItem#32da9e9c flags:# document:InputDocument emoji:string mask_coords:flags.0?MaskCoords keywords:flags.1?string = InputStickerSetItem;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>document</mark> | [`InputDocument`](type/InputDocument) | The sticker |
| <mark>emoji</mark> | [`string`](type/string) | Associated emoji |
| **mask_coords** | [`flags.0?MaskCoords`](type/MaskCoords) | Coordinates for mask sticker |
| **keywords** | [`flags.1?string`](type/string) | Set of keywords, separated by commas (can't be provided for mask stickers) |

---

## Type

[InputStickerSetItem](type/InputStickerSetItem)

---

## Example

```php
$inputStickerSetItem = $client->inputStickerSetItem(
	document : $client->inputDocumentEmpty(),
	emoji : 'Yep1W7ygfoJFKR9D',
	mask_coords : $client->maskCoords(
		n : 70,
		x : -2083718.056640625,
		y : -959705.173828125,
		zoom : 2076906.3486328125,
	),
	keywords : 'OdhbeA3vFL5DBwsP',
);
```