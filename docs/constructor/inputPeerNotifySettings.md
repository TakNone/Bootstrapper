# inputPeerNotifySettings

**Description** : *Notification settings*

**Layer** : 218

```tl
inputPeerNotifySettings#cacb6ae2 flags:# show_previews:flags.0?Bool silent:flags.1?Bool mute_until:flags.2?int sound:flags.3?NotificationSound stories_muted:flags.6?Bool stories_hide_sender:flags.7?Bool stories_sound:flags.8?NotificationSound = InputPeerNotifySettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **show_previews** | [`flags.0?Bool`](type/Bool) | If the text of the message shall be displayed in notification |
| **silent** | [`flags.1?Bool`](type/Bool) | Peer was muted? |
| **mute_until** | [`flags.2?int`](type/int) | Date until which all notifications shall be switched off |
| **sound** | [`flags.3?NotificationSound`](type/NotificationSound) | Identifier of an audio file to play for notifications |
| **stories_muted** | [`flags.6?Bool`](type/Bool) | Whether story notifications should be disabled |
| **stories_hide_sender** | [`flags.7?Bool`](type/Bool) | Whether the sender name should be displayed in story notifications |
| **stories_sound** | [`flags.8?NotificationSound`](type/NotificationSound) | Identifier of an audio file to play for story notifications |

---

## Type

[InputPeerNotifySettings](type/InputPeerNotifySettings)

---

## Example

```php
$inputPeerNotifySettings = $client->inputPeerNotifySettings(
	show_previews : false,
	silent : false,
	mute_until : 41,
	sound : $client->notificationSoundDefault(),
	stories_muted : true,
	stories_hide_sender : true,
	stories_sound : $client->notificationSoundDefault(),
);
```