# autoDownloadSettings

**Description** : *Autodownload settings*

**Layer** : 214

```tl
autoDownloadSettings#baa57628 flags:# disabled:flags.0?true video_preload_large:flags.1?true audio_preload_next:flags.2?true phonecalls_less_data:flags.3?true stories_preload:flags.4?true photo_size_max:int video_size_max:long file_size_max:long video_upload_maxbitrate:int small_queue_active_operations_max:int large_queue_active_operations_max:int = AutoDownloadSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **disabled** | [`flags.0?true`](type/true) | Disable automatic media downloads? |
| **video_preload_large** | [`flags.1?true`](type/true) | Whether to preload the first seconds of videos larger than the specified limit |
| **audio_preload_next** | [`flags.2?true`](type/true) | Whether to preload the next audio track when you're listening to music |
| **phonecalls_less_data** | [`flags.3?true`](type/true) | Whether to enable data saving mode in phone calls |
| **stories_preload** | [`flags.4?true`](type/true) | Whether to preload stories; in particular, the first documentAttributeVideo.preload_prefix_size bytes of story videos should be preloaded |
| <mark>photo_size_max</mark> | [`int`](type/int) | Maximum size of photos to preload |
| <mark>video_size_max</mark> | [`long`](type/long) | Maximum size of videos to preload |
| <mark>file_size_max</mark> | [`long`](type/long) | Maximum size of other files to preload |
| <mark>video_upload_maxbitrate</mark> | [`int`](type/int) | Maximum suggested bitrate for uploading videos |
| <mark>small_queue_active_operations_max</mark> | [`int`](type/int) | A limit, specifying the maximum number of files that should be downloaded in parallel from the same DC, for files smaller than 20MB |
| <mark>large_queue_active_operations_max</mark> | [`int`](type/int) | A limit, specifying the maximum number of files that should be downloaded in parallel from the same DC, for files bigger than 20MB |

---

## Type

[AutoDownloadSettings](type/AutoDownloadSettings)

---

## Example

```php
$autoDownloadSettings = $client->autoDownloadSettings(
	disabled : true,
	video_preload_large : true,
	audio_preload_next : true,
	phonecalls_less_data : true,
	stories_preload : true,
	photo_size_max : 94,
	video_size_max : -1069207472426162059,
	file_size_max : 898668075053991288,
	video_upload_maxbitrate : 52,
	small_queue_active_operations_max : 40,
	large_queue_active_operations_max : 52,
);
```