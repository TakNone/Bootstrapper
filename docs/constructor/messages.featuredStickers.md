# messages.featuredStickers

**Description** : *Featured stickersets*

**Layer** : 218

```tl
messages.featuredStickers#be382906 flags:# premium:flags.0?true hash:long count:int sets:Vector<StickerSetCovered> unread:Vector<long> = messages.FeaturedStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **premium** | [`flags.0?true`](type/true) | Whether this is a premium stickerset |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>count</mark> | [`int`](type/int) | Total number of featured stickers |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Featured stickersets |
| <mark>unread</mark> | [`Vector<long>`](type/long) | IDs of new featured stickersets |

---

## Type

[messages.FeaturedStickers](type/messages.FeaturedStickers)

---

## Example

```php
$messagesFeaturedStickers = $client->messages->featuredStickers(
	premium : true,
	hash : 0,
	count : 69,
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
				installed_date : 63,
				id : 6924290146307170320,
				access_hash : 6399256598869706558,
				title : 'ZOacUdPR2w6rzKXq',
				short_name : 'eGTmpE23fUZIu5aj',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '9weByDQp8i13WLUZ',
					),
					$client->photoSize(
						type : 'so7cZW9HbEi5rNgC',
						w : 45,
						h : 32,
						size : 69,
					),
					$client->photoCachedSize(
						type : 'PhZtxp3ydXYGq5nN',
						w : 21,
						h : 41,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'rseHckEYWQS4jiTo',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'dQ3BzP5u7m9lHTUO',
						w : 55,
						h : 74,
						sizes : array(34),
					),
					$client->photoPathSize(
						type : 'a4BX5AgNZJpVbKCU',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 27,
				thumb_version : 95,
				thumb_document_id : 8053104297238891333,
				count : 54,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -3677837413624088081,
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
				installed_date : 6,
				id : -1232117297689864582,
				access_hash : -1508254624667309347,
				title : 'wTOHm9tzr84XegpD',
				short_name : 'YX9ymJOhvu024xeD',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'ER3kng6p78ZWD49i',
					),
					$client->photoSize(
						type : 'uqF80HRBUcnzm3DW',
						w : 24,
						h : 78,
						size : 61,
					),
					$client->photoCachedSize(
						type : 'wvDU5xOAPrYz0GFM',
						w : 22,
						h : 85,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'Q7SEhJGo1z0al6pY',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'ymp5sVX1YNexuvrt',
						w : 64,
						h : 13,
						sizes : array(31),
					),
					$client->photoPathSize(
						type : 'pYKPIuzR2gy56vwr',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 11,
				thumb_version : 74,
				thumb_document_id : 1511814517386776174,
				count : 65,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 2001094387478543267,
				),
				$client->document(
					id : -97508699940946378,
					access_hash : -1272779614135038668,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 79,
					mime_type : 'YPu9NQK28BfsDZMJ',
					size : -7515216116312378571,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'gGvNuKlELx1T7iRw',
						),
						$client->photoSize(
							type : '69EwRtrvB8QS73DU',
							w : 60,
							h : 63,
							size : 33,
						),
						$client->photoCachedSize(
							type : 'vYUrsJ0B31LnDjow',
							w : 0,
							h : 63,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'z1pExWm7rZkh8Atj',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'w0cKqFT645h8SUEC',
							w : 52,
							h : 24,
							sizes : array(63),
						),
						$client->photoPathSize(
							type : 'sFCbVIP09J67YcrD',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'ZOn631meTFGKYIlA',
							w : 98,
							h : 48,
							size : 76,
							video_start_ts : 1749115.912109375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 4122032550498538196,
							background_colors : array(88),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 7410724675350321447,
							background_colors : array(18),
						),
					),
					dc_id : 27,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 80,
							h : 0,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'uqr0TXJyeVWGZPvL',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1808066.896484375,
							w : 16,
							h : 66,
							preload_prefix_size : 54,
							video_start_ts : -430097.796875,
							video_codec : 'wWeNjBYdMyamFsfO',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 21,
							title : '7VO2ehNxCI0M5zFo',
							performer : 'CbphsXDWZx5O4zvd',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'fYot1K8ErbqBuyhS',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'fS28iT1L0omdIs5y',
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
				installed_date : 78,
				id : 7541173947747008769,
				access_hash : -5212314016796631647,
				title : 'QWEybso6Mek1vZUi',
				short_name : 'OnQS4DFgLHUJspKR',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'X7dPRNFDBhJGtZIj',
					),
					$client->photoSize(
						type : 'phoGD6kfSAX8PrxF',
						w : 77,
						h : 80,
						size : 95,
					),
					$client->photoCachedSize(
						type : '25er6CjqgApdmvfY',
						w : 48,
						h : 47,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'Kusm7Viqp9e45vtj',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '5a2mxec6YOZGuUjb',
						w : 10,
						h : 49,
						sizes : array(96),
					),
					$client->photoPathSize(
						type : 's2r8Qy7JN1nKFH03',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 56,
				thumb_version : 99,
				thumb_document_id : 6389688926018193758,
				count : 71,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : '7AcvndIERbzTlWGL',
					documents : array(-4654023181176838084),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -6042536858362776645,
					keyword : array('l7BjtdsPaQLJoRcv'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 1084872796527511560,
				),
				$client->document(
					id : 5320663572150889915,
					access_hash : -3566263133796696813,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 74,
					mime_type : 'g568CjM2cSaqVkJh',
					size : -354853807969274715,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'qM2aARJrjkK8NnQi',
						),
						$client->photoSize(
							type : 'D3j6UOrK0oMhSgW8',
							w : 44,
							h : 87,
							size : 44,
						),
						$client->photoCachedSize(
							type : 'uwLsHIDfv0r5hgqn',
							w : 7,
							h : 82,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : '7BK5tJFf2yNSOHkd',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '4o2s6Qt1whSjVZkC',
							w : 87,
							h : 44,
							sizes : array(45),
						),
						$client->photoPathSize(
							type : 'bstEjQWfrSVhiTKc',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'riU5wFbYIsMTlzcx',
							w : 55,
							h : 25,
							size : 90,
							video_start_ts : 772224.1142578125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 1469774753423708440,
							background_colors : array(59),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -4214915473830938760,
							background_colors : array(94),
						),
					),
					dc_id : 19,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 37,
							h : 36,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'YpaNreuDhKPilJV5',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -1347769.76171875,
							w : 30,
							h : 86,
							preload_prefix_size : 58,
							video_start_ts : -1118729.05859375,
							video_codec : 'X62rW7zkyTHonjdM',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 52,
							title : 'UkmcP8xV54XDusKh',
							performer : 'WcylJMaSATKB0VfF',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'rg1DblK7UJvsRCIO',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'TWKyA2SsUVI8lvj5',
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
				installed_date : 57,
				id : 8278685699888901843,
				access_hash : -7750038081283241903,
				title : 'sc50OxUkN9Dv2163',
				short_name : 'A6CYjNwvbm3W79FK',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'vXrCV4s0Q6DUmFfL',
					),
					$client->photoSize(
						type : 'pwo87vqQx5i9VDf0',
						w : 31,
						h : 29,
						size : 33,
					),
					$client->photoCachedSize(
						type : 'T2pCoLfyGcdujbaW',
						w : 53,
						h : 37,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'ZieNOS4QG5FoBLCR',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'A3F0mGkf5wgXEPvh',
						w : 19,
						h : 76,
						sizes : array(80),
					),
					$client->photoPathSize(
						type : 'xG4m2Ucbdl8p1qgM',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 6,
				thumb_version : 68,
				thumb_document_id : 1187005485820199343,
				count : 83,
				hash : 0,
			),
		),
	),
	unread : array(139283070234489278),
);
```