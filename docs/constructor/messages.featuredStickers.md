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
	count : 74,
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
				installed_date : 30,
				id : -8960759705152999215,
				access_hash : -7992967976143714314,
				title : 'dkSi58IzZ9poPLOT',
				short_name : 'bwsQu1VmU6e8Jl5Z',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'BgsmP7Decy59q1HZ',
					),
					$client->photoSize(
						type : 'DRdg23EaKVHrLbOq',
						w : 4,
						h : 37,
						size : 40,
					),
					$client->photoCachedSize(
						type : 'ZUJI7Ni1vD2HYPpF',
						w : 28,
						h : 66,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'F0wma9SE1KijoGnh',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'fB3TdWSY5DyNQ0aI',
						w : 9,
						h : 100,
						sizes : array(3),
					),
					$client->photoPathSize(
						type : 'uMeKj7IrcZHbYi48',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 50,
				thumb_version : 68,
				thumb_document_id : 7797167493759269538,
				count : 99,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 738369910617759842,
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
				installed_date : 1,
				id : -7802598237498556830,
				access_hash : -2757670241155396100,
				title : 'Czs0cdNahSyrXeVL',
				short_name : 'U3suMFnmoEgaRHkh',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'B2rMaYt5JsOKjVpw',
					),
					$client->photoSize(
						type : 'N3GcEgJDpdXM2kZo',
						w : 68,
						h : 14,
						size : 72,
					),
					$client->photoCachedSize(
						type : 'HwLob4xMNYdp1iT5',
						w : 23,
						h : 64,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '4gCy1ZWTduk5fjHz',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'Ln3owCXDWg7PTSYd',
						w : 63,
						h : 48,
						sizes : array(27),
					),
					$client->photoPathSize(
						type : 'e1COgbLplYZjhJnu',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 62,
				thumb_version : 70,
				thumb_document_id : 5122780819742814801,
				count : 74,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 3115373973885289990,
				),
				$client->document(
					id : -5293377814332405960,
					access_hash : 7523185277156883710,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 91,
					mime_type : 'OGqC6BKJ0H39dNom',
					size : -3440081854625763635,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'ZhcDyXsFrTpmKaQl',
						),
						$client->photoSize(
							type : 'PZfswMXqcaTA58te',
							w : 10,
							h : 50,
							size : 15,
						),
						$client->photoCachedSize(
							type : 'cwmUhoxXRYTlupCr',
							w : 25,
							h : 19,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'iykQLCxmnv1UphHW',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'tw8MkmIelWxQFP2a',
							w : 3,
							h : 23,
							sizes : array(61),
						),
						$client->photoPathSize(
							type : 'wDzgHoNlJKyOrj2T',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'jz1F46Mls3Rcmxov',
							w : 77,
							h : 27,
							size : 48,
							video_start_ts : -1455362.07421875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 8909443259321700057,
							background_colors : array(46),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 3999621437991951590,
							background_colors : array(7),
						),
					),
					dc_id : 67,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 36,
							h : 92,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'yB2WjO1N6LrvpHoJ',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -1305348.94140625,
							w : 1,
							h : 56,
							preload_prefix_size : 68,
							video_start_ts : -2050317.9365234375,
							video_codec : '4KiGWOwFyk0jBmMp',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 58,
							title : 'JgSb5sCN4LODFvaM',
							performer : 'YCWTkiSIBmNEgMLQ',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'wcB5FA1mgMUZjbTI',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'SvuDYOZ6rm0Ptx7z',
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
				installed_date : 66,
				id : -3845400553311333741,
				access_hash : -6755599058548964655,
				title : 'Y7FC9XfLzSTEnAes',
				short_name : 'shPY05O1dEwNb2LB',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'GEmZh9KcJyqLbsrp',
					),
					$client->photoSize(
						type : 'sDSW3X6UGdAY9aor',
						w : 90,
						h : 72,
						size : 28,
					),
					$client->photoCachedSize(
						type : 'rEGZn80SLJNuACzv',
						w : 96,
						h : 47,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'dXR5KVwQU0Nt9x6i',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'c7otkYhN6BSi0usn',
						w : 51,
						h : 95,
						sizes : array(36),
					),
					$client->photoPathSize(
						type : 'g5RZjikT8MVapG3o',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 86,
				thumb_version : 19,
				thumb_document_id : 122276728909260664,
				count : 25,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'ZrcDzAS10klsOjfQ',
					documents : array(-855958164594375753),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -2114526411530587392,
					keyword : array('NLVfsAiwuSMZI5xl'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 8051503156199985504,
				),
				$client->document(
					id : -7833612801777459513,
					access_hash : 3195304454105909983,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 77,
					mime_type : 'O6sRDpfK2hcdzPvT',
					size : -3354458720248756583,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'Z9v6DyqaCbKG8UT2',
						),
						$client->photoSize(
							type : 'mSPlkAb04G56CIpJ',
							w : 31,
							h : 90,
							size : 33,
						),
						$client->photoCachedSize(
							type : 'B4oOpwfqCvZGQKJ0',
							w : 79,
							h : 77,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : '78vZGByDKWSrItqn',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '4fYK1ZF0Czhydsn8',
							w : 64,
							h : 100,
							sizes : array(83),
						),
						$client->photoPathSize(
							type : '2NEHxXm05Kb7q6vn',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'bBuDfo3mz8sX6GYH',
							w : 27,
							h : 72,
							size : 31,
							video_start_ts : 2026785.6474609375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 8707476400257955320,
							background_colors : array(55),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 3213309624543360290,
							background_colors : array(99),
						),
					),
					dc_id : 56,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 48,
							h : 16,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : '9ROGYlPWxqjnJ56s',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 687791.9873046875,
							w : 1,
							h : 36,
							preload_prefix_size : 5,
							video_start_ts : 877023.1474609375,
							video_codec : 'fdC71QSJUcBhEVoI',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 91,
							title : '83OB2K7YUbms9IcN',
							performer : 's0IiXgx6DuaJAwUT',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'rOMnhkVtbZs0uwC5',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'JHhb5VrgzTakSZYU',
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
				installed_date : 71,
				id : 1659563245835759708,
				access_hash : 1657679487441042005,
				title : 'g3vHSnuOlRPwE8AY',
				short_name : 'VW8vqXLAbOSZ6PRy',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'sX2oUarFNQ9GivDp',
					),
					$client->photoSize(
						type : 'mUtQ0NH13Shodr45',
						w : 16,
						h : 100,
						size : 69,
					),
					$client->photoCachedSize(
						type : 'QkGYSE54mu3PzrR8',
						w : 16,
						h : 40,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'TZ9U46Jkpn5MYQO3',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'iVH4ZJSOtgqBf6yk',
						w : 75,
						h : 18,
						sizes : array(45),
					),
					$client->photoPathSize(
						type : 'a92fOweBiqC38SDL',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 39,
				thumb_version : 31,
				thumb_document_id : 2221478260787471514,
				count : 62,
				hash : 0,
			),
		),
	),
	unread : array(1777587420532118973),
);
```