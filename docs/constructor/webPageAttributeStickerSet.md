# webPageAttributeStickerSet

**Description** : *Contains info about a stickerset &raquo;, for a webPage preview of a stickerset deep link &raquo; \(the webPage will have a type of telegram\_stickerset\)*

**Layer** : 233

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
			id : -7315759775429801185,
		),
		$client->document(
			id : 1772948011053624203,
			access_hash : 3904678528022331342,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 57,
			mime_type : 'M0kKUHc4W5Y8Vmdz',
			size : -8701282543343350730,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '3nXI5GkaDV8s2Sl6',
				),
				$client->photoSize(
					type : '58eiybVmhMASCN6n',
					w : 76,
					h : 38,
					size : 91,
				),
				$client->photoCachedSize(
					type : 'S6bPYXOvJWchyGVH',
					w : 12,
					h : 31,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'l3aH5iK9scjYdGBW',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'sHBfnLk0Kaydm4oQ',
					w : 92,
					h : 45,
					sizes : array(70),
				),
				$client->photoPathSize(
					type : 'znsdp72mPCqVZckh',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'lfLRrxDzUg81uC5P',
					w : 16,
					h : 40,
					size : 34,
					video_start_ts : -1601396.4697265625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 561739617971726838,
					background_colors : array(64),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -6026907765139675910,
					background_colors : array(47),
				),
			),
			dc_id : 73,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 4,
					h : 14,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Pe24UHErnhfGNakQ',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 37,
						x : 2015687.7763671875,
						y : -448957.7001953125,
						zoom : 532955.0322265625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1835129.498046875,
					w : 34,
					h : 38,
					preload_prefix_size : 56,
					video_start_ts : 467684.44921875,
					video_codec : 'VPFR1lqcaTf9DL0e',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 18,
					title : '1YCszBWyZE08ITaV',
					performer : 'R3HnMOBpXj2ZJwK9',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'cqtAnE2TWdyBmV4P',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'jNLqFRZT0Ofg7YW2',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```