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
		photo_size_max : 66,
		video_size_max : -6147993451597824278,
		file_size_max : -3887903897089934759,
		video_upload_maxbitrate : 16,
		small_queue_active_operations_max : 52,
		large_queue_active_operations_max : 45,
	),
	medium : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 88,
		video_size_max : -7249479482486207313,
		file_size_max : 1309803634568097687,
		video_upload_maxbitrate : 49,
		small_queue_active_operations_max : 48,
		large_queue_active_operations_max : 13,
	),
	high : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 20,
		video_size_max : 3984665074658653651,
		file_size_max : -4175453423422789620,
		video_upload_maxbitrate : 68,
		small_queue_active_operations_max : 45,
		large_queue_active_operations_max : 37,
	),
);
```