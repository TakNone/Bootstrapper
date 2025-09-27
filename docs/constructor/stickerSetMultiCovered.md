# stickerSetMultiCovered

**Description** : *Stickerset, with multiple stickers as preview*

**Layer** : 216

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
		installed_date : 78,
		id : 864538760365849185,
		access_hash : -2289640849110749002,
		title : '2HynIVRf0c8XW1S7',
		short_name : 'v75EZlCWjfsyQ9tq',
		thumbs : array(
			$client->photoSizeEmpty(
				type : '0Tn8lfF273WkRHMU',
			),
			$client->photoSize(
				type : 'iotdPxQsYTKna9IU',
				w : 58,
				h : 75,
				size : 41,
			),
			$client->photoCachedSize(
				type : 'ScCxN5MsRuD216yf',
				w : 24,
				h : 52,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'K0xEsdFLtHUOG6Bq',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'FoCjdgfYh9I85ObV',
				w : 44,
				h : 71,
				sizes : array(71),
			),
			$client->photoPathSize(
				type : '1a7fnA4jDXhLilpF',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 8,
		thumb_version : 50,
		thumb_document_id : 6842642528786172228,
		count : 34,
		hash : 0,
	),
	covers : array(
		$client->documentEmpty(
			id : 3751475802671207339,
		),
		$client->document(
			id : -1292476345935221423,
			access_hash : 5131593958553398488,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 98,
			mime_type : 'aLMYbs7NWuGjryIg',
			size : -3004711003441499192,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'wBzensqxOrA6lCLf',
				),
				$client->photoSize(
					type : 'IsNB7EAoCFUHOTap',
					w : 73,
					h : 5,
					size : 84,
				),
				$client->photoCachedSize(
					type : '3EXmsYyvLliQNOgZ',
					w : 77,
					h : 17,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'zP1ZCilFAcIk9O0X',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'ef4smnA7DZU0poIK',
					w : 15,
					h : 28,
					sizes : array(31),
				),
				$client->photoPathSize(
					type : 'leKM2IphbEL3ZuQT',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'f1pqhgUFIadlNAxT',
					w : 12,
					h : 68,
					size : 11,
					video_start_ts : -158029.140625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 4385582225304262785,
					background_colors : array(8),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 1990776197516094400,
					background_colors : array(27),
				),
			),
			dc_id : 74,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 85,
					h : 45,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'v6NRbisM4ktHc2zT',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1182380.2548828125,
					w : 24,
					h : 72,
					preload_prefix_size : 60,
					video_start_ts : -1472585.4541015625,
					video_codec : 'eT1vxht6ZYVpj0cK',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 13,
					title : 'wANQjB6iUmY5Eafe',
					performer : 'xyIwS8WAQEMHtROq',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'wKlFRNSoMmhEUgLr',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'zFkm1gHlMwtadDQS',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```