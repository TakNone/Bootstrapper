# messages.featuredStickers

**Description** : *Featured stickersets*

**Layer** : 222

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
	count : 43,
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
				installed_date : 39,
				id : -7007828454701311942,
				access_hash : 9171478125137294225,
				title : 'kGfPARTMu7ndFIrs',
				short_name : 'H9wMdUfgoz3SC7cp',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'sTM36WVhLatiwxu7',
					),
					$client->photoSize(
						type : 'TEDQ7mwvYsuMpGC9',
						w : 20,
						h : 24,
						size : 43,
					),
					$client->photoCachedSize(
						type : 'RgJGxYt8ToyhbZc1',
						w : 83,
						h : 44,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'XNMCqEPuHOU4T9Iv',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'apLY842Vu9G73BUr',
						w : 14,
						h : 2,
						sizes : array(30),
					),
					$client->photoPathSize(
						type : 'rN2ohJQMWumBxZKy',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 82,
				thumb_version : 25,
				thumb_document_id : 5176284106071731282,
				count : 20,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 3427039142079336018,
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
				installed_date : 87,
				id : -1203464271622029097,
				access_hash : -7796301627345708811,
				title : 'OuyGXPBe5zRJSkCx',
				short_name : 'mX9bzLv7A2HJnWGj',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'vaWodminDfUthGpS',
					),
					$client->photoSize(
						type : 'ifos3XzrSIWGEBY8',
						w : 31,
						h : 84,
						size : 3,
					),
					$client->photoCachedSize(
						type : 'Mw592zSLvusHq73E',
						w : 44,
						h : 16,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'F7YTianPDLs4d32z',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'iTjO7BZXsQzgkNHu',
						w : 33,
						h : 23,
						sizes : array(1),
					),
					$client->photoPathSize(
						type : 'djc7Xro2f9tkigsB',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 14,
				thumb_version : 48,
				thumb_document_id : -3898862934648777128,
				count : 6,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 8083252401574751884,
				),
				$client->document(
					id : 4235066153951657098,
					access_hash : 4838167662943465171,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 89,
					mime_type : 'DrSvGQq9VxiBY7l8',
					size : 1177347427915842487,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'woIft25Jj3bym0Sg',
						),
						$client->photoSize(
							type : 'GzpCtwQb8H0sURhx',
							w : 73,
							h : 93,
							size : 56,
						),
						$client->photoCachedSize(
							type : '6mrxqjwacnbPZQ8O',
							w : 85,
							h : 69,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'XoazLBq2U1K6pvHV',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'YcbUdyjOTnu0Nixe',
							w : 9,
							h : 81,
							sizes : array(36),
						),
						$client->photoPathSize(
							type : 'jUnxeFS8vdQRiE2k',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'dlnjGFe4PYzSpHZb',
							w : 50,
							h : 8,
							size : 45,
							video_start_ts : 1958919.3857421875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 4579826130048713995,
							background_colors : array(44),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -5508061817249480460,
							background_colors : array(66),
						),
					),
					dc_id : 15,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 62,
							h : 99,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'aDw8IVXqlcdtCMEe',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -1040727.8388671875,
							w : 55,
							h : 19,
							preload_prefix_size : 3,
							video_start_ts : 1699738.41796875,
							video_codec : 'b5Zq6m0szL74EhWO',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 64,
							title : 'VzgqvZN9TOUui6ta',
							performer : 'lhouPe65nbsrTdjC',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'DuOi1QKwCphSqVez',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'FwYbQkajqhOfCN38',
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
				installed_date : 77,
				id : -7964814652578123681,
				access_hash : -5377113076653130335,
				title : 'OxkcLjlKmw0AGbrH',
				short_name : 'wDMIm5R12ZVUdB7C',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'QfruD9bX716FGnvK',
					),
					$client->photoSize(
						type : 'e4bWBnymTzqSJQDG',
						w : 55,
						h : 52,
						size : 87,
					),
					$client->photoCachedSize(
						type : 'bhrMBERW0pLny97k',
						w : 43,
						h : 71,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '5oS7FDQPYzaqe9RN',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '5wciVPbvUJ4eEqr6',
						w : 19,
						h : 1,
						sizes : array(63),
					),
					$client->photoPathSize(
						type : '8IWvrXsoQnVayKiT',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 32,
				thumb_version : 5,
				thumb_document_id : -2585263757870295352,
				count : 87,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'IxG4fZ0128QLwWp7',
					documents : array(-6990027500145615186),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 4284141420420814170,
					keyword : array('rqfy4xcYVRpFdbXw'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 4312331929530331326,
				),
				$client->document(
					id : -9221609049193730444,
					access_hash : -2012546674315981938,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 74,
					mime_type : 'FU6ZADXkSueKCNs3',
					size : -479760971611942919,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'nqWBsuViMxLZFopy',
						),
						$client->photoSize(
							type : 'HAY1Xn6deZj49cwl',
							w : 91,
							h : 45,
							size : 60,
						),
						$client->photoCachedSize(
							type : 'tmS07fFcONWRjD2C',
							w : 76,
							h : 29,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'Ki4zFAGxeXWhVS8C',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'pcbSMN7YtAJdVHB5',
							w : 35,
							h : 65,
							sizes : array(12),
						),
						$client->photoPathSize(
							type : 'XLGe7hSqBykJxR13',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : '94lwDIY6vVOiZyF1',
							w : 38,
							h : 99,
							size : 88,
							video_start_ts : 801259.6142578125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 2445272742643888587,
							background_colors : array(66),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -2699862576808428538,
							background_colors : array(71),
						),
					),
					dc_id : 59,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 17,
							h : 30,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : '14wdqWc7jk2xs8Oz',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -369306.708984375,
							w : 12,
							h : 26,
							preload_prefix_size : 93,
							video_start_ts : 824499.4453125,
							video_codec : 'Tta4bj3M2PFhsg0r',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 79,
							title : 'VGaPWe3kqtCi8ulH',
							performer : 'zd9FWhPVL5rkCl0U',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'ADUZLIrzsvRT518E',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '2L60siDcxhYpagtR',
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
				installed_date : 28,
				id : -4666742686776642797,
				access_hash : 3680600359599829830,
				title : '62tGaAZihYyoHRcB',
				short_name : 'LXfvWTQnGhByRPKp',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '9C46OAKXTt2jwqBg',
					),
					$client->photoSize(
						type : 'U08meJ7RdogQijWf',
						w : 72,
						h : 81,
						size : 67,
					),
					$client->photoCachedSize(
						type : 'mhdp5ZjNgb0raO1v',
						w : 68,
						h : 9,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'sLkPVFR1pq6dyzEe',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'Vzd0fIWkJRgESuDO',
						w : 62,
						h : 32,
						sizes : array(28),
					),
					$client->photoPathSize(
						type : 'JgxArvn9w8Y4Z2uy',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 70,
				thumb_version : 31,
				thumb_document_id : 3292753039517527121,
				count : 69,
				hash : 0,
			),
		),
	),
	unread : array(-1553734983163546121),
);
```