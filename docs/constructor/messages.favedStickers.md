# messages.favedStickers

**Description** : *Favorited stickers*

**Layer** : 222

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
			emoticon : 'z4FIPtkQXuE5UcfS',
			documents : array(-2290727591737309679),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : -3753727613969367550,
		),
		$client->document(
			id : -2598192701131993487,
			access_hash : -912668204792595839,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 13,
			mime_type : '1t3WgbJAnkeU9Dlv',
			size : -8497722223537862313,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'kKAXGPEVHoCFDL5t',
				),
				$client->photoSize(
					type : 'riO2maY37NJcGbBj',
					w : 97,
					h : 8,
					size : 10,
				),
				$client->photoCachedSize(
					type : 'ElahAGpgf3cwk4KI',
					w : 14,
					h : 31,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'm1BODYRliQqfAGHr',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'dZvs9AzcmH81RWwo',
					w : 99,
					h : 83,
					sizes : array(80),
				),
				$client->photoPathSize(
					type : '4xCM9hQybpFWGPkS',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'IaWDOytY709ZFThe',
					w : 23,
					h : 78,
					size : 64,
					video_start_ts : 344852.8212890625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 5029389943658018983,
					background_colors : array(86),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -7547224561370462705,
					background_colors : array(64),
				),
			),
			dc_id : 38,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 97,
					h : 78,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'kb4pjMZEKD0JWCmr',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 90,
						x : -143349.4287109375,
						y : 1624355.666015625,
						zoom : -2048927.908203125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1280252.10546875,
					w : 75,
					h : 65,
					preload_prefix_size : 11,
					video_start_ts : -1255.93359375,
					video_codec : '4XMvSBJEZAVoiN0W',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 81,
					title : 'Iw8VCRWvSn4OipjJ',
					performer : 'W09jtkCJgzEqnbDO',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'StaneRyQCNVvrKUF',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'fEq8CQzx9UY2jH0o',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```