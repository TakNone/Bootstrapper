# updateBotCallbackQuery

**Description** : *A callback button was pressed, and the button data was sent to the bot that created the button*

**Layer** : 218

```tl
updateBotCallbackQuery#b9cfc48d flags:# query_id:long user_id:long peer:Peer msg_id:int chat_instance:long data:flags.0?bytes game_short_name:flags.1?string = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	query_id : 37219843851981782,
	user_id : 8648762865106534984,
	peer : $client->peerUser(
		user_id : 4289204625554819551,
	),
	msg_id : 17,
	chat_instance : -6919435362153286746,
	data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	game_short_name : 'TbDR0Ci16UgVJEhF',
);
```