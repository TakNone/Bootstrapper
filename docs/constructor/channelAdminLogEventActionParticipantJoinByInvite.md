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
		link : 's0tExfQVPD2IyaWj',
		admin_id : -5916590305153520096,
		date : 11,
		start_date : 3,
		expire_date : 39,
		usage_limit : 43,
		usage : 60,
		requested : 3,
		subscription_expired : 33,
		title : 'tF21OGaYTxlwA3M4',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 51,
			amount : 8325327057493335847,
		),
	),
);
```