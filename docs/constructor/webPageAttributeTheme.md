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
			id : -856204066201292988,
		),
		$client->document(
			id : 3987091773623923783,
			access_hash : -4173146777487982172,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 95,
			mime_type : 'FAe8Cx97Tgh053JZ',
			size : -1783543394554869682,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'LoVOrG97FaSp5WCH',
				),
				$client->photoSize(
					type : 'CLKxotnAJmVaMD7e',
					w : 12,
					h : 69,
					size : 9,
				),
				$client->photoCachedSize(
					type : '6h2qCb7UXZdVn3eA',
					w : 27,
					h : 8,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'wT4hcDnQFgRdzsxe',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'lkJMCqzBOLIjgm3Q',
					w : 28,
					h : 28,
					sizes : array(55),
				),
				$client->photoPathSize(
					type : 'uPSe8UtYIB2051fJ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'PdbUBW0FVqxegmrf',
					w : 15,
					h : 32,
					size : 59,
					video_start_ts : -345874.49609375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 8172203560060436181,
					background_colors : array(100),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -8090341528353073245,
					background_colors : array(29),
				),
			),
			dc_id : 99,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 29,
					h : 5,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'AL4ur8KdPyON1BEw',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -489959.6845703125,
					w : 69,
					h : 36,
					preload_prefix_size : 50,
					video_start_ts : 1312150.5400390625,
					video_codec : 'yHGW7v3MI1NZFQoi',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 63,
					title : '38pz4yTLoJtVk1nI',
					performer : 'Vl9zrmPUMDoiCdwS',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'AZGi3WBz8nb5ejrV',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'CVZIXi0jwOPGgaE2',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	settings : $client->themeSettings(
		message_colors_animated : true,
		base_theme : $client->baseThemeClassic(),
		accent_color : 91,
		outbox_accent_color : 86,
		message_colors : array(49),
		wallpaper : $client->wallPaper(
			id : -9140738140035629197,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : 1101699065246260707,
			slug : '4DRwTxSorBj8n6dy',
			document : $client->documentEmpty(...),
			settings : $client->wallPaperSettings(...),
		),
	),
);
```