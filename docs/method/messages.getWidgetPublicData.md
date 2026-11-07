# messages.getWidgetPublicData

**Layer** : 233

```tl
messages.getWidgetPublicData#6fc53181 peer:InputPeer msg_id:int hash:long = messages.WidgetPublicData;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>msg_id</mark> | [`int`](type/int) | NOTHING |
| <mark>hash</mark> | [`long`](type/long) | NOTHING |

---

## Result

[messages.WidgetPublicData](type/messages.WidgetPublicData)

---

## Example

```php
$messagesWidgetPublicData = $client->messages->getWidgetPublicData(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 39,
	hash : 0,
);
```