# users.savedMusic

**Description** : *List of songs currently pinned on a user&#039;s profile, see here &raquo; for more info*

**Layer** : 227

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
	count : 32,
	documents : array(
		$client->documentEmpty(
			id : -5289089088580629298,
		),
		$client->document(
			id : 5903773866718924684,
			access_hash : 1817993839002189361,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 18,
			mime_type : 'xXSIWYptAq4Hie0P',
			size : 2699207024283951169,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'LfsmKiIgZr9EUMCX',
				),
				$client->photoSize(
					type : 'xRFksKdbnljXvt54',
					w : 19,
					h : 89,
					size : 30,
				),
				$client->photoCachedSize(
					type : '85oJmnw2GsKt014L',
					w : 76,
					h : 23,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'VTveKNJ3DmzObL2u',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'lT3Nt1f4Voq7M0yd',
					w : 65,
					h : 35,
					sizes : array(98),
				),
				$client->photoPathSize(
					type : 'EwnTeQUGkadLNxj5',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'vVUpZNAjT0e73nr9',
					w : 87,
					h : 58,
					size : 20,
					video_start_ts : 259693.1396484375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -6598063942514272786,
					background_colors : array(56),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -2432029801468407092,
					background_colors : array(91),
				),
			),
			dc_id : 62,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 61,
					h : 51,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Wjuvk8x2XK5ZaTsC',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 55,
						x : -113799.146484375,
						y : 1821769.07421875,
						zoom : -245025.779296875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1010478.431640625,
					w : 13,
					h : 63,
					preload_prefix_size : 56,
					video_start_ts : 1851699.1787109375,
					video_codec : 'EYtRTJpaC1gjyuXz',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 96,
					title : 'dwycjgSeCzGXY3Ix',
					performer : 'U83oVOfwr27Wiqxz',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '1ugAPYXmDOsNwqeh',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'oQRu1eBCJtriKdsX',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```