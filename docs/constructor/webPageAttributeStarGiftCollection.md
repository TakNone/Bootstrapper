# webPageAttributeStarGiftCollection

**Description** : *Contains info about a gift collection &raquo; for a webPage preview of a gift collection &raquo; \(the webPage will have a type of telegram\_collection\)*

**Layer** : 227

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
			id : -5256915032271208394,
		),
		$client->document(
			id : 5946822184448307729,
			access_hash : -8591317702938718643,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 84,
			mime_type : 'BZ30hDr1HfEgCSKG',
			size : -8608358354751090448,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '6kfKPrgVnuTvD3y2',
				),
				$client->photoSize(
					type : 'T4cFxZpMYQXmEy2w',
					w : 20,
					h : 14,
					size : 64,
				),
				$client->photoCachedSize(
					type : '1shRg7BItV05pDm8',
					w : 91,
					h : 55,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'mwuOd6z0alStrhgF',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '4kVlrcXZ5fRz2sCU',
					w : 17,
					h : 87,
					sizes : array(93),
				),
				$client->photoPathSize(
					type : 'wk9P30iga6AXR2LM',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'Dxm2H7VvlwhObeu3',
					w : 46,
					h : 86,
					size : 24,
					video_start_ts : 823024.810546875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -7896850218167253598,
					background_colors : array(85),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 6736840009102381087,
					background_colors : array(41),
				),
			),
			dc_id : 44,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 16,
					h : 24,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'MDvSFAtEsT8xkae9',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 30,
						x : 1479295.5615234375,
						y : -1040804.68359375,
						zoom : 1365054.0224609375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1409420.71484375,
					w : 39,
					h : 82,
					preload_prefix_size : 57,
					video_start_ts : 534198.9111328125,
					video_codec : '7lFd38OEPquUWXim',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 94,
					title : 'DYbUOMeR84wzFx6u',
					performer : '032bxMfa4kqcwnLV',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'xJIfzKjCqel7P18s',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'KypiZ79NVtfaQrvT',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```