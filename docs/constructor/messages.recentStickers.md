# messages.recentStickers

**Description** : *Recently used stickers*

**Layer** : 214

```tl
messages.recentStickers#88d37c56 hash:long packs:Vector<StickerPack> stickers:Vector<Document> dates:Vector<int> = messages.RecentStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>packs</mark> | [`Vector<StickerPack>`](type/StickerPack) | Emojis associated to stickers |
| <mark>stickers</mark> | [`Vector<Document>`](type/Document) | Recent stickers |
| <mark>dates</mark> | [`Vector<int>`](type/int) | When was each sticker last used |

---

## Type

[messages.RecentStickers](type/messages.RecentStickers)

---

## Example

```php
$messagesRecentStickers = $client->messages->recentStickers(
	hash : 0,
	packs : array(
		$client->stickerPack(
			emoticon : 'a6mYA1o7I9EdZvQD',
			documents : array(-492239311503050692),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : 5874994367883577277,
		),
		$client->document(
			id : -5406212213168729509,
			access_hash : 1284089899879073170,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 46,
			mime_type : '15mOiY0CKlP2L8rJ',
			size : 6726086532285954964,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'oULTYn4szB91Vjc3',
				),
				$client->photoSize(
					type : 'cTRMi5uVejnBYm4a',
					w : 76,
					h : 90,
					size : 97,
				),
				$client->photoCachedSize(
					type : '796O1jxtkhglVdBU',
					w : 91,
					h : 27,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'ljhZBPf8TdLc9e4K',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'QRsSg1KZ4YtH6Ex3',
					w : 42,
					h : 76,
					sizes : array(3),
				),
				$client->photoPathSize(
					type : 'CQKmND6AkcjiRqoJ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'TbIVazr8f1oM7ChA',
					w : 16,
					h : 13,
					size : 8,
					video_start_ts : -80882.8984375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 7808388513220881724,
					background_colors : array(19),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -7788032002312185771,
					background_colors : array(7),
				),
			),
			dc_id : 57,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 11,
					h : 69,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'oOF70jcvL3nDgZ5R',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 301437.0146484375,
					w : 36,
					h : 63,
					preload_prefix_size : 47,
					video_start_ts : -19925.7763671875,
					video_codec : 'VS36blU0IRxcEsTt',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 54,
					title : 'wTCvFAKPZxkedIz7',
					performer : 'p0AN4y2IZJwnRHTM',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'mEqn7KDxiXSueajZ',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'lzRrITMcmSQV45a9',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	dates : array(42),
);
```