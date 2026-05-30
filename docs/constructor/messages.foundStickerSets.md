# messages.foundStickerSets

**Description** : *Found stickersets*

**Layer** : 222

```tl
messages.foundStickerSets#8af09dd2 hash:long sets:Vector<StickerSetCovered> = messages.FoundStickerSets;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Found stickersets |

---

## Type

[messages.FoundStickerSets](type/messages.FoundStickerSets)

---

## Example

```php
$messagesFoundStickerSets = $client->messages->foundStickerSets(
	hash : 0,
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
				installed_date : 66,
				id : 6196961271556088063,
				access_hash : -7554515318073351495,
				title : 'hJe0ILi7jkHtFM6c',
				short_name : 'jGRvLIP2KhUtgyWQ',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'pYuE38rXShJ1cgCn',
					),
					$client->photoSize(
						type : '6FpcGdh4Lueo0rRM',
						w : 45,
						h : 74,
						size : 57,
					),
					$client->photoCachedSize(
						type : 'fsjDSpuQGeInJXMt',
						w : 81,
						h : 23,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '0Uua5DQExYvRZ6n1',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '9bRE7mBae8DMxApX',
						w : 66,
						h : 24,
						sizes : array(22),
					),
					$client->photoPathSize(
						type : '9ON4AXVWel87HEaP',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 42,
				thumb_version : 78,
				thumb_document_id : 1264211976225267619,
				count : 66,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -6540676652041244338,
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
				installed_date : 57,
				id : -1654033539861982601,
				access_hash : -1367622975340393342,
				title : 'kQuBicS9nlKPhIUf',
				short_name : 'GLFBRyQ7dqnXJgv2',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'hvLlxHZrUIE8yPJa',
					),
					$client->photoSize(
						type : 'Em1DwVf0gCQs7ZHW',
						w : 29,
						h : 69,
						size : 91,
					),
					$client->photoCachedSize(
						type : 'AxioYu8DUFPEVZNC',
						w : 80,
						h : 97,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'PyLxd2oY4aWMjAvz',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'v7z8PeWfFXpECYDs',
						w : 85,
						h : 43,
						sizes : array(36),
					),
					$client->photoPathSize(
						type : 'TWXxYDAocaNwUIHe',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 43,
				thumb_version : 44,
				thumb_document_id : 6117129041472365863,
				count : 28,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -5265527247215468230,
				),
				$client->document(
					id : 5623138588131501265,
					access_hash : -5358276613655813770,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 94,
					mime_type : 'dTK8kAZuaoYBpg5i',
					size : 4691272982141283742,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'RpalGsVMXo0LUA41',
						),
						$client->photoSize(
							type : 'SjXN5xWEbrJFnDVi',
							w : 10,
							h : 82,
							size : 97,
						),
						$client->photoCachedSize(
							type : 'Gs3h6zHqaKoTt7Am',
							w : 24,
							h : 4,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'JHhalf4vcFY5mRpK',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'YcGFyDItL1KboWZ0',
							w : 89,
							h : 95,
							sizes : array(65),
						),
						$client->photoPathSize(
							type : 'suZYkqcgprGDyIwP',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'obJGYBlrHqkLvPf5',
							w : 86,
							h : 84,
							size : 68,
							video_start_ts : -214983.77734375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -2404534371355996976,
							background_colors : array(32),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 9213461729997975176,
							background_colors : array(88),
						),
					),
					dc_id : 59,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 47,
							h : 94,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'ShtT47m3ANQKFec6',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 186421.412109375,
							w : 56,
							h : 54,
							preload_prefix_size : 41,
							video_start_ts : 1686828.427734375,
							video_codec : 'XYLNEW7SM9pwn163',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 64,
							title : 'ZOKArVXsPBnkF52p',
							performer : 'ay0kInQMcHd4JoPm',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'I5VCFyirLohjmO4Q',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'KBFgySdeuWVvcCPt',
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
				installed_date : 17,
				id : -8016835069735126556,
				access_hash : 9026617065629647770,
				title : 'y02Dknfa5mjiXNlV',
				short_name : 'VeyDp7vWmh0t8Lgd',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'AgDswuJihXdyjFk4',
					),
					$client->photoSize(
						type : 'xwuToPnB2zjLXkIG',
						w : 2,
						h : 60,
						size : 41,
					),
					$client->photoCachedSize(
						type : 'AiDlY8OBE2MLgxmW',
						w : 35,
						h : 56,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'jsCPrtvm7JDwRnhA',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '7bYdznNv5jJpt0fH',
						w : 86,
						h : 100,
						sizes : array(93),
					),
					$client->photoPathSize(
						type : 'So7NAjFmGUinPXuK',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 72,
				thumb_version : 83,
				thumb_document_id : -7358566470434041966,
				count : 63,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'yD8zF6wiohb4NSrj',
					documents : array(-8535421769483440609),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 8432705819730633086,
					keyword : array('fpm0hq3trsBQTHov'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 3399831824478400906,
				),
				$client->document(
					id : -4576075043733833063,
					access_hash : 799717815884356828,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 77,
					mime_type : 'Bw8mLTECcGRyn5lj',
					size : -1993311622271589986,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'kzuWGPHh61rXOqm5',
						),
						$client->photoSize(
							type : 'H9UxaMXdEoeivsCZ',
							w : 22,
							h : 32,
							size : 34,
						),
						$client->photoCachedSize(
							type : 'huZLsI1jgaWmK6OB',
							w : 30,
							h : 82,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'sjVA3iXZmRrg5w8p',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '2kO7hRMQcSVoeAs4',
							w : 80,
							h : 38,
							sizes : array(11),
						),
						$client->photoPathSize(
							type : 'VPIzv0oiGOnjWAK2',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'bM15feVx2Y3sSBlQ',
							w : 87,
							h : 42,
							size : 39,
							video_start_ts : -1235186.998046875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -7061198203442461651,
							background_colors : array(34),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -5191389732177547479,
							background_colors : array(58),
						),
					),
					dc_id : 14,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 74,
							h : 11,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'akBPDwjEIm8VSvx9',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -1660657.6591796875,
							w : 6,
							h : 4,
							preload_prefix_size : 83,
							video_start_ts : 879622.03125,
							video_codec : 'Owly4PsXtYpJHjKf',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 65,
							title : 'zQdtjkaHnGYis0D2',
							performer : 'SwmQucE9Y2O7v8Gg',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'RxJVu3NgPLDSmAd8',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'EUQbhK5oGM6fp9vr',
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
				installed_date : 93,
				id : -3963971419704243845,
				access_hash : -7811759913301757226,
				title : 'tBUYZNTpfIrkq6ne',
				short_name : 'vBT6M10q3inyCt4m',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'In9FNhSvjf2gxTyG',
					),
					$client->photoSize(
						type : '2tDVkAZcT9jRsY1K',
						w : 66,
						h : 82,
						size : 40,
					),
					$client->photoCachedSize(
						type : 'TqxaXONwR8AQ5S0Z',
						w : 56,
						h : 54,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'n8AXPSYfTDW9ZkrL',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'y3ZIcuswKHdpqL5k',
						w : 22,
						h : 61,
						sizes : array(29),
					),
					$client->photoPathSize(
						type : '6WjgQKkaeY0TZ9Mf',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 48,
				thumb_version : 27,
				thumb_document_id : 4680093123778113426,
				count : 95,
				hash : 0,
			),
		),
	),
);
```