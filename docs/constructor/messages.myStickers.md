# messages.myStickers

**Description** : *The list of stickersets owned by the current account &raquo;*

**Layer** : 218

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
	count : 38,
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
				installed_date : 0,
				id : -1759262418340345233,
				access_hash : -985689019488344178,
				title : 'fKhe6Yq2aOLHysxU',
				short_name : 'kZxWhPlHbRJ7GAu5',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'vS0TQMWeokNPcgxL',
					),
					$client->photoSize(
						type : 'mlZhPKHzgeu5pOGi',
						w : 87,
						h : 90,
						size : 30,
					),
					$client->photoCachedSize(
						type : 'hgHY5Oo6fm0Xt1Bi',
						w : 76,
						h : 76,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'H13jUcDwBOP2xCkW',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'an3umf48g6qMJFhO',
						w : 13,
						h : 51,
						sizes : array(88),
					),
					$client->photoPathSize(
						type : '8LZfxmHNI0WvndiO',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 38,
				thumb_version : 97,
				thumb_document_id : -5120870925398689576,
				count : 86,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 5704812659949258888,
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
				installed_date : 98,
				id : -6170625251995601665,
				access_hash : 2349331630901755324,
				title : 'r3m9DA8RXNHcVtih',
				short_name : 'Mt6cEFS0sgb3dnzv',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'dp51eo6MwIPlQXhA',
					),
					$client->photoSize(
						type : 'd7MQfB2nC43jJArl',
						w : 78,
						h : 93,
						size : 94,
					),
					$client->photoCachedSize(
						type : '5eULtbfBhS7QCgOr',
						w : 32,
						h : 13,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'cfqIHKZCGJOj4LYS',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'mlspZVjMNUIAQHyB',
						w : 31,
						h : 14,
						sizes : array(72),
					),
					$client->photoPathSize(
						type : 'ZvFICskUaEAPRqpH',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 100,
				thumb_version : 39,
				thumb_document_id : -6553407386378213430,
				count : 14,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 4326828255200912651,
				),
				$client->document(
					id : 8773912787038549272,
					access_hash : 640454287172643491,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 60,
					mime_type : 'pXHCFtVRYEqwzhsx',
					size : -6665562394693344742,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'VnYpBulhI4PMNid3',
						),
						$client->photoSize(
							type : 'ZChPbMmxycQqnL2D',
							w : 52,
							h : 74,
							size : 59,
						),
						$client->photoCachedSize(
							type : 'VRuYn3LiTPCXx1Hm',
							w : 63,
							h : 57,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'HMbZ9S2XpVda4FIn',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'nWZfXBkJt0gejVpY',
							w : 57,
							h : 33,
							sizes : array(82),
						),
						$client->photoPathSize(
							type : 'cRL34M85smy2SVYx',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'YvhKpB3Swd8s5xq2',
							w : 88,
							h : 76,
							size : 69,
							video_start_ts : -58229.015625,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -7902736687330204011,
							background_colors : array(0),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 6780974369885485768,
							background_colors : array(51),
						),
					),
					dc_id : 49,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 81,
							h : 43,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'A1IFxXLCbdT4sRJ3',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -1160043.0751953125,
							w : 28,
							h : 84,
							preload_prefix_size : 74,
							video_start_ts : -758689.091796875,
							video_codec : '4k3SAHi9jeZFlIuN',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 11,
							title : 'ZNgaQBn9ehsCUHSK',
							performer : 'ENetgacjGrpVYxHA',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'YKtOFDxAVlJQ5Tfk',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'C1X9rvtu5BwfqzAx',
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
				id : 1546731709580725659,
				access_hash : 224360376826223835,
				title : '8aJDVBjuARPrC0kF',
				short_name : 'j0K7t6eCxw5gQ4rI',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'sjUTKFxRdDZrPAGV',
					),
					$client->photoSize(
						type : 'UGY5Meqpk9StQT3R',
						w : 71,
						h : 61,
						size : 27,
					),
					$client->photoCachedSize(
						type : 'SC4wybatU6EVz3fr',
						w : 71,
						h : 82,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'uopP0rMFZyk3RiTK',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'UaV7y0ZIs8MqcPWd',
						w : 58,
						h : 30,
						sizes : array(79),
					),
					$client->photoPathSize(
						type : 'bnkCVDcyWism3hRZ',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 96,
				thumb_version : 53,
				thumb_document_id : 7892841390500255812,
				count : 53,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : '6MV91sI07LvkfmpW',
					documents : array(-7092510774622974118),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -1699971298287715987,
					keyword : array('3XQlbPIWZup9OhTv'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 248721768338028402,
				),
				$client->document(
					id : 8173828946139800838,
					access_hash : -3082639425509695639,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 14,
					mime_type : 'iCAsDfdGYxylr81E',
					size : 6131601257826798202,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'xXkRdfYZNWnw4AOe',
						),
						$client->photoSize(
							type : 'LJr4mEYNbnjKofGk',
							w : 14,
							h : 72,
							size : 54,
						),
						$client->photoCachedSize(
							type : 'B1weLEYMfSyzaAOG',
							w : 84,
							h : 85,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'YFNqdrclJs8OxLW6',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '87GYvnPh4fTsb0kO',
							w : 99,
							h : 56,
							sizes : array(99),
						),
						$client->photoPathSize(
							type : 'sMKH3BT1jmDkbqIu',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'G4u65cehwlSXME9v',
							w : 7,
							h : 3,
							size : 7,
							video_start_ts : 483690.0595703125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -5308870581762813608,
							background_colors : array(85),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 6948706380828621584,
							background_colors : array(77),
						),
					),
					dc_id : 38,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 57,
							h : 94,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : '68Vq5fznrE10OkbF',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1912745.0595703125,
							w : 23,
							h : 31,
							preload_prefix_size : 97,
							video_start_ts : 1943736.5224609375,
							video_codec : 'XHVMrW8x12t9sRY3',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 63,
							title : '9B6SrvVFyaWOGqoH',
							performer : '0EdSDpa5vNIqwrFn',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'hkQafvJKYnUEB8zo',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'MQqaXI5eVWDm1UJz',
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
				installed_date : 74,
				id : -5485949496402331262,
				access_hash : -4008845972983795726,
				title : 'xOsNDrcSf5697Aub',
				short_name : 'tkTIUsLgWrmjKzJc',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'HfTIAWYOQ0oi3cNB',
					),
					$client->photoSize(
						type : 'pnutmUXlb41asHSi',
						w : 80,
						h : 36,
						size : 47,
					),
					$client->photoCachedSize(
						type : 'M4EylZS9VLchD26m',
						w : 32,
						h : 57,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'YICGWgZ3Uv7MrXFR',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'hgkVzl8tKPFaGbU9',
						w : 65,
						h : 90,
						sizes : array(68),
					),
					$client->photoPathSize(
						type : '43oWE6u7AnFC0OhR',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 21,
				thumb_version : 2,
				thumb_document_id : 9103003904814628788,
				count : 58,
				hash : 0,
			),
		),
	),
);
```