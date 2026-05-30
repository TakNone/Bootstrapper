# webPageAttributeStickerSet

**Description** : *Contains info about a stickerset &raquo;, for a webPage preview of a stickerset deep link &raquo; \(the webPage will have a type of telegram\_stickerset\)*

**Layer** : 222

```tl
webPageAttributeStickerSet#50cc03d3 flags:# emojis:flags.0?true text_color:flags.1?true stickers:Vector<Document> = WebPageAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
			id : -3928488091277303323,
		),
		$client->document(
			id : 727297028077339532,
			access_hash : -7807902532976233448,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 39,
			mime_type : 'XAbzwZ5ItLUEH0qs',
			size : 3881518942224673230,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '5cFqD6PU9e8MTLrR',
				),
				$client->photoSize(
					type : 'r67bPYNfxpcEMItO',
					w : 85,
					h : 15,
					size : 36,
				),
				$client->photoCachedSize(
					type : 'jTYe1gEdaUDO9yzN',
					w : 5,
					h : 45,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '8Mo7UqYkhSm0EA1R',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'H8zGerl1tjNkUBdy',
					w : 38,
					h : 93,
					sizes : array(81),
				),
				$client->photoPathSize(
					type : 'tQP860rz7e5awf4k',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'Uio9JX5Ns4CMLAp6',
					w : 72,
					h : 22,
					size : 14,
					video_start_ts : -116325.6416015625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 6167561286840345596,
					background_colors : array(26),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 6441060341244374101,
					background_colors : array(17),
				),
			),
			dc_id : 94,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 1,
					h : 54,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'jF0OnrhB7mwIb4Hl',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 25,
						x : 1185178.125,
						y : -422559.8876953125,
						zoom : 453870.3662109375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1974315.4921875,
					w : 19,
					h : 25,
					preload_prefix_size : 25,
					video_start_ts : -299586.4521484375,
					video_codec : '3FdhCtLeT74R0koM',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 96,
					title : 'MHj5JpV6XyZUIN2B',
					performer : '4TsjiuUr8fLec0Eq',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'p4E2Fes0CTZy61O7',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'EelRZqJrQwSb0Ki3',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```