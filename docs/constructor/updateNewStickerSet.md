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
			installed_date : 80,
			id : -3139847834628914543,
			access_hash : -5854006628595260426,
			title : '4TYaw3km0JnhqdHv',
			short_name : 'u1GNOjXwepUo7L0m',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 's6bw9ifFHpUe2ogn',
				),
				$client->photoSize(
					type : 'mJOLRSC9DvNKgIT0',
					w : 19,
					h : 53,
					size : 62,
				),
				$client->photoCachedSize(
					type : '90Im17JWSQnOGVMt',
					w : 79,
					h : 72,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'RWbe65a9CxEy134A',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'TA84fxPe6a1Xn9Vp',
					w : 84,
					h : 9,
					sizes : array(96),
				),
				$client->photoPathSize(
					type : 'CHLTptoxyUZRnB26',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 53,
			thumb_version : 24,
			thumb_document_id : -5186739100903989993,
			count : 77,
			hash : 0,
		),
		packs : array(
			$client->stickerPack(
				emoticon : 'jTuXBnI50YbzJUlv',
				documents : array(7592301475421343266),
			),
		),
		keywords : array(
			$client->stickerKeyword(
				document_id : 6759779606498291520,
				keyword : array('PjlhZu3c6OfXCF5v'),
			),
		),
		documents : array(
			$client->documentEmpty(
				id : -6312724284821760720,
			),
			$client->document(
				id : 8836231373141168888,
				access_hash : -6448666117801064496,
				file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				date : 80,
				mime_type : 'kJXTvEzF8bBP2MfI',
				size : 7525921153894581409,
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'KgFquhNbaToPcCRk',
					),
					$client->photoSize(
						type : '4A5kbh2psrlBC3Li',
						w : 16,
						h : 43,
						size : 21,
					),
					$client->photoCachedSize(
						type : '7mv0xgKkZYcCEJUn',
						w : 79,
						h : 85,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '732t6MW1hNJHZpOw',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'v2RojrfBLI3euaw6',
						w : 76,
						h : 100,
						sizes : array(39),
					),
					$client->photoPathSize(
						type : 'jf0kJN2ZrbWYvlIt',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				video_thumbs : array(
					$client->videoSize(
						type : 'tauOXlLIVcQk97gF',
						w : 38,
						h : 80,
						size : 16,
						video_start_ts : 818023.474609375,
					),
					$client->videoSizeEmojiMarkup(
						emoji_id : 7032053427421517385,
						background_colors : array(62),
					),
					$client->videoSizeStickerMarkup(
						stickerset : $client->inputStickerSetEmpty(...),
						sticker_id : 20417250093828494,
						background_colors : array(12),
					),
				),
				dc_id : 64,
				attributes : array(
					$client->documentAttributeImageSize(
						w : 98,
						h : 4,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'maw3NgrAZxJ4Obfp',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 688570.0029296875,
						w : 39,
						h : 72,
						preload_prefix_size : 78,
						video_start_ts : 140656.095703125,
						video_codec : 'q7HvbyXDs9JMfnw6',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 59,
						title : 'CEBiVWKg6xrQtqLc',
						performer : 'o2eFYNjbaAkBsWgf',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'jhvrWMci7ZPmHKDw',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'HPVCprQJOLzGni72',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
		),
	),
);
```