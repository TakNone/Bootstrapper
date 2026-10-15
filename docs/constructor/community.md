# community

**Layer** : 229

```tl
community#65efe954 flags:# creator:flags.0?true left:flags.2?true min:flags.12?true flags2:# collapsed_in_dialogs:flags2.20?true id:long access_hash:flags.13?long title:string photo:ChatPhoto date:int admin_rights:flags.14?ChatAdminRights default_banned_rights:flags.18?ChatBannedRights = Chat;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **creator** | [`flags.0?true`](type/true) | NOTHING |
| **left** | [`flags.2?true`](type/true) | NOTHING |
| **min** | [`flags.12?true`](type/true) | NOTHING |
| <del style = 'opacity : 0.4'>flags2</del> | [`#`](type/#) | NOTHING |
| **collapsed_in_dialogs** | [`flags2.20?true`](type/true) | NOTHING |
| <mark>id</mark> | [`long`](type/long) | NOTHING |
| **access_hash** | [`flags.13?long`](type/long) | NOTHING |
| <mark>title</mark> | [`string`](type/string) | NOTHING |
| <mark>photo</mark> | [`ChatPhoto`](type/ChatPhoto) | NOTHING |
| <mark>date</mark> | [`int`](type/int) | NOTHING |
| **admin_rights** | [`flags.14?ChatAdminRights`](type/ChatAdminRights) | NOTHING |
| **default_banned_rights** | [`flags.18?ChatBannedRights`](type/ChatBannedRights) | NOTHING |

---

## Type

[Chat](type/Chat)

---

## Example

```php
$chat = $client->community(
	creator : true,
	left : true,
	min : true,
	collapsed_in_dialogs : true,
	id : -8954553718794043845,
	access_hash : 5515509725299602571,
	title : 'AlVK9tcDzMCP8WEv',
	photo : $client->chatPhotoEmpty(),
	date : 32,
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
		manage_ranks : true,
		manage_linked_peers : true,
		manage_welcome_messages : true,
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
		edit_rank : true,
		send_reactions : true,
		manage_linked_peers : true,
		until_date : 45,
	),
);
```