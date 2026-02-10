# messages.stickerSet

**Description** : *Stickerset and stickers inside it*

**Layer** : 222

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
		installed_date : 12,
		id : -7621627488066336601,
		access_hash : 3018839208324716881,
		title : 'j8aGP4CSnBzTYXof',
		short_name : 'VUayeLGTvRYD34BX',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'RkCarbEJ3UHDIq2f',
			),
			$client->photoSize(
				type : 'ephbRz82MrFJVEoU',
				w : 23,
				h : 18,
				size : 48,
			),
			$client->photoCachedSize(
				type : 'TK7y3lErRn0IMGZC',
				w : 85,
				h : 5,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'iTbEr25uqRag8tSx',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'V70awtsmcn6HPUNh',
				w : 35,
				h : 29,
				sizes : array(64),
			),
			$client->photoPathSize(
				type : 'iVfrbDN3yd8eASha',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 34,
		thumb_version : 64,
		thumb_document_id : 5933753933608723664,
		count : 57,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : '605yiYc9aXm3woUO',
			documents : array(-8041639322603660201),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : -2579277047160446435,
			keyword : array('95LD2VFP1qkMEcnY'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : 2814670183714184649,
		),
		$client->document(
			id : -6192086537637614675,
			access_hash : -7481408236774330936,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 64,
			mime_type : 'yQNKzBrFT9pw3Doe',
			size : 3574794001111151390,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'eUKNgyBmkME8jPH5',
				),
				$client->photoSize(
					type : '5oEYxHmkfjdwsh6L',
					w : 74,
					h : 14,
					size : 37,
				),
				$client->photoCachedSize(
					type : '5MteT89cVEgosuQf',
					w : 92,
					h : 19,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '1WwrULfZKhCqusnR',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'ybT6JvnjtUYXolNK',
					w : 36,
					h : 92,
					sizes : array(97),
				),
				$client->photoPathSize(
					type : 'YBPWziSADtx9qMGK',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'B81GSFjcWLluUyXY',
					w : 61,
					h : 89,
					size : 3,
					video_start_ts : 1767398.439453125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 8050034455338163083,
					background_colors : array(36),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -5773011050608582462,
					background_colors : array(0),
				),
			),
			dc_id : 18,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 16,
					h : 39,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'zyDSLH8N0eshi3EI',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 0,
						x : 1811532.435546875,
						y : 156861.44140625,
						zoom : 413084.7861328125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1631689.544921875,
					w : 73,
					h : 62,
					preload_prefix_size : 53,
					video_start_ts : 1669709.576171875,
					video_codec : 'oizkvulAPm759pZ2',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 78,
					title : 'xByI2RZeHOnALEm6',
					performer : 'B9gdszmtbKeQjHMh',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'vyKRDCaMbNEpT6ir',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'LiF1uS2bmNQUJfCz',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```