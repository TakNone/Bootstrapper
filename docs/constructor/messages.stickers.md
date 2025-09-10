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
	hash : 8510324525479029933,
	stickers : array(
		$client->documentEmpty(
			id : 2728833132717449811,
		),
		$client->document(
			id : -2430234509969796170,
			access_hash : 7495792429294055797,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 90,
			mime_type : 'vqhNHkIoQ7XdL8Cy',
			size : 235636087027121667,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'RDSnEkHeilQw3oqI',
				),
				$client->photoSize(
					type : 'b4vxZhXm6KMpIqJj',
					w : 2,
					h : 96,
					size : 75,
				),
				$client->photoCachedSize(
					type : 'v9fxLGbsk08Rul1g',
					w : 58,
					h : 78,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'oXcDpx3EBRzad1KT',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'uTnlDksjMRSbBIcw',
					w : 93,
					h : 86,
					sizes : array(72),
				),
				$client->photoPathSize(
					type : 'l75Cm6dQNFUEqVzT',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'ngaiORvjUAbGdtmF',
					w : 100,
					h : 18,
					size : 83,
					video_start_ts : 675882.05859375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -5726651980278179225,
					background_colors : array(7),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -6125926927633245593,
					background_colors : array(69),
				),
			),
			dc_id : 21,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 75,
					h : 97,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'tBjvrSfzZpuR6lVG',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1058602.2431640625,
					w : 71,
					h : 71,
					preload_prefix_size : 71,
					video_start_ts : -882474.5224609375,
					video_codec : 'inmBC5ZwxH2QRKGb',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 13,
					title : '2fyaNerb5EvozkRF',
					performer : 'Ubwu83lSzMVAyr2q',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'G3LTb5DP2frV4eti',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '9TXgNiVFcl1GYvsn',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```