# botBusinessConnection

**Description** : *Contains info about a bot business connection*

**Layer** : 218

```tl
botBusinessConnection#8f34b2f5 flags:# disabled:flags.1?true connection_id:string user_id:long dc_id:int date:int rights:flags.2?BusinessBotRights = BotBusinessConnection;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **disabled** | [`flags.1?true`](type/true) | Whether this business connection is currently disabled |
| <mark>connection_id</mark> | [`string`](type/string) | Business connection ID, used to identify messages coming from the connection and to reply to them as specified here » |
| <mark>user_id</mark> | [`long`](type/long) | ID of the user that the bot is connected to via this connection |
| <mark>dc_id</mark> | [`int`](type/int) | ID of the datacenter where to send queries wrapped in a invokeWithBusinessConnection as specified here » |
| <mark>date</mark> | [`int`](type/int) | When was the connection created |
| **rights** | [`flags.2?BusinessBotRights`](type/BusinessBotRights) | Business bot rights |

---

## Type

[BotBusinessConnection](type/BotBusinessConnection)

---

## Example

```php
$botBusinessConnection = $client->botBusinessConnection(
	disabled : true,
	connection_id : 'InLuXEUpfHNZ54Qa',
	user_id : -6877260914335660005,
	dc_id : 24,
	date : 27,
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