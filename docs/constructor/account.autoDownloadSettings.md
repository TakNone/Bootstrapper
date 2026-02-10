# account.autoDownloadSettings

**Description** : *Media autodownload settings*

**Layer** : 222

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
		photo_size_max : 96,
		video_size_max : -2207944312230339449,
		file_size_max : 4735922624023199234,
		video_upload_maxbitrate : 100,
		small_queue_active_operations_max : 57,
		large_queue_active_operations_max : 96,
	),
	medium : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 69,
		video_size_max : 2482123556780702988,
		file_size_max : 8691581244966692036,
		video_upload_maxbitrate : 16,
		small_queue_active_operations_max : 30,
		large_queue_active_operations_max : 3,
	),
	high : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 66,
		video_size_max : 422478969810540288,
		file_size_max : 887126728130648435,
		video_upload_maxbitrate : 87,
		small_queue_active_operations_max : 25,
		large_queue_active_operations_max : 27,
	),
);
```