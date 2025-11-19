# channelAdminLogEventActionParticipantJoinByRequest

**Description** : *A new member was accepted to the chat by an admin*

**Layer** : 218

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
		link : 'xEwIYzvJ9F5qUiur',
		admin_id : 7340503871233693342,
		date : 37,
		start_date : 92,
		expire_date : 31,
		usage_limit : 3,
		usage : 49,
		requested : 26,
		subscription_expired : 85,
		title : 'P9UbI1iHG5qmOWDN',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 20,
			amount : -3561516090980548861,
		),
	),
	approved_by : 1783348830212003378,
);
```