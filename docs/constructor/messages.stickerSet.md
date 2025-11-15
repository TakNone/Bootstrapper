# messages.stickerSet

**Description** : *Stickerset and stickers inside it*

**Layer** : 216

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
		installed_date : 39,
		id : -2532665228509463621,
		access_hash : -340262754145589694,
		title : 'pqre2dgiD6QhuK0y',
		short_name : 'UHuq0Qf7WPJgykGX',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'e2mj19PRQpLaMV7t',
			),
			$client->photoSize(
				type : 'uhLY3i2l8xgybQOS',
				w : 47,
				h : 11,
				size : 99,
			),
			$client->photoCachedSize(
				type : 'ECWIs3wH5rxKzJVL',
				w : 96,
				h : 36,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : '4OkyPNoiQdXgjvWB',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'bnUlSBIwMk4xcdD8',
				w : 92,
				h : 13,
				sizes : array(99),
			),
			$client->photoPathSize(
				type : 'LvsmfZMpSa9VYGAb',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 99,
		thumb_version : 54,
		thumb_document_id : 6137602108150046179,
		count : 8,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'rvJlcwpAXHCVo3ZF',
			documents : array(-6107489109206972090),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : -2299262157071402574,
			keyword : array('gm0z3Doq4JLTlQCY'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : 561236118594330077,
		),
		$client->document(
			id : 8070365824598818548,
			access_hash : -178124158050393445,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 99,
			mime_type : 'WrBjMHKC94hRgIT0',
			size : 6644012957171036026,
			thumbs : array(
				$client->photoSizeEmpty(
					type : '0Lew2PUOy5N61hMR',
				),
				$client->photoSize(
					type : 'jPINo9JfnVe17Em0',
					w : 83,
					h : 79,
					size : 46,
				),
				$client->photoCachedSize(
					type : 'roN2L6SCD74bkn3x',
					w : 93,
					h : 55,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'ywQfWLsq8OG7xvNP',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '9kGAVJxtQ7S4beXC',
					w : 61,
					h : 99,
					sizes : array(27),
				),
				$client->photoPathSize(
					type : '86YKhVqTWZO2QDz0',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'wjfTYyaZFG82Ndbr',
					w : 79,
					h : 55,
					size : 23,
					video_start_ts : -323842.357421875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 4091349347080286639,
					background_colors : array(37),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 673124580227556734,
					background_colors : array(49),
				),
			),
			dc_id : 89,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 47,
					h : 52,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'rKQ5ZU7VeIf0pjEq',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1079734.33984375,
					w : 67,
					h : 86,
					preload_prefix_size : 75,
					video_start_ts : -1668302.9560546875,
					video_codec : '43MOq1AYGdFxWkDT',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 42,
					title : 'IvCwpEG5gNlDT8W9',
					performer : 'iagteYCD8QomLXOy',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'cWLayQXSsN4MeImU',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'r3KTjyNWJwb5cLYv',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```