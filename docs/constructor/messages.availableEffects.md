# messages.availableEffects

**Description** : *The full list of usable animated message effects &raquo;*

**Layer** : 229

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
			id : 2232610754114685203,
			emoticon : 'zTNqgRs8nwLVkiom',
			static_icon_id : 5649792179589975582,
			effect_sticker_id : 8117939392314133419,
			effect_animation_id : 2781478572302544147,
		),
	),
	documents : array(
		$client->documentEmpty(
			id : 5070054455509130034,
		),
		$client->document(
			id : -1255842272031367703,
			access_hash : -6390443132797916083,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 72,
			mime_type : 'FXsJ0BOGvulWKic9',
			size : 4970386510153956988,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'F1waRcxd6Zu5jqkU',
				),
				$client->photoSize(
					type : 'pqjYi8V3C104GDHh',
					w : 26,
					h : 8,
					size : 92,
				),
				$client->photoCachedSize(
					type : 'tX9PbATQSd3iJWGB',
					w : 90,
					h : 57,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'JY1hxGKHz5LIN3bW',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'v8QDTJzS1YeCx9uc',
					w : 1,
					h : 89,
					sizes : array(3),
				),
				$client->photoPathSize(
					type : 'sREtamHZDGBbhjNM',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'qvGyb5ULP2wKtpMF',
					w : 42,
					h : 95,
					size : 96,
					video_start_ts : 261234.646484375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 6836431687522279295,
					background_colors : array(100),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -6934983275740013470,
					background_colors : array(9),
				),
			),
			dc_id : 87,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 86,
					h : 48,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'IJT4AE57snMv6qa1',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 42,
						x : 629962.810546875,
						y : 814030.9560546875,
						zoom : 1762887.9189453125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 340407.0703125,
					w : 7,
					h : 85,
					preload_prefix_size : 4,
					video_start_ts : -727075.9775390625,
					video_codec : 'e2BIzc7ayGjAMKSL',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 64,
					title : 'yZdKYuS50cTApqz9',
					performer : 'Uq1KNTBOfCE7ySp9',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'zFS6DC7goVebjUIX',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'CuEZkxHejXvsmbKi',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```