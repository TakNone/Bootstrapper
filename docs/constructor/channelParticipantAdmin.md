# channelParticipantAdmin

**Description** : *Admin*

**Layer** : 214

```tl
channelParticipantAdmin#34c3bb53 flags:# can_edit:flags.0?true self:flags.1?true user_id:long inviter_id:flags.1?long promoted_by:long date:int admin_rights:ChatAdminRights rank:flags.2?string = ChannelParticipant;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **can_edit** | [`flags.0?true`](type/true) | Can this admin promote other admins with the same permissions? |
| **self** | [`flags.1?true`](type/true) | Is this the current user |
| <mark>user_id</mark> | [`long`](type/long) | Admin user ID |
| **inviter_id** | [`flags.1?long`](type/long) | User that invited the admin to the channel/group |
| <mark>promoted_by</mark> | [`long`](type/long) | User that promoted the user to admin |
| <mark>date</mark> | [`int`](type/int) | When did the user join |
| <mark>admin_rights</mark> | [`ChatAdminRights`](type/ChatAdminRights) | Admin rights |
| **rank** | [`flags.2?string`](type/string) | The role (rank) of the admin in the group: just an arbitrary string, admin by default |

---

## Type

[ChannelParticipant](type/ChannelParticipant)

---

## Example

```php
$channelParticipant = $client->channelParticipantAdmin(
	can_edit : true,
	self : true,
	user_id : 5241458551910116829,
	inviter_id : 6372721834030676767,
	promoted_by : -9180458588698104289,
	date : 52,
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
	rank : '3b2wcUpHN5xJqeCi',
);
```