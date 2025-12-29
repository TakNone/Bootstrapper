# inputChatUploadedPhoto

**Description** : *New photo to be set as group profile photo*

**Layer** : 218

```tl
inputChatUploadedPhoto#bdcdaec0 flags:# file:flags.0?InputFile video:flags.1?InputFile video_start_ts:flags.2?double video_emoji_markup:flags.3?VideoSize = InputChatPhoto;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	file : $client->upload_file(path : 'file.png'),
	video : $client->upload_file(path : 'file.png'),
	video_start_ts : -1841957.3193359375,
	video_emoji_markup : $client->videoSize(
		type : 'LbQz3YNp2ZfXB7h5',
		w : 81,
		h : 83,
		size : 45,
		video_start_ts : 786642.1796875,
	),
);
```