# messages.stickers

**Description** : *Found stickers*

**Layer** : 214

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
	hash : 0,
	stickers : array(
		$client->documentEmpty(
			id : -6828729957243798168,
		),
		$client->document(
			id : 8513600624614104583,
			access_hash : 3245771500197645522,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 74,
			mime_type : 'nsHx6ZVz7jbIktpE',
			size : -3275640374344226208,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'T0Kfrj7YSVXsvebd',
				),
				$client->photoSize(
					type : 'f6NvHjpiXyKI2ncT',
					w : 49,
					h : 41,
					size : 26,
				),
				$client->photoCachedSize(
					type : '0IC3tm5TzsGYbNlw',
					w : 32,
					h : 87,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'vFTVt39qhKzLx56n',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'uydqSK7XemZYDoG5',
					w : 34,
					h : 85,
					sizes : array(31),
				),
				$client->photoPathSize(
					type : 'Ac8zQBJKFdxwCmTM',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'hFpY42VZ3Hz9Bs5O',
					w : 11,
					h : 11,
					size : 10,
					video_start_ts : -1401679.5830078125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -8748587168536331201,
					background_colors : array(93),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -5736576947714180687,
					background_colors : array(58),
				),
			),
			dc_id : 59,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 22,
					h : 95,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'ZtDabhv92GKV8zpl',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 101313.8564453125,
					w : 39,
					h : 58,
					preload_prefix_size : 71,
					video_start_ts : 1166902.6220703125,
					video_codec : 'bhsHOK7i8UxnWG3t',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 63,
					title : 'WQ2yjAvo70PRBU8w',
					performer : 'e85uNBjbF3oZkG1g',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '3ehuaMsI6SZtW1XD',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'ofOJbtuUqVySvnxi',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```