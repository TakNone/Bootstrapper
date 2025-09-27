# inputWebDocument

**Description** : *The document*

**Layer** : 216

```tl
inputWebDocument#9bed434d url:string size:int mime_type:string attributes:Vector<DocumentAttribute> = InputWebDocument;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | Remote document URL to be downloaded using the appropriate method |
| <mark>size</mark> | [`int`](type/int) | Remote file size |
| <mark>mime_type</mark> | [`string`](type/string) | Mime type |
| <mark>attributes</mark> | [`Vector<DocumentAttribute>`](type/DocumentAttribute) | Attributes for media types |

---

## Type

[InputWebDocument](type/InputWebDocument)

---

## Example

```php
$inputWebDocument = $client->inputWebDocument(
	url : 'https://docs.liveproto.dev',
	size : 86,
	mime_type : '5yBvsfnK2h9rDWdt',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 5,
			h : 83,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'uWx1LUlsK5QYmNSC',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 87,
				x : -958857.7509765625,
				y : -936179.1015625,
				zoom : 667505.490234375,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -630964.9951171875,
			w : 34,
			h : 66,
			preload_prefix_size : 82,
			video_start_ts : -1454338.6572265625,
			video_codec : '97sKa6fw0VUlzO1p',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 70,
			title : 'fHGXcYvQLb5o3IMz',
			performer : 'K7inT8hXxtAUdCkF',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : '9qWAIHBMrfQ5XZut',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'dGHgI1ypqQRCBPSU',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```