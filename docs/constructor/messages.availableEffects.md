# messages.availableEffects

**Description** : *The full list of usable animated message effects &raquo;*

**Layer** : 227

```tl
messages.availableEffects#bddb616e hash:int effects:Vector<AvailableEffect> documents:Vector<Document> = messages.AvailableEffects;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here |
| <mark>effects</mark> | [`Vector<AvailableEffect>`](type/AvailableEffect) | Message effects |
| <mark>documents</mark> | [`Vector<Document>`](type/Document) | Documents specified in the effects constructors |

---

## Type

[messages.AvailableEffects](type/messages.AvailableEffects)

---

## Example

```php
$messagesAvailableEffects = $client->messages->availableEffects(
	hash : 0,
	effects : array(
		$client->availableEffect(
			premium_required : true,
			id : -3020646597172868467,
			emoticon : 'WIxZJYu0F2btSRD5',
			static_icon_id : -1881622387571895909,
			effect_sticker_id : 7361455428423330954,
			effect_animation_id : 134212055426339202,
		),
	),
	documents : array(
		$client->documentEmpty(
			id : 5267289826453503870,
		),
		$client->document(
			id : 8141915516931894758,
			access_hash : -5099316486498611749,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 62,
			mime_type : 'wShbEOu2LHfr6U3M',
			size : 3291602061373587261,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'fp8K54bmUa2kLFYJ',
				),
				$client->photoSize(
					type : 'uKkwNbD79lLQdgZ3',
					w : 0,
					h : 45,
					size : 54,
				),
				$client->photoCachedSize(
					type : 'lbBj7KN2Gv4QVfuP',
					w : 94,
					h : 80,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '4aHCQoIBw8dePqSX',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'fznvpU69gHs8ltJk',
					w : 13,
					h : 19,
					sizes : array(14),
				),
				$client->photoPathSize(
					type : 'hf7Gn2v9ucZRCIP3',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 's5Ob98DwB0PhGpt4',
					w : 52,
					h : 31,
					size : 77,
					video_start_ts : -392913.8896484375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -1547662663040818822,
					background_colors : array(50),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 8150050751363979951,
					background_colors : array(38),
				),
			),
			dc_id : 41,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 53,
					h : 76,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'S4otBXKlvTWi6b8H',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 57,
						x : 756084.8642578125,
						y : -862726.68359375,
						zoom : -759518.755859375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1108870.0927734375,
					w : 98,
					h : 20,
					preload_prefix_size : 39,
					video_start_ts : 1979128.8203125,
					video_codec : 'YA9F6prs1dMw7oTZ',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 35,
					title : 'JxreTZFypSKD7z9a',
					performer : 'ROqszCKgWmAwDuZ5',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'FYk4WudvcPNLxIV1',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'uRdBQtUIp0WD1fgs',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```