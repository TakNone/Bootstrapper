# messages.stickerSet

**Description** : *Stickerset and stickers inside it*

**Layer** : 211

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
		installed_date : 55,
		id : -9117602971434550687,
		access_hash : -5496522419617897188,
		title : '7cWsP8yAIimq5Eup',
		short_name : 'CqR3NlPI2fczWYxw',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'whtYXxZdmBcnJVA9',
			),
			$client->photoSize(
				type : 'suJxjzMQtc4d3BUa',
				w : 77,
				h : 62,
				size : 79,
			),
			$client->photoCachedSize(
				type : 'ij6rewn9YGMSH3co',
				w : 34,
				h : 57,
				bytes : '?,??LiveProtox?/',
			),
			$client->photoStrippedSize(
				type : '2Lh8tU6qkf4G5nZz',
				bytes : 'jk?δLiveProto?M?g',
			),
			$client->photoSizeProgressive(
				type : 'hsUcQlna6N4fGIqj',
				w : 94,
				h : 85,
				sizes : array(29),
			),
			$client->photoPathSize(
				type : '4wZcUSRjrI9Me0tk',
				bytes : '޲??ZLiveProto?/Ă9',
			),
		),
		thumb_dc_id : 91,
		thumb_version : 36,
		thumb_document_id : 5955645285104393231,
		count : 18,
		hash : 32,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'YEUG1K7uTkBFzMg8',
			documents : array(-5054642046117412262),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : -4136800256139512598,
			keyword : array('9ULTMS5aFwO7nZdv'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -6442188352475177507,
		),
		$client->document(
			id : -977767517912642590,
			access_hash : 6165295799895780895,
			file_reference : '?gW??LiveProto"??',
			date : 91,
			mime_type : 'son7FDyABfO2XCec',
			size : -4262019530936026133,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'oSvYX05LHnOpeMiu',
				),
				$client->photoSize(
					type : 'QFTaqhybKJDCB3t1',
					w : 74,
					h : 47,
					size : 39,
				),
				$client->photoCachedSize(
					type : 'vIoV539ZELRqNpHy',
					w : 99,
					h : 100,
					bytes : '????LiveProto?#\'?',
				),
				$client->photoStrippedSize(
					type : 'An9sM5tp7CXhOfau',
					bytes : '?77?LiveProto?O<W',
				),
				$client->photoSizeProgressive(
					type : 'zTCdNuAZcvBIJO5U',
					w : 97,
					h : 7,
					sizes : array(6),
				),
				$client->photoPathSize(
					type : 'ah8UPO9B2FMTtcZX',
					bytes : '???LiveProto???X?',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'AVofdyrQjWzT7uEq',
					w : 73,
					h : 56,
					size : 61,
					video_start_ts : 1214554.0517578125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 4062674714320286401,
					background_colors : array(75),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 5060098816841628882,
					background_colors : array(64),
				),
			),
			dc_id : 71,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 48,
					h : 80,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'ath85fMg1UB29JCu',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1172463.7900390625,
					w : 53,
					h : 33,
					preload_prefix_size : 90,
					video_start_ts : 347760.9140625,
					video_codec : 'QEGYfgLUOBvqwNMJ',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 57,
					title : 'XUuQfA5FOol0yhIL',
					performer : '6MteQ5KFAm9yVC8x',
					waveform : '???LiveProto?;??',
				),
				$client->documentAttributeFilename(
					file_name : 'FPdVlWGXx4uchrtk',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'uoy9xADcSHqC07d8',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```