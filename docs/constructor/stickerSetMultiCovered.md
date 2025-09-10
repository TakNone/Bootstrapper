# stickerSetMultiCovered

**Description** : *Stickerset, with multiple stickers as preview*

**Layer** : 214

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
		installed_date : 5,
		id : 3465715748092404813,
		access_hash : 6427231460496152003,
		title : 'qjmv9g0p4ke2f137',
		short_name : 'qxDmZUkBfF3nQXzM',
		thumbs : array(
			$client->photoSizeEmpty(
				type : '2dVh3XKCY5rxURiQ',
			),
			$client->photoSize(
				type : 'amIcot7qWNr6wDlh',
				w : 68,
				h : 17,
				size : 5,
			),
			$client->photoCachedSize(
				type : 'vmP8MEJOist1gcxG',
				w : 0,
				h : 15,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'NgRQDBefE1hoIGr6',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'RWePgmQFdCyGK7Hs',
				w : 86,
				h : 62,
				sizes : array(8),
			),
			$client->photoPathSize(
				type : 'CkZ3dvHuOSDwWTnR',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 35,
		thumb_version : 2,
		thumb_document_id : -1667886571429341192,
		count : 35,
		hash : 56,
	),
	covers : array(
		$client->documentEmpty(
			id : -1944665091843124205,
		),
		$client->document(
			id : 8478068965860841162,
			access_hash : -5989843979884364315,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 2,
			mime_type : 'A3oQspZlfhzOYeVJ',
			size : -6842955073026530169,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'RlfY9v2neZs6Q7uU',
				),
				$client->photoSize(
					type : 'YZgl4i5wVGxzfHKm',
					w : 44,
					h : 17,
					size : 71,
				),
				$client->photoCachedSize(
					type : 'sboZqC3Fjy47rwiu',
					w : 26,
					h : 53,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'rfi2ZEUnhmRu8tjY',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'yECn0vrRgfKa69Qb',
					w : 99,
					h : 37,
					sizes : array(62),
				),
				$client->photoPathSize(
					type : 'Aq4wjisd82G6mu10',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 's1I36UJ2OVSNEGtK',
					w : 47,
					h : 20,
					size : 88,
					video_start_ts : -1178262.3837890625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 8925485976833861880,
					background_colors : array(32),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 7691606506821617783,
					background_colors : array(98),
				),
			),
			dc_id : 33,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 81,
					h : 33,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'g2MeT8xUKa1ySRo0',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -554396.111328125,
					w : 58,
					h : 60,
					preload_prefix_size : 43,
					video_start_ts : 1072028.7822265625,
					video_codec : 'R6GpCswr0oXzcEn7',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 14,
					title : 'Jx5gvX4MYhduEzKP',
					performer : '5HPhqr7ivkzwZMaC',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'xjzCuSRHnEWLsklq',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'EO5fpziArVSB0dow',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```