# updateBotEditBusinessMessage

**Description** : *A message was edited in a connected business chat &raquo;*

**Layer** : 222

```tl
updateBotEditBusinessMessage#7df587c flags:# connection_id:string message:Message reply_to_message:flags.0?Message qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	connection_id : 'kfAwKWOVmzJqIoCH',
	message : $client->messageEmpty(
		id : 57,
		peer_id : $client->peerUser(
			user_id : -9041427546267453792,
		),
	),
	reply_to_message : $client->messageEmpty(
		id : 92,
		peer_id : $client->peerUser(
			user_id : -4602216021535414800,
		),
	),
	qts : 61,
);
```