# updateBotEditBusinessMessage

**Description** : *A message was edited in a connected business chat »*

**Layer** : 211

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
	connection_id : 'ZpYEN16UTBLe2RJw',
	message : $client->messageEmpty(
		id : 97,
		peer_id : $client->peerUser(
			user_id : -8340820766194212268,
		),
	),
	reply_to_message : $client->messageEmpty(
		id : 36,
		peer_id : $client->peerUser(
			user_id : -7150395307543315838,
		),
	),
	qts : 78,
);
```