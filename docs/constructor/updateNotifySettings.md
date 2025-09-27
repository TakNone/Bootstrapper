# updateNotifySettings

**Description** : *Changes in notification settings*

**Layer** : 214

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
			user_id : 1681541910400554163,
		),
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : true,
		silent : true,
		mute_until : 67,
		ios_sound : $client->notificationSoundDefault(),
		android_sound : $client->notificationSoundDefault(),
		other_sound : $client->notificationSoundDefault(),
		stories_muted : false,
		stories_hide_sender : false,
		stories_ios_sound : $client->notificationSoundDefault(),
		stories_android_sound : $client->notificationSoundDefault(),
		stories_other_sound : $client->notificationSoundDefault(),
	),
);
```