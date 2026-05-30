# messages.availableEffects

**Description** : *The full list of usable animated message effects &raquo;*

**Layer** : 225

```tl
messages.availableEffects#bddb616e hash:int effects:Vector<AvailableEffect> documents:Vector<Document> = messages.AvailableEffects;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here |
| <mark>effects</mark> | [`Vector<AvailableEffect>`](type/AvailableEffect) | Message effects |
| <mark>documents</mark> | [`Vector<Document>`](type/Document) | Documents specified in the effects constructors |

---

## Type

[messages.AvailableEffects](type/messages.AvailableEffects)

---

## Example

```php
$messagesAvailableEffects = $client->messages->availableEffects(
	hash : 0,
	effects : array(
		$client->availableEffect(
			premium_required : true,
			id : 7361001846132965987,
			emoticon : 'Ln12AuRlBmrKaysq',
			static_icon_id : 1642685284926766350,
			effect_sticker_id : -6974252538499122210,
			effect_animation_id : -384426946639602605,
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -879618065778313055,
		),
		$client->document(
			id : 4261068829788105933,
			access_hash : 187329824400646863,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 14,
			mime_type : 't2iKaIb7TJ4L9eSw',
			size : -177951876259121451,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'sIVQxdoWDLCZqA0E',
				),
				$client->photoSize(
					type : 'fFmXGyeiLPlhMKjW',
					w : 44,
					h : 65,
					size : 33,
				),
				$client->photoCachedSize(
					type : 'YqQovApCKs10IxZg',
					w : 86,
					h : 84,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'eYzyaPslHLIjoBt0',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'YyxH1WUVS2C3zhf8',
					w : 57,
					h : 29,
					sizes : array(76),
				),
				$client->photoPathSize(
					type : '24NS36iP9zpCUeQa',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'lVzgYu9v5S4HrPyL',
					w : 14,
					h : 12,
					size : 25,
					video_start_ts : 1701093.298828125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -2507847465197448633,
					background_colors : array(8),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 9118052615494457816,
					background_colors : array(67),
				),
			),
			dc_id : 46,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 60,
					h : 5,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'SnUQszYGJNkT1w4f',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 22,
						x : -419513.08984375,
						y : 660208.7119140625,
						zoom : -1424987.5791015625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1659524.0478515625,
					w : 9,
					h : 79,
					preload_prefix_size : 90,
					video_start_ts : 2045632.50390625,
					video_codec : 'yKwo42LzjiUNJEOd',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 51,
					title : 'VOPcaRYdSIHEuvig',
					performer : 'ufpjs2YRkqLa16rb',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'x3nEzke2Ur5Iav9b',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'mGRHJ8PNKXD1Md4z',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```