# messages.stickers

**Description** : *Found stickers*

**Layer** : 225

```tl
messages.stickers#30a6ec7e hash:long stickers:Vector<Document> = messages.Stickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>stickers</mark> | [`Vector<Document>`](type/Document) | Stickers |

---

## Type

[messages.Stickers](type/messages.Stickers)

---

## Example

```php
$messagesStickers = $client->messages->stickers(
	hash : 0,
	stickers : array(
		$client->documentEmpty(
			id : 7696861493458780904,
		),
		$client->document(
			id : -2777586214759812992,
			access_hash : -6796311777344408043,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 66,
			mime_type : 'qmOzMNrZwS39IFxb',
			size : 1326355598787266354,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '2W4YfwP0ZsSBogCH',
				),
				$client->photoSize(
					type : 'PGRrjm96CnKwWOph',
					w : 61,
					h : 81,
					size : 82,
				),
				$client->photoCachedSize(
					type : 'Masx4tqyuOjEfTDv',
					w : 30,
					h : 23,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'eXQI9fdDnujGw1zt',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'qFNcOgX4EwVtB9DM',
					w : 29,
					h : 54,
					sizes : array(85),
				),
				$client->photoPathSize(
					type : 'tGCLp0Tk3wEP4qrO',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'dm3G5tczXPg7HZSN',
					w : 88,
					h : 63,
					size : 85,
					video_start_ts : -144037.8173828125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 651928758790820993,
					background_colors : array(16),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -5665747980940585305,
					background_colors : array(25),
				),
			),
			dc_id : 68,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 50,
					h : 88,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'OfLhsY5aVoFGByKc',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 52,
						x : -177222.52734375,
						y : -2022187.8076171875,
						zoom : 1853993.4580078125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 698161.275390625,
					w : 79,
					h : 30,
					preload_prefix_size : 56,
					video_start_ts : -819579.3759765625,
					video_codec : 'KV9TFJzWvnfykYt6',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 56,
					title : 'lSN86JOjnFKvWZAL',
					performer : 'BGZF6b8gXTnNEhuU',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'gnpU1XkmOGf0AloH',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '5LZJzVyB7C0kFRq4',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```