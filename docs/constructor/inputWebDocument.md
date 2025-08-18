# inputWebDocument

**Description** : *The document*

**Layer** : 211

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
	size : 20,
	mime_type : 'uUZo1Hfr3Pn0gLK9',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 78,
			h : 7,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : '6Fz8IMwkaYD2Lnyd',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 58,
				x : -415325.234375,
				y : -1283690.384765625,
				zoom : -506497.8173828125,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 1317601.1123046875,
			w : 0,
			h : 82,
			preload_prefix_size : 38,
			video_start_ts : -1850571.470703125,
			video_codec : 'cgzt1YVNepGPFBTH',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 48,
			title : 'mn5CfL02OZ7VEpDz',
			performer : '4L3Fx1OGkgcdrmq8',
			waveform : 'Lcb?LiveProto?x?',
		),
		$client->documentAttributeFilename(
			file_name : 'xl7NdBXeHqnjC325',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'zIJ60FVLeluTXm5j',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```