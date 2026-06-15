# messages.foundStickerSets

**Description** : *Found stickersets*

**Layer** : 227

```tl
messages.foundStickerSets#8af09dd2 hash:long sets:Vector<StickerSetCovered> = messages.FoundStickerSets;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Found stickersets |

---

## Type

[messages.FoundStickerSets](type/messages.FoundStickerSets)

---

## Example

```php
$messagesFoundStickerSets = $client->messages->foundStickerSets(
	hash : 0,
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
				installed_date : 92,
				id : 5120728771237379022,
				access_hash : 3387889055152479573,
				title : 'JbtgcqQGEXznoHad',
				short_name : 'zWfIKLmlnqt4ivZG',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'PBvGih1Ucuebx5tV',
					),
					$client->photoSize(
						type : 'ImbwOTcY1RtflzFU',
						w : 36,
						h : 25,
						size : 61,
					),
					$client->photoCachedSize(
						type : 'QuwbBpFq3KTXAG0C',
						w : 30,
						h : 59,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'H3iKusBrVz0eCEQD',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'hMosbvRCdxAzWV4j',
						w : 0,
						h : 90,
						sizes : array(24),
					),
					$client->photoPathSize(
						type : '42ErPtAz9VmSXIv0',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 55,
				thumb_version : 19,
				thumb_document_id : -1501536520464720685,
				count : 93,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 4005646148401756997,
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
				installed_date : 85,
				id : -4494446408158283624,
				access_hash : -8226417430928801634,
				title : 'cSx2e9gNn8TskaFQ',
				short_name : 'GNbzABR3TYao0Khu',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'nA8j0lCWfxyhBZJv',
					),
					$client->photoSize(
						type : '0qFVIhJSnfyUPxpz',
						w : 68,
						h : 13,
						size : 41,
					),
					$client->photoCachedSize(
						type : '7TPFaZxJSb4mLX1O',
						w : 67,
						h : 70,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'dgq4eXhV5fIT2SHw',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '7wnRNfEbg9qvyhG8',
						w : 32,
						h : 81,
						sizes : array(81),
					),
					$client->photoPathSize(
						type : 'vSin5392axfDZRHK',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 76,
				thumb_version : 4,
				thumb_document_id : -6338217180975735086,
				count : 82,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 7892748418577045088,
				),
				$client->document(
					id : 6807247838056338108,
					access_hash : -287957217320252105,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 33,
					mime_type : 'F9wI70KasZRmLpik',
					size : -7528516693787439652,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'hgZqeJbs5Y68PLXA',
						),
						$client->photoSize(
							type : 'f8JNsQtxwdkIAgvK',
							w : 9,
							h : 26,
							size : 38,
						),
						$client->photoCachedSize(
							type : 'mMyK7bFCHS6kPqpI',
							w : 89,
							h : 18,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'Xe8njpzNbPtZ5EC2',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'tGHAaDmYLzruTBNC',
							w : 77,
							h : 97,
							sizes : array(45),
						),
						$client->photoPathSize(
							type : 'yTz7pAkKtIlDFMZL',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'NztiFR6MjTyfZUsO',
							w : 21,
							h : 84,
							size : 56,
							video_start_ts : 1159148.2666015625,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -6330842516889350023,
							background_colors : array(4),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -5625250546387816382,
							background_colors : array(28),
						),
					),
					dc_id : 33,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 91,
							h : 9,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'F1fw3lY9K25MdVDP',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1403748.595703125,
							w : 64,
							h : 73,
							preload_prefix_size : 28,
							video_start_ts : -905681.3212890625,
							video_codec : 'CT7O8bQX0YLJqHRI',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 92,
							title : 'uHBwet1lnTOUgyrC',
							performer : 'Bye93tkHrwNbz5d8',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'RNi2my5SpQvTHXdO',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'L9hdnoUc4wFMDSvV',
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
				installed_date : 80,
				id : 7095400186283964637,
				access_hash : -5583771806517926276,
				title : 'a2GM8Iu7nXmjkley',
				short_name : 't0lrXCa2hMzpwZEo',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'YDUjtifMBaEOr4Pg',
					),
					$client->photoSize(
						type : 'ksgVO6PNrWonb1Y4',
						w : 41,
						h : 100,
						size : 6,
					),
					$client->photoCachedSize(
						type : 'vuPI8Xq0BH21WYhT',
						w : 61,
						h : 76,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '7e5Xru48msGkjdAE',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'MiITUqHCGbXLEaJd',
						w : 43,
						h : 89,
						sizes : array(29),
					),
					$client->photoPathSize(
						type : 'sDhpSn7RIUWM5Yaq',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 73,
				thumb_version : 38,
				thumb_document_id : -4095835894008508074,
				count : 74,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'xSJLy9hEcU2tF6aq',
					documents : array(3036865305183926244),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -8142693679231031234,
					keyword : array('qTaujQJSAEvZ2y1M'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -7871512753892043498,
				),
				$client->document(
					id : 1406648466992620327,
					access_hash : 6976187971771355662,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 64,
					mime_type : 'qjehG21W5AUuCDiB',
					size : -3401314123075950182,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'DYeMVshCU3EpvB9N',
						),
						$client->photoSize(
							type : 'GxvRdM72VTU45Sg0',
							w : 29,
							h : 7,
							size : 44,
						),
						$client->photoCachedSize(
							type : 'WcCwNx9eFH6AXyIB',
							w : 60,
							h : 86,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'TRgViFHh68OwIajx',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '7LADHbCmSPKa8qdi',
							w : 99,
							h : 11,
							sizes : array(16),
						),
						$client->photoPathSize(
							type : 'tZxzvDWoVSwe0MHh',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'U3MFepgXREsyjLv9',
							w : 9,
							h : 92,
							size : 81,
							video_start_ts : 1246964.4609375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 1902781660856050604,
							background_colors : array(50),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 5728476024054597680,
							background_colors : array(20),
						),
					),
					dc_id : 27,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 72,
							h : 69,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'DFgc1TCI4MlO0EnN',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -1968818.9296875,
							w : 21,
							h : 44,
							preload_prefix_size : 78,
							video_start_ts : 1207461.142578125,
							video_codec : 'VnhPlOLUacF21Hur',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 16,
							title : 'iEaPuARx9N2wvqy4',
							performer : 'OYhgw9eRbQ1SI7MK',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'QkR1hK3EgVuw7rAv',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'PRCuogphyWU7iEqQ',
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
				installed_date : 46,
				id : 5431591567195354929,
				access_hash : -8574696781713890824,
				title : 'GcKw4HEdOlRVSt3e',
				short_name : '4x5njaEQuRJGgvek',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '4x98w6N2ny1u3qth',
					),
					$client->photoSize(
						type : 'sMwkvuN8EG4Y9IDV',
						w : 81,
						h : 66,
						size : 67,
					),
					$client->photoCachedSize(
						type : '76kK2SqJ8dNFnwZe',
						w : 61,
						h : 47,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'wQRoWyKbJhYpHNz9',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '2B0An95mE3iHtsK6',
						w : 51,
						h : 39,
						sizes : array(65),
					),
					$client->photoPathSize(
						type : 'V620u9jtwgxEQSn5',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 74,
				thumb_version : 79,
				thumb_document_id : 9163902327866523063,
				count : 27,
				hash : 0,
			),
		),
	),
);
```