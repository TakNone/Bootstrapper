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
		photo_size_max : 59,
		video_size_max : 3108334706448730254,
		file_size_max : 8868889620863136483,
		video_upload_maxbitrate : 3,
		small_queue_active_operations_max : 76,
		large_queue_active_operations_max : 67,
	),
	medium : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 89,
		video_size_max : -3715550517553226681,
		file_size_max : 6259288703712402745,
		video_upload_maxbitrate : 7,
		small_queue_active_operations_max : 15,
		large_queue_active_operations_max : 96,
	),
	high : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 87,
		video_size_max : 7058440162635359818,
		file_size_max : 5294493347520849480,
		video_upload_maxbitrate : 12,
		small_queue_active_operations_max : 5,
		large_queue_active_operations_max : 60,
	),
);
```