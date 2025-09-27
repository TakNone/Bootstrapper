# users.savedMusic

**Layer** : 216

```tl
users.savedMusic#34a2f297 count:int documents:Vector<Document> = users.SavedMusic;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | NOTHING |
| <mark>documents</mark> | [`Vector<Document>`](type/Document) | NOTHING |

---

## Type

[users.SavedMusic](type/users.SavedMusic)

---

## Example

```php
$usersSavedMusic = $client->users->savedMusic(
	count : 26,
	documents : array(
		$client->documentEmpty(
			id : 7500076839296895891,
		),
		$client->document(
			id : 57701306674980693,
			access_hash : -7179685670455118156,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 10,
			mime_type : 'Tp5U31KEtMlQvnNZ',
			size : 3934387152111261875,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'hW5r3EdT7cYy4ptU',
				),
				$client->photoSize(
					type : 'SUYoEQMZH8k2JrDb',
					w : 74,
					h : 50,
					size : 63,
				),
				$client->photoCachedSize(
					type : 'xAW41h86piX9ZNUS',
					w : 82,
					h : 88,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'tvr9Xi2USL5qH4dk',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'wxnJIBFP42O7eKQM',
					w : 10,
					h : 82,
					sizes : array(16),
				),
				$client->photoPathSize(
					type : '3PIO9lLMTj5Qiv86',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'QEIW4ATqXRs9F30M',
					w : 86,
					h : 84,
					size : 39,
					video_start_ts : 904052.1943359375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 8015402933386845058,
					background_colors : array(59),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -7890105368717589393,
					background_colors : array(25),
				),
			),
			dc_id : 58,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 48,
					h : 10,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Pl2ASjdG71ToF8OU',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 793376.599609375,
					w : 63,
					h : 40,
					preload_prefix_size : 52,
					video_start_ts : -160269.59375,
					video_codec : 'pTao7xLjDQG3t0wE',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 31,
					title : 'XN6GMpE2SBlxTcAZ',
					performer : 'e1YWiFkAbnLouqgQ',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'jgfoDqLHxGK125t7',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '1QeZqbKgFn2Niak9',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```