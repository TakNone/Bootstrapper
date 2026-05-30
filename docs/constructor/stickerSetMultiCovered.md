# stickerSetMultiCovered

**Description** : *Stickerset, with multiple stickers as preview*

**Layer** : 222

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
		installed_date : 34,
		id : 1499764582588408770,
		access_hash : 373320784631493543,
		title : 'v2H1EirmpIzjsPXf',
		short_name : 'kmCzHx70sZyr8W1X',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'eIARzO9GbEDkStnH',
			),
			$client->photoSize(
				type : 'RjyfWr0XEg9DJo3Q',
				w : 83,
				h : 31,
				size : 37,
			),
			$client->photoCachedSize(
				type : 'fSwc4Mtq8i1Nobhe',
				w : 28,
				h : 61,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'eaxt0DVLwS7Q8Arb',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : '5b7rkeKDzQRTJ8I4',
				w : 46,
				h : 60,
				sizes : array(11),
			),
			$client->photoPathSize(
				type : '8CL5VoQdbntPi1pZ',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 66,
		thumb_version : 54,
		thumb_document_id : 3282314187330254942,
		count : 50,
		hash : 0,
	),
	covers : array(
		$client->documentEmpty(
			id : -5302346653920867574,
		),
		$client->document(
			id : -4983707218815555767,
			access_hash : -4552873732459331368,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 47,
			mime_type : 'GE0sDx3LFjgk5TaV',
			size : 1005739343690334964,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'Mty2Tic5nOmpRECf',
				),
				$client->photoSize(
					type : 'k8KZ3dxin0vc2gbz',
					w : 73,
					h : 4,
					size : 19,
				),
				$client->photoCachedSize(
					type : 'JusTBtPHjEgnM7v9',
					w : 9,
					h : 27,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'g2XSxBTlD4I9GLvE',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'gHrTyqoes9JtaVZk',
					w : 96,
					h : 28,
					sizes : array(58),
				),
				$client->photoPathSize(
					type : 'qtKZxaIDGdU9EvCX',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'bemc4hjWl0yCVrw6',
					w : 25,
					h : 19,
					size : 82,
					video_start_ts : -15963.693359375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -8144131919420473341,
					background_colors : array(86),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -6891159195216884013,
					background_colors : array(73),
				),
			),
			dc_id : 55,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 54,
					h : 99,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'hwoLN5KDFOC97Vxa',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 69,
						x : 1039792.78515625,
						y : -889388.8955078125,
						zoom : -879841.5380859375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -375944.6318359375,
					w : 83,
					h : 24,
					preload_prefix_size : 8,
					video_start_ts : 329860.08203125,
					video_codec : 'xfEptWDAmnw7aklR',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 56,
					title : 'tWLnhfv1GXSyR04K',
					performer : 'rXlKeksv0C2EIa4S',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'TfGwjOz8S12PVDbc',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'QBbHcR49LzP58ZqE',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```