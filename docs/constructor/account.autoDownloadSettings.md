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
		photo_size_max : 99,
		video_size_max : 3870893319238384492,
		file_size_max : 3728792913171717113,
		video_upload_maxbitrate : 70,
		small_queue_active_operations_max : 99,
		large_queue_active_operations_max : 83,
	),
	medium : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 1,
		video_size_max : 1430032231406676510,
		file_size_max : -2041632668965228516,
		video_upload_maxbitrate : 56,
		small_queue_active_operations_max : 45,
		large_queue_active_operations_max : 46,
	),
	high : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 7,
		video_size_max : 5641583911735929010,
		file_size_max : 5242244969183495033,
		video_upload_maxbitrate : 69,
		small_queue_active_operations_max : 47,
		large_queue_active_operations_max : 33,
	),
);
```