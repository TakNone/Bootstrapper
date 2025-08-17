# account.setReactionsNotifySettings

**Description** : *Change the reaction notification settings »*

**Layer** : 211

```tl
account.setReactionsNotifySettings#316ce548 settings:ReactionsNotifySettings = ReactionsNotifySettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>settings</mark> | [`ReactionsNotifySettings`](type/ReactionsNotifySettings) | New reaction notification settings |

---

## Result

[ReactionsNotifySettings](type/ReactionsNotifySettings)

---

## Example

```php
$reactionsNotifySettings = $client->account->setReactionsNotifySettings(
	settings : $client->reactionsNotifySettings(
		messages_notify_from : $client->reactionNotificationsFromContacts(),
		stories_notify_from : $client->reactionNotificationsFromContacts(),
		sound : $client->notificationSoundDefault(),
		show_previews : $client->boolFalse(),
	),
);
```