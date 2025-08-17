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
	hash : -7431459952441160447,
	packs : array(
		$client->stickerPack(
			emoticon : 'SdAsOfvax8hWj2yb',
			documents : array(6947757556404042345),
		),
	),
	stickers : array(
		$client->documentEmpty(
			id : -9207126883313423680,
		),
		$client->document(
			id : -7585254851227186079,
			access_hash : -2539206792612080299,
			file_reference : '?*n?LiveProtocq?T8',
			date : 42,
			mime_type : 'dlSEnYsiQDzMKfj7',
			size : 7377196946955981848,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'Rtq7EU8cyS3AG0Cs',
				),
				$client->photoSize(
					type : 'elw9PmyOuC3GqYMp',
					w : 1,
					h : 45,
					size : 27,
				),
				$client->photoCachedSize(
					type : 'iAhfrwRu9NUZ4PX7',
					w : 39,
					h : 34,
					bytes : '??8?VLiveProto??J?',
				),
				$client->photoStrippedSize(
					type : 'due5QAnhXfFDcMRB',
					bytes : ':LiveProto???\\?',
				),
				$client->photoSizeProgressive(
					type : 'UMfi3IGHSNYAFuy1',
					w : 67,
					h : 39,
					sizes : array(13),
				),
				$client->photoPathSize(
					type : '8JqN9mykE2QMVHv5',
					bytes : '?Wܼ?LiveProto;?;??',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '5kgZPhovp8X0RTcf',
					w : 8,
					h : 33,
					size : 10,
					video_start_ts : 906430.822265625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -8037952172939055557,
					background_colors : array(34),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -2987597229765620662,
					background_colors : array(13),
				),
			),
			dc_id : 14,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 26,
					h : 79,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'SQDPKtNla2fosVpY',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1454707.720703125,
					w : 42,
					h : 65,
					preload_prefix_size : 32,
					video_start_ts : -1177203.9951171875,
					video_codec : 'bTsG8BQlNLojzxqg',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 98,
					title : 'KZfBHRtUXFe3Ec8o',
					performer : 'G0wIn7H3P9qbUS6K',
					waveform : '??܂LiveProto?̥I?',
				),
				$client->documentAttributeFilename(
					file_name : 'dnvxQm9Bq2p60MzK',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'FPWreCztml4YBVq0',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	dates : array(45),
);
```