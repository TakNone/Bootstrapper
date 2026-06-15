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
			emoticon : 'h5wPXsC7Ip1gcnrj',
			documents : array(-6705658354836636786),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : -2244740724238839935,
		),
		$client->document(
			id : 3296537991754565718,
			access_hash : 4591696737039630479,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 91,
			mime_type : '4QvTwL6ua5z9tESk',
			size : 694292051857053764,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '0PYa9nMJ7qAtIWKB',
				),
				$client->photoSize(
					type : 'NhktorJXL6PwqTIp',
					w : 11,
					h : 5,
					size : 69,
				),
				$client->photoCachedSize(
					type : 'sWKAQHYSG1jRTlZ5',
					w : 85,
					h : 95,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '3UcC4smf6tGriZoy',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'Qy0moHSLvJ89tNEe',
					w : 17,
					h : 26,
					sizes : array(7),
				),
				$client->photoPathSize(
					type : 'zUawLkjB1ExCscb8',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'Fd2vUPKRexm6hVpS',
					w : 13,
					h : 55,
					size : 10,
					video_start_ts : -12956.15625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -5685235711323045813,
					background_colors : array(7),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -8619877719213957270,
					background_colors : array(73),
				),
			),
			dc_id : 19,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 60,
					h : 40,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'PdHI18xKk4QSezJh',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 10,
						x : 461129.921875,
						y : 752886.8583984375,
						zoom : -2092970.2607421875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -602388.16796875,
					w : 11,
					h : 32,
					preload_prefix_size : 34,
					video_start_ts : 390830.146484375,
					video_codec : 'uSdP5JIf2DV3QvWn',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 62,
					title : 'gGoYnBvps2RNMT50',
					performer : '2GU6Li8FelpPDyvR',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'zm2AWu8NXnbqlfJk',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'KqHpBwg1ebWsrNI8',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```