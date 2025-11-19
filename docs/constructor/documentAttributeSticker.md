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
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	alt : 'urhRzwePApDmB5nG',
	stickerset : $client->inputStickerSetEmpty(),
	mask_coords : $client->maskCoords(
		n : 0,
		x : 158804.7568359375,
		y : -743039.703125,
		zoom : -504719.2373046875,
	),
);
```