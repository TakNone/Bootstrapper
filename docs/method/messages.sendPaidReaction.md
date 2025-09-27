# messages.sendPaidReaction

**Description** : *Sends one or more paid Telegram Star reactions &raquo;, transferring Telegram Stars &raquo; to a channel&#039;s balance*

**Layer** : 214

```tl
messages.sendPaidReaction#58bbcb50 flags:# peer:InputPeer msg_id:int count:int random_id:long private:flags.0?PaidReactionPrivacy = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The channel |
| <mark>msg_id</mark> | [`int`](type/int) | The message to react to |
| <mark>count</mark> | [`int`](type/int) | The number of stars to send (each will increment the reaction counter by one) |
| <mark>random_id</mark> | [`long`](type/long) | Unique client message ID required to prevent message resending |
| **private** | [`flags.0?PaidReactionPrivacy`](type/PaidReactionPrivacy) | Each post with star reactions has a leaderboard with the top senders, but users can opt out of appearing there if they prefer more privacy.  If the user explicitly chose to make their paid reaction(s) private, pass boolTrue to messages.sendPaidReaction.private.  If the user explicitly chose to make their paid reaction(s) private, pass boolFalse to messages.sendPaidReaction.private.  If the user did not make any explicit choice about the privacy of their paid reaction(s) (i.e. when reacting by clicking on an existing star reaction on a message), do not populate the messages.sendPaidReaction.private flag |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |

---

## Example

```php
$updates = $client->messages->sendPaidReaction(
	peer : $client->inputPeerEmpty(),
	msg_id : 86,
	count : 71,
	random_id : -9036884820340959459,
	private : $client->paidReactionPrivacyDefault(),
);
```