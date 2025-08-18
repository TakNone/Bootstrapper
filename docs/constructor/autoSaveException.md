# autoSaveException

**Description** : *Peer\-specific media autosave settings*

**Layer** : 211

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
		user_id : -3330758821387826593,
	),
	settings : $client->autoSaveSettings(
		photos : true,
		videos : true,
		video_max_size : -21529522291050957,
	),
);
```