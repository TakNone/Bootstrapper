# stickerSetFullCovered

**Description** : *Stickerset preview with all stickers of the stickerset included\.
Currently used only for custom emoji stickersets, to avoid a further call to messages\.getStickerSet*

**Layer** : 214

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
		installed_date : 17,
		id : 6651174329617935178,
		access_hash : -2483077498601314247,
		title : 'Ir7Za62z1SkeWwqC',
		short_name : 'urXMgbYaRc3kFDh2',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'ieTzxW0n25UPH6Z7',
			),
			$client->photoSize(
				type : 'Kk5MjtyAvdwC61RZ',
				w : 89,
				h : 38,
				size : 52,
			),
			$client->photoCachedSize(
				type : '82gSQclExN5hqopd',
				w : 83,
				h : 34,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'LiQufmlT8YRxW3A0',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'akZB8UfnmQPvgri3',
				w : 28,
				h : 30,
				sizes : array(40),
			),
			$client->photoPathSize(
				type : 'VNQSUwbg0X8yhRFJ',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 6,
		thumb_version : 51,
		thumb_document_id : 212722546166543897,
		count : 30,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'c5VqL9lSxQN6nPHC',
			documents : array(214042237352328252),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : 4190453128220160845,
			keyword : array('TQmDvOKyhljeX4A6'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : 481242839896970122,
		),
		$client->document(
			id : -6718466640158874368,
			access_hash : 1932049202142817259,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 22,
			mime_type : 'D8mLgsnpXPoz3x1Z',
			size : -5819363237389496893,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'FlymQGnwaCuitUf6',
				),
				$client->photoSize(
					type : 'Mx2GCuWQUAbthOmK',
					w : 1,
					h : 74,
					size : 61,
				),
				$client->photoCachedSize(
					type : 'hgvClpxJeiaoYyR6',
					w : 63,
					h : 1,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'brQAwpiLRXJz9WSZ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'LMGjQeqPEbd3hpAw',
					w : 64,
					h : 72,
					sizes : array(91),
				),
				$client->photoPathSize(
					type : 'EdYCJ60exfXRWZSq',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'tjVDS7UI6od8X4JO',
					w : 46,
					h : 44,
					size : 35,
					video_start_ts : -102510.9111328125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 8350103959592474620,
					background_colors : array(88),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -2016549174901787952,
					background_colors : array(35),
				),
			),
			dc_id : 46,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 100,
					h : 27,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'e1zfF6d0Hroi8AOJ',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 828131.990234375,
					w : 48,
					h : 18,
					preload_prefix_size : 8,
					video_start_ts : -394349.5576171875,
					video_codec : 'isFH7xzdyTIBQ5Nh',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 29,
					title : 'Q2GK6UFnlZV0agMD',
					performer : 'Brz16uFvWRLSQPZm',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'dqrNjoBwUXet8MDO',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'fWg6UujCSTJkHAQn',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```