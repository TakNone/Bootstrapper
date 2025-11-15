# account.autoDownloadSettings

**Description** : *Media autodownload settings*

**Layer** : 218

```tl
account.autoDownloadSettings#63cacf26 low:AutoDownloadSettings medium:AutoDownloadSettings high:AutoDownloadSettings = account.AutoDownloadSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>low</mark> | [`AutoDownloadSettings`](type/AutoDownloadSettings) | Low data usage preset |
| <mark>medium</mark> | [`AutoDownloadSettings`](type/AutoDownloadSettings) | Medium data usage preset |
| <mark>high</mark> | [`AutoDownloadSettings`](type/AutoDownloadSettings) | High data usage preset |

---

## Type

[account.AutoDownloadSettings](type/account.AutoDownloadSettings)

---

## Example

```php
$accountAutoDownloadSettings = $client->account->autoDownloadSettings(
	low : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 62,
		video_size_max : -1474160127125401816,
		file_size_max : -1809781422729926694,
		video_upload_maxbitrate : 97,
		small_queue_active_operations_max : 26,
		large_queue_active_operations_max : 47,
	),
	medium : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 36,
		video_size_max : 1754785765553399913,
		file_size_max : 2956761248097913937,
		video_upload_maxbitrate : 7,
		small_queue_active_operations_max : 39,
		large_queue_active_operations_max : 4,
	),
	high : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 13,
		video_size_max : 1056451264921271137,
		file_size_max : 2634771299749698581,
		video_upload_maxbitrate : 87,
		small_queue_active_operations_max : 71,
		large_queue_active_operations_max : 3,
	),
);
```