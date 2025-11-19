# inputStickerSetItem

**Description** : *Sticker in a stickerset*

**Layer** : 218

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
	emoji : 'vjeOXITWRLzB4EU8',
	mask_coords : $client->maskCoords(
		n : 22,
		x : -1682220.3486328125,
		y : -1045285.4619140625,
		zoom : -122629.783203125,
	),
	keywords : 'rHLAp0FhRufB7obc',
);
```