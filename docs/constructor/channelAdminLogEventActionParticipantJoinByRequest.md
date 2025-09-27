# channelAdminLogEventActionParticipantJoinByRequest

**Description** : *A new member was accepted to the chat by an admin*

**Layer** : 216

```tl
channelAdminLogEventActionParticipantJoinByRequest#afb6144a invite:ExportedChatInvite approved_by:long = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | The invite link that was used to join the chat |
| <mark>approved_by</mark> | [`long`](type/long) | ID of the admin that approved the invite |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionParticipantJoinByRequest(
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : '0kx57QG2lZLU4FrA',
		admin_id : 7595053932227043823,
		date : 4,
		start_date : 56,
		expire_date : 68,
		usage_limit : 54,
		usage : 96,
		requested : 25,
		subscription_expired : 64,
		title : 'c82Fywkm1WaEVTBQ',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 28,
			amount : 9172246257698833758,
		),
	),
	approved_by : -5451429757649031251,
);
```