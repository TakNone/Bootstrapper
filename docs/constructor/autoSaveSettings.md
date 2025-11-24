# autoSaveSettings

**Description** : *Media autosave settings*

**Layer** : 218

```tl
autoSaveSettings#c84834ce flags:# photos:flags.0?true videos:flags.1?true video_max_size:flags.2?long = AutoSaveSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **photos** | [`flags.0?true`](type/true) | Whether photos should be autosaved to the gallery |
| **videos** | [`flags.1?true`](type/true) | Whether videos should be autosaved to the gallery |
| **video_max_size** | [`flags.2?long`](type/long) | If set, specifies a size limit for autosavable videos |

---

## Type

[AutoSaveSettings](type/AutoSaveSettings)

---

## Example

```php
$autoSaveSettings = $client->autoSaveSettings(
	photos : true,
	videos : true,
	video_max_size : -6190971989556116809,
);
```