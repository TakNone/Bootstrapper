# messages.editChatParticipantRank

**Description** : *Edit a group participant&#039;s tag &raquo;*

**Layer** : 229

```tl
messages.editChatParticipantRank#a00f32b0 peer:InputPeer participant:InputPeer rank:string = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The basic group/supergroup |
| <mark>participant</mark> | [`InputPeer`](type/InputPeer) | The participant |
| <mark>rank</mark> | [`string`](type/string) | The new tag |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$updates = $client->messages->editChatParticipantRank(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	participant : $client->get_input_peer(peer : '@LiveProtoChat'),
	rank : 'iRS5qzTM9pCPwW2Q',
);
```