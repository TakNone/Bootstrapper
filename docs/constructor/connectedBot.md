# connectedBot

**Description** : *Contains info about a connected business bot &raquo;*

**Layer** : 227

```tl
connectedBot#33ed001 flags:# bot_id:long recipients:BusinessBotRecipients rights:BusinessBotRights device:flags.0?string date:flags.1?int location:flags.2?string = ConnectedBot;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>bot_id</mark> | [`long`](type/long) | ID of the connected bot |
| <mark>recipients</mark> | [`BusinessBotRecipients`](type/BusinessBotRecipients) | Specifies the private chats that a connected business bot » may receive messages and interact with |
| <mark>rights</mark> | [`BusinessBotRights`](type/BusinessBotRights) | Business bot rights |
| **device** | [`flags.0?string`](type/string) | NOTHING |
| **date** | [`flags.1?int`](type/int) | NOTHING |
| **location** | [`flags.2?string`](type/string) | NOTHING |

---

## Type

[ConnectedBot](type/ConnectedBot)

---

## Example

```php
$connectedBot = $client->connectedBot(
	bot_id : 3899425452804317847,
	recipients : $client->businessBotRecipients(
		existing_chats : true,
		new_chats : true,
		contacts : true,
		non_contacts : true,
		exclude_selected : true,
		users : array(-7879063442191054598),
		exclude_users : array(-4482242831956719498),
	),
	rights : $client->businessBotRights(
		reply : true,
		read_messages : true,
		delete_sent_messages : true,
		delete_received_messages : true,
		edit_name : true,
		edit_bio : true,
		edit_profile_photo : true,
		edit_username : true,
		view_gifts : true,
		sell_gifts : true,
		change_gift_settings : true,
		transfer_and_upgrade_gifts : true,
		transfer_stars : true,
		manage_stories : true,
	),
	device : 'nwcStkhy5usZ8zLH',
	date : 37,
	location : 'eAdbPW6rC4G893kq',
);
```