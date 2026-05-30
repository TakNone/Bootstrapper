# messages.recentStickers

**Description** : *Recently used stickers*

**Layer** : 225

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
			emoticon : 'O9Jkzbcd2SXTCK7y',
			documents : array(-7085341585583779378),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : 2805904666563796103,
		),
		$client->document(
			id : 4280178644497039086,
			access_hash : 4367474974607107493,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 16,
			mime_type : 'wlZu8NvIO1rE4c9g',
			size : 3958281717407474437,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'Ld7D2Ui3E895Cxk1',
				),
				$client->photoSize(
					type : 'FDI5sZqLO7UbyQS8',
					w : 73,
					h : 2,
					size : 82,
				),
				$client->photoCachedSize(
					type : '3Ny8OswPLYaxIDRe',
					w : 53,
					h : 4,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '5N0yk8nmXeU3xoZz',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'BFf28jsTWlLVIJYh',
					w : 40,
					h : 84,
					sizes : array(17),
				),
				$client->photoPathSize(
					type : 'bxSCqMwiB4PunLQp',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '2Qda0ZVpoqhx1S5E',
					w : 33,
					h : 78,
					size : 89,
					video_start_ts : -1487634.3076171875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 91471209390384144,
					background_colors : array(19),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -7091658105433836285,
					background_colors : array(27),
				),
			),
			dc_id : 88,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 20,
					h : 61,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'NZ9xAVoDk2hqidXj',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 75,
						x : -1342088.9404296875,
						y : 696863.498046875,
						zoom : 118280.017578125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -362069.71484375,
					w : 86,
					h : 1,
					preload_prefix_size : 9,
					video_start_ts : -1164538.1044921875,
					video_codec : 'HudofwzFG5mkXrtC',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 1,
					title : 'OXABTGynZlNS69Mk',
					performer : 'gImRSzUQ7wpB6qoM',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'dQgnUfykoxPtCa1u',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'ra3nzQE6smAHkqGj',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	dates : array(21),
);
```