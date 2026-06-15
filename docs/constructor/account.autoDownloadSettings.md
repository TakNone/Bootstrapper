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
		photo_size_max : 44,
		video_size_max : 2991031908432941164,
		file_size_max : -7774154416048249068,
		video_upload_maxbitrate : 97,
		small_queue_active_operations_max : 27,
		large_queue_active_operations_max : 95,
	),
	medium : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 80,
		video_size_max : -2481033126154059385,
		file_size_max : 7647226380701987100,
		video_upload_maxbitrate : 61,
		small_queue_active_operations_max : 73,
		large_queue_active_operations_max : 4,
	),
	high : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 52,
		video_size_max : 2074915409644218933,
		file_size_max : 7610401565746907522,
		video_upload_maxbitrate : 72,
		small_queue_active_operations_max : 51,
		large_queue_active_operations_max : 98,
	),
);
```