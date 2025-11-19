# messages.togglePaidReactionPrivacy

**Description** : *Changes the privacy of already sent paid reactions on a specific message*

**Layer** : 218

```tl
messages.togglePaidReactionPrivacy#435885b5 peer:InputPeer msg_id:int private:PaidReactionPrivacy = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The channel |
| <mark>msg_id</mark> | [`int`](type/int) | The ID of the message to which we sent the paid reactions |
| <mark>private</mark> | [`PaidReactionPrivacy`](type/PaidReactionPrivacy) | If true, makes the current anonymous in the top sender leaderboard for this message; otherwise, does the opposite |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **REACTION_EMPTY** | `400` | Empty reaction provided |

---

## Example

```php
$bool = $client->messages->togglePaidReactionPrivacy(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 92,
	private : $client->paidReactionPrivacyDefault(),
);
```