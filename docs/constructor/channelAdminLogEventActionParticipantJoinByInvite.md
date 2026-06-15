# channelAdminLogEventActionParticipantJoinByInvite

**Description** : *A user joined the supergroup/channel using a specific invite link*

**Layer** : 227

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
		link : 'YqIs0Lxe9afMRpmB',
		admin_id : -5974272381215447764,
		date : 93,
		start_date : 46,
		expire_date : 23,
		usage_limit : 58,
		usage : 83,
		requested : 68,
		subscription_expired : 16,
		title : 'in7srop5NPD0ufZL',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 74,
			amount : -800347532337078179,
		),
	),
);
```