# stickerSetMultiCovered

**Description** : *Stickerset, with multiple stickers as preview*

**Layer** : 225

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
		installed_date : 1,
		id : -3073470801907784790,
		access_hash : 5613227576477981249,
		title : '0h9FPsbYjCoVQUkO',
		short_name : 'duAU4ivkS5njI3Hl',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'AvV0ndm7OxyCUi1R',
			),
			$client->photoSize(
				type : '7s3FyhxCJPeRQ5ro',
				w : 29,
				h : 29,
				size : 22,
			),
			$client->photoCachedSize(
				type : 'oFfEZ2wb13Uc9tLK',
				w : 48,
				h : 91,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'DiY1aSPwLZ8QMzec',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'EGJboNuj6DBO93X4',
				w : 52,
				h : 50,
				sizes : array(58),
			),
			$client->photoPathSize(
				type : 'SK4YEyhMAtrwcGo8',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 85,
		thumb_version : 78,
		thumb_document_id : 1453652661662269020,
		count : 10,
		hash : 0,
	),
	covers : array(
		$client->documentEmpty(
			id : 2309237225046677626,
		),
		$client->document(
			id : -7171110483238756055,
			access_hash : 8242899371445111315,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 31,
			mime_type : 'luRN6H0rTs5cdGkZ',
			size : 1234537943375924872,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'Oc2Q5kEdKBH7FMXW',
				),
				$client->photoSize(
					type : 'GLChz9Yx2jpVUnMD',
					w : 9,
					h : 3,
					size : 8,
				),
				$client->photoCachedSize(
					type : '1B3wP4Ye5fFZIA2g',
					w : 34,
					h : 51,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'rV4mez0JYGj8HnKk',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'fIlkyhOEN4MUQnjd',
					w : 89,
					h : 80,
					sizes : array(1),
				),
				$client->photoPathSize(
					type : 'jAn1UdGKMzq5o03E',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'BxnXSjw3o1p42RtZ',
					w : 20,
					h : 32,
					size : 65,
					video_start_ts : -1633380.1015625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 7700328864943488025,
					background_colors : array(83),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -794229985627359253,
					background_colors : array(71),
				),
			),
			dc_id : 50,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 56,
					h : 95,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'cM4ibqv0OayIZsAp',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 37,
						x : -806593.6630859375,
						y : -517415.3056640625,
						zoom : 1654656.2080078125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -126174.5400390625,
					w : 3,
					h : 5,
					preload_prefix_size : 21,
					video_start_ts : 1328600.5859375,
					video_codec : '5Rclg7ELIjeCWut9',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 3,
					title : 'jqkpSXy2ZDEtdrmo',
					performer : '1z5H8NqSpkOdxMRl',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'xm4BhvIYb8zPl3cR',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Ko6RBb8ilSNDmXAP',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```