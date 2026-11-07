# messages.featuredStickers

**Description** : *Featured stickersets*

**Layer** : 233

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
	count : 84,
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
				installed_date : 66,
				id : -5775866278091445340,
				access_hash : -5426688199839364312,
				title : 'soBbzIK31itTGZvD',
				short_name : 'vt2nsikfwdmYNuZo',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'TXDu7sldxHi0ezah',
					),
					$client->photoSize(
						type : '0bnBRvNO4TFqprgG',
						w : 50,
						h : 93,
						size : 14,
					),
					$client->photoCachedSize(
						type : 'hRJT8neG9CwUb3Y4',
						w : 3,
						h : 91,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '3wGEF5Wa0kqORLK2',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'pStToUnXAYB2OMK4',
						w : 11,
						h : 38,
						sizes : array(19),
					),
					$client->photoPathSize(
						type : 'oWBAva3NU2C1QZcu',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 81,
				thumb_version : 82,
				thumb_document_id : -3450306593584588076,
				count : 47,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -6571686356984073707,
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
				installed_date : 7,
				id : 2493724996785288708,
				access_hash : 5876750998878547169,
				title : 'PDrqkpjhe9zoTIdi',
				short_name : 'EwDh5OaBJCtUj0M7',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'ozMI7EXDuNV3fhqZ',
					),
					$client->photoSize(
						type : 'Ghu6qEKnSWkCiQNv',
						w : 56,
						h : 26,
						size : 61,
					),
					$client->photoCachedSize(
						type : 'qrDmLezdxRosYUQA',
						w : 26,
						h : 28,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'b2i8G9NLVJqa4vUf',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'mp4yDoUL2tCf8ZiB',
						w : 94,
						h : 53,
						sizes : array(69),
					),
					$client->photoPathSize(
						type : 'LtKhjnZDJHMGfbRx',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 78,
				thumb_version : 48,
				thumb_document_id : -4473617397743399307,
				count : 9,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 2836977743261385144,
				),
				$client->document(
					id : -9105234662994797905,
					access_hash : 2515542229008114212,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 64,
					mime_type : 'XIr4B79vaW0ToY5i',
					size : 3348114429491672756,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'hdOc78F4Hfp3LUIZ',
						),
						$client->photoSize(
							type : 'wQqVhDAMYjISfyp8',
							w : 14,
							h : 5,
							size : 74,
						),
						$client->photoCachedSize(
							type : 'yGjhazI1d9YE3l5C',
							w : 13,
							h : 10,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : '1edQbM0DURlH6xTy',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'HlYzVyqt6ak4gJB1',
							w : 18,
							h : 92,
							sizes : array(69),
						),
						$client->photoPathSize(
							type : '25Whdou6BMfDsPAc',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'va2A6tgVdKBm3iT8',
							w : 89,
							h : 79,
							size : 18,
							video_start_ts : -901104.4189453125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -4058852538213626521,
							background_colors : array(96),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 5387691028077136,
							background_colors : array(32),
						),
					),
					dc_id : 66,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 6,
							h : 72,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'aSsUpdW0wOxXRoNA',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -288688.671875,
							w : 67,
							h : 74,
							preload_prefix_size : 76,
							video_start_ts : 1318852,
							video_codec : 'IkLQjhaNwMbomdte',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 12,
							title : 'dqtROAp5K1JYmrWc',
							performer : 'uZFiB3YJHXslgAK9',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'nJ4BU9zrks1tb2HM',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '4rpNMfPjolZxwXqO',
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
				installed_date : 75,
				id : 2410598357983687779,
				access_hash : -4480249108423140444,
				title : 'agsEUY58hkmoVZpR',
				short_name : 'q0g1ZWB2jIoOaXMd',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'W2RmiokY4XNtGxOz',
					),
					$client->photoSize(
						type : 'q0A8Uezd9NfDsFoh',
						w : 47,
						h : 65,
						size : 29,
					),
					$client->photoCachedSize(
						type : 'Rbv4NQOjiUeoL27K',
						w : 10,
						h : 31,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'xw9kOm04ZXVlWU87',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '6kFoT1mrJxzjDtMg',
						w : 92,
						h : 95,
						sizes : array(86),
					),
					$client->photoPathSize(
						type : 'xt0JnNldWpYKSTMr',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 18,
				thumb_version : 62,
				thumb_document_id : 7192084967469584182,
				count : 71,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'fCEtULsxQ48YgW7m',
					documents : array(5311124931537303119),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -7941041066872035495,
					keyword : array('hFoX3CKdO9UmrNMY'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -8503105926045983726,
				),
				$client->document(
					id : 3645474135811825873,
					access_hash : -5922378602065033072,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 79,
					mime_type : 'Qdvkc6GxDLNjmC9F',
					size : -2187176318988916172,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'U7mKqjBG1CezuXi8',
						),
						$client->photoSize(
							type : 'VwdvR2GgDKchHECQ',
							w : 86,
							h : 63,
							size : 59,
						),
						$client->photoCachedSize(
							type : '6dLVsyuXvtRk1JqB',
							w : 5,
							h : 72,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'SLfp1CnAmMizcQxg',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'JwvB8ruoDMdSscUA',
							w : 17,
							h : 46,
							sizes : array(9),
						),
						$client->photoPathSize(
							type : 'GKD4PBxh5rHigkJj',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'ih1GKOunNbdLQRXC',
							w : 38,
							h : 100,
							size : 79,
							video_start_ts : 1997188.490234375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -6248160688680762479,
							background_colors : array(86),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 5224195812437452102,
							background_colors : array(9),
						),
					),
					dc_id : 84,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 85,
							h : 41,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'O0BMeL4fgVzqa8lQ',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -2085488.12109375,
							w : 36,
							h : 69,
							preload_prefix_size : 50,
							video_start_ts : 1908333.0439453125,
							video_codec : 'bgK9GWrMVFHnke2c',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 15,
							title : 'downqja9D4hHpuYW',
							performer : 'YkfTn9AKO2NMPb45',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'KIBRfgHS9Tslt48N',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'M2LakYB63XSlmTuv',
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
				installed_date : 85,
				id : -4156624655393105667,
				access_hash : -5820935285105321337,
				title : 'GSKTMYpUv1EflQ3C',
				short_name : 'rbQ4wGyzoLsP5JX7',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '8rAMayuOmk67bPCK',
					),
					$client->photoSize(
						type : 'PlpnhQ2DvdjiZru7',
						w : 91,
						h : 68,
						size : 49,
					),
					$client->photoCachedSize(
						type : 'rXdh0yfm3MV2g4Ez',
						w : 79,
						h : 36,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'uR6b5rBktq8FdgwE',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '0Nbvc3QGgIUiMEdq',
						w : 100,
						h : 46,
						sizes : array(30),
					),
					$client->photoPathSize(
						type : 'RFL2wZiSoNf6C9Wv',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 31,
				thumb_version : 21,
				thumb_document_id : 4759211434277535840,
				count : 73,
				hash : 0,
			),
		),
	),
	unread : array(-6961118186568058507),
);
```