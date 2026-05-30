# messages.stickerSetInstallResultArchive

**Description** : *The stickerset was installed, but since there are too many stickersets some were archived*

**Layer** : 222

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
				installed_date : 76,
				id : 4364556695950544789,
				access_hash : 1237981875341241434,
				title : 'hYfA7X8KNMayQrG1',
				short_name : 'ZwbODQoE24nAtpr8',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'SnGQE5hoxMZ3FjgB',
					),
					$client->photoSize(
						type : 'PAQEYuy6z9qsixp0',
						w : 20,
						h : 45,
						size : 85,
					),
					$client->photoCachedSize(
						type : 'LdaWlzEYCe9gj58u',
						w : 7,
						h : 39,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '473bVxvFgjZNzHRC',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'yVKETCmcZX302Dso',
						w : 42,
						h : 69,
						sizes : array(58),
					),
					$client->photoPathSize(
						type : 'oIH0MnlCd8pcJhDF',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 26,
				thumb_version : 52,
				thumb_document_id : 6896495938505629308,
				count : 17,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 1959257687776516423,
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
				installed_date : 37,
				id : -7660573212031167422,
				access_hash : 5413215313072308078,
				title : 'fdXThls6G9ED04Fr',
				short_name : 'hQsWUmBeEYAvuCfq',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'Z7xmagRopK9j4itr',
					),
					$client->photoSize(
						type : 'EolQYy3LMkcSJGAs',
						w : 44,
						h : 9,
						size : 37,
					),
					$client->photoCachedSize(
						type : 'sf27zhQKd3NaprSX',
						w : 69,
						h : 90,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'MK7w1GHVanc6zbLf',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'YEwm0e35IBFWHqfP',
						w : 78,
						h : 88,
						sizes : array(95),
					),
					$client->photoPathSize(
						type : '2WvReJ1xgZyS894l',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 93,
				thumb_version : 67,
				thumb_document_id : 4963459673187155052,
				count : 11,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -7187077060982934193,
				),
				$client->document(
					id : 8629196810598997932,
					access_hash : -8428700123634873396,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 73,
					mime_type : 'XzqYhPtEwvI06RaG',
					size : -5359212075830962592,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'PkndgKxFSvfeRrGN',
						),
						$client->photoSize(
							type : 'rLyFSj5Ov6DRHwie',
							w : 4,
							h : 94,
							size : 15,
						),
						$client->photoCachedSize(
							type : 'F20cARDiJuryvKgx',
							w : 85,
							h : 0,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'ELvkqBFg9MrIGZ7U',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'hNfIJtnWwpgvb7lu',
							w : 4,
							h : 73,
							sizes : array(25),
						),
						$client->photoPathSize(
							type : 'anjZ2kOLE03lVHiN',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'BC4WznEVGrU0cP7Q',
							w : 58,
							h : 45,
							size : 74,
							video_start_ts : 712757.669921875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -2384855103918254853,
							background_colors : array(81),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -6059981881439790305,
							background_colors : array(98),
						),
					),
					dc_id : 19,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 25,
							h : 79,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'zG8aHq1lsb3FDInP',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1427289.783203125,
							w : 99,
							h : 35,
							preload_prefix_size : 41,
							video_start_ts : 586631.203125,
							video_codec : '3z0HiKVT7uX6Arjp',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 53,
							title : 'JfO8WtybPwu0NKAX',
							performer : 'PlhoCMHLYKFWvf7z',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'B5Cbtu0m2oraHYSX',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'EAjXCV17YdN0T2wn',
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
				installed_date : 6,
				id : 7829970305131641895,
				access_hash : -955043117566790834,
				title : 'Q5XjdgKxykoSs6r0',
				short_name : 'bpg2k1UwPu4oKTEB',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'NzlZGFP0TYk5RK7r',
					),
					$client->photoSize(
						type : 'b4S1Km9p58ZwY7RD',
						w : 50,
						h : 3,
						size : 12,
					),
					$client->photoCachedSize(
						type : 'QCP61pg4u8BGyvwr',
						w : 1,
						h : 56,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'JiOvAlNX4jopuye1',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '4Y7UOd1JZ08nGamL',
						w : 88,
						h : 97,
						sizes : array(97),
					),
					$client->photoPathSize(
						type : 'v91uAKSL5bhmPGdx',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 15,
				thumb_version : 1,
				thumb_document_id : 3097765109979867770,
				count : 25,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'cWw3YEJ5RskMf0HG',
					documents : array(8561689863383009586),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 3115221907721648305,
					keyword : array('K0cvCnr4TgRkj7XE'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -3698018513592000062,
				),
				$client->document(
					id : -89351244271522244,
					access_hash : -7330997084835341668,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 72,
					mime_type : 'IQA90OREkUFKywt3',
					size : 3266325518494168287,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'XIepniLAP5u62SHj',
						),
						$client->photoSize(
							type : 'TUf8FEO7DXrZLj1b',
							w : 67,
							h : 87,
							size : 46,
						),
						$client->photoCachedSize(
							type : 'lFBIgnspEadZQu8D',
							w : 21,
							h : 23,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : '2B6mH0gKhN8Gd1Cc',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'X2OaUKd6Nq1YI4ie',
							w : 68,
							h : 40,
							sizes : array(92),
						),
						$client->photoPathSize(
							type : '8xni96ecA0FgvVEq',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'mRUY9iT3Z1OgGB6F',
							w : 54,
							h : 12,
							size : 19,
							video_start_ts : -2077618.07421875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 8641335014624551117,
							background_colors : array(95),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -2302215713475814468,
							background_colors : array(73),
						),
					),
					dc_id : 74,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 48,
							h : 4,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'MdPblz3rNoUiQZ5L',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 910098.23046875,
							w : 66,
							h : 22,
							preload_prefix_size : 18,
							video_start_ts : 2072227.302734375,
							video_codec : 'EXofSY3hQlj165Ce',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 1,
							title : 'ZvVwdC1oyifQcPBX',
							performer : 'vCg6QzKVyke9LuOZ',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : '1YhmrKJBdMVDfH4P',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'abiTqV419J7Plsku',
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
				installed_date : 66,
				id : 5872258088032884593,
				access_hash : -4787652992308831362,
				title : 'Ka8yTSRf9dLMbrPA',
				short_name : 'SaCOAkPK5M1DIlqh',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'oFSyOXIYlur5iQKL',
					),
					$client->photoSize(
						type : 'u1gSFbMHt4DohxjX',
						w : 64,
						h : 70,
						size : 44,
					),
					$client->photoCachedSize(
						type : 'uGB0ZPOmCsJqcfRQ',
						w : 52,
						h : 39,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'fX2psOL6yYzRq1lI',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'MxIS8k9KPviFlreg',
						w : 97,
						h : 70,
						sizes : array(14),
					),
					$client->photoPathSize(
						type : 'wZhs5kx7t3UWaSXr',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 81,
				thumb_version : 44,
				thumb_document_id : -1004915528529916094,
				count : 29,
				hash : 0,
			),
		),
	),
);
```