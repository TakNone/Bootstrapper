# messages.editChatCreator

**Description** : *Transfer the ownership of a basic group, supergroup or channel to another user, see here &raquo; for the full flow*

**Layer** : 229

```tl
messages.editChatCreator#f743b857 peer:InputPeer user_id:InputUser password:InputCheckPasswordSRP = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Owned group/supergroup/channel |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | ID of the new owner |
| <mark>password</mark> | [`InputCheckPasswordSRP`](type/InputCheckPasswordSRP) | The current account's 2FA password |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNELS_ADMIN_PUBLIC_TOO_MUCH** | `400` | You're admin of too many public channels, make some channels private to change the username of this channel |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_MEMBER_ADD_FAILED** | `400` | Could not add participants |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **PASSWORD_HASH_INVALID** | `400` | The provided password hash is invalid |
| **PASSWORD_MISSING** | `400` | You must enable 2FA before executing this operation |
| **PASSWORD_TOO_FRESH_%d** | `400` | The password was modified less than 24 hours ago, try again in %d seconds |
| **SESSION_TOO_FRESH_%d** | `400` | This session was created less than 24 hours ago, try again in %d seconds |
| **SRP_ID_INVALID** | `400` | Invalid SRP ID provided |
| **USERS_TOO_MUCH** | `400` | The maximum number of users has been exceeded (to create a chat, for example) |
| **USER_CHANNELS_TOO_MUCH** | `403` | One of the users you tried to add is already in too many channels/supergroups |
| **USER_NOT_MUTUAL_CONTACT** | `400` | The provided user is not a mutual contact |
| **USER_PRIVACY_RESTRICTED** | `403` | The user's privacy settings do not allow you to do this |

---

## Example

```php
$updates = $client->messages->editChatCreator(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	user_id : $client->get_input_user(user : '@TakNone'),
	password : $client->inputCheckPasswordEmpty(),
);
```