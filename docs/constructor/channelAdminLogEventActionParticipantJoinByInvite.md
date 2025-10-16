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
		link : 'gxhi03E7zFLNbDWS',
		admin_id : 3577048094126385677,
		date : 67,
		start_date : 35,
		expire_date : 89,
		usage_limit : 94,
		usage : 90,
		requested : 50,
		subscription_expired : 46,
		title : 'POw5iQHDr37jpEgW',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 56,
			amount : -1110395624497169434,
		),
	),
);
```