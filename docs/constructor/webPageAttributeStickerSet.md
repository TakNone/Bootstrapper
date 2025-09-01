# webPageAttributeStickerSet

**Description** : *Contains info about a stickerset &raquo;, for a webPage preview of a stickerset deep link &raquo; \(the webPage will have a type of telegram\_stickerset\)*

**Layer** : 214

```tl
webPageAttributeStickerSet#50cc03d3 flags:# emojis:flags.0?true text_color:flags.1?true stickers:Vector<Document> = WebPageAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **emojis** | [`flags.0?true`](type/true) | Whether this i s a custom emoji stickerset |
| **text_color** | [`flags.1?true`](type/true) | Whether the color of this TGS custom emoji stickerset should be changed to the text color when used in messages, the accent color if used as emoji status, white on chat photos, or another appropriate color based on context |
| <mark>stickers</mark> | [`Vector<Document>`](type/Document) | A subset of the stickerset in the stickerset |

---

## Type

[WebPageAttribute](type/WebPageAttribute)

---

## Example

```php
$webPageAttribute = $client->webPageAttributeStickerSet(
	emojis : true,
	text_color : true,
	stickers : array(
		$client->documentEmpty(
			id : -6597528789443360103,
		),
		$client->document(
			id : -22296795198296387,
			access_hash : 5146758005775621368,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 16,
			mime_type : '8VHNsXrWFxBfdSzD',
			size : -3751346327721539683,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'pebdSV1uI7EYtUsw',
				),
				$client->photoSize(
					type : 'bMfA8T0HSnkN69Bq',
					w : 78,
					h : 27,
					size : 93,
				),
				$client->photoCachedSize(
					type : '3eLgR8IKotmiyzXs',
					w : 17,
					h : 82,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'PrcZuTHonLXiWG6t',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'JLAjX7Dkztfmy4V0',
					w : 98,
					h : 63,
					sizes : array(68),
				),
				$client->photoPathSize(
					type : 'kV9Rg6vpZW3MePG1',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'V6xNC9oUPIkT03yl',
					w : 48,
					h : 26,
					size : 81,
					video_start_ts : -246826.5390625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 8220917126964766738,
					background_colors : array(16),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 6357744038619506256,
					background_colors : array(96),
				),
			),
			dc_id : 18,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 74,
					h : 91,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'niM3IVQjeEfkF28o',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -762710.177734375,
					w : 9,
					h : 44,
					preload_prefix_size : 18,
					video_start_ts : -1768398.154296875,
					video_codec : 'HEZe3qbKpSUMBjor',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 59,
					title : '106LTdqyKhbrvUnI',
					performer : 'hAzDcIw7Xq6TlGkZ',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'TA47rHIqZCs6gE1R',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Ut2lb0X48QGuPw9g',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```