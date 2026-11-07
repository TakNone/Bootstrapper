# messages.archivedStickers

**Description** : *Archived stickersets*

**Layer** : 233

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
	count : 67,
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
				installed_date : 34,
				id : -5872616929587285635,
				access_hash : -3341071161391521156,
				title : '1iXlt98W6gbZSH2D',
				short_name : 'PHyWVe5OhYKuvlgT',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'DRnExpM6KsagT8wr',
					),
					$client->photoSize(
						type : 'Kr89C4TMy12SgkcO',
						w : 72,
						h : 7,
						size : 24,
					),
					$client->photoCachedSize(
						type : 'kFeIHMmd3fLBirPR',
						w : 75,
						h : 41,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'ty7naQ1VzgbGc64q',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'ugik1PNlfYbwavys',
						w : 36,
						h : 3,
						sizes : array(92),
					),
					$client->photoPathSize(
						type : '2RHwYT9ktL4mceD3',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 6,
				thumb_version : 17,
				thumb_document_id : 2031570461133248983,
				count : 94,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -409495404203828142,
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
				installed_date : 8,
				id : -3620118996529500575,
				access_hash : 3646237979721281326,
				title : 'eYMx8CTm7GIkhHq2',
				short_name : '5YzMomTIECSUHnJc',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'TCb3ot8R9QFN0pru',
					),
					$client->photoSize(
						type : 'fhQpiklSjoys8PGn',
						w : 30,
						h : 58,
						size : 18,
					),
					$client->photoCachedSize(
						type : 'TEkPxV6Q1r25YAOs',
						w : 71,
						h : 39,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'Y69WE7N4FZwtamKd',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'pqraOvoQ0FfhNKWz',
						w : 45,
						h : 6,
						sizes : array(32),
					),
					$client->photoPathSize(
						type : '37wpnCkDVAIaMJrq',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 93,
				thumb_version : 12,
				thumb_document_id : -2897173663173914614,
				count : 3,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -5416877944715490205,
				),
				$client->document(
					id : -2012130235420673172,
					access_hash : -3920425715250822023,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 77,
					mime_type : 'mvzULWoHyepBqRKN',
					size : 4110691272945757268,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'QTu50t72yCYn1MqU',
						),
						$client->photoSize(
							type : 'nUBqjcy8ui0MmoD6',
							w : 76,
							h : 32,
							size : 80,
						),
						$client->photoCachedSize(
							type : 'axUpidD4SN2sWXA6',
							w : 64,
							h : 81,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'j2WLfHKxsy7nFmO4',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'iulN5OSAFICBcswj',
							w : 95,
							h : 11,
							sizes : array(56),
						),
						$client->photoPathSize(
							type : 'stXRA0Tpl4JhF5K1',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'UsKADjIkBMbRcavz',
							w : 50,
							h : 45,
							size : 16,
							video_start_ts : -1056347.3017578125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 8440009532497242223,
							background_colors : array(30),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 6187390847579759086,
							background_colors : array(49),
						),
					),
					dc_id : 20,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 48,
							h : 76,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : '9oB4SlHw7PX18G5t',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 603770.998046875,
							w : 40,
							h : 41,
							preload_prefix_size : 20,
							video_start_ts : 1502196.2919921875,
							video_codec : 'orPINRdAM20KXw9D',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 27,
							title : 'EoviLOW3ehpDC24G',
							performer : 'Z2A1jtUnHCeOblza',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'lKJhz0BeXxPYROFt',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'I2eyc95FObSmMT7H',
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
				installed_date : 22,
				id : -8706649356681911455,
				access_hash : 8288133647035174594,
				title : 'gWKM1N7XZLI06Byi',
				short_name : 'eOsmz4JBTblX50du',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'ECwlK1MfYWDvZVNx',
					),
					$client->photoSize(
						type : 'e5RQ0TLUuyrxFgMn',
						w : 64,
						h : 73,
						size : 46,
					),
					$client->photoCachedSize(
						type : 'DP1HMWEs4TmfndFz',
						w : 68,
						h : 8,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 's2BjD4UHhyWzXvNe',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '7WMfz94qGI8BDjvP',
						w : 11,
						h : 35,
						sizes : array(30),
					),
					$client->photoPathSize(
						type : 'XrE5JY1dORN8Cc6u',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 71,
				thumb_version : 66,
				thumb_document_id : 1340144397702176255,
				count : 57,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : '4gX0kOvE7HjqfJYD',
					documents : array(2852132922983676768),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 3842768605937076888,
					keyword : array('ZJtfxAavSLV6QkXe'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 7439432611900940486,
				),
				$client->document(
					id : 4003814315739707119,
					access_hash : -3754628935824960297,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 3,
					mime_type : 'JQEwgf5lkuFMHj3n',
					size : -4099488365664645696,
					thumbs : array(
						$client->photoSizeEmpty(
							type : '7AmoMfTFOkYPu1QG',
						),
						$client->photoSize(
							type : 'QRXrpqC5iMuyJet7',
							w : 55,
							h : 89,
							size : 46,
						),
						$client->photoCachedSize(
							type : 'RIJA9UyLxwCXtBF2',
							w : 27,
							h : 5,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'cGQPrzyg9UZ4b1Ah',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '4UiAFVS17BdTRY92',
							w : 62,
							h : 53,
							sizes : array(88),
						),
						$client->photoPathSize(
							type : 'AgNFesC2I0y73wBp',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'JqQ4MsTPtBmxzGfX',
							w : 35,
							h : 48,
							size : 9,
							video_start_ts : 580233.9423828125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -9161802541024131182,
							background_colors : array(75),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 1624780507856201753,
							background_colors : array(49),
						),
					),
					dc_id : 70,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 38,
							h : 1,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : '78j4BDFz95oaEPCN',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 312208.9140625,
							w : 53,
							h : 2,
							preload_prefix_size : 97,
							video_start_ts : -1959878.515625,
							video_codec : 'tiv2I5SGoXVbqp6h',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 64,
							title : 'aE2jY7vbHh0fDV85',
							performer : 'HPDi2NCnt8z75hpl',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'PcdRL2H3SK4uf1AZ',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '8mw0tViZyeT3jurO',
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
				installed_date : 66,
				id : 6900832026958069401,
				access_hash : 1834709677850298704,
				title : 'xq6wyBJo7ELTnhez',
				short_name : '6dtDXjbycZ3HxOh0',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'EAiOQv2LXrMSnUB4',
					),
					$client->photoSize(
						type : 'wxg4GKYsXp2jfvPc',
						w : 49,
						h : 61,
						size : 59,
					),
					$client->photoCachedSize(
						type : '8YXGZBSrlemAytsw',
						w : 54,
						h : 93,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'GxOud3jhNAIykDzY',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'Ut70uDg6Hhwe5F13',
						w : 64,
						h : 62,
						sizes : array(82),
					),
					$client->photoPathSize(
						type : '3ocwetSKhGsj1vR0',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 45,
				thumb_version : 0,
				thumb_document_id : 236403312194029032,
				count : 60,
				hash : 0,
			),
		),
	),
);
```