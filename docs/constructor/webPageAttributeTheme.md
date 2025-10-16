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
			id : 695882122181319485,
		),
		$client->document(
			id : 9112497711706251201,
			access_hash : -6678053290457108163,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 79,
			mime_type : 'ytSW70fdECIZvzYr',
			size : -1265495014910359264,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'RGlZBOmDdh1pNvzi',
				),
				$client->photoSize(
					type : 'xr851fVdBFtHICcp',
					w : 89,
					h : 34,
					size : 60,
				),
				$client->photoCachedSize(
					type : 'KaoWzw0Ub3g9Scf1',
					w : 70,
					h : 62,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'ZasGD50FuOv9B6Hm',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'IdBsDUJRqx5NMK8G',
					w : 32,
					h : 90,
					sizes : array(36),
				),
				$client->photoPathSize(
					type : 'JkSimX5pR3VFPzHy',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'e917c5IwZB6WLzkA',
					w : 30,
					h : 77,
					size : 82,
					video_start_ts : -5936.2490234375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 4668246947434547125,
					background_colors : array(38),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -7415188091348235356,
					background_colors : array(56),
				),
			),
			dc_id : 53,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 27,
					h : 43,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'G2MqBeJLwAI5crm4',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1577615.70703125,
					w : 27,
					h : 79,
					preload_prefix_size : 46,
					video_start_ts : -475740.91015625,
					video_codec : 'To53ApQ9GxyfZwgP',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 92,
					title : '8Y24qmQp6VD9F3kS',
					performer : 'kg2CYvQl7ELwM8Wj',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '6wsKu2GaXcrghNiM',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'HoKVPek20T1JqdOG',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	settings : $client->themeSettings(
		message_colors_animated : true,
		base_theme : $client->baseThemeClassic(),
		accent_color : 94,
		outbox_accent_color : 48,
		message_colors : array(54),
		wallpaper : $client->wallPaper(
			id : 5740918384819520863,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : 8379091879668214298,
			slug : 'FI7lQREX8nkwcuPV',
			document : $client->documentEmpty(...),
			settings : $client->wallPaperSettings(...),
		),
	),
);
```