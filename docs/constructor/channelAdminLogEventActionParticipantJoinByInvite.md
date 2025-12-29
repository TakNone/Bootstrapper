# channelAdminLogEventActionParticipantJoinByInvite

**Description** : *A user joined the supergroup/channel using a specific invite link*

**Layer** : 218

```tl
channelAdminLogEventActionParticipantJoinByInvite#fe9fc158 flags:# via_chatlist:flags.0?true invite:ExportedChatInvite = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **via_chatlist** | [`flags.0?true`](type/true) | The participant joined by importing a chat folder deep link » |
| <mark>invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | The invite link used to join the supergroup/channel |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionParticipantJoinByInvite(
	via_chatlist : true,
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : '98IzhCQ6aidVul0D',
		admin_id : -1939061099322814882,
		date : 72,
		start_date : 62,
		expire_date : 48,
		usage_limit : 2,
		usage : 100,
		requested : 12,
		subscription_expired : 20,
		title : 'a0BcUYdLCIVOwAlT',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 31,
			amount : 5108118747810028923,
		),
	),
);
```