# ephemeral.getCallbackAnswer

**Layer** : 233

```tl
ephemeral.getCallbackAnswer#3fa464c8 flags:# peer:InputPeer id:int data:flags.1?bytes = messages.BotCallbackAnswer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>id</mark> | [`int`](type/int) | NOTHING |
| **data** | [`flags.1?bytes`](type/bytes) | NOTHING |

---

## Result

[messages.BotCallbackAnswer](type/messages.BotCallbackAnswer)

---

## Example

```php
$messagesBotCallbackAnswer = $client->ephemeral->getCallbackAnswer(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	id : 77,
	data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```