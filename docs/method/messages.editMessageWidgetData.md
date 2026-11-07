# messages.editMessageWidgetData

**Layer** : 233

```tl
messages.editMessageWidgetData#f624bc1e flags:# peer:InputPeer id:int public_data:flags.0?string chat_data:flags.1?string = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>id</mark> | [`int`](type/int) | NOTHING |
| **public_data** | [`flags.0?string`](type/string) | NOTHING |
| **chat_data** | [`flags.1?string`](type/string) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->messages->editMessageWidgetData(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	id : 17,
	public_data : 'rH1UGmsC2tRPM3cp',
	chat_data : 'fepbhGQxntJXaNRL',
);
```