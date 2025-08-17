# channels.toggleViewForumAsMessages

**Description** : *Users may also choose to display messages from all topics of a forum as if they were sent to a normal group, using a "View as messages" setting in the local client: this setting only affects the current account, and is synced to other logged in sessions using this method*

**Layer** : 211

```tl
channels.toggleViewForumAsMessages#9738bb15 channel:InputChannel enabled:Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | The forum |
| <mark>enabled</mark> | [`Bool`](type/Bool) | The new value of the view_forum_as_messages flag |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |

---

## Example

```php
$updates = $client->channels->toggleViewForumAsMessages(
	channel : $client->inputChannelEmpty(),
	enabled : $client->boolFalse(),
);
```