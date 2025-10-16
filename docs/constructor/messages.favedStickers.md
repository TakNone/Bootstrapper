# messages.favedStickers

**Description** : *Favorited stickers*

**Layer** : 216

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
			emoticon : 'YxjehsMaKEyRtiH3',
			documents : array(-463553594504213506),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : -3972850925631623645,
		),
		$client->document(
			id : 6164459959381122446,
			access_hash : -6385653207591857348,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 51,
			mime_type : 'HENBpfYuy9tnKzdo',
			size : 1802214585346565197,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'elwo2Q3HKJjYBbTa',
				),
				$client->photoSize(
					type : 'u5OqFpoCgmlfyhGi',
					w : 95,
					h : 83,
					size : 22,
				),
				$client->photoCachedSize(
					type : 'UoE79g6ru3nBtHVb',
					w : 36,
					h : 87,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'JFuigGxzH82E9aDl',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'q3PLIQd1lscDtuOJ',
					w : 60,
					h : 85,
					sizes : array(60),
				),
				$client->photoPathSize(
					type : 'X6iU7bDmfLxkYreW',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 's1QMWhPTZNjqbvIf',
					w : 96,
					h : 89,
					size : 64,
					video_start_ts : 661667.578125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -7954487658875489908,
					background_colors : array(81),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -5497309400053146348,
					background_colors : array(35),
				),
			),
			dc_id : 14,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 43,
					h : 79,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '4PVDJQroBFXylunY',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1707757.056640625,
					w : 7,
					h : 100,
					preload_prefix_size : 84,
					video_start_ts : -305087.1494140625,
					video_codec : 'tbTIYrERG3wV0hCZ',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 37,
					title : 'DYwJ05g1i2SpH8ea',
					performer : 'snXRfatK84om6jkc',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'DINlGw3Bs9AoOf0u',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'fcJqpUGtm0DiZg1T',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```