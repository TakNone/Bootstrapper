# messages.stickerSetInstallResultArchive

**Description** : *The stickerset was installed, but since there are too many stickersets some were archived*

**Layer** : 218

```tl
messages.stickerSetInstallResultArchive#35e410a8 sets:Vector<StickerSetCovered> = messages.StickerSetInstallResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Archived stickersets |

---

## Type

[messages.StickerSetInstallResult](type/messages.StickerSetInstallResult)

---

## Example

```php
$messagesStickerSetInstallResult = $client->messages->stickerSetInstallResultArchive(
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
				installed_date : 56,
				id : -7836067066528749696,
				access_hash : -1664782793524056864,
				title : 'mWBGYCMRSHz1UeFx',
				short_name : 'X9VLBbl3GM7hDFQi',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'BtfysIK0n84haGWN',
					),
					$client->photoSize(
						type : 'EOP13kA0UBgJTFl8',
						w : 52,
						h : 68,
						size : 73,
					),
					$client->photoCachedSize(
						type : 'ROpr6SdxeJTzZtB7',
						w : 19,
						h : 90,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'AxEKmHg2CUq4TwQR',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'tFeUODVnwLyz1aYG',
						w : 25,
						h : 100,
						sizes : array(45),
					),
					$client->photoPathSize(
						type : '9AT8sVXhdr6OCbxv',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 70,
				thumb_version : 55,
				thumb_document_id : -4601967082581625332,
				count : 94,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 3998037168748191289,
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
				installed_date : 21,
				id : 3058509606422744867,
				access_hash : 8490015219486592682,
				title : 'o6PtXfmngHTa1pYs',
				short_name : 'oUbhvKP6RFwtlZIG',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'Sseo3yNTjd7a5Q0b',
					),
					$client->photoSize(
						type : 'aYVxpGdut3MvoWHh',
						w : 57,
						h : 0,
						size : 78,
					),
					$client->photoCachedSize(
						type : 'GpNWYEybQqMg3ldj',
						w : 68,
						h : 98,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'hZ0CqPc5Ly9xpfTn',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '9PJj0kTlf7ZB5WAK',
						w : 48,
						h : 61,
						sizes : array(57),
					),
					$client->photoPathSize(
						type : 'JohKuOnfgU7k8pG9',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 4,
				thumb_version : 74,
				thumb_document_id : 3685207140045526539,
				count : 18,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 6122672086773261609,
				),
				$client->document(
					id : -8132112880944092626,
					access_hash : -2327951216616178228,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 73,
					mime_type : 'JwRMU5ZxVnmW2Ag3',
					size : -3469995538540874333,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'dgICbsiJMNnlRULV',
						),
						$client->photoSize(
							type : 'BCWkmAyvcr4z6x05',
							w : 85,
							h : 21,
							size : 51,
						),
						$client->photoCachedSize(
							type : 'zJE3OeDibIBCSmyo',
							w : 75,
							h : 22,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'Gs6b8Bmpa2VhtAPS',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'FlLMgSowhIyCiARq',
							w : 7,
							h : 51,
							sizes : array(23),
						),
						$client->photoPathSize(
							type : 'zYXOojE8sISq60bf',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'jtTyv0BO3ami4MUh',
							w : 27,
							h : 14,
							size : 12,
							video_start_ts : 15119.6962890625,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 3022454994089416997,
							background_colors : array(88),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 7500384785870765699,
							background_colors : array(94),
						),
					),
					dc_id : 11,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 61,
							h : 10,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'jkZ6XnpMsLz3DadH',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1830927.5732421875,
							w : 63,
							h : 23,
							preload_prefix_size : 73,
							video_start_ts : 9426.0703125,
							video_codec : '3jFhzi4qJYPn2wSU',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 65,
							title : 'LwrDJY8BQSV3Nyek',
							performer : 'WShtqTEXDl02nmQa',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'bm4FhCKak2Zp7At0',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'GUSWsMOHXQtjq4Z0',
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
				installed_date : 19,
				id : -110359659252105071,
				access_hash : 8530244787943492323,
				title : '3ka0qOSm4oENWJer',
				short_name : '6jz5hBsH40lprKGk',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'Ji5XB7ZnIyh9zaNP',
					),
					$client->photoSize(
						type : 'mw0HIZV7W35jUE9X',
						w : 26,
						h : 16,
						size : 33,
					),
					$client->photoCachedSize(
						type : 'DcHL1NuWG8Umtwfn',
						w : 67,
						h : 91,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'zCP9mYADW2hpk81G',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'wUgtPQo2mhpLbrlY',
						w : 93,
						h : 97,
						sizes : array(58),
					),
					$client->photoPathSize(
						type : 'NS92kZUQYCnj8Dyl',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 85,
				thumb_version : 60,
				thumb_document_id : -6393253170954528106,
				count : 18,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'ibOZNPEnLCzoHgjl',
					documents : array(-5586428309423953267),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -5474047939112824535,
					keyword : array('t1JpwQrBaAlPWOde'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -6323401017464705467,
				),
				$client->document(
					id : -6953998969714784325,
					access_hash : -1837844475808028425,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 52,
					mime_type : 'vJpxOLbnTVQZX6Fu',
					size : -2461668306794516786,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'tUqPbsX9hWVYCowx',
						),
						$client->photoSize(
							type : 'kz2bYoIZdRFqGLC1',
							w : 94,
							h : 34,
							size : 49,
						),
						$client->photoCachedSize(
							type : 'vuc2oFg6MyB5w43R',
							w : 22,
							h : 55,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'Vl0IsEyg9LSe4jQc',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'hxXMefQsUEvNAO1H',
							w : 9,
							h : 27,
							sizes : array(38),
						),
						$client->photoPathSize(
							type : 'VAwFhxjzLiro34NM',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'YMUdjIxJB5LAhmk2',
							w : 81,
							h : 77,
							size : 70,
							video_start_ts : 1282372.4091796875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -2454311435031103250,
							background_colors : array(93),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -8306100188107758476,
							background_colors : array(46),
						),
					),
					dc_id : 86,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 18,
							h : 22,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'VZ9BnMaT4sIkJvxF',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1264829.287109375,
							w : 92,
							h : 32,
							preload_prefix_size : 45,
							video_start_ts : 970671.9169921875,
							video_codec : 'N27SpqZvi90snb3F',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 52,
							title : 'Su4erYFbTwNKsZmq',
							performer : 'mla2qOFrUA60WjKZ',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'E0hF8vQiBJfoGCSa',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'yVOrNvwGA9n5x67C',
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
				id : 6546858940677465953,
				access_hash : 7749178628487857989,
				title : 'o1b35WhXkrx27CJ4',
				short_name : 'r0iAMpS49JUzBhHc',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'zsXiI31f82VCWH0T',
					),
					$client->photoSize(
						type : 'OkAHogifX6d3VeFD',
						w : 85,
						h : 66,
						size : 51,
					),
					$client->photoCachedSize(
						type : 'eGknEzMCRaL6WXI1',
						w : 7,
						h : 29,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'M1P8EGFhLokudXgl',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'TbwFkNEUeivzyBrg',
						w : 8,
						h : 83,
						sizes : array(85),
					),
					$client->photoPathSize(
						type : '3rsChHBuWEOoAigY',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 87,
				thumb_version : 13,
				thumb_document_id : 6247478593935984428,
				count : 31,
				hash : 0,
			),
		),
	),
);
```