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
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 11,
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
				installed_date : 43,
				id : -1236467173067186642,
				access_hash : 1969951998976874635,
				title : 'MoQtuBTLAD4hRdx0',
				short_name : 'rhbCxA1kaYHOlS86',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'fRXgsp9GmcTSWH2V',
					),
					$client->photoSize(
						type : 'AIYu94Ks5yq2t1QE',
						w : 77,
						h : 32,
						size : 62,
					),
					$client->photoCachedSize(
						type : 'tUg7hK9GaS6WlxTE',
						w : 99,
						h : 9,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '06LkSMzs2XRfFEHv',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'UHgS7jZLVvdFhsQ6',
						w : 57,
						h : 45,
						sizes : array(43),
					),
					$client->photoPathSize(
						type : '0GFDywASKgBaki2T',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 2,
				thumb_version : 96,
				thumb_document_id : -1727391639451516338,
				count : 45,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 4969307890484686223,
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
				installed_date : 17,
				id : -5008567852729341031,
				access_hash : 2671389782033537890,
				title : 'Ww05NG1sUtZCuKHY',
				short_name : 'cSEs2FJC1t8mi9LK',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '5TqnyXoikr0IWwYA',
					),
					$client->photoSize(
						type : 'ZLlmjXDKri9dPeEx',
						w : 15,
						h : 13,
						size : 70,
					),
					$client->photoCachedSize(
						type : 'OpdbKQEhgL5uWVJm',
						w : 41,
						h : 34,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'eFJr0aXp23AGBHyd',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '2Ycfsao80blGw6mF',
						w : 93,
						h : 40,
						sizes : array(7),
					),
					$client->photoPathSize(
						type : 'b7kaJfCclDPgTsNn',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 41,
				thumb_version : 14,
				thumb_document_id : 2094938046144220629,
				count : 80,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 4690080814822395773,
				),
				$client->document(
					id : -484461565282195626,
					access_hash : 8114059165112548492,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 61,
					mime_type : 'kuw7D8EOy5qWeCsp',
					size : 1810495667407618318,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'qJcWslHO8ypS5nXQ',
						),
						$client->photoSize(
							type : 'rR8TcLuBnswoMEeX',
							w : 35,
							h : 35,
							size : 14,
						),
						$client->photoCachedSize(
							type : '4reCaNBDLMJYuTy6',
							w : 58,
							h : 13,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : '2UphDsHTElurjx9K',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '7yZATJsMl89Nj4rI',
							w : 69,
							h : 14,
							sizes : array(53),
						),
						$client->photoPathSize(
							type : 'KrR1wimQu5Y70xzv',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : '3R0IDw4Nz2MgOKWh',
							w : 61,
							h : 39,
							size : 37,
							video_start_ts : -412974.1533203125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -7514823703500270996,
							background_colors : array(82),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -7306343118093598068,
							background_colors : array(4),
						),
					),
					dc_id : 76,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 25,
							h : 13,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'HJPRByZ5bnqLVvNS',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1335650.2275390625,
							w : 9,
							h : 54,
							preload_prefix_size : 82,
							video_start_ts : 1365197.2744140625,
							video_codec : 'joJIw81kGyKcOeb4',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 84,
							title : 'LmibAD2hMSCsz5vq',
							performer : 'v6Eef5dxRaV3sXKM',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'bYdWOMajPpg027f3',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'nhMbE3ftolcmTkpU',
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
				installed_date : 81,
				id : -2284839243542026957,
				access_hash : -3042802827837530006,
				title : 'G98XQAB3nDrSdoui',
				short_name : 'ps3CFmoGHtnc8jJ0',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'oBY6n1hxUSFAcDXv',
					),
					$client->photoSize(
						type : 'M1F7NBjaECvJ3W6A',
						w : 91,
						h : 46,
						size : 69,
					),
					$client->photoCachedSize(
						type : '1rX7eU0dKNIEzu98',
						w : 24,
						h : 78,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'ceXfCKIthBm9S6i0',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '2MlfgeBdt5zT3oHn',
						w : 7,
						h : 76,
						sizes : array(85),
					),
					$client->photoPathSize(
						type : '5dH6WSomqM1FGKUA',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 86,
				thumb_version : 22,
				thumb_document_id : -3735352170763195194,
				count : 96,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : '2xeOmGwNz5vl8QJF',
					documents : array(-2199224240180247783),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 1892452610927804251,
					keyword : array('mGbohsXY6WQSVca5'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -3365528965204648735,
				),
				$client->document(
					id : 4281151517518198165,
					access_hash : 7411443620679530169,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 32,
					mime_type : 'B6iqR823axefKHv0',
					size : 2862413041005981527,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'wgSARKqeEBsa9LyY',
						),
						$client->photoSize(
							type : '1gqHn468FaSpbkW5',
							w : 73,
							h : 75,
							size : 78,
						),
						$client->photoCachedSize(
							type : 'CATDpG31efRbc2Wz',
							w : 97,
							h : 23,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'tAgSYhclIPpJ4wn8',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '1OThE2308X5Fqodj',
							w : 29,
							h : 2,
							sizes : array(64),
						),
						$client->photoPathSize(
							type : '7PNofieTBU05X9S3',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'X8EsNqotz2PYFiK5',
							w : 5,
							h : 83,
							size : 42,
							video_start_ts : 1976279.6806640625,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -6390945961021045041,
							background_colors : array(40),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -4776066295745150480,
							background_colors : array(41),
						),
					),
					dc_id : 29,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 60,
							h : 30,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : '57aR6C1csqzHrf2v',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -871397.0703125,
							w : 61,
							h : 3,
							preload_prefix_size : 96,
							video_start_ts : -407249.369140625,
							video_codec : 'HNlRW2xQdFp5jZ6h',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 75,
							title : 'ZYCXitpd0sbr8UvF',
							performer : 'wBG3cHgkFvTNexrL',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'CZUFm0VuJgf7n4Dl',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '9iBYGIZxq2jenW1C',
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
				installed_date : 100,
				id : 4913292627693823346,
				access_hash : -7098908721639016547,
				title : 'YTOMQP1d2weiF9k4',
				short_name : '6VsNXxkaL5fj7p1G',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'RD1okFqUHfMLhyzj',
					),
					$client->photoSize(
						type : 'L9Js2vyF7KGUVBc8',
						w : 12,
						h : 36,
						size : 75,
					),
					$client->photoCachedSize(
						type : '7PnR2SaW1XIEFK8g',
						w : 66,
						h : 15,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'YBstPUCWJIebFRx1',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'qHZ9V43LhGmTKPka',
						w : 97,
						h : 79,
						sizes : array(79),
					),
					$client->photoPathSize(
						type : 'dRA3chbagl7Gvpjy',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 4,
				thumb_version : 20,
				thumb_document_id : 2478320965641380721,
				count : 7,
				hash : 0,
			),
		),
	),
	unread : array(17123078653374838),
);
```