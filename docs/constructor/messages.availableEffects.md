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
			id : -5333883188348769749,
			emoticon : 'UnaBe5K6kxRjCm8o',
			static_icon_id : -1674043100398643640,
			effect_sticker_id : -6057166474102592573,
			effect_animation_id : 7663679265945854241,
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -1170101960671016773,
		),
		$client->document(
			id : -409120288317610918,
			access_hash : 5555155507273895154,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 72,
			mime_type : 'Yv2UnrlCmgzw36DJ',
			size : -6472522379204885835,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'RoNIqgeh3cni6mOj',
				),
				$client->photoSize(
					type : 'VqyPaxt9GTEg2jzN',
					w : 32,
					h : 52,
					size : 28,
				),
				$client->photoCachedSize(
					type : 'dwE7fYgqHpblhzyW',
					w : 37,
					h : 81,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'I5ZohXO7FAtVz403',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'g5CsFLoPaN4yjRUf',
					w : 51,
					h : 74,
					sizes : array(89),
				),
				$client->photoPathSize(
					type : 'OzxDft2jmvUNukPQ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'adrVQK0PZpf2u4jx',
					w : 18,
					h : 21,
					size : 50,
					video_start_ts : -1913894.7900390625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 5612316186810486513,
					background_colors : array(8),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -2129863955842787403,
					background_colors : array(31),
				),
			),
			dc_id : 88,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 71,
					h : 9,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'e7sWwUXItkSZD0BQ',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 55,
						x : 190775.67578125,
						y : -1593581.5390625,
						zoom : 830559.1982421875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1354157.1787109375,
					w : 54,
					h : 0,
					preload_prefix_size : 25,
					video_start_ts : 324160.2998046875,
					video_codec : 'KbWhkvCHwpo3xjcm',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 86,
					title : 'UvJ9R18AH2X5jIkQ',
					performer : 'qYR7St6pW5NHviw4',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'dNnyDgErjAFkRXIK',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '3oHU5vlZyOPgcueh',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```