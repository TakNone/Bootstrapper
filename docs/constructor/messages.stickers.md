# messages.stickers

**Description** : *Found stickers*

**Layer** : 233

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
			id : 4928266643433644532,
		),
		$client->document(
			id : 4569562081922463354,
			access_hash : -5483004102728632870,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 7,
			mime_type : 'pO5WUXjPc6HSfaxB',
			size : 852561419628426694,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'mHCgxTrq48uo3pKF',
				),
				$client->photoSize(
					type : 'z0dmGeuoycZsXFDE',
					w : 84,
					h : 18,
					size : 6,
				),
				$client->photoCachedSize(
					type : 'WYK6b9hgkCSfvNGD',
					w : 73,
					h : 3,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'IAUD08Zn2xwzlgyb',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'uUXWbMhoBHwdlgL7',
					w : 96,
					h : 48,
					sizes : array(6),
				),
				$client->photoPathSize(
					type : '5d3t6VpQynTbjcSD',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'WMeYgJGs08xDfI5t',
					w : 71,
					h : 10,
					size : 34,
					video_start_ts : -1901801.1044921875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -3101753756339807796,
					background_colors : array(34),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 3610131043497415427,
					background_colors : array(20),
				),
			),
			dc_id : 20,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 51,
					h : 14,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'OrRXQqWsmpANMLzx',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 82,
						x : 1832604.5791015625,
						y : -1924297.83203125,
						zoom : 161319.1806640625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -25927.474609375,
					w : 3,
					h : 73,
					preload_prefix_size : 44,
					video_start_ts : -509826.2265625,
					video_codec : '1BCFij3Y7qlNrOoE',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 91,
					title : 'aKh16VPxt3y8JsO9',
					performer : 'b2KONrC4j38GTyoX',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'QDgIzibMWkNPT4Rm',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Ht7PejmcR9MvzsXZ',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```