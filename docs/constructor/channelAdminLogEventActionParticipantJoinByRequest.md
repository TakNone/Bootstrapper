# channelAdminLogEventActionParticipantJoinByRequest

**Description** : *A new member was accepted to the chat by an admin*

**Layer** : 211

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
		link : 'iFLuTAOnJZY2GSqe',
		admin_id : 6831815775473714492,
		date : 36,
		start_date : 90,
		expire_date : 68,
		usage_limit : 50,
		usage : 56,
		requested : 14,
		subscription_expired : 92,
		title : 'svOR8ZWfwUezyNXL',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 32,
			amount : 8712225033500560713,
		),
	),
	approved_by : -5040158661495954485,
);
```