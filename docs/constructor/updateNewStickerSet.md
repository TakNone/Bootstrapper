# updateNewStickerSet

**Description** : *A new stickerset was installed*

**Layer** : 222

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
			installed_date : 40,
			id : -8147742188158373273,
			access_hash : 1226429645556024696,
			title : 'Y5vof0n72G8yCQlm',
			short_name : 'KaPT0rsF98SV7zm3',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'lRVZwUXHmhJpNBkA',
				),
				$client->photoSize(
					type : 'NSFV1ryJb6PmhzXs',
					w : 17,
					h : 40,
					size : 67,
				),
				$client->photoCachedSize(
					type : 'TMIwbva6ykYl2nUW',
					w : 4,
					h : 28,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'PiOaIFeT4A3k8Dv1',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'vEU4H2VrKuIf1J8Z',
					w : 59,
					h : 18,
					sizes : array(60),
				),
				$client->photoPathSize(
					type : 'nomRZ6Yy51gjCc8p',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 10,
			thumb_version : 63,
			thumb_document_id : -6608608803071771293,
			count : 28,
			hash : 0,
		),
		packs : array(
			$client->stickerPack(
				emoticon : 'PYbTH8y5GUvW4ZDk',
				documents : array(-4018273399141180480),
			),
		),
		keywords : array(
			$client->stickerKeyword(
				document_id : -5253005184925719362,
				keyword : array('0jp1dcNgxMZXIh4m'),
			),
		),
		documents : array(
			$client->documentEmpty(
				id : -2822816857023495706,
			),
			$client->document(
				id : 6257763464553131613,
				access_hash : -9108258020071849711,
				file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				date : 36,
				mime_type : 'krPL2a3CYNZ5B0Wz',
				size : -4637135451594447689,
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'DVURrBFMYx7sylPC',
					),
					$client->photoSize(
						type : '6C8rnjmBuxN3fEJY',
						w : 45,
						h : 67,
						size : 21,
					),
					$client->photoCachedSize(
						type : 'UrJX9PHMsbhYAmEd',
						w : 77,
						h : 61,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'GPnD6BmMwSi5utXQ',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'fpn2PFBkdUDxe4as',
						w : 33,
						h : 30,
						sizes : array(14),
					),
					$client->photoPathSize(
						type : 'bSx4WBRraK18zlqI',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				video_thumbs : array(
					$client->videoSize(
						type : 'QE9sxc0pmeu8hNvP',
						w : 33,
						h : 87,
						size : 23,
						video_start_ts : 1362898.7080078125,
					),
					$client->videoSizeEmojiMarkup(
						emoji_id : 3180709909050654156,
						background_colors : array(12),
					),
					$client->videoSizeStickerMarkup(
						stickerset : $client->inputStickerSetEmpty(...),
						sticker_id : -6941742565362086144,
						background_colors : array(70),
					),
				),
				dc_id : 43,
				attributes : array(
					$client->documentAttributeImageSize(
						w : 81,
						h : 6,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'zfG4x1kZHERast3p',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 1292364.6396484375,
						w : 53,
						h : 3,
						preload_prefix_size : 88,
						video_start_ts : 28522.46875,
						video_codec : 'kLKoR492FhTsbZjS',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 79,
						title : 'PY140NoZpU6svrfb',
						performer : 'ixqEJ0W3HglbfAw5',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'KUCx87iJgZO5GsWR',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'gcK1sHjiAGoMaW3k',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
		),
	),
);
```