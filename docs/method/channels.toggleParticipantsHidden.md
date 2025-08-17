# channels.toggleParticipantsHidden

**Description** : *Hide or display the participants list in a supergroup*

**Layer** : 211

```tl
channels.toggleParticipantsHidden#6a6e7854 channel:InputChannel enabled:Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Supergroup ID |
| <mark>enabled</mark> | [`Bool`](type/Bool) | If true, will hide the participants list; otherwise will unhide it |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |
| **PARTICIPANTS_TOO_FEW** | `400` | Not enough participants |

---

## Example

```php
$updates = $client->channels->toggleParticipantsHidden(
	channel : $client->inputChannelEmpty(),
	enabled : $client->boolFalse(),
);
```