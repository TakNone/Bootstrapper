# webPageAttributeTheme

**Description** : *Page theme*

**Layer** : 225

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
			id : -1677241554941854103,
		),
		$client->document(
			id : -4551295251132741101,
			access_hash : -5650051174535334701,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 54,
			mime_type : 'ZG8mQA9uLxCtXybc',
			size : 1863995186370462091,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'rcGhkdxu845mVzpX',
				),
				$client->photoSize(
					type : 'd6k8fBiOj3Z7yRKH',
					w : 94,
					h : 94,
					size : 69,
				),
				$client->photoCachedSize(
					type : 'fNjiEFWA2X6GzHmq',
					w : 98,
					h : 3,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'zMecGO70DRvNnd49',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'tiYqgFnR6opBMKEb',
					w : 50,
					h : 58,
					sizes : array(66),
				),
				$client->photoPathSize(
					type : 'qcdCVAIuzg4fiP3j',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'vhoeKVr2Mf5A0Pqt',
					w : 13,
					h : 72,
					size : 49,
					video_start_ts : 2086532.6328125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -927575747544335451,
					background_colors : array(29),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -8574294679899967250,
					background_colors : array(41),
				),
			),
			dc_id : 79,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 11,
					h : 71,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '5Q0iwu6PSyJzA7r1',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 36,
						x : -810472.578125,
						y : -1615467.40234375,
						zoom : -530013.3876953125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 104413.0009765625,
					w : 48,
					h : 71,
					preload_prefix_size : 33,
					video_start_ts : 995613.5087890625,
					video_codec : 'QTPVEws6dqiUbKlX',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 69,
					title : 'TfsMW3RZX8K0OoDJ',
					performer : 'Ehmva6OrWQg421lf',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'yCQdWiUbG5zmIVkx',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'wramoG3ZHiPSq9Cv',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	settings : $client->themeSettings(
		message_colors_animated : true,
		base_theme : $client->baseThemeClassic(),
		accent_color : 50,
		outbox_accent_color : 78,
		message_colors : array(82),
		wallpaper : $client->wallPaper(
			id : -4950858593346547764,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : -6135554378147851980,
			slug : 'b10AQOYoTvzlkZR9',
			document : $client->documentEmpty(
				id : -2520165208919459809,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 26,
				second_background_color : 61,
				third_background_color : 93,
				fourth_background_color : 21,
				intensity : 75,
				rotation : 88,
				emoticon : 'SHARUZOhlf17CNyt',
			),
		),
	),
);
```