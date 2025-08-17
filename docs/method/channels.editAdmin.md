# channels.editAdmin

**Description** : *Modify the admin rights of a user in a supergroup/channel*

**Layer** : 211

```tl
channels.editAdmin#d33c8902 channel:InputChannel user_id:InputUser admin_rights:ChatAdminRights rank:string = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | The supergroup/channel |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | The ID of the user whose admin rights should be modified |
| <mark>admin_rights</mark> | [`ChatAdminRights`](type/ChatAdminRights) | The admin rights |
| <mark>rank</mark> | [`string`](type/string) | Indicates the role (rank) of the admin in the group: just an arbitrary string |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ADMINS_TOO_MUCH** | `400` | There are too many admins |
| **ADMIN_RANK_EMOJI_NOT_ALLOWED** | `400` | An admin rank cannot contain emojis |
| **ADMIN_RANK_INVALID** | `400` | The specified admin rank is invalid |
| **BOTS_TOO_MUCH** | `400` | There are too many bots in this chat/channel |
| **BOT_CHANNELS_NA** | `400` | Bots can't edit admin privileges |
| **BOT_GROUPS_BLOCKED** | `400` | This bot can't be added to groups |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_INVITE_REQUIRED** | `403` | You do not have the rights to do this |
| **CHAT_ADMIN_REQUIRED** | `403` | You must be an admin in this chat to do this |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **FRESH_CHANGE_ADMINS_FORBIDDEN** | `406` | You were just elected admin, you can't add or modify other admins yet |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **RIGHT_FORBIDDEN** | `403` | Your admin rights do not allow you to do this |
| **USERS_TOO_MUCH** | `400` | The maximum number of users has been exceeded (to create a chat, for example) |
| **USER_BLOCKED** | `400` | User blocked |
| **USER_CHANNELS_TOO_MUCH** | `403` | One of the users you tried to add is already in too many channels/supergroups |
| **USER_CREATOR** | `400` | For channels.editAdmin: you've tried to edit the admin rights of the owner, but you're not the owner; for channels.leaveChannel: you can't leave this channel, because you're its creator |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |
| **USER_NOT_MUTUAL_CONTACT** | `403` | The provided user is not a mutual contact |
| **USER_PRIVACY_RESTRICTED** | `403` | The user's privacy settings do not allow you to do this |
| **USER_RESTRICTED** | `403` | You're spamreported, you can't create channels or chats |

---

## Example

```php
$updates = $client->channels->editAdmin(
	channel : $client->inputChannelEmpty(),
	user_id : $client->inputUserEmpty(),
	admin_rights : $client->chatAdminRights(
		change_info : true,
		post_messages : true,
		edit_messages : true,
		delete_messages : true,
		ban_users : true,
		invite_users : true,
		pin_messages : true,
		add_admins : true,
		anonymous : true,
		manage_call : true,
		other : true,
		manage_topics : true,
		post_stories : true,
		edit_stories : true,
		delete_stories : true,
		manage_direct_messages : true,
	),
	rank : 'NO9rGELcsxyJiBlV',
);
```