# messages.stickerSet

**Description** : *Stickerset and stickers inside it*

**Layer** : 227

```tl
messages.stickerSet#6e153f16 set:StickerSet packs:Vector<StickerPack> keywords:Vector<StickerKeyword> documents:Vector<Document> = messages.StickerSet;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>set</mark> | [`StickerSet`](type/StickerSet) | The stickerset |
| <mark>packs</mark> | [`Vector<StickerPack>`](type/StickerPack) | Emoji info for stickers |
| <mark>keywords</mark> | [`Vector<StickerKeyword>`](type/StickerKeyword) | Keywords for some or every sticker in the stickerset |
| <mark>documents</mark> | [`Vector<Document>`](type/Document) | Stickers in stickerset |

---

## Type

[messages.StickerSet](type/messages.StickerSet)

---

## Example

```php
$messagesStickerSet = $client->messages->stickerSet(
	set : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 70,
		id : 2243225328656571123,
		access_hash : 4022770854980843784,
		title : 'lhPnkNJfpweimbHc',
		short_name : 'GFEZzkf3OS89RioN',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'j3vyLeVifoI4T0ZF',
			),
			$client->photoSize(
				type : 'VgbAk1iljuPnKBpT',
				w : 11,
				h : 40,
				size : 3,
			),
			$client->photoCachedSize(
				type : 'V81fiIN2CQHquLxh',
				w : 2,
				h : 11,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'c2LrBy5vH071gs6Q',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'Ol50boehX7PzJ6c4',
				w : 81,
				h : 15,
				sizes : array(86),
			),
			$client->photoPathSize(
				type : 'JYGsbpayiOe7Tzn4',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 70,
		thumb_version : 67,
		thumb_document_id : -260603711022100229,
		count : 16,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'DtB8ebcMvoXY9z4j',
			documents : array(-8092762665349913266),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : 336006000370037870,
			keyword : array('NhqMzDAsGXTw6CUg'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : 4000043271445330255,
		),
		$client->document(
			id : 8392840525021980208,
			access_hash : -4305467908903008581,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 98,
			mime_type : 'SQyU4nvwRfL7h9gm',
			size : -6659260511474158218,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'idrFTR5vatA8GJwO',
				),
				$client->photoSize(
					type : 'ilF42oXgWk0ytvKI',
					w : 12,
					h : 74,
					size : 28,
				),
				$client->photoCachedSize(
					type : 'DksMPEYrdgfLNVi3',
					w : 4,
					h : 50,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'vK9H7eFDMmEiRa4x',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'zS5fBvEHelrVPN20',
					w : 100,
					h : 28,
					sizes : array(77),
				),
				$client->photoPathSize(
					type : 'SdMu49bz3paFBWyC',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'x6wNUHJGy8uLIAgE',
					w : 1,
					h : 65,
					size : 65,
					video_start_ts : 1345039.58203125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -4742423734076841683,
					background_colors : array(21),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -2994743391222447728,
					background_colors : array(27),
				),
			),
			dc_id : 69,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 94,
					h : 63,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'yp9Fku380PgrmY7U',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 57,
						x : 1736364.2294921875,
						y : 846610.48046875,
						zoom : -2069136.703125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1089372.3330078125,
					w : 12,
					h : 3,
					preload_prefix_size : 16,
					video_start_ts : -350717.9677734375,
					video_codec : 'weRhXCQg0Eb9JMaq',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 64,
					title : 'kyr70THLvEtQqIhw',
					performer : 'zuF9QyAE2KotxR3l',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'vOCPNuL06IaUloHS',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '3V7X0piuMqI8do2k',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```