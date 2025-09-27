# stickerSetMultiCovered

**Description** : *Stickerset, with multiple stickers as preview*

**Layer** : 214

```tl
stickerSetMultiCovered#3407e51b set:StickerSet covers:Vector<Document> = StickerSetCovered;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>set</mark> | [`StickerSet`](type/StickerSet) | Stickerset |
| <mark>covers</mark> | [`Vector<Document>`](type/Document) | Preview stickers |

---

## Type

[StickerSetCovered](type/StickerSetCovered)

---

## Example

```php
$stickerSetCovered = $client->stickerSetMultiCovered(
	set : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 2,
		id : 3877935201217928242,
		access_hash : 2606600861104721020,
		title : 'Y0o73DUvGS481tEq',
		short_name : '32csrtnmF7oaUhAb',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'hqGx8dYX3Ez2upMr',
			),
			$client->photoSize(
				type : '1G8B43DYcu9UxIJl',
				w : 66,
				h : 8,
				size : 35,
			),
			$client->photoCachedSize(
				type : 'zvLZmK53fy4lpHhJ',
				w : 68,
				h : 47,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : '7LBS8ozW3JxKZEPA',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : '7K8zfUrZLQCR2H54',
				w : 71,
				h : 2,
				sizes : array(22),
			),
			$client->photoPathSize(
				type : 'j7d1SIZY5TvgAExn',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 78,
		thumb_version : 23,
		thumb_document_id : -6510175348320151249,
		count : 52,
		hash : 0,
	),
	covers : array(
		$client->documentEmpty(
			id : 327350258979114895,
		),
		$client->document(
			id : 6223093113213816005,
			access_hash : -8587555185782975231,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 55,
			mime_type : 'dCz0vIwVUoQcek9S',
			size : -7912452446259271810,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'Rj2hfptIqP7LD6Sb',
				),
				$client->photoSize(
					type : 'yaDYENISXQTgrjPZ',
					w : 71,
					h : 67,
					size : 60,
				),
				$client->photoCachedSize(
					type : '0OHumyYt8B1oQ9Sr',
					w : 46,
					h : 87,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'UXntyEPk5BalOji3',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'ZcLDxhSTtgzXPAUa',
					w : 38,
					h : 12,
					sizes : array(31),
				),
				$client->photoPathSize(
					type : 'O24PHtpMCeDKLUY9',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 's6jSTGAbX4FZoRg7',
					w : 88,
					h : 53,
					size : 71,
					video_start_ts : 1614684.6416015625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 6123922954169750785,
					background_colors : array(76),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -1038542938194382838,
					background_colors : array(52),
				),
			),
			dc_id : 54,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 23,
					h : 67,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'FNb1RHEQgYCnph8V',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1753834.802734375,
					w : 97,
					h : 61,
					preload_prefix_size : 78,
					video_start_ts : -2057043.8740234375,
					video_codec : 'R3aEeK8CNWFgbjYM',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 74,
					title : 'eZuF3tpz8N5wJqUm',
					performer : 'utEGexIXUFVvBb1A',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '3y4eYorDsb52FMWH',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'BSLouI13g9vps6NT',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```