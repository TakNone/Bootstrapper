# messages.archivedStickers

**Description** : *Archived stickersets*

**Layer** : 229

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
	count : 85,
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
				installed_date : 43,
				id : -2395603963749893522,
				access_hash : -7969541102541022419,
				title : 'EfiCRtYQXH9AbvrT',
				short_name : 'i5g4hfGTOekHMpsI',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '8UhFxfWNndB7KVOt',
					),
					$client->photoSize(
						type : 'vCyQ7hw0BzpI9xeb',
						w : 29,
						h : 98,
						size : 19,
					),
					$client->photoCachedSize(
						type : 'af9vA5bGFMx4SXuL',
						w : 62,
						h : 58,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'tNqKXv89npJ2AUZa',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'IeuLMxmWB19EtP8U',
						w : 79,
						h : 4,
						sizes : array(100),
					),
					$client->photoPathSize(
						type : 'Y3gFdAmCbE5HzZSN',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 51,
				thumb_version : 20,
				thumb_document_id : -4444088897530219842,
				count : 86,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 8140654487895324052,
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
				installed_date : 71,
				id : 8790102366560117042,
				access_hash : -8565491551740714434,
				title : 'h8GfZC6wWbOIFVJT',
				short_name : 'rSLjfAYXlc7hyZPJ',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'bhTuc1BowxZUE2KG',
					),
					$client->photoSize(
						type : 'xpGbjNVs7hPUDvMq',
						w : 5,
						h : 51,
						size : 17,
					),
					$client->photoCachedSize(
						type : 'CfgNzPUBW5sh8q6j',
						w : 52,
						h : 7,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'tku5TDScByLj6V9p',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'kytAcBW38rZG5YDv',
						w : 63,
						h : 8,
						sizes : array(55),
					),
					$client->photoPathSize(
						type : 'XGLo3M2nmsqc4TlN',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 82,
				thumb_version : 68,
				thumb_document_id : 4187421731290395312,
				count : 46,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 6266441519538951953,
				),
				$client->document(
					id : -7144762764290128572,
					access_hash : 3490738201087978902,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 95,
					mime_type : 'XMY1o5v4pC7xLNFs',
					size : 2591142223618448823,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'r8RjIyc0pJZel1qH',
						),
						$client->photoSize(
							type : 'YV6yOTLKXo9eRQ3a',
							w : 19,
							h : 8,
							size : 10,
						),
						$client->photoCachedSize(
							type : 'u6ijF91K40PDGNzh',
							w : 63,
							h : 85,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'bYiCSzo78JIUPqgT',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'i5SRnD6f89jQs0Yc',
							w : 52,
							h : 0,
							sizes : array(97),
						),
						$client->photoPathSize(
							type : 'tlUavcAd17ZmKPLX',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : '9CkviarAZG4SlzLn',
							w : 48,
							h : 53,
							size : 20,
							video_start_ts : 876449.044921875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -5315012002319696558,
							background_colors : array(97),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 8703416598061686012,
							background_colors : array(2),
						),
					),
					dc_id : 21,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 53,
							h : 80,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'it4oyfqIsxmO0Jdj',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -276959.5654296875,
							w : 39,
							h : 89,
							preload_prefix_size : 70,
							video_start_ts : 122123.2294921875,
							video_codec : 'M8OX0f75WSDvCFK4',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 47,
							title : '2I7e59o3rSQRakCL',
							performer : 'kwq6s13GNZVdKp0m',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'F89KyZgGE5SJQPxN',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'BIjUzQpCX8TmdYD4',
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
				installed_date : 31,
				id : -5116472324662264643,
				access_hash : -6902835663180332700,
				title : 'rMQusGZRhK2VAaog',
				short_name : 'zI7byTS5n4BjwN3Q',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'PQnmd9uMRYcfCpGE',
					),
					$client->photoSize(
						type : 'fOYhPe5EXsQNjzbr',
						w : 85,
						h : 89,
						size : 31,
					),
					$client->photoCachedSize(
						type : 'u9qkQEjA5IH813Yy',
						w : 7,
						h : 6,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'lLPDcTCH09K1GdZo',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'OxCyK4V5wZvGkNAR',
						w : 19,
						h : 76,
						sizes : array(94),
					),
					$client->photoPathSize(
						type : 'lFG9y5zepmqM1T4S',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 58,
				thumb_version : 40,
				thumb_document_id : 3671242370928007070,
				count : 6,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'gcEHk6sAzoaSV8pd',
					documents : array(-789828290256996131),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -6680020238438168974,
					keyword : array('Phy3U2iBaWvMV1u4'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 4430292666673107042,
				),
				$client->document(
					id : 5262656133983213172,
					access_hash : 1912117867477031967,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 38,
					mime_type : 'NMH9AVoDp8yYRc63',
					size : -2123137892202980447,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'Xu6rhdPEUwm18jWD',
						),
						$client->photoSize(
							type : 'xDhyFHIq8l1Wvscd',
							w : 83,
							h : 3,
							size : 26,
						),
						$client->photoCachedSize(
							type : 'a4C1MzUr62X73Z0S',
							w : 79,
							h : 77,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : '7IywXTnJhPkbMpsv',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'dP0trmWiOlDN5GS7',
							w : 38,
							h : 33,
							sizes : array(70),
						),
						$client->photoPathSize(
							type : 'hTplHfRzNE453KDn',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'gUXsqnGZBKaHfMvh',
							w : 40,
							h : 17,
							size : 68,
							video_start_ts : 1625322.7568359375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -8470391269627590028,
							background_colors : array(38),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -6614977928531098138,
							background_colors : array(94),
						),
					),
					dc_id : 0,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 57,
							h : 8,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'x5km4gGOJrKRC0a9',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1544607.9423828125,
							w : 48,
							h : 16,
							preload_prefix_size : 16,
							video_start_ts : -2037673.2236328125,
							video_codec : 'wf0FltuxRg2HXYj4',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 61,
							title : 'rBbJ2sEcyg1Uvfwl',
							performer : '5WDTFMzKLv96hq3l',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : '7uWbwImZqceRVPtQ',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'SZ3Kh0AqE4lor26M',
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
				installed_date : 37,
				id : -6090420357248512951,
				access_hash : -7674624651788705510,
				title : 'xW4dwsbOAV86zELi',
				short_name : 'GQBdrY3lge2hvw1J',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'TBP2Iyrw7zlpgS3K',
					),
					$client->photoSize(
						type : 'S4W3eItR1yocb9wP',
						w : 80,
						h : 29,
						size : 41,
					),
					$client->photoCachedSize(
						type : 'gXLs2Cj65ViZKzE7',
						w : 81,
						h : 40,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'hDtu9FyKacnkONZg',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'uMzhtwXDyC4n3YJm',
						w : 20,
						h : 54,
						sizes : array(22),
					),
					$client->photoPathSize(
						type : 'pli2Gc0BKZ53Trne',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 78,
				thumb_version : 77,
				thumb_document_id : -1729451046058908916,
				count : 16,
				hash : 0,
			),
		),
	),
);
```