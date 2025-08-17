# webPageAttributeTheme

**Description** : *Page theme*

**Layer** : 211

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
			id : 868805802796986448,
		),
		$client->document(
			id : 5363088776736873791,
			access_hash : 2420566210806872392,
			file_reference : '5???LiveProto???[',
			date : 3,
			mime_type : 'VKIU5LoxErmCbSPf',
			size : -1320311864955975355,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'MSJhzg6Lm94yNQoC',
				),
				$client->photoSize(
					type : '1AbPBnvrcL2OJ43G',
					w : 43,
					h : 6,
					size : 89,
				),
				$client->photoCachedSize(
					type : 'E1bVqpTNtfxPD8lY',
					w : 68,
					h : 65,
					bytes : '???G?LiveProto?%??o',
				),
				$client->photoStrippedSize(
					type : 'M14NIrHZC6FcmSTR',
					bytes : '??d
LiveProtoYlB֏',
				),
				$client->photoSizeProgressive(
					type : 'OhlcZmQw5EutxsCY',
					w : 86,
					h : 17,
					sizes : array(73),
				),
				$client->photoPathSize(
					type : 'TNQsw4MG8yco7O3b',
					bytes : '?g???LiveProtozu?',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'To8Dl57jkhQXKBqU',
					w : 8,
					h : 20,
					size : 19,
					video_start_ts : -471849.3037109375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -3273834810281573480,
					background_colors : array(11),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -4896356467401761630,
					background_colors : array(32),
				),
			),
			dc_id : 87,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 34,
					h : 16,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'fX6tI2sl0e1PE8YL',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 98946.5673828125,
					w : 89,
					h : 48,
					preload_prefix_size : 31,
					video_start_ts : 816003.2021484375,
					video_codec : 'sqTP5QVINRzW98td',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 24,
					title : 'qjv4iflnhXt63TdD',
					performer : 'VDeo4fSmhIZjbJ5F',
					waveform : ' ?m?LiveProto?^?-',
				),
				$client->documentAttributeFilename(
					file_name : 'aiE3mWXHSFMurdZp',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Xr6baAuSsjEcwR8v',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	settings : $client->themeSettings(
		message_colors_animated : true,
		base_theme : $client->baseThemeClassic(),
		accent_color : 68,
		outbox_accent_color : 36,
		message_colors : array(20),
		wallpaper : $client->wallPaper(
			id : -846919699412054756,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : -4060489610427235110,
			slug : 'YftOe57CG6suU0L9',
			document : $client->documentEmpty(...),
			settings : $client->wallPaperSettings(...),
		),
	),
);
```