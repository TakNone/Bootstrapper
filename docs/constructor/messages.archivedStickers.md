# messages.archivedStickers

**Description** : *Archived stickersets*

**Layer** : 218

```tl
messages.archivedStickers#4fcba9c8 count:int sets:Vector<StickerSetCovered> = messages.ArchivedStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Number of archived stickers |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Archived stickersets |

---

## Type

[messages.ArchivedStickers](type/messages.ArchivedStickers)

---

## Example

```php
$messagesArchivedStickers = $client->messages->archivedStickers(
	count : 37,
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
				installed_date : 8,
				id : 5935590472405350865,
				access_hash : 7466333256520972878,
				title : 'XaJupmQD0CB8Hqxk',
				short_name : 'usG2i0d7YaDcABlL',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'vXU6YbcPAjCgN9Rz',
					),
					$client->photoSize(
						type : 'puwLn1a8H6SAlM9h',
						w : 83,
						h : 3,
						size : 48,
					),
					$client->photoCachedSize(
						type : 'kjw76Yp9ctMrfEOh',
						w : 45,
						h : 68,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'q5lSaoTBj2R3ysYH',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'bz5fK6JnqoxdeR0p',
						w : 70,
						h : 4,
						sizes : array(65),
					),
					$client->photoPathSize(
						type : 'h6HiTzg7PI8bCKSd',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 30,
				thumb_version : 70,
				thumb_document_id : -9022846307299474529,
				count : 74,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 7756051827774875027,
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
				installed_date : 23,
				id : 8635038458502691879,
				access_hash : 3584480641127476874,
				title : 'Yx9aHTcfjqhr5tgk',
				short_name : 'KwSdpXiCB2bya5RQ',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '2JoiKqIZ5fWm1tdD',
					),
					$client->photoSize(
						type : '2HE3lqTGYw5JsLAC',
						w : 49,
						h : 58,
						size : 90,
					),
					$client->photoCachedSize(
						type : 'f5loJKsUyV6ikaE1',
						w : 91,
						h : 68,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'xEoKf8etdaBiOGrm',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'ZJOyuEsTtxKm3vFM',
						w : 59,
						h : 84,
						sizes : array(95),
					),
					$client->photoPathSize(
						type : '3aAipqfzGjQv0YIc',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 15,
				thumb_version : 15,
				thumb_document_id : -8858597843314695068,
				count : 74,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -6670808156568923215,
				),
				$client->document(
					id : 4956090135031471731,
					access_hash : 5040990495487861492,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 94,
					mime_type : '0r8ijxmpfOsVHuwU',
					size : 4553049626993775843,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'pv8Z9jfkJRhcO5UA',
						),
						$client->photoSize(
							type : 'ohiVbS1xUqcTsZLF',
							w : 62,
							h : 65,
							size : 69,
						),
						$client->photoCachedSize(
							type : 't51xl8KnRTzbwOLU',
							w : 83,
							h : 35,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'iIJdVryw3YSAWMBT',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'PAqQh1irofbypLuj',
							w : 42,
							h : 80,
							sizes : array(63),
						),
						$client->photoPathSize(
							type : 'N5R3F026MfJwVXts',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 't8GZEryqWkzVjmMl',
							w : 6,
							h : 63,
							size : 30,
							video_start_ts : 1147937.171875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -8445809199677041215,
							background_colors : array(33),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 5361989409093854098,
							background_colors : array(24),
						),
					),
					dc_id : 7,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 85,
							h : 69,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'eGMmopZP8kN7DrqV',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1685987.568359375,
							w : 27,
							h : 90,
							preload_prefix_size : 29,
							video_start_ts : 1688870.19921875,
							video_codec : 'zOd9G6XipCn1AswZ',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 55,
							title : 'O0uKJI3H6qtZXr9S',
							performer : 'hpre2L9P0EmfqoKD',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'LnvqAVIlg19zRXQ6',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'ZrPkYS4jXG7qnxle',
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
				installed_date : 68,
				id : 650329095098453902,
				access_hash : -325816185444410352,
				title : 'uqKCpio3YcUSW8ZF',
				short_name : 'A9IpOF8rQlfqSyi2',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'chTaGEziO7tonwHq',
					),
					$client->photoSize(
						type : '425exKjCQ6OkmJlV',
						w : 69,
						h : 42,
						size : 38,
					),
					$client->photoCachedSize(
						type : 'wDkxXQdgKYMRa8fS',
						w : 52,
						h : 14,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'BqT91LAhdSWMEUzi',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'AoDudGvJLljrxCgV',
						w : 15,
						h : 16,
						sizes : array(15),
					),
					$client->photoPathSize(
						type : 'pQx5JRl83NFWA62Z',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 37,
				thumb_version : 41,
				thumb_document_id : 7866272440503122658,
				count : 25,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'IqzuDJ1fmc9L2rsP',
					documents : array(-3803134993279851667),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 2709441971889418495,
					keyword : array('6TsXL3BSbuUlfDzG'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 5790575921681594648,
				),
				$client->document(
					id : -1521698452414550566,
					access_hash : -2320521933183015914,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 74,
					mime_type : 'axELRoUvwrYG6BFk',
					size : -6309217339474315155,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'jG2wkRIt5vLznJ8E',
						),
						$client->photoSize(
							type : 'jCbiAGduMyJ928kK',
							w : 43,
							h : 68,
							size : 43,
						),
						$client->photoCachedSize(
							type : 'UlS6zkvbeoOi5FEY',
							w : 66,
							h : 19,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'hPcqDQT1Wb0vHYMN',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '1VDCYSwiyNuU5jIb',
							w : 77,
							h : 70,
							sizes : array(71),
						),
						$client->photoPathSize(
							type : 'pWvVc8k1C3u9HGls',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : '0sDPLTqp8dkOw3oS',
							w : 93,
							h : 87,
							size : 77,
							video_start_ts : -977199.748046875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -6182591392295572792,
							background_colors : array(15),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 3020916688281598017,
							background_colors : array(12),
						),
					),
					dc_id : 41,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 100,
							h : 69,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'SyR7bqWgQ3uzM6cw',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -562094.115234375,
							w : 33,
							h : 28,
							preload_prefix_size : 93,
							video_start_ts : -277987.2255859375,
							video_codec : 'EfhCeURlFnkSIrij',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 24,
							title : 'HpRb9ml8uitUyJOF',
							performer : 'Iwg6R98yxkleojpK',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'eAM0ELpNwRsdDalX',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'ADbg0BaEjdlVxUhc',
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
				installed_date : 9,
				id : 2313631658594998109,
				access_hash : 316053763646748014,
				title : 'Y648clAz2uGEw3rk',
				short_name : 'hd8rtMUn7ROpqzC6',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'iq6j0OSFd7Z3UGgJ',
					),
					$client->photoSize(
						type : 'z3DRCn2QoJu9qdsg',
						w : 81,
						h : 28,
						size : 93,
					),
					$client->photoCachedSize(
						type : 'Wg9wJ6eFRtPQ7luk',
						w : 70,
						h : 88,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'sXrPSa9xqDdIwGL8',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'gxwkVrK8eEN7hF1I',
						w : 21,
						h : 10,
						sizes : array(87),
					),
					$client->photoPathSize(
						type : 'k0zprcnIBjONiyou',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 25,
				thumb_version : 44,
				thumb_document_id : 5865459065386136513,
				count : 95,
				hash : 0,
			),
		),
	),
);
```