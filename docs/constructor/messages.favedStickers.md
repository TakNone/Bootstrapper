# messages.favedStickers

**Description** : *Favorited stickers*

**Layer** : 233

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
			emoticon : 'auPtTo2OjWiECQqk',
			documents : array(-682526780852804394),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : 8367460520969369987,
		),
		$client->document(
			id : 5565776049407892475,
			access_hash : 5369671092812640971,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 65,
			mime_type : 'ErYxTwmW5NBFzP08',
			size : -6213543430876334026,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'H2Pt0kDJEfFN4ThM',
				),
				$client->photoSize(
					type : 'Fz3KsEe0BYrhmutb',
					w : 65,
					h : 77,
					size : 14,
				),
				$client->photoCachedSize(
					type : '8omZsVAHTxd7hYDE',
					w : 76,
					h : 44,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'K260IyzJsTji8f4M',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'xXrQYHaJItClS4e5',
					w : 44,
					h : 49,
					sizes : array(93),
				),
				$client->photoPathSize(
					type : 'hurVP0G2afEM3kzp',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'xOAnry4kmipLjz8K',
					w : 94,
					h : 64,
					size : 5,
					video_start_ts : -957663.3115234375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -8144375792223919071,
					background_colors : array(8),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 7405307149250643551,
					background_colors : array(56),
				),
			),
			dc_id : 5,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 54,
					h : 8,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'vKqxWcCp3V4LfhMm',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 27,
						x : -254356.015625,
						y : -121969.48046875,
						zoom : -539686.3701171875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1421638.330078125,
					w : 81,
					h : 40,
					preload_prefix_size : 29,
					video_start_ts : -1369511.3798828125,
					video_codec : 'Pm4DJoIhQaL1U6be',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 97,
					title : 'XoQHWcZ3pv8utg1w',
					performer : 'ikaUO9X4I7CbMv38',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'Xa8LgqYRh9EHoeim',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '5gFzmGt6kQvPieW7',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```