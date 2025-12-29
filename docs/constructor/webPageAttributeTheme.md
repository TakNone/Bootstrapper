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
			id : -6839075916340574351,
		),
		$client->document(
			id : -8299294755691199837,
			access_hash : 6594845304612599628,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 0,
			mime_type : 'WwmaeOPDKzdCJ1hN',
			size : -3176166842364971653,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'Xjt429OLKwiCuvNA',
				),
				$client->photoSize(
					type : 'KHRj9oar8DEidGhU',
					w : 88,
					h : 57,
					size : 55,
				),
				$client->photoCachedSize(
					type : 'WnjZ9sPxL24uEHYt',
					w : 50,
					h : 30,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'jphw8sSVRLenl9rI',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'fybt5T9VxwH72Djd',
					w : 46,
					h : 87,
					sizes : array(46),
				),
				$client->photoPathSize(
					type : 'BubkRjiMSzCXKpPZ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'l3b0cqI5i1eQHW7n',
					w : 47,
					h : 63,
					size : 36,
					video_start_ts : -1157863.796875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -3479858953864789528,
					background_colors : array(91),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 1800733578480516259,
					background_colors : array(43),
				),
			),
			dc_id : 29,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 40,
					h : 25,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '6IN8rpyK3qOmFoEh',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 78,
						x : 1361996.8349609375,
						y : 478626.013671875,
						zoom : -2083606.9814453125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1300223.4404296875,
					w : 17,
					h : 46,
					preload_prefix_size : 53,
					video_start_ts : 814213.3935546875,
					video_codec : 'Eg7c8jyYHoRA4Cvx',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 95,
					title : '49AjOTuUeBEtQpxW',
					performer : 'iyK70soRzT36afpO',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '79SQJjeZndCHYrpG',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'UWDs6cN3ThfvMLwd',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	settings : $client->themeSettings(
		message_colors_animated : true,
		base_theme : $client->baseThemeClassic(),
		accent_color : 19,
		outbox_accent_color : 70,
		message_colors : array(20),
		wallpaper : $client->wallPaper(
			id : -842565733881173627,
			creator : true,
			default : true,
			pattern : true,
			dark : true,
			access_hash : -9080853792613891765,
			slug : 'y8UJSwfDt7HZbdaA',
			document : $client->documentEmpty(
				id : 4811909557822563233,
			),
			settings : $client->wallPaperSettings(
				blur : true,
				motion : true,
				background_color : 75,
				second_background_color : 9,
				third_background_color : 100,
				fourth_background_color : 57,
				intensity : 79,
				rotation : 56,
				emoticon : 'JYKoZNvrUHs52wqO',
			),
		),
	),
);
```