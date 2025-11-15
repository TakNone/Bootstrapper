# webPageAttributeTheme

**Description** : *Page theme*

**Layer** : 218

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
			id : 6722429130010222234,
		),
		$client->document(
			id : 2526441945003491531,
			access_hash : 9034394480886177012,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 80,
			mime_type : 'CH0JnUV48KpI1L36',
			size : -5146014234150195988,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'eMN4t16YZGIayfQp',
				),
				$client->photoSize(
					type : 'lrVoOU0yCJt7sb9Y',
					w : 88,
					h : 96,
					size : 37,
				),
				$client->photoCachedSize(
					type : 'ESrmt6RL23jlGyfY',
					w : 39,
					h : 83,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'c2IGatiyWAFN0djR',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'UmfHzNGMRjt90b5h',
					w : 49,
					h : 80,
					sizes : array(26),
				),
				$client->photoPathSize(
					type : 'fSJsrCKcio2T7YIu',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'pnzL4M1YB0qhcDgE',
					w : 48,
					h : 41,
					size : 75,
					video_start_ts : 1538087.173828125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -2468639291717708147,
					background_colors : array(45),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 4998856359118406433,
					background_colors : array(96),
				),
			),
			dc_id : 60,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 66,
					h : 44,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '9CmVLgXz4ntWMUxi',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 40,
						x : -1662228.9111328125,
						y : 773236.845703125,
						zoom : -1310986.5458984375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1902383.6357421875,
					w : 37,
					h : 81,
					preload_prefix_size : 37,
					video_start_ts : 1132264.3564453125,
					video_codec : 'a7nVqgtDeGIyw8lL',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 16,
					title : 'vg4kQADBUWZYVKMG',
					performer : 'bjYCA3I8vfJmDRgP',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '9jMGlDnWLQwy8Xgv',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '5dH9eQXmt2aKfyoi',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	settings : $client->themeSettings(
		message_colors_animated : true,
		base_theme : $client->baseThemeClassic(),
		accent_color : 46,
		outbox_accent_color : 40,
		message_colors : array(85),
		wallpaper : $client->wallPaper(
			id : 534626684867327737,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : 2419144937618156556,
			slug : 'NtA68iqSCzaTl9Dr',
			document : $client->documentEmpty(
				id : -7394894870442713286,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 67,
				second_background_color : 66,
				third_background_color : 71,
				fourth_background_color : 59,
				intensity : 28,
				rotation : 19,
				emoticon : 'CGqiT6rbL87MDoSR',
			),
		),
	),
);
```