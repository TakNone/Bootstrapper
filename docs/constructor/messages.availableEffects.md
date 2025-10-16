# messages.availableEffects

**Description** : *The full list of usable animated message effects &raquo;*

**Layer** : 216

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
			id : -3671598887227540204,
			emoticon : 'lPU2Q0JIvC1Tcxyn',
			static_icon_id : 1397007483405538894,
			effect_sticker_id : 1740315372130439544,
			effect_animation_id : -4337246957980529320,
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -750936788811116334,
		),
		$client->document(
			id : -2943387209772482552,
			access_hash : 2913373063308873565,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 63,
			mime_type : 'IuFNtz27hUBpnxHd',
			size : 4675305885683464941,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '3bhRakOUpDIcJXWL',
				),
				$client->photoSize(
					type : 'xc63jz1Fl4MX8BTH',
					w : 25,
					h : 18,
					size : 60,
				),
				$client->photoCachedSize(
					type : 'Ldy851QjGUzTPHaC',
					w : 26,
					h : 56,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'e7WBFHrtuQEDMXxm',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'pE0FJbYODUQLi9Ir',
					w : 94,
					h : 35,
					sizes : array(47),
				),
				$client->photoPathSize(
					type : '58Eqef7Yrx9pV640',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'rne5UHI0lfP9pbsN',
					w : 97,
					h : 73,
					size : 7,
					video_start_ts : 184729.583984375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -2279239379001752749,
					background_colors : array(69),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -5589454907278668881,
					background_colors : array(27),
				),
			),
			dc_id : 9,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 61,
					h : 60,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'c8NT2DXCER1hasYZ',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1835310.857421875,
					w : 62,
					h : 71,
					preload_prefix_size : 67,
					video_start_ts : 491186.79296875,
					video_codec : '9Y3OSwjIerNn8ctf',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 67,
					title : 'VxH7tR5loQXTYrUE',
					performer : 'DSP8Cdt501VFq2uj',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'dqwcZ0oOAgyKJhrS',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'UBWb1mw9O5qtdXk0',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```