# stickerSetFullCovered

**Description** : *Stickerset preview with all stickers of the stickerset included.
Currently used only for custom emoji stickersets, to avoid a further call to messages.getStickerSet*

**Layer** : 211

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
		installed_date : 21,
		id : 5931687500876102900,
		access_hash : -8871157920193283854,
		title : 'p3dbSgOBFxDzu6yl',
		short_name : 'sQnaAl7xm8CqKgjW',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'kaS6KoWxLGsXZRFY',
			),
			$client->photoSize(
				type : 'yAEB5nvY6pGgWQrV',
				w : 56,
				h : 5,
				size : 48,
			),
			$client->photoCachedSize(
				type : '5Y7yR1zTne0VhEgB',
				w : 19,
				h : 76,
				bytes : '??<?LiveProtoxfV',
			),
			$client->photoStrippedSize(
				type : '3cKjP0V6JokTtw4f',
				bytes : '行S?LiveProtoTU??A',
			),
			$client->photoSizeProgressive(
				type : 'V5nvUrqTiDEpHjOk',
				w : 88,
				h : 63,
				sizes : array(33),
			),
			$client->photoPathSize(
				type : '7Om0g4jtT5WhNrQU',
				bytes : 'v?%?LiveProto??d^',
			),
		),
		thumb_dc_id : 39,
		thumb_version : 46,
		thumb_document_id : 1189632271371149493,
		count : 59,
		hash : 38,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'Nc6VZ19FEmn3fpKt',
			documents : array(-5807523670072808913),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : 7925778309869427411,
			keyword : array('b6TXmlDZoRaCx91q'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : -6468854594483595549,
		),
		$client->document(
			id : -2370473699241174139,
			access_hash : -6205785570974609162,
			file_reference : '??j??LiveProto,vn?N',
			date : 57,
			mime_type : 'HME5h2DBRxYtiJ8j',
			size : 4113165423744799609,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '3djxWBKn2eEuoJ4U',
				),
				$client->photoSize(
					type : 'U8EolJCahj3SQIft',
					w : 6,
					h : 51,
					size : 46,
				),
				$client->photoCachedSize(
					type : 'BRX8UC3DpSycH7Oq',
					w : 20,
					h : 39,
					bytes : '?)???LiveProto??',
				),
				$client->photoStrippedSize(
					type : 'xTH0wSVoK5sGrMgX',
					bytes : '?:?]LiveProtoaQ??',
				),
				$client->photoSizeProgressive(
					type : 'K93NBYiXL75gjaJV',
					w : 68,
					h : 46,
					sizes : array(70),
				),
				$client->photoPathSize(
					type : 'LW0Cj3Kz9mqEaung',
					bytes : '0H?LiveProto?&??I',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'q9vnMjCZDJG0PcbK',
					w : 43,
					h : 66,
					size : 51,
					video_start_ts : -129473.1962890625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 3426697548161979979,
					background_colors : array(85),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 4295916461363209252,
					background_colors : array(74),
				),
			),
			dc_id : 41,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 90,
					h : 68,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '8GvRrp4fFiP9IeKO',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 847298.87109375,
					w : 54,
					h : 98,
					preload_prefix_size : 69,
					video_start_ts : 894445.7294921875,
					video_codec : 'WbCJMtZXYjalReiN',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 68,
					title : 'g5P639tzuiS0dYE2',
					performer : 'u74YdeBHhwANZ3Um',
					waveform : '??(|?LiveProto:?&?',
				),
				$client->documentAttributeFilename(
					file_name : 'kRw0t7Yeql2ZEgK5',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'tMybZHLeNPVBo8pl',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```