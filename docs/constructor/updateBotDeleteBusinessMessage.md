# updateBotDeleteBusinessMessage

**Description** : *A message was deleted in a connected business chat &raquo;*

**Layer** : 222

```tl
updateBotDeleteBusinessMessage#a02a982e connection_id:string peer:Peer messages:Vector<int> qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>connection_id</mark> | [`string`](type/string) | Business connection ID |
| <mark>peer</mark> | [`Peer`](type/Peer) | Peer where the messages were deleted |
| <mark>messages</mark> | [`Vector<int>`](type/int) | IDs of the messages that were deleted |
| <mark>qts</mark> | [`int`](type/int) | New qts value, see updates » for more info |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotDeleteBusinessMessage(
	connection_id : 'v4k90twRZ68nAMxF',
	peer : $client->peerUser(
		user_id : -2903866840085603895,
	),
	messages : array(50),
	qts : 91,
);
```