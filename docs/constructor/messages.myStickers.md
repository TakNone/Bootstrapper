# messages.myStickers

**Description** : *The list of stickersets owned by the current account &raquo;*

**Layer** : 229

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
	count : 91,
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
				id : 2978696740518938312,
				access_hash : 7808510265445331192,
				title : 'SLKQ3XZFofNIYsWa',
				short_name : 'b58BTRU1xda0NWF7',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'lqFuoXz2OtBJhCkp',
					),
					$client->photoSize(
						type : 'BMbUjQ6epACKkqyI',
						w : 3,
						h : 20,
						size : 71,
					),
					$client->photoCachedSize(
						type : '6RAItWg89OVpkbFE',
						w : 15,
						h : 62,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'Xx0y9UGkIdDCNJ6Z',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'WpC1w4G3fXOB7arz',
						w : 77,
						h : 75,
						sizes : array(53),
					),
					$client->photoPathSize(
						type : '7O4fI5b8JzBPkYV3',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 89,
				thumb_version : 88,
				thumb_document_id : -2736915463431597456,
				count : 21,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 4262136375562630422,
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
				installed_date : 10,
				id : -275654459621834753,
				access_hash : -7044101552649101549,
				title : 'RmbpIdcGEBoxQuw6',
				short_name : 'GE1x6hwqSlTuJAt0',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'hFsSYOkLXtazBlCb',
					),
					$client->photoSize(
						type : '4Hho1WajvQtL7Yse',
						w : 64,
						h : 30,
						size : 16,
					),
					$client->photoCachedSize(
						type : '2J917tUbI8aZF5Ts',
						w : 62,
						h : 99,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'IXKAYDetFm6aLVnx',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'wOUgeEWhX34jb25K',
						w : 97,
						h : 95,
						sizes : array(53),
					),
					$client->photoPathSize(
						type : 'RsA6WNpo3fXJbmkK',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 69,
				thumb_version : 73,
				thumb_document_id : -6573233004571649519,
				count : 3,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -4045479337865421980,
				),
				$client->document(
					id : -1950914277966766010,
					access_hash : -1025390259725007225,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 47,
					mime_type : 'o7EvZCHeKOpYNQXP',
					size : -8652129932843239158,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'xWHQwO1m9VseI8af',
						),
						$client->photoSize(
							type : 'VQP8Mija6IrpOvhm',
							w : 28,
							h : 30,
							size : 77,
						),
						$client->photoCachedSize(
							type : 'X78v0YbKRr9WiUzM',
							w : 57,
							h : 39,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'UpT9JsPxiGlf0ZYd',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'JM5VYhA9qbnwXyGH',
							w : 67,
							h : 5,
							sizes : array(69),
						),
						$client->photoPathSize(
							type : '7W2Ew1c0zFZHOsRv',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : '7clkJgCnZabi3vKR',
							w : 26,
							h : 98,
							size : 72,
							video_start_ts : 2082127.5439453125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -9092715119970657844,
							background_colors : array(73),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -4486287078511973821,
							background_colors : array(4),
						),
					),
					dc_id : 74,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 66,
							h : 99,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'rbJquBodMmLhK08x',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -44860.587890625,
							w : 64,
							h : 65,
							preload_prefix_size : 19,
							video_start_ts : 228844.513671875,
							video_codec : 'WFdOafUC0ZEjpwco',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 90,
							title : 'SofLY2kR5MlnhJHv',
							performer : 'r3MjBcx7W8dsa1oC',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'ZRuHwsMqpQVeP9Xy',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'Wt7vpX1qdC8Viml5',
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
				installed_date : 52,
				id : 465056549005781527,
				access_hash : -809214284676448617,
				title : 'RFyG1zuKnYP4UcVf',
				short_name : '75kUiACX4Jqd61r8',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'X0nbyJUqeODS1YdR',
					),
					$client->photoSize(
						type : 'eWSUsnY4QqtVJ8Lm',
						w : 23,
						h : 94,
						size : 53,
					),
					$client->photoCachedSize(
						type : 'Wk7MYgFL0xrJCaB1',
						w : 31,
						h : 60,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '8pJGVtbcdFHaXkzg',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'LhK2xvibp87kQl1E',
						w : 78,
						h : 50,
						sizes : array(34),
					),
					$client->photoPathSize(
						type : 'iRZhPBtgeHKYINpj',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 88,
				thumb_version : 32,
				thumb_document_id : 8746312304855313152,
				count : 17,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'eErX54PBwmtYNFIM',
					documents : array(-2031604563678024361),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 8356973993576240861,
					keyword : array('WH5iTaqhVZS2b430'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -9211176692137818796,
				),
				$client->document(
					id : 9195321186067245958,
					access_hash : -6063687944241386017,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 66,
					mime_type : '0DIUSafFq2xvmzNp',
					size : -704996633321676950,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'kyNK1mDJdCMYwVfg',
						),
						$client->photoSize(
							type : 'Vx2oHWiUXKlp5Qrh',
							w : 1,
							h : 98,
							size : 6,
						),
						$client->photoCachedSize(
							type : 'XoWqnfBQm4aY2hI9',
							w : 34,
							h : 32,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'kux7wLVf8c3HQNhC',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'hOwFs92u7NldyGVr',
							w : 20,
							h : 74,
							sizes : array(48),
						),
						$client->photoPathSize(
							type : 'K2eS7XBQTDqznika',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'IRiwruPW9Gvbx8Ct',
							w : 79,
							h : 22,
							size : 92,
							video_start_ts : -1017803.349609375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -5572501043437646362,
							background_colors : array(76),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -8129096392004054076,
							background_colors : array(27),
						),
					),
					dc_id : 98,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 57,
							h : 36,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'I0cz1aT7k5mnBOEo',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -899459.296875,
							w : 13,
							h : 54,
							preload_prefix_size : 30,
							video_start_ts : 1602905.5888671875,
							video_codec : 'U7OGa6W9RN8At4rh',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 80,
							title : 'yQKFLhZinCqaVBT2',
							performer : 'PkGIxgSX6vBOcp0C',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'eI2dVNB6lc0rx4Sv',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '07hLVuIlx6fCXJ5T',
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
				installed_date : 49,
				id : -6894523301917697349,
				access_hash : 8562908981134117141,
				title : 'KYwxNOAT4GZv6I9g',
				short_name : 'tJq3ykTiGPAZHX8d',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'yksSXYLjrDFIlA3h',
					),
					$client->photoSize(
						type : '4JAEVkRDisuIa3Fc',
						w : 57,
						h : 55,
						size : 84,
					),
					$client->photoCachedSize(
						type : 'FeL0KZn4r5BaSgku',
						w : 8,
						h : 26,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'c28UeuXTs93Gyq7b',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'ThIgk0tQ7b5M61on',
						w : 52,
						h : 33,
						sizes : array(49),
					),
					$client->photoPathSize(
						type : 'OfQ7c5VqFIAhHrY2',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 18,
				thumb_version : 53,
				thumb_document_id : 987886180224457258,
				count : 30,
				hash : 0,
			),
		),
	),
);
```