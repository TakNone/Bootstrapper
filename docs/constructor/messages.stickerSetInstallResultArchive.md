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
				installed_date : 84,
				id : 7774156838261123565,
				access_hash : 4771396245281276379,
				title : 'Fuozy8eZ4WOvkhf6',
				short_name : 'CstrFnT1XUYu4B7O',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'jFpdsETb6glOzSKZ',
					),
					$client->photoSize(
						type : 'OVisAUhD1CHQlBpL',
						w : 92,
						h : 18,
						size : 68,
					),
					$client->photoCachedSize(
						type : 'qm8C4DXx6U2Tec0j',
						w : 88,
						h : 82,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '5DhVg04mRMw6BKfy',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'LuVKra7vF5OXJwcY',
						w : 95,
						h : 1,
						sizes : array(27),
					),
					$client->photoPathSize(
						type : 'gnsRhfIL6q82clMt',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 39,
				thumb_version : 47,
				thumb_document_id : 4448488712441642694,
				count : 64,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -8506055480656317121,
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
				installed_date : 22,
				id : -8949464093795608194,
				access_hash : 1262723891227997961,
				title : 'UjJiebDvRgFpQEZm',
				short_name : 'SDrPymAg6zWdeuNL',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'gwYnyD9vKj3cUJLt',
					),
					$client->photoSize(
						type : 'ecCu0vnjXOiQkbSg',
						w : 1,
						h : 58,
						size : 26,
					),
					$client->photoCachedSize(
						type : 'Zq6uFjstg2pODwYE',
						w : 37,
						h : 76,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'lQU3B6Dhnimx4fgO',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'XiEI792NHrR6z0Gy',
						w : 98,
						h : 76,
						sizes : array(53),
					),
					$client->photoPathSize(
						type : 'aqrovxWNYTQ3mC84',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 68,
				thumb_version : 55,
				thumb_document_id : 4991271987625444131,
				count : 100,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -4163147685886003104,
				),
				$client->document(
					id : -3049288777143431257,
					access_hash : 4187765295660884377,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 0,
					mime_type : 'INcn3kW6YHLXDUoQ',
					size : 8676950898933100180,
					thumbs : array(
						$client->photoSizeEmpty(
							type : '0vTfg5erjs1u43tm',
						),
						$client->photoSize(
							type : 'tsa1mNeTgo79K4wF',
							w : 67,
							h : 63,
							size : 62,
						),
						$client->photoCachedSize(
							type : 'ch8VnG9OXbIvRzEf',
							w : 14,
							h : 12,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'UoHyW6OqcvJxPt0D',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'ae2RlPo9MG8fYbXu',
							w : 67,
							h : 2,
							sizes : array(37),
						),
						$client->photoPathSize(
							type : '0qZckzGXtsxuorpj',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'bzD4yTCYrmQkiMsW',
							w : 78,
							h : 63,
							size : 69,
							video_start_ts : 494874.9580078125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -8453267701860157952,
							background_colors : array(60),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -4257884797103721685,
							background_colors : array(10),
						),
					),
					dc_id : 36,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 17,
							h : 87,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : '2E8JSxuf0gvUzWwL',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 576757.7900390625,
							w : 86,
							h : 92,
							preload_prefix_size : 51,
							video_start_ts : -770443.28125,
							video_codec : 'XDHw42SEOCY51P6K',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 20,
							title : 'PTqoA2tMzsKp0XN3',
							performer : 'oQW7lxDeuhI4kPiv',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'quah9xt5i2G0CfX4',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'I1MTrxPXNazYD5mj',
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
				installed_date : 30,
				id : 8915112920568316201,
				access_hash : 5079970002465841573,
				title : 'gJWoRE2HMpmi8YxS',
				short_name : 'ixNbOu2cmHkPXvad',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '3YkRaefQMq6yFWA2',
					),
					$client->photoSize(
						type : 'V43d0f71DwkaPejY',
						w : 99,
						h : 36,
						size : 75,
					),
					$client->photoCachedSize(
						type : 'TZOlX2RKvgou61mc',
						w : 14,
						h : 58,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'p7FEOPRZwdKVn2LH',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'DXiuVAEY1zpvKeyd',
						w : 80,
						h : 59,
						sizes : array(76),
					),
					$client->photoPathSize(
						type : 'NgSlyQxmouV6HsT2',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 17,
				thumb_version : 47,
				thumb_document_id : 7854851531978419513,
				count : 82,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'cnEjkda7MzQhXZP2',
					documents : array(7701904578262233204),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 8050557646220420231,
					keyword : array('sMtzSFeIckplq2bu'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 7280629447801762037,
				),
				$client->document(
					id : -5068227034992327640,
					access_hash : -4554158215917388058,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 100,
					mime_type : 'RMfOuidvryp3K29Z',
					size : 5179385218991396846,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'xWNs5RcVOywCqnAe',
						),
						$client->photoSize(
							type : '1RawWSVy2GzOqAsH',
							w : 55,
							h : 15,
							size : 49,
						),
						$client->photoCachedSize(
							type : 'b9idQvR2gaI5Nw3c',
							w : 51,
							h : 29,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'CwHIkn2sbQfGEUeK',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'AvQk8doJbOup3sPi',
							w : 64,
							h : 18,
							sizes : array(28),
						),
						$client->photoPathSize(
							type : 'tX7JIcrFUZQTa4l5',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'd9QP2j13BRMNiXWc',
							w : 91,
							h : 84,
							size : 67,
							video_start_ts : 1733043.9140625,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 2444250943861052825,
							background_colors : array(83),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -4550863543639676883,
							background_colors : array(26),
						),
					),
					dc_id : 88,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 43,
							h : 68,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'OcF47dUXJerM2Pz5',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 406201.9931640625,
							w : 50,
							h : 2,
							preload_prefix_size : 66,
							video_start_ts : 1755123.4140625,
							video_codec : 'sLQ6vJwUfjIdaO1q',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 97,
							title : 'xkAPF5pyRSGJ3qhm',
							performer : 'WgThLrFR3EjYm5In',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'ui5mOngCfj0t83bw',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'nF647dV8lHcA1opu',
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
				installed_date : 1,
				id : -6036228425722692276,
				access_hash : 6043886791443723214,
				title : 'WEBPVKkJ78UThauS',
				short_name : 'GFxeWVXCSRuHN3PT',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'UcMm9K1agYdjISRn',
					),
					$client->photoSize(
						type : 'fH08Zz93kyMFogdl',
						w : 49,
						h : 0,
						size : 72,
					),
					$client->photoCachedSize(
						type : 'HnvoghUOLFxwSmA8',
						w : 21,
						h : 82,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'RFCLu1BEMoW0Km93',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'lm1TALD2otezRxE6',
						w : 80,
						h : 45,
						sizes : array(16),
					),
					$client->photoPathSize(
						type : 'HG6BTwUkdQmqFZVW',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 18,
				thumb_version : 3,
				thumb_document_id : -5391713855170682363,
				count : 94,
				hash : 0,
			),
		),
	),
);
```