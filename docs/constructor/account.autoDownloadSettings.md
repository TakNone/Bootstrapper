# account.autoDownloadSettings

**Description** : *Media autodownload settings*

**Layer** : 225

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
		photo_size_max : 67,
		video_size_max : -4313745229627337077,
		file_size_max : 4241589100587767479,
		video_upload_maxbitrate : 60,
		small_queue_active_operations_max : 32,
		large_queue_active_operations_max : 49,
	),
	medium : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 31,
		video_size_max : 2791414540795399265,
		file_size_max : -3977033015967364730,
		video_upload_maxbitrate : 27,
		small_queue_active_operations_max : 82,
		large_queue_active_operations_max : 100,
	),
	high : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 58,
		video_size_max : 6169864006524586873,
		file_size_max : 161690387369888497,
		video_upload_maxbitrate : 12,
		small_queue_active_operations_max : 37,
		large_queue_active_operations_max : 58,
	),
);
```