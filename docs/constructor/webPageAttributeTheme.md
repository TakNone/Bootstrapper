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
			id : 2350213047547749923,
		),
		$client->document(
			id : 6468986532121352488,
			access_hash : 8052831768549586483,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 11,
			mime_type : 'tuMHLNWzlYjpyfF1',
			size : 3927772192050801234,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'R2x4skAbi73qJpWr',
				),
				$client->photoSize(
					type : 'OhJo0gNS72mpdMrv',
					w : 8,
					h : 3,
					size : 35,
				),
				$client->photoCachedSize(
					type : 'UBGkljAauc8VgzSr',
					w : 38,
					h : 72,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'Rj5OPpvqDCY1Egs7',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'BSdsi7u4Ny6RGCz0',
					w : 100,
					h : 86,
					sizes : array(99),
				),
				$client->photoPathSize(
					type : 'UhZrKkJQ0M48LN1j',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'KUdtZlXvLVnD059b',
					w : 43,
					h : 41,
					size : 6,
					video_start_ts : -1953790.2275390625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 2585439248531268163,
					background_colors : array(38),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -7320039011622014189,
					background_colors : array(31),
				),
			),
			dc_id : 96,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 16,
					h : 1,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'MpubrlQhznBGwf03',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 43,
						x : -883450.2744140625,
						y : 886815.9228515625,
						zoom : 974454.001953125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1802578.439453125,
					w : 71,
					h : 61,
					preload_prefix_size : 74,
					video_start_ts : -1207027.390625,
					video_codec : 'hNFRLmO6zsEgX50w',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 88,
					title : '3WnVeEMFODkXbHo9',
					performer : 'fYT0GdFo3BegszuQ',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'wkBWZs4uYANEVvPa',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Z8dOzIUi9CHwyXLb',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	settings : $client->themeSettings(
		message_colors_animated : true,
		base_theme : $client->baseThemeClassic(),
		accent_color : 64,
		outbox_accent_color : 55,
		message_colors : array(10),
		wallpaper : $client->wallPaper(
			id : -8752408817851305166,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : 5053811606101923539,
			slug : 'SA8JeyZ21gsn59Bl',
			document : $client->documentEmpty(
				id : -9105989897172794540,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 66,
				second_background_color : 18,
				third_background_color : 70,
				fourth_background_color : 72,
				intensity : 95,
				rotation : 71,
				emoticon : 'L6WmbyAdsqSHOciN',
			),
		),
	),
);
```