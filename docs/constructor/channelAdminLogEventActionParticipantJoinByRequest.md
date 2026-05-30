# channelAdminLogEventActionParticipantJoinByRequest

**Description** : *A new member was accepted to the chat by an admin*

**Layer** : 222

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
		link : 'mxtW7FIgjYZwN8TU',
		admin_id : -1759125618473367533,
		date : 89,
		start_date : 100,
		expire_date : 20,
		usage_limit : 12,
		usage : 100,
		requested : 77,
		subscription_expired : 53,
		title : 'Yxe31VgIBvLh5yJZ',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 31,
			amount : -8593649136309414705,
		),
	),
	approved_by : -5848290292983663987,
);
```