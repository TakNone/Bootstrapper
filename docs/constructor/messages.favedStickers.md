# messages.favedStickers

**Description** : *Favorited stickers*

**Layer** : 227

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
			emoticon : 'TMaDyRvpEilwo7OJ',
			documents : array(4076040522815744487),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : 7357209807714991890,
		),
		$client->document(
			id : -1349384026123126609,
			access_hash : 3473863177217361330,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 10,
			mime_type : 'jLBrbAsNXFDW3G7h',
			size : -5076997597223959397,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'ONAIJ6u0U9HMhdpF',
				),
				$client->photoSize(
					type : 'zVQ9hk2CD8b0wy3Z',
					w : 87,
					h : 54,
					size : 71,
				),
				$client->photoCachedSize(
					type : '4Z2GJhLCcjDyBNmU',
					w : 1,
					h : 80,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'Y6mEeDMQGbPRoJi5',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'LD6PjTUZO2CtVJFu',
					w : 100,
					h : 4,
					sizes : array(18),
				),
				$client->photoPathSize(
					type : 'Em0s3xFZSUG1foqJ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'LZGpvJDKRCfij9d5',
					w : 37,
					h : 87,
					size : 21,
					video_start_ts : 418541.892578125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -9159070321458941656,
					background_colors : array(62),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 6993735083386561956,
					background_colors : array(60),
				),
			),
			dc_id : 8,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 54,
					h : 35,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '9APDjGYfyTmiQlWF',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 85,
						x : 1720552.9658203125,
						y : 1682653.23046875,
						zoom : 2075224.2021484375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1106826.359375,
					w : 83,
					h : 95,
					preload_prefix_size : 51,
					video_start_ts : -448540.01953125,
					video_codec : 'wPkZ7BxnKeM10Cyb',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 77,
					title : 'YAPQF8oLSMJwyRN9',
					performer : 'HbmE9oteiWJDaPzh',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'xhBDNwnkFAL7g3db',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Oz20R4K193IUEAfe',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```