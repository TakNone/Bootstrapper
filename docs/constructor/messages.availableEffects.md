# messages.availableEffects

**Description** : *The full list of usable animated message effects &raquo;*

**Layer** : 227

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
			id : -4854803536357790391,
			emoticon : 'KFUVfunamXoQ1TLd',
			static_icon_id : -1663746806239930780,
			effect_sticker_id : -6082917460131931613,
			effect_animation_id : -8486902573899720940,
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -6435658487446010060,
		),
		$client->document(
			id : 8216567131934989886,
			access_hash : -4512809789961814748,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 97,
			mime_type : '3TZiOIBxqVgtcJnE',
			size : 5154190551000680762,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'nIu0rdAxq3BK7MTS',
				),
				$client->photoSize(
					type : 'qBPhyeL6Uc8ow2EW',
					w : 62,
					h : 80,
					size : 19,
				),
				$client->photoCachedSize(
					type : 'bQ2EW7lpRUDqjkxX',
					w : 54,
					h : 24,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'Q3m5LGKhJUnlXixq',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'b3YWV79ikjLyoSQN',
					w : 30,
					h : 12,
					sizes : array(63),
				),
				$client->photoPathSize(
					type : 'YJ5bVRs9doK8EG6z',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'zhlCrikTG920cRpu',
					w : 83,
					h : 55,
					size : 59,
					video_start_ts : 9131.9052734375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 8920742796901588288,
					background_colors : array(38),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -5251896929422216199,
					background_colors : array(72),
				),
			),
			dc_id : 82,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 53,
					h : 3,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'P2NVCJxptGiB4mHE',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 74,
						x : -739712.255859375,
						y : 376391.8388671875,
						zoom : -457366.267578125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -236264.26171875,
					w : 57,
					h : 38,
					preload_prefix_size : 96,
					video_start_ts : -1225664.4658203125,
					video_codec : 'YB6sjtRxCQ8K94lS',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 14,
					title : 'yJm4CsE3BN0FqkKL',
					performer : 'gJyTD7hjYKcB6SUk',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'nkLhOGjFUWHCIru5',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'lNKQxrMm4qkhBpJT',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```