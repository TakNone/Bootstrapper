# messages.favedStickers

**Description** : *Favorited stickers*

**Layer** : 218

```tl
messages.favedStickers#2cb51097 hash:long packs:Vector<StickerPack> stickers:Vector<Document> = messages.FavedStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>packs</mark> | [`Vector<StickerPack>`](type/StickerPack) | Emojis associated to stickers |
| <mark>stickers</mark> | [`Vector<Document>`](type/Document) | Favorited stickers |

---

## Type

[messages.FavedStickers](type/messages.FavedStickers)

---

## Example

```php
$messagesFavedStickers = $client->messages->favedStickers(
	hash : 0,
	packs : array(
		$client->stickerPack(
			emoticon : 'lCU6gVBohKA2Ywdu',
			documents : array(6529597482943807694),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : 6764786618622495458,
		),
		$client->document(
			id : 5126151684958735311,
			access_hash : 2424870480822434736,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 98,
			mime_type : 'GCg10oyaqXEFZT7Y',
			size : 4813998196497164710,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'UwTj8aO20PhLDk7K',
				),
				$client->photoSize(
					type : 'GqorIeXBVjJvc1za',
					w : 36,
					h : 60,
					size : 28,
				),
				$client->photoCachedSize(
					type : 'x3WZEsU5H2D6wpYM',
					w : 11,
					h : 64,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'yVNus4XhUODcmKFq',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'Z94hECLqoDxOMbS2',
					w : 33,
					h : 10,
					sizes : array(98),
				),
				$client->photoPathSize(
					type : 'yhZuXdsScEYMqwBz',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'hRwNGZrlf961bA5z',
					w : 63,
					h : 55,
					size : 94,
					video_start_ts : 1261311.8994140625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 7555796921439864887,
					background_colors : array(99),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 6443174221573625267,
					background_colors : array(98),
				),
			),
			dc_id : 77,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 28,
					h : 20,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'GV4nvyRpMLPJtKcb',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 12,
						x : 175897.8017578125,
						y : 830387.044921875,
						zoom : 1031194.21875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1038552.6533203125,
					w : 1,
					h : 88,
					preload_prefix_size : 53,
					video_start_ts : 1942879.1337890625,
					video_codec : 'fsZOFLEaiW2UjAbP',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 30,
					title : 'jQUegK93Zoq0PDGi',
					performer : 'MwmT2GctC0WRQJhA',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'KiGnzdAVmyxoj1Xw',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '20Bjk5XYQiVDS67n',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```