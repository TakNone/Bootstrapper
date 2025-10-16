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
	emoji : '4OKLGiFqEYZM0j8b',
	mask_coords : $client->maskCoords(
		n : 70,
		x : -2030942.224609375,
		y : 693096.4169921875,
		zoom : 2083259.6611328125,
	),
	keywords : '2LQ8oxBtyERpjPkv',
);
```