# stickerSetFullCovered

**Description** : *Stickerset preview with all stickers of the stickerset included\.
Currently used only for custom emoji stickersets, to avoid a further call to messages\.getStickerSet*

**Layer** : 227

```tl
stickerSetFullCovered#40d13c0e set:StickerSet packs:Vector<StickerPack> keywords:Vector<StickerKeyword> documents:Vector<Document> = StickerSetCovered;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>set</mark> | [`StickerSet`](type/StickerSet) | Stickerset |
| <mark>packs</mark> | [`Vector<StickerPack>`](type/StickerPack) | Emoji information about every sticker in the stickerset |
| <mark>keywords</mark> | [`Vector<StickerKeyword>`](type/StickerKeyword) | Keywords for some or every sticker in the stickerset |
| <mark>documents</mark> | [`Vector<Document>`](type/Document) | Stickers |

---

## Type

[StickerSetCovered](type/StickerSetCovered)

---

## Example

```php
$stickerSetCovered = $client->stickerSetFullCovered(
	set : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 59,
		id : 3177665769479977006,
		access_hash : 621336190059881910,
		title : 'lsOSRU41txQ8qWnf',
		short_name : 'E892teKTOvi0C5I7',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'p6NPY4MHVs5ao9yb',
			),
			$client->photoSize(
				type : 'vajmDC9hs2Wxf18N',
				w : 22,
				h : 38,
				size : 72,
			),
			$client->photoCachedSize(
				type : 'fgOSib6achveFRZQ',
				w : 1,
				h : 61,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'W1jgkErum6aQBHYn',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'mfYWX23kCy0IvNnK',
				w : 95,
				h : 42,
				sizes : array(30),
			),
			$client->photoPathSize(
				type : 'adwOrepE7JkzZoMl',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 27,
		thumb_version : 86,
		thumb_document_id : -2882376962630498820,
		count : 25,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'V4GpmAfHkEzQTl3B',
			documents : array(-3660620088202740388),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : 2221323461824265429,
			keyword : array('jpwhPab9SKdR1sQH'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -156644068387270505,
		),
		$client->document(
			id : 2912508602154645996,
			access_hash : -6815826013679192604,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 68,
			mime_type : 'PU2rcda31WFusSti',
			size : -652799287212752181,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'xvhmAkoFWSJsliCK',
				),
				$client->photoSize(
					type : 'zYhDP6RLOtNbJSfB',
					w : 85,
					h : 43,
					size : 46,
				),
				$client->photoCachedSize(
					type : 'UtjQKP23ZqAaFvWY',
					w : 84,
					h : 2,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'y0UfGdiABPe5pDbn',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'lWdXrw5jnQkoFys4',
					w : 8,
					h : 42,
					sizes : array(70),
				),
				$client->photoPathSize(
					type : 'uKJhyq4kXcBVTl70',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'b2hWt8MJOz5wkUBu',
					w : 92,
					h : 54,
					size : 2,
					video_start_ts : -1930356.3212890625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 830988978444331864,
					background_colors : array(60),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -6740076666064567200,
					background_colors : array(2),
				),
			),
			dc_id : 36,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 75,
					h : 11,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'UfWVxIvFjq9mkX2z',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 59,
						x : -185253.7470703125,
						y : -1096291.0849609375,
						zoom : -1261155.1357421875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -224455.20703125,
					w : 16,
					h : 47,
					preload_prefix_size : 11,
					video_start_ts : 1021178.021484375,
					video_codec : '60ZIpG8o3mY2Bj7O',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 89,
					title : 'LvBf6bV94ZPCMhm7',
					performer : '8QpxTgjUnh7KlWIV',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'Q41sfpwg3ojJFkla',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Sxj4agMmD3UvnLeK',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```