# account.saveAutoDownloadSettings

**Description** : *Change media autodownload settings*

**Layer** : 225

```tl
account.saveAutoDownloadSettings#76f36233 flags:# low:flags.0?true high:flags.1?true settings:AutoDownloadSettings = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **low** | [`flags.0?true`](type/true) | Whether to save media in the low data usage preset |
| **high** | [`flags.1?true`](type/true) | Whether to save media in the high data usage preset |
| <mark>settings</mark> | [`AutoDownloadSettings`](type/AutoDownloadSettings) | Media autodownload settings |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->account->saveAutoDownloadSettings(
	low : true,
	high : true,
	settings : $client->autoDownloadSettings(
		disabled : true,
		video_preload_large : true,
		audio_preload_next : true,
		phonecalls_less_data : true,
		stories_preload : true,
		photo_size_max : 74,
		video_size_max : 5403293883306900248,
		file_size_max : -7656402349303441588,
		video_upload_maxbitrate : 35,
		small_queue_active_operations_max : 68,
		large_queue_active_operations_max : 20,
	),
);
```