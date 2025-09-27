# account.autoDownloadSettings

**Description** : *Media autodownload settings*

**Layer** : 216

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
		photo_size_max : 49,
		video_size_max : 1507163870060882818,
		file_size_max : 6430973454575882345,
		video_upload_maxbitrate : 15,
		small_queue_active_operations_max : 1,
		large_queue_active_operations_max : 0,
	),
	medium : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 67,
		video_size_max : -2574399956181505142,
		file_size_max : 3025688126437915472,
		video_upload_maxbitrate : 75,
		small_queue_active_operations_max : 92,
		large_queue_active_operations_max : 81,
	),
	high : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 0,
		video_size_max : 8911788680587660616,
		file_size_max : -4173725602813086192,
		video_upload_maxbitrate : 24,
		small_queue_active_operations_max : 44,
		large_queue_active_operations_max : 78,
	),
);
```