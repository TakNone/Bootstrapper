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
	hash : 0,
	effects : array(
		$client->availableEffect(
			premium_required : true,
			id : 8596598758408441840,
			emoticon : 'iKh2JW3xTwRNLjBt',
			static_icon_id : 918571412004338622,
			effect_sticker_id : 380241777476708789,
			effect_animation_id : 357427722176589310,
		),
	),
	documents : array(
		$client->documentEmpty(
			id : 7565193125266911669,
		),
		$client->document(
			id : 7328246471878301373,
			access_hash : -7190396825278324391,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 8,
			mime_type : 's5vlzA8tLaJN14Wi',
			size : -2191668104386018904,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'kLxzDwY0spjbTN86',
				),
				$client->photoSize(
					type : 'NixwBl2o4XMyuGS3',
					w : 63,
					h : 34,
					size : 64,
				),
				$client->photoCachedSize(
					type : '4CvnK8asTIXL1m3h',
					w : 78,
					h : 40,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 't6mEWSGDHBMwv1Xu',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'fZDNTzvJL26Iu41X',
					w : 0,
					h : 35,
					sizes : array(92),
				),
				$client->photoPathSize(
					type : 'vhm6ZAjKYrnoU1d8',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '5zmUthncEu7Al9oG',
					w : 67,
					h : 34,
					size : 25,
					video_start_ts : -1362212.138671875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -1935977657349125485,
					background_colors : array(95),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -2045408154711436230,
					background_colors : array(25),
				),
			),
			dc_id : 25,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 48,
					h : 97,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'eAa8gurh1ZCIqjXv',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1232873.8837890625,
					w : 91,
					h : 45,
					preload_prefix_size : 2,
					video_start_ts : -95938.75,
					video_codec : 'nGQ0gtyvSracPRsz',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 32,
					title : 'D51igcCrmOXIWMz8',
					performer : 'dCRWDgSiut1xj4VN',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'ESfnsriV9kLblAzK',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'EYTVCm4D9f53sqHg',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```