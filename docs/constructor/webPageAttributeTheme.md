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
			id : -7110466418507927380,
		),
		$client->document(
			id : -4385741443505685557,
			access_hash : -8333460635779274560,
			file_reference : '?PٗLiveProto???',
			date : 98,
			mime_type : 'yCnRkIG8rjbYLeS2',
			size : 3886852182500296915,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'UhZbwlfGprdnsT4m',
				),
				$client->photoSize(
					type : 'rcglqaiT6UtSXnbY',
					w : 83,
					h : 24,
					size : 58,
				),
				$client->photoCachedSize(
					type : 'q5olmTLOJ6xPScin',
					w : 40,
					h : 62,
					bytes : '݃?َLiveProto?????',
				),
				$client->photoStrippedSize(
					type : '7MVam1HrWKgZLdxU',
					bytes : 'h????LiveProto?$?=?',
				),
				$client->photoSizeProgressive(
					type : 'w9k0rBDPU1Z4Lzio',
					w : 76,
					h : 62,
					sizes : array(42),
				),
				$client->photoPathSize(
					type : '9QnVArv0jkmzRogb',
					bytes : '4?|-?LiveProtoӎ5?5',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'SReQUOXlH70qGWaV',
					w : 92,
					h : 54,
					size : 32,
					video_start_ts : -28219.572265625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 8101321216435764838,
					background_colors : array(59),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -5283029128254158695,
					background_colors : array(30),
				),
			),
			dc_id : 70,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 22,
					h : 42,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'qTvlWQCwcoS5PmUZ',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -573876.5009765625,
					w : 57,
					h : 14,
					preload_prefix_size : 56,
					video_start_ts : -67046.59375,
					video_codec : '3h8PZdrD49xqjQXw',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 73,
					title : 'eH8wjyS0XvJMqTKp',
					performer : 'AKnzTL1HBdrtD0RG',
					waveform : 'q?C?LiveProto5)??',
				),
				$client->documentAttributeFilename(
					file_name : 'Q8CcWwPf9lLITqYn',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'EMrsytY1Li0Zgced',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	settings : $client->themeSettings(
		message_colors_animated : true,
		base_theme : $client->baseThemeClassic(),
		accent_color : 37,
		outbox_accent_color : 80,
		message_colors : array(99),
		wallpaper : $client->wallPaper(
			id : 6557650709913446453,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : 4077005645416643191,
			slug : 'Io9jQNFTCaeABU5X',
			document : $client->documentEmpty(...),
			settings : $client->wallPaperSettings(...),
		),
	),
);
```