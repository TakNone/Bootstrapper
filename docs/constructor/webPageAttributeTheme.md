# webPageAttributeTheme

**Description** : *Page theme*

**Layer** : 216

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
			id : 8258733857934564157,
		),
		$client->document(
			id : -2203420910751505401,
			access_hash : -2732361866909874983,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 73,
			mime_type : 'Wgd2VjYJMI6u5LXl',
			size : -1025120062110405497,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'VSliaLebhFoEOXx8',
				),
				$client->photoSize(
					type : 'GqtBlcz78OnZ52Im',
					w : 31,
					h : 67,
					size : 58,
				),
				$client->photoCachedSize(
					type : 'wOWKlRT4hQbjXIiE',
					w : 13,
					h : 8,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 't3yVIuhfEGU0Xl86',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'L1URoc0jGl3vNxsz',
					w : 6,
					h : 53,
					sizes : array(1),
				),
				$client->photoPathSize(
					type : 'uTWMdZNKp9qSOXHc',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '5lVi6HQF7MvptqKT',
					w : 71,
					h : 63,
					size : 58,
					video_start_ts : -800698.291015625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 4509900585938070175,
					background_colors : array(16),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 5435287940987784270,
					background_colors : array(1),
				),
			),
			dc_id : 89,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 93,
					h : 87,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'nKchr8Wj6qOLsPIZ',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 830426.76953125,
					w : 82,
					h : 72,
					preload_prefix_size : 7,
					video_start_ts : 1124953.5419921875,
					video_codec : '4GB5ZkD7Yvghc8Sw',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 29,
					title : 'WSQMH49quOB5Nfa2',
					performer : 'oxXMfayqQ8kcR0mw',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'HS7T396kClhY8vs5',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'LeMQGkSKBXgYoxWZ',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	settings : $client->themeSettings(
		message_colors_animated : true,
		base_theme : $client->baseThemeClassic(),
		accent_color : 75,
		outbox_accent_color : 81,
		message_colors : array(92),
		wallpaper : $client->wallPaper(
			id : -7720874153029969377,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : 2175601273261939868,
			slug : 'tNuTJnxkc9i58ZpG',
			document : $client->documentEmpty(...),
			settings : $client->wallPaperSettings(...),
		),
	),
);
```