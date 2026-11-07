# videoSize

**Description** : *An animated profile picture in MPEG4 format*

**Layer** : 233

```tl
videoSize#de33b094 flags:# type:string w:int h:int size:int video_start_ts:flags.0?double = VideoSize;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>type</mark> | [`string`](type/string) | videoSize.type value » |
| <mark>w</mark> | [`int`](type/int) | Video width |
| <mark>h</mark> | [`int`](type/int) | Video height |
| <mark>size</mark> | [`int`](type/int) | File size |
| **video_start_ts** | [`flags.0?double`](type/double) | Timestamp that should be shown as static preview to the user (seconds) |

---

## Type

[VideoSize](type/VideoSize)

---

## Example

```php
$videoSize = $client->videoSize(
	type : 'UpOo1Hgq4cKlYsPy',
	w : 16,
	h : 2,
	size : 6,
	video_start_ts : -1304164.6513671875,
);
```