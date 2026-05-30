# users.savedMusic

**Description** : *List of songs currently pinned on a user&#039;s profile, see here &raquo; for more info*

**Layer** : 225

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
	count : 62,
	documents : array(
		$client->documentEmpty(
			id : 5788572421271416028,
		),
		$client->document(
			id : 4209140405574714870,
			access_hash : -231065145031774935,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 96,
			mime_type : 'KiUSWO1afdQ9FAzt',
			size : -5362910561212601107,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'xwVRQFWsfgY5OjbL',
				),
				$client->photoSize(
					type : 'mcMfULqtPHDpbzlT',
					w : 11,
					h : 50,
					size : 78,
				),
				$client->photoCachedSize(
					type : '4Uqxm5zQy9KTDpLt',
					w : 46,
					h : 92,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'jbFrXLoaplyM2H1T',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'lPf4rCbcRY8XL2Qz',
					w : 40,
					h : 78,
					sizes : array(5),
				),
				$client->photoPathSize(
					type : '9hr6a0SHmVBJX14O',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'wMc1PB47qCsto9ni',
					w : 22,
					h : 79,
					size : 89,
					video_start_ts : -924365.41015625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 7856460724397485666,
					background_colors : array(5),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 9102100241816736322,
					background_colors : array(38),
				),
			),
			dc_id : 87,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 93,
					h : 67,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'O98T5HS2pUaFXP6A',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 100,
						x : 1150590.017578125,
						y : 1172553.2880859375,
						zoom : 1738613.6396484375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -6769.5205078125,
					w : 21,
					h : 94,
					preload_prefix_size : 41,
					video_start_ts : 1922784.580078125,
					video_codec : 'SV86ZwREHjt3TKp7',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 23,
					title : 'yC4hBJVz086LFPfj',
					performer : '6BcI38phoKiqaGwr',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'R0rsLBCboekXmZWv',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'KuPebGqp1iCOflhg',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```