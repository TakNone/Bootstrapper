# messages.editChatParticipantRank

**Layer** : 227

```tl
messages.editChatParticipantRank#a00f32b0 peer:InputPeer participant:InputPeer rank:string = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>participant</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>rank</mark> | [`string`](type/string) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->messages->editChatParticipantRank(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	participant : $client->get_input_peer(peer : '@LiveProtoChat'),
	rank : 'CY25k9uqyZagNG8f',
);
```