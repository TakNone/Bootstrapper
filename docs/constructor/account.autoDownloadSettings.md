# account.autoDownloadSettings

**Description** : *Media autodownload settings*

**Layer** : 214

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
		photo_size_max : 94,
		video_size_max : 6664247261266366506,
		file_size_max : 8791377601421338088,
		video_upload_maxbitrate : 51,
		small_queue_active_operations_max : 48,
		large_queue_active_operations_max : 25,
	),
	medium : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 34,
		video_size_max : -259628614055413389,
		file_size_max : -381727316776783671,
		video_upload_maxbitrate : 54,
		small_queue_active_operations_max : 44,
		large_queue_active_operations_max : 95,
	),
	high : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 47,
		video_size_max : 7235353365728333191,
		file_size_max : 7447635007581176197,
		video_upload_maxbitrate : 6,
		small_queue_active_operations_max : 71,
		large_queue_active_operations_max : 35,
	),
);
```