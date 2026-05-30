# messages.foundStickerSets

**Description** : *Found stickersets*

**Layer** : 225

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
				installed_date : 90,
				id : 2935393658558582911,
				access_hash : -6422305033089990644,
				title : 'AOJqRf1K53ikP2Lu',
				short_name : 'TVhlbIAunJXCDWj8',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'uZVotdCM9Oy8zYGv',
					),
					$client->photoSize(
						type : 'kGR6PU0sTBi1muLE',
						w : 91,
						h : 69,
						size : 26,
					),
					$client->photoCachedSize(
						type : 'mIsl7hVxWck5CTiv',
						w : 71,
						h : 61,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'FXElCYw6PKpm2t7j',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'Bz8VGuJiRw5MPQnU',
						w : 25,
						h : 38,
						sizes : array(99),
					),
					$client->photoPathSize(
						type : 'RxApnbGSY9Tq1cQC',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 95,
				thumb_version : 90,
				thumb_document_id : 2509740400888933898,
				count : 85,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -5803542391370040412,
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
				installed_date : 25,
				id : 9088261659350908632,
				access_hash : -3066332433248187776,
				title : 'bDEfZBWsHlqaxQt6',
				short_name : '1YJ0Xt3WId4eROGU',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'UWsaSjZ5vTuxew84',
					),
					$client->photoSize(
						type : 'ZlH6xruKpijEONoW',
						w : 23,
						h : 38,
						size : 27,
					),
					$client->photoCachedSize(
						type : 'oMDNilL2dRsbecXj',
						w : 5,
						h : 80,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'BUYtEIp2Ji4Z0Fly',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '5ObfSaNR8k9BipdW',
						w : 0,
						h : 31,
						sizes : array(54),
					),
					$client->photoPathSize(
						type : 'xbR3v0V7t8eg1UkK',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 53,
				thumb_version : 69,
				thumb_document_id : 4735156347011805133,
				count : 46,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 742232518325426159,
				),
				$client->document(
					id : -507765976425019408,
					access_hash : 7563805675566444274,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 87,
					mime_type : 'qvMeA2yWNHR07l9L',
					size : -5589943397382955279,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'UwmKtZNviTC9bYaz',
						),
						$client->photoSize(
							type : '0c637XKEOzkYHha1',
							w : 18,
							h : 66,
							size : 4,
						),
						$client->photoCachedSize(
							type : 'GP4hdxESaILcbVrv',
							w : 54,
							h : 17,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'L53Hw92KAadM7DNe',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '4Zv0jcgukl3THdhG',
							w : 25,
							h : 74,
							sizes : array(83),
						),
						$client->photoPathSize(
							type : 'QeZ4oVXBpGmyrJIN',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'dj3sUIOkryaZ7QqL',
							w : 8,
							h : 85,
							size : 30,
							video_start_ts : -1599145.1220703125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -5651891694068627892,
							background_colors : array(94),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -8918866536234718489,
							background_colors : array(70),
						),
					),
					dc_id : 52,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 26,
							h : 23,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'gyszaMcuj3Nv4n6R',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -1301017.517578125,
							w : 43,
							h : 90,
							preload_prefix_size : 2,
							video_start_ts : -689569.708984375,
							video_codec : 'LlXyUaHV5ZdFjxhv',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 26,
							title : '1dbfZS4LUegVTapR',
							performer : 'yVejiBcdqUtfADhl',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'vaTA5wWUmxtsYRcI',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '29XthSazE86HV5bK',
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
				installed_date : 25,
				id : -5235823637252652487,
				access_hash : 4274348899251540133,
				title : 'X8Rt94JCDaQqI5BY',
				short_name : 'MEmFUI8LGh5RA6tk',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'WkUam8bFuEVsMqtR',
					),
					$client->photoSize(
						type : 'XSTQazs1cEb6ROwr',
						w : 26,
						h : 59,
						size : 70,
					),
					$client->photoCachedSize(
						type : 'DrTFwWQh31b6GBLI',
						w : 51,
						h : 50,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'udznj8VX5QfcJtha',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'ndPxbM9tLNeG2AXT',
						w : 63,
						h : 22,
						sizes : array(1),
					),
					$client->photoPathSize(
						type : 'bQVl1FLeoCS04qhd',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 3,
				thumb_version : 52,
				thumb_document_id : 8469688784959325084,
				count : 81,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'qTR6ckGwsLo9JOMK',
					documents : array(-4395541363838668346),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -2066298619494696998,
					keyword : array('hRZoM7ls8y4ET3Oj'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -5624082025720487413,
				),
				$client->document(
					id : 1999148018909189316,
					access_hash : -9210022475946030488,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 80,
					mime_type : 'mPYUM2uAzTgjkBf0',
					size : -8756915026874424635,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 't7k2WgDzJhO9baKH',
						),
						$client->photoSize(
							type : 'Dx7q9RKF6oWzfplQ',
							w : 16,
							h : 96,
							size : 67,
						),
						$client->photoCachedSize(
							type : 'uMkihSROpexlvF30',
							w : 4,
							h : 40,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'ulMGnp4SZfhUxm5H',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'Nf4Mw8ePC5bRYTHr',
							w : 74,
							h : 19,
							sizes : array(16),
						),
						$client->photoPathSize(
							type : 'zhIR4xuyVBwDAKkY',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'Z6TzwHGu38vmrU5B',
							w : 26,
							h : 86,
							size : 4,
							video_start_ts : -353348.79296875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 8430834901785194134,
							background_colors : array(88),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -7385709061603635196,
							background_colors : array(94),
						),
					),
					dc_id : 3,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 35,
							h : 60,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : '1R9w2U78yEGraDpM',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -1771230.84375,
							w : 57,
							h : 88,
							preload_prefix_size : 74,
							video_start_ts : -469791.392578125,
							video_codec : 'Z0qUmroYAwRTFn65',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 18,
							title : '8nemPVkbl9IzWBHN',
							performer : 'ckMa9j41DAvgf6UI',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'yHbexWKZRUQA590T',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'CnRZWa6uVI3olw9N',
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
				installed_date : 96,
				id : -8368209651286980260,
				access_hash : 6959580137084974359,
				title : 'bQEKhlDyAS5HsIkM',
				short_name : 'QInGvHWgKA02yXz1',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'lkMA2sh1oLJTdzRS',
					),
					$client->photoSize(
						type : 'U890c5q4ygNX3wJB',
						w : 3,
						h : 83,
						size : 77,
					),
					$client->photoCachedSize(
						type : '7J8DypQGvBqY6kUo',
						w : 40,
						h : 31,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'xUzqDjRK43BIGZkl',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'k4utpq7XAPVMTcfd',
						w : 35,
						h : 2,
						sizes : array(83),
					),
					$client->photoPathSize(
						type : 'TNdkV0mHRfXZAjt7',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 18,
				thumb_version : 100,
				thumb_document_id : 3424603436806189110,
				count : 46,
				hash : 0,
			),
		),
	),
);
```