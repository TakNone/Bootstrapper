# messages.stickers

**Description** : *Found stickers*

**Layer** : 218

```tl
messages.stickers#30a6ec7e hash:long stickers:Vector<Document> = messages.Stickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>stickers</mark> | [`Vector<Document>`](type/Document) | Stickers |

---

## Type

[messages.Stickers](type/messages.Stickers)

---

## Example

```php
$messagesStickers = $client->messages->stickers(
	hash : 0,
	stickers : array(
		$client->documentEmpty(
			id : 4117721069286471134,
		),
		$client->document(
			id : -5007254939124494045,
			access_hash : -3964941574187566817,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 1,
			mime_type : 'x6g5G4oYSs3dlCqF',
			size : -4024584864090101824,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'XvTBO5fZi9KkQH6E',
				),
				$client->photoSize(
					type : 'P98NWI5rSyzxfAod',
					w : 2,
					h : 30,
					size : 51,
				),
				$client->photoCachedSize(
					type : 'tMgF50EmZUa9kS7J',
					w : 71,
					h : 95,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'vNQPRidmlUpYy3r6',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'mN4WLVpOuCiHgc5y',
					w : 43,
					h : 86,
					sizes : array(23),
				),
				$client->photoPathSize(
					type : '0p98OnvHqYZjhCXe',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'ABclDhHfX1RJg35r',
					w : 99,
					h : 46,
					size : 20,
					video_start_ts : -50141.646484375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 4207340850392868626,
					background_colors : array(30),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 1128621323303975284,
					background_colors : array(17),
				),
			),
			dc_id : 49,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 98,
					h : 40,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '5HntAgc2vzLQhyUV',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 51,
						x : -1656046.7119140625,
						y : -1515802.3330078125,
						zoom : 393693.0595703125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1231328.5849609375,
					w : 46,
					h : 61,
					preload_prefix_size : 84,
					video_start_ts : -993948.9365234375,
					video_codec : 'yjPLSz7TdkwaQuFs',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 85,
					title : '9YkMGO0UZb68KRia',
					performer : 'KmbSwsjIJQvDpa0P',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'rceVYZgQkHmFqC4E',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'BFQGI6pRD4ruYdib',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```