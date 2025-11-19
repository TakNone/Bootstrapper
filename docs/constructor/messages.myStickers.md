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
	count : 44,
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
				installed_date : 37,
				id : -5710685677021985470,
				access_hash : 2731874187607964287,
				title : 'RvAM2T0poSC14nqj',
				short_name : 'EtjHXSNDTkcBGFWn',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'ZW0j8PzvR1Udbmrf',
					),
					$client->photoSize(
						type : '82E9bsnykDjXK45x',
						w : 13,
						h : 59,
						size : 77,
					),
					$client->photoCachedSize(
						type : 'wWGXDgSzjisIdFQy',
						w : 48,
						h : 47,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'ftDiML23BbAsYvqE',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'JrBlk4EYNAscqS6z',
						w : 18,
						h : 47,
						sizes : array(65),
					),
					$client->photoPathSize(
						type : '76SDtBHVkjUPghLn',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 39,
				thumb_version : 13,
				thumb_document_id : 4312363844140813732,
				count : 37,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 4830209359550028707,
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
				installed_date : 41,
				id : -1193065705150659502,
				access_hash : -3996937311438108464,
				title : 'ODzwseuUC8vNTYy1',
				short_name : 'fB6L2UVbJYEHWeI9',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'Juzixf1LIZ4lFgVX',
					),
					$client->photoSize(
						type : 'FMuUZcA8q15n4gWY',
						w : 60,
						h : 43,
						size : 21,
					),
					$client->photoCachedSize(
						type : '8ERMh6VtIKa1Hd2C',
						w : 22,
						h : 62,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'wZV71mLcQbAEKdBD',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'NEM5v3OAkQmWI0oR',
						w : 31,
						h : 96,
						sizes : array(20),
					),
					$client->photoPathSize(
						type : 'cD4u0H3bQel6Pmgs',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 35,
				thumb_version : 71,
				thumb_document_id : 1727573349235289046,
				count : 76,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -2185297014915622196,
				),
				$client->document(
					id : 4470715384567750107,
					access_hash : -6658351546276954332,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 68,
					mime_type : '7PYQw8zf5vVk2DMo',
					size : -6807237493181484629,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'mTWXOhrwqf1ARbjM',
						),
						$client->photoSize(
							type : 'CQt1U3hxIdOEYDcw',
							w : 59,
							h : 12,
							size : 49,
						),
						$client->photoCachedSize(
							type : '2UzpK9FDqhP3WySd',
							w : 98,
							h : 34,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'V5OWf6KlmnhigDdZ',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'LoVyl0ZReh3acgQD',
							w : 93,
							h : 85,
							sizes : array(59),
						),
						$client->photoPathSize(
							type : 'Ygnyamo0fz5kXlcR',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : '2DeEG7mgL95ntRWc',
							w : 38,
							h : 20,
							size : 94,
							video_start_ts : -1362529.30078125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -1386969723079814670,
							background_colors : array(41),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 7157616733150962512,
							background_colors : array(5),
						),
					),
					dc_id : 32,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 20,
							h : 64,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'qOC5MWZE4c0mXxi6',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 409614.6875,
							w : 80,
							h : 82,
							preload_prefix_size : 42,
							video_start_ts : -768858.28515625,
							video_codec : '2e5m9cgvnFUQkoBz',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 73,
							title : 'avYLdX9TcpVHOuF5',
							performer : 'ufhyJ1EBXM4ebca7',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'lZCcDiL3YNkQ2tMP',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'VIbfiGseTpSnZxBr',
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
				installed_date : 80,
				id : -6782276381105885164,
				access_hash : -5864182520768340058,
				title : 'UBk5Vfr4CpRvtG0E',
				short_name : '9VpfkUZaFDBXxTl0',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'MrKTObWYIQJoBcGi',
					),
					$client->photoSize(
						type : 'NhjlDI3b4A8KsS2y',
						w : 51,
						h : 9,
						size : 49,
					),
					$client->photoCachedSize(
						type : 'B6U3pTV1hEtFHXLc',
						w : 24,
						h : 18,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'zheItYO18oTNMS0u',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'uv5fRPIBHnxQX7FY',
						w : 76,
						h : 33,
						sizes : array(99),
					),
					$client->photoPathSize(
						type : 'eUHZyWa542tgwK9v',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 26,
				thumb_version : 25,
				thumb_document_id : -8341596620036136799,
				count : 48,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'Sz5V678jTKHsL9ar',
					documents : array(7480967007339243323),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -692084342520436322,
					keyword : array('lZ9S3QUnAGmqEkyH'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -6887547633184707096,
				),
				$client->document(
					id : 6794818684666959464,
					access_hash : -4844737751907567446,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 10,
					mime_type : 'Mij2EepQZOs56T3m',
					size : 2773399984607861483,
					thumbs : array(
						$client->photoSizeEmpty(
							type : '9FSv4OTPeYGizlgW',
						),
						$client->photoSize(
							type : 'cpz5wXW3ms6HAhn4',
							w : 99,
							h : 10,
							size : 61,
						),
						$client->photoCachedSize(
							type : 'DdWBbv1nhZ6tH02m',
							w : 64,
							h : 56,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : '3GJPy6rLRIoMaxiZ',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'hk2V4yjDI0WQpRz5',
							w : 61,
							h : 6,
							sizes : array(45),
						),
						$client->photoPathSize(
							type : 'RQUYlcTqze53hax0',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'cdSLhYBgtWsyH1fE',
							w : 31,
							h : 43,
							size : 42,
							video_start_ts : -544817.9677734375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -4775969296684506352,
							background_colors : array(2),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -2106110269258710059,
							background_colors : array(39),
						),
					),
					dc_id : 90,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 50,
							h : 83,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : '4nf2WzV3yZqNg0IJ',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -448378.4521484375,
							w : 15,
							h : 55,
							preload_prefix_size : 56,
							video_start_ts : -430263.951171875,
							video_codec : '3jBhubVwWExe1a9P',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 54,
							title : 'TdJjR4ZV23nuiM9U',
							performer : 'oilJ0NFWP6HQ3zOK',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'TBwz8a6R7UHr9eyv',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'AB4qHRjUrClQzw0V',
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
				installed_date : 3,
				id : 8952217164557515987,
				access_hash : -3447973097200063193,
				title : '3ANTyfBmLKW4CYDX',
				short_name : 'tY57juKJ3M4qWNEo',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'SzR21VntLUlacBZe',
					),
					$client->photoSize(
						type : '1y3MFz4tVd0Bohxu',
						w : 30,
						h : 88,
						size : 73,
					),
					$client->photoCachedSize(
						type : 'sxbk39noLwvVzKIe',
						w : 79,
						h : 35,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'un6YFHcryS3aRgj7',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'FnpA4gdsrEOhqjVk',
						w : 17,
						h : 31,
						sizes : array(99),
					),
					$client->photoPathSize(
						type : 'onVYJC9RuP6ceTtZ',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 68,
				thumb_version : 16,
				thumb_document_id : -1555417376247230917,
				count : 27,
				hash : 0,
			),
		),
	),
);
```