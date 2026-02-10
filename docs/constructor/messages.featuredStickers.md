# messages.featuredStickers

**Description** : *Featured stickersets*

**Layer** : 222

```tl
messages.featuredStickers#be382906 flags:# premium:flags.0?true hash:long count:int sets:Vector<StickerSetCovered> unread:Vector<long> = messages.FeaturedStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 56,
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
				installed_date : 71,
				id : 1117523981968225622,
				access_hash : -8026751446240524996,
				title : 'yNDJX6EnF4Sd9jTM',
				short_name : 'EUrv8s2nSiVpLFoN',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '5m4nzb1vuY6Eos7G',
					),
					$client->photoSize(
						type : 'vch1VBFgljbOSI2N',
						w : 1,
						h : 91,
						size : 87,
					),
					$client->photoCachedSize(
						type : 'gPDzXcu9kwZ35OJE',
						w : 11,
						h : 42,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'EO9ByFMTl4gbUdIW',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'Brey4t7ng8GcAMY3',
						w : 66,
						h : 66,
						sizes : array(40),
					),
					$client->photoPathSize(
						type : '3qaBSLzyCQAOisEU',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 6,
				thumb_version : 68,
				thumb_document_id : 3710869297998336098,
				count : 68,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -5402317359784395868,
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
				installed_date : 72,
				id : 2689237615920728694,
				access_hash : -6490467725566159012,
				title : 'tbiFj1Adr6RJDqwh',
				short_name : 'MBktPAgb7j8zwK2E',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'pyWVHKildG8YJkOf',
					),
					$client->photoSize(
						type : '35NKIqfCDc0vzFoY',
						w : 0,
						h : 93,
						size : 26,
					),
					$client->photoCachedSize(
						type : '5kE17gXUzqsfFr94',
						w : 59,
						h : 49,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'QosLA6NWmbYjctRa',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'eEIrbdfUp6lNFTmA',
						w : 12,
						h : 65,
						sizes : array(98),
					),
					$client->photoPathSize(
						type : '6eAvf58g4C7jkESX',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 86,
				thumb_version : 18,
				thumb_document_id : -7573834975676504805,
				count : 55,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 4038593914893324376,
				),
				$client->document(
					id : -2878008984809270587,
					access_hash : -1966758175937512993,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 90,
					mime_type : 'zODvQ9SqZFK7C2xA',
					size : 7966526653196228904,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'BIONcf1Ry98qt3L4',
						),
						$client->photoSize(
							type : 'F5sHCljVpqLQk8uX',
							w : 14,
							h : 0,
							size : 12,
						),
						$client->photoCachedSize(
							type : 'CVMx38tyAkpcqHFe',
							w : 1,
							h : 55,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'UzNyHgu3ZP2G4vis',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'xUsy4dqQKt3bOJ69',
							w : 44,
							h : 48,
							sizes : array(74),
						),
						$client->photoPathSize(
							type : '9eEOR5aivmkP0KGW',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'wnAWrfBJezCtVMqX',
							w : 38,
							h : 91,
							size : 58,
							video_start_ts : 213065.13671875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -5804379005493309846,
							background_colors : array(94),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 6575075263352596890,
							background_colors : array(52),
						),
					),
					dc_id : 49,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 40,
							h : 37,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : '6oKpx3J0SefYUwC7',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -69555.55078125,
							w : 72,
							h : 42,
							preload_prefix_size : 33,
							video_start_ts : 1089220.265625,
							video_codec : 'mYqSwjb1GI7Bxr3A',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 72,
							title : '8Nx0vaTzOVBetQ7A',
							performer : 'GvmIuTQpiXD1eKVd',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'KCdqZV3UMuPyL9H8',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'XIrCpmLeSgibuoP2',
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
				installed_date : 65,
				id : 8284498240407570629,
				access_hash : -6072454168790052034,
				title : 'WMdcploEJObFuNY4',
				short_name : 'prl1ntBxQdCj63VN',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'lFhP45oTgvOZ1dH7',
					),
					$client->photoSize(
						type : '5vmx8TyOsFS07Gu6',
						w : 73,
						h : 75,
						size : 58,
					),
					$client->photoCachedSize(
						type : 'ybDxd8jeOkIUaGVJ',
						w : 19,
						h : 68,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'kZUmXT3IVwFB7oeD',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'AVkZSqDFgLxQ45d0',
						w : 36,
						h : 15,
						sizes : array(24),
					),
					$client->photoPathSize(
						type : 'm6Us8VLTKDASOvgN',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 94,
				thumb_version : 86,
				thumb_document_id : 15389487123558946,
				count : 16,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'YSzgf74DCjc3oOyi',
					documents : array(2126311090960844047),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 6993904286978703759,
					keyword : array('iLC6JfMQYUtTjcb3'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 4618694914196529161,
				),
				$client->document(
					id : -4382457449780542665,
					access_hash : -5153467419862844774,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 55,
					mime_type : 'qZOv1PrKym4b2dlz',
					size : -1264898821115125076,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'WBwDAvfUKjl4dH7x',
						),
						$client->photoSize(
							type : 'CmG0f7M4vr1eTRDp',
							w : 13,
							h : 36,
							size : 22,
						),
						$client->photoCachedSize(
							type : 'tlWmLbQrywKG35c4',
							w : 69,
							h : 96,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'bAp5xoMvmtD9n48S',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'y5oHAwbjtk0FLqUT',
							w : 23,
							h : 56,
							sizes : array(20),
						),
						$client->photoPathSize(
							type : 'db75wpXzyuQP8kxB',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'hdHqZOC7fT0AXpQI',
							w : 29,
							h : 85,
							size : 90,
							video_start_ts : 449422.541015625,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -3178605099768247168,
							background_colors : array(46),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 4144727941050725900,
							background_colors : array(30),
						),
					),
					dc_id : 9,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 61,
							h : 6,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'aEn9N3zYM4LFymeA',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -1652464.8564453125,
							w : 60,
							h : 34,
							preload_prefix_size : 42,
							video_start_ts : 2037254.8271484375,
							video_codec : 'vStqN7x2lEPWnaGc',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 2,
							title : '4zxFoqrECpcGwj1s',
							performer : 'kplhSNdDjMY9O26F',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : '4ub2md1UH7xreG3z',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '92YgunzcHvlsiGSd',
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
				installed_date : 7,
				id : -8492445735578587125,
				access_hash : -6048525205217220373,
				title : 'Hjhyi1cbIzkQm8eW',
				short_name : 'CoXFI67AuYOcBGTs',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '1L7V2rITowmY3cGS',
					),
					$client->photoSize(
						type : 'Fv5LWE703UZsnB2k',
						w : 29,
						h : 81,
						size : 8,
					),
					$client->photoCachedSize(
						type : 'lgB8GthLJTEfsrKd',
						w : 32,
						h : 78,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'xj7vlH5O6UuhrEWB',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'Vsp3e9kKD0145Yxu',
						w : 98,
						h : 93,
						sizes : array(64),
					),
					$client->photoPathSize(
						type : 'HiEWeGn3t2muCIdz',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 9,
				thumb_version : 7,
				thumb_document_id : 1942453426518979068,
				count : 39,
				hash : 0,
			),
		),
	),
	unread : array(-7408014104500048205),
);
```