# stickerSetMultiCovered

**Description** : *Stickerset, with multiple stickers as preview*

**Layer** : 227

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
		installed_date : 55,
		id : -722785374014025541,
		access_hash : -7098275330935786919,
		title : 'n0HyIM3xzLOmfw1a',
		short_name : '4wMdyaJZI1jh67ut',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'q9fFCsDvhJNlarGT',
			),
			$client->photoSize(
				type : '5q8LQF7xVEbIYcWj',
				w : 66,
				h : 32,
				size : 72,
			),
			$client->photoCachedSize(
				type : 'doFZ1jnKkcNJmpWC',
				w : 14,
				h : 88,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'P1hj7egYcIuEdCfv',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'Zy2B3HWornALxNRs',
				w : 18,
				h : 96,
				sizes : array(2),
			),
			$client->photoPathSize(
				type : 'gj5G4Y3Zy2w7TaVB',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 78,
		thumb_version : 12,
		thumb_document_id : 3890786361759887342,
		count : 58,
		hash : 0,
	),
	covers : array(
		$client->documentEmpty(
			id : 453890857670909605,
		),
		$client->document(
			id : 8451238401968014112,
			access_hash : 502177696981741039,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 20,
			mime_type : 'QDH30VKvEzqJMxrl',
			size : 8967881832071568472,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'd43eXrWvo51qjJCB',
				),
				$client->photoSize(
					type : 'JHmePC9uMYOdLn1G',
					w : 4,
					h : 47,
					size : 31,
				),
				$client->photoCachedSize(
					type : 'oSIVEebKNM9Q2uh1',
					w : 66,
					h : 51,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '2vCpJauzKUi4MPTB',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '57COrVuPUfHDgmj4',
					w : 92,
					h : 6,
					sizes : array(73),
				),
				$client->photoPathSize(
					type : '6TZFUa421omfCxbR',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '67h90uGURrIjmwO4',
					w : 79,
					h : 32,
					size : 7,
					video_start_ts : -1755199.5244140625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 8212130744915431201,
					background_colors : array(43),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -6784967000604818093,
					background_colors : array(30),
				),
			),
			dc_id : 20,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 67,
					h : 34,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'gbeOWdofiN1V0APJ',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 49,
						x : -997954.6796875,
						y : 421903.052734375,
						zoom : -1263081.255859375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1341562.8974609375,
					w : 77,
					h : 49,
					preload_prefix_size : 79,
					video_start_ts : 233653.3125,
					video_codec : 'JPxCTX1rdu35ceHz',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 63,
					title : 'pBT7ydRm0ZtDfAP3',
					performer : 'pGCeDEV8Tkh0Wyz9',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'Z8fQVLdKrFDg4EN5',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'cew5sq1xoRJQtbhj',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```