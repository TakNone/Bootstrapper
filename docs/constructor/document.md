# document

**Description** : *Document*

**Layer** : 211

```tl
document#8fd4c4d8 flags:# id:long access_hash:long file_reference:bytes date:int mime_type:string size:long thumbs:flags.0?Vector<PhotoSize> video_thumbs:flags.1?Vector<VideoSize> dc_id:int attributes:Vector<DocumentAttribute> = Document;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>id</mark> | [`long`](type/long) | Document ID |
| <mark>access_hash</mark> | [`long`](type/long) | Check sum, dependent on document ID |
| <mark>file_reference</mark> | [`bytes`](type/bytes) | File reference |
| <mark>date</mark> | [`int`](type/int) | Creation date |
| <mark>mime_type</mark> | [`string`](type/string) | MIME type |
| <mark>size</mark> | [`long`](type/long) | Size |
| **thumbs** | [`flags.0?Vector<PhotoSize>`](type/PhotoSize) | Thumbnails |
| **video_thumbs** | [`flags.1?Vector<VideoSize>`](type/VideoSize) | Video thumbnails |
| <mark>dc_id</mark> | [`int`](type/int) | DC ID |
| <mark>attributes</mark> | [`Vector<DocumentAttribute>`](type/DocumentAttribute) | Attributes |

---

## Type

[Document](type/Document)

---

## Example

```php
$document = $client->document(
	id : -1031368066594886672,
	access_hash : 3828972948392790669,
	file_reference : '?+@f?LiveProto?▊8',
	date : 90,
	mime_type : '4bPz3mHZgpaV0wXG',
	size : -5084433306080397911,
	thumbs : array(
		$client->photoSizeEmpty(
			type : 'kIeC2nLgTdA6qxc9',
		),
		$client->photoSize(
			type : '2UWYCjAaRHNdOKFg',
			w : 72,
			h : 73,
			size : 45,
		),
		$client->photoCachedSize(
			type : '9CdltzxgPkUyeb8q',
			w : 26,
			h : 98,
			bytes : '?ҾľLiveProtox?<??',
		),
		$client->photoStrippedSize(
			type : 'GNgTLseu8ZrQbcSf',
			bytes : '?*G?eLiveProto?B???',
		),
		$client->photoSizeProgressive(
			type : 'syuzVjwa2Ome1B4G',
			w : 74,
			h : 42,
			sizes : array(56),
		),
		$client->photoPathSize(
			type : 'phsZ69NHjcAIxK0l',
			bytes : '?^??LiveProtoB_~<',
		),
	),
	video_thumbs : array(
		$client->videoSize(
			type : 'iXIkBsLe1fxRt94O',
			w : 90,
			h : 25,
			size : 55,
			video_start_ts : -1995157.748046875,
		),
		$client->videoSizeEmojiMarkup(
			emoji_id : 7124891580185857521,
			background_colors : array(78),
		),
		$client->videoSizeStickerMarkup(
			stickerset : $client->inputStickerSetEmpty(),
			sticker_id : 3972493960602127220,
			background_colors : array(69),
		),
	),
	dc_id : 23,
	attributes : array(
		$client->documentAttributeImageSize(
			w : 29,
			h : 98,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'M2xiCfB4k657aqwG',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 63,
				x : -611799.3583984375,
				y : 1940110.095703125,
				zoom : -1848138.58203125,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -1504379.693359375,
			w : 18,
			h : 89,
			preload_prefix_size : 86,
			video_start_ts : 47726.0205078125,
			video_codec : 'uT6gX9ErcdDAwye3',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 45,
			title : 'mIc5dXzrqBAeKL8a',
			performer : 'ftAPzwp6N1naWsHr',
			waveform : ',f="?LiveProto?B?LG',
		),
		$client->documentAttributeFilename(
			file_name : 'RNhPKVpnfmXQxHCT',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : '5aLzBk3gqoebKyDW',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```