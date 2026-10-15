# webPageAttributeTheme

**Description** : *Page theme*

**Layer** : 229

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
			id : -3683748534589070297,
		),
		$client->document(
			id : 5845378066989289771,
			access_hash : 3795468089856092192,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 46,
			mime_type : '8wjrbe9kh1WyiuI7',
			size : -3955679547034857132,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'GF0NuP4wBoSQvUxI',
				),
				$client->photoSize(
					type : 'pidLIOvmkAeQywMX',
					w : 38,
					h : 18,
					size : 34,
				),
				$client->photoCachedSize(
					type : 'YDstckC7wuZNijEJ',
					w : 79,
					h : 0,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'wqhdUIX6e2p4APn1',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'CATpbjyaQfNIml4X',
					w : 96,
					h : 94,
					sizes : array(18),
				),
				$client->photoPathSize(
					type : 'ae4EpxwTO2coG81C',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'dHejF6CDQ1kBbJMp',
					w : 97,
					h : 77,
					size : 49,
					video_start_ts : -1873373.9140625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -2344436509508077863,
					background_colors : array(6),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 7003468261243226035,
					background_colors : array(5),
				),
			),
			dc_id : 56,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 37,
					h : 84,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '4VZW90CAroScMa8k',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 5,
						x : 1682086.404296875,
						y : 435189.228515625,
						zoom : -1348565.0009765625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -948046.8466796875,
					w : 61,
					h : 58,
					preload_prefix_size : 34,
					video_start_ts : -1939282.349609375,
					video_codec : 'aUWd54ogK9LrRCMf',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 92,
					title : 'EV1tOsmSocXF3974',
					performer : 'qQ1sL08baIgoxp2R',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'rJu9FXSNQh1EPAzU',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'CNTXgtQm6aGEsYAe',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	settings : $client->themeSettings(
		message_colors_animated : true,
		base_theme : $client->baseThemeClassic(),
		accent_color : 38,
		outbox_accent_color : 84,
		message_colors : array(82),
		wallpaper : $client->wallPaper(
			id : 7361617072965936603,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : -883435685174436072,
			slug : 'E24AsjVLxlhM5f8J',
			document : $client->documentEmpty(
				id : 1349371411090250186,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 35,
				second_background_color : 97,
				third_background_color : 74,
				fourth_background_color : 37,
				intensity : 34,
				rotation : 69,
				emoticon : 'hkitKgDOn1GUvqTy',
			),
		),
	),
);
```