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
			id : 601567366615742368,
		),
		$client->document(
			id : 2641701269292601338,
			access_hash : -5105793185623712621,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 6,
			mime_type : '5sv3CNLzKqAp41h8',
			size : -2813749747578004460,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'yNU7JpeWaCtKx2Yw',
				),
				$client->photoSize(
					type : 'sXvhZluwzF7iD8JL',
					w : 76,
					h : 76,
					size : 54,
				),
				$client->photoCachedSize(
					type : 'sIhpKn3yS7TFka1X',
					w : 29,
					h : 36,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'VNjbUQJ4rGDH2skf',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'FBm2rPYeKdIzSUxo',
					w : 21,
					h : 22,
					sizes : array(94),
				),
				$client->photoPathSize(
					type : 'wKQbUO8h9Lj2cFky',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'fdQyMDJhH5IE97kB',
					w : 17,
					h : 47,
					size : 30,
					video_start_ts : 1119096.001953125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 9180400505708988717,
					background_colors : array(21),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -6341595730403023110,
					background_colors : array(56),
				),
			),
			dc_id : 70,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 32,
					h : 5,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'l3qywHrxX7EM9fLj',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 3,
						x : 753398.8544921875,
						y : 1948186.89453125,
						zoom : 400837.8603515625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 467341.298828125,
					w : 46,
					h : 67,
					preload_prefix_size : 1,
					video_start_ts : 1202568.4150390625,
					video_codec : 'Tevr5Jic0dI3pCy2',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 94,
					title : 'Um0TZkIvbSaRXiC4',
					performer : 'NdQHp9atCncSuP5W',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'K5ZyRDm3pBA28h9u',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '5bwDYTHOj8Ws1yk0',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```