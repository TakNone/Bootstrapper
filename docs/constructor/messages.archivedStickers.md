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
	count : 34,
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
				installed_date : 89,
				id : 2820862669795806567,
				access_hash : -4099000303570936261,
				title : 'AbvdRCBDJ0zaIql6',
				short_name : 'qT2fn0tE9NObUu7I',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'CtdlT3p9LPshnvcF',
					),
					$client->photoSize(
						type : 'ouFPixLAVHE1TWgt',
						w : 50,
						h : 94,
						size : 87,
					),
					$client->photoCachedSize(
						type : 'HDQpvBty1oY4fZXc',
						w : 39,
						h : 21,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'S0ir7dTm2Us68lwO',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'wI6G5aWldx4tn2O1',
						w : 53,
						h : 25,
						sizes : array(73),
					),
					$client->photoPathSize(
						type : '0Hu5Z6x2cm8jJGCK',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 24,
				thumb_version : 24,
				thumb_document_id : 2407809011253554550,
				count : 41,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -7497878265960248925,
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
				installed_date : 19,
				id : 4768821309496561170,
				access_hash : -3159648841691333808,
				title : 'tkoGrYOEVuDhmAFg',
				short_name : 'LKx6XhYO2BP9Gn57',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'v7EnuFHJbSjpOPLr',
					),
					$client->photoSize(
						type : 'DnAO8iZ3z4t9vwcN',
						w : 56,
						h : 41,
						size : 67,
					),
					$client->photoCachedSize(
						type : 'gtWmkdqfDROb2aTH',
						w : 74,
						h : 77,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'fSbsPR9AvQncTKkz',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '1QpJY7MDwKBGxt0o',
						w : 34,
						h : 61,
						sizes : array(97),
					),
					$client->photoPathSize(
						type : 'E0O3YQCXJmclvpGW',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 25,
				thumb_version : 89,
				thumb_document_id : -5391288452339423633,
				count : 91,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 7225198299929588275,
				),
				$client->document(
					id : 730400223619702701,
					access_hash : -4227244709208061227,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 13,
					mime_type : 'A8UyQYMqh2St39dN',
					size : -1848467041305253545,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'nW5Hw3ZhQv1qIEfK',
						),
						$client->photoSize(
							type : 'UvxQA9jPIZhfwepN',
							w : 10,
							h : 98,
							size : 96,
						),
						$client->photoCachedSize(
							type : 'FYZCBOzV45LxW3DJ',
							w : 34,
							h : 22,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'L0rXemgZOjBQaohD',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'UMLNyn0Y1ahkGflI',
							w : 4,
							h : 57,
							sizes : array(62),
						),
						$client->photoPathSize(
							type : 'GFhRQfmO4uBTr9ns',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : '48Sm61VBHi9kMFWI',
							w : 89,
							h : 59,
							size : 83,
							video_start_ts : 688244.7138671875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 6875840719783109309,
							background_colors : array(31),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -7888125080421190483,
							background_colors : array(38),
						),
					),
					dc_id : 11,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 75,
							h : 90,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'kOU7GPI6lpBEnXx4',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1087519.1474609375,
							w : 13,
							h : 85,
							preload_prefix_size : 76,
							video_start_ts : 857842.392578125,
							video_codec : 'i6VfAGZNTevIKYos',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 2,
							title : 'v2gNotUxMXB4TrAj',
							performer : 'iKF182ZOVThCRD7N',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : '7zvZEFSIcpByiDV9',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '3fiwKB4zdN5VPJMQ',
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
				installed_date : 72,
				id : -5387705257942500137,
				access_hash : -6128519677689948739,
				title : 'QMTSN0qKmvdlV5bn',
				short_name : 'W9b0LHkzKuepdS8v',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'D4Pqo96fRmEhTAdz',
					),
					$client->photoSize(
						type : 'wjDe6gEvLdkm5HqU',
						w : 13,
						h : 36,
						size : 37,
					),
					$client->photoCachedSize(
						type : 'xtJOLqQ3T6jiHXmE',
						w : 58,
						h : 91,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'uRXtciv2TCWILGYN',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'bPDp9HN4uJfglKSc',
						w : 20,
						h : 1,
						sizes : array(81),
					),
					$client->photoPathSize(
						type : 'wzPun1x3Xb7O8ImJ',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 77,
				thumb_version : 27,
				thumb_document_id : -2906794996961833974,
				count : 73,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'tiCBrbnZ8MVFLE6c',
					documents : array(-8522103163064747527),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -6571129578710854211,
					keyword : array('DXQcKyl9va5xFnZN'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -3282302963684634190,
				),
				$client->document(
					id : -2070028352813851505,
					access_hash : 9095039143336754020,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 19,
					mime_type : 'rBgqPx3Wuc9kXTD8',
					size : 122123141504626500,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'KkFovc0CwiYHOWsP',
						),
						$client->photoSize(
							type : 'U3WbikpF6gMI2lr0',
							w : 85,
							h : 53,
							size : 30,
						),
						$client->photoCachedSize(
							type : 'tevL9cioDVGkMrZX',
							w : 86,
							h : 90,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'jObyVr4vHlufUPmB',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '7pJmyngTrSqX5Bze',
							w : 51,
							h : 85,
							sizes : array(57),
						),
						$client->photoPathSize(
							type : 'nEiocsrleI5y7xQZ',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 't1M5lLdZB4Fo8aPq',
							w : 67,
							h : 49,
							size : 90,
							video_start_ts : -1949104.0205078125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -1932133281105172502,
							background_colors : array(12),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 8100918010658076350,
							background_colors : array(12),
						),
					),
					dc_id : 15,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 92,
							h : 17,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'jaMGqgCJX10s87BR',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -2043522.4775390625,
							w : 83,
							h : 99,
							preload_prefix_size : 25,
							video_start_ts : 103079.166015625,
							video_codec : 'Lzer9C6syYBMcDHv',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 2,
							title : 'tPM7FVxy1jahzHfL',
							performer : 'vCB4oTlcGfQzhW0Z',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'NbOlXvf7o82IijJH',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'yDm6IXKJG52wblqN',
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
				installed_date : 31,
				id : -5215923047520847241,
				access_hash : -8674393971683421117,
				title : 'bRB10jp7NwSWHhe3',
				short_name : 'r4yQUJFGsvg2VH8A',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'Rqp9KB8zS4XvH6aD',
					),
					$client->photoSize(
						type : 'T1Fz0vMr4CJ8DARP',
						w : 44,
						h : 78,
						size : 36,
					),
					$client->photoCachedSize(
						type : '6Sylrc2aGpHKNLgm',
						w : 82,
						h : 47,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'iSZ6YFgWHyDMbxLV',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'utCVhcvF2pHmYJrZ',
						w : 38,
						h : 45,
						sizes : array(81),
					),
					$client->photoPathSize(
						type : 'qysHY5B1RZ4XKFir',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 41,
				thumb_version : 82,
				thumb_document_id : 4673122913428728937,
				count : 15,
				hash : 0,
			),
		),
	),
);
```