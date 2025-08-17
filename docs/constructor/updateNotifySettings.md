# updateNotifySettings

**Description** : *Changes in notification settings*

**Layer** : 211

```tl
updateNotifySettings#bec268ef peer:NotifyPeer notify_settings:PeerNotifySettings = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`NotifyPeer`](type/NotifyPeer) | Notification source |
| <mark>notify_settings</mark> | [`PeerNotifySettings`](type/PeerNotifySettings) | New notification settings |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateNotifySettings(
	peer : $client->notifyPeer(
		peer : $client->peerUser(
			user_id : -7251674803075418853,
		),
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : $client->boolFalse(),
		silent : $client->boolFalse(),
		mute_until : 18,
		ios_sound : $client->notificationSoundDefault(),
		android_sound : $client->notificationSoundDefault(),
		other_sound : $client->notificationSoundDefault(),
		stories_muted : $client->boolFalse(),
		stories_hide_sender : $client->boolFalse(),
		stories_ios_sound : $client->notificationSoundDefault(),
		stories_android_sound : $client->notificationSoundDefault(),
		stories_other_sound : $client->notificationSoundDefault(),
	),
);
```