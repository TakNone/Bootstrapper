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
		installed_date : 3,
		id : 8255370004494340972,
		access_hash : 5488559247174315274,
		title : '0taD7Q1bxw4dnAvG',
		short_name : 'Khyrdn1x79U0D5IZ',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'ZDcKbst4XzjmyiN6',
			),
			$client->photoSize(
				type : 'vcgLAK0p7wOERIfY',
				w : 12,
				h : 28,
				size : 99,
			),
			$client->photoCachedSize(
				type : 'p3qH1QxZoh8TMzgk',
				w : 76,
				h : 71,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'icRptFuHGakOsywM',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'ioQTURgOd45qHNG9',
				w : 11,
				h : 64,
				sizes : array(52),
			),
			$client->photoPathSize(
				type : 'Y6rW58G1faXKleOL',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 4,
		thumb_version : 77,
		thumb_document_id : -9087121115647483425,
		count : 36,
		hash : 72,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'CBxrylVS7kchIUJ3',
			documents : array(-3402468012207596120),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : -1825545487698928877,
			keyword : array('IFNEuP7jGKQJxZ2W'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -2183313472505577090,
		),
		$client->document(
			id : -5946328051726956453,
			access_hash : 3130068645014612870,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 93,
			mime_type : '1tPpAUmakQfl8Ozn',
			size : -479680277794083612,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '8y0xDHrcAfPtVCER',
				),
				$client->photoSize(
					type : 'PeoKbfvX5NlED10C',
					w : 21,
					h : 11,
					size : 77,
				),
				$client->photoCachedSize(
					type : 'zSRkvIxNMWA8qrtZ',
					w : 22,
					h : 37,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'uL92Epazm4OqxyZP',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'd4of6NOeg0S35hZn',
					w : 45,
					h : 62,
					sizes : array(48),
				),
				$client->photoPathSize(
					type : 'guZNPjCX8RQKL7EW',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'noEYyWaqNPRQlLZV',
					w : 47,
					h : 38,
					size : 61,
					video_start_ts : 845989.9697265625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 4600051288293593764,
					background_colors : array(65),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -7989745765148915945,
					background_colors : array(19),
				),
			),
			dc_id : 27,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 86,
					h : 97,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'owgHxcmaAhzlkbps',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1828.6611328125,
					w : 71,
					h : 54,
					preload_prefix_size : 85,
					video_start_ts : -1172072.2109375,
					video_codec : '14CThWF3mUES6c7y',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 72,
					title : 'LTZnBYa5srH4207R',
					performer : 'vNwZArzFk6HQ2MWu',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 's8ACMjroUc1qtQy3',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '0r7UGTY9zmhAKbjL',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```