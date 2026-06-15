# messages.recentStickers

**Description** : *Recently used stickers*

**Layer** : 227

```tl
messages.recentStickers#88d37c56 hash:long packs:Vector<StickerPack> stickers:Vector<Document> dates:Vector<int> = messages.RecentStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>packs</mark> | [`Vector<StickerPack>`](type/StickerPack) | Emojis associated to stickers |
| <mark>stickers</mark> | [`Vector<Document>`](type/Document) | Recent stickers |
| <mark>dates</mark> | [`Vector<int>`](type/int) | When was each sticker last used |

---

## Type

[messages.RecentStickers](type/messages.RecentStickers)

---

## Example

```php
$messagesRecentStickers = $client->messages->recentStickers(
	hash : 0,
	packs : array(
		$client->stickerPack(
			emoticon : 'Koyt1jmR6cAxVs30',
			documents : array(-7816566831916800593),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : -7319298840290578012,
		),
		$client->document(
			id : 6534735197246361809,
			access_hash : 5989206135701047202,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 47,
			mime_type : 'GkRxuMJNotYf3Kz6',
			size : 4129540498216179952,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '4p69Unhq0co5jmPx',
				),
				$client->photoSize(
					type : 'E1AU4yZg52NYBhzf',
					w : 56,
					h : 3,
					size : 35,
				),
				$client->photoCachedSize(
					type : 'mhIZOFxB8zHXTJ0L',
					w : 57,
					h : 78,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'QeaHbnvumX1oCzTA',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'OHX4MQ8bY5xi0odU',
					w : 91,
					h : 48,
					sizes : array(35),
				),
				$client->photoPathSize(
					type : 'Nu0sc3omvIzt4qJg',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'agAj73oCLmQJqGTO',
					w : 33,
					h : 26,
					size : 84,
					video_start_ts : -1406780.7412109375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -2628864754960833259,
					background_colors : array(38),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 913145542960498236,
					background_colors : array(67),
				),
			),
			dc_id : 54,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 45,
					h : 27,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'd9ErIsSBJx16bQF5',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 5,
						x : -487649.251953125,
						y : -373279.572265625,
						zoom : 1703261.8359375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1639151.087890625,
					w : 93,
					h : 76,
					preload_prefix_size : 73,
					video_start_ts : -87484.6435546875,
					video_codec : 'z4rJisctnXbOdIR3',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 23,
					title : 'hlz3Mm2DEC5Fjb8Z',
					performer : 'vly5S0Ic9Z4THeKg',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'ZFibsSrqNaYnTUHV',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'XeGtfK3nHd8mZkyV',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	dates : array(75),
);
```