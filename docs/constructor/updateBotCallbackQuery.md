# updateBotCallbackQuery

**Description** : *A callback button was pressed, and the button data was sent to the bot that created the button*

**Layer** : 211

```tl
updateBotCallbackQuery#b9cfc48d flags:# query_id:long user_id:long peer:Peer msg_id:int chat_instance:long data:flags.0?bytes game_short_name:flags.1?string = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>query_id</mark> | [`long`](type/long) | Query ID |
| <mark>user_id</mark> | [`long`](type/long) | ID of the user that pressed the button |
| <mark>peer</mark> | [`Peer`](type/Peer) | Chat where the inline keyboard was sent |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID |
| <mark>chat_instance</mark> | [`long`](type/long) | Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games |
| **data** | [`flags.0?bytes`](type/bytes) | Callback data |
| **game_short_name** | [`flags.1?string`](type/string) | Short name of a Game to be returned, serves as the unique identifier for the game |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotCallbackQuery(
	query_id : -7899323585903704811,
	user_id : 4383751846486489278,
	peer : $client->peerUser(
		user_id : 6933659295569424647,
	),
	msg_id : 85,
	chat_instance : -6745680108568482069,
	data : '[~???LiveProto?(?n',
	game_short_name : 'NTeRA72dzHnotXiL',
);
```