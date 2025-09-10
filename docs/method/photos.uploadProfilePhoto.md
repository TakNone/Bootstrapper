# photos.uploadProfilePhoto

**Description** : *Updates current user profile photo*

**Layer** : 214

```tl
photos.uploadProfilePhoto#388a3b5 flags:# fallback:flags.3?true bot:flags.5?InputUser file:flags.0?InputFile video:flags.1?InputFile video_start_ts:flags.2?double video_emoji_markup:flags.4?VideoSize = photos.Photo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **fallback** | [`flags.3?true`](type/true) | If set, the chosen profile photo will be shown to users that can't display your main profile photo due to your privacy settings |
| **bot** | [`flags.5?InputUser`](type/InputUser) | Can contain info of a bot we own, to change the profile photo of that bot, instead of the current user |
| **file** | [`flags.0?InputFile`](type/InputFile) | Profile photo |
| **video** | [`flags.1?InputFile`](type/InputFile) | Animated profile picture video |
| **video_start_ts** | [`flags.2?double`](type/double) | Floating point UNIX timestamp in seconds, indicating the frame of the video/sticker that should be used as static preview; can only be used if video or video_emoji_markup is set |
| **video_emoji_markup** | [`flags.4?VideoSize`](type/VideoSize) | Animated sticker profile picture, must contain either a videoSizeEmojiMarkup or a videoSizeStickerMarkup constructor |

---

## Result

[photos.Photo](type/photos.Photo)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ALBUM_PHOTOS_TOO_MANY** | `400` | You have uploaded too many profile photos, delete some before retrying |
| **BOT_INVALID** | `400` | This is not a valid bot |
| **EMOJI_MARKUP_INVALID** | `400` | The specified video_emoji_markup was invalid |
| **FILE_PARTS_INVALID** | `400` | The number of file parts is invalid |
| **IMAGE_PROCESS_FAILED** | `400` | Failure while processing image |
| **PHOTO_CROP_FILE_MISSING** | `400` | Photo crop file missing |
| **PHOTO_CROP_SIZE_SMALL** | `400` | Photo is too small |
| **PHOTO_EXT_INVALID** | `400` | The extension of the photo is invalid |
| **PHOTO_FILE_MISSING** | `400` | Profile photo file missing |
| **PHOTO_INVALID** | `400` | Photo invalid |
| **STICKER_MIME_INVALID** | `400` | The specified sticker MIME type is invalid |
| **VIDEO_FILE_INVALID** | `400` | The specified video file is invalid |

---

## Example

```php
$photosPhoto = $client->photos->uploadProfilePhoto(
	fallback : true,
	bot : $client->inputUserEmpty(),
	file : $client->inputFile(
		id : -7049491245030604735,
		parts : 93,
		name : 't8UbyzrZLGfWhk26',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	video : $client->inputFile(
		id : -7151444530452345685,
		parts : 56,
		name : 'QIKXgiTsFDtG2LzV',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	video_start_ts : 1678719.390625,
	video_emoji_markup : $client->videoSize(
		type : 'KhLp1yBotfMXd9Rk',
		w : 21,
		h : 89,
		size : 69,
		video_start_ts : -840715.525390625,
	),
);
```