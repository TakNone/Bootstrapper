# webDocumentNoProxy

**Description** : *Remote document that can be downloaded without proxying through telegram*

**Layer** : 222

```tl
webDocumentNoProxy#f9c8bcc6 url:string size:int mime_type:string attributes:Vector<DocumentAttribute> = WebDocument;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | Document URL |
| <mark>size</mark> | [`int`](type/int) | File size |
| <mark>mime_type</mark> | [`string`](type/string) | MIME type |
| <mark>attributes</mark> | [`Vector<DocumentAttribute>`](type/DocumentAttribute) | Attributes for media types |

---

## Type

[WebDocument](type/WebDocument)

---

## Example

```php
$webDocument = $client->webDocumentNoProxy(
	url : 'https://docs.liveproto.dev',
	size : 16,
	mime_type : 'fzVbRgKhZwuWFOAe',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 21,
			h : 77,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'AKLfm0doQrzTHvD7',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 76,
				x : 339954.6552734375,
				y : 1952831.6171875,
				zoom : -1506163.716796875,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 865286.7314453125,
			w : 96,
			h : 62,
			preload_prefix_size : 72,
			video_start_ts : -1319747.7138671875,
			video_codec : 'WZb1hv7gVxHy4Eai',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 91,
			title : 'CgaAWI7TRvucBd69',
			performer : '4obSzpVI6aJ7sAlv',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : '8sto2hLnijgzNrB7',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'uwQR3cIKXkoGh7z0',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```