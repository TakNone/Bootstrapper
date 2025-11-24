# documentAttributeCustomEmoji

**Description** : *Info about a custom emoji*

**Layer** : 218

```tl
documentAttributeCustomEmoji#fd149899 flags:# free:flags.0?true text_color:flags.1?true alt:string stickerset:InputStickerSet = DocumentAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **free** | [`flags.0?true`](type/true) | Whether this custom emoji can be sent by non-Premium users |
| **text_color** | [`flags.1?true`](type/true) | Whether the color of this TGS custom emoji should be changed to the text color when used in messages, the accent color if used as emoji status, white on chat photos, or another appropriate color based on context |
| <mark>alt</mark> | [`string`](type/string) | The actual emoji |
| <mark>stickerset</mark> | [`InputStickerSet`](type/InputStickerSet) | The emoji stickerset to which this emoji belongs |

---

## Type

[DocumentAttribute](type/DocumentAttribute)

---

## Example

```php
$documentAttribute = $client->documentAttributeCustomEmoji(
	free : true,
	text_color : true,
	alt : 'sR4xCUWK7MjvnDTr',
	stickerset : $client->inputStickerSetEmpty(),
);
```