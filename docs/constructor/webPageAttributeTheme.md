# webPageAttributeTheme

**Description** : *Page theme*

**Layer** : 222

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
			id : 7827545470230667432,
		),
		$client->document(
			id : -4114439695968201849,
			access_hash : 8338859493725937803,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 57,
			mime_type : 'N1XqRVYy0UBFJdsr',
			size : 1375616455444060383,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'ndIXjgoPRsfeHF0A',
				),
				$client->photoSize(
					type : 'WGigteUL1YTlbDO4',
					w : 42,
					h : 26,
					size : 5,
				),
				$client->photoCachedSize(
					type : 'nX84BZRxwzrUeq5p',
					w : 52,
					h : 46,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'IT70Vx3gDNdLGr8l',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'v2rRew0WKQOPAcLY',
					w : 43,
					h : 94,
					sizes : array(16),
				),
				$client->photoPathSize(
					type : '4W3XabARsY1ZEcG6',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'MGgKaXHtje76NsEU',
					w : 94,
					h : 53,
					size : 21,
					video_start_ts : -617777.4248046875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -7110329627583862516,
					background_colors : array(73),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 425300550059500442,
					background_colors : array(56),
				),
			),
			dc_id : 14,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 59,
					h : 73,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'fLNyWshVvbKC83x6',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 84,
						x : -1016345.150390625,
						y : 1046303.54296875,
						zoom : 1340043.5634765625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1431340.5009765625,
					w : 96,
					h : 10,
					preload_prefix_size : 13,
					video_start_ts : -345759.140625,
					video_codec : 'G4Wjrocl19IhpOJ5',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 64,
					title : '7gkhF6KqX9PpQbeo',
					performer : 'p0ZY8zCFAuvfHQjT',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'Flqb8zrBapcNITfJ',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'RNgUh75A492XlnOv',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	settings : $client->themeSettings(
		message_colors_animated : true,
		base_theme : $client->baseThemeClassic(),
		accent_color : 93,
		outbox_accent_color : 25,
		message_colors : array(25),
		wallpaper : $client->wallPaper(
			id : 3318546722789571034,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : 4211324401625574284,
			slug : 'r9XMvxViezcLYbNk',
			document : $client->documentEmpty(
				id : 3104828959112143161,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 5,
				second_background_color : 38,
				third_background_color : 72,
				fourth_background_color : 89,
				intensity : 12,
				rotation : 22,
				emoticon : 'vTKLzN7qkcGJxAf0',
			),
		),
	),
);
```