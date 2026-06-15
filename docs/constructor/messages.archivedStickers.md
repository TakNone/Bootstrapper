# messages.archivedStickers

**Description** : *Archived stickersets*

**Layer** : 227

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
	count : 77,
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
				installed_date : 8,
				id : 1246567607421374158,
				access_hash : -7266617499023189448,
				title : 'XSLu2G1YtOgWmlas',
				short_name : '9r0ZSNKxmqIOC5Xd',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'MdBPJXkOcEVh708o',
					),
					$client->photoSize(
						type : '6TEUYD4CtAPaxbqV',
						w : 1,
						h : 26,
						size : 29,
					),
					$client->photoCachedSize(
						type : 'ei0dmS1bpTA7YEIJ',
						w : 44,
						h : 97,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'QUdTBSsgOZ3M9NWt',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'UCfv62JHLjroWQeN',
						w : 85,
						h : 67,
						sizes : array(60),
					),
					$client->photoPathSize(
						type : 'YvHGl6cB1o52LtEp',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 8,
				thumb_version : 26,
				thumb_document_id : 3249213572357279800,
				count : 39,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -7891739784167916729,
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
				installed_date : 45,
				id : -4889753641340589911,
				access_hash : 1757491919015972636,
				title : 'iwCecgp3GzJ0t618',
				short_name : 'ext7OrkcpKJ3nyX8',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'zIerQHkUplCmhcRx',
					),
					$client->photoSize(
						type : 'vODe4hXTlIGQSUxk',
						w : 50,
						h : 48,
						size : 84,
					),
					$client->photoCachedSize(
						type : 'InRdWK9BxDTw2zkM',
						w : 31,
						h : 57,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'f4Nb1EScD5hxtWK9',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'VFmTyKUNkdxaoicI',
						w : 39,
						h : 89,
						sizes : array(3),
					),
					$client->photoPathSize(
						type : 'f8sWirVJ7RtFh9xo',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 87,
				thumb_version : 73,
				thumb_document_id : 6496525738681473010,
				count : 38,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -2777706272780675082,
				),
				$client->document(
					id : -2943446607821253634,
					access_hash : -689767245299405623,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 50,
					mime_type : 'pxXZlQ0n1HNV3t8P',
					size : -2741683710290852590,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'hWYfLJQCozKv1tq9',
						),
						$client->photoSize(
							type : 'CBLzrdmKWvStUMDZ',
							w : 100,
							h : 71,
							size : 45,
						),
						$client->photoCachedSize(
							type : 'kynwO190KlXrAQSz',
							w : 38,
							h : 49,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : '5zX1dR4ietZ0TYKw',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'Q4o7GX2xvz1HUbaF',
							w : 30,
							h : 71,
							sizes : array(90),
						),
						$client->photoPathSize(
							type : '58pTyOLXzhs4HScQ',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'bftLgR8BV0dCH76D',
							w : 73,
							h : 91,
							size : 50,
							video_start_ts : -957458.7041015625,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 2509319614287921576,
							background_colors : array(65),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 7487246898220342510,
							background_colors : array(30),
						),
					),
					dc_id : 65,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 33,
							h : 10,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'jnzGICW1XfVhLora',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1711761.4189453125,
							w : 3,
							h : 70,
							preload_prefix_size : 33,
							video_start_ts : -1869886.6787109375,
							video_codec : 'aZRpNBJ83lqOTevo',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 99,
							title : 'Y137jthk5LnKvyxQ',
							performer : 'LxbAW6gIoJnOmFfH',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'mJDnMu7pRKg3b9wd',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'Nl0P3q7KLjpFxIod',
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
				installed_date : 12,
				id : -1788616472269106045,
				access_hash : -5932536892880862191,
				title : 'UO8214rcELQIpyHM',
				short_name : 'wRDqiHZgQJetYIo4',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'lg5X4ihIbnf2zO1w',
					),
					$client->photoSize(
						type : 'OfdSZbNqWhV43Jjm',
						w : 98,
						h : 54,
						size : 85,
					),
					$client->photoCachedSize(
						type : 'kKVRezgvj8bPsdpA',
						w : 30,
						h : 75,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'dZD5tIjeXAaBT3Gw',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'W3eo5Hv7LIwb1Pxp',
						w : 47,
						h : 17,
						sizes : array(22),
					),
					$client->photoPathSize(
						type : '3JYXpi4h9HF7PZ5g',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 39,
				thumb_version : 82,
				thumb_document_id : -3149814091090832106,
				count : 31,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'HENicFwkYraOnKvm',
					documents : array(6358539973890766200),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 8426107912277689670,
					keyword : array('nNGRCaPup72dDZ0m'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 6073623308229663584,
				),
				$client->document(
					id : 6639559877384576850,
					access_hash : -3680935598801041965,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 14,
					mime_type : 'pudL9fvMi1z38xl7',
					size : -4743051296448278999,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'o7K2uqlt5MaNrIyV',
						),
						$client->photoSize(
							type : 'nTMGluhK7o8dvx9k',
							w : 31,
							h : 13,
							size : 0,
						),
						$client->photoCachedSize(
							type : 'sfgaZbLEeAQHcOmX',
							w : 64,
							h : 57,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'CTlnHz3jFrMGUD1W',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'MmAdzBUJL9T0srX4',
							w : 85,
							h : 63,
							sizes : array(69),
						),
						$client->photoPathSize(
							type : 'uGXe7q5B1C4doyFs',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'YQMblSPz5F2qg1Et',
							w : 88,
							h : 85,
							size : 59,
							video_start_ts : -1966188.5673828125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -5039922260963172589,
							background_colors : array(30),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 2937304167562181292,
							background_colors : array(63),
						),
					),
					dc_id : 37,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 60,
							h : 82,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'THplyPGq4mdvr9Mu',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 552888.5244140625,
							w : 56,
							h : 94,
							preload_prefix_size : 1,
							video_start_ts : 1530451.0791015625,
							video_codec : 'qIbdNO9y6Ru8rHCt',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 74,
							title : 'JeZ1RQSrbhvFcxn4',
							performer : '3vH8WMKnNG7VqRce',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'joncGkY7OJx0K8Lw',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'scZ3pgPEwWhT2fHo',
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
				installed_date : 70,
				id : -2999488815217278432,
				access_hash : -624438359806139504,
				title : 'UVOLrjbHfK7amkGg',
				short_name : 'WOuiDI05sMEG6ma4',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'ErnvZKWjY3kSGFB7',
					),
					$client->photoSize(
						type : 'FSEkrhBC6mQ20ZR4',
						w : 21,
						h : 53,
						size : 54,
					),
					$client->photoCachedSize(
						type : 'feiM4GwnYBEX1dDC',
						w : 73,
						h : 0,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'BOK43u09CtghTnVe',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'FbzPJfXgmdHLQKsc',
						w : 94,
						h : 28,
						sizes : array(68),
					),
					$client->photoPathSize(
						type : 'WVI02GaXMhSnuwKf',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 72,
				thumb_version : 60,
				thumb_document_id : -5288222066875976005,
				count : 92,
				hash : 0,
			),
		),
	),
);
```