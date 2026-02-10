# stickerSetFullCovered

**Description** : *Stickerset preview with all stickers of the stickerset included\.
Currently used only for custom emoji stickersets, to avoid a further call to messages\.getStickerSet*

**Layer** : 222

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
		installed_date : 65,
		id : -3143335876600032908,
		access_hash : -3592766692554231981,
		title : 'mu7GAwZFM4XTeqKB',
		short_name : 'gSONCmziHbBKIraE',
		thumbs : array(
			$client->photoSizeEmpty(
				type : '8cZ5xpjYVOWPng0l',
			),
			$client->photoSize(
				type : '8chKmyQboCN0B5l1',
				w : 4,
				h : 13,
				size : 76,
			),
			$client->photoCachedSize(
				type : 'OfZJ7iy6UwFPStBk',
				w : 82,
				h : 61,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'seAOjaY0tvu4VKzl',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'izGDfmJBLatxUlkV',
				w : 38,
				h : 39,
				sizes : array(69),
			),
			$client->photoPathSize(
				type : 'gwQGY3iLWuMJ8zaf',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 21,
		thumb_version : 65,
		thumb_document_id : 3577043651868203624,
		count : 0,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'LoGYgiswq1bkCrUV',
			documents : array(-2008534797700764251),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : -6713517836552970544,
			keyword : array('vuFcYR4g9npzwMZJ'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : 8310237530204393978,
		),
		$client->document(
			id : -4283642508266479475,
			access_hash : 1116265571684040752,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 29,
			mime_type : 'wIW6nd12eJLbgraP',
			size : 4751039512815318680,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'hmo4k9Hg2YPORbjl',
				),
				$client->photoSize(
					type : 'rXuPvDgRkZh5zV04',
					w : 70,
					h : 20,
					size : 7,
				),
				$client->photoCachedSize(
					type : '4ezypD3UOgdaqZWG',
					w : 66,
					h : 25,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'zuHot8yj05JWEAI6',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'hzBnCv3g5Xp2d1wK',
					w : 0,
					h : 27,
					sizes : array(0),
				),
				$client->photoPathSize(
					type : 'lOW3P1Xa7BLE8kfM',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'q46xrBZQLdtS0G8N',
					w : 79,
					h : 40,
					size : 10,
					video_start_ts : -2067.84375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -1654887990263815928,
					background_colors : array(30),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 2370779187875331598,
					background_colors : array(43),
				),
			),
			dc_id : 36,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 75,
					h : 21,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'ITt3ehnxEOzFyoVr',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 60,
						x : 1546563.685546875,
						y : 603323.8828125,
						zoom : -642567.046875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -637682.1318359375,
					w : 37,
					h : 1,
					preload_prefix_size : 71,
					video_start_ts : 1002135.28515625,
					video_codec : 'uGMe2zaYk9EnINQB',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 27,
					title : 'm15i63nxhPHzW9XD',
					performer : '6izHqQkO3G7vbaMf',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'cvtBGJR8bjEWpsVY',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '3rNIqQvXBgeioxOL',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```