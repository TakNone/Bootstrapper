# stickerSetFullCovered

**Description** : *Stickerset preview with all stickers of the stickerset included\.
Currently used only for custom emoji stickersets, to avoid a further call to messages\.getStickerSet*

**Layer** : 218

```tl
stickerSetFullCovered#40d13c0e set:StickerSet packs:Vector<StickerPack> keywords:Vector<StickerKeyword> documents:Vector<Document> = StickerSetCovered;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>set</mark> | [`StickerSet`](type/StickerSet) | Stickerset |
| <mark>packs</mark> | [`Vector<StickerPack>`](type/StickerPack) | Emoji information about every sticker in the stickerset |
| <mark>keywords</mark> | [`Vector<StickerKeyword>`](type/StickerKeyword) | Keywords for some or every sticker in the stickerset |
| <mark>documents</mark> | [`Vector<Document>`](type/Document) | Stickers |

---

## Type

[StickerSetCovered](type/StickerSetCovered)

---

## Example

```php
$stickerSetCovered = $client->stickerSetFullCovered(
	set : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 77,
		id : -1747745408589834476,
		access_hash : -5325849286694479904,
		title : 'jLCtQMf8WJUiqZgp',
		short_name : 'CmkJ742rZVyxzv0X',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'JV6fSI180lRMPctn',
			),
			$client->photoSize(
				type : 'bWtYjEQOoPe5qhXA',
				w : 75,
				h : 36,
				size : 86,
			),
			$client->photoCachedSize(
				type : 'PagezI7Jjn3Asw8O',
				w : 40,
				h : 23,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'XD6KTbqpJCeLyvH0',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'NKcn4YO3z5LEXwlm',
				w : 6,
				h : 62,
				sizes : array(70),
			),
			$client->photoPathSize(
				type : '6NFRrW24sSCkXYhL',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 14,
		thumb_version : 4,
		thumb_document_id : -5526034249955675252,
		count : 79,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'afiQ0HvVwXURmo8M',
			documents : array(-7659801573815938837),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : 5537656160215605281,
			keyword : array('mnuz7yUW0g4cbQ26'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -8183281717140786563,
		),
		$client->document(
			id : 2638884778918777027,
			access_hash : 314805993624839459,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 41,
			mime_type : '63JHX5yVrtLm0fUD',
			size : -1139073861050204728,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'uWI9OSc5VRQrDjGH',
				),
				$client->photoSize(
					type : 'CUg2Q1KHRJnZv374',
					w : 28,
					h : 22,
					size : 0,
				),
				$client->photoCachedSize(
					type : 'oOE5vtmUlX0au9Vk',
					w : 97,
					h : 98,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'n3ubmGlz61O0rokB',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'jZkKF46uwiDJ1CP2',
					w : 75,
					h : 87,
					sizes : array(34),
				),
				$client->photoPathSize(
					type : 'd03Wb2fpBuj6eFUC',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'GO0E3WsyNPpUV9nj',
					w : 40,
					h : 55,
					size : 5,
					video_start_ts : 16106.9111328125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 1381716571601180942,
					background_colors : array(14),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 1301119024468015976,
					background_colors : array(56),
				),
			),
			dc_id : 95,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 66,
					h : 91,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '3JM9t6Lkw50y8NBV',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 4,
						x : -1816347.8251953125,
						y : -450110.7744140625,
						zoom : -1943943.875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1036001.9951171875,
					w : 75,
					h : 31,
					preload_prefix_size : 27,
					video_start_ts : 466608.1083984375,
					video_codec : 'brsS9M0DHmnYt4Cy',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 90,
					title : 'jG4KJTXU7hrcY2OM',
					performer : 'wsDzrjnA8etloNmR',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'reJpxjbGfOZPKLW6',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'u4ZWaP3V02tMhrEO',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```