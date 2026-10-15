# account.autoDownloadSettings

**Description** : *Media autodownload settings*

**Layer** : 229

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
		photo_size_max : 57,
		video_size_max : 6566580039304126649,
		file_size_max : 4830037429959883423,
		video_upload_maxbitrate : 78,
		small_queue_active_operations_max : 31,
		large_queue_active_operations_max : 14,
	),
	medium : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 12,
		video_size_max : 1059838202864865822,
		file_size_max : -4270444754730854255,
		video_upload_maxbitrate : 45,
		small_queue_active_operations_max : 71,
		large_queue_active_operations_max : 33,
	),
	high : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 74,
		video_size_max : 1029115029502761981,
		file_size_max : -1746980207593668825,
		video_upload_maxbitrate : 2,
		small_queue_active_operations_max : 58,
		large_queue_active_operations_max : 50,
	),
);
```