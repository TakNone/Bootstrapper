# messages.foundStickers

**Description** : *Found stickers*

**Layer** : 214

```tl
messages.foundStickers#82c9e290 flags:# next_offset:flags.0?int hash:long stickers:Vector<Document> = messages.FoundStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	next_offset : 88,
	hash : 0,
	stickers : array(
		$client->documentEmpty(
			id : 1553981667872290205,
		),
		$client->document(
			id : -3191538074967981661,
			access_hash : 4574329268370872599,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 72,
			mime_type : 'lkeMy2nSDWI6Opfo',
			size : 783679662276745635,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '5D1OFGVCp3nkKlMu',
				),
				$client->photoSize(
					type : 'sl7id2eARfcrhjqS',
					w : 1,
					h : 94,
					size : 10,
				),
				$client->photoCachedSize(
					type : 'XIA0o9vig6WCwdhj',
					w : 59,
					h : 89,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'yHABNf05McjokUDm',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'QMWBpHu8g2lfYcIa',
					w : 49,
					h : 54,
					sizes : array(56),
				),
				$client->photoPathSize(
					type : '4l0Kj3VvY2a5mteS',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'GHEYdI7sfK31exXU',
					w : 87,
					h : 42,
					size : 75,
					video_start_ts : 583135.205078125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -6529279712211193881,
					background_colors : array(53),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 4244608423111940910,
					background_colors : array(81),
				),
			),
			dc_id : 13,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 81,
					h : 79,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'R5YQsOnGU1DM9Xl7',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -376127.6787109375,
					w : 29,
					h : 26,
					preload_prefix_size : 84,
					video_start_ts : -1440103.236328125,
					video_codec : '1zYmiXoUf3dTL2ZM',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 13,
					title : 'uUQbRaCdZliBJwmO',
					performer : 'gmF56KnHRCfeaZl9',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'ruEGwKUQl7B8O1tf',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'u7SAywcGZgJiErT9',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```