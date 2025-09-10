# inputChatUploadedPhoto

**Description** : *New photo to be set as group profile photo*

**Layer** : 214

```tl
inputChatUploadedPhoto#bdcdaec0 flags:# file:flags.0?InputFile video:flags.1?InputFile video_start_ts:flags.2?double video_emoji_markup:flags.3?VideoSize = InputChatPhoto;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **file** | [`flags.0?InputFile`](type/InputFile) | File saved in parts using the method upload.saveFilePart |
| **video** | [`flags.1?InputFile`](type/InputFile) | Square video for animated profile picture |
| **video_start_ts** | [`flags.2?double`](type/double) | Floating point UNIX timestamp in seconds, indicating the frame of the video/sticker that should be used as static preview; can only be used if video or video_emoji_markup is set |
| **video_emoji_markup** | [`flags.3?VideoSize`](type/VideoSize) | Animated sticker profile picture, must contain either a videoSizeEmojiMarkup or a videoSizeStickerMarkup constructor |

---

## Type

[InputChatPhoto](type/InputChatPhoto)

---

## Example

```php
$inputChatPhoto = $client->inputChatUploadedPhoto(
	file : $client->inputFile(
		id : 6949738275471392945,
		parts : 36,
		name : 'VTk9JmHefwGcgWjE',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	video : $client->inputFile(
		id : -4196040864673659839,
		parts : 57,
		name : 'mInU9l2Vab6tqAEu',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	video_start_ts : 530806.1015625,
	video_emoji_markup : $client->videoSize(
		type : 'M2yndcOLksVFiKN6',
		w : 54,
		h : 18,
		size : 71,
		video_start_ts : 1197656.2080078125,
	),
);
```