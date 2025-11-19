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
				installed_date : 69,
				id : -8934973422035977186,
				access_hash : 8073339361965303444,
				title : 'qtw0fPhmYpbJvuId',
				short_name : '5aqOZ6ztVNn0vRIe',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'SeynwojXuq5WTZFD',
					),
					$client->photoSize(
						type : '8k9gtZ7DrVC0Jwoi',
						w : 3,
						h : 63,
						size : 27,
					),
					$client->photoCachedSize(
						type : 'SJOmQ2bWDAFc6M7T',
						w : 29,
						h : 95,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'rWNfHg6cLaTl7Zhj',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'jS75AdH3TRCFlxhN',
						w : 98,
						h : 75,
						sizes : array(68),
					),
					$client->photoPathSize(
						type : 'iz2uhekEXL3QGdYs',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 16,
				thumb_version : 71,
				thumb_document_id : -8436316582847568491,
				count : 38,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -8902895875264494961,
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
				installed_date : 40,
				id : 686715432344231955,
				access_hash : 6703480074162506837,
				title : 'NuQLI2dif1mSToEZ',
				short_name : 'cCT1KbF7Wgq48EJo',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'NgzXlvPMix1W9Ktp',
					),
					$client->photoSize(
						type : 'oeU4RsKzCBaIwbNL',
						w : 54,
						h : 56,
						size : 92,
					),
					$client->photoCachedSize(
						type : '2jHNIh4yLA7vu05c',
						w : 71,
						h : 12,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'yoJWxH6Upr1uM0En',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'EfmYGp7kTzPScUew',
						w : 67,
						h : 0,
						sizes : array(54),
					),
					$client->photoPathSize(
						type : 'xYDz5k6PfpFnCjX2',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 22,
				thumb_version : 9,
				thumb_document_id : 5644167905456330889,
				count : 47,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 8462463171455011272,
				),
				$client->document(
					id : -4656399441400800262,
					access_hash : -7617989167746291252,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 18,
					mime_type : 'bAEluoXice0Z5YSn',
					size : 6758080039330389642,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'IRM8oxzgSiGtYPfV',
						),
						$client->photoSize(
							type : '976nTyaYb2iwrRzj',
							w : 33,
							h : 78,
							size : 74,
						),
						$client->photoCachedSize(
							type : '4loEgfIw0DPmZy7c',
							w : 25,
							h : 88,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'MI2J1lmnL4vhgF9u',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'pCA3qgfJYWuR57GO',
							w : 47,
							h : 48,
							sizes : array(18),
						),
						$client->photoPathSize(
							type : 'JvhZcA4MIdS2k63j',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'R5PnyJTlzuXB3t8j',
							w : 22,
							h : 10,
							size : 96,
							video_start_ts : 1410044.8798828125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -2069513786282614762,
							background_colors : array(47),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -377877689234091414,
							background_colors : array(6),
						),
					),
					dc_id : 2,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 56,
							h : 19,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'zNwTs6vmgxkWAqlr',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 965373.89453125,
							w : 82,
							h : 2,
							preload_prefix_size : 73,
							video_start_ts : -1637040.169921875,
							video_codec : '5GUePbC8vmNoIrwy',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 77,
							title : 'hPtuw5KniCI8O9dX',
							performer : 'BemsSDjaNrIRZiAH',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'guyzm3jdYeK7vAPl',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'fLwHUtKrA73q58RY',
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
				installed_date : 4,
				id : -4521714045940902700,
				access_hash : 4365683659426662658,
				title : 'qnbY9Z3HEfAjKodL',
				short_name : 'AIS8kzM7H9x0RZaf',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'svXc6lVdCuPb0Si2',
					),
					$client->photoSize(
						type : 'UapiEJgTNrzxb462',
						w : 67,
						h : 88,
						size : 31,
					),
					$client->photoCachedSize(
						type : 'Jsd38cNB9oOw5D1T',
						w : 26,
						h : 28,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'OEhe18kQmzyWfPT5',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '4pQHCEDind9MPB0o',
						w : 39,
						h : 81,
						sizes : array(21),
					),
					$client->photoPathSize(
						type : '7F5bovSk1q0mRPxp',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 63,
				thumb_version : 3,
				thumb_document_id : 5834403936455607113,
				count : 79,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'bFrRc3kUs59jh1fK',
					documents : array(8202895644419485758),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -6520952363205870149,
					keyword : array('WhqPAFztKm4Ciyp3'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -2993282678121813755,
				),
				$client->document(
					id : 7325866026510024025,
					access_hash : -9176855110633457194,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 59,
					mime_type : 'z2lSwdcenkfFbgsy',
					size : 2174960622045698240,
					thumbs : array(
						$client->photoSizeEmpty(
							type : '8fgsI36PHSJyAzjM',
						),
						$client->photoSize(
							type : 'Y0Fc5qi9HGN6wRz1',
							w : 36,
							h : 61,
							size : 30,
						),
						$client->photoCachedSize(
							type : 'rd6YvEnUTbHDe5R0',
							w : 15,
							h : 97,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : '7D6NoZ2wlQGzIjcP',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'SvwQZ0C52MkTKsJX',
							w : 5,
							h : 14,
							sizes : array(90),
						),
						$client->photoPathSize(
							type : 'FWRuJVN3tYmrgTp5',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'pdvsztxAYPgiFnWR',
							w : 44,
							h : 90,
							size : 88,
							video_start_ts : -1776528.7802734375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 2947896678191722295,
							background_colors : array(6),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -4690683340633994834,
							background_colors : array(82),
						),
					),
					dc_id : 52,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 11,
							h : 12,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : '41EkjwyXla7IAC6h',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1708703.1513671875,
							w : 97,
							h : 64,
							preload_prefix_size : 96,
							video_start_ts : 148290.1533203125,
							video_codec : 'ezrsV4IAbu1EHhT3',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 46,
							title : '29HNTopdGw46QkjW',
							performer : '7OIeV5XZJ9UNCfWb',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'VTQyv5GsExKWbBCU',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'EwmW2AYBviV3cUht',
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
				installed_date : 57,
				id : -8564872315312929749,
				access_hash : -1972476548197737187,
				title : 'I7xr91QUMdSw6p0n',
				short_name : '3HI7QgAR1noW5sJV',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'FeiYnrwzLt8BOgvX',
					),
					$client->photoSize(
						type : 'cYICWe3RjbnBFPzZ',
						w : 39,
						h : 9,
						size : 53,
					),
					$client->photoCachedSize(
						type : 'LGX0noDlqSfOw5cQ',
						w : 67,
						h : 84,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '0PVWby9auX4vFI2i',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'hNkwIJlz4TOsEKUV',
						w : 32,
						h : 24,
						sizes : array(27),
					),
					$client->photoPathSize(
						type : '6UGtl9bViXepyM1q',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 95,
				thumb_version : 63,
				thumb_document_id : 7114437611590906636,
				count : 97,
				hash : 0,
			),
		),
	),
);
```