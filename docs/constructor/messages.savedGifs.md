# messages.savedGifs

**Description** : *Saved gifs*

**Layer** : 229

```tl
messages.savedGifs#84a02a0d hash:long gifs:Vector<Document> = messages.SavedGifs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>gifs</mark> | [`Vector<Document>`](type/Document) | List of saved gifs |

---

## Type

[messages.SavedGifs](type/messages.SavedGifs)

---

## Example

```php
$messagesSavedGifs = $client->messages->savedGifs(
	hash : 0,
	gifs : array(
		$client->documentEmpty(
			id : -7765197758988534764,
		),
		$client->document(
			id : -6895191977169671405,
			access_hash : -5741257782274018038,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 0,
			mime_type : 'Dkz7sCRuY5tlIABy',
			size : 6479460531146790493,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'C7tpxEIPeDd4zRai',
				),
				$client->photoSize(
					type : 'DT3g4m6BpMRQxEzX',
					w : 54,
					h : 50,
					size : 5,
				),
				$client->photoCachedSize(
					type : 'yRWG2qakfl5h6xOg',
					w : 12,
					h : 84,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '1npTmt2Y9lrwqv7P',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'lPfr6yT0gbNKFpHC',
					w : 60,
					h : 45,
					sizes : array(14),
				),
				$client->photoPathSize(
					type : 'wkyKTjs3FPBRZb1N',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'gJtNQBWjlhxw5R3D',
					w : 38,
					h : 68,
					size : 0,
					video_start_ts : 557960.33203125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 8497750349873222454,
					background_colors : array(40),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 7049265381655892456,
					background_colors : array(18),
				),
			),
			dc_id : 94,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 34,
					h : 0,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'mkwjPILfzV9Rt6Gp',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 37,
						x : -2026808.33984375,
						y : -1950897.5859375,
						zoom : -700819.1572265625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1560913.8115234375,
					w : 75,
					h : 19,
					preload_prefix_size : 17,
					video_start_ts : 1755774.98046875,
					video_codec : 'UJM8X5eswSaI9CQT',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 24,
					title : 'iDkVTQZm9bIwGxao',
					performer : 'wIqiMgsdhQ6BmXzK',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'F3SWoC5BE7qcLYDJ',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '1FS8W9KuMin7DAI4',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```