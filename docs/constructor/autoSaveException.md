# autoSaveException

**Description** : *Peer\-specific media autosave settings*

**Layer** : 218

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
		user_id : 6657240486683296982,
	),
	settings : $client->autoSaveSettings(
		photos : true,
		videos : true,
		video_max_size : -7723255392757083497,
	),
);
```