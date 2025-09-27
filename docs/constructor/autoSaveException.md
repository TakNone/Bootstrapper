# autoSaveException

**Description** : *Peer\-specific media autosave settings*

**Layer** : 214

```tl
autoSaveException#81602d47 peer:Peer settings:AutoSaveSettings = AutoSaveException;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer |
| <mark>settings</mark> | [`AutoSaveSettings`](type/AutoSaveSettings) | Media autosave settings |

---

## Type

[AutoSaveException](type/AutoSaveException)

---

## Example

```php
$autoSaveException = $client->autoSaveException(
	peer : $client->peerUser(
		user_id : -4439110834744982048,
	),
	settings : $client->autoSaveSettings(
		photos : true,
		videos : true,
		video_max_size : -2219713905228677453,
	),
);
```