# dialogCommunity

**Layer** : 233

```tl
dialogCommunity#f78a0973 flags:# pinned:flags.2?true community_id:long notify_settings:PeerNotifySettings = Dialog;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **pinned** | [`flags.2?true`](type/true) | NOTHING |
| <mark>community_id</mark> | [`long`](type/long) | NOTHING |
| <mark>notify_settings</mark> | [`PeerNotifySettings`](type/PeerNotifySettings) | NOTHING |

---

## Type

[Dialog](type/Dialog)

---

## Example

```php
$dialog = $client->dialogCommunity(
	pinned : true,
	community_id : -8694113619279591858,
	notify_settings : $client->peerNotifySettings(
		show_previews : true,
		silent : false,
		mute_until : 43,
		ios_sound : $client->notificationSoundDefault(),
		android_sound : $client->notificationSoundDefault(),
		other_sound : $client->notificationSoundDefault(),
		stories_muted : true,
		stories_hide_sender : true,
		stories_ios_sound : $client->notificationSoundDefault(),
		stories_android_sound : $client->notificationSoundDefault(),
		stories_other_sound : $client->notificationSoundDefault(),
	),
);
```