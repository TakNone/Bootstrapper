# messages.availableEffects

**Description** : *The full list of usable animated message effects &raquo;*

**Layer** : 214

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
	hash : 51,
	effects : array(
		$client->availableEffect(
			premium_required : true,
			id : -9015899589098567820,
			emoticon : 'eaBM4xnfbyv7hA9O',
			static_icon_id : 8876386789833765852,
			effect_sticker_id : 2857199566714539301,
			effect_animation_id : 6980095990735031323,
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -1231899714562465098,
		),
		$client->document(
			id : -1848550856601599957,
			access_hash : 4115976924201926949,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 100,
			mime_type : 'phT6NoOtRqQvDiWZ',
			size : 2391704598506668328,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'vGuKiOYca7Vd4LPl',
				),
				$client->photoSize(
					type : 'LzigsIfw50Rr2YXV',
					w : 85,
					h : 24,
					size : 30,
				),
				$client->photoCachedSize(
					type : 'JaXYAunKGRrdO67Q',
					w : 95,
					h : 84,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'wZY7obKVnz50dFWs',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'zcqK71MDwUPu6oJF',
					w : 83,
					h : 7,
					sizes : array(98),
				),
				$client->photoPathSize(
					type : 'q1ngMYIw5lVO48c0',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'iUd2mM8u6RjVaF54',
					w : 38,
					h : 82,
					size : 57,
					video_start_ts : -132957.1572265625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -4865664907434743409,
					background_colors : array(92),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -2652688387327771125,
					background_colors : array(2),
				),
			),
			dc_id : 9,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 55,
					h : 65,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'xI7ndNTulzv8kgJY',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 707916.8935546875,
					w : 10,
					h : 92,
					preload_prefix_size : 29,
					video_start_ts : 230874.953125,
					video_codec : 'KzQMNwfLl6a1uqeZ',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 63,
					title : 'd05TFz27uAxDUsgC',
					performer : 'ljRZH1POqtsQKn5M',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'DmadhNMBGVKA5ey7',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'WM0c6f9b7BrdmieL',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```