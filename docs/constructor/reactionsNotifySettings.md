# reactionsNotifySettings

**Description** : *Reaction notification settings, see here » for more info*

**Layer** : 211

```tl
reactionsNotifySettings#56e34970 flags:# messages_notify_from:flags.0?ReactionNotificationsFrom stories_notify_from:flags.1?ReactionNotificationsFrom sound:NotificationSound show_previews:Bool = ReactionsNotifySettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **messages_notify_from** | [`flags.0?ReactionNotificationsFrom`](type/ReactionNotificationsFrom) | Message reaction notification settings, if not set completely disables notifications/updates about message reactions |
| **stories_notify_from** | [`flags.1?ReactionNotificationsFrom`](type/ReactionNotificationsFrom) | Story reaction notification settings, if not set completely disables notifications/updates about reactions to stories |
| <mark>sound</mark> | [`NotificationSound`](type/NotificationSound) | Notification sound for reactions » |
| <mark>show_previews</mark> | [`Bool`](type/Bool) | If false, push notifications » about message/story reactions will only be of type REACT_HIDDEN/REACT_STORY_HIDDEN, without any information about the reacted-to story or the reaction itself |

---

## Type

[ReactionsNotifySettings](type/ReactionsNotifySettings)

---

## Example

```php
$reactionsNotifySettings = $client->reactionsNotifySettings(
	messages_notify_from : $client->reactionNotificationsFromContacts(),
	stories_notify_from : $client->reactionNotificationsFromContacts(),
	sound : $client->notificationSoundDefault(),
	show_previews : $client->boolFalse(),
);
```