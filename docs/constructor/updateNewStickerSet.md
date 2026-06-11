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
			installed_date : 34,
			id : -4192905642682833683,
			access_hash : 8201115002713331043,
			title : 'baZrTkCzg7p438oj',
			short_name : 'jOyMx0C3Lg9Yn8kE',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'Pgd0uLoxivD4qIFh',
				),
				$client->photoSize(
					type : 'fzkAvFhMJwUC9pqn',
					w : 39,
					h : 32,
					size : 35,
				),
				$client->photoCachedSize(
					type : 'er2BdEMhDSjJQl3P',
					w : 77,
					h : 90,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'SMLctaB1P9eK7jis',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'Y6xibwL1XDhlJdGU',
					w : 16,
					h : 56,
					sizes : array(56),
				),
				$client->photoPathSize(
					type : 'szQ46nvr1gfd5NKp',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 9,
			thumb_version : 85,
			thumb_document_id : -1550443049926727235,
			count : 88,
			hash : 0,
		),
		packs : array(
			$client->stickerPack(
				emoticon : 'xCuSgk6AJtyaTm2p',
				documents : array(-3505880926791030133),
			),
		),
		keywords : array(
			$client->stickerKeyword(
				document_id : 6532982401696798008,
				keyword : array('yNHe8X1gpIJ6Ll52'),
			),
		),
		documents : array(
			$client->documentEmpty(
				id : 4436193994793992104,
			),
			$client->document(
				id : 2588578678847150678,
				access_hash : 7182638664717189683,
				file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				date : 72,
				mime_type : 'FXoVO0KQ6q8fD4Zy',
				size : -7514271973089604873,
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'ThXxojN04Y7fBW2Q',
					),
					$client->photoSize(
						type : 'AToyYDK0rI1sqGdj',
						w : 19,
						h : 2,
						size : 34,
					),
					$client->photoCachedSize(
						type : 'nPRweKjZ48NFtpUg',
						w : 32,
						h : 23,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : '1tXQJx2DziajNk0O',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'hD8SkMic9Iof03gA',
						w : 48,
						h : 29,
						sizes : array(82),
					),
					$client->photoPathSize(
						type : 'F70tqXAegMlWdvYC',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				video_thumbs : array(
					$client->videoSize(
						type : 'uFW0mAeDEaBojTZp',
						w : 68,
						h : 2,
						size : 17,
						video_start_ts : -1146814.6875,
					),
					$client->videoSizeEmojiMarkup(
						emoji_id : 533141200906987878,
						background_colors : array(15),
					),
					$client->videoSizeStickerMarkup(
						stickerset : $client->inputStickerSetEmpty(...),
						sticker_id : -2750945595103231394,
						background_colors : array(91),
					),
				),
				dc_id : 54,
				attributes : array(
					$client->documentAttributeImageSize(
						w : 89,
						h : 30,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : '8nl41sj9pkZqGmE0',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 611495.4990234375,
						w : 35,
						h : 50,
						preload_prefix_size : 28,
						video_start_ts : 1516198.21875,
						video_codec : 'X9kQRVTo3yd5gtMZ',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 5,
						title : '6Uj9CGSIP8fo0hxO',
						performer : 'WGIM0enJEcAoYul1',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : '5TIfziGuVtarJcPO',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'xfTeXZJLYgsaMGpk',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
		),
	),
);
```