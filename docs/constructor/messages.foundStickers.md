# messages.foundStickers

**Description** : *Found stickers*

**Layer** : 229

```tl
messages.foundStickers#82c9e290 flags:# next_offset:flags.0?int hash:long stickers:Vector<Document> = messages.FoundStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **next_offset** | [`flags.0?int`](type/int) | Offset for pagination |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>stickers</mark> | [`Vector<Document>`](type/Document) | Found stickers |

---

## Type

[messages.FoundStickers](type/messages.FoundStickers)

---

## Example

```php
$messagesFoundStickers = $client->messages->foundStickers(
	next_offset : 34,
	hash : 0,
	stickers : array(
		$client->documentEmpty(
			id : -3498730039148581218,
		),
		$client->document(
			id : -7740543089296940953,
			access_hash : -8531200201849736715,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 82,
			mime_type : 'kKqdz5BcnS9uJWpw',
			size : -8193042895267139578,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'eDLaVIGj8Sg3nNdP',
				),
				$client->photoSize(
					type : 'V8lkvTm6jwK9aBGo',
					w : 66,
					h : 27,
					size : 88,
				),
				$client->photoCachedSize(
					type : 'iUDAdPJ7tB0y5TgQ',
					w : 58,
					h : 55,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '2sOePHiFElnhNLu1',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'YtLgROA70b3imlVK',
					w : 16,
					h : 62,
					sizes : array(12),
				),
				$client->photoPathSize(
					type : 'bBKPrNtjT41FMneW',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'spR7iKxgT0eWDwPH',
					w : 6,
					h : 12,
					size : 5,
					video_start_ts : 1526510.0576171875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -1407482765058359301,
					background_colors : array(19),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 3686610362267633110,
					background_colors : array(41),
				),
			),
			dc_id : 50,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 72,
					h : 80,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'kfzMLHpi6YtX34qJ',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 38,
						x : 1015719.3544921875,
						y : 479375.1240234375,
						zoom : -159913.2109375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 665625.0439453125,
					w : 93,
					h : 45,
					preload_prefix_size : 92,
					video_start_ts : -201198.953125,
					video_codec : 'qdVbB4JRMP960Zh1',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 27,
					title : 'DiGIul8b4OtPFepX',
					performer : 'FI1GkUcKna6PN05f',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'bcMVvsfRLqylW0aZ',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'k4hoAKb6CIefQY8J',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```