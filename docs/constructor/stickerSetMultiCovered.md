# stickerSetMultiCovered

**Description** : *Stickerset, with multiple stickers as preview*

**Layer** : 218

```tl
stickerSetMultiCovered#3407e51b set:StickerSet covers:Vector<Document> = StickerSetCovered;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>set</mark> | [`StickerSet`](type/StickerSet) | Stickerset |
| <mark>covers</mark> | [`Vector<Document>`](type/Document) | Preview stickers |

---

## Type

[StickerSetCovered](type/StickerSetCovered)

---

## Example

```php
$stickerSetCovered = $client->stickerSetMultiCovered(
	set : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 12,
		id : -8157290030351398009,
		access_hash : 2829461684033040710,
		title : 'awXRoqBD07Wpmhz9',
		short_name : 'Ny49IHvgwfGqXZTF',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'r7whaXPJjHNVefxK',
			),
			$client->photoSize(
				type : 'DOX3kB7rTqQugI4z',
				w : 55,
				h : 10,
				size : 88,
			),
			$client->photoCachedSize(
				type : 'NPAS6GBjMzo3mieH',
				w : 88,
				h : 7,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'Hhf9XEr53kui07Uq',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'cVhjrQEkl5A3uU2N',
				w : 22,
				h : 70,
				sizes : array(75),
			),
			$client->photoPathSize(
				type : 'yQ2Vtbiq0dZ38Ea7',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 46,
		thumb_version : 31,
		thumb_document_id : -5051249082220140862,
		count : 96,
		hash : 0,
	),
	covers : array(
		$client->documentEmpty(
			id : -6016623564726828194,
		),
		$client->document(
			id : -9219415544370651475,
			access_hash : -8054126955727414781,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 1,
			mime_type : 'gyjxKhHQM3euARtm',
			size : -7313284012501620444,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'uxAmFtHjrgEciXIV',
				),
				$client->photoSize(
					type : 'pr4tkuxjVZJbMGPE',
					w : 34,
					h : 86,
					size : 77,
				),
				$client->photoCachedSize(
					type : 'aiVvglGN5ukDmf47',
					w : 78,
					h : 89,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '4AhOIgV7wmkBC8Tu',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'OzDT4rxogfbVPSRc',
					w : 34,
					h : 18,
					sizes : array(51),
				),
				$client->photoPathSize(
					type : 'dWxCAOlDGyBivbhV',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '9PJA5oBazCEgrTSj',
					w : 54,
					h : 85,
					size : 87,
					video_start_ts : 348814.259765625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 1934440351749857419,
					background_colors : array(79),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -1097481470564278073,
					background_colors : array(56),
				),
			),
			dc_id : 50,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 93,
					h : 23,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'iNa5w480MRyjBZxT',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 12,
						x : -1314681.5595703125,
						y : 1813011.1875,
						zoom : -270767.939453125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 96512.6982421875,
					w : 94,
					h : 91,
					preload_prefix_size : 69,
					video_start_ts : -1696828.7841796875,
					video_codec : 'Y5wPiezyfZdKHuh9',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 98,
					title : 'lf8wxjHauqRNGhCU',
					performer : 'Bk2i9W15C3XqfKdg',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'Eh5BWFqXbsVLjZe4',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'UWbheD0v5Apjycsx',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```