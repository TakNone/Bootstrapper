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
			id : -3003879403684609934,
		),
		$client->document(
			id : -5916926052385199927,
			access_hash : -6863244791307250740,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 19,
			mime_type : 'wyCbrNq6dAe8XvT2',
			size : 6593661241045740217,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'syE9iRonGUMmZOTX',
				),
				$client->photoSize(
					type : 'VNh3FinxXMKgpDjH',
					w : 57,
					h : 35,
					size : 80,
				),
				$client->photoCachedSize(
					type : 'aoufwtr8SQ3pRcHT',
					w : 1,
					h : 91,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'OSZnGjE8L5hJWC6A',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'EG7iPvtYnHUeDcub',
					w : 43,
					h : 49,
					sizes : array(55),
				),
				$client->photoPathSize(
					type : 'X4vkCJDWlLVGdS0E',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'i9jNSF5lE8t0TMHL',
					w : 32,
					h : 17,
					size : 19,
					video_start_ts : -1810764.59375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -7484145417943230613,
					background_colors : array(22),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 5434011569801525305,
					background_colors : array(4),
				),
			),
			dc_id : 79,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 84,
					h : 27,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'IN7D540RszuVo1km',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 77,
						x : 1548505.9462890625,
						y : -346419.73046875,
						zoom : 1359777.8701171875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1931386.939453125,
					w : 25,
					h : 27,
					preload_prefix_size : 55,
					video_start_ts : -57007.568359375,
					video_codec : 'NzyP5Kugi1xoIhe8',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 52,
					title : 'BgJK4dy6pHk9IXAl',
					performer : 'B6VXHLp5dza1f3eO',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '4latsRKqipOBcuzy',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'p96YNsn1WrqhkbCH',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```