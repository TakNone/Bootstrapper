# users.savedMusic

**Description** : *List of songs currently pinned on a user&#039;s profile, see here &raquo; for more info*

**Layer** : 218

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
	count : 54,
	documents : array(
		$client->documentEmpty(
			id : -7029063351112579826,
		),
		$client->document(
			id : 1692733926539509147,
			access_hash : -5466315271216038332,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 14,
			mime_type : 'D79jm4eFZK2pnLg6',
			size : 2304191054674528927,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '1GN7EIHhb0rnKel5',
				),
				$client->photoSize(
					type : 'abRAlv4i1K2Zj0Uf',
					w : 72,
					h : 100,
					size : 42,
				),
				$client->photoCachedSize(
					type : 'JKTmdRN5L6xYGjwZ',
					w : 75,
					h : 55,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'KovMrmwECtpuiNFe',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'B5JyFmear4VhjS2M',
					w : 53,
					h : 72,
					sizes : array(97),
				),
				$client->photoPathSize(
					type : '8KjAxht9Sy0VreQB',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'Hh46fRnijBKOrS9C',
					w : 17,
					h : 46,
					size : 75,
					video_start_ts : -2073990.2841796875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 6703279512154211974,
					background_colors : array(35),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -1855535192264109265,
					background_colors : array(54),
				),
			),
			dc_id : 67,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 32,
					h : 39,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'oR5FGPTWcuKqnglH',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 39,
						x : 1507498.7666015625,
						y : 1829518.3603515625,
						zoom : 89942.6953125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1496848.25,
					w : 10,
					h : 82,
					preload_prefix_size : 39,
					video_start_ts : 350969.935546875,
					video_codec : '4Icd7E3hsoiR1b6e',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 9,
					title : 'fEOnH6j3DpiQzKJY',
					performer : 'UGBoV8qnTtNCKdy4',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '4jeBo7w8rpINLTFz',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'cVPvf95DyUsgRKkY',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```