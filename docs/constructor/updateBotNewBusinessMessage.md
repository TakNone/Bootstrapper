# updateBotNewBusinessMessage

**Description** : *A message was received via a connected business chat &raquo;*

**Layer** : 222

```tl
updateBotNewBusinessMessage#9ddb347c flags:# connection_id:string message:Message reply_to_message:flags.0?Message qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	connection_id : 'oAKa58stFSQJwY32',
	message : $client->messageEmpty(
		id : 91,
		peer_id : $client->peerUser(
			user_id : 8475184334962449368,
		),
	),
	reply_to_message : $client->messageEmpty(
		id : 45,
		peer_id : $client->peerUser(
			user_id : 3039892337999111174,
		),
	),
	qts : 79,
);
```