# messages.myStickers

**Description** : *The list of stickersets owned by the current account &raquo;*

**Layer** : 227

```tl
messages.myStickers#faff629d count:int sets:Vector<StickerSetCovered> = messages.MyStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of owned stickersets |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Stickersets |

---

## Type

[messages.MyStickers](type/messages.MyStickers)

---

## Example

```php
$messagesMyStickers = $client->messages->myStickers(
	count : 91,
	sets : array(
		$client->stickerSetCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 100,
				id : 7547021185282975017,
				access_hash : 8434492121728493319,
				title : '7IfkrimSG6DN0suV',
				short_name : 'lSkJz9ctGHvm4wQY',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'mL7ztJgOGIZ6lnr0',
					),
					$client->photoSize(
						type : 'E8qNOmD56yAj2icw',
						w : 50,
						h : 65,
						size : 6,
					),
					$client->photoCachedSize(
						type : 'RAsHtNrfymuMnIGF',
						w : 39,
						h : 34,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '0VYIiz5PS6nyR2pc',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '0Vl1TFp9oncaCyDR',
						w : 4,
						h : 99,
						sizes : array(23),
					),
					$client->photoPathSize(
						type : 'WjBC14w7uLViXEsf',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 47,
				thumb_version : 44,
				thumb_document_id : -293213449737730523,
				count : 62,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -4998062232102660475,
			),
		),
		$client->stickerSetMultiCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 96,
				id : -3650624937165347080,
				access_hash : -1908115204232519719,
				title : 'uhgcrk42ivy5znYK',
				short_name : 'vyoHqtGXNQ9VuBse',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'IgfE13N79LDAt24j',
					),
					$client->photoSize(
						type : 'PowuNi4qBTHGe0OK',
						w : 75,
						h : 9,
						size : 37,
					),
					$client->photoCachedSize(
						type : 'hxzJcGdKgey582H0',
						w : 95,
						h : 32,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'I0xXfK47giGqaTk2',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'FIuKkNBvUl8ns3bx',
						w : 57,
						h : 59,
						sizes : array(24),
					),
					$client->photoPathSize(
						type : 'EabspDR752gSYFyZ',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 89,
				thumb_version : 18,
				thumb_document_id : -1450572397742971875,
				count : 85,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 8745485033497617767,
				),
				$client->document(
					id : -5425552138401853070,
					access_hash : 3645470224922541781,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 4,
					mime_type : 'lgW04iREScfMksr9',
					size : -3209669738422742605,
					thumbs : array(
						$client->photoSizeEmpty(
							type : '3W8KeCXLYhz2Eu65',
						),
						$client->photoSize(
							type : 'JMuLwie4zcVv3gqZ',
							w : 95,
							h : 4,
							size : 94,
						),
						$client->photoCachedSize(
							type : 'WjkhDbB8xgTw2tcp',
							w : 82,
							h : 70,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'D0rZqxjQus4H89NU',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'H9QvnG0jOo14ESg5',
							w : 11,
							h : 71,
							sizes : array(50),
						),
						$client->photoPathSize(
							type : 'fhrcDwPW5tv1kdVO',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'F1xa2ELiYWMrIHyf',
							w : 71,
							h : 29,
							size : 59,
							video_start_ts : -892822.9375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 2292828653108239212,
							background_colors : array(82),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -512933710710047876,
							background_colors : array(57),
						),
					),
					dc_id : 7,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 34,
							h : 17,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'tRN4smb8JvFMoidK',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -40515.8681640625,
							w : 6,
							h : 96,
							preload_prefix_size : 27,
							video_start_ts : 1019461.291015625,
							video_codec : 'DaZiKmvJsntATMC9',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 14,
							title : 'qyWAbwtRdr6cYevf',
							performer : 'xSrE6HYDw2dovZNJ',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : '4Ywa7DB8hCtM3WIo',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'txzAr19W8lQiLwTc',
							stickerset : $client->inputStickerSetEmpty(...),
						),
					),
				),
			),
		),
		$client->stickerSetFullCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 17,
				id : 8389424889442633959,
				access_hash : 2846572787539708574,
				title : 'Nf9Wyj20QHVGSwAM',
				short_name : 'H1JxUBPWQe5tlfZ9',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'MEn4kLGhawTjzq8H',
					),
					$client->photoSize(
						type : '63XDwlOE4UJcRKzr',
						w : 9,
						h : 100,
						size : 16,
					),
					$client->photoCachedSize(
						type : 'TjsRLtfkqMZSWyau',
						w : 75,
						h : 4,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'uqiWPDOznJMyboxZ',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'Eh1uFgxG7AZXq5Ry',
						w : 79,
						h : 68,
						sizes : array(82),
					),
					$client->photoPathSize(
						type : 'TsDJW63Yx9kHhXlc',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 2,
				thumb_version : 23,
				thumb_document_id : -6101909806610491472,
				count : 59,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'dmpD7GsnKL1kOMcF',
					documents : array(-3520062719806337844),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -2153325060547824835,
					keyword : array('D2nfJZaBP1beVy8v'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -2184407006204545252,
				),
				$client->document(
					id : -7074699085632828623,
					access_hash : 8063051529721355406,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 51,
					mime_type : 'zbVhi92rIkmgpw0u',
					size : -4955077079775374322,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 's0cqWTrQ3OpIkPVK',
						),
						$client->photoSize(
							type : 'qJufeBEn6Z4AdKoh',
							w : 9,
							h : 11,
							size : 9,
						),
						$client->photoCachedSize(
							type : 'iJD8qeVGgntLyukB',
							w : 41,
							h : 80,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'XnBzSrFafQik7Yc3',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'pIZiqoDskbvry5G8',
							w : 52,
							h : 45,
							sizes : array(96),
						),
						$client->photoPathSize(
							type : 'IfO6UHEJD7rot41W',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'YOcexziW8KQR7E30',
							w : 89,
							h : 85,
							size : 36,
							video_start_ts : 1082085.6318359375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -2210006910807299683,
							background_colors : array(54),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -86897005718225902,
							background_colors : array(26),
						),
					),
					dc_id : 89,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 84,
							h : 8,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'E1SgbCZMmKi7AoQH',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 124755.287109375,
							w : 56,
							h : 93,
							preload_prefix_size : 16,
							video_start_ts : 1340478.50390625,
							video_codec : 'pFAO2bmRUwQV7KXa',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 58,
							title : 'pyTGQfUusdLVHltm',
							performer : 'CwjaFPN6MHbRvUTE',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'Egs3dAPXNtCf960l',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'g8lNiPJGsed1R7aq',
							stickerset : $client->inputStickerSetEmpty(...),
						),
					),
				),
			),
		),
		$client->stickerSetNoCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 82,
				id : 687325653016450245,
				access_hash : 3639906889989568598,
				title : 'tNE4dPUDqwxMmCsK',
				short_name : 'XrTi68wPocvdMOxz',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'ZermiONLKYcytMBR',
					),
					$client->photoSize(
						type : 'xgPVld1mi8z37QIJ',
						w : 22,
						h : 82,
						size : 99,
					),
					$client->photoCachedSize(
						type : 'bqXGZwIBvUO6LKsx',
						w : 25,
						h : 22,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'zxUI8sDtYyW1hnfA',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'wPtclixgMzX6DdGY',
						w : 88,
						h : 31,
						sizes : array(17),
					),
					$client->photoPathSize(
						type : 'aA0JenpNSPEDQ5q6',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 5,
				thumb_version : 72,
				thumb_document_id : 3224328874038429011,
				count : 78,
				hash : 0,
			),
		),
	),
);
```