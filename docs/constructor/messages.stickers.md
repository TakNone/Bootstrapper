# messages.stickers

**Description** : *Found stickers*

**Layer** : 222

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
			id : -532023810187607842,
		),
		$client->document(
			id : -3827046272203454934,
			access_hash : 3007160151226419478,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 89,
			mime_type : 'yWEmAL8ocCw9xHz6',
			size : -2546668135181425108,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'e7nUBFXam5I4QkuA',
				),
				$client->photoSize(
					type : 'ylFpPAugf3sz9HKm',
					w : 98,
					h : 24,
					size : 59,
				),
				$client->photoCachedSize(
					type : '9CR0sAJXMISjld6g',
					w : 5,
					h : 78,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'fL0h3ApdI1lsQ8ym',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'poX0uiArf3I85ngZ',
					w : 41,
					h : 90,
					sizes : array(38),
				),
				$client->photoPathSize(
					type : 'ktlfhICuWG6AsMVg',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'e03ZTSCV1t7uN5L4',
					w : 24,
					h : 100,
					size : 43,
					video_start_ts : 1555281.265625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 744902525631073558,
					background_colors : array(56),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 7824999469942303767,
					background_colors : array(28),
				),
			),
			dc_id : 77,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 49,
					h : 44,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'jdIBUeK7ySxsEm9W',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 100,
						x : -816142.2861328125,
						y : 2006150.2568359375,
						zoom : -1162197.4765625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -2046903.9638671875,
					w : 75,
					h : 44,
					preload_prefix_size : 34,
					video_start_ts : -804012.6005859375,
					video_codec : 'FWpdR0wk2Ha1jXtm',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 0,
					title : 'MpJleN8jHxYEkcoA',
					performer : 'fi9Ns37udElxrjqC',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'QmsTPHN9hJviV5ZS',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'TNe3iCx0zWHQISXL',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```