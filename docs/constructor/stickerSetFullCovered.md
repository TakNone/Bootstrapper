# stickerSetFullCovered

**Description** : *Stickerset preview with all stickers of the stickerset included\.
Currently used only for custom emoji stickersets, to avoid a further call to messages\.getStickerSet*

**Layer** : 222

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
		installed_date : 36,
		id : -421725000228822282,
		access_hash : 625727529145952432,
		title : 'ZnB6017FEo5pHLXl',
		short_name : 'wHU1uBgVkcSQs0id',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'yR12tLGNlxWzTu7w',
			),
			$client->photoSize(
				type : 'tNVqKvDeIU36rkBl',
				w : 1,
				h : 4,
				size : 15,
			),
			$client->photoCachedSize(
				type : 'xJZokpeBhWmzyf8V',
				w : 69,
				h : 90,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : '5jc2EV8LXygJOHf0',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : '1ylnp7eMFxObPSAk',
				w : 62,
				h : 77,
				sizes : array(50),
			),
			$client->photoPathSize(
				type : 'FdPek4iqOCoE16f5',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 71,
		thumb_version : 34,
		thumb_document_id : -4665186438008877909,
		count : 83,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'rMSDmEkd53RWj8Ka',
			documents : array(9102155239757072828),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : -7688724914148277368,
			keyword : array('GYyuxtqAFLUlWiXH'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : 7914301400095295201,
		),
		$client->document(
			id : -893025761746255027,
			access_hash : -1271744141348819695,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 63,
			mime_type : 'Y3HKqg7bMfucNVy9',
			size : 998003014080935492,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'G0tiQWXowhx1egMp',
				),
				$client->photoSize(
					type : 'DQHtzUhOoMsBASTK',
					w : 10,
					h : 90,
					size : 12,
				),
				$client->photoCachedSize(
					type : '8G1ucCw6BkDrLp0P',
					w : 87,
					h : 58,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'xvdtqUYg2nIDpBEu',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'egfbXUKHSm2ouNkc',
					w : 88,
					h : 35,
					sizes : array(71),
				),
				$client->photoPathSize(
					type : 'S8a3LZuwPEY6BxKF',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'Md5H0Dc1XKfJqLCx',
					w : 66,
					h : 7,
					size : 49,
					video_start_ts : 1235933.9921875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 6335112320439371389,
					background_colors : array(16),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 7158942384822156108,
					background_colors : array(38),
				),
			),
			dc_id : 71,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 63,
					h : 64,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'wqndzY2RgNku0sv7',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 5,
						x : -858683.6474609375,
						y : -62523.0498046875,
						zoom : 599997.408203125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -453884.314453125,
					w : 4,
					h : 36,
					preload_prefix_size : 79,
					video_start_ts : -1230707.501953125,
					video_codec : 'rNxP5zpK2O1W9ak7',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 37,
					title : '7qpg4YOLN8QfawJo',
					performer : 'HtNzo8TnGcZWi504',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'n6RzpXZdU1uQfCKS',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'wRC9y8k4QuLGlFdo',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```