# documentAttributeSticker

**Description** : *Defines a sticker*

**Layer** : 227

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
	alt : 'UEil1RvPoLcz9hFQ',
	stickerset : $client->inputStickerSetEmpty(),
	mask_coords : $client->maskCoords(
		n : 84,
		x : -274199.8603515625,
		y : -661472.9140625,
		zoom : -921143.18359375,
	),
);
```