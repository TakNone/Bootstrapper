# messages.favedStickers

**Description** : *Favorited stickers*

**Layer** : 214

```tl
messages.favedStickers#2cb51097 hash:long packs:Vector<StickerPack> stickers:Vector<Document> = messages.FavedStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>packs</mark> | [`Vector<StickerPack>`](type/StickerPack) | Emojis associated to stickers |
| <mark>stickers</mark> | [`Vector<Document>`](type/Document) | Favorited stickers |

---

## Type

[messages.FavedStickers](type/messages.FavedStickers)

---

## Example

```php
$messagesFavedStickers = $client->messages->favedStickers(
	hash : 3017184905405075985,
	packs : array(
		$client->stickerPack(
			emoticon : 'w9vedHsoUxl0Bbkz',
			documents : array(1774258835294897288),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : -8501780556864851283,
		),
		$client->document(
			id : 1992810493685670098,
			access_hash : 6667389717509867643,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 75,
			mime_type : 'QhIdgmjXzsGwqLiF',
			size : 5779480022604803799,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'JPRpf3ExAWidobzN',
				),
				$client->photoSize(
					type : 'XGJi0teS3HkpYPoD',
					w : 83,
					h : 67,
					size : 79,
				),
				$client->photoCachedSize(
					type : 'aKp5fVhbB3JwZtXG',
					w : 10,
					h : 65,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'hCsg1Lne0kTxUb7A',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '5JnPhVBoySTZxd1I',
					w : 10,
					h : 45,
					sizes : array(62),
				),
				$client->photoPathSize(
					type : 'OSyzPZYAfF9NrCEQ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'IbYkZAGziedM06NV',
					w : 77,
					h : 90,
					size : 61,
					video_start_ts : 562670.9296875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -8963924083734648899,
					background_colors : array(52),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 8573487010820590932,
					background_colors : array(0),
				),
			),
			dc_id : 66,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 31,
					h : 22,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'N6iTFrgf9mPEjZJb',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 368732.439453125,
					w : 7,
					h : 32,
					preload_prefix_size : 33,
					video_start_ts : 1007581.068359375,
					video_codec : 'UmBJv3ptnzqbPo1i',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 81,
					title : 'XdyL2MDeIvgEOHPq',
					performer : 'JHwxDPChrYpiIRtZ',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'nD5vz6pfdRLVgxiW',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'RmxTBisC6FQbn4zh',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```