# webPageAttributeTheme

**Description** : *Page theme*

**Layer** : 233

```tl
webPageAttributeTheme#54b56617 flags:# documents:flags.0?Vector<Document> settings:flags.1?ThemeSettings = WebPageAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **documents** | [`flags.0?Vector<Document>`](type/Document) | Theme files |
| **settings** | [`flags.1?ThemeSettings`](type/ThemeSettings) | Theme settings |

---

## Type

[WebPageAttribute](type/WebPageAttribute)

---

## Example

```php
$webPageAttribute = $client->webPageAttributeTheme(
	documents : array(
		$client->documentEmpty(
			id : -543357766499678267,
		),
		$client->document(
			id : 4595892768789075757,
			access_hash : 7711402447807124432,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 44,
			mime_type : 'PdqDibkrhfm2e3LH',
			size : -5663741889491822638,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'pXE1j3DhB0YZqrbx',
				),
				$client->photoSize(
					type : 'X52HC4JBRK6id9af',
					w : 66,
					h : 60,
					size : 66,
				),
				$client->photoCachedSize(
					type : 'MDvk0hqceE8NT51P',
					w : 91,
					h : 78,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '5YpcDrWT8iN2awPo',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'HdpGL6QBm5DYqbTM',
					w : 81,
					h : 27,
					sizes : array(62),
				),
				$client->photoPathSize(
					type : '08vPwDSe6AXtcd3a',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'dIopT6VQxZlMi5Lw',
					w : 3,
					h : 45,
					size : 55,
					video_start_ts : 1539277.0068359375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 4187852605991255026,
					background_colors : array(20),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 6084838957556025910,
					background_colors : array(38),
				),
			),
			dc_id : 12,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 84,
					h : 37,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'wu6SGdKWIbstAok0',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 65,
						x : -1979093.7978515625,
						y : 1703998.2158203125,
						zoom : -408605.4296875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1977412.123046875,
					w : 64,
					h : 30,
					preload_prefix_size : 40,
					video_start_ts : 372973.625,
					video_codec : 'VUGsrnkDiNbqgwe2',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 57,
					title : '0mlRNEqFdG59azn7',
					performer : '8ZMwmS0lA9z6RjJg',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'rUmYgyJ0nWEuFNZP',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'MODkua8Hi4WEKX0Q',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	settings : $client->themeSettings(
		message_colors_animated : true,
		base_theme : $client->baseThemeClassic(),
		accent_color : 35,
		outbox_accent_color : 66,
		message_colors : array(85),
		wallpaper : $client->wallPaper(
			id : -5930577592098531210,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : 4865133662632699755,
			slug : 'H9tBd8kYLjQIow5u',
			document : $client->documentEmpty(
				id : 8864579690474170552,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 1,
				second_background_color : 12,
				third_background_color : 47,
				fourth_background_color : 51,
				intensity : 72,
				rotation : 16,
				emoticon : 'smx0r51ftupyjW23',
			),
		),
	),
);
```