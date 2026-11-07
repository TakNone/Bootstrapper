# channelParticipantCreator

**Description** : *Channel/supergroup creator*

**Layer** : 233

```tl
channelParticipantCreator#2fe601d3 flags:# user_id:long admin_rights:ChatAdminRights rank:flags.0?string = ChannelParticipant;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>user_id</mark> | [`long`](type/long) | User ID |
| <mark>admin_rights</mark> | [`ChatAdminRights`](type/ChatAdminRights) | Creator admin rights |
| **rank** | [`flags.0?string`](type/string) | The participant's tag », defaults to "Owner" if not set |

---

## Type

[ChannelParticipant](type/ChannelParticipant)

---

## Example

```php
$channelParticipant = $client->channelParticipantCreator(
	user_id : -6843265057836633651,
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
	rank : 'QeuotWVzyIr1pMU5',
);
```