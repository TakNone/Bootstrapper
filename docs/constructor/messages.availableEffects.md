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
			id : 5154857135909062725,
			emoticon : '6KCDq5rYJPSA7nod',
			static_icon_id : -943909362050804850,
			effect_sticker_id : 3303184348562238851,
			effect_animation_id : 7023700440978620829,
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -3419310434383358386,
		),
		$client->document(
			id : 5539181753393549904,
			access_hash : 3904745376571189525,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 25,
			mime_type : 'SK4zl90G71UBqIXL',
			size : -8519718106572215825,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'ko2AjIn1dT9m4p8Y',
				),
				$client->photoSize(
					type : 'w9GRamixVK5dt37j',
					w : 40,
					h : 1,
					size : 65,
				),
				$client->photoCachedSize(
					type : 'Gcta7ISemJ9610pX',
					w : 21,
					h : 52,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '0PROGqLmnCZzcEBT',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '4N7DlaoYkCXKnQuG',
					w : 86,
					h : 47,
					sizes : array(68),
				),
				$client->photoPathSize(
					type : 'AP15Ob3wId4catqh',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '5Jp7q93Fk1Xi6Tf0',
					w : 42,
					h : 56,
					size : 30,
					video_start_ts : -581612.1591796875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 5966166646997820818,
					background_colors : array(77),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 8692379827160923378,
					background_colors : array(88),
				),
			),
			dc_id : 23,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 93,
					h : 96,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'LiBhI5Ck6PcaSeb0',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1352133.8857421875,
					w : 90,
					h : 11,
					preload_prefix_size : 73,
					video_start_ts : 379620.673828125,
					video_codec : 'qv9jtWMCRl7UfOV4',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 79,
					title : 'VHysOitzJw2dCLjk',
					performer : 'YO0oF7tem2bz4j3p',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '1LvMl3Xq4IRFxmz9',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'RqsvKHf81te6Tjuw',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```