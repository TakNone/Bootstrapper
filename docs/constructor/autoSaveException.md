# autoSaveException

**Description** : *Peer\-specific media autosave settings*

**Layer** : 227

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
		user_id : 305119703231887885,
	),
	settings : $client->autoSaveSettings(
		photos : true,
		videos : true,
		video_max_size : 1287808198808923825,
	),
);
```