# updateNewStickerSet

**Description** : *A new stickerset was installed*

**Layer** : 227

```tl
updateNewStickerSet#688a30aa stickerset:messages.StickerSet = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stickerset</mark> | [`messages.StickerSet`](type/messages.StickerSet) | The installed stickerset |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateNewStickerSet(
	stickerset : $client->messages->stickerSet(
		set : $client->stickerSet(
			archived : true,
			official : true,
			masks : true,
			emojis : true,
			text_color : true,
			channel_emoji_status : true,
			creator : true,
			installed_date : 93,
			id : -6118010073737391390,
			access_hash : 884565563439141198,
			title : 'a8DdQTgrpzVbNOPW',
			short_name : 'uDlhBxyZ3pePRd4C',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'nVpJAbQoPXZWDU0i',
				),
				$client->photoSize(
					type : 'Re4TLiQDWl1qfHAj',
					w : 92,
					h : 49,
					size : 88,
				),
				$client->photoCachedSize(
					type : 'PVCEqrZQpMbgBtRw',
					w : 44,
					h : 35,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'D7kJVB4rdhfbsZNy',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'MxGQC0Bv7z2l5E1b',
					w : 4,
					h : 100,
					sizes : array(27),
				),
				$client->photoPathSize(
					type : 'dka2Tezcg3Glq8Sj',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 85,
			thumb_version : 14,
			thumb_document_id : -4360858452956836332,
			count : 3,
			hash : 0,
		),
		packs : array(
			$client->stickerPack(
				emoticon : 'WcdyUpFwah5PMC1B',
				documents : array(7909178430306454483),
			),
		),
		keywords : array(
			$client->stickerKeyword(
				document_id : -1851318349462401046,
				keyword : array('KmGDlJv47MSATgf5'),
			),
		),
		documents : array(
			$client->documentEmpty(
				id : -5339159314887684971,
			),
			$client->document(
				id : 7382455597046565741,
				access_hash : 7869464424790250967,
				file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				date : 92,
				mime_type : 'E3YTfU7RpAlO5L9q',
				size : 3257303340853689905,
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'w5PqVF9XAezINLvp',
					),
					$client->photoSize(
						type : '4NY2uablcLskM8y7',
						w : 66,
						h : 58,
						size : 68,
					),
					$client->photoCachedSize(
						type : 'VfqZwz38xDFKnuGs',
						w : 12,
						h : 21,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'Uldfn59D6PkYKj4m',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'H7uyETpaPWoKIYrn',
						w : 44,
						h : 86,
						sizes : array(2),
					),
					$client->photoPathSize(
						type : 'wimdYTvPyh53fekD',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				video_thumbs : array(
					$client->videoSize(
						type : 'UFXoqWn9l4yBuHRx',
						w : 56,
						h : 100,
						size : 60,
						video_start_ts : -1991240.13671875,
					),
					$client->videoSizeEmojiMarkup(
						emoji_id : 5642892410184548828,
						background_colors : array(65),
					),
					$client->videoSizeStickerMarkup(
						stickerset : $client->inputStickerSetEmpty(...),
						sticker_id : 2098677316325769084,
						background_colors : array(4),
					),
				),
				dc_id : 45,
				attributes : array(
					$client->documentAttributeImageSize(
						w : 7,
						h : 19,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : '9bcmYBFgSkqMAia1',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -688865.34765625,
						w : 53,
						h : 59,
						preload_prefix_size : 78,
						video_start_ts : 1286438.3251953125,
						video_codec : 'XI7WmZGvdVtlB5EF',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 25,
						title : 'T1BH3nkEPlUz706F',
						performer : 'rXHBhZVxPASgdzCL',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'kyGVBiIgQs0PoOSH',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'K2q8AcstX3FE01Tm',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
		),
	),
);
```