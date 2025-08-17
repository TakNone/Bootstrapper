# channels.toggleSignatures

**Description** : *Enable/disable message signatures in channels*

**Layer** : 211

```tl
channels.toggleSignatures#418d549c flags:# signatures_enabled:flags.0?true profiles_enabled:flags.1?true channel:InputChannel = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **signatures_enabled** | [`flags.0?true`](type/true) | If set, enables message signatures |
| **profiles_enabled** | [`flags.1?true`](type/true) | If set, messages from channel admins will link to their profiles, just like for group messages: can only be set if the signatures_enabled flag is set |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Channel |

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

---

## Example

```php
$updates = $client->channels->toggleSignatures(
	signatures_enabled : true,
	profiles_enabled : true,
	channel : $client->inputChannelEmpty(),
);
```