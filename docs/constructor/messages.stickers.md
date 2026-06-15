# messages.stickers

**Description** : *Found stickers*

**Layer** : 227

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
			id : 7666780806232748571,
		),
		$client->document(
			id : -2048861356841102165,
			access_hash : 1949105102013472854,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 20,
			mime_type : 'QH7rPy5TdhbYksZ8',
			size : -1788921065686504348,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'OPFYplBE8dG7hwST',
				),
				$client->photoSize(
					type : 'ks2QFuJXx8ni49BK',
					w : 30,
					h : 45,
					size : 25,
				),
				$client->photoCachedSize(
					type : '3hLBY0vjNP19C8Jb',
					w : 16,
					h : 24,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'gyGpmT76KfJcjeVi',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'kKL1Fg5YSdRUTryj',
					w : 91,
					h : 72,
					sizes : array(4),
				),
				$client->photoPathSize(
					type : 'UIr34CnOSqb5BGRy',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'qrR8hS5sw7o3DVcX',
					w : 23,
					h : 99,
					size : 80,
					video_start_ts : -1814946.9365234375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 4841487872750085722,
					background_colors : array(58),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -5588302764205485980,
					background_colors : array(95),
				),
			),
			dc_id : 37,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 45,
					h : 42,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'pKFo47MRcwTjA8Lx',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 12,
						x : 418101.763671875,
						y : -932986.55078125,
						zoom : -1869968.1357421875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -894441.3662109375,
					w : 37,
					h : 38,
					preload_prefix_size : 33,
					video_start_ts : -1394905.361328125,
					video_codec : '2htUBz5qDOCRmTFZ',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 87,
					title : 'fsTw2HQo95mqBZGI',
					performer : '0jhaIG2pW9XJgKVn',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'gjaPs7n0GelhUQEF',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'IRkWCu2qt9YS5jA6',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```