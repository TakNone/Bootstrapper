# users.savedMusic

**Description** : *List of songs currently pinned on a user&#039;s profile, see here &raquo; for more info*

**Layer** : 229

```tl
users.savedMusic#34a2f297 count:int documents:Vector<Document> = users.SavedMusic;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of songs (can be bigger than documents depending on the passed limit, and the default maximum limit in which case pagination is required) |
| <mark>documents</mark> | [`Vector<Document>`](type/Document) | Songs |

---

## Type

[users.SavedMusic](type/users.SavedMusic)

---

## Example

```php
$usersSavedMusic = $client->users->savedMusic(
	count : 18,
	documents : array(
		$client->documentEmpty(
			id : -994280060095632404,
		),
		$client->document(
			id : -6014498475796019645,
			access_hash : 1921185328335974481,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 39,
			mime_type : 'rvE3z7QgBhD2m560',
			size : 8458779442861745132,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'NiL4YFjaVs5Cznw9',
				),
				$client->photoSize(
					type : 'afLxMd0qcSTEnGYu',
					w : 15,
					h : 80,
					size : 2,
				),
				$client->photoCachedSize(
					type : 'N1TM5ejYagFtQ6iu',
					w : 78,
					h : 88,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'uM6amXloAvdspTFx',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'sF7h3fu8zy29Kpon',
					w : 14,
					h : 92,
					sizes : array(77),
				),
				$client->photoPathSize(
					type : 'MaoGlDECnv35czSd',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'wXIT3RPenWgYjKHo',
					w : 36,
					h : 65,
					size : 49,
					video_start_ts : -540886.2451171875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -5247864066989892279,
					background_colors : array(67),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 5657424981385742759,
					background_colors : array(34),
				),
			),
			dc_id : 64,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 83,
					h : 23,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'bHQyF3cuITCE8rW0',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 88,
						x : 1807689.013671875,
						y : 693459.818359375,
						zoom : 1491196.6298828125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -701622.5234375,
					w : 21,
					h : 94,
					preload_prefix_size : 51,
					video_start_ts : 394658.9716796875,
					video_codec : 'AxJifIwTBq2bcLPH',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 3,
					title : 'ytbZ83nuDTRKhUvA',
					performer : 'BekGtKHzgC4vWcUI',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'smTJdXyLHD9W4OhN',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'F9h10yRGENj4VeJa',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```