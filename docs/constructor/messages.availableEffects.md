# messages.availableEffects

**Description** : *The full list of usable animated message effects &raquo;*

**Layer** : 222

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
			id : -8394652284127657387,
			emoticon : 'WbnL4MHtlx57Ui3K',
			static_icon_id : 2951794461840241056,
			effect_sticker_id : -5378674481020585130,
			effect_animation_id : -8514310820566265504,
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -395112203097151795,
		),
		$client->document(
			id : -7234693244596242181,
			access_hash : -2763377923621363866,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 42,
			mime_type : 'gDCuWHnJXYtRKaxM',
			size : 3606638102585466097,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'NyuoXvk1wVbDepts',
				),
				$client->photoSize(
					type : '36ErbI8pHOxA1mFs',
					w : 62,
					h : 25,
					size : 34,
				),
				$client->photoCachedSize(
					type : 'cpuLMb6JstX8NgwP',
					w : 20,
					h : 54,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'xTwGuM7nRWvcPFCO',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'lXSIYa3epJq9rx5j',
					w : 68,
					h : 71,
					sizes : array(17),
				),
				$client->photoPathSize(
					type : 'CuU6X01IBRtLYgfh',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'j2QBZcs4hf7SlMKd',
					w : 48,
					h : 100,
					size : 87,
					video_start_ts : -908443.0458984375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -8193771888708649682,
					background_colors : array(21),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -1922301990958540595,
					background_colors : array(85),
				),
			),
			dc_id : 29,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 15,
					h : 30,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'K132QVkgJqFN5fYe',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 77,
						x : 1440382.9384765625,
						y : 955514.7734375,
						zoom : 219130.4208984375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 220122.3203125,
					w : 2,
					h : 76,
					preload_prefix_size : 95,
					video_start_ts : 1897176.6796875,
					video_codec : 'mNI9d0J5oUYBw8uZ',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 26,
					title : 'eo5mtB7jnMsKUYaf',
					performer : 'DkmsQyxtjFqPJGXu',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'diFIz7el30WDKnwb',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'QqZOFpXSVAmiMvR1',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```