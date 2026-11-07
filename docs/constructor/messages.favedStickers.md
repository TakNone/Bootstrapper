# messages.favedStickers

**Description** : *Favorited stickers*

**Layer** : 229

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
			emoticon : 'ULPDrTCQgF09vZO7',
			documents : array(-7867413634902619714),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : 7984810969107912695,
		),
		$client->document(
			id : -4560702467563047178,
			access_hash : -3554351434476877014,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 47,
			mime_type : 'OYNyqj8TS4hAgV35',
			size : -7674976946413094670,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'S6OoyY7kb9sWXpPL',
				),
				$client->photoSize(
					type : 'JRMDo80pKzyQZcXm',
					w : 64,
					h : 33,
					size : 83,
				),
				$client->photoCachedSize(
					type : 'qhP8BRjb3LpfI9e4',
					w : 97,
					h : 92,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'qTrSco61kh5vg7AF',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'I7kfhMs0y1Lm2ojt',
					w : 83,
					h : 57,
					sizes : array(99),
				),
				$client->photoPathSize(
					type : 'napmTNoDIL9PC5RA',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'fYGqRNCoIEpzF5Qk',
					w : 12,
					h : 4,
					size : 52,
					video_start_ts : 564434.0166015625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 7005155640804983405,
					background_colors : array(5),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -704908740286748468,
					background_colors : array(75),
				),
			),
			dc_id : 95,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 42,
					h : 35,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '5u7lqDQNYWrBApTR',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 97,
						x : -1201090.888671875,
						y : 1575919.3857421875,
						zoom : -930008.6435546875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1526756.1572265625,
					w : 26,
					h : 1,
					preload_prefix_size : 29,
					video_start_ts : -411424.5927734375,
					video_codec : 'OFTk20qyYiGxX1cN',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 32,
					title : 'nbPcMHEpJW38aklZ',
					performer : 'nB5fT0Whsk1KSe9z',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'kDApBiV7fQyrhUqb',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'HT5zabWpAc9SmdBK',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```