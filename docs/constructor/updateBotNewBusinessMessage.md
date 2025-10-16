# updateBotNewBusinessMessage

**Description** : *A message was received via a connected business chat &raquo;*

**Layer** : 216

```tl
updateBotNewBusinessMessage#9ddb347c flags:# connection_id:string message:Message reply_to_message:flags.0?Message qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>connection_id</mark> | [`string`](type/string) | Connection ID |
| <mark>message</mark> | [`Message`](type/Message) | New message |
| **reply_to_message** | [`flags.0?Message`](type/Message) | The message that message is replying to |
| <mark>qts</mark> | [`int`](type/int) | New qts value, see updates » for more info |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotNewBusinessMessage(
	connection_id : '04DieKTWlC1P6GNX',
	message : $client->messageEmpty(
		id : 1,
		peer_id : $client->peerUser(
			user_id : 2681865584117716309,
		),
	),
	reply_to_message : $client->messageEmpty(
		id : 97,
		peer_id : $client->peerUser(
			user_id : -3799661625496664252,
		),
	),
	qts : 93,
);
```