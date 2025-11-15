# account.toggleNoPaidMessagesException

**Description** : *Allow a user to send us messages without paying if paid messages &raquo; are enabled*

**Layer** : 218

```tl
account.toggleNoPaidMessagesException#fe2eda76 flags:# refund_charged:flags.0?true require_payment:flags.2?true parent_peer:flags.1?InputPeer user_id:InputUser = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **refund_charged** | [`flags.0?true`](type/true) | If set and require_payment is not set, refunds the amounts the user has already paid us to send us messages (directly or via a monoforum) |
| **require_payment** | [`flags.2?true`](type/true) | If set, requires the user to pay in order to send us messages. Can only be set by monoforums, not users, i.e. parent_peer must be set if this flag is set; users must instead use the inputPrivacyKeyNoPaidMessages privacy setting to remove a previously added exemption. If not set, allows the user to send us messages without paying (can be unset by both monoforums and users) |
| **parent_peer** | [`flags.1?InputPeer`](type/InputPeer) | If set, applies the setting within the monoforum aka direct messages » (pass the ID of the monoforum, not the ID of the associated channel) |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | The user to exempt or unexempt |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PARENT_PEER_INVALID** | `400` | The specified parent_peer is invalid |
| **UNSUPPORTED** | `400` | require_payment cannot be set by users, only by monoforums: users must instead use the inputPrivacyKeyNoPaidMessages privacy setting to remove a previously added exemption |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$bool = $client->account->toggleNoPaidMessagesException(
	refund_charged : true,
	require_payment : true,
	parent_peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	user_id : $client->get_input_user(peer : '@TakNone'),
);
```