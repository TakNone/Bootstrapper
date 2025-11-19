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
				installed_date : 21,
				id : -6648701485655072761,
				access_hash : -7160033557595918162,
				title : 'KcA4jantb6fZDNpw',
				short_name : 'SGw6fO4qWEny3TrJ',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'jrWNUxbmMudAnc8k',
					),
					$client->photoSize(
						type : '1v9bTVtWF3CyfzZ8',
						w : 69,
						h : 51,
						size : 97,
					),
					$client->photoCachedSize(
						type : 'cnvZXVW4kR7j1szu',
						w : 76,
						h : 10,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'CMqrD0Q9ulNRezhZ',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'd2IQmYTZyqxnr1Bp',
						w : 86,
						h : 1,
						sizes : array(42),
					),
					$client->photoPathSize(
						type : 'YJrFmapV3ztDPjvA',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 2,
				thumb_version : 79,
				thumb_document_id : 8132203016931368468,
				count : 76,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 257558473325872150,
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
				id : 3985943120021683038,
				access_hash : 5024493363351117498,
				title : 'DeKC8Stvxgnl1OYp',
				short_name : 'NukdU9RKAwTrBo68',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'YKJ6amsOEgh34UW1',
					),
					$client->photoSize(
						type : 'hga7d1HQuAMeL6pi',
						w : 20,
						h : 90,
						size : 82,
					),
					$client->photoCachedSize(
						type : '9pN6LPWvkUKj3sl0',
						w : 72,
						h : 83,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'f5tdHmsvelkI69Nw',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'I7zsCtYJaTMQSwvV',
						w : 15,
						h : 6,
						sizes : array(46),
					),
					$client->photoPathSize(
						type : 'UdZitMn02LFQKPCO',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 70,
				thumb_version : 6,
				thumb_document_id : 2309602444299865017,
				count : 72,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 778860636055097104,
				),
				$client->document(
					id : 2135265902505740963,
					access_hash : -7521884878476670766,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 7,
					mime_type : '7rHZqISpcyWXuiL3',
					size : 7963066888517865206,
					thumbs : array(
						$client->photoSizeEmpty(
							type : '5RO6NDThtYKpbu2a',
						),
						$client->photoSize(
							type : 'B25VDUw1JipteTv7',
							w : 61,
							h : 99,
							size : 48,
						),
						$client->photoCachedSize(
							type : 'PmEg9HMC3JhBpfNG',
							w : 95,
							h : 35,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : '1izDJ7rPs4hauEnF',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '6WVdNBYxOF08hMKl',
							w : 10,
							h : 31,
							sizes : array(77),
						),
						$client->photoPathSize(
							type : '9ugza8JniDrQHXh0',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'zhCYbK1p7VOgEd4n',
							w : 81,
							h : 68,
							size : 82,
							video_start_ts : -1318700.5869140625,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -7827476111084593841,
							background_colors : array(58),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -5772476682785085355,
							background_colors : array(33),
						),
					),
					dc_id : 90,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 83,
							h : 85,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'mT9clxrAi3SjzPNY',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1261362.9541015625,
							w : 95,
							h : 20,
							preload_prefix_size : 18,
							video_start_ts : -998795.783203125,
							video_codec : 'lK19UA54dTQEswGz',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 26,
							title : 'LcxzCsnRdV7AUfSM',
							performer : 'Yik2F6SQ7slMjrLp',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'Bu6aA7yxeLFfpRUX',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '7g8cLA6jIJQ4Xfzw',
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
				installed_date : 23,
				id : -1096299707091779950,
				access_hash : -7819309960837334658,
				title : 'fwE3BobIeiuxDaX4',
				short_name : 'CHw6nuXYmQP1MJGi',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'vjgkSIru49UzTOiA',
					),
					$client->photoSize(
						type : '9NSEQOk2TrW3Xo8U',
						w : 17,
						h : 93,
						size : 19,
					),
					$client->photoCachedSize(
						type : 'IkgWUXKqiJTo035P',
						w : 17,
						h : 73,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'acKXdoS7DtB90fkz',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'dqm4s8CzwKOghRSY',
						w : 89,
						h : 73,
						sizes : array(29),
					),
					$client->photoPathSize(
						type : '0HnZoIzxy3t9ATfw',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 55,
				thumb_version : 90,
				thumb_document_id : 4201106880468592654,
				count : 65,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'mda7kx3hApUwo4sn',
					documents : array(-2333924711847827504),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -3958901054869168692,
					keyword : array('au7TVPgKyDAG1Cwx'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 4959893102109948593,
				),
				$client->document(
					id : 4670771971378505705,
					access_hash : 5398980659656317905,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 53,
					mime_type : 'SFwpnVQ61mkMr4fO',
					size : 2541529344896047447,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'IeZMUAJSw6CL7QPD',
						),
						$client->photoSize(
							type : 'CvEhJGXLo4O5T6Pm',
							w : 89,
							h : 86,
							size : 43,
						),
						$client->photoCachedSize(
							type : 'yT0OiefXgSwz3IsP',
							w : 65,
							h : 59,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'G9RsuwMtJ0aFCdDo',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'Bgq7iPAdrSG5RJwl',
							w : 27,
							h : 24,
							sizes : array(82),
						),
						$client->photoPathSize(
							type : 's6d0TIayuzt5cwX7',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'rKalJSoB1fb9qdyR',
							w : 55,
							h : 78,
							size : 98,
							video_start_ts : -874043.802734375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -6285623231516981974,
							background_colors : array(61),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 3917399484810288510,
							background_colors : array(80),
						),
					),
					dc_id : 24,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 0,
							h : 6,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'PEJ53VluFmI4Tdko',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 715763.2412109375,
							w : 35,
							h : 62,
							preload_prefix_size : 17,
							video_start_ts : -707114.4150390625,
							video_codec : 'JtzNyKUXlQ2jaC3w',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 83,
							title : 'nGY5AawFJIzpEolZ',
							performer : 'HaK4jBYvm26iEDbw',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'GozwpF6A5qZyTNRY',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'VuR9zqbQWxHgd8tv',
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
				installed_date : 91,
				id : 6199174369790780913,
				access_hash : -6759010830995089539,
				title : '2sAuB16ryqDNPRL7',
				short_name : 'zmHRnrK3aQjSeqNE',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'Aym3WLzBPxTgF1VX',
					),
					$client->photoSize(
						type : 'ikN2amrB0FzRnhuV',
						w : 67,
						h : 83,
						size : 30,
					),
					$client->photoCachedSize(
						type : 'L7OI9RBAFpiadZVD',
						w : 54,
						h : 74,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '6c9PGXmEpYbOKC2U',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'rd5I8fxoqwNR4gWv',
						w : 92,
						h : 55,
						sizes : array(56),
					),
					$client->photoPathSize(
						type : 'I0XzT24dPFxtV8fl',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 14,
				thumb_version : 79,
				thumb_document_id : 8298628962592501753,
				count : 91,
				hash : 0,
			),
		),
	),
);
```