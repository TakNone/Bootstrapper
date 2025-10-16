# updateBotEditBusinessMessage

**Description** : *A message was edited in a connected business chat &raquo;*

**Layer** : 216

```tl
updateBotEditBusinessMessage#7df587c flags:# connection_id:string message:Message reply_to_message:flags.0?Message qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>connection_id</mark> | [`string`](type/string) | Business connection ID |
| <mark>message</mark> | [`Message`](type/Message) | New message |
| **reply_to_message** | [`flags.0?Message`](type/Message) | The message that message is replying to |
| <mark>qts</mark> | [`int`](type/int) | New qts value, see updates » for more info |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotEditBusinessMessage(
	connection_id : '9AuvxH3qStadPGyn',
	message : $client->messageEmpty(
		id : 58,
		peer_id : $client->peerUser(
			user_id : 6653120482893625152,
		),
	),
	reply_to_message : $client->messageEmpty(
		id : 33,
		peer_id : $client->peerUser(
			user_id : -3212634835387917445,
		),
	),
	qts : 1,
);
```