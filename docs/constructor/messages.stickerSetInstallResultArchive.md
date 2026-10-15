# messages.stickerSetInstallResultArchive

**Description** : *The stickerset was installed, but since there are too many stickersets some were archived*

**Layer** : 229

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
				installed_date : 96,
				id : 3548777794137205128,
				access_hash : 7622980067768854192,
				title : 'wYehPKFqs04ybN87',
				short_name : 'dbircjSFtIJDaR9G',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'vAoF0sNdwV8MRTiO',
					),
					$client->photoSize(
						type : 'douRcE3KN1YCaG9S',
						w : 4,
						h : 0,
						size : 1,
					),
					$client->photoCachedSize(
						type : 'UqYEyeMo7apAnSGc',
						w : 4,
						h : 82,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'jAengDcsbkMh08LY',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '09TcMLef1HSgpVB8',
						w : 32,
						h : 75,
						sizes : array(44),
					),
					$client->photoPathSize(
						type : 'pUCIqWF5BA2f8LVT',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 66,
				thumb_version : 41,
				thumb_document_id : 6197038202896948399,
				count : 0,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -2302166477229764692,
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
				installed_date : 68,
				id : 6558944552631511321,
				access_hash : 2075178005872884603,
				title : 'lDTz7bXYNUwdJu3m',
				short_name : 'WHygxKZTOFrM6GIN',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'fu7xptBsX3cTrMbV',
					),
					$client->photoSize(
						type : 'bmCfv2xh6uRLc8wV',
						w : 41,
						h : 21,
						size : 75,
					),
					$client->photoCachedSize(
						type : 'wpStzZbu2nqykVQj',
						w : 84,
						h : 28,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'qwhJxg3aEN0fVCHX',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'ct68xLKo4f23qhF9',
						w : 33,
						h : 50,
						sizes : array(52),
					),
					$client->photoPathSize(
						type : 'rOBYl2W0JTPqsXEp',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 83,
				thumb_version : 3,
				thumb_document_id : 3918805021979201995,
				count : 26,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 6859935363809033382,
				),
				$client->document(
					id : 7900965660695881698,
					access_hash : -8469978104040549245,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 57,
					mime_type : 'QAxbI1TGpoJBNHS6',
					size : 1281926585878790414,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'BzkrjOEPaVcby3XN',
						),
						$client->photoSize(
							type : '7Yy2KAaBulgsRxXI',
							w : 90,
							h : 20,
							size : 60,
						),
						$client->photoCachedSize(
							type : 'j7Ai9pCg1Z6UT8dv',
							w : 94,
							h : 69,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'wWqArayDbhtRGo3k',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'R8qgi4vMokzTxQ1V',
							w : 84,
							h : 23,
							sizes : array(36),
						),
						$client->photoPathSize(
							type : 'G0H4bl9zkPIiTc3E',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'R0cytGqdhA8X1iS2',
							w : 77,
							h : 26,
							size : 37,
							video_start_ts : 814325.31640625,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -1565700909146596979,
							background_colors : array(31),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -2514101116947768266,
							background_colors : array(66),
						),
					),
					dc_id : 86,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 1,
							h : 64,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'wqrHQ5Bx6WKms8kn',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -947066.162109375,
							w : 33,
							h : 99,
							preload_prefix_size : 91,
							video_start_ts : -113351.1669921875,
							video_codec : 'RBaYFCIU2z5v6VX4',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 94,
							title : 'lcfGCtKVuF5ZOwJy',
							performer : 'sD7H8FemEwa5bvcx',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'baAuno4Sf2IxiZUk',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'Bq82wzJxlOrRyHXh',
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
				installed_date : 1,
				id : -2417885161620898902,
				access_hash : 8888582808141994140,
				title : 'afyIqSPVOZmN0TtR',
				short_name : 'gvNDVFSuMBsUGwO4',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'uV0RjWksm3naM7Yp',
					),
					$client->photoSize(
						type : 'mY7wo6Qzuf1AWsvp',
						w : 82,
						h : 65,
						size : 45,
					),
					$client->photoCachedSize(
						type : 'WvThLMuCztVoHQ5X',
						w : 80,
						h : 9,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'UMy2uEjo0wJBvQt8',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'ZLz96kcWAjDOCYgE',
						w : 19,
						h : 90,
						sizes : array(44),
					),
					$client->photoPathSize(
						type : 'O2cD1gG8iTK6ajY7',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 28,
				thumb_version : 79,
				thumb_document_id : -8112858165729246104,
				count : 57,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'R2zQpkX6xaJVYDNZ',
					documents : array(-4010833630126538017),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 4556140667987376050,
					keyword : array('zBL9Fd5wA2Q4eStq'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -6061657512438261588,
				),
				$client->document(
					id : 1693069803590103271,
					access_hash : -3297092690199105237,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 19,
					mime_type : 'oHn35Y6ctdCaN49x',
					size : -1150119283987013101,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'Jw5r42FZdqVsnT09',
						),
						$client->photoSize(
							type : 'YBOvbZCPSdGgQyiU',
							w : 96,
							h : 84,
							size : 97,
						),
						$client->photoCachedSize(
							type : 'SEsfxgrRNVApY2B1',
							w : 89,
							h : 1,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : '6gPQeS2pzyu9btN3',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'NIT0S6atpfLD4mBd',
							w : 74,
							h : 80,
							sizes : array(100),
						),
						$client->photoPathSize(
							type : '41OHmGDUgiFVM2S3',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'Aj1Vrx24P8b5qwmM',
							w : 88,
							h : 97,
							size : 49,
							video_start_ts : -635500.529296875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 7469755369052497072,
							background_colors : array(70),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 4477233270680646955,
							background_colors : array(65),
						),
					),
					dc_id : 57,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 52,
							h : 28,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'dH6u7YOIfXarkg8V',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -855633.537109375,
							w : 9,
							h : 56,
							preload_prefix_size : 97,
							video_start_ts : 848493.3896484375,
							video_codec : 'RIKF0SwXQVa4EC2H',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 17,
							title : 'EHwDeGQkraoJlitf',
							performer : 'qXzB63MIAVTZPapw',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'gPV4tWcsk3aD2COz',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'rlcBGZDTiFf17tSP',
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
				installed_date : 44,
				id : 2144768179007749012,
				access_hash : -8736046569496331605,
				title : 'KRu5IWQZqOeYTH28',
				short_name : '43i20zsqrAMF1oZx',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'bgEoXv4fd8RH3AeZ',
					),
					$client->photoSize(
						type : 'ESNrKZxLhACfjtVv',
						w : 15,
						h : 26,
						size : 40,
					),
					$client->photoCachedSize(
						type : '5lwUWYqSdtBfNa8T',
						w : 38,
						h : 89,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'QO20YTD6UuhKsjHm',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'tEOUVHTCSBzcI98i',
						w : 50,
						h : 23,
						sizes : array(29),
					),
					$client->photoPathSize(
						type : 'Ecd6pvSByHfNzhI9',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 30,
				thumb_version : 93,
				thumb_document_id : 981451202768902231,
				count : 51,
				hash : 0,
			),
		),
	),
);
```