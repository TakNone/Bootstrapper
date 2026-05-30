# messages.myStickers

**Description** : *The list of stickersets owned by the current account &raquo;*

**Layer** : 225

```tl
messages.myStickers#faff629d count:int sets:Vector<StickerSetCovered> = messages.MyStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of owned stickersets |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Stickersets |

---

## Type

[messages.MyStickers](type/messages.MyStickers)

---

## Example

```php
$messagesMyStickers = $client->messages->myStickers(
	count : 3,
	sets : array(
		$client->stickerSetCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 44,
				id : 4884327584206482418,
				access_hash : 2857482178114981557,
				title : 'd8W13wG5kOacmEBN',
				short_name : 'qlhKuZTetDXMNI1v',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'sPUezmpD489Xb5ud',
					),
					$client->photoSize(
						type : 'l8kR4e0Y5sHN9ctr',
						w : 97,
						h : 99,
						size : 12,
					),
					$client->photoCachedSize(
						type : '7pRQLoChuiXHjF9O',
						w : 91,
						h : 85,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'ifwJzv2gNdtOQ0Ch',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '0Snqwh7cEsmWYJy2',
						w : 29,
						h : 27,
						sizes : array(92),
					),
					$client->photoPathSize(
						type : '1OBwTE9DlZRnAkVP',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 4,
				thumb_version : 24,
				thumb_document_id : -5725491065391434308,
				count : 8,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -7147766863904018502,
			),
		),
		$client->stickerSetMultiCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 87,
				id : -5734945068074372521,
				access_hash : 4532873641811242928,
				title : 'FKelSIXfPtmkCJrG',
				short_name : 'bvDgZOIfiLHlqAUo',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '8LcBmwVtoDibaPY6',
					),
					$client->photoSize(
						type : 'beRLXOwH1uQpjo4A',
						w : 31,
						h : 88,
						size : 49,
					),
					$client->photoCachedSize(
						type : 'XwcbpArK6l291mDe',
						w : 97,
						h : 5,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'kFtUg5Q2irMuOG91',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'AaBwXhgb09LKZC7q',
						w : 89,
						h : 91,
						sizes : array(95),
					),
					$client->photoPathSize(
						type : 'P3laVX7hz5fDQ6Tj',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 63,
				thumb_version : 78,
				thumb_document_id : -6194528545288617092,
				count : 75,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -8583417144576739457,
				),
				$client->document(
					id : 8774636768536472150,
					access_hash : 7026093076104916816,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 78,
					mime_type : 'Bwq7rZvCyoeMS40c',
					size : 6820217171282466813,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'puWIZ6x3eHomjXJs',
						),
						$client->photoSize(
							type : 'FLOPUy04ojRqgWkB',
							w : 4,
							h : 67,
							size : 7,
						),
						$client->photoCachedSize(
							type : 'A3jkTMrQD5IVZoUq',
							w : 7,
							h : 23,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'ejDcq9hVRKmpfgA0',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'LH4BmTV3NbcGCQEi',
							w : 83,
							h : 94,
							sizes : array(85),
						),
						$client->photoPathSize(
							type : 'KTIJF8LG3NOCbzld',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'R1nFjf0cDKEIq8sJ',
							w : 89,
							h : 16,
							size : 49,
							video_start_ts : -325167.583984375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 4415021692080106516,
							background_colors : array(0),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -1521714152238226196,
							background_colors : array(84),
						),
					),
					dc_id : 53,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 44,
							h : 21,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'ClXMOsKAL7wbSR8n',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1421018.7314453125,
							w : 69,
							h : 63,
							preload_prefix_size : 69,
							video_start_ts : 1753566.2138671875,
							video_codec : 'fY9UCr1pTJFjlPe8',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 63,
							title : 'iJy810nwBFN6fA9p',
							performer : 'AplgMLWREvs0VPwr',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'IG4rZ2YFLzgj5ciN',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'eJ25HQYamtUZhlo4',
							stickerset : $client->inputStickerSetEmpty(...),
						),
					),
				),
			),
		),
		$client->stickerSetFullCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 81,
				id : -5894361328974846522,
				access_hash : -2577345162742083117,
				title : 'IPQxKD42le7Ghauq',
				short_name : 'FWYfIOQ09svyjcxB',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'jRT9v8ybwkncC4Sh',
					),
					$client->photoSize(
						type : 'FAmX6EB3WobPU1Jh',
						w : 41,
						h : 45,
						size : 76,
					),
					$client->photoCachedSize(
						type : 'hNR4HsEiykvVw8TY',
						w : 70,
						h : 20,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'oN80BFVUwQ1C3vHO',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'Fu59r7MnWvcgiYCN',
						w : 22,
						h : 41,
						sizes : array(7),
					),
					$client->photoPathSize(
						type : 'NIQtGo8EvjTRJqMD',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 57,
				thumb_version : 29,
				thumb_document_id : -4944805844716976910,
				count : 87,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'jqbI158vGpCUe7mQ',
					documents : array(4070495163112826751),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 6326973167379986364,
					keyword : array('rlbT6ZRL2oH5uzMK'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -6478727532851093404,
				),
				$client->document(
					id : 7345727428837738121,
					access_hash : 7584225762561429413,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 86,
					mime_type : 'BS3cOndgYHw5meV7',
					size : -6835966264532248158,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'XI3c8YGDOmMli65r',
						),
						$client->photoSize(
							type : 'OvSF85Z9KfYlgIB7',
							w : 55,
							h : 23,
							size : 0,
						),
						$client->photoCachedSize(
							type : 'nDfGPWSeA1pH9dkl',
							w : 82,
							h : 7,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'SXDealth4qcwbOJg',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'rMc3SHTdnvpkYqNl',
							w : 63,
							h : 62,
							sizes : array(99),
						),
						$client->photoPathSize(
							type : 'SHMCdgRJemEhnxry',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'sntW8r0S3DfjG1HC',
							w : 32,
							h : 78,
							size : 28,
							video_start_ts : -1096223.05859375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -2945307097710541895,
							background_colors : array(15),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 494716390532701473,
							background_colors : array(80),
						),
					),
					dc_id : 61,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 18,
							h : 84,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : '8eflk1sN4jTahydO',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -661545.8828125,
							w : 86,
							h : 20,
							preload_prefix_size : 33,
							video_start_ts : -7932.142578125,
							video_codec : 'Qh2qb6tyr1IXZnS4',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 6,
							title : 'jZbkIB5nHeL2U3vs',
							performer : 'Yg7is2NDuWXIeH49',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'tUsbTLagNopBjS5f',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'uWd94sHvL5yZQ0kU',
							stickerset : $client->inputStickerSetEmpty(...),
						),
					),
				),
			),
		),
		$client->stickerSetNoCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 27,
				id : 7029877661184755316,
				access_hash : 4881108724252194618,
				title : '40AXuNzZGiHhopD1',
				short_name : 'ARgPwyrc9SnaluTi',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'GPndxuqeKbRY4osc',
					),
					$client->photoSize(
						type : 'wiGC19SV6ev7g5qf',
						w : 38,
						h : 25,
						size : 59,
					),
					$client->photoCachedSize(
						type : 'ApfPTNyqjICzv7Sl',
						w : 17,
						h : 61,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'oBLr79HSJXwudkMN',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'VTG3IdUsKFuxJyEH',
						w : 21,
						h : 0,
						sizes : array(89),
					),
					$client->photoPathSize(
						type : 'AMEy43wa1TvFgiO0',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 11,
				thumb_version : 40,
				thumb_document_id : -8211215223311724425,
				count : 5,
				hash : 0,
			),
		),
	),
);
```