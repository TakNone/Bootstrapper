# inputStickerSetItem

**Description** : *Sticker in a stickerset*

**Layer** : 222

```tl
inputStickerSetItem#32da9e9c flags:# document:InputDocument emoji:string mask_coords:flags.0?MaskCoords keywords:flags.1?string = InputStickerSetItem;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	emoji : 'TbJudMzlfUhqBaGN',
	mask_coords : $client->maskCoords(
		n : 75,
		x : -996988.1064453125,
		y : 1259251.7041015625,
		zoom : -1258562.19921875,
	),
	keywords : 'RS0ZUvG7bCo8jzhx',
);
```