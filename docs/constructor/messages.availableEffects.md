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
			id : -4461076587090722477,
			emoticon : 'mgr2FZucV5jJUDK0',
			static_icon_id : 7566551240668679830,
			effect_sticker_id : -950771273714595284,
			effect_animation_id : 2110017664458538769,
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -7635550666362714231,
		),
		$client->document(
			id : 208954755345208349,
			access_hash : 4358246575601227909,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 38,
			mime_type : 'VspN71bvdyIwl6L4',
			size : 893998664614897268,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'TkOhG6bciALuygNn',
				),
				$client->photoSize(
					type : '74iKpqnLZSbXFMmc',
					w : 25,
					h : 81,
					size : 5,
				),
				$client->photoCachedSize(
					type : 'EVCfyHnjS5s2Iokd',
					w : 86,
					h : 78,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '6mpMnBrFa2Thslxo',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'tpRX5UAkluSd1PMi',
					w : 39,
					h : 56,
					sizes : array(88),
				),
				$client->photoPathSize(
					type : '4PgaIRCsrK9EFlwm',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'gRpfG1dezHx6MCrm',
					w : 51,
					h : 16,
					size : 20,
					video_start_ts : 1596844.2890625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -8614040459311049763,
					background_colors : array(36),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 4148984487922272987,
					background_colors : array(49),
				),
			),
			dc_id : 70,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 8,
					h : 68,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'it3U0eY5GnIDL2jJ',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 30,
						x : -1450156.2177734375,
						y : -1780809.7255859375,
						zoom : -414253.3037109375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1658947.4658203125,
					w : 100,
					h : 40,
					preload_prefix_size : 88,
					video_start_ts : -1365747.28515625,
					video_codec : '5aWfhZ1v0eyndB98',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 42,
					title : 'iIhgTs1c3uzf7VOv',
					performer : '7AmitobV0KM59uBN',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'yDXdWgSO3QGC8uH9',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '5N90VlsORdivS2Tt',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```