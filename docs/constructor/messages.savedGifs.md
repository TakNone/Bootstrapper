# messages.savedGifs

**Description** : *Saved gifs*

**Layer** : 218

```tl
messages.savedGifs#84a02a0d hash:long gifs:Vector<Document> = messages.SavedGifs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>gifs</mark> | [`Vector<Document>`](type/Document) | List of saved gifs |

---

## Type

[messages.SavedGifs](type/messages.SavedGifs)

---

## Example

```php
$messagesSavedGifs = $client->messages->savedGifs(
	hash : 0,
	gifs : array(
		$client->documentEmpty(
			id : -1818616139584083190,
		),
		$client->document(
			id : -4662156817616452764,
			access_hash : 2701353295735779768,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 67,
			mime_type : 'ePG6x4fCdkRhHNFJ',
			size : -7914462083812160679,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'X6umAnblp4LwQDfS',
				),
				$client->photoSize(
					type : '3h2lir1Wg0fjP9es',
					w : 57,
					h : 17,
					size : 33,
				),
				$client->photoCachedSize(
					type : '5YaCEOecdFS0Qvg4',
					w : 85,
					h : 59,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'EmB3yrCziaXsxel1',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'OD3PzL79G8B4cRjw',
					w : 59,
					h : 31,
					sizes : array(38),
				),
				$client->photoPathSize(
					type : 'cTCANYmRtrv5KSF9',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'O75fgEPl6tWc2MDz',
					w : 5,
					h : 94,
					size : 100,
					video_start_ts : 1452884.9248046875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 6842374371764387330,
					background_colors : array(5),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 2780562251413057800,
					background_colors : array(64),
				),
			),
			dc_id : 68,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 70,
					h : 0,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'N93CEwnzdYPxHAkQ',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 40,
						x : -1328408.3095703125,
						y : 518317.9453125,
						zoom : -1331750.400390625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 99324.578125,
					w : 35,
					h : 19,
					preload_prefix_size : 58,
					video_start_ts : -1564468.2646484375,
					video_codec : 'vNIpJ47LhX5RBHQO',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 59,
					title : '51C8hfuRTLmgrF0O',
					performer : 'BZ30ndMVypgixbWN',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'lHOspnubr9VdhNPw',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'GjKlRFd9QmEcSwAC',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```