# webPageAttributeTheme

**Description** : *Page theme*

**Layer** : 214

```tl
webPageAttributeTheme#54b56617 flags:# documents:flags.0?Vector<Document> settings:flags.1?ThemeSettings = WebPageAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
			id : 3035413030323642946,
		),
		$client->document(
			id : 6213877486101887113,
			access_hash : 2439577125895517601,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 11,
			mime_type : 'C1SRWbsrxf4o0T8c',
			size : -524300008409578372,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'cRboEN97LID3wxV4',
				),
				$client->photoSize(
					type : 'OiRsFmPKrBtgDACe',
					w : 72,
					h : 98,
					size : 49,
				),
				$client->photoCachedSize(
					type : 'rFLI8gDMYQOJtlv1',
					w : 70,
					h : 0,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'JjqfXnR5ShUsH9CD',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'pt8lbHOALg1veDIK',
					w : 33,
					h : 45,
					sizes : array(91),
				),
				$client->photoPathSize(
					type : 'kbCQDhSrvNIGUMnY',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'C5JokIvKU0z4byEP',
					w : 24,
					h : 17,
					size : 59,
					video_start_ts : 85380.6640625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 2544643218387353744,
					background_colors : array(27),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -4667123821270490073,
					background_colors : array(24),
				),
			),
			dc_id : 85,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 27,
					h : 75,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '0DpZATSkW1o52mug',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1502707.642578125,
					w : 27,
					h : 14,
					preload_prefix_size : 67,
					video_start_ts : 1990160.779296875,
					video_codec : 'd39VMKbr72FyRzLA',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 62,
					title : '5YcW76d2rnmVJyzw',
					performer : 'jVhWOaZJ6eUfKYG9',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'XQiSMpe30wnU2hzt',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'NRdZY6VFGwLPCtue',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	settings : $client->themeSettings(
		message_colors_animated : true,
		base_theme : $client->baseThemeClassic(),
		accent_color : 62,
		outbox_accent_color : 47,
		message_colors : array(88),
		wallpaper : $client->wallPaper(
			id : -5562106008999029277,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : -6957505149902221402,
			slug : 'R5Ne4oFswcL6XWjV',
			document : $client->documentEmpty(...),
			settings : $client->wallPaperSettings(...),
		),
	),
);
```