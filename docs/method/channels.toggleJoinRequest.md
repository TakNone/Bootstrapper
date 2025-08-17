# channels.toggleJoinRequest

**Description** : *Set whether all users should request admin approval to join the group »*

**Layer** : 211

```tl
channels.toggleJoinRequest#4c2985b6 channel:InputChannel enabled:Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Group |
| <mark>enabled</mark> | [`Bool`](type/Bool) | Toggle |

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
| **CHAT_PUBLIC_REQUIRED** | `400` | You can only enable join requests in public groups |

---

## Example

```php
$updates = $client->channels->toggleJoinRequest(
	channel : $client->inputChannelEmpty(),
	enabled : $client->boolFalse(),
);
```