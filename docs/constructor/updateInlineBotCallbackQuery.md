# updateInlineBotCallbackQuery

**Description** : *This notification is received by bots when a button is pressed*

**Layer** : 216

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
	query_id : 436848626184066919,
	user_id : 2840571300283909912,
	msg_id : $client->inputBotInlineMessageID(
		dc_id : 55,
		id : -4349177085166707414,
		access_hash : -940027465234278852,
	),
	chat_instance : 4677463160022900004,
	data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	game_short_name : '4ihmIHu1wsNCyzvG',
);
```