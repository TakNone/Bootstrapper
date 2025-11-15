# channels.editCreator

**Description** : *Transfer channel ownership*

**Layer** : 218

```tl
channels.editCreator#8f38cd1f channel:InputChannel user_id:InputUser password:InputCheckPasswordSRP = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Channel |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | New channel owner |
| <mark>password</mark> | [`InputCheckPasswordSRP`](type/InputCheckPasswordSRP) | 2FA password of account |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNELS_ADMIN_PUBLIC_TOO_MUCH** | `400` | You're admin of too many public channels, make some channels private to change the username of this channel |
| **CHANNEL_MONOFORUM_UNSUPPORTED** | `400` | Monoforums do not support this feature |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_MEMBER_ADD_FAILED** | `400` | Could not add participants |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **PASSWORD_HASH_INVALID** | `400` | The provided password hash is invalid |
| **PASSWORD_MISSING** | `400` | You must enable 2FA before executing this operation |
| **PASSWORD_TOO_FRESH_%d** | `400` | The password was modified less than 24 hours ago, try again in %d seconds |
| **SESSION_TOO_FRESH_%d** | `400` | This session was created less than 24 hours ago, try again in %d seconds |
| **SRP_ID_INVALID** | `400` | Invalid SRP ID provided |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |
| **USER_PRIVACY_RESTRICTED** | `403` | The user's privacy settings do not allow you to do this |

---

## Example

```php
$updates = $client->channels->editCreator(
	channel : $client->get_input_channel(peer : '@LiveProto'),
	user_id : $client->get_input_user(peer : '@TakNone'),
	password : $client->inputCheckPasswordEmpty(),
);
```