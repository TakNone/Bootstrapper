# requestPeerTypeChat

**Description** : *Choose a chat or supergroup*

**Layer** : 218

```tl
requestPeerTypeChat#c9f06e1b flags:# creator:flags.0?true user_admin_rights:flags.1?ChatAdminRights bot_participant:flags.5?true bot_admin_rights:flags.2?ChatAdminRights has_username:flags.3?Bool forum:flags.4?Bool = RequestPeerType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **creator** | [`flags.0?true`](type/true) | Whether to allow only choosing chats or supergroups that were created by the current user |
| **user_admin_rights** | [`flags.1?ChatAdminRights`](type/ChatAdminRights) | If specified, allows only choosing chats or supergroups where the current user is an admin with at least the specified admin rights |
| **bot_participant** | [`flags.5?true`](type/true) | Whether to allow only choosing chats or supergroups where the bot is a participant |
| **bot_admin_rights** | [`flags.2?ChatAdminRights`](type/ChatAdminRights) | If specified, allows only choosing chats or supergroups where the bot is an admin with at least the specified admin rights |
| **has_username** | [`flags.3?Bool`](type/Bool) | If specified, allows only choosing channels with or without a username, according to the value of Bool |
| **forum** | [`flags.4?Bool`](type/Bool) | If specified, allows only choosing chats or supergroups that are or aren't forums, according to the value of Bool |

---

## Type

[RequestPeerType](type/RequestPeerType)

---

## Example

```php
$requestPeerType = $client->requestPeerTypeChat(
	creator : true,
	user_admin_rights : $client->chatAdminRights(
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
	bot_participant : true,
	bot_admin_rights : $client->chatAdminRights(
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
	has_username : true,
	forum : false,
);
```