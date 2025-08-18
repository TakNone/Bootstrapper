# messages.recentStickers

**Description** : *Recently used stickers*

**Layer** : 211

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
	hash : 6336904327426608708,
	packs : array(
		$client->stickerPack(
			emoticon : '3VczoUr7hIbH4vaP',
			documents : array(-204941469260772467),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : 8256032085656649384,
		),
		$client->document(
			id : -1922700569398693539,
			access_hash : -7669043590731286366,
			file_reference : '??6?HLiveProtog?ع"',
			date : 10,
			mime_type : 'WtG8YF4sRJEPMQKm',
			size : -4126840126946387535,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'uNeEUproJ0FBjtcA',
				),
				$client->photoSize(
					type : 'e1wQL74nd2iaJgAH',
					w : 93,
					h : 44,
					size : 85,
				),
				$client->photoCachedSize(
					type : 'MzHNcig4Dfb2xaQU',
					w : 93,
					h : 26,
					bytes : '??Bg?LiveProto?"?',
				),
				$client->photoStrippedSize(
					type : 'Z1dcnKLp6HCWglFf',
					bytes : '????LiveProto??,?',
				),
				$client->photoSizeProgressive(
					type : 'bYzmpxEPDKfNhyMW',
					w : 13,
					h : 76,
					sizes : array(86),
				),
				$client->photoPathSize(
					type : 'tvGsLkCVlIeRXhgd',
					bytes : '?ʡDLiveProtoXx?',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'k7LR5y23eCMflN9V',
					w : 100,
					h : 38,
					size : 8,
					video_start_ts : 1270104.7666015625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -6057165391138810741,
					background_colors : array(52),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -8843538026335438181,
					background_colors : array(21),
				),
			),
			dc_id : 91,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 79,
					h : 79,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'ZxqAiMwQ4gmsHlh6',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -349750.1015625,
					w : 19,
					h : 50,
					preload_prefix_size : 94,
					video_start_ts : -890565.669921875,
					video_codec : 'i4CyxIqSTg2HXNs0',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 45,
					title : '8QeMVFnhcamvPRZj',
					performer : 'W3uIzXDqG4i2EJVp',
					waveform : 'm???LiveProto?wI?',
				),
				$client->documentAttributeFilename(
					file_name : 'bUdaN6GnyiAwsBWt',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'FU1HNC5IkwqR9tOE',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	dates : array(80),
);
```