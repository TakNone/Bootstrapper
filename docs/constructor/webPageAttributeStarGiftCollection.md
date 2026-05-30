# webPageAttributeStarGiftCollection

**Description** : *Contains info about a gift collection &raquo; for a webPage preview of a gift collection &raquo; \(the webPage will have a type of telegram\_collection\)*

**Layer** : 225

```tl
webPageAttributeStarGiftCollection#31cad303 icons:Vector<Document> = WebPageAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>icons</mark> | [`Vector<Document>`](type/Document) | Gifts in the collection |

---

## Type

[WebPageAttribute](type/WebPageAttribute)

---

## Example

```php
$webPageAttribute = $client->webPageAttributeStarGiftCollection(
	icons : array(
		$client->documentEmpty(
			id : 7829146830087124312,
		),
		$client->document(
			id : -5581130906622404780,
			access_hash : -7100116655207904335,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 31,
			mime_type : 'iNJtvGEL6gksWDlr',
			size : 3249827793905252211,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '6wRqhNlLftHzurGM',
				),
				$client->photoSize(
					type : 'Pn6pSjg9eDRuc7LH',
					w : 99,
					h : 37,
					size : 43,
				),
				$client->photoCachedSize(
					type : 'HoNzVJKqfU7ku81h',
					w : 57,
					h : 72,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'ILxh7FCmNwkvWSKB',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'K60ZLwt7XO4Vbnqr',
					w : 7,
					h : 100,
					sizes : array(46),
				),
				$client->photoPathSize(
					type : 'hmoLe2uTtGz5WcyI',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'PBVpb9JnZ54Mromx',
					w : 68,
					h : 19,
					size : 37,
					video_start_ts : -1062501.0712890625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 8961459951283860361,
					background_colors : array(57),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -8752236734110235240,
					background_colors : array(5),
				),
			),
			dc_id : 62,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 44,
					h : 85,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'v2GoI7b3ZUF85Jwg',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 15,
						x : 1003608.9228515625,
						y : -1756050.1142578125,
						zoom : -348421.275390625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 568111.33203125,
					w : 7,
					h : 97,
					preload_prefix_size : 44,
					video_start_ts : -840133.298828125,
					video_codec : 'pEeliCqyVZT6Dk2H',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 13,
					title : 'fprgC5at4Pcu7Vzy',
					performer : 'ZKMkFHLo3JzS60j7',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'rubnKdYcEIs0qC7B',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'MU4a2fLxoTJcHdXY',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```