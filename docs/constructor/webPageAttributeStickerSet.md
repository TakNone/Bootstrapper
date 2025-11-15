# webPageAttributeStickerSet

**Description** : *Contains info about a stickerset &raquo;, for a webPage preview of a stickerset deep link &raquo; \(the webPage will have a type of telegram\_stickerset\)*

**Layer** : 216

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
			id : 7392026475738733939,
		),
		$client->document(
			id : -1287523862650646534,
			access_hash : -7013159764146981388,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 86,
			mime_type : 'qQyJsRBFlDuTgWkz',
			size : -8340666034563372397,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'Z8Gobxtach54iwPd',
				),
				$client->photoSize(
					type : 'G2F4sVvRKQq70i8x',
					w : 9,
					h : 90,
					size : 79,
				),
				$client->photoCachedSize(
					type : 'bEcvqB2msCNkuTZM',
					w : 74,
					h : 72,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'StlQYoMI6d58AuUb',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'YOwhngykKTXdvVlz',
					w : 70,
					h : 63,
					sizes : array(73),
				),
				$client->photoPathSize(
					type : 'oANcfZRpTigsjD81',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'UCWizv5xmMo2wGSd',
					w : 86,
					h : 6,
					size : 16,
					video_start_ts : 1668747.787109375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -2645924818247094139,
					background_colors : array(84),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -6290932859367153920,
					background_colors : array(72),
				),
			),
			dc_id : 0,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 73,
					h : 92,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'yU9rFs68ugAf2m4S',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -2005449.5732421875,
					w : 24,
					h : 84,
					preload_prefix_size : 53,
					video_start_ts : -212782.3017578125,
					video_codec : 'BkhIvmpJGAL5DW9s',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 48,
					title : '4SNeRDIhisVfHPrp',
					performer : 'EyV1BvW9TDC7xzaP',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'xoudKnk08hgyOE9p',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'nwWVUjSC0FavHeMm',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```