# webPageAttributeStickerSet

**Description** : *Contains info about a stickerset &raquo;, for a webPage preview of a stickerset deep link &raquo; \(the webPage will have a type of telegram\_stickerset\)*

**Layer** : 227

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
			id : 8142516278673030918,
		),
		$client->document(
			id : -2119672977813294063,
			access_hash : 4223346586110047266,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 67,
			mime_type : 'BaTRvkxbOjuztqJC',
			size : 1230489361374948986,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'DpR7mvlGVUIQ3okW',
				),
				$client->photoSize(
					type : 'jcUa7udLlXzvY85n',
					w : 68,
					h : 15,
					size : 26,
				),
				$client->photoCachedSize(
					type : 'JZKC6Fgyowc7mjY2',
					w : 80,
					h : 49,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '5datwUR7gCJ4jz8o',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'F5pehgf7SqujvkMz',
					w : 31,
					h : 80,
					sizes : array(83),
				),
				$client->photoPathSize(
					type : 'NGS6WrPmw3lLagEq',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'CHvZQljeJ4gyU1OE',
					w : 32,
					h : 59,
					size : 40,
					video_start_ts : 1226596.650390625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -5593220365155912189,
					background_colors : array(97),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -3426941157422130787,
					background_colors : array(9),
				),
			),
			dc_id : 60,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 39,
					h : 26,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'AVaWecSjkwvX17oG',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 56,
						x : 1095400.1279296875,
						y : 1780631.23046875,
						zoom : 943644.0166015625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -750135.560546875,
					w : 41,
					h : 48,
					preload_prefix_size : 71,
					video_start_ts : 1849615.53125,
					video_codec : 'f8K4Polyvp6IubLR',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 23,
					title : 'rkzCDUKethcQR8pd',
					performer : 'fgrWPOETm5Z4Hv2u',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'AIHxE6QKgqcfuD97',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'bOkYHht7Gi2cAqIC',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```