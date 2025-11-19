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
	count : 47,
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
				installed_date : 28,
				id : 2638174088575185778,
				access_hash : -6452427837259442792,
				title : 'y5ojNnzsrPDuW3U8',
				short_name : '3S8prJvRtFahzy6f',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'Gx1vIAOSk8RXj4Kc',
					),
					$client->photoSize(
						type : 'KPIudNihyGB1Vj5F',
						w : 22,
						h : 8,
						size : 98,
					),
					$client->photoCachedSize(
						type : 'TdHmxFPh2kE7XD4V',
						w : 62,
						h : 21,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'VzLf6vN4p2Tr1uWw',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'AMFQVjhvG52aDlfk',
						w : 85,
						h : 90,
						sizes : array(32),
					),
					$client->photoPathSize(
						type : 'W5DMI4it0a6lSGHs',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 86,
				thumb_version : 86,
				thumb_document_id : 4000021383597954048,
				count : 98,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 7057001507779807453,
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
				id : -5716450537230423414,
				access_hash : -2115410959514659281,
				title : 'InyFv4s2CVdhcBKk',
				short_name : 'Zdg47EusiN65PHVF',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'lYQmpH698KGEWPhF',
					),
					$client->photoSize(
						type : 'FY307VdeGNPy5gID',
						w : 88,
						h : 33,
						size : 34,
					),
					$client->photoCachedSize(
						type : 'BqocJRlbEWPVMifU',
						w : 32,
						h : 91,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'DIc3ZSEepdXBKjl7',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'mb2y63G1nOST0pgw',
						w : 50,
						h : 94,
						sizes : array(15),
					),
					$client->photoPathSize(
						type : '8JStWcUz0Bh1ZXQ4',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 89,
				thumb_version : 57,
				thumb_document_id : -3625278439764723828,
				count : 75,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -7196057308723735602,
				),
				$client->document(
					id : -8396294103740121956,
					access_hash : 2704539317856533467,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 17,
					mime_type : 'cqyej6Yi8KTzoMdU',
					size : -2239442845378640189,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'BSwabZzMT9eDktXG',
						),
						$client->photoSize(
							type : '4kqv2orb1panuF8U',
							w : 68,
							h : 4,
							size : 30,
						),
						$client->photoCachedSize(
							type : '9awJBQPSiucdzDkH',
							w : 47,
							h : 80,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : '8nzWw5HOlEJdMi6u',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '2VSyHZCx4X1YgwGB',
							w : 26,
							h : 36,
							sizes : array(16),
						),
						$client->photoPathSize(
							type : 'zZ4esuri6Ftl9IyM',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'n6TPbDvGutScVyoN',
							w : 50,
							h : 19,
							size : 47,
							video_start_ts : -1537674.9248046875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 7462422984129091080,
							background_colors : array(43),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 8529964798392235267,
							background_colors : array(44),
						),
					),
					dc_id : 65,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 26,
							h : 93,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'Ifak8tB3ldDYU9hc',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -1764626.6748046875,
							w : 43,
							h : 47,
							preload_prefix_size : 75,
							video_start_ts : -1914333.626953125,
							video_codec : 'cSDOg3XxEsHiq6Gy',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 98,
							title : 'djbynzAS1houICsr',
							performer : 'ILbRUgvV8oslTqP6',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'GFa2AQdTXwK6rLof',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'CIth6luyOSKMUj4o',
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
				installed_date : 88,
				id : 5596420340020872696,
				access_hash : 2607317474861982537,
				title : 'IYtqpCf1o9uBOl0X',
				short_name : 'yLv36JZuW9xEFdAm',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'BvFLSQiXausf5yrc',
					),
					$client->photoSize(
						type : 'rq15jAFbOBt07YxZ',
						w : 62,
						h : 19,
						size : 100,
					),
					$client->photoCachedSize(
						type : 'O1Es9oLTnYMtPdzA',
						w : 51,
						h : 43,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'tk8iS7j9BVrmeU0p',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'QPpESFDBL5uICrM1',
						w : 77,
						h : 29,
						sizes : array(18),
					),
					$client->photoPathSize(
						type : 'rOIVDfXH2T9LQENS',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 25,
				thumb_version : 51,
				thumb_document_id : 8133934987879116040,
				count : 2,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'fQXKvHhby9URCTNF',
					documents : array(-3197876166539808144),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -538007975510849577,
					keyword : array('2MxGQXZBenVkgHJs'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 479191610673894356,
				),
				$client->document(
					id : -2018558206193455290,
					access_hash : -5536389834131427552,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 69,
					mime_type : 'WeyxnT73pfCR0Qv5',
					size : -514624770956765345,
					thumbs : array(
						$client->photoSizeEmpty(
							type : '4ARibfKzVklUusL9',
						),
						$client->photoSize(
							type : '4NnVLBGyHCfdTlp2',
							w : 14,
							h : 91,
							size : 67,
						),
						$client->photoCachedSize(
							type : 'zn57U86mVuXA4S9d',
							w : 83,
							h : 92,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'l9q70OWXrxjaduh5',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'BpT1JlX3xNOtWueV',
							w : 46,
							h : 63,
							sizes : array(24),
						),
						$client->photoPathSize(
							type : 'RcwaNAG1M7PDXqjS',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'ENaboAVu5hktzXsZ',
							w : 83,
							h : 81,
							size : 89,
							video_start_ts : 328493.1943359375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 1838910528627712417,
							background_colors : array(1),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -1369898005565060369,
							background_colors : array(38),
						),
					),
					dc_id : 24,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 75,
							h : 60,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'xzP4lVvUdmEeZfXa',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1573223.826171875,
							w : 55,
							h : 96,
							preload_prefix_size : 54,
							video_start_ts : -425212.2685546875,
							video_codec : 'UEwdZi0jDghMnJf4',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 41,
							title : 'qQYyhOvT8cpEgDI2',
							performer : 'HlBMAcNDEL8a7dk6',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'gRm6c1zS5LwbX2A8',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '759DZjrNidsQXA8w',
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
				installed_date : 100,
				id : 1024856991804525126,
				access_hash : -6338889580226706306,
				title : 'zITvxjBpZFgc719K',
				short_name : 'yzK3jaX4HEcnPeYq',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'AI3xUOTncJyQiksH',
					),
					$client->photoSize(
						type : '2CYaIthkM9KPG3mQ',
						w : 87,
						h : 42,
						size : 77,
					),
					$client->photoCachedSize(
						type : 'qsmKytBLdHG1iCol',
						w : 66,
						h : 86,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'iQPYHA5vdRgOl7jx',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '4KYgU70CFSEWo6su',
						w : 5,
						h : 97,
						sizes : array(71),
					),
					$client->photoPathSize(
						type : 'cgDxVZaM0qyuB4WA',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 98,
				thumb_version : 62,
				thumb_document_id : 8427177355252988134,
				count : 52,
				hash : 0,
			),
		),
	),
);
```