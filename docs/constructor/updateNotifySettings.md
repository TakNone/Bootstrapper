# updateNotifySettings

**Description** : *Changes in notification settings*

**Layer** : 225

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
			user_id : 7213518003037331444,
		),
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : true,
		silent : false,
		mute_until : 65,
		ios_sound : $client->notificationSoundDefault(),
		android_sound : $client->notificationSoundDefault(),
		other_sound : $client->notificationSoundDefault(),
		stories_muted : false,
		stories_hide_sender : true,
		stories_ios_sound : $client->notificationSoundDefault(),
		stories_android_sound : $client->notificationSoundDefault(),
		stories_other_sound : $client->notificationSoundDefault(),
	),
);
```