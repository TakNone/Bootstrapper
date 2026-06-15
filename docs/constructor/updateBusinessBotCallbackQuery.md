# updateBusinessBotCallbackQuery

**Description** : *A callback button sent via a business connection was pressed, and the button data was sent to the bot that created the button*

**Layer** : 227

```tl
updateBusinessBotCallbackQuery#1ea2fda7 flags:# query_id:long user_id:long connection_id:string message:Message reply_to_message:flags.2?Message chat_instance:long data:flags.0?bytes = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>query_id</mark> | [`long`](type/long) | Query ID |
| <mark>user_id</mark> | [`long`](type/long) | ID of the user that pressed the button |
| <mark>connection_id</mark> | [`string`](type/string) | Business connection ID |
| <mark>message</mark> | [`Message`](type/Message) | Message that contains the keyboard (also contains info about the chat where the message was sent) |
| **reply_to_message** | [`flags.2?Message`](type/Message) | The message that message is replying to |
| <mark>chat_instance</mark> | [`long`](type/long) | Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games |
| **data** | [`flags.0?bytes`](type/bytes) | Callback data |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBusinessBotCallbackQuery(
	query_id : 904593679826100640,
	user_id : -179410656791645964,
	connection_id : 'Z2RTnjMlW0qIHBtU',
	message : $client->messageEmpty(
		id : 51,
		peer_id : $client->peerUser(
			user_id : -793840872265796568,
		),
	),
	reply_to_message : $client->messageEmpty(
		id : 30,
		peer_id : $client->peerUser(
			user_id : -6961139837609970780,
		),
	),
	chat_instance : -3189510402647530705,
	data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```