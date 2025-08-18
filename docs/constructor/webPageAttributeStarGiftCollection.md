# webPageAttributeStarGiftCollection

**Layer** : 211

```tl
webPageAttributeStarGiftCollection#31cad303 icons:Vector<Document> = WebPageAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>icons</mark> | [`Vector<Document>`](type/Document) | NOTHING |

---

## Type

[WebPageAttribute](type/WebPageAttribute)

---

## Example

```php
$webPageAttribute = $client->webPageAttributeStarGiftCollection(
	icons : array(
		$client->documentEmpty(
			id : -433235923526342401,
		),
		$client->document(
			id : 2420304919341559289,
			access_hash : 2616903611004592213,
			file_reference : 'ܓ?vLiveProto?-9f?',
			date : 10,
			mime_type : '7WziLHRn05V3Amwq',
			size : 5771367355846574774,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'NYeQ9K15gGPVzS7C',
				),
				$client->photoSize(
					type : 'nws6mtMxPy3cWO41',
					w : 22,
					h : 95,
					size : 74,
				),
				$client->photoCachedSize(
					type : 'NXwxPL35JeSy7jHz',
					w : 83,
					h : 40,
					bytes : 't[6?JLiveProtoӆ?I?',
				),
				$client->photoStrippedSize(
					type : 'fm9bFe62wClxqUyt',
					bytes : '??A?LiveProtoV20?',
				),
				$client->photoSizeProgressive(
					type : 'T4nHvuBsXJjD90IG',
					w : 31,
					h : 31,
					sizes : array(75),
				),
				$client->photoPathSize(
					type : 'h8fS5OXab3eDZBFm',
					bytes : 'O/0LiveProto޲???',
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'gNqnIMDJ95Qby24S',
					w : 70,
					h : 37,
					size : 37,
					video_start_ts : 342695.3447265625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 5151876892911627929,
					background_colors : array(16),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : -8026829242881156297,
					background_colors : array(77),
				),
			),
			dc_id : 93,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 91,
					h : 28,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '3WU4AuILgsyD1Czt',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1991739.037109375,
					w : 41,
					h : 56,
					preload_prefix_size : 81,
					video_start_ts : 613009.6708984375,
					video_codec : 'IFTzytaZhrOW02Js',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 96,
					title : 'F3YcGtTxuADR2dnB',
					performer : 'iu7WtZ8rxGqpB6Fy',
					waveform : '逋?cLiveProto9h??',
				),
				$client->documentAttributeFilename(
					file_name : 'HyQeSBCv1XEk2mbA',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '42RpwxtWKjMVeoaN',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```