# connectedBot

**Description** : *Contains info about a connected business bot &raquo;*

**Layer** : 218

```tl
connectedBot#cd64636c flags:# bot_id:long recipients:BusinessBotRecipients rights:BusinessBotRights = ConnectedBot;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>bot_id</mark> | [`long`](type/long) | ID of the connected bot |
| <mark>recipients</mark> | [`BusinessBotRecipients`](type/BusinessBotRecipients) | Specifies the private chats that a connected business bot » may receive messages and interact with |
| <mark>rights</mark> | [`BusinessBotRights`](type/BusinessBotRights) | Business bot rights |

---

## Type

[ConnectedBot](type/ConnectedBot)

---

## Example

```php
$connectedBot = $client->connectedBot(
	bot_id : 1727436808736162825,
	recipients : $client->businessBotRecipients(
		existing_chats : true,
		new_chats : true,
		contacts : true,
		non_contacts : true,
		exclude_selected : true,
		users : array(2880840485646122112),
		exclude_users : array(2961295687069613534),
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
);
```