# updateNewStickerSet

**Description** : *A new stickerset was installed*

**Layer** : 218

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
			installed_date : 55,
			id : 6753246532863836286,
			access_hash : -7032748350044715880,
			title : 'uJD4fhs0GkleY2ai',
			short_name : 'zjB1MVFO82U4tfms',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'tfhS9wTRPQYguUsV',
				),
				$client->photoSize(
					type : 'mTX6W1KkDlaYS2gj',
					w : 42,
					h : 91,
					size : 78,
				),
				$client->photoCachedSize(
					type : 'd2w17I4KGnc3HazE',
					w : 27,
					h : 7,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '1gJad9rzlNOHXnVx',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'yp0TXfb4WDRI62Fa',
					w : 12,
					h : 24,
					sizes : array(52),
				),
				$client->photoPathSize(
					type : 'nIDkLtJOjVweHT7F',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 85,
			thumb_version : 43,
			thumb_document_id : 4376011682959726410,
			count : 67,
			hash : 0,
		),
		packs : array(
			$client->stickerPack(
				emoticon : 'YMCNIASyUzt4JD7j',
				documents : array(-5513803716571330673),
			),
		),
		keywords : array(
			$client->stickerKeyword(
				document_id : 5021208793087669491,
				keyword : array('KsSbVXOpdBFq8mjR'),
			),
		),
		documents : array(
			$client->documentEmpty(
				id : -2340921882461285578,
			),
			$client->document(
				id : 6936137140248493381,
				access_hash : -1040769783197213487,
				file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				date : 88,
				mime_type : 'pfCUDFTSXL2rVE9q',
				size : -9145451660142352965,
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'np26giXmNYwqHbD4',
					),
					$client->photoSize(
						type : 'SkoGhRMcIjif1Fg4',
						w : 59,
						h : 94,
						size : 5,
					),
					$client->photoCachedSize(
						type : 'W4NRGU0zluFqZf7k',
						w : 62,
						h : 35,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'WSHmkMgdKbhLcsan',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'NKkgMe2WRZc3VQ7U',
						w : 52,
						h : 89,
						sizes : array(63),
					),
					$client->photoPathSize(
						type : 'JEaWTN5vluw1kRzF',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				video_thumbs : array(
					$client->videoSize(
						type : 'wk3ZuhqmKpNo8gOx',
						w : 22,
						h : 22,
						size : 26,
						video_start_ts : -1315149.447265625,
					),
					$client->videoSizeEmojiMarkup(
						emoji_id : -7216169458079652566,
						background_colors : array(38),
					),
					$client->videoSizeStickerMarkup(
						stickerset : $client->inputStickerSetEmpty(...),
						sticker_id : -4276330912563981034,
						background_colors : array(50),
					),
				),
				dc_id : 53,
				attributes : array(
					$client->documentAttributeImageSize(
						w : 43,
						h : 13,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'JO7X1NhUR4SPTqAC',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -1097922.736328125,
						w : 39,
						h : 12,
						preload_prefix_size : 45,
						video_start_ts : 1081856.4169921875,
						video_codec : 'LDjYigyKGFfoHRMN',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 74,
						title : 'gy9PamjtS3IDnX7q',
						performer : '4fXFoW2m6NaICjlh',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'S6T8dgbIicvM0JuQ',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'g1cqL6ufnSRYvbxJ',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
		),
	),
);
```