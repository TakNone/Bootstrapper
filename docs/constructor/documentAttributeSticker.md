# documentAttributeSticker

**Description** : *Defines a sticker*

**Layer** : 233

```tl
documentAttributeSticker#6319d612 flags:# mask:flags.1?true alt:string stickerset:InputStickerSet mask_coords:flags.0?MaskCoords = DocumentAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **mask** | [`flags.1?true`](type/true) | Whether this is a mask sticker |
| <mark>alt</mark> | [`string`](type/string) | Alternative emoji representation of sticker |
| <mark>stickerset</mark> | [`InputStickerSet`](type/InputStickerSet) | Associated stickerset |
| **mask_coords** | [`flags.0?MaskCoords`](type/MaskCoords) | Mask coordinates (if this is a mask sticker, attached to a photo) |

---

## Type

[DocumentAttribute](type/DocumentAttribute)

---

## Example

```php
$documentAttribute = $client->documentAttributeSticker(
	mask : true,
	alt : 'LGgyqOQNbS9vTXJu',
	stickerset : $client->inputStickerSetEmpty(),
	mask_coords : $client->maskCoords(
		n : 71,
		x : -1574974.845703125,
		y : 1586017.5625,
		zoom : -2051420.1826171875,
	),
);
```