# messages.exportChatInvite

**Description** : *Export an invite link for a chat*

**Layer** : 214

```tl
messages.exportChatInvite#a455de90 flags:# legacy_revoke_permanent:flags.2?true request_needed:flags.3?true peer:InputPeer expire_date:flags.0?int usage_limit:flags.1?int title:flags.4?string subscription_pricing:flags.5?StarsSubscriptionPricing = ExportedChatInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **legacy_revoke_permanent** | [`flags.2?true`](type/true) | Legacy flag, reproducing legacy behavior of this method: if set, revokes all previous links before creating a new one. Kept for bot API BC, should not be used by modern clients |
| **request_needed** | [`flags.3?true`](type/true) | Whether admin confirmation is required before admitting each separate user into the chat |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Chat |
| **expire_date** | [`flags.0?int`](type/int) | Expiration date |
| **usage_limit** | [`flags.1?int`](type/int) | Maximum number of users that can join using this link |
| **title** | [`flags.4?string`](type/string) | Description of the invite link, visible only to administrators |
| **subscription_pricing** | [`flags.5?StarsSubscriptionPricing`](type/StarsSubscriptionPricing) | For Telegram Star subscriptions », contains the pricing of the subscription the user must activate to join the private channel |

---

## Result

[ExportedChatInvite](type/ExportedChatInvite)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **EXPIRE_DATE_INVALID** | `400` | The specified expiration date is invalid |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **PRICING_CHAT_INVALID** | `400` | The pricing for the subscription is invalid, the maximum price is specified in the stars_subscription_amount_max config key » |
| **SUBSCRIPTION_PERIOD_INVALID** | `400` | The specified subscription_pricing.period is invalid |
| **USAGE_LIMIT_INVALID** | `400` | The specified usage limit is invalid |

---

## Example

```php
$exportedChatInvite = $client->messages->exportChatInvite(
	legacy_revoke_permanent : true,
	request_needed : true,
	peer : $client->inputPeerEmpty(),
	expire_date : 38,
	usage_limit : 27,
	title : 'VxQMKONf0yJp2uYt',
	subscription_pricing : $client->starsSubscriptionPricing(
		period : 8,
		amount : 166949380881865390,
	),
);
```