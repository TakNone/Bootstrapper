# messages.togglePaidReactionPrivacy

**Description** : *Changes the privacy of already sent paid reactions on a specific message*

**Layer** : 216

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

---

## Example

```php
$bool = $client->messages->togglePaidReactionPrivacy(
	peer : $client->inputPeerEmpty(),
	msg_id : 63,
	private : $client->paidReactionPrivacyDefault(),
);
```