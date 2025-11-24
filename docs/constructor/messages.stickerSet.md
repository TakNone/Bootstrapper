# messages.stickerSet

**Description** : *Stickerset and stickers inside it*

**Layer** : 218

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
		installed_date : 79,
		id : 2537228168666305572,
		access_hash : -1775430415047027731,
		title : 'fPyBck1hx29mSKwp',
		short_name : '6e8JgLPTWzsGnMfq',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'hLOn85XEH1TrN4om',
			),
			$client->photoSize(
				type : 'bD26atxnIMhzZfij',
				w : 56,
				h : 41,
				size : 1,
			),
			$client->photoCachedSize(
				type : 'FX6xUIN4GwHu91ry',
				w : 65,
				h : 48,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'xSotHiCQVlRUmB02',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'wx0W4EcaQ2CsquUn',
				w : 81,
				h : 0,
				sizes : array(75),
			),
			$client->photoPathSize(
				type : 'gsTQaEhHYLzZui2t',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 47,
		thumb_version : 61,
		thumb_document_id : -6471301823172855648,
		count : 46,
		hash : 0,
	),
	packs : array(
		$client->stickerPack(
			emoticon : 'PAQXBSbuCGnrFohg',
			documents : array(-8012758785474996419),
		),
	),
	keywords : array(
		$client->stickerKeyword(
			document_id : 8482914917367992347,
			keyword : array('Itjs96ApfMhPwa5v'),
		),
	),
	documents : array(
		$client->documentEmpty(
			id : 7069717982918263596,
		),
		$client->document(
			id : -8829925068060952436,
			access_hash : -2391893007483356078,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 91,
			mime_type : 'XyFl548DJ1rQPWGT',
			size : -4737253829623988009,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'DlshRvKcZeGqSL6z',
				),
				$client->photoSize(
					type : 'WColU3ad9FDNBYeh',
					w : 7,
					h : 100,
					size : 57,
				),
				$client->photoCachedSize(
					type : 'fzkvHa8qw76IV9oc',
					w : 3,
					h : 58,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'IG6ow2LEmWTC0jK4',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '8rDlG2SZubEKyHP4',
					w : 75,
					h : 83,
					sizes : array(6),
				),
				$client->photoPathSize(
					type : '24ExMH0puadkem5N',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'z9QiOsIZaYdwkMPC',
					w : 31,
					h : 78,
					size : 20,
					video_start_ts : -505599.1474609375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 7802672728051465435,
					background_colors : array(33),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -8940617069121974813,
					background_colors : array(33),
				),
			),
			dc_id : 79,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 86,
					h : 12,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'lRvG7sDHfkzX0IoA',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 92,
						x : -1388226.20703125,
						y : -1989663.3388671875,
						zoom : 302509.4462890625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1672770.0849609375,
					w : 33,
					h : 16,
					preload_prefix_size : 4,
					video_start_ts : -1490978.7822265625,
					video_codec : 'XG3TDfMr71cInKko',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 50,
					title : 'NoXsEgbcr8Zul4iI',
					performer : 'p0CXqLeoKjQkm3d7',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'BjIHGK2eV8fNXTAq',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'PuMSUZLDCl7b3Aa8',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```