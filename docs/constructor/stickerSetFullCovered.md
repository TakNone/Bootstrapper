# stickerSetFullCovered

**Description** : *Stickerset preview with all stickers of the stickerset included\.
Currently used only for custom emoji stickersets, to avoid a further call to messages\.getStickerSet*

**Layer** : 229

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
		installed_date : 45,
		id : 9062963122627547138,
		access_hash : -7734391600313438562,
		title : 'QUKmCHRW2jSgIfZ0',
		short_name : 'MaYBhnIWmyHv6SlU',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'bTQEXIyqU3jJVs4l',
			),
			$client->photoSize(
				type : 'XeCrvf50O2lRjqbI',
				w : 80,
				h : 88,
				size : 45,
			),
			$client->photoCachedSize(
				type : '2rpKVkqXj4PN9EBW',
				w : 92,
				h : 54,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : '82FxJ4dtTYyOickB',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'lp6usJvrWHVPd9j5',
				w : 37,
				h : 78,
				sizes : array(48),
			),
			$client->photoPathSize(
				type : 'VWXltEmDoi8zhAPb',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 5,
		thumb_version : 98,
		thumb_document_id : 8996582266107806481,
		count : 60,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : '6JFLe2So95VOu34Z',
			documents : array(-119644832347068448),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : 6245997838310638362,
			keyword : array('pA2YOrEFe8LSB4xg'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -4588525019548403235,
		),
		$client->document(
			id : -4054711760794879606,
			access_hash : -8932555181035811875,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 14,
			mime_type : 'xb3uOFVZiQ4e5Kjg',
			size : 2644268685903723618,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'JdjThmsq4FkvWB5y',
				),
				$client->photoSize(
					type : 'KTUiHZxMX6hjmClN',
					w : 34,
					h : 58,
					size : 31,
				),
				$client->photoCachedSize(
					type : 'jUP9o3qlTieQFADa',
					w : 18,
					h : 87,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'RsrSdOElCmF4ftQW',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '2IK3Ow5oEuPW9D0v',
					w : 35,
					h : 51,
					sizes : array(21),
				),
				$client->photoPathSize(
					type : 'Ty96nUmuYOL4Jhve',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'WGyEDTKgLkQt4Vz8',
					w : 87,
					h : 29,
					size : 55,
					video_start_ts : 116159.7236328125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -4520344036429842714,
					background_colors : array(51),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -8612656228029565089,
					background_colors : array(63),
				),
			),
			dc_id : 20,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 64,
					h : 16,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'm4VPT5DURdcrjblY',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 70,
						x : 1891706.6962890625,
						y : -796637.171875,
						zoom : 2078167.4072265625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1338391.8505859375,
					w : 29,
					h : 17,
					preload_prefix_size : 32,
					video_start_ts : -257432.8583984375,
					video_codec : 'V36kePQmyxDUK90J',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 78,
					title : 'Wu6vmt2wGdy8SMrX',
					performer : 'uokA3SRVjMGdy0nQ',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '0MynQA6TzqbhJIeV',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'vjFUuLirsgnOaX6y',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```