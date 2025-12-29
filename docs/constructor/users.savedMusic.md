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
	count : 63,
	documents : array(
		$client->documentEmpty(
			id : -6071203668967198220,
		),
		$client->document(
			id : -6628458013189571238,
			access_hash : -905989156581526951,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 23,
			mime_type : 'd8xjaT6PiGpJVAX0',
			size : -6610677854872734413,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'teIphXMwAJjFy19n',
				),
				$client->photoSize(
					type : 'VeK7X8l092jTDhEm',
					w : 9,
					h : 52,
					size : 60,
				),
				$client->photoCachedSize(
					type : 'FBSwaYzM9UhKTi4c',
					w : 6,
					h : 80,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'FN37Le2vglmYGCAO',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'RFfeZnMBhDyKqaP3',
					w : 45,
					h : 61,
					sizes : array(91),
				),
				$client->photoPathSize(
					type : 'jSVK2JIByhH869Yd',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'PCkhjKSZEtDf6MlW',
					w : 48,
					h : 58,
					size : 63,
					video_start_ts : -530040.333984375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 3063562832446345631,
					background_colors : array(66),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 206179382744558836,
					background_colors : array(9),
				),
			),
			dc_id : 29,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 64,
					h : 18,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'h4SdQkgTyLMim3Ij',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 59,
						x : -1489110.4609375,
						y : 1424076.1943359375,
						zoom : -1012295.8212890625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1849574.0126953125,
					w : 92,
					h : 98,
					preload_prefix_size : 98,
					video_start_ts : 1555779.212890625,
					video_codec : 'WMVHRrgup7Fei1tz',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 79,
					title : '6Aeq0D7hoFvQPGkr',
					performer : 'fgX2MuzP6hYGaI5n',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'hUPl2FN0KXmVJrAL',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'lzcaRgikCDseEjG2',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```