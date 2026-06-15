# channelAdminLogEventActionParticipantJoinByRequest

**Description** : *A new member was accepted to the chat by an admin*

**Layer** : 227

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
		link : 'Y53kdpTfMDLZQ0bB',
		admin_id : 7841625502451556268,
		date : 35,
		start_date : 82,
		expire_date : 99,
		usage_limit : 67,
		usage : 52,
		requested : 81,
		subscription_expired : 87,
		title : '5IVisGqHN70eny8Q',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 62,
			amount : -3013165001798283335,
		),
	),
	approved_by : -6313974574498152560,
);
```