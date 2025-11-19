# webPageAttributeStickerSet

**Description** : *Contains info about a stickerset &raquo;, for a webPage preview of a stickerset deep link &raquo; \(the webPage will have a type of telegram\_stickerset\)*

**Layer** : 218

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
			id : -7012686546817320746,
		),
		$client->document(
			id : -4995633068864013723,
			access_hash : -6454943244911190491,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 68,
			mime_type : 'D89drpLeB46bgvQk',
			size : 6205151811855463163,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'jvlVYa9UHGtDRxfL',
				),
				$client->photoSize(
					type : '2HroIfwTPMbQFnEj',
					w : 36,
					h : 36,
					size : 91,
				),
				$client->photoCachedSize(
					type : 'U3Xsnl5ovh49dc2i',
					w : 71,
					h : 99,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'umHNy0EPUBFJea42',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'U6uj2NXGFyzIW18o',
					w : 69,
					h : 29,
					sizes : array(93),
				),
				$client->photoPathSize(
					type : 'indhJubfNLwsB5I3',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '2Rhf31JLN6xdSIFU',
					w : 92,
					h : 10,
					size : 89,
					video_start_ts : -16551.93359375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 5554214607196082248,
					background_colors : array(58),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 5232210252140057913,
					background_colors : array(89),
				),
			),
			dc_id : 54,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 15,
					h : 58,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'BvzweKMFkfgSLNm1',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 97,
						x : 1496617.232421875,
						y : -1481402.2783203125,
						zoom : -213874.84765625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 443774.6357421875,
					w : 54,
					h : 88,
					preload_prefix_size : 6,
					video_start_ts : 1828389.271484375,
					video_codec : 'w76ytTZJ43rIXbNG',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 53,
					title : '71XQtCZ0z9ga5VcG',
					performer : '0DOcSBKYlEUPGM8j',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'KcTIdBNRHhY1pvjQ',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'CDXN6ewvIRQ9fdkB',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```