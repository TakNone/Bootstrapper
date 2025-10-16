# channelAdminLogEventActionParticipantJoinByInvite

**Description** : *A user joined the supergroup/channel using a specific invite link*

**Layer** : 216

```tl
channelAdminLogEventActionParticipantJoinByInvite#fe9fc158 flags:# via_chatlist:flags.0?true invite:ExportedChatInvite = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
		link : 'eubKSr8EP9AIpGDU',
		admin_id : -8050647932480808156,
		date : 35,
		start_date : 4,
		expire_date : 27,
		usage_limit : 84,
		usage : 68,
		requested : 99,
		subscription_expired : 95,
		title : 'ZKzBcF1tDru72CH4',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 45,
			amount : -4596792808671032601,
		),
	),
);
```