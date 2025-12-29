# messages.myStickers

**Description** : *The list of stickersets owned by the current account &raquo;*

**Layer** : 218

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
	count : 76,
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
				id : -9090716319197218427,
				access_hash : 2589677720626338585,
				title : 'ZBwutbYvJRlSHj6F',
				short_name : 'U8dnMBPtOkE7hepv',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '6NrQAPFytL4eJgub',
					),
					$client->photoSize(
						type : 'J5TCDjgcswLp49xh',
						w : 78,
						h : 2,
						size : 62,
					),
					$client->photoCachedSize(
						type : 'U5NOidPyl76k8coZ',
						w : 29,
						h : 70,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'dbQVYHB7SfJ31OTM',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'rzET9b5aCnI8iQOA',
						w : 43,
						h : 89,
						sizes : array(49),
					),
					$client->photoPathSize(
						type : '3eExfM6i5mPNnbwX',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 55,
				thumb_version : 59,
				thumb_document_id : 2800236359044049126,
				count : 65,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -5348097528484602362,
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
				id : -4436248071776466333,
				access_hash : -2459868984103630570,
				title : 'wIqiakn0rxMoXVUR',
				short_name : 'QC0mXVhAscxT1idr',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '8pMkJOlsvAg6HIfC',
					),
					$client->photoSize(
						type : 'lX9BkS40srwW7Yua',
						w : 51,
						h : 62,
						size : 48,
					),
					$client->photoCachedSize(
						type : 'gTMnhB0KOXUPqRWu',
						w : 45,
						h : 75,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'Xxc0reOfsn3tVBTh',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'Bb3XkKLigVOCyRdM',
						w : 69,
						h : 54,
						sizes : array(81),
					),
					$client->photoPathSize(
						type : '9H30gGrnfSevlsmK',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 14,
				thumb_version : 46,
				thumb_document_id : -3124288738492154821,
				count : 42,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -3820771840594419028,
				),
				$client->document(
					id : -6595205507086115401,
					access_hash : -9153013172948217752,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 32,
					mime_type : 'EhNCAZUfSntmaoW0',
					size : -6925788663012152408,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'qFHXJIzdlG8KyZgu',
						),
						$client->photoSize(
							type : '4DXwejQuBnWcp2Lt',
							w : 77,
							h : 99,
							size : 81,
						),
						$client->photoCachedSize(
							type : 'io03dBPR5V6wFngc',
							w : 22,
							h : 10,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'iybxNf2J8ZcDOmlj',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'n0EazNKmXh2cgjMQ',
							w : 35,
							h : 8,
							sizes : array(85),
						),
						$client->photoPathSize(
							type : '2GbF9T4V0PptCh8c',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'vdH7YOpZy8mFN5kw',
							w : 87,
							h : 24,
							size : 70,
							video_start_ts : 1090695.01953125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -5100904199969063665,
							background_colors : array(45),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 6104125050948550880,
							background_colors : array(19),
						),
					),
					dc_id : 68,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 52,
							h : 49,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'sp7wPj2G9dbVS0NB',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -24432.060546875,
							w : 58,
							h : 14,
							preload_prefix_size : 31,
							video_start_ts : 1311376.4736328125,
							video_codec : 'c6DTsmSOtoLrViyA',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 87,
							title : 'eO7tIKjR8JaXkFNh',
							performer : 'odVjbtnwIshO7Z94',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'LZhrxjOBAmJyQg1V',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'H4wz9YthlL2q1xkT',
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
				installed_date : 78,
				id : 7577560698836328104,
				access_hash : 2268164100690689107,
				title : 'egTQdFjp7tklYCyZ',
				short_name : 'd4hc85wgnCEFikOB',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'twVTiFux0ag6cjSf',
					),
					$client->photoSize(
						type : 'WY4nHMrk1x7a8FLC',
						w : 36,
						h : 66,
						size : 72,
					),
					$client->photoCachedSize(
						type : 'i3UnCjWTNdOoAqeS',
						w : 70,
						h : 11,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'rQ7j8ogwM14uI3G5',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'kQtuaBOfWYS8nysw',
						w : 45,
						h : 47,
						sizes : array(59),
					),
					$client->photoPathSize(
						type : 'nWF5xzOLuh6Ps14B',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 91,
				thumb_version : 66,
				thumb_document_id : -8785599548445691427,
				count : 36,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : '9oR62TVql8x7wLKC',
					documents : array(-2058642615773271396),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -4938376752268648982,
					keyword : array('sFfL1mD0UMWEh5BI'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 792308842244486353,
				),
				$client->document(
					id : 5561743705220555319,
					access_hash : -2790672997047746378,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 96,
					mime_type : 'feMKHQFa0Sjrnxb8',
					size : 3274514528414249718,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'QMRi5o6ZUH7fv391',
						),
						$client->photoSize(
							type : 'pwBmcZtGHK5ajOIS',
							w : 58,
							h : 89,
							size : 100,
						),
						$client->photoCachedSize(
							type : 'HUT403zQMhXJ8GCp',
							w : 28,
							h : 22,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'nEPp7xFBqQbKzcZT',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'P9SzJxmEspYKgHc3',
							w : 40,
							h : 69,
							sizes : array(62),
						),
						$client->photoPathSize(
							type : 'XW4szxO9rGEYqvJf',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'hDwYCjMGBAE85zbN',
							w : 26,
							h : 35,
							size : 25,
							video_start_ts : 1859913.2001953125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -4419569616261124953,
							background_colors : array(3),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -3269819665865043978,
							background_colors : array(99),
						),
					),
					dc_id : 64,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 63,
							h : 60,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'ZrYV2DhOlPkuyTC6',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -1137692.7568359375,
							w : 39,
							h : 7,
							preload_prefix_size : 72,
							video_start_ts : -979413.3603515625,
							video_codec : '5SaTAol4MB8ZmH9W',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 85,
							title : 'mv6ifgKDTMGYFhzR',
							performer : 'fdiQCXSJqwRtvDau',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'NeyfTzgbFsvCAlc2',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '4HiFQXLpOoRUGvzk',
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
				installed_date : 17,
				id : -615808438096962682,
				access_hash : -1102325294272004714,
				title : '3PNCwmr4jEFqfSe0',
				short_name : 'aYUfZuSz47rM6OJe',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'EXNJKSo3cDhFVPb4',
					),
					$client->photoSize(
						type : 'IES2pBRhnes1z0Kk',
						w : 82,
						h : 50,
						size : 27,
					),
					$client->photoCachedSize(
						type : 'rOI2Jf3068WKuXaG',
						w : 9,
						h : 3,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'geZdMLvWO6bXYV7p',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 't06eUCsRhHy8jBqM',
						w : 80,
						h : 23,
						sizes : array(71),
					),
					$client->photoPathSize(
						type : '58l2jCkHDb3rTKNR',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 14,
				thumb_version : 16,
				thumb_document_id : 8263814433397257141,
				count : 75,
				hash : 0,
			),
		),
	),
);
```