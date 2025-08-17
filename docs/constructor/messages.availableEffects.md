# messages.availableEffects

**Description** : *The full list of usable animated message effects »*

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
	hash : 72,
	effects : array(
		$client->availableEffect(
			premium_required : true,
			id : -7654186459395142247,
			emoticon : 'uYyR6zV1DfetMQq7',
			static_icon_id : -6067698197349713884,
			effect_sticker_id : 4176919476269568923,
			effect_animation_id : 1706195119715354119,
		),
	),
	documents : array(
		$client->documentEmpty(
			id : 4797795309028777403,
		),
		$client->document(
			id : -7401210820637626781,
			access_hash : -8638651353132938599,
			file_reference : '?????LiveProtoKaYRK',
			date : 58,
			mime_type : 'pX5RPcYSjiTAUam1',
			size : 5217511779209847483,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'HZpfMX4UiatnQmES',
				),
				$client->photoSize(
					type : 'T6m4Apf2uFyDqgwB',
					w : 1,
					h : 59,
					size : 65,
				),
				$client->photoCachedSize(
					type : 'T8DaNhA07JbsHiUE',
					w : 92,
					h : 57,
					bytes : '???i?LiveProto?1H?',
				),
				$client->photoStrippedSize(
					type : 'C8mO7T0rZ5Ao4WGX',
					bytes : '?ē??LiveProto??.?',
				),
				$client->photoSizeProgressive(
					type : 'eMEnvmYIPQVSd5Aa',
					w : 34,
					h : 15,
					sizes : array(47),
				),
				$client->photoPathSize(
					type : 'I8K6y3lmscAE2JvN',
					bytes : '??oU?LiveProto&??޾',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'dvJKm5TCArWxn1gu',
					w : 23,
					h : 10,
					size : 38,
					video_start_ts : -1063259.0654296875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -5373827878514065085,
					background_colors : array(34),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -3109945296475597103,
					background_colors : array(100),
				),
			),
			dc_id : 17,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 45,
					h : 29,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'k562esGl9znCqmXa',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -550101.26953125,
					w : 4,
					h : 95,
					preload_prefix_size : 75,
					video_start_ts : -728144.3994140625,
					video_codec : 'Mrc82JBjTtHKzsNX',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 86,
					title : 'XboSKODMB6i1fCvk',
					performer : 'FOeyhPIWwHdG170A',
					waveform : '?>?ݎLiveProtoC}??{',
				),
				$client->documentAttributeFilename(
					file_name : 'lyuQsLZWURHi2wfD',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'gzQy0FDNOWvcr4pJ',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```