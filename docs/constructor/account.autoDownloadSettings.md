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
		photo_size_max : 61,
		video_size_max : 1189521424894584886,
		file_size_max : 2849500702640548765,
		video_upload_maxbitrate : 35,
		small_queue_active_operations_max : 8,
		large_queue_active_operations_max : 17,
	),
	medium : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 2,
		video_size_max : -5870587215790851352,
		file_size_max : 730476444983812588,
		video_upload_maxbitrate : 62,
		small_queue_active_operations_max : 57,
		large_queue_active_operations_max : 45,
	),
	high : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 69,
		video_size_max : 5821451438379349187,
		file_size_max : 1560374806080772733,
		video_upload_maxbitrate : 51,
		small_queue_active_operations_max : 54,
		large_queue_active_operations_max : 53,
	),
);
```