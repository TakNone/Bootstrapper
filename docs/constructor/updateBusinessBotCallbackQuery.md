# updateBusinessBotCallbackQuery

**Description** : *A callback button sent via a business connection was pressed, and the button data was sent to the bot that created the button*

**Layer** : 211

```tl
updateBusinessBotCallbackQuery#1ea2fda7 flags:# query_id:long user_id:long connection_id:string message:Message reply_to_message:flags.2?Message chat_instance:long data:flags.0?bytes = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	query_id : 1156538284554809659,
	user_id : 2521433912114586679,
	connection_id : 'QDis3ufBgSCjd8FN',
	message : $client->messageEmpty(
		id : 22,
		peer_id : $client->peerUser(
			user_id : -7979789614112827816,
		),
	),
	reply_to_message : $client->messageEmpty(
		id : 84,
		peer_id : $client->peerUser(
			user_id : -5389135966631167553,
		),
	),
	chat_instance : 4018259585792833370,
	data : '????LiveProto?%??',
);
```