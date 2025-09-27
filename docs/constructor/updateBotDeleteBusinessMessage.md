# updateBotDeleteBusinessMessage

**Description** : *A message was deleted in a connected business chat &raquo;*

**Layer** : 214

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
	connection_id : 'WjFLwHA6yudzPDTg',
	peer : $client->peerUser(
		user_id : 3481654505693870390,
	),
	messages : array(49),
	qts : 34,
);
```