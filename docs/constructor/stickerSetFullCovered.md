# stickerSetFullCovered

**Description** : *Stickerset preview with all stickers of the stickerset included\.
Currently used only for custom emoji stickersets, to avoid a further call to messages\.getStickerSet*

**Layer** : 216

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
		installed_date : 47,
		id : 9089056126922522704,
		access_hash : 2114244053344275895,
		title : 'wNqUvjestB081WFR',
		short_name : 'YG6tH8Kz542Mq30r',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'uhQLG1Fq8xaPl7EO',
			),
			$client->photoSize(
				type : 'wi2pU735cxT4YOl8',
				w : 94,
				h : 12,
				size : 84,
			),
			$client->photoCachedSize(
				type : 'dER6MliepYPFUJco',
				w : 3,
				h : 86,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'N3YCFoeGAHifI5tg',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'hWj2QprZqUs0yuix',
				w : 1,
				h : 30,
				sizes : array(21),
			),
			$client->photoPathSize(
				type : 'tdfhlqcNmOAD25Mo',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 45,
		thumb_version : 71,
		thumb_document_id : 3289069496093718616,
		count : 4,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'fADyu6WOi5dZ32zo',
			documents : array(2955580945383863998),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : -1034020724250588019,
			keyword : array('o5GtvmrVywIDLxan'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -5048670909193784072,
		),
		$client->document(
			id : -7588716676901088208,
			access_hash : 1438807123385848704,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 11,
			mime_type : 'EP04VqRpclg8JCMh',
			size : -3107847050963915067,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'oNS7POT4QZFC3znR',
				),
				$client->photoSize(
					type : '8PslZXIHF2ae3BDr',
					w : 92,
					h : 24,
					size : 25,
				),
				$client->photoCachedSize(
					type : 'pIbTfeh8UaQXECN6',
					w : 51,
					h : 25,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '3z7NgnZ2TJc5p0dy',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'Q34FSA1qBvEOJDH7',
					w : 28,
					h : 57,
					sizes : array(75),
				),
				$client->photoPathSize(
					type : 'oViSX0QfWjpvsdaz',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'zEx2GBbUqsTY9Hfw',
					w : 7,
					h : 62,
					size : 21,
					video_start_ts : -1164480.64453125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 1842693265560170713,
					background_colors : array(23),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -218742844032830989,
					background_colors : array(71),
				),
			),
			dc_id : 45,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 19,
					h : 2,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'HgxVEIPdDQYk1oS8',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1072662.421875,
					w : 44,
					h : 54,
					preload_prefix_size : 11,
					video_start_ts : -1566171.23046875,
					video_codec : '0z2tIHNGFcyx8LgS',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 70,
					title : 'JnRt4r0gEkoKzYI9',
					performer : 'pcXU1xsEyG4PnOSL',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '0U7cSiTKdn6OeCr8',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'N6XDSp0UjcWInsbE',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```