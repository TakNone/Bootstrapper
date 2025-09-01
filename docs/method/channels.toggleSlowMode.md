# channels.toggleSlowMode

**Description** : *Toggle supergroup slow mode: if enabled, users will only be able to send one message every seconds seconds*

**Layer** : 214

```tl
channels.toggleSlowMode#edd49ef0 channel:InputChannel seconds:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | The supergroup |
| <mark>seconds</mark> | [`int`](type/int) | Users will only be able to send one message every seconds seconds, 0 to disable the limitation |

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
| **SECONDS_INVALID** | `400` | Invalid duration provided |

---

## Example

```php
$updates = $client->channels->toggleSlowMode(
	channel : $client->inputChannelEmpty(),
	seconds : 95,
);
```