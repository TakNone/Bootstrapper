# messages.featuredStickers

**Description** : *Featured stickersets*

**Layer** : 225

```tl
messages.featuredStickers#be382906 flags:# premium:flags.0?true hash:long count:int sets:Vector<StickerSetCovered> unread:Vector<long> = messages.FeaturedStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **premium** | [`flags.0?true`](type/true) | Whether this is a premium stickerset |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>count</mark> | [`int`](type/int) | Total number of featured stickers |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Featured stickersets |
| <mark>unread</mark> | [`Vector<long>`](type/long) | IDs of new featured stickersets |

---

## Type

[messages.FeaturedStickers](type/messages.FeaturedStickers)

---

## Example

```php
$messagesFeaturedStickers = $client->messages->featuredStickers(
	premium : true,
	hash : 0,
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
				installed_date : 33,
				id : 791211076657372651,
				access_hash : -7366821046454416184,
				title : '5HiEu8fIly6X1m0A',
				short_name : 'dLG2wk1zYDRQsSWy',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'nUEHjurFyJhL2Z49',
					),
					$client->photoSize(
						type : 'g4QO1zAJZ2bWq5ex',
						w : 92,
						h : 82,
						size : 90,
					),
					$client->photoCachedSize(
						type : 'zxSdwKhcG8Y6XWmn',
						w : 0,
						h : 31,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'oF3TVRmYknbJC8MQ',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'CkUVo5FerYwzcQLx',
						w : 27,
						h : 33,
						sizes : array(22),
					),
					$client->photoPathSize(
						type : 'FLkOcqRd7e6n2YCm',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 87,
				thumb_version : 70,
				thumb_document_id : -3557061828348088694,
				count : 84,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -4748639150704984774,
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
				installed_date : 47,
				id : 8028199632463647456,
				access_hash : 6051962294542220958,
				title : 'd5k7p6zqNLjO0BM9',
				short_name : 'KsLQO5iWlRCXMPBN',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '9EDQ45oUMWLd2hHR',
					),
					$client->photoSize(
						type : 'GEB3vdtp5xYRCXzI',
						w : 54,
						h : 72,
						size : 35,
					),
					$client->photoCachedSize(
						type : '5xSbt2ARu8iK7vcs',
						w : 89,
						h : 31,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'I6DUx4fOGk91chl7',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'vsKXofVpQg5LHZC8',
						w : 0,
						h : 65,
						sizes : array(91),
					),
					$client->photoPathSize(
						type : 'YvpZigUXIw2lOmbt',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 58,
				thumb_version : 26,
				thumb_document_id : 8047768059418663462,
				count : 10,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 8583807312553978924,
				),
				$client->document(
					id : -6937487365544959557,
					access_hash : -4438842565970459409,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 71,
					mime_type : 'ejCR0tl9O4iBaDoW',
					size : -6303093494234588778,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'mJzHqSvi35TnZ7d0',
						),
						$client->photoSize(
							type : '30nE1Zm8XhGrTHAp',
							w : 79,
							h : 7,
							size : 4,
						),
						$client->photoCachedSize(
							type : 'HghxbjJ6BVnm3CyP',
							w : 44,
							h : 37,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'uHoh8IkTP1QXaVJe',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'BTb89R4NHAwo6kGe',
							w : 2,
							h : 62,
							sizes : array(51),
						),
						$client->photoPathSize(
							type : 'XlS6ImaNpizVeYgs',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'pD4rLdP7BI8mO1b3',
							w : 83,
							h : 46,
							size : 66,
							video_start_ts : 1615640.240234375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 4947732399466583335,
							background_colors : array(64),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -6899594050970944137,
							background_colors : array(13),
						),
					),
					dc_id : 56,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 28,
							h : 56,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'r49teiGZwxB3L61Q',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -1399847.255859375,
							w : 75,
							h : 93,
							preload_prefix_size : 83,
							video_start_ts : 1552438.9560546875,
							video_codec : '9qRzFBAtEsQVI0XO',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 25,
							title : 'IUbEu85xNt6YnDfa',
							performer : 'WqSEoNMU4gOVnZPi',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'R5XMbyzqUhPdsKZV',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'x93bAzcXopWdwV5L',
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
				installed_date : 55,
				id : -2558791644496728559,
				access_hash : 4848036538540183697,
				title : 'dMtIOsHNYbuSVeZg',
				short_name : 'S5e7vpsblH6UZd8V',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '27coQOdPGSufyNqr',
					),
					$client->photoSize(
						type : 'Yow78j6iUnZmyfz5',
						w : 2,
						h : 94,
						size : 82,
					),
					$client->photoCachedSize(
						type : 'aM7FyxhqI69utBko',
						w : 30,
						h : 42,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'jpehtzYikbLsIo0n',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'c0vXIpTSUeNPGhwK',
						w : 4,
						h : 98,
						sizes : array(61),
					),
					$client->photoPathSize(
						type : 'XbilPzW2cf60G7Lk',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 59,
				thumb_version : 21,
				thumb_document_id : -5580688144412297752,
				count : 10,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'VsQlRMaCp3rAouJG',
					documents : array(-6055317385939381803),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -3191604946442935658,
					keyword : array('kta4vFqbmBXZpxuY'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -3475098973332547533,
				),
				$client->document(
					id : 397021891541694339,
					access_hash : 8926413923975293013,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 82,
					mime_type : 'OT7pqAM4mZoy6zKj',
					size : -4729046511530951418,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'k2EydTCfHlM5YnxB',
						),
						$client->photoSize(
							type : 'r4I63YBnlNFjG5dW',
							w : 50,
							h : 73,
							size : 5,
						),
						$client->photoCachedSize(
							type : 'Owu90cy8TlLMvgfJ',
							w : 50,
							h : 39,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : '2ZyS9dfPHzclUJLA',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'X0fUCaPBI7dRTj1q',
							w : 20,
							h : 22,
							sizes : array(36),
						),
						$client->photoPathSize(
							type : 'EoQOX6jc9l0MW38f',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : '9fswRilOvmouFcSb',
							w : 15,
							h : 51,
							size : 9,
							video_start_ts : 391774.8076171875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 9076715028707844888,
							background_colors : array(35),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -2029082952771916581,
							background_colors : array(16),
						),
					),
					dc_id : 93,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 30,
							h : 35,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'Vgiz4ZFqMrlvJ1KE',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 2015216.7265625,
							w : 41,
							h : 21,
							preload_prefix_size : 16,
							video_start_ts : 918757.736328125,
							video_codec : 'XlxCUPSIReiZGKEp',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 17,
							title : 'TQ1U2x3jDtbK9f75',
							performer : 'dBFt3ycJG4aWxiIb',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'V4ByfME5kvjKoHNx',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'cIXvTQVdMoHB6Ohu',
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
				installed_date : 61,
				id : 260676421591900320,
				access_hash : -1993009224911079595,
				title : '93uNGhopAgO6kz8e',
				short_name : 'NOHcrJS41ok63qLM',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'Mf7Gboa4P3Kxu0ES',
					),
					$client->photoSize(
						type : 'vLWQS0nk4fD17BMc',
						w : 25,
						h : 51,
						size : 92,
					),
					$client->photoCachedSize(
						type : 'UewhNrnZdXc4H9yD',
						w : 4,
						h : 71,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'WJlzPwRtI7cfLr35',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'yL20tQ8TODiJWVZ9',
						w : 8,
						h : 30,
						sizes : array(27),
					),
					$client->photoPathSize(
						type : 'fPZO8WYE4ynU3rCw',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 66,
				thumb_version : 31,
				thumb_document_id : 3721178580947648709,
				count : 16,
				hash : 0,
			),
		),
	),
	unread : array(-3813060326759365598),
);
```