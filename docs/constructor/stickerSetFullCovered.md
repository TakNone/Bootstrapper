# stickerSetFullCovered

**Description** : *Stickerset preview with all stickers of the stickerset included\.
Currently used only for custom emoji stickersets, to avoid a further call to messages\.getStickerSet*

**Layer** : 214

```tl
stickerSetFullCovered#40d13c0e set:StickerSet packs:Vector<StickerPack> keywords:Vector<StickerKeyword> documents:Vector<Document> = StickerSetCovered;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>set</mark> | [`StickerSet`](type/StickerSet) | Stickerset |
| <mark>packs</mark> | [`Vector<StickerPack>`](type/StickerPack) | Emoji information about every sticker in the stickerset |
| <mark>keywords</mark> | [`Vector<StickerKeyword>`](type/StickerKeyword) | Keywords for some or every sticker in the stickerset |
| <mark>documents</mark> | [`Vector<Document>`](type/Document) | Stickers |

---

## Type

[StickerSetCovered](type/StickerSetCovered)

---

## Example

```php
$stickerSetCovered = $client->stickerSetFullCovered(
	set : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 74,
		id : -1741061790780144401,
		access_hash : -1814168406520054134,
		title : 'cRrXslxfvG28USj1',
		short_name : 'cMxNJI0DXtvqQYRu',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'AL6Bxytv8oHhSCOq',
			),
			$client->photoSize(
				type : '2bmv1LYeGoyNTAhV',
				w : 74,
				h : 22,
				size : 93,
			),
			$client->photoCachedSize(
				type : 'DzI12mYa5VWjnLkB',
				w : 74,
				h : 86,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'JTAFoE08MmOWbV1C',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'KhiXaoE7PrZ8Nwgt',
				w : 59,
				h : 30,
				sizes : array(31),
			),
			$client->photoPathSize(
				type : 'Iot3eR7Cm86OrcZu',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 10,
		thumb_version : 57,
		thumb_document_id : 6700412585475324709,
		count : 51,
		hash : 75,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'HamMV4Q6wB79iUkI',
			documents : array(-3121919195632574406),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : 6479408599863223413,
			keyword : array('JtoSkDGhzefVPiFQ'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -2145980539649505432,
		),
		$client->document(
			id : 2940140941485666751,
			access_hash : 9171054189468300007,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 81,
			mime_type : 'z1AjSxeCsDhkwUl0',
			size : -1976101142996053332,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'gMawGZTEKUJ9frh5',
				),
				$client->photoSize(
					type : 'Gz9iXErbRB4t103a',
					w : 48,
					h : 38,
					size : 65,
				),
				$client->photoCachedSize(
					type : 'dh9qcmCeIE7zWT3f',
					w : 43,
					h : 0,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '2xBPUVNq67ShY4IL',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'JyjrtAv96cRKogTX',
					w : 87,
					h : 20,
					sizes : array(73),
				),
				$client->photoPathSize(
					type : '7SHcXnJWtLqP4ZR6',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'IEcKzO3b6dH2SJl5',
					w : 37,
					h : 39,
					size : 53,
					video_start_ts : -590572.47265625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 2358568391883941504,
					background_colors : array(31),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -485099472544765534,
					background_colors : array(42),
				),
			),
			dc_id : 80,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 46,
					h : 87,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '2skLtnyOgjG35BXT',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1731307.9482421875,
					w : 43,
					h : 28,
					preload_prefix_size : 64,
					video_start_ts : 1819404.1494140625,
					video_codec : 'u27ONUe0SBTIwpjJ',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 16,
					title : 'Rk4HStC0KvrN1Bd9',
					performer : 'zb9vBixdMjNFYmEu',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'dNzaBGe25AK1Jo3t',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'McYVW6OZ7JrXFpRz',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```