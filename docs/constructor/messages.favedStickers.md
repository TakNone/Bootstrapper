# messages.favedStickers

**Description** : *Favorited stickers*

**Layer** : 225

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
			emoticon : 'tWkcGezfKnSOmLjd',
			documents : array(7248845458095211005),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : -3314845320523396822,
		),
		$client->document(
			id : 8289067838320593504,
			access_hash : 4337346870525655239,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 47,
			mime_type : 'K5mG48Yws2SBXx7u',
			size : 4446553274137456601,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '3doylEDbGvmks4LX',
				),
				$client->photoSize(
					type : '3QJl0UjVWkxpHm2B',
					w : 11,
					h : 14,
					size : 86,
				),
				$client->photoCachedSize(
					type : 'xLk2TqA1uwdEo6WK',
					w : 44,
					h : 16,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'CZuzYGXIKxsWMd4R',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'Pj8vZl9FWi04GOne',
					w : 96,
					h : 58,
					sizes : array(46),
				),
				$client->photoPathSize(
					type : 'Ef7YDNw4CusK16mM',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '7WQnVIOMgmXFhNE0',
					w : 91,
					h : 85,
					size : 98,
					video_start_ts : 465089.1689453125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 4985488459681653955,
					background_colors : array(96),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 2733514721546469383,
					background_colors : array(12),
				),
			),
			dc_id : 77,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 7,
					h : 27,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'a2c4lkTASZViBrwP',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 90,
						x : -38919.7998046875,
						y : -1845712.4072265625,
						zoom : -103508.27734375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1522712.1845703125,
					w : 70,
					h : 15,
					preload_prefix_size : 42,
					video_start_ts : -326521.48046875,
					video_codec : 'M5Da2ysqRSJQ9Hpi',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 90,
					title : 'L6xkJ0Y9tKmlanId',
					performer : 'Jvk6YcoRglWuPmAh',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'Kq5r6QuPGH0RyBpf',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Cw1SxAGH2FZaJLKc',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```