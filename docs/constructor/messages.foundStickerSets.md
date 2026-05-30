# messages.foundStickerSets

**Description** : *Found stickersets*

**Layer** : 222

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
				installed_date : 25,
				id : -7248173995862576150,
				access_hash : 8733683075604975369,
				title : 'lTcRkNYObIZ5VXH2',
				short_name : '9cJpKZdbYIjr7ViT',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'nH9bLEKqetDXMirT',
					),
					$client->photoSize(
						type : 'gjCRoPrmzt043QUe',
						w : 16,
						h : 73,
						size : 56,
					),
					$client->photoCachedSize(
						type : 'yxbzreqCW0K6TYZ8',
						w : 37,
						h : 8,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '9gLbsIRPu0UTafKH',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '7Xxwza3D2UNk9YgI',
						w : 7,
						h : 34,
						sizes : array(23),
					),
					$client->photoPathSize(
						type : 'uJ8fVrdlHSmnyA2L',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 99,
				thumb_version : 55,
				thumb_document_id : 5685516548583159154,
				count : 71,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 4913544711285257428,
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
				installed_date : 13,
				id : 4722787952040607561,
				access_hash : 1415747461997230863,
				title : 'mWQXTHVgl5E1Gfx6',
				short_name : '80OTxNo4uSEMnGLz',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'YG1cK64XCZVQpHgt',
					),
					$client->photoSize(
						type : 'T6rASNoCGdDRx3k7',
						w : 2,
						h : 10,
						size : 19,
					),
					$client->photoCachedSize(
						type : 'UkBF3e0OCXwbfTZG',
						w : 87,
						h : 55,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'ZSq6Mr0Ds4RvQxHV',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'NRm7T3XgSnJa1pDC',
						w : 63,
						h : 59,
						sizes : array(68),
					),
					$client->photoPathSize(
						type : 'kDQbfKGjBSpLrTns',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 60,
				thumb_version : 41,
				thumb_document_id : -6072224955718102426,
				count : 31,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -4456116098062221734,
				),
				$client->document(
					id : -3161086183406010955,
					access_hash : 31392958950992967,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 87,
					mime_type : 'zhwoJ25gNn3ba0Cr',
					size : 3159404268231347789,
					thumbs : array(
						$client->photoSizeEmpty(
							type : '69ziBbNcnyuf7QKI',
						),
						$client->photoSize(
							type : 'CQLvAIDnYZ7Oglxj',
							w : 43,
							h : 42,
							size : 24,
						),
						$client->photoCachedSize(
							type : 'X50v9pgMj8mtlIDS',
							w : 0,
							h : 18,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'xtP7YCqdnpf1sTzU',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'FAnJX34pyEI5crYK',
							w : 29,
							h : 2,
							sizes : array(50),
						),
						$client->photoPathSize(
							type : '6HcmnsOdZrbx0C9e',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'Z6MtxsEwF3y4HrUn',
							w : 85,
							h : 25,
							size : 59,
							video_start_ts : 342513.7041015625,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 1183110403545744865,
							background_colors : array(79),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 8568277871848457163,
							background_colors : array(14),
						),
					),
					dc_id : 42,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 5,
							h : 75,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'Bw8DPUZtbfmLpkcd',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -1383177.2783203125,
							w : 28,
							h : 3,
							preload_prefix_size : 70,
							video_start_ts : -1774718.5478515625,
							video_codec : 'NZo4geh91GbvnU7F',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 18,
							title : 'GojTfJhEubcUQnyp',
							performer : 'VI4ZyGe5MoC3NdYR',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'PcVNADjmEgMxRaGe',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'cYeaHQsmgVOwzt7S',
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
				installed_date : 0,
				id : 586356658177911837,
				access_hash : -5222298287698583061,
				title : 'Xo3sRNckQBL1F0KE',
				short_name : 'oct6YwW0zSEfanOd',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '1ufb3NE9MAV5SwXj',
					),
					$client->photoSize(
						type : '5gNWGtyQ89FZ7CDL',
						w : 92,
						h : 83,
						size : 75,
					),
					$client->photoCachedSize(
						type : 'a0RoqGMpU7uKOwtD',
						w : 12,
						h : 87,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'SdbhvTeqc2DtQERP',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'jcDVMaJ6zIvT7SlP',
						w : 61,
						h : 38,
						sizes : array(65),
					),
					$client->photoPathSize(
						type : 'F5hpLg16EqY2MtHu',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 89,
				thumb_version : 98,
				thumb_document_id : -4492058715294867640,
				count : 38,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'WoC8UAw2dlzKJOPm',
					documents : array(-4367037659170962236),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 8139983734232564767,
					keyword : array('Adnx5fKlcPsG6HbE'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -6520180070241458397,
				),
				$client->document(
					id : -4077105286849050768,
					access_hash : -1895334233992055253,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 55,
					mime_type : 'fdrEQ0s91xS638Fc',
					size : -7183081194575313549,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'PnRdqLvlhwjOf2cK',
						),
						$client->photoSize(
							type : 'hG7gIPQvqVt9TCnM',
							w : 54,
							h : 70,
							size : 3,
						),
						$client->photoCachedSize(
							type : 'VIkJDK97P8HcX1LG',
							w : 59,
							h : 11,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'COIyg3FEZB1pTaLw',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'fOcvSskUKRF8Y6tN',
							w : 86,
							h : 60,
							sizes : array(67),
						),
						$client->photoPathSize(
							type : 'utyfOqz4olvbJ89c',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'lmtLs8oerFvYwdE3',
							w : 62,
							h : 35,
							size : 28,
							video_start_ts : -1094328.02734375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 5385642810288185784,
							background_colors : array(68),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -5486597792341740857,
							background_colors : array(42),
						),
					),
					dc_id : 57,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 2,
							h : 8,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'EYRzHPLoJjONauyr',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -1734316.171875,
							w : 79,
							h : 55,
							preload_prefix_size : 49,
							video_start_ts : 1406918.5791015625,
							video_codec : 'yXaDPjEhO6cxKRTU',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 18,
							title : 'yRp2qSPVNonZ59ul',
							performer : 'U74YpNcWZdgDb8mJ',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'dphGqniwLJokHKvt',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'pVsGYXKque2LcoBa',
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
				installed_date : 9,
				id : 5551583601241841189,
				access_hash : -6377199603612514476,
				title : 'Pwr7Hl3OMkU5VqYf',
				short_name : 'tZCynLo1wQJFijDc',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'TdboVBHqXgtu59rf',
					),
					$client->photoSize(
						type : 'YF7CU2przITeEdPh',
						w : 73,
						h : 100,
						size : 11,
					),
					$client->photoCachedSize(
						type : 'UHX7oKgfrwlev5ME',
						w : 27,
						h : 98,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'AtIJgbDP4yHvYS6p',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'dAgn5OKTxX6fc87j',
						w : 86,
						h : 37,
						sizes : array(57),
					),
					$client->photoPathSize(
						type : 'UvYDPyxGzAj14Xk3',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 33,
				thumb_version : 12,
				thumb_document_id : 877201575319006564,
				count : 21,
				hash : 0,
			),
		),
	),
);
```