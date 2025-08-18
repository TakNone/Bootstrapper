# inputMediaUploadedDocument

**Description** : *New document*

**Layer** : 211

```tl
inputMediaUploadedDocument#37c9330 flags:# nosound_video:flags.3?true force_file:flags.4?true spoiler:flags.5?true file:InputFile thumb:flags.2?InputFile mime_type:string attributes:Vector<DocumentAttribute> stickers:flags.0?Vector<InputDocument> video_cover:flags.6?InputPhoto video_timestamp:flags.7?int ttl_seconds:flags.1?int = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **nosound_video** | [`flags.3?true`](type/true) | Whether the specified document is a video file with no audio tracks (a GIF animation (even as MPEG4), for example) |
| **force_file** | [`flags.4?true`](type/true) | Force the media file to be uploaded as document |
| **spoiler** | [`flags.5?true`](type/true) | Whether this media should be hidden behind a spoiler warning |
| <mark>file</mark> | [`InputFile`](type/InputFile) | The uploaded file |
| **thumb** | [`flags.2?InputFile`](type/InputFile) | Thumbnail of the document, uploaded as for the file |
| <mark>mime_type</mark> | [`string`](type/string) | MIME type of document |
| <mark>attributes</mark> | [`Vector<DocumentAttribute>`](type/DocumentAttribute) | Attributes that specify the type of the document (video, audio, voice, sticker, etc.) |
| **stickers** | [`flags.0?Vector<InputDocument>`](type/InputDocument) | Attached stickers |
| **video_cover** | [`flags.6?InputPhoto`](type/InputPhoto) | NOTHING |
| **video_timestamp** | [`flags.7?int`](type/int) | NOTHING |
| **ttl_seconds** | [`flags.1?int`](type/int) | Time to live in seconds of self-destructing document |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaUploadedDocument(
	nosound_video : true,
	force_file : true,
	spoiler : true,
	file : $client->inputFile(
		id : -8315415555102577018,
		parts : 60,
		name : 'iBuLTyqwDnRoYW9X',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	thumb : $client->inputFile(
		id : -4584885880600123846,
		parts : 9,
		name : 'b1LylW39dkQFIXY0',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	mime_type : '9mWOdS0cGLz1enH4',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 50,
			h : 28,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'IwEnGS079f4m6WBK',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 35,
				x : 76173.736328125,
				y : 2015866.98828125,
				zoom : -1101423.744140625,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 170248.5634765625,
			w : 69,
			h : 38,
			preload_prefix_size : 31,
			video_start_ts : -311250.8974609375,
			video_codec : 'HWUySeZEIuAvYRTc',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 22,
			title : '931XwbzFMGtWO4he',
			performer : 'J8KVyPqz4or2TkYj',
			waveform : '?~??LiveProto?D5<#',
		),
		$client->documentAttributeFilename(
			file_name : 'XdNzlAa36FURGe1u',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'FsIP9oHc2TqnYD6M',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
	stickers : array(
		$client->inputDocumentEmpty(),
		$client->inputDocument(
			id : 7377591582888307120,
			access_hash : 7661696227666874715,
			file_reference : '}?~??LiveProtoF?<^L',
		),
	),
	video_cover : $client->inputPhotoEmpty(),
	video_timestamp : 65,
	ttl_seconds : 26,
);
```