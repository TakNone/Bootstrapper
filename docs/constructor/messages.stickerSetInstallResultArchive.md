# messages.stickerSetInstallResultArchive

**Description** : *The stickerset was installed, but since there are too many stickersets some were archived*

**Layer** : 233

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
				installed_date : 72,
				id : 691561864801652154,
				access_hash : -8204873791297849008,
				title : '4m6TbOsLcvuoxSNa',
				short_name : 'Nt7WsOxEvqw8GhpL',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'zIdAvbjeW8lED60M',
					),
					$client->photoSize(
						type : 'VZ8lHJaQSztkTAIC',
						w : 23,
						h : 26,
						size : 72,
					),
					$client->photoCachedSize(
						type : 'BFv01xKZ8bDkQTU5',
						w : 97,
						h : 20,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'z2iafdj0crReSDm7',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'zqX16yVkbtnscum9',
						w : 73,
						h : 94,
						sizes : array(7),
					),
					$client->photoPathSize(
						type : '6N9DLsYlEU4h0fXe',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 34,
				thumb_version : 76,
				thumb_document_id : 4708233722637486875,
				count : 99,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -8591164317396529957,
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
				installed_date : 18,
				id : -1194864204206298325,
				access_hash : 6176716110651063374,
				title : 'a0jNyCUuMWBpkD23',
				short_name : 'wI51YbjL4hJAK2nD',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'h05p3gNoy1lqrc98',
					),
					$client->photoSize(
						type : 'Y9sVDCTyXeka7Ltm',
						w : 74,
						h : 56,
						size : 91,
					),
					$client->photoCachedSize(
						type : 'Kp0NCjuoHV2TXDGm',
						w : 47,
						h : 7,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'VZ9R41aWe0lvOriU',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'StkR4TnjZpCLa5wI',
						w : 47,
						h : 27,
						sizes : array(64),
					),
					$client->photoPathSize(
						type : '9g2wZPUr3JilDhIF',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 58,
				thumb_version : 18,
				thumb_document_id : 6693833699564525650,
				count : 70,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -2765739464436256248,
				),
				$client->document(
					id : 8000140221781684946,
					access_hash : 7862480771507244505,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 75,
					mime_type : 'k2DSWAphN03rQGRx',
					size : 3667445276053732630,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'xWS2IZHig3CfJG9v',
						),
						$client->photoSize(
							type : '6Ln7rEutSopsAJR3',
							w : 14,
							h : 67,
							size : 54,
						),
						$client->photoCachedSize(
							type : 'sVdXCSFOWKhr5xey',
							w : 44,
							h : 81,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'TsB06M9iw5frIKq7',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'ZaJr4q97D8RnsXtj',
							w : 77,
							h : 61,
							sizes : array(23),
						),
						$client->photoPathSize(
							type : 'lLcquJpV5yhnFwXB',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'MBhq8kmnRwuoFDOx',
							w : 80,
							h : 51,
							size : 63,
							video_start_ts : 1886125.0947265625,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -464222893528585729,
							background_colors : array(20),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -4248261515303002615,
							background_colors : array(44),
						),
					),
					dc_id : 10,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 60,
							h : 52,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'JRWalKwCs46fVSnO',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1207154.3125,
							w : 79,
							h : 65,
							preload_prefix_size : 40,
							video_start_ts : 1873540.412109375,
							video_codec : 'Yq7a91ponAulZG60',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 9,
							title : 'hrzSyvEG4odsg6YT',
							performer : 'tDnzjpOr97IfaBNF',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'zlgjxwHpAShRbF4G',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'hMB5w4QLdsWD0i7p',
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
				installed_date : 95,
				id : -7912176350302251542,
				access_hash : -3209410133024174886,
				title : 'TSUbH9z3Ncer6Jxu',
				short_name : 'cobx3pkNVa1JwHAm',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'MI6lJz9gBcmfLv1P',
					),
					$client->photoSize(
						type : 'IhGaZWebYsHBtpO5',
						w : 30,
						h : 10,
						size : 33,
					),
					$client->photoCachedSize(
						type : 'eLPkxiBO7GU4nNlq',
						w : 57,
						h : 17,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'pORVY71BSwzA86Xk',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '2kqEP7TcJHueoxGf',
						w : 25,
						h : 15,
						sizes : array(88),
					),
					$client->photoPathSize(
						type : 'PxUq0rofQYEHuyin',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 10,
				thumb_version : 12,
				thumb_document_id : 6863251267056766926,
				count : 3,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'EeL4oZmt27PdFKuT',
					documents : array(1281881693227182029),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -4632393408904296651,
					keyword : array('gQJC8OnfdaZMsFXY'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -6516637032679097519,
				),
				$client->document(
					id : -1950183885113879700,
					access_hash : 6890856024582490540,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 89,
					mime_type : 'T4X1EkcKwAhnVSBF',
					size : -4267660960381925741,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'w4DmHkBC7E0yQZqd',
						),
						$client->photoSize(
							type : 'vgNj8I7WzhpwLoRZ',
							w : 81,
							h : 75,
							size : 16,
						),
						$client->photoCachedSize(
							type : 'yfg1z8t5qJiXR2Ec',
							w : 83,
							h : 72,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'sBtS4qZax2HG0CpW',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'JGzVa3PYHwibA4rI',
							w : 12,
							h : 48,
							sizes : array(90),
						),
						$client->photoPathSize(
							type : 'DXsxc7FYTPOSZzuB',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'DcierK6A8uP7SURy',
							w : 75,
							h : 65,
							size : 28,
							video_start_ts : -421946.015625,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 8784714241429945408,
							background_colors : array(81),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 1668885945450674525,
							background_colors : array(70),
						),
					),
					dc_id : 6,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 34,
							h : 49,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'lFHbriGW1XCqx9ph',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -960356.578125,
							w : 26,
							h : 70,
							preload_prefix_size : 78,
							video_start_ts : -1828246.71484375,
							video_codec : 'xqrQAT0zVuw9O6Gh',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 87,
							title : '2V8I69Soe1k4wHpO',
							performer : 'ZxtcgWAYdHCbIfQJ',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'NfSIzyWQ9XJ5UwH7',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'KnjXMLyG2TRB0sAJ',
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
				installed_date : 21,
				id : 7437445975602594465,
				access_hash : -1003387509999597087,
				title : 'UqzBbFGJI3tC2vfh',
				short_name : 'yNR9n51GuMXLKbks',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'My82dWIRgvSaVBiA',
					),
					$client->photoSize(
						type : 'KheR67TdF28y4L50',
						w : 52,
						h : 73,
						size : 45,
					),
					$client->photoCachedSize(
						type : '3sl2XZTzwPLy8aSt',
						w : 83,
						h : 35,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'QNaJC0jSpF2s4orL',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'lKXVUJ5B83AyW6qf',
						w : 29,
						h : 93,
						sizes : array(100),
					),
					$client->photoPathSize(
						type : 'fthSEDszZNBxCnJ7',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 96,
				thumb_version : 82,
				thumb_document_id : 1137239502298763315,
				count : 61,
				hash : 0,
			),
		),
	),
);
```