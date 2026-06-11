# messages.stickerSetInstallResultArchive

**Description** : *The stickerset was installed, but since there are too many stickersets some were archived*

**Layer** : 227

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
				installed_date : 92,
				id : 75154047576166172,
				access_hash : 5605273471356677400,
				title : 'vwiVYQGE2jKaOZFU',
				short_name : 'rb1BXaSLneRFDUoz',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'vBXibAWwLNlJPeKI',
					),
					$client->photoSize(
						type : '2Dfr3dcjLAYNPxEa',
						w : 71,
						h : 70,
						size : 23,
					),
					$client->photoCachedSize(
						type : 'NldpwZ7YOtjUrqKJ',
						w : 81,
						h : 44,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'KE56l0eAzwSDr8oV',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'wY3ZUCoFG5IVMzQ4',
						w : 24,
						h : 86,
						sizes : array(0),
					),
					$client->photoPathSize(
						type : 'jZDilQJ89COAVoes',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 32,
				thumb_version : 4,
				thumb_document_id : -7527601246790504891,
				count : 99,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 745102591110171567,
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
				installed_date : 53,
				id : 7063989192218135624,
				access_hash : -7934121503908325461,
				title : 'm3hsl7DtZEqVKbNO',
				short_name : 'D6RaArPiT1bol5Bh',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '2bcaBGNTt3z65Qyk',
					),
					$client->photoSize(
						type : '73q0prLtgX8MRjEh',
						w : 64,
						h : 61,
						size : 86,
					),
					$client->photoCachedSize(
						type : 'lJ0SvRCwO6cV5Y9E',
						w : 26,
						h : 30,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'MZQFdpjB73vHb5ET',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'uIytJFhLg6NxoVlS',
						w : 31,
						h : 42,
						sizes : array(44),
					),
					$client->photoPathSize(
						type : 'cdLqofVnhWtXDCSE',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 100,
				thumb_version : 79,
				thumb_document_id : 8505413693564986558,
				count : 69,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 1796290424706737896,
				),
				$client->document(
					id : 1926888527526585880,
					access_hash : -8909904729684968871,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 95,
					mime_type : 'OU8EazhmCR6PTQed',
					size : 7460680743199442596,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'O3gSJVYioI608fxs',
						),
						$client->photoSize(
							type : 'G49LhcPVxBXNSyoZ',
							w : 9,
							h : 79,
							size : 3,
						),
						$client->photoCachedSize(
							type : 'wd6Bh1FESLUGT7tW',
							w : 84,
							h : 53,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'n7ybx6UjRdkvEQqV',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'N2uxvTl3DmUKMoYJ',
							w : 84,
							h : 11,
							sizes : array(63),
						),
						$client->photoPathSize(
							type : '2yAslwajbved1ioZ',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'obIANikwF6v30L8Q',
							w : 42,
							h : 3,
							size : 34,
							video_start_ts : 1043176.138671875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 2037617195428837614,
							background_colors : array(68),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 8107690897110568239,
							background_colors : array(82),
						),
					),
					dc_id : 97,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 86,
							h : 48,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'J9FMrLYjthPCK4Qx',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -893321.4033203125,
							w : 43,
							h : 6,
							preload_prefix_size : 59,
							video_start_ts : 787926.3369140625,
							video_codec : 'GlEVzPxs4mjIqLew',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 51,
							title : 'i2jMLI9VTOem3S5E',
							performer : 'oM7BlO42awQvPF0R',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'KYXn9Qjl7r1thuzv',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'PNuMnl7jR9Oe4KcL',
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
				installed_date : 36,
				id : 893228280523525075,
				access_hash : -3741822113954654855,
				title : 'zlsV3uI1vRHnJho2',
				short_name : 'zxET598KdPw7y6iW',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'tsnYpRIaf9iV4PMD',
					),
					$client->photoSize(
						type : 'FL4Pkinu0wxKe3fS',
						w : 42,
						h : 72,
						size : 50,
					),
					$client->photoCachedSize(
						type : 'MPeKWQiXFO6kjUcx',
						w : 95,
						h : 51,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'fUcJ624joFlB10h9',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'hcpegtPsX2axbvTK',
						w : 1,
						h : 64,
						sizes : array(10),
					),
					$client->photoPathSize(
						type : 'kvBb3M4VfERXywJs',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 57,
				thumb_version : 93,
				thumb_document_id : 2255397697313760716,
				count : 17,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : '45SFOyK1owDYU27c',
					documents : array(-6125361966505231766),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -1987216368831546731,
					keyword : array('QUkcl2HRfAWsxOyC'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 488593653775702833,
				),
				$client->document(
					id : -6175883521250828885,
					access_hash : -7324621959029260949,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 89,
					mime_type : 'ey4LCP7Wd0m9uUDH',
					size : -6101629259917142903,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'DRy1iU4V2hQeISnA',
						),
						$client->photoSize(
							type : 'z6nBXLiK1rSVCDfm',
							w : 69,
							h : 96,
							size : 71,
						),
						$client->photoCachedSize(
							type : 'Aaukx6iZwDEKnhWm',
							w : 69,
							h : 5,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : '9nShljwKGsvAFVHI',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'hdTJ4iuZtyE91KR3',
							w : 36,
							h : 27,
							sizes : array(35),
						),
						$client->photoPathSize(
							type : 'ogitIAwfbMvPHxJY',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'BEgIMQvXD7kjy1x0',
							w : 51,
							h : 91,
							size : 3,
							video_start_ts : 1636717.48828125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -5525025974011822854,
							background_colors : array(67),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 8997252245363878449,
							background_colors : array(81),
						),
					),
					dc_id : 19,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 18,
							h : 27,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'wv6MbNsyfCokuG1z',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1566414.158203125,
							w : 80,
							h : 55,
							preload_prefix_size : 12,
							video_start_ts : 780207.978515625,
							video_codec : '5imZTWsukVE4X1QY',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 87,
							title : 'QVAKHqrC1pseitwv',
							performer : '5DHwXYn9C6yRaFBQ',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'AZPc95g3wbu7SV8r',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'WcMPReS6zaGKE1H8',
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
				installed_date : 29,
				id : -4275093703961149304,
				access_hash : -3185008491773756090,
				title : 'NagYMG5kdDbW7i6K',
				short_name : 'Z9O4NbrlRScPVnxT',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '0wfiWnkRELOmo5Hu',
					),
					$client->photoSize(
						type : 'dKDFxv0NUmHrRBoc',
						w : 14,
						h : 39,
						size : 15,
					),
					$client->photoCachedSize(
						type : '9o8agYW3KG5inpuf',
						w : 53,
						h : 73,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'ycP2RjtYsE16Sglb',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'h87GJEbfl0P6T9KW',
						w : 57,
						h : 45,
						sizes : array(95),
					),
					$client->photoPathSize(
						type : 'LaV9IQSNEGnmxOpy',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 30,
				thumb_version : 24,
				thumb_document_id : 301720789036416334,
				count : 14,
				hash : 0,
			),
		),
	),
);
```