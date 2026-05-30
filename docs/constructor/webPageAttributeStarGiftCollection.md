# webPageAttributeStarGiftCollection

**Description** : *Contains info about a gift collection &raquo; for a webPage preview of a gift collection &raquo; \(the webPage will have a type of telegram\_collection\)*

**Layer** : 222

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
			id : -2874513192089803611,
		),
		$client->document(
			id : 2497962195818396476,
			access_hash : -6918969662194087151,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 81,
			mime_type : 'vohen5FbsYARijZa',
			size : -2900620894920488779,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'TACZHt3kIbdPsWai',
				),
				$client->photoSize(
					type : 'r8w6qlnhi3Ed4apY',
					w : 77,
					h : 76,
					size : 4,
				),
				$client->photoCachedSize(
					type : 'wNKyoMYq31Lvztug',
					w : 78,
					h : 68,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'X5lF4yUawufDjPvz',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'lVBZL9AFzbGgsfSJ',
					w : 92,
					h : 54,
					sizes : array(41),
				),
				$client->photoPathSize(
					type : 'pM9VbJRS2fxW7eTy',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'jgaLvF7BxkP9DmEd',
					w : 42,
					h : 59,
					size : 4,
					video_start_ts : -1798323.513671875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 6449056682778762624,
					background_colors : array(26),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 711024199476114531,
					background_colors : array(93),
				),
			),
			dc_id : 0,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 48,
					h : 72,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'kXBHq039prZ2tjVL',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 79,
						x : 1569807.96875,
						y : -270292.978515625,
						zoom : 1657501.3779296875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 863903.751953125,
					w : 47,
					h : 30,
					preload_prefix_size : 22,
					video_start_ts : -2008417.541015625,
					video_codec : 'OXrgD4nyNoGkMClR',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 79,
					title : 'xWwgG9JRQDIHEvjr',
					performer : 'udbqcDT0GZzrURpf',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'Bxgm4n7DOzvK9Tad',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'UkO9DJmfLW8n7iBQ',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```