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
			id : 2708408390954161167,
		),
		$client->document(
			id : 5713136321157317836,
			access_hash : -4318944828408131572,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 7,
			mime_type : 'bQzvWcVEd1gjmJuS',
			size : -3076230081573584820,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '4Pgs3RbinzC9op2m',
				),
				$client->photoSize(
					type : 'Hzyj1sPUoAwIengG',
					w : 38,
					h : 43,
					size : 60,
				),
				$client->photoCachedSize(
					type : 'XZhWQjk1aKdxlP3B',
					w : 65,
					h : 99,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'pghqTSxDKoYwCakd',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '46qznEPkDgNAG3Jt',
					w : 9,
					h : 50,
					sizes : array(82),
				),
				$client->photoPathSize(
					type : 'YMezhFVE4wnpaGJX',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'UOt9lBdTpgEhVHoX',
					w : 49,
					h : 74,
					size : 76,
					video_start_ts : -393126.21875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 4491964313006292415,
					background_colors : array(96),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 6996358786583909323,
					background_colors : array(92),
				),
			),
			dc_id : 19,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 10,
					h : 6,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'WuHdLNF0Ye1b9aUK',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 8,
						x : 1118400.3564453125,
						y : -736312.748046875,
						zoom : 1612175.162109375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 457282.314453125,
					w : 85,
					h : 66,
					preload_prefix_size : 68,
					video_start_ts : -115866.3115234375,
					video_codec : 'y4mhobEBeHGTnjfL',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 66,
					title : 'e6tXTzx3JL4YSKbE',
					performer : 'Ce2NgVAdS0WBY3ms',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'daxKvnMDoCN9zg7u',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'BOxJGlgk1wu8sLHM',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	settings : $client->themeSettings(
		message_colors_animated : true,
		base_theme : $client->baseThemeClassic(),
		accent_color : 8,
		outbox_accent_color : 61,
		message_colors : array(40),
		wallpaper : $client->wallPaper(
			id : -3103038335049188571,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : -6056009086577021003,
			slug : 'rhMc3OpuEUQlVnBD',
			document : $client->documentEmpty(
				id : -2428545145510235292,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 71,
				second_background_color : 91,
				third_background_color : 80,
				fourth_background_color : 64,
				intensity : 29,
				rotation : 4,
				emoticon : '71yoVrWwqtfGCN2v',
			),
		),
	),
);
```