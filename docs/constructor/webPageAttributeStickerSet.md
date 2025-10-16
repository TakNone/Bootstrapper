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
			id : -8279383257490961571,
		),
		$client->document(
			id : 3000641143432745081,
			access_hash : 4636863730098586168,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 48,
			mime_type : 'mtOW2pZcoP3juHLC',
			size : -7000646711703100112,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'wBtsQKzkri7GI0SV',
				),
				$client->photoSize(
					type : 'O0Qyk1UowJA2HIBd',
					w : 99,
					h : 69,
					size : 76,
				),
				$client->photoCachedSize(
					type : 's9a5czPYHMAG0qOW',
					w : 48,
					h : 67,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'h7eRGOVLbYfjqvIl',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'hDZmgSyPQJ12qj7v',
					w : 16,
					h : 50,
					sizes : array(1),
				),
				$client->photoPathSize(
					type : 'r4soWd1YMPFkSwD7',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'ekYOWDcMXFI8CQ1G',
					w : 50,
					h : 58,
					size : 72,
					video_start_ts : -380948.53125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -8605087280038016884,
					background_colors : array(47),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -5970146267019094601,
					background_colors : array(97),
				),
			),
			dc_id : 11,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 77,
					h : 6,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'fJvQcHRSUkg8x9AF',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1530493.97265625,
					w : 33,
					h : 91,
					preload_prefix_size : 7,
					video_start_ts : -605058.4990234375,
					video_codec : 'YFwslmG0v98rD7qZ',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 70,
					title : '7U3AWcai5bFj42kd',
					performer : 'ukWF0pS4ePrf3sCb',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '73Jyotl5WHQ89Uxv',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'KjxEMYIget3Rzw6A',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```