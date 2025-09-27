# messages.stickerSet

**Description** : *Stickerset and stickers inside it*

**Layer** : 214

```tl
messages.stickerSet#6e153f16 set:StickerSet packs:Vector<StickerPack> keywords:Vector<StickerKeyword> documents:Vector<Document> = messages.StickerSet;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>set</mark> | [`StickerSet`](type/StickerSet) | The stickerset |
| <mark>packs</mark> | [`Vector<StickerPack>`](type/StickerPack) | Emoji info for stickers |
| <mark>keywords</mark> | [`Vector<StickerKeyword>`](type/StickerKeyword) | Keywords for some or every sticker in the stickerset |
| <mark>documents</mark> | [`Vector<Document>`](type/Document) | Stickers in stickerset |

---

## Type

[messages.StickerSet](type/messages.StickerSet)

---

## Example

```php
$messagesStickerSet = $client->messages->stickerSet(
	set : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 15,
		id : -5185753201698168513,
		access_hash : -5720005790805258914,
		title : 'hs2gUCEL9Aex48P1',
		short_name : 'xqumr4yskc8hUFBR',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'w0qLs1ySG4gE9t6a',
			),
			$client->photoSize(
				type : 'xu2DvFyYokqmg6K5',
				w : 14,
				h : 6,
				size : 93,
			),
			$client->photoCachedSize(
				type : 'nI43BvZ9yeKNiuG7',
				w : 93,
				h : 99,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'GuykEQNIbePnC39g',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'fRWp416q5lZNiUQX',
				w : 70,
				h : 57,
				sizes : array(81),
			),
			$client->photoPathSize(
				type : 'qgPtX7kw85AR2xJz',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 13,
		thumb_version : 77,
		thumb_document_id : -1276671179722191990,
		count : 27,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'YB47V0u8HaNcrEGq',
			documents : array(-4943638335881278965),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : -4760667025621170571,
			keyword : array('7rWZLIy3J6eb8hwP'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -7087700796723590797,
		),
		$client->document(
			id : -1565879355766390172,
			access_hash : -6053231837257702317,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 52,
			mime_type : 'NvGyoK5Sxbm2WscB',
			size : -5185801687656315775,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'J8e7PCFrZQoKlfmp',
				),
				$client->photoSize(
					type : '12akt7p5n0RfLTqE',
					w : 34,
					h : 10,
					size : 61,
				),
				$client->photoCachedSize(
					type : 'Jib7Yy0a2pGcMgoB',
					w : 77,
					h : 82,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '4Wcu5Y8PXRxevCAH',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'hmg3O2J9Vj5vIt0P',
					w : 28,
					h : 28,
					sizes : array(1),
				),
				$client->photoPathSize(
					type : 'ZJGwzNTVdfYlkO83',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'RlmNcC89uFVGHSQ0',
					w : 49,
					h : 52,
					size : 11,
					video_start_ts : -1824412.44921875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -4932843541059154697,
					background_colors : array(0),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -6661522544295178786,
					background_colors : array(67),
				),
			),
			dc_id : 60,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 86,
					h : 16,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'o976BOARx1LMaykD',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -590032.2265625,
					w : 42,
					h : 73,
					preload_prefix_size : 48,
					video_start_ts : 940438.2001953125,
					video_codec : '1jgrNGfKPuQaUvS3',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 10,
					title : 'UFqJ0Rt931LNfdoI',
					performer : 'zhbSDK0GO954xNPX',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'G4MIScQvDLRBtWhP',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '5EyQHcatXjUh8xBi',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```