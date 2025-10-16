# webPageAttributeStarGiftCollection

**Layer** : 216

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
			id : 6704681942942205397,
		),
		$client->document(
			id : -4244154417337180035,
			access_hash : -6597431495212902438,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 54,
			mime_type : 'UfAL9BYqZlgvWe0D',
			size : 5957311427279047857,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'eQPksudJ6R8YqmEI',
				),
				$client->photoSize(
					type : 'nFu1biO3QPCsB8d2',
					w : 43,
					h : 7,
					size : 15,
				),
				$client->photoCachedSize(
					type : 'aBNWVeT2ch9mMU6H',
					w : 79,
					h : 51,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'BSgyGZJ3Kzu1tA2i',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '2ameUKBVwIukRqSD',
					w : 73,
					h : 72,
					sizes : array(47),
				),
				$client->photoPathSize(
					type : 'VwzUo4gpdRyZIvtC',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'v1ESIt3slU5r0zhH',
					w : 84,
					h : 60,
					size : 72,
					video_start_ts : 571352.580078125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -5142626973568532798,
					background_colors : array(16),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 3277940311525589546,
					background_colors : array(56),
				),
			),
			dc_id : 4,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 14,
					h : 75,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'FSGRphCY7nyLPcm2',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 437369.490234375,
					w : 79,
					h : 1,
					preload_prefix_size : 94,
					video_start_ts : 330386.4873046875,
					video_codec : 'ZBPGqTfeyhiz9rop',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 79,
					title : 'KPLmIthZba8cjX1n',
					performer : 'ZaWq2e14UPHNvJYG',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'IjsYz8Kxg6LpJWBm',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'AUCymhb5Lx6fGzcu',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```