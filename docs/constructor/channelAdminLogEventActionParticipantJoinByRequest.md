# channelAdminLogEventActionParticipantJoinByRequest

**Description** : *A new member was accepted to the chat by an admin*

**Layer** : 225

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
		link : '0xPNhAIZaR8CBdcU',
		admin_id : 7953746503209908815,
		date : 91,
		start_date : 8,
		expire_date : 64,
		usage_limit : 62,
		usage : 81,
		requested : 5,
		subscription_expired : 51,
		title : '3Uyp9B1ClYvLdqH7',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 78,
			amount : -2418769564899196060,
		),
	),
	approved_by : -2871898685277487120,
);
```