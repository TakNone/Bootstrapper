# account.autoDownloadSettings

**Description** : *Media autodownload settings*

**Layer** : 233

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
		photo_size_max : 22,
		video_size_max : 6586208386699065070,
		file_size_max : 3225402431716082657,
		video_upload_maxbitrate : 11,
		small_queue_active_operations_max : 52,
		large_queue_active_operations_max : 86,
	),
	medium : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 91,
		video_size_max : 728510364438752979,
		file_size_max : -718817661269679205,
		video_upload_maxbitrate : 33,
		small_queue_active_operations_max : 26,
		large_queue_active_operations_max : 93,
	),
	high : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 49,
		video_size_max : -8378989975614497621,
		file_size_max : 4357442185936306559,
		video_upload_maxbitrate : 81,
		small_queue_active_operations_max : 67,
		large_queue_active_operations_max : 18,
	),
);
```