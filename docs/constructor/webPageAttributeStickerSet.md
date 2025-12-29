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
			id : -3813483433248450998,
		),
		$client->document(
			id : -7295871483019052206,
			access_hash : -8257391613393196270,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 53,
			mime_type : 'igsTWLh2dA5EjQIS',
			size : -7330381524701802878,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'v8iHMQ6G2Ww0lPOk',
				),
				$client->photoSize(
					type : 'igwP7l2cG4LZhVBf',
					w : 69,
					h : 47,
					size : 63,
				),
				$client->photoCachedSize(
					type : 'Wjmb9QdXtgypBux8',
					w : 34,
					h : 6,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'CGLsvm3WOgUaefd5',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'UHMeEmDrNt1nl5PJ',
					w : 62,
					h : 1,
					sizes : array(87),
				),
				$client->photoPathSize(
					type : 'Viw3ZnILtU491FER',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'ktKIOZlYbGhS4vW9',
					w : 28,
					h : 16,
					size : 74,
					video_start_ts : 1704303.2998046875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -6729108700051824017,
					background_colors : array(30),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -8473404176890032943,
					background_colors : array(31),
				),
			),
			dc_id : 4,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 64,
					h : 85,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'rTnuo3I106bDgHlv',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 81,
						x : 142426.8037109375,
						y : 1839792.79296875,
						zoom : 882898.7197265625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1829667.849609375,
					w : 77,
					h : 71,
					preload_prefix_size : 29,
					video_start_ts : -1644374.9296875,
					video_codec : 'KQ20j9ZcOMfp15aU',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 9,
					title : 'PhwpAYjSMQDG4tsg',
					performer : 'L70brTjIvSs4yRi5',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'I0kl5BhUDCGSxXjw',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'koXAsJFI48gGjKvD',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```