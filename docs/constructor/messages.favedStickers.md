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
			emoticon : '704I6iwnx35zvyMR',
			documents : array(8985850767818706632),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : 8942244407445580695,
		),
		$client->document(
			id : 5509773765528579000,
			access_hash : -6076573950922810009,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 41,
			mime_type : 'QtSNiPfrlWDLRTjb',
			size : 2098128506317764072,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'ZitqgWPcy5neCpSf',
				),
				$client->photoSize(
					type : 'Twl4xBkyvcGLNdSq',
					w : 28,
					h : 15,
					size : 6,
				),
				$client->photoCachedSize(
					type : '86wyMor3vjl4I1ZN',
					w : 10,
					h : 8,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'nPUrLboHhvW1akcm',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'Vmscl3OPERIMThtD',
					w : 98,
					h : 35,
					sizes : array(75),
				),
				$client->photoPathSize(
					type : 'FpEZB4bfX28hcYI3',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'JZaqvbVYK9swp4xF',
					w : 71,
					h : 91,
					size : 59,
					video_start_ts : 1072249.7724609375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -7295832281736635625,
					background_colors : array(0),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -2458786668741994941,
					background_colors : array(65),
				),
			),
			dc_id : 37,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 50,
					h : 63,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'clqPe5QuWJGVd6YS',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 93,
						x : 1631266.0966796875,
						y : -124175.140625,
						zoom : -768935.99609375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1274349.0830078125,
					w : 4,
					h : 48,
					preload_prefix_size : 42,
					video_start_ts : 1505456.8505859375,
					video_codec : 'tgkn6RTU5LY8QeCG',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 71,
					title : 'lBvGfuAPV7Qc8Hnh',
					performer : 'EiIpMAdWgoeKPb5s',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '10zaMloL3usb9Chi',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'BvEFscmxGj3lbL1Z',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```