# messages.myStickers

**Description** : *The list of stickersets owned by the current account &raquo;*

**Layer** : 222

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
	count : 99,
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
				installed_date : 21,
				id : -5084068806978543773,
				access_hash : -5866010096670430116,
				title : 'bpqmxurY4jT8sEcQ',
				short_name : '8VfUp4gl7LE3Yh0K',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'niB4ySsrel8LUJ90',
					),
					$client->photoSize(
						type : 'KmREVuCD35NpIWFq',
						w : 50,
						h : 51,
						size : 92,
					),
					$client->photoCachedSize(
						type : 'q8rdNBJGy1Isin6z',
						w : 25,
						h : 58,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'vPSz9qI0ROBQ5b81',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'kogMBml12v5y4ZNG',
						w : 80,
						h : 26,
						sizes : array(36),
					),
					$client->photoPathSize(
						type : 'lKr9uFmOM4EIfLWh',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 24,
				thumb_version : 91,
				thumb_document_id : 3073090123990811318,
				count : 62,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 4677392613743051619,
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
				installed_date : 73,
				id : 1432642558965217944,
				access_hash : 7291007523034076435,
				title : 'MSFVK0P5WXndj9Ze',
				short_name : 'SrATjVIZ79LkQ5FB',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '7BRlt8Qb4XWT3NG9',
					),
					$client->photoSize(
						type : '5kMuR9FKSQJDUmx4',
						w : 95,
						h : 55,
						size : 43,
					),
					$client->photoCachedSize(
						type : '3GJdwzTrAxHhRbft',
						w : 78,
						h : 93,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'S50XtG1n2F8weDL3',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '6tUcaC9YvZqGgsTy',
						w : 78,
						h : 33,
						sizes : array(22),
					),
					$client->photoPathSize(
						type : 'WqwkQ2juMOdV5R7c',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 89,
				thumb_version : 30,
				thumb_document_id : 5461667094706716158,
				count : 27,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 4542319535997093442,
				),
				$client->document(
					id : -3081703863159522331,
					access_hash : 8634997118084796021,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 27,
					mime_type : 'gEN3DweVW7KoCTIS',
					size : 5748988797310407634,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'MXmyjSQ2pckHsIOB',
						),
						$client->photoSize(
							type : 'WLTapDHnAF9QdxOy',
							w : 34,
							h : 67,
							size : 7,
						),
						$client->photoCachedSize(
							type : '23bPsfSlZpzdJrLD',
							w : 49,
							h : 99,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'Q1UfjktWC7lahnBq',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'quiebptZKhl2rEmd',
							w : 39,
							h : 16,
							sizes : array(53),
						),
						$client->photoPathSize(
							type : 'D8hlZAmFepvKwQ5I',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'HDVvA3EjUaBJXmiZ',
							w : 35,
							h : 74,
							size : 25,
							video_start_ts : 300946.1982421875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -1038091786121596154,
							background_colors : array(2),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 2930440227515302976,
							background_colors : array(81),
						),
					),
					dc_id : 49,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 68,
							h : 88,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'OMSzxT7QmFvHLl4X',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 524014.4716796875,
							w : 20,
							h : 75,
							preload_prefix_size : 37,
							video_start_ts : 1633489.392578125,
							video_codec : 'uKlVAnzp4xkE7HRX',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 33,
							title : 'IDdvKL0HYphfJiPq',
							performer : 'ZLkloz2M0UESA7hp',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : '0iB29tZ1WVj5xUnI',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '3ybQVd0FBxXHs6Wc',
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
				installed_date : 88,
				id : -664668741069180796,
				access_hash : -6349339888895217921,
				title : 'GsnfeB2ZJDgWidVx',
				short_name : '7QaLmuAxDXiGgH4Y',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'UDAxg54CeptkMQ6c',
					),
					$client->photoSize(
						type : 'M7tHZa0Nves2kIrh',
						w : 40,
						h : 89,
						size : 2,
					),
					$client->photoCachedSize(
						type : 'Vc95JLvoGWYpZQMF',
						w : 6,
						h : 31,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'j30mVdK5Ru8vh4Pa',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'e9GATMqNEugwP72O',
						w : 7,
						h : 66,
						sizes : array(49),
					),
					$client->photoPathSize(
						type : '69GJp4Li35FwhBPo',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 20,
				thumb_version : 68,
				thumb_document_id : -8712242057665749756,
				count : 86,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : '6pAELtglCoHey0nV',
					documents : array(-7894098051024571244),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 8196189061968488032,
					keyword : array('B8CNp39ouhaxYGmw'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 4182873122289085783,
				),
				$client->document(
					id : -1256484888663114206,
					access_hash : -5276186485389524942,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 78,
					mime_type : 'RCVtmulwOTp0UeHd',
					size : 1546195562443890451,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'LVrqxubCPYB5Mfk1',
						),
						$client->photoSize(
							type : '9GOavuJxqs2Xflor',
							w : 50,
							h : 26,
							size : 85,
						),
						$client->photoCachedSize(
							type : 'MQzbqg7fvu25NPVO',
							w : 56,
							h : 92,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'Er90vkh5pXdDMVKH',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'x6RQj2oeF5SVtdhH',
							w : 7,
							h : 29,
							sizes : array(11),
						),
						$client->photoPathSize(
							type : 'cyABhW10mHfX9j5O',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : '7gvq5M4S16JY8FD9',
							w : 85,
							h : 88,
							size : 93,
							video_start_ts : 1616697.1640625,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -8514336916884835286,
							background_colors : array(67),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 1397372794233533119,
							background_colors : array(37),
						),
					),
					dc_id : 36,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 76,
							h : 10,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : '17489NEipSclMz2k',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 2041794.84375,
							w : 96,
							h : 6,
							preload_prefix_size : 64,
							video_start_ts : -1606054.1328125,
							video_codec : 'PZhweT0sKSU3Wz4B',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 98,
							title : 'uoTOcxyNSn4iAFHz',
							performer : '3T718hilDneqwk2Q',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'Wq1eNp3s25LSGZjY',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '1wx9HyC54nhZYuIT',
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
				installed_date : 77,
				id : -9072917066032918033,
				access_hash : -8761301101957590115,
				title : 'MIyPtvjdUA5Xk1L9',
				short_name : 'WCYkJViP4pbu0NRq',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'HeBs607PIxCahc2R',
					),
					$client->photoSize(
						type : 'tvCx3aPg5zYJsBAX',
						w : 76,
						h : 18,
						size : 5,
					),
					$client->photoCachedSize(
						type : 'hgAeCDTrScYyQoWb',
						w : 16,
						h : 66,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'ocUSAIiLR1HF87jf',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'LpzmW5Vho8F3w6RO',
						w : 57,
						h : 99,
						sizes : array(92),
					),
					$client->photoPathSize(
						type : 's4PJA20wKuNSGd5Z',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 29,
				thumb_version : 2,
				thumb_document_id : 3318450674926073629,
				count : 17,
				hash : 0,
			),
		),
	),
);
```