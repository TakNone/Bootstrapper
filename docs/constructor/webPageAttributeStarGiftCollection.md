# webPageAttributeStarGiftCollection

**Layer** : 214

```tl
webPageAttributeStarGiftCollection#31cad303 icons:Vector<Document> = WebPageAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>icons</mark> | [`Vector<Document>`](type/Document) | NOTHING |

---

## Type

[WebPageAttribute](type/WebPageAttribute)

---

## Example

```php
$webPageAttribute = $client->webPageAttributeStarGiftCollection(
	icons : array(
		$client->documentEmpty(
			id : 4253445059016792777,
		),
		$client->document(
			id : -9096840087719660530,
			access_hash : 1558281194251843999,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 42,
			mime_type : 'IFBSNLOAqC905Eig',
			size : -2008676025961476572,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'kzNh1DZI07cWBApt',
				),
				$client->photoSize(
					type : 'D9gZSME362dnz5GO',
					w : 13,
					h : 27,
					size : 76,
				),
				$client->photoCachedSize(
					type : 'U0WEriyvwF9RBIkm',
					w : 86,
					h : 44,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '0nsVFixJId2cSgPl',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'wh6rUVJLuSPODjsb',
					w : 5,
					h : 42,
					sizes : array(54),
				),
				$client->photoPathSize(
					type : 'WmguJGplY2Pn8Dqh',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'Rsz4bQ3GIVPru6WX',
					w : 75,
					h : 89,
					size : 32,
					video_start_ts : 1189542.2685546875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -6048241019808139487,
					background_colors : array(70),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 7008728084530048682,
					background_colors : array(29),
				),
			),
			dc_id : 41,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 19,
					h : 2,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'g4hOCMRDALsHZBvF',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1318663.4892578125,
					w : 79,
					h : 40,
					preload_prefix_size : 6,
					video_start_ts : -1096161.4765625,
					video_codec : 'uxZiNaSbq2kD4RUe',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 97,
					title : 'GWCpJKxU1Y8t4Soh',
					performer : 'KHxA8GNLzmhdecgj',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'OHtFdirfBGzw73CS',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'jUtacgYiEOW95yfh',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```