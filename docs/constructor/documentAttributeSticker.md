# documentAttributeSticker

**Description** : *Defines a sticker*

**Layer** : 218

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
	alt : 'mcOYg0aDG2Auno5H',
	stickerset : $client->inputStickerSetEmpty(),
	mask_coords : $client->maskCoords(
		n : 93,
		x : 911287.2041015625,
		y : 1327691.4951171875,
		zoom : -1527113.4599609375,
	),
);
```