# inputStickerSetItem

**Description** : *Sticker in a stickerset*

**Layer** : 214

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
	emoji : 'caUjDCWMhBnkVxPe',
	mask_coords : $client->maskCoords(
		n : 74,
		x : 236313.9033203125,
		y : 1297818.9931640625,
		zoom : -987260.8935546875,
	),
	keywords : 'pE6oZNVqfWjIiJgK',
);
```