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
			id : -7611694932146465136,
			emoticon : 'iPKGzL72YtaT1dvc',
			static_icon_id : -6139957438558113400,
			effect_sticker_id : -6891828466393827204,
			effect_animation_id : 1322115873967532050,
		),
	),
	documents : array(
		$client->documentEmpty(
			id : 5619935124896459266,
		),
		$client->document(
			id : 5629305263146798605,
			access_hash : -5126169667359682814,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 89,
			mime_type : '1CdMvwkNR8U3VSp0',
			size : -6852706333942105785,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'SUaQGLCjT1Emu7ky',
				),
				$client->photoSize(
					type : 'ENwVGSY2F8BZ3OAa',
					w : 34,
					h : 54,
					size : 18,
				),
				$client->photoCachedSize(
					type : 'HsP7vJ6i9gNbCIfO',
					w : 90,
					h : 4,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'esjn9WtHAcuBahyY',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'QCEgeMXp5fdTHAOV',
					w : 28,
					h : 35,
					sizes : array(99),
				),
				$client->photoPathSize(
					type : 'yav376riTODJmIBw',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'kp9BTo7xYFjOASXM',
					w : 35,
					h : 34,
					size : 71,
					video_start_ts : 146751.26171875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 3992388360803323576,
					background_colors : array(93),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -790066821605913067,
					background_colors : array(34),
				),
			),
			dc_id : 39,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 70,
					h : 82,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'mGT1vpZdkHMgQlxj',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 91,
						x : 853499.8251953125,
						y : -1721830.8759765625,
						zoom : 2059394.537109375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1399257.962890625,
					w : 40,
					h : 94,
					preload_prefix_size : 2,
					video_start_ts : -2007668.1083984375,
					video_codec : 'YtgzO9rojCMALlFI',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 29,
					title : 'BQe2SCcnbgKAzy4P',
					performer : '1G6gSAcUXZHvdJPi',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'DatphLJA5iGywBIS',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '0ZDuVbJT4ncKd1Cl',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```