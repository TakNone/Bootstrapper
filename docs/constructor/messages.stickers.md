# messages.stickers

**Description** : *Found stickers*

**Layer** : 211

```tl
messages.stickers#30a6ec7e hash:long stickers:Vector<Document> = messages.Stickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>stickers</mark> | [`Vector<Document>`](type/Document) | Stickers |

---

## Type

[messages.Stickers](type/messages.Stickers)

---

## Example

```php
$messagesStickers = $client->messages->stickers(
	hash : 9094702739769605857,
	stickers : array(
		$client->documentEmpty(
			id : -3692066106434660934,
		),
		$client->document(
			id : -3814128853186496690,
			access_hash : -4888903819682878568,
			file_reference : 'V?;{?LiveProto??J?7',
			date : 32,
			mime_type : 'NjDBUhMXOiRHKou0',
			size : -2606115467258768927,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'NwjR64mA7vagLlqH',
				),
				$client->photoSize(
					type : 'ywnFlz83WexfG7Sv',
					w : 87,
					h : 52,
					size : 16,
				),
				$client->photoCachedSize(
					type : 'A5DEqHTgSR2tmjzv',
					w : 2,
					h : 53,
					bytes : 'ԍ??DLiveProto?#k?',
				),
				$client->photoStrippedSize(
					type : 'GPjzaAw2VBdTiyRo',
					bytes : '?$E3?LiveProto??J?',
				),
				$client->photoSizeProgressive(
					type : 'vGFEAZzndJqkRxQb',
					w : 86,
					h : 32,
					sizes : array(48),
				),
				$client->photoPathSize(
					type : 'jXAQEsMW7385RVvF',
					bytes : '????LiveProto5x?b$',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'GcMidUghA052JDfE',
					w : 76,
					h : 88,
					size : 1,
					video_start_ts : -1727748.48046875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -3420520225586594234,
					background_colors : array(16),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -6331981378285714737,
					background_colors : array(41),
				),
			),
			dc_id : 73,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 32,
					h : 94,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '7yArQY5Rxvp0OCh4',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1944307.6669921875,
					w : 72,
					h : 23,
					preload_prefix_size : 68,
					video_start_ts : -1778325.626953125,
					video_codec : 'YzILX3c6AiO5swRb',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 56,
					title : 'Bi3qTwNIjtoGcLfa',
					performer : 'WZ8K56HhpCgjAemO',
					waveform : 'C' . "\0" . 'ܐLiveProto?^?]',
				),
				$client->documentAttributeFilename(
					file_name : '2u6j3cqQlJkyK15x',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'vZmN3O1aQl2gXCbn',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```