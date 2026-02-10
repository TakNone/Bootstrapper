# webPageAttributeTheme

**Description** : *Page theme*

**Layer** : 222

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
			id : 4671554302534646427,
		),
		$client->document(
			id : 4369514994736194905,
			access_hash : 7758695908643313433,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 65,
			mime_type : 'gTdUVomrEj3fl9FL',
			size : 7318433269238369916,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'XGh86zoqJFA1RL34',
				),
				$client->photoSize(
					type : 'GIZEkz9vAhaQi4Vj',
					w : 15,
					h : 46,
					size : 88,
				),
				$client->photoCachedSize(
					type : 'if3OoQCyHj8Rd16T',
					w : 19,
					h : 17,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'r7WO30NatSJoPlqz',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'zUsVNeyk0SGjiOC2',
					w : 29,
					h : 98,
					sizes : array(35),
				),
				$client->photoPathSize(
					type : 'NK7AiIPeV4Xk3lc2',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'Dz0STIYsREporlKu',
					w : 74,
					h : 31,
					size : 81,
					video_start_ts : -1529920.1669921875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -196183441892590275,
					background_colors : array(100),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -8313701507413932941,
					background_colors : array(71),
				),
			),
			dc_id : 32,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 20,
					h : 69,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'gq2abQDVEFMo1tUS',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 36,
						x : -290941.251953125,
						y : -597459.1201171875,
						zoom : -1262957.017578125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1328751.8564453125,
					w : 25,
					h : 85,
					preload_prefix_size : 74,
					video_start_ts : -49394.5224609375,
					video_codec : 'wSPxGyNDLmBbVIfi',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 82,
					title : 'rwTUoS3j4ZLJX65e',
					performer : 'FP6mDVUYhST2ENq3',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'LswDyOZ9qz3hnBx0',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'DR6ihUlzdI4PQYcS',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	settings : $client->themeSettings(
		message_colors_animated : true,
		base_theme : $client->baseThemeClassic(),
		accent_color : 69,
		outbox_accent_color : 60,
		message_colors : array(94),
		wallpaper : $client->wallPaper(
			id : 1305581289244925338,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : 6992066292591316690,
			slug : 'o8OUyJIfTbVt1Aq9',
			document : $client->documentEmpty(
				id : 4630850851031374615,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 29,
				second_background_color : 45,
				third_background_color : 94,
				fourth_background_color : 86,
				intensity : 39,
				rotation : 47,
				emoticon : 'xb6Cgr8RWlZNFOUM',
			),
		),
	),
);
```