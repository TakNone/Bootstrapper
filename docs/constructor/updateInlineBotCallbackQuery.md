# updateInlineBotCallbackQuery

**Description** : *This notification is received by bots when a button is pressed*

**Layer** : 211

```tl
updateInlineBotCallbackQuery#691e9052 flags:# query_id:long user_id:long msg_id:InputBotInlineMessageID chat_instance:long data:flags.0?bytes game_short_name:flags.1?string = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>query_id</mark> | [`long`](type/long) | Query ID |
| <mark>user_id</mark> | [`long`](type/long) | ID of the user that pressed the button |
| <mark>msg_id</mark> | [`InputBotInlineMessageID`](type/InputBotInlineMessageID) | ID of the inline message with the button |
| <mark>chat_instance</mark> | [`long`](type/long) | Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games |
| **data** | [`flags.0?bytes`](type/bytes) | Data associated with the callback button. Be aware that a bad client can send arbitrary data in this field |
| **game_short_name** | [`flags.1?string`](type/string) | Short name of a Game to be returned, serves as the unique identifier for the game |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateInlineBotCallbackQuery(
	query_id : -7532172937536417755,
	user_id : 2684142408177785929,
	msg_id : $client->inputBotInlineMessageID(
		dc_id : 20,
		id : 6352491369612094013,
		access_hash : 4155554193680316020,
	),
	chat_instance : 6412052670488304253,
	data : '?묬"LiveProto&???I',
	game_short_name : 'BNrCb6Vp5S9X1PMg',
);
```