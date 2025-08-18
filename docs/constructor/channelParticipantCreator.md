# channelParticipantCreator

**Description** : *Channel/supergroup creator*

**Layer** : 211

```tl
channelParticipantCreator#2fe601d3 flags:# user_id:long admin_rights:ChatAdminRights rank:flags.0?string = ChannelParticipant;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>user_id</mark> | [`long`](type/long) | User ID |
| <mark>admin_rights</mark> | [`ChatAdminRights`](type/ChatAdminRights) | Creator admin rights |
| **rank** | [`flags.0?string`](type/string) | The role (rank) of the group creator in the group: just an arbitrary string, admin by default |

---

## Type

[ChannelParticipant](type/ChannelParticipant)

---

## Example

```php
$channelParticipant = $client->channelParticipantCreator(
	user_id : -1591286496659080248,
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
	rank : '9brhIGg1RSvl0oMd',
);
```