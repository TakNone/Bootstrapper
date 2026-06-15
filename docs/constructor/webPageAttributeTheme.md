# webPageAttributeTheme

**Description** : *Page theme*

**Layer** : 227

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
			id : 2667987625411558295,
		),
		$client->document(
			id : 3608710006036501303,
			access_hash : 4546471132815010948,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 55,
			mime_type : 'sRxyVhcnlifEjo8S',
			size : -4582040489775564793,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'zpHAvP38lIjn6Cta',
				),
				$client->photoSize(
					type : 'zJ8AdkQK6rfh3XYt',
					w : 14,
					h : 90,
					size : 93,
				),
				$client->photoCachedSize(
					type : 'E4Zw8kbHxo07uONg',
					w : 36,
					h : 66,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'sha4vAglJzwI0RU1',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'pHYDRvwmnx7QJsat',
					w : 61,
					h : 17,
					sizes : array(86),
				),
				$client->photoPathSize(
					type : 'yUur5zCxGif8LAdk',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'fW65XGq70D1QlRK3',
					w : 44,
					h : 43,
					size : 47,
					video_start_ts : 1948428.7119140625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -2135442707682429714,
					background_colors : array(66),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -4393135566355437424,
					background_colors : array(43),
				),
			),
			dc_id : 30,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 38,
					h : 1,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'U5v0SymB6af42GeM',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 4,
						x : -1546889.771484375,
						y : -1158019.990234375,
						zoom : 1212375.3857421875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1744787.9443359375,
					w : 68,
					h : 20,
					preload_prefix_size : 20,
					video_start_ts : -1977746.1953125,
					video_codec : 'v8IYpzM5sZkJ3H2B',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 39,
					title : 'gNDHFuycGBnp0VCj',
					performer : '67YWVK2X5Pbvpw8R',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'QxodFCglrcwz3BZE',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'RouBavrT9KH7VLQN',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	settings : $client->themeSettings(
		message_colors_animated : true,
		base_theme : $client->baseThemeClassic(),
		accent_color : 56,
		outbox_accent_color : 67,
		message_colors : array(41),
		wallpaper : $client->wallPaper(
			id : -6244343596035876494,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : -818780352103667633,
			slug : 'OtUW2TkxP9n7M38s',
			document : $client->documentEmpty(
				id : 2975866556277613478,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 60,
				second_background_color : 47,
				third_background_color : 78,
				fourth_background_color : 40,
				intensity : 40,
				rotation : 81,
				emoticon : 'NQGhV7OW0Fe12ioD',
			),
		),
	),
);
```