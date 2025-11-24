# messages.stickers

**Description** : *Found stickers*

**Layer** : 218

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
			id : -5118650696774009475,
		),
		$client->document(
			id : -5741043366184840867,
			access_hash : 5558497241355109795,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 86,
			mime_type : 'LvReXWIxMNCr468S',
			size : 6726362836371977913,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'PMdo2VCewq4U0N5f',
				),
				$client->photoSize(
					type : 'rT5goDPOh6XNBZ9c',
					w : 52,
					h : 0,
					size : 59,
				),
				$client->photoCachedSize(
					type : 'uwka9lUJRjmEspKA',
					w : 1,
					h : 74,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'SP6vNcjQFUuqL9Mr',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '1Wu4oaXCUVGOPtNp',
					w : 63,
					h : 56,
					sizes : array(77),
				),
				$client->photoPathSize(
					type : 'DqS1JQ7eRYdTf8Iz',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'MVLwOQX1eRCzabsc',
					w : 13,
					h : 15,
					size : 42,
					video_start_ts : 405601.4443359375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 4154375596778733724,
					background_colors : array(86),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 1102350522587949289,
					background_colors : array(86),
				),
			),
			dc_id : 70,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 2,
					h : 87,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'jbNMn7KWpysRScPZ',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 99,
						x : 544112.3916015625,
						y : 508720.0654296875,
						zoom : -1318696.3896484375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 324178.8564453125,
					w : 36,
					h : 26,
					preload_prefix_size : 12,
					video_start_ts : 1531942.5947265625,
					video_codec : '62DWAkgjf0MynuqG',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 92,
					title : 'Q0uGWnOfIdBPc3yj',
					performer : 'INxl2rg4enmt0iSo',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'DKOGCnaw0qS9ZEb4',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '76ldWfQCL4YNKjct',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```