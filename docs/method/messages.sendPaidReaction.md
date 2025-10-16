# messages.sendPaidReaction

**Description** : *Sends one or more paid Telegram Star reactions &raquo;, transferring Telegram Stars &raquo; to a channel&#039;s balance*

**Layer** : 216

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
| <mark>random_id</mark> | [`long`](type/long) | Unique client message ID required to prevent message resending. Note: this argument must be composed of a 64-bit integer where the lower 32 bits are random, and the higher 32 bits are equal to the current unixtime, i.e. uint64_t random_id = (time() << 32) | ((uint64_t)random_uint32_t()): this differs from the random_id format of all other methods in the API, which just take 64 random bits |
| **private** | [`flags.0?PaidReactionPrivacy`](type/PaidReactionPrivacy) | Each post with star reactions has a leaderboard with the top senders, but users can opt out of appearing there if they prefer more privacy. Not populating this field will use the default reaction privacy, stored on the server and synced to clients using updatePaidReactionPrivacy (see here for more info) |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BALANCE_TOO_LOW** | `400` | The transaction cannot be completed because the current Telegram Stars balance is too low |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **RANDOM_ID_EMPTY** | `400` | Random ID empty |
| **RANDOM_ID_EXPIRED** | `400` | The specified random_id was expired (most likely it didn't follow the required uint64_t random_id = (time() << 32) | ((uint64_t)random_uint32_t()) format, or the specified time is too far in the past) |
| **REACTIONS_COUNT_INVALID** | `400` | The specified number of reactions is invalid |
| **SEND_AS_PEER_INVALID** | `400` | You can't send messages as the specified peer |

---

## Example

```php
$updates = $client->messages->sendPaidReaction(
	peer : $client->inputPeerEmpty(),
	msg_id : 32,
	count : 27,
	random_id : -3085101387303908368,
	private : $client->paidReactionPrivacyDefault(),
);
```