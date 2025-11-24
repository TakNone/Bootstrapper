# messages.availableEffects

**Description** : *The full list of usable animated message effects &raquo;*

**Layer** : 218

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
			id : -6200396256136251019,
			emoticon : 'kZlYFJNaO3Gni1PQ',
			static_icon_id : -9163753732033234338,
			effect_sticker_id : 594572561977459840,
			effect_animation_id : 2639343768150826224,
		),
	),
	documents : array(
		$client->documentEmpty(
			id : 9009776079667521813,
		),
		$client->document(
			id : -3745242884176915236,
			access_hash : 8924622124661931858,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 16,
			mime_type : 'vePbUMrBhd6fZJxI',
			size : 3237014875715173696,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'xawmnNH07rKVgfvA',
				),
				$client->photoSize(
					type : '9N2gZmlns1pLfu4o',
					w : 24,
					h : 67,
					size : 71,
				),
				$client->photoCachedSize(
					type : 'KACQBnesJHlR3DdZ',
					w : 93,
					h : 65,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'osU29mqxdLXuw6Sv',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'iOoekfZzNGQxLHB5',
					w : 29,
					h : 27,
					sizes : array(4),
				),
				$client->photoPathSize(
					type : 'EOBkjctuoAqH1b8V',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'qsi5zpM6trdeUR3a',
					w : 91,
					h : 57,
					size : 55,
					video_start_ts : 194060.1044921875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 909267555254798745,
					background_colors : array(22),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 3121794084807458787,
					background_colors : array(20),
				),
			),
			dc_id : 0,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 82,
					h : 33,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'imVANaQTH2Uz1798',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 4,
						x : -1796885.888671875,
						y : -1758317.169921875,
						zoom : -1853173.8369140625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 180548.9990234375,
					w : 47,
					h : 28,
					preload_prefix_size : 9,
					video_start_ts : -48053.0107421875,
					video_codec : 'fpAU9orji1Hk8bJZ',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 62,
					title : 'zYA0BxpNtF59uWl6',
					performer : 'aRzqH320XM8FS6uI',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'j1umBWfGERqe8D9H',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'THNurgZfaY076sec',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```