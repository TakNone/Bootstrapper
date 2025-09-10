# peerNotifySettings

**Description** : *Notification settings*

**Layer** : 214

```tl
peerNotifySettings#99622c0c flags:# show_previews:flags.0?Bool silent:flags.1?Bool mute_until:flags.2?int ios_sound:flags.3?NotificationSound android_sound:flags.4?NotificationSound other_sound:flags.5?NotificationSound stories_muted:flags.6?Bool stories_hide_sender:flags.7?Bool stories_ios_sound:flags.8?NotificationSound stories_android_sound:flags.9?NotificationSound stories_other_sound:flags.10?NotificationSound = PeerNotifySettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **show_previews** | [`flags.0?Bool`](type/Bool) | (Ternary value) If set, indicates whether or not to display previews of messages in notifications; otherwise the default behavior should be used |
| **silent** | [`flags.1?Bool`](type/Bool) | (Ternary value) If set, indicates whether to mute or unmute the peer; otherwise the default behavior should be used |
| **mute_until** | [`flags.2?int`](type/int) | Mute all notifications until this date |
| **ios_sound** | [`flags.3?NotificationSound`](type/NotificationSound) | Notification sound for the official iOS application |
| **android_sound** | [`flags.4?NotificationSound`](type/NotificationSound) | Notification sound for the official android application |
| **other_sound** | [`flags.5?NotificationSound`](type/NotificationSound) | Notification sound for other applications |
| **stories_muted** | [`flags.6?Bool`](type/Bool) | Whether story notifications should be disabled |
| **stories_hide_sender** | [`flags.7?Bool`](type/Bool) | Whether the sender name should be displayed in story notifications |
| **stories_ios_sound** | [`flags.8?NotificationSound`](type/NotificationSound) | Sound for story notifications on the official iOS application |
| **stories_android_sound** | [`flags.9?NotificationSound`](type/NotificationSound) | Sound for story notifications on the official Android application |
| **stories_other_sound** | [`flags.10?NotificationSound`](type/NotificationSound) | Sound for story notifications on other applications |

---

## Type

[PeerNotifySettings](type/PeerNotifySettings)

---

## Example

```php
$peerNotifySettings = $client->peerNotifySettings(
	show_previews : true,
	silent : false,
	mute_until : 15,
	ios_sound : $client->notificationSoundDefault(),
	android_sound : $client->notificationSoundDefault(),
	other_sound : $client->notificationSoundDefault(),
	stories_muted : true,
	stories_hide_sender : false,
	stories_ios_sound : $client->notificationSoundDefault(),
	stories_android_sound : $client->notificationSoundDefault(),
	stories_other_sound : $client->notificationSoundDefault(),
);
```