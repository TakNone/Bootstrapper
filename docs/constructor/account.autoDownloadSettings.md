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
		photo_size_max : 45,
		video_size_max : 3536932694787257168,
		file_size_max : -1719524334491216989,
		video_upload_maxbitrate : 17,
		small_queue_active_operations_max : 77,
		large_queue_active_operations_max : 52,
	),
	medium : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 61,
		video_size_max : -4448981183237259514,
		file_size_max : -1333610192414112778,
		video_upload_maxbitrate : 16,
		small_queue_active_operations_max : 50,
		large_queue_active_operations_max : 83,
	),
	high : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 19,
		video_size_max : 4534318662624896905,
		file_size_max : 9097652190838283144,
		video_upload_maxbitrate : 23,
		small_queue_active_operations_max : 47,
		large_queue_active_operations_max : 52,
	),
);
```