# account.autoDownloadSettings

**Description** : *Media autodownload settings*

**Layer** : 214

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
		photo_size_max : 23,
		video_size_max : -6871211335886801425,
		file_size_max : -8292612254388402952,
		video_upload_maxbitrate : 44,
		small_queue_active_operations_max : 94,
		large_queue_active_operations_max : 0,
	),
	medium : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 66,
		video_size_max : 5284247501790038330,
		file_size_max : 6514837157847051955,
		video_upload_maxbitrate : 6,
		small_queue_active_operations_max : 48,
		large_queue_active_operations_max : 34,
	),
	high : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 57,
		video_size_max : 6677135629361768182,
		file_size_max : 3177994554194736612,
		video_upload_maxbitrate : 54,
		small_queue_active_operations_max : 94,
		large_queue_active_operations_max : 37,
	),
);
```