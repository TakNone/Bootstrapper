# messages.archivedStickers

**Description** : *Archived stickersets*

**Layer** : 225

```tl
messages.archivedStickers#4fcba9c8 count:int sets:Vector<StickerSetCovered> = messages.ArchivedStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Number of archived stickers |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Archived stickersets |

---

## Type

[messages.ArchivedStickers](type/messages.ArchivedStickers)

---

## Example

```php
$messagesArchivedStickers = $client->messages->archivedStickers(
	count : 59,
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
				installed_date : 83,
				id : -749648076207440521,
				access_hash : 6051630997404885455,
				title : 'P9kfU61AJCLhyENM',
				short_name : 'xcZD0mtIbqOQnSag',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'YgdOTs2eIZ8lELVh',
					),
					$client->photoSize(
						type : '5CpFHAYmdUED3r4o',
						w : 44,
						h : 25,
						size : 93,
					),
					$client->photoCachedSize(
						type : 'x1V7UWb4as9EX3P6',
						w : 15,
						h : 39,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 't1uZfbJ3BKHviRED',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'WGZpSnkwlqP3TVaA',
						w : 54,
						h : 29,
						sizes : array(87),
					),
					$client->photoPathSize(
						type : 'W3vqyNIE8M5wc2Oi',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 19,
				thumb_version : 97,
				thumb_document_id : -8612116039610896629,
				count : 9,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -3229367093387106129,
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
				installed_date : 90,
				id : 4770490025273650256,
				access_hash : -1067443768618484398,
				title : 'L5eqOIWh4z6owyjv',
				short_name : 'tGnLyqBwi5poEYm6',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'r4LBS9Kx2ECjOisq',
					),
					$client->photoSize(
						type : 'yPzpQU8a5k9SKDEo',
						w : 11,
						h : 86,
						size : 39,
					),
					$client->photoCachedSize(
						type : 'QAt0SzmhGgJpNkbs',
						w : 86,
						h : 44,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '2wCy8BOeRWGVo9aP',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'dC3WikoRBS2OnqK7',
						w : 46,
						h : 33,
						sizes : array(90),
					),
					$client->photoPathSize(
						type : 'PZ41EFIUMCLurgJw',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 34,
				thumb_version : 34,
				thumb_document_id : 2033929669891735017,
				count : 27,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 6353516001566191718,
				),
				$client->document(
					id : -4097507082098730279,
					access_hash : 2798312897636149336,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 55,
					mime_type : 'YEqPzk73XIvDwVy0',
					size : 7884365715398333575,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'v0aIGn9P4sq1D6jX',
						),
						$client->photoSize(
							type : 'q74Y32tfuAlORSFb',
							w : 25,
							h : 78,
							size : 84,
						),
						$client->photoCachedSize(
							type : 'djcyOwaFKl5E3UfS',
							w : 41,
							h : 21,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : '5Oh0eXjufxL9TQ4g',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'g5t8YqIpF3RKVXfd',
							w : 34,
							h : 84,
							sizes : array(57),
						),
						$client->photoPathSize(
							type : 'Bf5vm0L42Wh63cRk',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : '85JHkRSfDvIuwcrm',
							w : 83,
							h : 7,
							size : 72,
							video_start_ts : -2007679.2236328125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 3618944738367046187,
							background_colors : array(4),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 5859406869582042610,
							background_colors : array(82),
						),
					),
					dc_id : 53,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 80,
							h : 51,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'k9Sw3fQrutMgH0Il',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -1703436.474609375,
							w : 59,
							h : 97,
							preload_prefix_size : 23,
							video_start_ts : -301941.962890625,
							video_codec : 'FWOId6sv7p4rBJ3U',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 85,
							title : '4IzsaT3e9BLMHbAq',
							performer : '4Jh0crSMLZ72wAYV',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'KPiG52ZBe0UDfOpc',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'kqEubgVK03tWv8Lo',
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
				installed_date : 90,
				id : -7817194282886079425,
				access_hash : -7357345384559747937,
				title : '0VcRBtr1PSi4AGXT',
				short_name : 'MPfvAh9TYzySgdcR',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'QFYI0VnkXdDGtoP9',
					),
					$client->photoSize(
						type : '8cQq4DmryTkg2BVU',
						w : 89,
						h : 36,
						size : 67,
					),
					$client->photoCachedSize(
						type : 'LUs37TgeDBhSC1kv',
						w : 12,
						h : 99,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'YXpxqGFOem0Dr3ZH',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'sB0eCb5cJYuvnIfH',
						w : 51,
						h : 53,
						sizes : array(29),
					),
					$client->photoPathSize(
						type : 'ru2lnAHZVkMCTj3Q',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 52,
				thumb_version : 85,
				thumb_document_id : 7229303252031765441,
				count : 49,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'wXPUl5tIi3YMeJKE',
					documents : array(-1707153953460184229),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -5482422599487474456,
					keyword : array('2bShWf7Z8gx1sEDY'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 8166533147280613670,
				),
				$client->document(
					id : -73895128570921791,
					access_hash : -3626948627963102584,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 91,
					mime_type : 'QbcjtC0JlaoH39qp',
					size : -8675700102026799538,
					thumbs : array(
						$client->photoSizeEmpty(
							type : '8E2fSkoYmbTleuBX',
						),
						$client->photoSize(
							type : '561NgHGIdisSCFEk',
							w : 47,
							h : 22,
							size : 4,
						),
						$client->photoCachedSize(
							type : 'VXLj2FS9s7ZuYdlQ',
							w : 20,
							h : 22,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'Rkb6vNEmMFhC0tJi',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'MvsOW8Vx2k7C0LJl',
							w : 4,
							h : 77,
							sizes : array(42),
						),
						$client->photoPathSize(
							type : '7qgxhK609nkIweaZ',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : '3yncCrlxkHbeTM67',
							w : 15,
							h : 52,
							size : 72,
							video_start_ts : 31141.5654296875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -7394982467217166604,
							background_colors : array(77),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 5308539497864689085,
							background_colors : array(16),
						),
					),
					dc_id : 53,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 64,
							h : 26,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : '0LgdHIfn6b2QtNBc',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 985635.466796875,
							w : 24,
							h : 26,
							preload_prefix_size : 73,
							video_start_ts : 1270925.8203125,
							video_codec : 'kivrQZgVnwPqSf95',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 78,
							title : '9g0amZVKjcrhyMzD',
							performer : '0t6Uhow2PJWbMEji',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'mb5cdwIJ9k1nHt7s',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '6Kln83Bpx1aRPNOo',
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
				installed_date : 88,
				id : 7984501069371068730,
				access_hash : 7736589703379548850,
				title : 'AEJ1rOtxTqzspiI0',
				short_name : 'DJ5tzQmf8UhCRuk9',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'Pe6Q9czwgomLYvyF',
					),
					$client->photoSize(
						type : 'h8ZB6DrbEl7TeIcR',
						w : 4,
						h : 75,
						size : 62,
					),
					$client->photoCachedSize(
						type : '76LNXkSQJ1dyD2mo',
						w : 92,
						h : 68,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '126ujhyV5OtboKfY',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'BOz9ZWcXqpLN83bn',
						w : 28,
						h : 96,
						sizes : array(70),
					),
					$client->photoPathSize(
						type : 'VbpAHFhD732iCjMU',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 48,
				thumb_version : 93,
				thumb_document_id : 8138182359183079503,
				count : 37,
				hash : 0,
			),
		),
	),
);
```