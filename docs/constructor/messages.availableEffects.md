# messages.availableEffects

**Description** : *The full list of usable animated message effects &raquo;*

**Layer** : 211

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
	hash : 100,
	effects : array(
		$client->availableEffect(
			premium_required : true,
			id : 5419456833590446928,
			emoticon : 'xqk7F0zvVYuHBtXc',
			static_icon_id : -1802991598252857377,
			effect_sticker_id : 633085037782099724,
			effect_animation_id : -1864525558092791057,
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -7829876771578696051,
		),
		$client->document(
			id : 4802053540534156861,
			access_hash : -448772811831594420,
			file_reference : 'j?fK?LiveProto?2|n',
			date : 34,
			mime_type : 'qEncy7AaJC460Gpi',
			size : -706327402551140073,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'q9lRLi8z0u2Prw3y',
				),
				$client->photoSize(
					type : '5oHGF7cukpzT0yNi',
					w : 45,
					h : 41,
					size : 67,
				),
				$client->photoCachedSize(
					type : 'hP9ZtgYwKiXUcq70',
					w : 10,
					h : 63,
					bytes : 'dy?LiveProto`U?i?',
				),
				$client->photoStrippedSize(
					type : 'zpiqNwtEn9a5u3Yd',
					bytes : '?????LiveProto????n',
				),
				$client->photoSizeProgressive(
					type : 'nBrYGy5iPevQWbwM',
					w : 65,
					h : 56,
					sizes : array(75),
				),
				$client->photoPathSize(
					type : 'QoyazlSYT3Xhfm8L',
					bytes : '?B{?RLiveProto{t἟',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'dZ0V1cjAJmYiM7wh',
					w : 30,
					h : 31,
					size : 3,
					video_start_ts : 688689.158203125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -1897838877826505243,
					background_colors : array(23),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 380948205952026295,
					background_colors : array(12),
				),
			),
			dc_id : 89,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 42,
					h : 40,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'hY9Hk2rRAyNIs7Ko',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1322486.2607421875,
					w : 45,
					h : 12,
					preload_prefix_size : 39,
					video_start_ts : 674324.9716796875,
					video_codec : 'RPqZ2I5GJOSUYcBn',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 49,
					title : 'x4XrAvENRUnzSp7M',
					performer : 'E8XK5a2elMo6FrDt',
					waveform : 'ٰ??LiveProto?O??',
				),
				$client->documentAttributeFilename(
					file_name : 'TavlxL6COAgtU0H9',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'SgtfsbH7YD5Koz0v',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```