# account.autoDownloadSettings

**Description** : *Media autodownload settings*

**Layer** : 211

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
		photo_size_max : 89,
		video_size_max : 486660292272410577,
		file_size_max : -6785550410901615096,
		video_upload_maxbitrate : 96,
		small_queue_active_operations_max : 78,
		large_queue_active_operations_max : 52,
	),
	medium : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 48,
		video_size_max : 4415691259332882857,
		file_size_max : 1037373668891165599,
		video_upload_maxbitrate : 20,
		small_queue_active_operations_max : 45,
		large_queue_active_operations_max : 69,
	),
	high : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 7,
		video_size_max : 8655748081017997223,
		file_size_max : 2383923816911680086,
		video_upload_maxbitrate : 8,
		small_queue_active_operations_max : 21,
		large_queue_active_operations_max : 25,
	),
);
```