# account.autoDownloadSettings

**Description** : *Media autodownload settings*

**Layer** : 227

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
		photo_size_max : 41,
		video_size_max : 4620123270615187262,
		file_size_max : 3611938901913337976,
		video_upload_maxbitrate : 94,
		small_queue_active_operations_max : 11,
		large_queue_active_operations_max : 66,
	),
	medium : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 16,
		video_size_max : 587904652814879129,
		file_size_max : -916789828422176151,
		video_upload_maxbitrate : 21,
		small_queue_active_operations_max : 33,
		large_queue_active_operations_max : 67,
	),
	high : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 11,
		video_size_max : -4299347462662039225,
		file_size_max : 2103765009227828482,
		video_upload_maxbitrate : 98,
		small_queue_active_operations_max : 96,
		large_queue_active_operations_max : 30,
	),
);
```