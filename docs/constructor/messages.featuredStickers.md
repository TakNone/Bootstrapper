# messages.featuredStickers

**Description** : *Featured stickersets*

**Layer** : 229

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
	count : 66,
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
				id : -4101632273542816052,
				access_hash : 7139169252750881877,
				title : 'ud6nS9MzYDPa4jiA',
				short_name : '0G34xlf5k7AuDQ29',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'D2awJUASNWLsZixd',
					),
					$client->photoSize(
						type : 'dYm1FJ7UCeVLOEo2',
						w : 6,
						h : 42,
						size : 12,
					),
					$client->photoCachedSize(
						type : 'Tqn5yi1GWo94Rg8l',
						w : 73,
						h : 41,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'ukDLew2JQOcsyIN0',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'yo8fYw6BQ2Vkt5Sl',
						w : 96,
						h : 25,
						sizes : array(92),
					),
					$client->photoPathSize(
						type : '8sGVWhcMLPe5wA4X',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 8,
				thumb_version : 59,
				thumb_document_id : 6340686461985610176,
				count : 41,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 3787690563888966042,
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
				installed_date : 11,
				id : 3517554569392756251,
				access_hash : -695484560829414292,
				title : 'QxHA9aovYfBPlKJz',
				short_name : '8DqxOTn2EGR3rc0v',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'STvY0PG8p7Q3wOsu',
					),
					$client->photoSize(
						type : 'KUubXB79rtyQMaD2',
						w : 22,
						h : 3,
						size : 53,
					),
					$client->photoCachedSize(
						type : 'EX40z1QUhx3Nvnrb',
						w : 54,
						h : 15,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'nmvjRa6fX1OYo3s2',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'XSPKYVFyc4gkITzi',
						w : 24,
						h : 23,
						sizes : array(49),
					),
					$client->photoPathSize(
						type : 'OFrNUo64AyJI2Ega',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 90,
				thumb_version : 62,
				thumb_document_id : 8399226272985891958,
				count : 31,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 1179347392955183434,
				),
				$client->document(
					id : -2302712363816224724,
					access_hash : -8363928124114327130,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 15,
					mime_type : 'GvXPAVjrnI526w8y',
					size : 5819573731282621409,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'RByfNThYO7mvDdlS',
						),
						$client->photoSize(
							type : '5hM2WDYrFg0BSOxG',
							w : 26,
							h : 78,
							size : 99,
						),
						$client->photoCachedSize(
							type : '12XmtFhMzNV5CwxH',
							w : 17,
							h : 61,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'HPo2507Sf8ylt4wq',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'oXNp5d1Oyux6BgCJ',
							w : 94,
							h : 53,
							sizes : array(14),
						),
						$client->photoPathSize(
							type : 'kAPvREu4OMdGgrIz',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'yZktfiEXbAphYBwI',
							w : 84,
							h : 36,
							size : 2,
							video_start_ts : -1369914.0263671875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 8246486890395300299,
							background_colors : array(46),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -656929641887749808,
							background_colors : array(54),
						),
					),
					dc_id : 73,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 53,
							h : 8,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'w75oWqeQXZH8BAxa',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -849523.3056640625,
							w : 53,
							h : 52,
							preload_prefix_size : 7,
							video_start_ts : 1668960.9599609375,
							video_codec : 'fFPLsgewEC02Njz5',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 83,
							title : 'jkeKoHwOnX5D12x3',
							performer : 'Wn46h3V2x59SJT0C',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : '3GlWuErpZ4IqViaU',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'x1kbUfRBpKj3M5mY',
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
				installed_date : 20,
				id : -5060008419139114114,
				access_hash : 6367052830763817971,
				title : 'hKY9rEUu5jyPilOk',
				short_name : 'rxhWPQbBtOTyECfg',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'vUIFj2uofESAVHGp',
					),
					$client->photoSize(
						type : '9tFvYXkwPOjAVe6W',
						w : 56,
						h : 0,
						size : 83,
					),
					$client->photoCachedSize(
						type : 'sFLiCKRWo791ePdw',
						w : 43,
						h : 83,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'bc9psOfBPyju1vkZ',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'gSQNIyDjnz0GcYfm',
						w : 46,
						h : 96,
						sizes : array(91),
					),
					$client->photoPathSize(
						type : 'lBCuWAJFXvNbVZoL',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 53,
				thumb_version : 77,
				thumb_document_id : -7971132901564502101,
				count : 99,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'Bh7saOw0czjfVvmK',
					documents : array(-3775092301483444559),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -1550117254564174916,
					keyword : array('KwbNk8MQCJHdfLFr'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 4392340766544144009,
				),
				$client->document(
					id : 7421836589074297291,
					access_hash : -3470279797516110817,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 81,
					mime_type : 'pYwTrKqgHFWMSex1',
					size : 2273738556923187132,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'dh5vsHyDFWz1NXJ9',
						),
						$client->photoSize(
							type : 'DvUSTq4QuYi5OHVk',
							w : 67,
							h : 3,
							size : 41,
						),
						$client->photoCachedSize(
							type : 'AvJgdp64B8txYjeH',
							w : 42,
							h : 53,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'uSyI4a3fdGgmXrhD',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'BvELnxtVs2NYIRgK',
							w : 71,
							h : 16,
							sizes : array(3),
						),
						$client->photoPathSize(
							type : 'ATp7afoWBL3kKIO1',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'FKLJliGjnNwxEXYP',
							w : 77,
							h : 61,
							size : 1,
							video_start_ts : 118093.1142578125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 164766197443333008,
							background_colors : array(53),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 5432006735289646992,
							background_colors : array(56),
						),
					),
					dc_id : 44,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 72,
							h : 74,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'saJOHVG8bxkpjhZM',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1199127.005859375,
							w : 92,
							h : 16,
							preload_prefix_size : 17,
							video_start_ts : -406873.779296875,
							video_codec : '1XrHgtCj6wFdSv2J',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 0,
							title : '1exCubQUOgyq8lEd',
							performer : 'Kyh1iguSpwCFQld0',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'InR2LQMYxrAelX6G',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'd7YWXveoEITt9Pcz',
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
				installed_date : 2,
				id : -6802888681411424539,
				access_hash : 4865416824907568097,
				title : 'aW3kdK2DgLH4QvYp',
				short_name : 'dVJChXb7vcnRm8eW',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '2kYHFehDqgpt8TPm',
					),
					$client->photoSize(
						type : 'cVuPv02hODKdUtzH',
						w : 30,
						h : 80,
						size : 27,
					),
					$client->photoCachedSize(
						type : 'ZilNqDx2vc6MC8hA',
						w : 45,
						h : 48,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'GCUP3Faluv05ci6K',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'yTJdzkLBiq6PuRQ4',
						w : 36,
						h : 13,
						sizes : array(81),
					),
					$client->photoPathSize(
						type : 'rACkhcUKOoHS4y2f',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 9,
				thumb_version : 17,
				thumb_document_id : 4375407931476541868,
				count : 94,
				hash : 0,
			),
		),
	),
	unread : array(-4540764252278842373),
);
```