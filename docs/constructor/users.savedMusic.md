# users.savedMusic

**Description** : *List of songs currently pinned on a user&#039;s profile, see here &raquo; for more info*

**Layer** : 233

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
	count : 100,
	documents : array(
		$client->documentEmpty(
			id : -1347251139775209022,
		),
		$client->document(
			id : -3070628982679445427,
			access_hash : -2580961786404384129,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 7,
			mime_type : 'Y9x7noeWC0Gd1VBa',
			size : 3874250849448726264,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'rlP8tEnCVu73gQkj',
				),
				$client->photoSize(
					type : 'ox9u78X6dEZzDYSJ',
					w : 26,
					h : 83,
					size : 42,
				),
				$client->photoCachedSize(
					type : 'bwBSFsQ75kZmUHr4',
					w : 39,
					h : 10,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'EZL9Chq5ynpXObkw',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '2tuAFQwpbR1ZL3oG',
					w : 31,
					h : 87,
					sizes : array(90),
				),
				$client->photoPathSize(
					type : '0y5SYzMd14OLKnIN',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '8XqtsnIfw0DRuT4c',
					w : 88,
					h : 83,
					size : 49,
					video_start_ts : 71146.2958984375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -333097623928246188,
					background_colors : array(76),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 497594877684121932,
					background_colors : array(95),
				),
			),
			dc_id : 70,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 0,
					h : 86,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'jh5R6SNTLwEmXleP',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 83,
						x : 1222709.876953125,
						y : -1796370.2548828125,
						zoom : 104482.259765625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1165540.71484375,
					w : 37,
					h : 39,
					preload_prefix_size : 98,
					video_start_ts : 1558506.9052734375,
					video_codec : 'jCyd6ucDn2mgeNzs',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 67,
					title : 'jtoJ8zduCVp6YZLe',
					performer : 'ONAoeRbLDvJhwzKQ',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'g6p183bCEdUesHOD',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'wWAgbYuSyJnpK790',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```