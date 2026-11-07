# messages.recentStickers

**Description** : *Recently used stickers*

**Layer** : 233

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
			emoticon : 'jsi9CbAzDR6LcKQm',
			documents : array(4460972164389327034),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : 4140707211431621091,
		),
		$client->document(
			id : -5110580241070650921,
			access_hash : 7269395609082971717,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 6,
			mime_type : 'NgabkAqp9cd7myQh',
			size : -3470349825453971515,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'evG60sNKgtRfhjI9',
				),
				$client->photoSize(
					type : 'cSqueTlR26dN0h4X',
					w : 63,
					h : 3,
					size : 95,
				),
				$client->photoCachedSize(
					type : 'CTkDUYMt4ogbiGwf',
					w : 74,
					h : 73,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'V1FTgk4S3YLO9EIX',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'CHeirtnPQZsEFYoI',
					w : 76,
					h : 14,
					sizes : array(6),
				),
				$client->photoPathSize(
					type : 'sfxJrYhL0ejAm6cZ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'lSotECaqB0dwFWVk',
					w : 57,
					h : 31,
					size : 92,
					video_start_ts : -1284377.166015625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -4246885241023646013,
					background_colors : array(97),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 831605263650848439,
					background_colors : array(93),
				),
			),
			dc_id : 26,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 12,
					h : 20,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'hx4ZbdtyiGajrcHN',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 51,
						x : 157294.3837890625,
						y : -340337.3212890625,
						zoom : -1888455.8076171875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 930961.236328125,
					w : 27,
					h : 91,
					preload_prefix_size : 76,
					video_start_ts : -1232460.33203125,
					video_codec : '251X83FmVLMJUPBt',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 14,
					title : 'v3mz8btHsK7Tc0RP',
					performer : 'RTBm4YID67UxNzWh',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'DiXl4Th5dBuKgRqH',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '9hr6kCaEHMBlOYin',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	dates : array(80),
);
```