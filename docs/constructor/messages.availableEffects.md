# messages.availableEffects

**Description** : *The full list of usable animated message effects &raquo;*

**Layer** : 233

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
			id : 5631189911749905529,
			emoticon : 'bqZHMYgGht6CVXi9',
			static_icon_id : 1041786416375190091,
			effect_sticker_id : 4689229874381138777,
			effect_animation_id : -452807254261903453,
		),
	),
	documents : array(
		$client->documentEmpty(
			id : 2084442152862753041,
		),
		$client->document(
			id : -3006685500214465934,
			access_hash : 2575061111954616498,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 96,
			mime_type : 'ZafsL3wuMS1VXbUo',
			size : -7193795873850875383,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'KGDm9k1gwQJrvabP',
				),
				$client->photoSize(
					type : '4AvsjBrVchWp8azx',
					w : 65,
					h : 55,
					size : 5,
				),
				$client->photoCachedSize(
					type : '3v6mJR1usXVz7o58',
					w : 69,
					h : 45,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'tbIM0LSiy8xW6Kkw',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'SjDXJ4ZgryYaOTdV',
					w : 0,
					h : 12,
					sizes : array(43),
				),
				$client->photoPathSize(
					type : 't8GRvpV9bEAPMdfT',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'PdD8IhfMsOqEt4za',
					w : 72,
					h : 84,
					size : 51,
					video_start_ts : -2020371.474609375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 8311272465026715320,
					background_colors : array(76),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 1794757513464700336,
					background_colors : array(22),
				),
			),
			dc_id : 51,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 94,
					h : 7,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'v5G6WeSs80RfmVkp',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 81,
						x : -584188.923828125,
						y : 1788443.4775390625,
						zoom : -1706776.53125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1178566.6845703125,
					w : 14,
					h : 97,
					preload_prefix_size : 3,
					video_start_ts : -938787.0439453125,
					video_codec : 'qY4N9xJhERIr5ctW',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 13,
					title : 'hLoKNdnkXmFjBUzA',
					performer : 'ujnM4qFi3wmHDXsS',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'RbcALfnF9GalNzv2',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '8o2ZaYTmPp3kMcHJ',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```