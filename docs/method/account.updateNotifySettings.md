# account.updateNotifySettings

**Description** : *Edits notification settings from a given user/group, from all users/all groups*

**Layer** : 214

```tl
account.updateNotifySettings#84be5b93 peer:InputNotifyPeer settings:InputPeerNotifySettings = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputNotifyPeer`](type/InputNotifyPeer) | Notification source |
| <mark>settings</mark> | [`InputPeerNotifySettings`](type/InputPeerNotifySettings) | Notification settings |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **SETTINGS_INVALID** | `400` | Invalid settings were provided |

---

## Example

```php
$bool = $client->account->updateNotifySettings(
	peer : $client->inputNotifyPeer(
		peer : $client->inputPeerEmpty(),
	),
	settings : $client->inputPeerNotifySettings(
		show_previews : false,
		silent : true,
		mute_until : 66,
		sound : $client->notificationSoundDefault(),
		stories_muted : true,
		stories_hide_sender : false,
		stories_sound : $client->notificationSoundDefault(),
	),
);
```