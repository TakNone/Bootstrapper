# chat

**Description** : *Info about a group*

**Layer** : 211

```tl
chat#41cbf256 flags:# creator:flags.0?true left:flags.2?true deactivated:flags.5?true call_active:flags.23?true call_not_empty:flags.24?true noforwards:flags.25?true id:long title:string photo:ChatPhoto participants_count:int date:int version:int migrated_to:flags.6?InputChannel admin_rights:flags.14?ChatAdminRights default_banned_rights:flags.18?ChatBannedRights = Chat;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **creator** | [`flags.0?true`](type/true) | Whether the current user is the creator of the group |
| **left** | [`flags.2?true`](type/true) | Whether the current user has left the group |
| **deactivated** | [`flags.5?true`](type/true) | Whether the group was migrated |
| **call_active** | [`flags.23?true`](type/true) | Whether a group call is currently active |
| **call_not_empty** | [`flags.24?true`](type/true) | Whether there's anyone in the group call |
| **noforwards** | [`flags.25?true`](type/true) | Whether this group is protected, thus does not allow forwarding messages from it |
| <mark>id</mark> | [`long`](type/long) | ID of the group, see here » for more info |
| <mark>title</mark> | [`string`](type/string) | Title |
| <mark>photo</mark> | [`ChatPhoto`](type/ChatPhoto) | Chat photo |
| <mark>participants_count</mark> | [`int`](type/int) | Participant count |
| <mark>date</mark> | [`int`](type/int) | Date of creation of the group |
| <mark>version</mark> | [`int`](type/int) | Used in basic groups to reorder updates and make sure that all of them were received |
| **migrated_to** | [`flags.6?InputChannel`](type/InputChannel) | Means this chat was upgraded to a supergroup |
| **admin_rights** | [`flags.14?ChatAdminRights`](type/ChatAdminRights) | Admin rights of the user in the group |
| **default_banned_rights** | [`flags.18?ChatBannedRights`](type/ChatBannedRights) | Default banned rights of all users in the group |

---

## Type

[Chat](type/Chat)

---

## Example

```php
$chat = $client->chat(
	creator : true,
	left : true,
	deactivated : true,
	call_active : true,
	call_not_empty : true,
	noforwards : true,
	id : 1093074524139653230,
	title : 'HupQPEOl8mqSNIox',
	photo : $client->chatPhotoEmpty(),
	participants_count : 81,
	date : 63,
	version : 20,
	migrated_to : $client->inputChannelEmpty(),
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
	default_banned_rights : $client->chatBannedRights(
		view_messages : true,
		send_messages : true,
		send_media : true,
		send_stickers : true,
		send_gifs : true,
		send_games : true,
		send_inline : true,
		embed_links : true,
		send_polls : true,
		change_info : true,
		invite_users : true,
		pin_messages : true,
		manage_topics : true,
		send_photos : true,
		send_videos : true,
		send_roundvideos : true,
		send_audios : true,
		send_voices : true,
		send_docs : true,
		send_plain : true,
		until_date : 26,
	),
);
```